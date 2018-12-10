<?php

function getArticle($id)
{
    $query = buildConnection()->prepare("SELECT `article`.`id` AS articleId, `title`, `chapo`, `content`, DATE_FORMAT(`publication_date`, '%d/%m/%Y') AS creation_date_fr, `author_id` FROM `article` WHERE article.id = :id");
    $query->bindValue(':id', $id, \PDO::PARAM_STR);
    $query->execute();
    return $query->fetchAll();
}

function getModifyArticle($param = [])
{
    $query = buildConnection()->prepare("UPDATE article SET (title, chapo, content, publication_date) VALUES(:title, :chapo, :content, NOW())");
    $query->bindValue(':title', $param['title'], \PDO::PARAM_STR);
    $query->bindValue(':chapo', $param['chapo'], \PDO::PARAM_STR);
    $query->bindValue(':content', $param['content'], \PDO::PARAM_STR);
    return $query->execute();
}