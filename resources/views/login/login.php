<?= view('header/header', ['css' => $assets['css'] ,'active_header'=> $assets['active_header']] )->render() ?>

<div ng-controller="login_controller">
    <div class="image-container"
         ng-style="{'background-image' : 'url(<?= url('/') . IMAGE_DEFAULT . "energia2.png" ?>)'}">
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
                            <div style="margin-top:15%">
                                <div class="form-group">
                                    <input ng-model="login_data.user_name" type="text" name="email" maxlength="30"
                                           autocomplete="off" required
                                           ng-change="login_data_error.user_name= ''"
                                           class="ipt-login"/>

                                    <label for="email" class="form-control-placeholder">Email ou Usuario</label>
                                    <label ng-show="login_data_error.user_name != ''"
                                           ng-bind="login_data_error.user_name"></label>

                                </div>
                            </div>
                            <div style="margin-top: 10%">
                                <div class="form-group">
                                    <input ng-model="login_data.user_pass" type="password" name="senha" maxlength="20"
                                           autocomplete="off" required
                                           ng-change="login_data_error.user_pass= ''"
                                           class="ipt-login"/>
                                    <label for="senha" class="form-control-placeholder">Senha </label>
                                    <label ng-show="login_data_error.user_pass != ''"
                                           ng-bind="login_data_error.user_pass"></label>
                                </div>
                            </div>

                        </form>


                        <div class="container-buttons">
                            <button ng-click="login()" class="btn white btn-config"><label>Entrar <i  ng-if="load.login" class="fas fa-circle-notch fa-spin"></i> </label></button>
                            <button ng-click="toCadastro()" class="btn grey btn-config">Cadastre-se  </button>
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
                                <input type="text" ng-model="user.user_name" name="name" maxlength="30"
                                       autocomplete="off" class="ipt-cadastro"
                                       ng-change="user_error.user_name = ''"
                                       required/>
                                <label for="name" class="form-control-placeholder">Nome</label>
                            </div>
                            <label ng-show="user_error.user_name != ''" ng-bind="user_error.user_name"></label>
                        </div>
                        <div class="grid-cadastro t_60">
                            <div class="form-group ">
                                <input type="text" ng-model="user.user_email" name="email" maxlength="30"
                                       autocomplete="off" class="ipt-cadastro"
                                       ng-change="user_error.user_email = ''"
                                       required/>
                                <label for="email" class="form-control-placeholder">Email</label>
                            </div>
                            <label ng-show="user_error.user_email != ''" ng-bind="user_error.user_email" ></label>
                        </div>
                    </div>
                    <div class="container-input-cadastro">
                        <div class="grid-cadastro t_50">
                            <div class="form-group">
                                <input type="password" ng-model="user.user_pass" name="pass" maxlength="30"
                                       autocomplete="off"
                                       class="ipt-cadastro"
                                       required/>
                                <label for="pass" class="form-control-placeholder">Senha</label>
                            </div>
                            <label ng-show="user_error.user_pass != ''" ng-bind="user_error.user_pass"></label>
                        </div>
                        <div class="grid-cadastro t_50">
                            <div class="form-group ">
                                <input type="password" name="pass-confirm" maxlength="30" autocomplete="off"
                                       class="ipt-cadastro"
                                       required/>
                                <label for="pass-confirm" class="form-control-placeholder">Confirme sua Senha</label>
                            </div>
                            <label ng-show="false"></label>
                        </div>
                    </div>
                    <div class="container-input-cadastro">
                        <div class="grid-cadastro t_80">
                            <div class="form-group">
                                <input type="tel" name="cpf" ng-model="user.user_cpf" maxlength="30" autocomplete="off"
                                       class="ipt-cadastro"
                                       required/>
                                <label for="cpf" class="form-control-placeholder">CPF</label>
                            </div>
                            <label ng-show="user_error.user_cpf!= ''" ng-bind="user_error.user_cpf"></label>
                        </div>
                        <div class="grid-cadastro t_20">
                            <div class="form-group ">
                                <input type="text" name="estado" ng-model="user.user_estado" maxlength="2"
                                       autocomplete="off" class="ipt-cadastro"
                                       required/>
                                <label for="estado" class="form-control-placeholder">Estado</label>
                            </div>
                            <label ng-show="user_error.user_estado != ''" ng-bind="user_error.user_estado"></label>
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
                                <button ng-click="setCadastro()" class="btn white btn-config">Cadastrar <i  ng-if="load.cadastro" class="fas fa-circle-notch fa-spin"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= view('footer/footer', ['js' => $assets['js']])->render() ?>
