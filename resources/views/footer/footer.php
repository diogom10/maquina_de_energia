
<script src="<?= url('/').JS_LIB.'angular.min.js'?>" type="text/javascript"></script>
<script src="<?= url('/').JS_LIB.'jquery-3.3.1.min.js'?>" type="text/javascript"></script>
<?php
if(isset($js)) {
    if (count($js) > 0) {
        foreach ($js as $j) {
            if (!empty($j)) {
                ?>
                <script src="<?= $j ?>" type="text/javascript"></script>
                <?php
            }
        }
    }
}
?>


</body>
</html>