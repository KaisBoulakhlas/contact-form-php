<?php

// Définition de la classe pour le formulaire de contact
class ContactForm
{
    private $name;
    private $email;
    private $message;

    public function __construct($name, $email, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
    }

    public function saveToDatabase()
    {
        $db = Database::getInstance()->getConnection();

        // Préparation de la requête pour insérer les données du formulaire dans la base de données
        $stmt = $db->prepare("INSERT INTO contact_form (name, email, message) VALUES (?, ?, ?)");
        $stmt->execute([$this->name, $this->email, $this->message]);
    }
}
