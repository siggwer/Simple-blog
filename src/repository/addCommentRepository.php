<?php
//Returns a comment related to the article
function getCheckComment($id)
{
    $query = buildConnection()->prepare("SELECT `article`.`id` AS articleId, `title`, `chapo`, `content`, DATE_FORMAT(`publication_date`, '%d/%m/%Y') AS creation_date_fr, `author_id`, `comment`.`id`, `comments`, `author`, DATE_FORMAT(`comment_date`, '%d/%m/%Y') AS update_date, `comment`.`article_id` FROM `article` LEFT JOIN `comment` ON `comment`.`article_id` = `article`.`id`  WHERE article.id = :id ORDER BY `comment`.`comment_date` DESC ");
    $query->bindValue(':id', $id, \PDO::PARAM_STR);
    $query->execute();
    return $query->fetchAll(\PDO::FETCH_ASSOC);
}

//Insert a new comment related to the article
function getAddComment($param = [])
{
    $query = buildConnection()->prepare("INSERT INTO comment(comments, author, article_id, comment_date) VALUES(:comments, :author, :article_id, NOW())");
    $query->bindValue( ':comments', $param['comments'],\PDO::PARAM_STR);
    $query->bindValue(':author', $param['author'], \PDO::PARAM_STR);
    $query->bindValue( ':article_id', $param['article_id'],\PDO::PARAM_STR);
    $query->execute();
}

//Returns new comment related to the article
function getNewComment($id)
{
    $query = buildConnection()->prepare("SELECT `article`.`id` AS articleId, `title`, `chapo`, `content`, DATE_FORMAT(`publication_date`, '%d/%m/%Y') AS creation_date_fr, `author_id`, `comment`.`id`, `comments`, `author`, DATE_FORMAT(`comment_date`, '%d/%m/%Y') AS update_date, `comment`.`article_id` FROM `article` LEFT JOIN `comment` ON `comment`.`article_id` = `article`.`id`  WHERE article.id = :id ORDER BY `comment`.`comment_date` DESC ");
    $query->bindValue(':id', $id, \PDO::PARAM_STR);
    $query->execute();
    return $query->fetchAll(\PDO::FETCH_ASSOC);
}
