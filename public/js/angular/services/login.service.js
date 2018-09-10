angular.module('maquina_de_energia').controller('loginService', ['$http', function ($http) {
    var doLogin = function ($param) {
        $http.post('url', $param)
    };

    return {
        doLogin: doLogin
    }
}]);