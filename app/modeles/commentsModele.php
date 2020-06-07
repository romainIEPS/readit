<?php
/*
  ./app/modeles/commentsModele.php
*/


namespace Modeles\Comments;

  function findByPostId(\PDO $connexion, int $id) {
    $sql = "SELECT *, COUNT(id) AS commentsCount
            FROM comments
            WHERE post_id = :id
            GROUP BY id;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, \PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
  }

  function insertOneByPostId(\PDO $connexion, array $data) {
    $sql = "INSERT INTO comments
            SET pseudo = :pseudo,
                content = :content,
                created_at = NOW(),
                post_id = :id;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':pseudo', $data['pseudo'], \PDO::PARAM_STR);
    $rs->bindValue(':content', $data['content'], \PDO::PARAM_STR);
    $rs->bindValue(':id', $data['postID'], \PDO::PARAM_INT);
    $rs->execute();
    return $connexion->lastInsertId();
  }
