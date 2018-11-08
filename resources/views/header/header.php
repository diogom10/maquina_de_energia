<!DOCTYPE html>
<html lang="pt-br" ng-app="maquina_de_energia">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css"
          integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= url('/') . CSS . 'global/global.css' ?>">
    <link rel="stylesheet" href="<?= url('/') . CSS . 'header/header.css' ?>">
    <link rel="stylesheet" href="<?= url('/') . CSS . 'footer/footer.css' ?>">


    <?php
    if (isset($css)) {
        if (count($css) > 0) {
            foreach ($css as $c) {
                if (!empty($c)) {
                    ?>
                    <link rel="stylesheet" href="<?= $c ?>">
                    <?php
                }
            }
        }
    }
    ?>


</head>
<body>

<?php if ($active_header) { ?>
<div ng-controller="header_controller">
    <div class="header">
        <div class="wrapper">
            <div class="content">
                <div class="list-icons start">
                    <div class="container-icons" ng-click="moveSideBar()">
                        <svg class="image-icons">
                            <use class="svg" xlink:href="<?= url('/') . SVG . "bars-solid.svg#Layer_1" ?>"></use>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="image-logo"
                     style="background-image : url(<?= url('/') . IMAGE_DEFAULT . "logo.png" ?>)"></div>
            </div>
            <div class="content">
                <div class="list-icons">
                    <div class="container-icons">
                        <svg class="image-icons">
                            <use xlink:href="<?= url('/') . SVG . "home-solid.svg#Layer_1" ?>"></use>
                        </svg>
                    </div>
                    <div class="container-icons">
                        <svg class="image-icons">
                            <use xlink:href="<?= url('/') . SVG . "medidor-solid.svg#Layer_1" ?>"></use>
                        </svg>
                    </div>
                    <div class="container-icons">
                        <svg class="image-icons">
                            <use xlink:href="<?= url('/') . SVG . "list.svg#Layer_1" ?>"></use>
                        </svg>
                    </div>
                    <div class="container-icons">
                        <svg class="image-icons">
                            <use xlink:href="<?= url('/') . SVG . "user-regular.svg#Layer_1" ?>"></use>
                        </svg>
                    </div>
                    <!--                    <div class="container-icons">-->
                    <!--                        <svg class="image-icons">-->
                    <!--                            <use xlink:href="-->
                    <? //= url('/') . SVG . "cogs-solid.svg#Layer_1" ?><!--"></use>-->
                    <!--                        </svg>-->
                    <!--                    </div>-->
                </div>
            </div>
        </div>
    </div>
    <div class="side-bar" id="side">
        <div class=" container-side">
            <div class="close"  ng-click="moveSideBar()">
                <i class="fas fa-times"></i>
            </div>
            <div class="container-list">
                <span class="title">Meu Perfil</span>
                <ul class=" style-list">
                    <li class="topic-style">Minha Conta</li>
                    <li class="topic-style">Meu Perfil</li>
                    <li class="topic-style">Editar Perfil</li>
                </ul>
            </div>


            <div class="container-list">
                <span class="title">Gerenciar Aparelhos</span>
                <ul class=" style-list">
                    <li class="topic-style">Ver Todos Aparelhos</li>
                    <li class="topic-style">Cadastrar Aparelhos</li>
                    <li class="topic-style">Vizualizar Relatorios</li>
                </ul>
            </div>


            <div class="container-list">
                <span class="title">SIGERE!</span>
                <ul class=" style-list">
                    <li class="topic-style">Sobre o Sistema</li>
                    <li class="topic-style">Central de Ajuda (FAQ)</li>
                    <li class="topic-style">Relatar Problemas</li>
                    <li class="topic-style">Sair</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="header-mobile" ng-if="!side">
        <div class="wrapper">
            <div class="content">
                <div class="list-icons">
                    <div class="container-icons">
                        <svg class="image-icons">
                            <use xlink:href="<?= url('/') . SVG . "list.svg#Layer_1" ?>"></use>
                        </svg>
                    </div>
                    <div class="container-icons">
                        <svg class="image-icons">
                            <use xlink:href="<?= url('/') . SVG . "medidor-solid.svg#Layer_1" ?>"></use>
                        </svg>
                    </div>
                    <div class="container-icons">
                        <svg class="image-icons">
                            <use xlink:href="<?= url('/') . SVG . "home-solid.svg#Layer_1" ?>"></use>
                        </svg>
                    </div>
                    <div class="container-icons">
                        <svg class="image-icons">
                            <use xlink:href="<?= url('/') . SVG . "user-regular.svg#Layer_1" ?>"></use>
                        </svg>
                    </div>

                    <div class="container-icons" ng-click="moveSideBar()">
                        <svg class="image-icons">
                            <use xlink:href="<?= url('/') . SVG . "cogs-solid.svg#Layer_1" ?>"></use>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>