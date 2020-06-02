<?php
/*
  ./app/modeles/commentsModele.php
*/


namespace Modeles\Comments;

  function findByPostId(\PDO $connexion, int $id) {
    $sql = "SELECT *, COUNT(comments.id) AS commentsCount
            FROM comments
            JOIN posts ON comments.post_id = comments.id
            WHERE posts.id = :id
            GROUP BY comments.id;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, \PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
  }
