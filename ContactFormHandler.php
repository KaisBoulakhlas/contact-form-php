<?php

require_once 'database.php';
require_once 'ContactForm.php';

// Traitement du formulaire de contact
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $contactForm = new ContactForm($name, $email, $message);
    $contactForm->saveToDatabase();
    require "views/contactform_success.php";

    // // Envoie l'e-mail
    // $to = 'kaisboulakhlas9@gmail.com';
    // $subject = 'Nouveau message de contact';
    // $body = "Nom: $name\n\nEmail: $email\n\nMessage:\n$message";
    // $headers = "From: $email\r\nReply-To: $email\r\n";
  
    // if (mail($to, $subject, $body, $headers)) {
    //     require "views/contactform_success.php";
    // } else {
    //     echo 'Une erreur est survenue lors de l\'envoi de votre message.';
    // }
}
?>