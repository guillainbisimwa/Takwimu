<div class="login-content" >
            <!-- Login -->
            <div class="lc-block toggled" id="l-login">

                <div class="lcb-form">

                    <div class="row">
                      <div class="input-field col s12 center">
                        <img src="img/logo.png" alt="" class="circle">
                        <p class="center login-form-text">
                        Vous etes sur l'espace d'Administration 
                       </p>
                      </div>
                    </div>

                    <div class="input-group m-b-20">
                        <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                        <div class="fg-line">
                            <input type="text" id="nom_user" class="form-control" placeholder="Nom d'Utilisateur">
                        </div>
                    </div>

                    <div class="input-group m-b-20">
                        <span class="input-group-addon"><i class="zmdi zmdi-male"></i></span>
                        <div class="fg-line">
                            <input id="password_user" type="password" class="form-control" placeholder="Mots de passe">
                        </div>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="">
                            <i class="input-helper"></i>
                            Rester connecter
                        </label>
                        <span class="affreslt_aut"></span>
                    </div>

                    <button id="connexion" class="btn btn-login btn-success btn-float"><i class="zmdi zmdi-arrow-forward"></i></button>
                </div>

                <div class="lcb-navigation">
                   
                    <a href="#" data-ma-action="login-switch" data-ma-block="#l-forget-password"><i>?</i> <span>Mots de passe oublié?</span></a>
                </div>
            </div>

            <!-- Forgot Password -->
            <div class="lc-block" id="l-forget-password">
                <div class="lcb-form">
                    <p class="text-left">Mots de passe oublié? <br>
                    Veillez entrer votre adresse mail et en soumettre une demande de changement de mots de passe.</p>

                    <div class="input-group m-b-20">
                        <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                        <div class="fg-line">
                            <input type="text" class="form-control" placeholder="Email Address">
                        </div>
                    </div>

                    <a href="#" class="btn btn-login btn-success btn-float"><i class="zmdi zmdi-check"></i></a>
                </div>

                <div class="lcb-navigation">
                    <a href="#" data-ma-action="login-switch" data-ma-block="#l-login">
                    <i class="zmdi zmdi-long-arrow-right"></i> <span>Se connecter</span></a>
                    
                </div>
            </div>
       </div> 