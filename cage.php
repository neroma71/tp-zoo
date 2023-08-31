<?php
require_once("./config/connexion.php"); 
require_once("./config/autoload.php"); 

require_once("./config/connexion.php"); 
require_once("./config/autoload.php"); 

$manager = new EmployeRepository($bdd);


if (isset($_GET['id']) && !empty($_GET['id'])) {
    $enclosId = $_GET['id'];
    
    $enclosData = $manager->getEnclosById($enclosId);
    $animauxList = $manager->getAnimauxByEnclosId($enclosId);
    
    $enclosData = $manager->getEnclosById($enclosId);
    $animauxList = $manager->getAnimauxByEnclosId($enclosId);
    
    $enclosType = $enclosData['getType'];

   
    if ($enclosType === 'Aquarium') {
        $enclos = new Aquarium($enclosData);
    } elseif ($enclosType === 'Ourse') {
        $enclos = new EnclosOurs($enclosData);
    } elseif ($enclosType === 'Tigres') {
        $enclos = new EnclosTigre($enclosData);
    }elseif ($enclosType === 'Voliere') {
        $enclos = new Voliere($enclosData);
    }

    $animaux = [];

    foreach ($animauxList as $animalData) {
        $animal = null;
        
        if ($animalData['getType'] === 'ours') {
            $animal = new Ours($animalData);
        } elseif ($animalData['getType'] === 'tigre') {
            $animal = new Tigres($animalData);
        } elseif ($animalData['getType'] === 'oiseaux') {
            $animal = new Oiseaux($animalData);
        } elseif ($animalData['getType'] === 'poisson') {
            $animal = new Poisson($animalData);
        }
        
        if ($animal) {
            $animal->hydrate($animalData);
            $animaux[] = $animal;
        }
        var_dump($animauxList); 
    }
    
    $employe = new Employe(['nom' => 'John', 'age' => 30, 'sexe' => 'homme']);

    foreach ($animaux as $animal) {
        $nombreAnimaux = count($animaux);
        $employe->examinerEnclos($enclos, $animal, $nombreAnimaux);
        $employe->feed($animal);
        $employe->cure($animal);
    }
}

$enclosList = $manager->getAllEnclos();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de l'enclos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
</head>
<body style="background-image: url('<?php echo $enclos->getImages(); ?>'); background-position: top center; background-repeat: no-repeat; background-size: cover;">
    <?php if ($enclos) : ?>
        <h1>Détails de l'enclos</h1>
        <p>Type: <?php echo $enclos->getType(); ?></p>
        <p>Largeur: <?php echo $enclos->getLargeur(); ?></p>
        <p>Longueur: <?php echo $enclos->getLongueur(); ?></p>

        <h2>Animaux dans cet enclos</h2>
        <ul>
            <?php foreach ($animaux as $animal) : ?>
                <li>Nom: <?php echo $animal->getNom(); ?>, Poids: <?php echo $animal->getPoids(); ?>, Âge: <?php echo $animal->getAge(); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else : ?>
        <p>Enclos non trouvé.</p>
    <?php endif; ?>
</body>
</html>
