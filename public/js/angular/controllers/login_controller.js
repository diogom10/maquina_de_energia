angular.module("maquina_de_energia", []);
angular.module('maquina_de_energia').controller('login_controller', ['login_service', '$scope', function (login_service, $scope) {

    login_service.doLogin('angular funcionando porra')
    $scope.login = true;
    $scope.cadastro = false;


    $scope.toCadastro = function () {
        // var element = angular.element(document.querySelector('.container'));
        // console.log(element.hide());
        $scope.cadastro = true;
        $scope.login = false;
    }

    $scope.toLogin= function () {
        // var element = angular.element(document.querySelector('.container'));
        // console.log(element.hide());
        $scope.cadastro = false;
        $scope.login = true;
    }
}]);

