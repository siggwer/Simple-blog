<?php

function register($params = [])
{
    if(isset($params['REQUEST']['POST']['pseudo']) && !empty($params['REQUEST']['POST']['pseudo']) && isset($params['REQUEST']['POST']['password']) && !empty($params['REQUEST']['POST']['password']) && isset($params['REQUEST']['POST']['repassword']) && !empty($params['REQUEST']['POST']['repassword']) && isset($params['REQUEST']['POST']['email']) && !empty($params['REQUEST']['POST']['email'])) {
        $result = getRepository('getCheck', $params['REQUEST']['POST']['pseudo']);
        $pseudo = addslashes(htmlspecialchars(htmlentities(trim($params['REQUEST']['POST']['pseudo']))));
        $password = $params['REQUEST']['POST']['password'];
        $repassword = $params['REQUEST']['POST']['repassword'];
        $email = addslashes(htmlspecialchars(htmlentities(trim($params['REQUEST']['POST']['email']))));
        if(\count($result) > 0) {
            flashBag('failure', sprintf('Le pseudo %s existe déjà, merci d\'en choisir un autre.', $result[0]['pseudo']));

             return redirect('/register');

        }
        if(!preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $email)){
            flashBag('failure', sprintf('Cet email %s n\'a pas le bon format.', $email));

            return redirect('/register');

        }

        if($password !== $repassword) {
            flashBag('failure', sprintf('Les mots de passe ne correspondent pas.'));

            return redirect('/register');


        }

        $password = password_hash($password, PASSWORD_DEFAULT);
        $result = getRepository('getRegister', ['pseudo' => $pseudo, 'password' => $password, 'email' => $email]);
        flashBag('success', sprintf('Votre compte a bien été créé.'));
        return redirect('/');
    }

    echo getView('register', 'registerView.php', 'templateLogin.php');
}
