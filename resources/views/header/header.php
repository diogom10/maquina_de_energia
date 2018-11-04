<!DOCTYPE html>
<html lang="pt-br" ng-app="maquina_de_energia">
<head>
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
<div class="header">
    <div class="wrapper">
        <div class="content">
        </div>
        <div class="content">
            <div class="image-logo" style="background-image : url(<?= url('/') . IMAGE_DEFAULT . "logo.png" ?>)"></div>
        </div>
        <div class="content">
            <div class="list-icons">
                <div class="container-icons">
                    <div class="image-icons" style="background-image : url(<?= url('/') . SVG . "cogs-solid.svg" ?>)"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>