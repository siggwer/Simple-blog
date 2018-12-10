<?php

//Get the list of items from a logged in member

function getAdministration($pseudo)
{
    $query = buildConnection()->prepare("SELECT user.id AS userId, article.id AS articleId, title, chapo, content, DATE_FORMAT(publication_date, '%d/%m/%Y à %Hh%imin%ss') AS creation_date_fr, author_id, pseudo, email FROM user LEFT JOIN article ON article.author_id = user.id WHERE pseudo = :pseudo");
    $query->bindValue(':pseudo', $pseudo, \PDO::PARAM_STR);
    $query->execute();
    return $query->fetchAll(\PDO::FETCH_ASSOC);
}