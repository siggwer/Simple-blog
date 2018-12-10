<?php

//Returns a comment related to the article
function getArticleDetails($id)
{
    $query = buildConnection()->prepare("SELECT `article`.`id` AS articleId, `title`, `chapo`, `content`, DATE_FORMAT(`publication_date`, '%d/%m/%Y') AS creation_date_fr, `author_id`, `comment`.`id`, `comments`, `author`, DATE_FORMAT(`comment_date`, '%d/%m/%Y') AS update_date, `comment`.`article_id` FROM `article` LEFT JOIN `comment` ON `comment`.`article_id` = `article`.`id`  WHERE article.id = :id  ORDER BY `comment`.`comment_date` DESC");
    $query->bindValue(':id', $id, \PDO::PARAM_STR);
    $query->execute();
    return $query->fetchAll();
}

