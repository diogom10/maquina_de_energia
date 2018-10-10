angular.module('maquina_de_energia').service('login_service', ['$http', function ($http) {
    var base_url = document.getElementById("base_url").value;

    var doLogin = function (params) {
    };

    var insert = function (params) {
        return $http.post(base_url + 'insert', params)
    };

    return {
        doLogin: doLogin,
        insert: insert,
    };

}]);

