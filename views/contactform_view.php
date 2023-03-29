<!DOCTYPE html>
<html>
<head>
    <title>Formulaire de contact</title>
    <link rel="stylesheet" href="../assets/styles.css"/>
</head>
<body>
    <h1>Formulaire de contact</h1>
    <form method="post" id="contact-form" action="../ContactFormHandler.php">
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name"><div class="error"></div><br>

        <label for="email">E-mail :</label>
        <input type="text" id="email" name="email"><div class="error"></div><br>

        <label for="message">Message :</label>
        <textarea id="message" name="message"></textarea><div class="error"></div><br>

        <button type="submit">Envoyer</button>
    </form>
</body>
<script type="text/javascript" src="../assets/validation.js"></script>
</html>
