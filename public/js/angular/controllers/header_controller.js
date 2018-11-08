//
// import Constants from '../../Constants'
//

angular.module("maquina_de_energia", []);
angular.module('maquina_de_energia').controller('header_controller', ['header_service', '$scope', '$window', function (header_service, $scope, $window, config) {
    let base_url = document.getElementById("base_url").value;
    $scope.screenWidth = document.documentElement.clientWidth;
    $scope.scrollBar = "";
    // /*caso clique fora do side bar e o mesmo estiver aberto, o menu sera fechado*/
    // window.addEventListener("click", function (e) {
    //     let name = e.path[0].className;
    //     if (name === "container") {
    //         if ($scope.side) {
    //             $scope.moveSideBar();
    //         }
    //     }
    // });
    // /*caso clique fora do side bar e o mesmo estiver aberto, o menu sera fechado*/

    /*abre ou fecha a side bar*/
    $scope.side = false;
    $scope.moveSideBar = (() => {
        $scope.side = !$scope.side;
        console.log($scope.side);
        if ($scope.side) {
            document.getElementById('side').style.left = "0px"
        } else {
            // left: -1025px;
            $scope.screenWidth  < 1025 ? $scope.scrollBar = "-1025px" : $scope.scrollBar = "-600px"
            document.getElementById('side').style.left = $scope.scrollBar
        }
    })
    /*abre ou fecha a side bar*/
}]);

