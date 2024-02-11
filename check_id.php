<?php

// Récupérer l'identifiant saisi
$id = $_POST['id'];

// Valider l'identifiant (entre 100000 et 999999)
if (!is_numeric($id) || $id < 100000 || $id > 999999) {
    echo "<p>L'identifiant doit être un nombre compris entre 100000 et 999999.</p>";
    exit();
}

// Vérifier si le fichier HTML existe
$fichier = "Data/" . $id . ".html";
if (file_exists($fichier)) {
    // Rediriger vers la page
    header("Location: $fichier");
} else {
    // Afficher un message d'erreur
    echo "<p>La page associée à l'identifiant $id n'existe pas.</p>";
}

?>
