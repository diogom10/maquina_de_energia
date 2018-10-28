<!DOCTYPE html>
<html lang="pt-br" ng-app="maquina_de_energia">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
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
