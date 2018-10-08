<!DOCTYPE html>
<html lang="pt-br" ng-app="maquina_de_energia">
<head>

    <link rel="stylesheet" href="<?= url('/').CSS.'global/global.css'?>">
    <link rel="stylesheet" href="<?= url('/').CSS.'header/header.css'?>">
    <link rel="stylesheet" href="<?= url('/').CSS.'footer/footer.css'?>">

    <?php
    if(isset($css)) {
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
