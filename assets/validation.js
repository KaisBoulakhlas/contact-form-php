const validateForm = (event) => {
    // Empêcher la soumission du formulaire par défaut
    
    // Récupérer les éléments du formulaire
    const nameElement = document.querySelector("#name");
    const emailElement = document.querySelector("#email");
    const messageElement = document.querySelector("#message");

    // Valider les champs du formulaire
    let nameError = validateField(nameElement.value, "Le nom est obligatoire.");
    let emailError = validateField(emailElement.value, "L'email est obligatoire.", /^[^\s@]+@[^\s@]+\.[^\s@]+$/);
    let messageError = validateField(messageElement.value, "Le message est obligatoire.");

    // Afficher les messages d'erreur
    showError(nameElement, nameError);
    showError(emailElement, emailError);
    showError(messageElement, messageError);

    // Vérifier si le formulaire est valide
    if (nameError || emailError || messageError) {
        event.preventDefault();
    }
}

const validateField = (value, requiredError, pattern) => {
    if (!value.trim()) {
        return requiredError;
    }
    if (pattern && !pattern.test(value)) {
        return "Le format n'est pas valide.";
    }
    return null; // Aucune erreur
}

const showError = (element, error) => {
    const errorElement = element.nextElementSibling;
    error ? errorElement.innerHTML = error : errorElement.innerHTML = "";
}

// Ajout de l'événement submit sur le formulaire
document.querySelector("#contact-form").addEventListener("submit", validateForm);
