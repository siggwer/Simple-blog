<?php

function modifyArticle($param = [])
{
    if (\count($param) > 0 && isset($param['REQUEST']['SESSION']['id']) ) {
        $articles = getRepository('getArticle', $param['ATTR'][0]);

        if (!empty($param['REQUEST']['POST'])) {
            $title = purifie($param['REQUEST']['POST']['title']);
            $chapo = purifie($param['REQUEST']['POST']['chapo']);
            $content = purifie($param['REQUEST']['POST']['content']);

            if (\count($articles) === 0){
                var_dump($articles);
                flashBag('failure', sprintf('Une erreur est survenue, merci de ressayer.'));
            }

            $articles = getRepository('getModifyArticle', ['title' => $title, 'chapo' => $chapo, 'content' => $content]);
        }
    }

    echo getView('Modifier un article', 'modifyArticleView.php', 'templateModifyArticle.php', ['articles' => $articles, 'session' => $_SESSION]);
}