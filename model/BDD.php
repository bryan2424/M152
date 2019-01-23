<?php
function getConnexion() {
        $server = '127.0.0.1';
        $username = 'root';
        $password = '';
        $dbName = 'M152';

        static $dbd = null;
        try {
            $dbd = new PDO("mysql:host=$server;dbname=$dbName", $username, $password);
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
        return $dbd;
}