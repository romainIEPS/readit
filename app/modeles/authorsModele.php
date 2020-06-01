<?php
/*
  ./app/modeles/authorsModele.php
*/


namespace Modeles\Authors;

  function findOneById(\PDO $connexion, int $id) {
    $sql = "SELECT *
            FROM posts
            JOIN authors ON posts.author_id = authors.id
            WHERE posts.id = :id;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, \PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetch(\PDO::FETCH_ASSOC);
  }
