<?php
/*
  ./app/modeles/tagsModeles.php
*/


namespace Modeles\Tags;

  function findByPostId(\PDO $connexion, int $id) {
    $sql = "SELECT *
            FROM tags t
            JOIN posts_has_tags pt ON pt.tag_id = t.id
            WHERE pt.post_id = :id";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, \PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
  }
