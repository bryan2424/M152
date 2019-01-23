<?php
require_once './model/backend.php';
if (isset($_POST["send"])) {
    if (isset($_POST["commentaire"])) {
        $commentaire = filter_input(INPUT_POST, "commentaire", FILTER_SANITIZE_STRING);
    }
    if (isset($_FILES['img'])) {
        $dossier = 'upload/';
        $nomMedia = $_FILES["img"]["name"];
        $typeMedia = $_FILES["img"]["type"];
        $datePost = date("Y-m-d H:i:s");
        if (move_uploaded_file($_FILES["img"]["tmp_name"], $dossier . $nomMedia)) { //Si la fonction renvoie TRUE, c'est que ça a fonctionné
            insertPost($commentaire, $typeMedia, $nomMedia, $datePost);
            header("Location: index.php");
        }
        //Sinon (la fonction renvoie FALSE).
        else {
            echo "Echec de l\'upload !";
        }
    }
}