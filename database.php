<?php

// Définition de la classe singleton pour la connexion à la base de données
class Database
{
    private static $instance = null;
    private $host = 'localhost'; // Nom d'hôte de la base de données
    private $db = 'contact'; // Nom de la base de données
    private $user = 'root'; // Nom d'utilisateur de la base de données
    private $pass = ''; // Mot de passe de la base de données
    private $charset = 'utf8mb4'; // Jeu de caractères de la base de données
    private $connection;

    private function __construct()
    {
        // Connexion à la base de données avec PDO
        $dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];
        $this->connection = new PDO($dsn, $this->user, $this->pass, $options);
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection()
    {
        return $this->connection;
    }
}
?>