<!-- Main Content -->
<div class="container-fluid">

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-t-50 p-b-90">
                <form class="login100-form validate-form flex-sb flex-w" method="post" action="/login">
					<span class="login100-form-title p-b-51">
						Connexion
					</span>

                    <div class="wrap-input100 validate-input m-b-16">
                        <input class="input100" type="text" name="pseudo" placeholder="Pseudo" required data-validation-required-message="Pseudo requis.">
                        <span class="focus-input100"></span>
                    </div>


                    <div class="wrap-input100 validate-input m-b-16">
                        <input class="input100" type="password" name="password" placeholder="Mot de passe" required data-validation-required-message="Mot de passe requis">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="flex-sb-m w-full p-t-3 p-b-24">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100" for="ckb1">
                                Se souvenir de moi
                            </label>
                        </div>

                        <div>
                            <a href="#" class="txt1">
                                Mot de passe perdu?
                            </a>
                        </div>
                    </div>

                    <div class="container-login100-form-btn m-t-17">
                        <button type="submit" class="login100-form-btn" name="submit" value="Login">
                            Login
                        </button>
                        <a class="login100-form-btn button-center" href="/">
                            Retour accueil
                        </a>
                        <a class="login100-form-btn button-right" href="/register">
                            Register
                        </a>
                    </div>

                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>
</div>
