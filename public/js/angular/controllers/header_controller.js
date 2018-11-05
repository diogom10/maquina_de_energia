//
// import Constants from '../../Constants'
//

angular.module("maquina_de_energia", []);
angular.module('maquina_de_energia').controller('header_controller', ['header_service', '$scope', '$window', function (header_service, $scope, $window, config) {
    let base_url = document.getElementById("base_url").value;

    /*caso clique fora do side bar e o mesmo estiver aberto, o menu sera fechado*/
    window.addEventListener("click", function (e) {
        let name = e.path[0].className;
        if (name === "container") {
            if ($scope.side) {
                $scope.moveSideBar();
            }
        }
    });
    /*caso clique fora do side bar e o mesmo estiver aberto, o menu sera fechado*/

    /*abre ou fecha a side bar*/
    $scope.side = false;
    $scope.moveSideBar = (() => {
        $scope.side = !$scope.side;
        console.log($scope.side);
        if ($scope.side) {
            document.getElementById('side').style.left = "0px"
        } else {
            document.getElementById('side').style.left = "-600px"
        }
    })
    /*abre ou fecha a side bar*/
}]);

