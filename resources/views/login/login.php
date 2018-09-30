<?= view('header/header', ['css' => $assets['css']])->render() ?>

<div ng-controller="login_controller">
    <div class="image-container"
         ng-style="{'background-image' : 'url(<?= url('/') . IMAGE_DEFAULT . 'energia2.png' ?>)'}">
        <div class="wrapper">
            <div class="header-login">
                <div class="title">
                    <span class="text-title">SIGERE</span>
                </div>
            </div>
            <div class="body-login">
                <div class="container">
                    <div class="container-header">
                        <span>Faça seu login</span>
                    </div>
                    <div class="container-input">
<!--                        <input name="email" maxlength="30" autocomplete="off" class="ipt-login" type="text">-->
<!--                        <label class="label-input" for="email">Email</label>-->
<!---->
<!--                        <input type="password" name="senha" maxlength="20" autocomplete="off" class="ipt-login"/>-->
<!--                        <label for="senha" class="label-input">Senha</label>-->

                        <div class="form-group">
                            <input type="email" name="email" maxlength="30" autocomplete="off" class="ipt-login"/>
                            <label for="email" class="form-control-placeholder">Email</label>
                        </div>
                        <div class="form-group">
                            <input type="password" name="senha" maxlength="20" autocomplete="off" class="ipt-login"/>
                            <label for="senha" class="form-control-placeholder">Senha</label>
                        </div>


                        <div class="container-buttons">
                            <button class="btn white btn-config">Entrar</button>
                            <button class="btn grey btn-config">Cadastre-se</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?= view('footer/footer', ['js' => $assets['js']])->render() ?>
