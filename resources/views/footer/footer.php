
<script src="<?= url('/').JS_LIB.'angular.min.js'?>" type="text/javascript"></script>
<script src="<?= url('/').JS_LIB.'jquery-3.3.1.min.js'?>" type="text/javascript"></script>

<!-- Firebase App is always required and must be first -->
<script src="https://www.gstatic.com/firebasejs/5.5.2/firebase-app.js"></script>

<!-- Add additional services that you want to use -->
<script src="https://www.gstatic.com/firebasejs/5.5.2/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.2/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.2/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.2/firebase-messaging.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.2/firebase-functions.js"></script>

<!-- Comment out (or don't include) services that you don't want to use -->
<!-- <script src="https://www.gstatic.com/firebasejs/5.5.2/firebase-storage.js"></script> -->
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


<input type="hidden" id="base_url"  value="<?=url('/').'/'?>"/>
</body>


</html>