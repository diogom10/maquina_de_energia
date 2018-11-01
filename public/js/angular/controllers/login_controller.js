//
// import Constants from '../../Constants'
//

angular.module("maquina_de_energia", []);
angular.module('maquina_de_energia').controller('login_controller', ['login_service', '$scope', '$window', 'config', function (login_service, $scope, $window, config) {
    let base_url = document.getElementById("base_url").value;

    // firebase.initializeApp(config.CONFIG_FIREBASE)
    // $scope.db = firebase.firestore();
    //
    // $scope.login = true;
    // $scope.cadastro = false;
    //
    // // $scope.db.collection("users").get().then(function (docRef) {
    // //     docRef.forEach(function(doc)  {
    // //         console.log(doc.data());
    // //     });
    // // }).catch(function (error) {
    // //     console.error("Error adding document: ", error);
    // // });
    //
    // $scope.db.collection("users").doc("BUd3dTio90WhU54rFLkk09KATSa2").onSnapshot((doc) => {
    //     console.log("Atualizou", doc.data());
    // });

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
    $scope.setCadastro = ()=>{
        $scope.load.cadastro = true;
        login_service.insert($scope.user).then((response)=>  {
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

        }).catch((response)=>    {
            console.log(response)
            $scope.load.cadastro = false;
        }).finally(()=>    {
            console.log("finally finished gists");
        });
    };


    $scope.login = ()=> {
        $scope.load.login = true;
        login_service.doLogin($scope.login_data).then( (response) => {
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
        }).catch( (response)=> {
            console.log(response);
            $scope.load.login = false;
        }).finally(()=>   {
            console.log("finally finished gists");
        });
    };


    $scope.toCadastro =  ()=> {
        $scope.user = {
            user_name: '',
            user_email: '',
            user_pass: '',
            user_cpf: '',
            user_estado: '',
            isMobile: false
        };
        // var element = angular.element(document.querySelector('.container'));
        // console.log(element.hide());
        $scope.cadastro = true;
        $scope.login = false;
    };

    $scope.toLogin = ()=> {

        $scope.login_data = {
            user_name: '',
            user_pass: '',
            isMobile: false
        };
        $scope.cadastro = false;
        $scope.login = true;
    }


}]);

