<!-- Main Content -->
<div class="container-fluid">

    <div class="flashbag">
        <?php if(isset($_SESSION['flash']['success'])): ?>
                <p><?= $_SESSION['flash']['success']; ?></p>
        <?php endif; ?>
    </div>

    <div class="flashbag">
        <?php if(isset($_SESSION['flash']['failure'])): ?>
                <p><?= $_SESSION['flash']['failure']; ?></p>
        <?php endif; ?>
    </div>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-t-50 p-b-90">
                <form class="login100-form validate-form flex-sb flex-w" method="post" action="/register">
					<span class="login100-form-title p-b-51">
						Enregistrement
					</span>
                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
                        <input class="input100" type="text" name="pseudo" placeholder="Pseudo">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Email is required">
                        <input class="input100" type="text" name="email" placeholder="Email">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
                        <input class="input100" type="password" name="password" placeholder="Mot de passe">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Repassword is required">
                        <input class="input100" type="password" name="repassword" placeholder="répéter le mot de passe">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-login100-form-btn m-t-17">
                        <button class="login100-form-btn" type="submit" name="register" value="Register">
                            Register
                        </button>
                        <a class="login100-form-btn button-register-right" href="/">
                            Retour accueil
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>
</div>