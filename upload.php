<?php
require_once './model/backend.php';
if (isset($_POST["send"])) {
    if (isset($_POST["commentaire"])) {
        $commentaire = filter_input(INPUT_POST, "commentaire", FILTER_SANITIZE_STRING);
    }

    if (isset($_FILES['img'])) {
        $datePost = date("Y-m-d H:i:s");
        $id = insertPost($commentaire, $datePost);
        for ($index = 0; $index < count($_FILES['img']['name']); $index++) {
            $dossier = 'upload/';
            $nomMedia = $_FILES["img"]["name"][$index];
            $typeMedia = $_FILES["img"]["type"][$index];
            if (move_uploaded_file($_FILES["img"]["tmp_name"][$index], $dossier . $nomMedia)) { //Si la fonction renvoie TRUE, c'est que ça a fonctionné
                insertMedia($id, $nomMedia, $typeMedia);
                header("Location: index.php");
            }
        }
    }
    //Sinon (la fonction renvoie FALSE).
    else {
        echo "Echec de l\'upload !";
    }
}