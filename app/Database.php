<?php
namespace app;

use \PDO;

class Database {

    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;
    private $pdo;

    /**
     * @param db_name   Nom de la base de donées
     * @param db_user   Nom utilisateur de la base de données
     * @param db_pass   Mot de passe de la base de données
     * @param db_host   Hote de la base de données
     * 
     */
    public function __construct($db_name, $db_user = 'root', $db_pass = '', $db_host = 'localhost')
    {
        $this->db_name      =   $db_name;
        $this->db_user      =   $db_user;
        $this->db_pass      =   $db_pass;
        $this->db_host      =   $db_host;
    }

    /**
     * * Permet de ne renvoie qu'un seule connexion à la base de données
     * @return pdo      La connexion à la base de données
     */
    private function getPDO () {
        if ($this->pdo === null) {
            $pdo = new PDO('mysql:host=localhost;dbname=demoblog;charset=utf8', 'root', '', [
                PDO::ATTR_ERRMODE               => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_ERRMODE               => PDO::ERRMODE_WARNING,
                PDO::ATTR_DEFAULT_FETCH_MODE    => PDO::FETCH_CLASS
                ]
            );
            $this->pdo = $pdo;
        }
        return $this->pdo; // ! retourne la connexion à la base de données
    }

    /**
     * @param statement     Requete à exécuter
     * @return datas        Les données retournées
     */
    public function query (string $statement, string $class_name, bool $one = false)
    {
        $req = $this->getPDO()->query($statement);
        $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
        if ($one) {
            $datas = $req->fetch();
        } else {
            $datas = $req->fetchAll();
        }
        return $datas; // ! retourne un tableau d'object
    }

    public function prepare (string $statement, array $params, string $class_name, $one = false)
    {
        $req = $this->getPDO()->prepare($statement);
        $req->execute($params);
        $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
        if ($one) {
            $datas = $req->fetch();
        } else {
            $datas = $req->fetchAll();
        }
        return $datas;
    }


}