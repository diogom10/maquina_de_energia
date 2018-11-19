angular.module('maquina_de_energia').service('header_service', ['$http', function ($http) {

    let base_url = document.getElementById("base_url").value;

    let doLogout = function (params) {
        return $http.post(base_url + 'doLogout', params)
    };
    return {
        doLogout: doLogout,
    };

}]);


