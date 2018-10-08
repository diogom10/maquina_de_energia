angular.module('maquina_de_energia').service('login_service', ['$http', function ($http) {
    var _doLogin = function (params) {
    console.log(params)
    };

    return {
        doLogin: _doLogin
    };

}]);

