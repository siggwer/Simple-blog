<?php

function login($param = [])
{
    if (isset($param['REQUEST']['POST']['pseudo']) && !empty($param['REQUEST']['POST']['pseudo']) && (isset($param['REQUEST']['POST']['password']) && !empty($param['REQUEST']['POST']['password']))) {
            $result = getRepository('getMember', $param['REQUEST']['POST']['pseudo']);

            if (!empty($result)){
                if ($param['REQUEST']['POST']['pseudo'] === $result['pseudo']){
                    var_dump($param['REQUEST']['POST']);
                    var_dump($result);
                    if (password_verify($param['REQUEST']['POST']['password'], $result['password'])){
                        $_SESSION['id'] = $result['id'];
                        $_SESSION['pseudo'] = $result['pseudo'];

                        return redirect('/administration');
                    }
                    flashBag('failure', 'Le pseudo n\'existe pas. Merci de réessayer.');

                    return redirect('/login');

                }
            }
                flashBag('failure', 'Les identifiants ne correspondent pas.');

                return redirect('/login');
        } else{
            if(!empty($param['REQUEST']['POST']['remember-me'])){
                $cookie = $_SESSION['pseudo'];
                setcookie('cookie', $cookie, time() + 300, null, null, false, true);
            }
        }
        echo getView('Login', 'loginView.php', 'templateLogin.php');
}