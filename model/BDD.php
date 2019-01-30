<?php

DEFINE('SERVER',"127.0.0.1");
DEFINE('USERNAME',"adminM152");
DEFINE('PASSWORD',"adminM152");
DEFINE('DBNAME',"M152");

function getConnexion() {

    static $dbd = null;
    try {
        $dbd = new PDO('mysql:host='.SERVER.';dbname='.DBNAME, USERNAME, PASSWORD);
        $dbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    return $dbd;
}
