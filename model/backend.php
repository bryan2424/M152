<?php
require_once './model/BDD.php';

function getPosts()
{
    $connexion = getConnexion();
    $req = $connexion->prepare('SELECT * FROM posts');
    $req->execute();
    $result = $req->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function insertPost($commentaire, $typeMedia, $nomMedia, $datePost) {
       $connexion = getConnexion();
       $requete = $connexion->prepare("INSERT INTO posts (commentaire, typeMedia, nomMedia, datePost) VALUES (:commentaire, :typeMedia, :nomMedia, :datePost)");
       $requete->bindParam(":commentaire", $commentaire, PDO::PARAM_STR);
       $requete->bindParam(":typeMedia", $typeMedia, PDO::PARAM_STR);
       $requete->bindParam(":nomMedia", $nomMedia, PDO::PARAM_STR);
       $requete->bindParam(":datePost", $datePost, PDO::PARAM_STR);
       $requete->execute();
}