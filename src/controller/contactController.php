<?php

function contact($param = [])
{
    // Check for empty fields
    if(\count($param['REQUEST']['POST']) > 0) {
        $violations = validate($param['REQUEST']['POST']['name'], ['length' =>['min' => 2, 'max' => 60]]);
        $violations = validate($param['REQUEST']['POST']['fisrtname'], ['length' =>['min' => 2, 'max' => 60]]);
        $violations = validate($param['REQUEST']['POST']['email'], ['length' =>['min' => 2, 'max' => 60]]);
        $violations = validate($param['REQUEST']['POST']['message'], ['length' =>['min' => 2, 'max' => 500]]);

        if(\count($violations) > 0) {
            flashBag('error', $violations['length'], $violations['email']);
        }
        echo getView('Contact', 'contactView.php', 'templateMail.php');
        $name = purifie($param['REQUEST']['POST']['name']);
        $firstname = purifie($param['REQUEST']['POST']['firstname']);
        $email_address = purifie($param['REQUEST']['POST']['email']);
        $message = purifie($param['REQUEST']['POST']['message']);
        swiftMail('templateMail.php');
        $view = getView('Mail', 'conatctSendMail.php', 'templateSendMail.php');
    }

    echo getView('Contact', 'contactView.php', 'templateMail.php');
}
