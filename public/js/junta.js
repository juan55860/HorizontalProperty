var app = angular.module("multifundadores", ["ngTable"]);

app.service('TableService', function ($http, $filter) {

    function filterData(data, filter){
        return $filter('filter')(data, filter)
    }

    function orderData(data, params){
        return params.sorting() ? $filter('orderBy')(data, params.orderBy()) : filteredData;
    }

    function sliceData(data, params){
        return data.slice((params.page() - 1) * params.count(), params.page() * params.count())
    }

    function transformData(data,filter,params){
        return sliceData( orderData( filterData(data,filter), params ), params);
    }
    var service = {
        cachedData:[],
        getTable:function($defer, params, filter, data){

            if(service.cachedData.length>0){
                service.cachedData = data;
                var filteredData = filterData(service.cachedData,filter);
                var transformedData = sliceData(orderData(filteredData,params),params);
                params.total(filteredData.length)
                $defer.resolve(transformedData);
            }
            else
            {
                angular.copy(data,service.cachedData)
                params.total(data.length)
                var filteredData = $filter('filter')(data, filter);
                var transformedData = transformData(data,filter,params)
                $defer.resolve(transformedData);
            }
        }
    };
    return service;

});

app.config(["$routeProvider", function($router)
{
    $router
        .when("/propietario", {
            templateUrl: "/templates/junta/propietarios/list.html"
        })
        .when("/recaudos", {
            templateUrl: "/templates/junta/recaudos/index.html"
        })
        .when("/egresos", {
            templateUrl: "/templates/egresos/index.html"
        })
        .when("/pagos", {
            templateUrl: "/templates/pagos/index.html"
        })
        .when("/pago/profile/:id", {
            templateUrl: "/templates/pagos/profile.html"
        })
        .otherwise({
            redirectTo: '/recaudos'
        });
}]);

app.controller("PropietarioController", [
    '$scope', '$http', '$filter', 'ngTableParams', 'TableService', '$timeout', function($scope, $http, $filter, ngTableParams, TableService, $timeout)
    {
        $scope.propietarios = [], $scope.total=0, $scope.propietarioEditar= {}, $scope.propietarioBorrar ={};

        $scope.listar = function(page)
        {
            $http.get('/propietarios/listar')
                .success(function(data, status, headers, config)
                {
                    $scope.propietarios = $scope.propietarios.concat(data);
                    $scope.total=$scope.propietarios.length;
                    $scope.tableParams = new ngTableParams({page:1, count:10, sorting: { id: 'asc'}}, {
                        total: $scope.propietarios.length,
                        getData: function($defer, params)
                        {
                            TableService.getTable($defer,params,$scope.filter, $scope.propietarios);
                        }
                    });
                    $scope.tableParams.reload();
                    $scope.$watch("filter.$", function () {
                        $scope.tableParams.reload();
                    });
                });
        };
        $scope.listar();
    }]);

app.controller("RecaudoController", [
    '$scope', '$http', '$filter', 'ngTableParams', 'TableService', '$timeout', function($scope, $http, $filter, ngTableParams, TableService, $timeout)
    {
        $scope.propietarios = [], $scope.total=0, $scope.propietarioPago= {}, $scope.pagorealizado = {};

        $scope.listar = function(page)
        {
            $http.get('/propietarios/cobro/admin/pendientes')
                .success(function(data, status, headers, config)
                {
                    $scope.propietarios = $scope.propietarios.concat(data);
                    $scope.total=$scope.propietarios.length;
                    $scope.tableParams = new ngTableParams({page:1, count:10, sorting: { id: 'asc'}}, {
                        total: $scope.propietarios.length,
                        getData: function($defer, params)
                        {
                            TableService.getTable($defer,params,$scope.filter, $scope.propietarios);
                        }
                    });
                    $scope.tableParams.reload();
                    $scope.$watch("filter.$", function () {
                        $scope.tableParams.reload();
                    });
                });
        };
        $scope.listar();

        $scope.cargarPago = function(propietario)
        {
            $scope.propietarioPago = propietario;
            $scope.propietario = {};
        };

        $scope.realizarPago = function()
        {
            $http({
                method: 'POST',
                url: '/propietarios/abonar',
                data: $scope.propietarioPago,
            })
                .success(function(data, status, headers, config)
                {
                    console.log('data', data);
                    $scope.pagorealizado= data;

                    $scope.cerrarModalPago();

                    $scope.abrirModalCargoAbono();
                })
                .error(function(error, status, headers, config)
                {
                    console.log('error', error)
                    alert(error["message"])
                    window.location.reload();
                });
        };

        $scope.deshacerAbono = function()
        {
            $scope.deshacerPago = {pago_id : $scope.pagorealizado.factura.id, abono_id : $scope.pagorealizado.abono.id };

            $http({
                method: 'POST',
                url: '/propietarios/deshacer/abono',
                data: $scope.deshacerPago,
            })
                .success(function(data, status, headers, config)
                {
                    alert("El abono fue deshecho, no se realizo el pago");
                    console.log('data', data);
                })
                .error(function(error, status, headers, config)
                {
                    console.log('error', error)
                    alert(error["message"])
                    window.location.reload();
                });
        };

        $scope.verConfirmacion = function()
        {
            verConfirmacion();
        };

        $scope.cerrarModalPago = function()
        {
            cerrarModalPago()
        };

        $scope.abrirModalCargoAbono = function()
        {
            abrirModalCargoAbono()
        };
    }]);

app.controller("OperacionesController", ['$scope', '$http', function($scope, $http)
{
    $scope.realizarCobroAdmin = function ()
    {
        closeModal('cobrosAdmin');
        $http.post('/propietarios/cobro/admin')
            .success(function(data, status, headers, config)
            {
                alert('Se cargaron los cobros de adminsitración correctamente')
            })
            .error(function(error, status, headers, config)
            {
                alert(error["message"])
            });
    }
}]);

app.controller("EgresosController", ['$scope', '$http', function($scope, $http)
{
    $scope.realizarCobroAdmin = function ()
    {
        closeModal('cobrosAdmin');
        $http.post('/propietarios/cobro/admin')
            .success(function(data, status, headers, config)
            {
                alert('Se cargaron los cobros de adminsitración correctamente')
            })
            .error(function(error, status, headers, config)
            {
                alert('Hubo un error')
            });
    };
}]);

app.controller("PagosController", [
    '$scope', '$http', '$filter', 'ngTableParams', 'TableService', '$timeout', function($scope, $http, $filter, ngTableParams, TableService, $timeout)
    {
        $scope.pagos = [], $scope.total=0;

        $scope.listar = function(page)
        {
            $http.get('/propietarios/pagos/relizados')
                .success(function(data, status, headers, config)
                {
                    $scope.pagos = $scope.pagos.concat(data);
                    $scope.total=$scope.pagos.length;
                    $scope.tableParams = new ngTableParams({page:1, count:10, sorting: { id: 'asc'}}, {
                        total: $scope.pagos.length,
                        getData: function($defer, params)
                        {
                            TableService.getTable($defer,params,$scope.filter, $scope.pagos);
                        }
                    });
                    $scope.tableParams.reload();
                    $scope.$watch("filter.$", function () {
                        $scope.tableParams.reload();
                    });
                });
        };
        $scope.listar();
    }]);

app.controller("PagoProfile",['$scope', '$http', '$filter', 'ngTableParams', 'TableService', '$timeout','$routeParams', function($scope, $http, $filter, ngTableParams, TableService, $timeout, $params)
{
    $scope.abonos = [], $scope.total=0;
    $scope.listar = function(page)
    {
        $http.get('/propietarios/abonos/pago/'+$params.id)
            .success(function(data, status, headers, config)
            {
                $scope.abonos = $scope.abonos.concat(data);
                $scope.total=$scope.abonos.length;
                $scope.tableParams = new ngTableParams({page:1, count:10, sorting: { id: 'asc'}}, {
                    total: $scope.abonos.length,
                    getData: function($defer, params)
                    {
                        TableService.getTable($defer,params,$scope.filter, $scope.abonos);
                    }
                });
                $scope.tableParams.reload();
                $scope.$watch("filter.$", function () {
                    $scope.tableParams.reload();
                });
            });
    };
    $scope.listar();
}]);


function cerrarModalPago()
{
    $('#pagoPropietario').modal('hide');
}

function abrirModalCargoAbono()
{
    $('#cargoAbono').modal('show');
}

function verConfirmacion()
{
    $('#cargoAbono').modal('hide');
    alert("Se realizó el pago satisfactoriamente")
    window.location.reload();
}
