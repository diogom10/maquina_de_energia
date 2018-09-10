<!DOCTYPE html>
<html lang="pt-br">
<head>

    <link rel="stylesheet" href="<?= url('/').CSS.'global/global.css'?>">
    <link rel="stylesheet" href="<?= url('/').CSS.'header/header.css'?>">
    <link rel="stylesheet" href="<?= url('/').CSS.'footer/footer.css'?>">

    <?php
    /* Verify if exists assets in css */
    if (count($css) > 0) {
        /* Foreach to read all of assets with extensions "CSS" */
        foreach ($css as $c) {
            if (!empty($c)) {
                ?>
                <link rel="stylesheet" href="<?= $c ?>">
                <?php
            }
        }/* End to foreach of CSS assets  */
    }
    ?>


</head>
<body>

