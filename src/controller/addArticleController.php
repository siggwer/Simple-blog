<?php

 function addArticle($param = [])
 {
     if (!isset($param['REQUEST']['SESSION']['pseudo'])) {
         header('refresh:10;url=/login');
         echo 'Connectez-vous pour ajouter un article. Dans 10 secondes vous serez redirigé vers la page de connexion. Si ne n\'est le cas, merci de cliquer sur le lien <a href="/login">ici</a>.';
     } else {
         if (isset($param['REQUEST']['SESSION']['id']) && !empty($param['REQUEST']['POST'])) {
             $author_id = $param['REQUEST']['SESSION']['id'];
             $title = purifie($param['REQUEST']['POST']['title']);
             $chapo = purifie($param['REQUEST']['POST']['chapo']);
             $content = purifie($param['REQUEST']['POST']['content']);
             $result = getRepository('getCheckArticleExist', $title);

             if (\count($result) > 0){

                 flashBag('failure', sprintf('L\'article existe déjà.'));
             }

             $result = getRepository('getAddArticle', ['title' => $title, 'chapo' => $chapo, 'content' => $content, 'author_id' => $author_id]);
         }
     }

     echo getView('Ajouter un article', 'addArticleView.php', 'templateAddArticle.php', ['session' => $_SESSION]);

 }