<?php

function articleDetailsView($param = [])
{
    if (\count($param) > 0) {
        $articles = getRepository('getArticleDetails', $param['ATTR'][0]);

    }
    if (\count($param) > 0  && isset($param['REQUEST']['POST']['author']) && isset($param['REQUEST']['POST']['comments'])) {
        $comments = getRepository('getCheckComment', $param['ATTR'][0]);
        $author = addslashes(htmlspecialchars(htmlentities(trim($param['REQUEST']['POST']['author']))));
        $comment = addslashes(htmlspecialchars(htmlentities(trim($param['REQUEST']['POST']['comments']))));
        $articleId = $param['ATTR'][0];
        if (\count($comments) > 0) {
            $result = getRepository('getAddComment', ['author' => $author, 'comments' => $comment, 'article_id' => $articleId]);

        }
    }
    $comment = getRepository('getNewComment', $param['ATTR'][0]);


    echo getView('Article', 'articleView.php', 'templateArticleDetails.php', ['articles' => $articles[0], 'comment' => $comment, 'session' => $_SESSION]);
}