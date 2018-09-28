angular.module("maquina_de_energia", []);
angular.module('maquina_de_energia').controller('login_controller', ['login_service', function ( login_service) {

    login_service.doLogin('angular funcionando porra')

}]);