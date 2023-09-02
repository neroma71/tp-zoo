<?php
require_once("./config/connexion.php");
require_once("./config/autoload.php");

$manager = new EmployeRepository($bdd);

if (isset($_GET['animale_id']) && !empty($_GET['animale_id'])) {
    $animalIdToDelete = $_GET['animale_id'];
    $enclosId = $_GET['id']; // Récupérez également l'ID de l'enclos si nécessaire

    // Ensuite, appelez votre fonction de suppression avec $animalIdToDelete
    if ($manager->deleteAnimalById($animalIdToDelete)) {
        // Redirigez vers la page cage.php avec l'ID de l'enclos
        header("Location: cage.php?id=$enclosId");
        exit;
    } else {
        echo "<p class='msg'>Une erreur s'est produite lors de la suppression de l'animal.</p>";
    }
}
?>
