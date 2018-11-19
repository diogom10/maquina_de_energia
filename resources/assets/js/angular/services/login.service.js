angular.module('maquina_de_energia').service('login_service', ['$http', function ($http) {

    var base_url = document.getElementById("base_url").value;

    var insert = function (params) {
        return $http.post(base_url + 'insert', params)
    };
    var doLogin = function (params) {
        return $http.post(base_url + 'doLogin', params)
    };
    return {
        doLogin: doLogin,
        insert: insert,
    };

}]);


