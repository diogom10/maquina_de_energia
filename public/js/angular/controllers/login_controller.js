angular.module("maquina_de_energia", []);
angular.module('maquina_de_energia').controller('login_controller', ['login_service', '$scope', function (login_service, $scope) {


    $scope.login = true;
    $scope.cadastro = false;

    $scope.user = {
        user_name: '',
        user_email: '',
        user_pass: '',
        user_cpf: '',
        user_estado: '',
    };

    $scope.login_data = {
        user_name: '',
        user_pass: '',
        isMobile:false
    };

    $scope.setCadastro = function () {

        login_service.insert($scope.user).then(function (response) {
            console.log(response.data)
        }).catch(function (response) {
            console.log(response)
        }).finally(function () {
            console.log("finally finished gists");
        });
    };


    $scope.login = function () {

        login_service.doLogin($scope.login_data).then(function (response) {
            console.log(response.data)
        }).catch(function (response) {
            console.log(response)
        }).finally(function () {
            console.log("finally finished gists");
        });
    };


    $scope.toCadastro = function () {
        // var element = angular.element(document.querySelector('.container'));
        // console.log(element.hide());
        $scope.cadastro = true;
        $scope.login = false;
    };

    $scope.toLogin = function () {
        // var element = angular.element(document.querySelector('.container'));
        // console.log(element.hide());
        $scope.cadastro = false;
        $scope.login = true;
    }
}]);

