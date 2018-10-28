//
// import Constants from '../../Constants'
//

angular.module("maquina_de_energia", []);
angular.module('maquina_de_energia').controller('login_controller', ['login_service', '$scope', function (login_service, $scope) {
    var base_url = document.getElementById("base_url").value;

    $scope.login = true;
    $scope.cadastro = false;

    $scope.user = {
        user_name: '',
        user_email: '',
        user_pass: '',
        user_cpf: '',
        user_estado: '',
        isMobile: false
    };


    $scope.user_error = {
        user_name: '',
        user_email: '',
        user_pass: '',
        user_cpf: '',
        user_estado: '',
    };

    $scope.load = {
        login: false,
        cadastro: false,
    };

    $scope.login_data = {
        user_name: '',
        user_pass: '',
        isMobile: false
    };

    $scope.login_data_error = {
        user_name: '',
        user_pass: '',
    };
    $scope.setCadastro = function () {
        $scope.load.cadastro = true;
        login_service.insert($scope.user).then(function (response) {
            let resposta = response.data;
            $scope.load.cadastro = false;
            if (resposta.success) {
                window.location.replace(base_url + 'painel');
            } else {
                switch (resposta.type) {
                    case 'nome':
                        $scope.user_error.user_name = resposta.msg;
                        break;

                    case 'email':
                        $scope.user_error.user_email = resposta.msg;
                        break;

                    case 'interno':
                        alert(resposta.msg)
                        break;

                }
            }

        }).catch(function (response) {
            console.log(response)
            $scope.load.cadastro = false;
        }).finally(function () {
            console.log("finally finished gists");
        });
    };


    $scope.login = function () {
        $scope.load.login = true;
        login_service.doLogin($scope.login_data).then(function (response) {
            $scope.load.login = false;
            let resposta = response.data;
            if (resposta.success) {
                window.location.replace(base_url + 'painel');
            } else {
                switch (resposta.type) {
                    case 'nome':
                        $scope.login_data_error.user_name = resposta.msg;
                        break;

                    case 'senha':
                        $scope.login_data_error.user_pass = resposta.msg;
                        break;
                }
            }
        }).catch(function (response) {
            console.log(response);
            $scope.load.login = false;
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

