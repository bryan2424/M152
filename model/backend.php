<?php

require_once './model/BDD.php';

function getPosts() {
    $connexion = getConnexion();
    $req = $connexion->prepare('SELECT * FROM posts');
    $req->execute();
    $result = $req->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function insertPost($commentaire, $datePost) {
    $connexion = getConnexion();
    $requete = $connexion->prepare("INSERT INTO posts (commentaire, datePost) VALUES (:commentaire, :datePost)");
    $requete->bindParam(":commentaire", $commentaire, PDO::PARAM_STR);
    $requete->bindParam(":datePost", $datePost, PDO::PARAM_STR);
    $requete->execute();
    return $connexion->lastInsertId();
}

function insertMedia($idpost, $nom, $type) {
    $connexion = getConnexion();
    $requete = $connexion->prepare("INSERT INTO media (idPost, nomFichierMedia, typeMedia) VALUES (:id, :typeMedia, :nomMedia)");
    $requete->bindParam(":id", $idpost, PDO::PARAM_INT);
    $requete->bindParam(":typeMedia", $type, PDO::PARAM_STR);
    $requete->bindParam(":nomMedia", $nom, PDO::PARAM_STR);
    $requete->execute();
}
