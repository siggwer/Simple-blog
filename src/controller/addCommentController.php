<?php

function addComment($param = [])
{
    if (\count($param) > 0  && isset($param['REQUEST']['POST']['author']) && isset($param['REQUEST']['POST']['comments'])) {
        $comments = getRepository('getCheckArticle', $param['ATTR'][0]);
        $author = addslashes(htmlspecialchars(htmlentities(trim($param['REQUEST']['POST']['author']))));
        $comment = addslashes(htmlspecialchars(htmlentities(trim($param['REQUEST']['POST']['comments']))));
        $articleId = $param['ATTR'][0];
        if(\count($comments) > 0) {
            $result = getRepository('getAddComment', ['author' => $author, 'comments' => $comment, 'article_id' => $articleId]);

        }
        else {
            flashBag('failure', sprintf('Une erreur d\'enregistrement est survenue. Merci de réessayer ultérieurement.'));
        }

        $comment = getRepository('getNewComment', $param['ATTR'][0]);
    }

    echo getView('Article', 'articleView.php', 'templateArticleDetails.php', ['comments' => $comments]);
}