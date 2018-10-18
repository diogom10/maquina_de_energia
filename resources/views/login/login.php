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
            <div class="body-login" ng-if="login">
                <div class="container">
                    <div class="container-header">
                        <span>Faça seu login</span>
                    </div>
                    <div class="container-input">
                        <form>
                            <div style="margin-top: 5%">
                                <div class="form-group">
                                    <input  ng-model="login_data.user_name" type="text" name="email" maxlength="30" autocomplete="off" required
                                           class="ipt-login"/>

                                    <label for="email" class="form-control-placeholder">Email ou Usuario</label>
                                    <label ng-show="false">Email não existe</label>

                                </div>
                            </div>
                            <div style="margin-top: 5%">
                                <div class="form-group">

                                    <input  ng-model="login_data.user_pass" type="password" name="senha" maxlength="20" autocomplete="off" required
                                           class="ipt-login"/>
                                    <label for="senha" class="form-control-placeholder">Senha </label>
                                    <label ng-show="false">Senha esta incorreta</label>
                                </div>
                            </div>

                        </form>
                        <div class="container-buttons">
                            <button ng-click="login()" class="btn white btn-config"> <label>Entrar</label> </button>
                            <button ng-click="toCadastro()" class="btn grey btn-config">Cadastre-se </button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="body-login" ng-if="cadastro">
                <div class="container-cadastro">
                    <div class="container-header">
                        <span>Faça seu Cadastro</span>
                    </div>
                    <div class="container-input-cadastro">
                        <div class="grid-cadastro t_40">
                            <div class="form-group">
                                <input type="text"  ng-model="user.user_name" name="name" maxlength="30" autocomplete="off" class="ipt-cadastro"
                                       required/>
                                <label for="name" class="form-control-placeholder">Nome</label>
                                <label ng-show="false"></label>
                            </div>
                        </div>
                        <div class="grid-cadastro t_60">
                            <div class="form-group ">
                                <input type="text"  ng-model="user.user_email"  name="email" maxlength="30" autocomplete="off" class="ipt-cadastro"
                                       required/>
                                <label for="email" class="form-control-placeholder">Email</label>
                                <label ng-show="false"></label>
                            </div>
                        </div>
                    </div>
                    <div class="container-input-cadastro">
                        <div class="grid-cadastro t_50">
                            <div class="form-group">

                                <input type="password" ng-model="user.user_pass" name="pass" maxlength="30" autocomplete="off"
                                       class="ipt-cadastro"
                                       required/>
                                <label for="pass" class="form-control-placeholder">Senha</label>
                                <label ng-show="false"></label>
                            </div>
                        </div>
                        <div class="grid-cadastro t_50">
                            <div class="form-group ">
                                <input type="password" name="pass-confirm" maxlength="30" autocomplete="off"
                                       class="ipt-cadastro"
                                       required/>
                                <label for="pass-confirm" class="form-control-placeholder">Confirme sua Senha</label>
                                <label ng-show="false"></label>
                            </div>
                        </div>
                    </div>
                    <div class="container-input-cadastro">
                        <div class="grid-cadastro t_80">
                            <div class="form-group">
                                <input type="tel" name="cpf" ng-model="user.user_cpf" maxlength="30" autocomplete="off" class="ipt-cadastro"
                                       required/>
                                <label for="cpf" class="form-control-placeholder">CPF</label>
                                <label ng-show="false"></label>
                            </div>
                        </div>
                        <div class="grid-cadastro t_20">
                            <div class="form-group ">
                                <input type="text" name="estado" ng-model="user.user_estado" maxlength="2" autocomplete="off" class="ipt-cadastro"
                                       required/>
                                <label for="estado" class="form-control-placeholder">Estado</label>
                                <label ng-show="false"></label>
                            </div>
                        </div>
                    </div>
                    <div class="container-input-cadastro">
                        <div class="grid-cadastro t_50">
                            <div class="form-group">
                                <button ng-click="toLogin()" class="btn white btn-config">Voltar</button>
                            </div>
                        </div>
                        <div class="grid-cadastro t_50">
                            <div class="form-group">
                                <button  ng-click="setCadastro()" class="btn white btn-config">Cadastrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= view('footer/footer', ['js' => $assets['js']])->render() ?>
