<?php
/*
  ./app/modeles/postsModeles.php
*/


namespace Modeles\Posts;

  function findAll(\PDO $connexion) {
    $sql = "SELECT *
            FROM posts
            ORDER BY created_at DESC
            LIMIT 10;";
    $rs = $connexion->query($sql);
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
  }


  function findOneById(\PDO $connexion, int $id) {
    $sql = "SELECT *
            FROM posts
            WHERE id = :id";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, \PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetch(\PDO::FETCH_ASSOC);
  }

  function FindLastestIndex(\PDO $connexion) {
    $sql = "SELECT posts.image AS postImage,
                   posts.created_at AS postDate,
                   posts.resume AS postResume,
                   authors.firstname AS authorName
            FROM posts
            JOIN authors ON posts.author_id = authors.id
            ORDER BY created_at DESC
            LIMIT 3;";
    $rs = $connexion->query($sql);
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
  }
