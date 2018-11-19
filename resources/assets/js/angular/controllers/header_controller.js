//
// import Constants from '../../Constants'
//

angular.module("maquina_de_energia", []);
angular.module('maquina_de_energia').controller('header_controller', ['header_service', '$scope', '$window', 'config', function (header_service, $scope, $window, config) {
    $scope.base_url = document.getElementById("base_url").value;
    $scope.screenWidth = document.documentElement.clientWidth;
    $scope.scrollBar = "";
    $scope.icons = [
        {icon: config.IMAGE.SVG + "home-solid.svg#Layer_1", active: false, name: "home"},
        {icon: config.IMAGE.SVG + "medidor-solid.svg#Layer_1", active: false, name: "painel"},
        {icon: config.IMAGE.SVG + "list.svg#Layer_1", active: false, name: "relatorios"},
        {icon: config.IMAGE.SVG + "user-regular.svg#Layer_1", active: false, name: "profile"},
    ];

    $scope.validateMenu = (() => {
        let base = document.URL.split("/").pop();
        $scope.icons.forEach((value, index) => {
            if (value.name === base) {
                value.active = true;
            }
        });
        console.log($scope.icons);
    });


    $scope.validateMenu();

    /*abre ou fecha a side bar*/
    $scope.side = false;
    $scope.moveSideBar = (() => {
        $scope.side = !$scope.side;

        if ($scope.side) {
            document.getElementById('side').style.left = "0px"
        } else {
            document.getElementById('side').style.left = "-1025px";
        }
    });
    /*abre ou fecha a side bar*/


    $scope.logout = (() => {
        header_service.doLogout(true).then((response) => {
            let resposta = response.data;
            if (resposta.success) {
                window.location.replace($scope.base_url + 'login');
            }
        }).catch((error) => {

        })

    })

    $scope.redirectPage = ((page) => {
        window.location.replace(page);
    })
}]);

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