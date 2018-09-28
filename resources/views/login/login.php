<?= view('header/header', ['css' => $assets['css']])->render() ?>

<div ng-controller="login_controller">
    <div class="image-container"
         ng-style="{'background-image' : 'url(<?= url('/') . IMAGE_DEFAULT . 'energia.jpg' ?>)'}">
        <div class="wrapper">
           <div class="header-login">
               <div class="title">
                   <span class="text-title">SIGERE</span>
               </div>
           </div>
            <div class="body-login">
                <div class="container">

                </div>
            </div>
        </div>
    </div>
</div>

<?= view('footer/footer', ['js' => $assets['js']])->render() ?>
