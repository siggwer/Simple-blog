<?php
//Returns a comment related to the article
function getCheckArticleExist($title)
{
    $query = buildConnection()->prepare("SELECT `article`.`id` AS articleId, `title`, `chapo`, `content`, DATE_FORMAT(`publication_date`, '%d/%m/%Y') AS creation_date_fr, `author_id`, `user`.`id`, `user`.`pseudo`FROM `user` LEFT JOIN `article` ON `article`.`author_id` = `user`.`id` WHERE `article`.`title` REGEXP :title");
    $query->bindValue(':title', $title, \PDO::PARAM_STR);
    $query->execute();
    return $query->fetchAll(\PDO::FETCH_ASSOC);
}

// Add new article
function getAddArticle($param = [])
{
    $query = buildConnection()->prepare("INSERT INTO article (title, chapo, content, publication_date, author_id) VALUES(:title, :chapo, :content, NOW(), :author_id)");
    $query->bindValue(':title', $param['title'], \PDO::PARAM_STR);
    $query->bindValue(':chapo', $param['chapo'], \PDO::PARAM_STR);
    $query->bindValue(':content', $param['content'], \PDO::PARAM_STR);
    $query->bindValue(':author_id', $param['author_id'], \PDO::PARAM_STR);
    return $query->execute();
}


