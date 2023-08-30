<?php

    require_once("./config/connexion.php"); 
    require_once("./config/autoload.php"); 

    $manager = new EmployeRepository($bdd);
    $manager2 = new EmployeRepository($bdd);

if(isset($_POST['getType']) && !empty($_POST['getType']) && isset($_POST['largeur']) && !empty($_POST['largeur']) && isset($_POST['longueur']) && !empty($_POST['longueur']) && isset($_POST['profondeur']) && isset($_post['hauteur']) && isset($_POST['population']) && !empty($_POST['population'])){
    $getType = $_POST['getType'];
    $largeur = $_POST['largeur'];
    $longueur = $_POST['longueur'];
    $population = $_POST['population'];

    $enclosData = [
        'getType' => $getType,
        'largeur' => $largeur,
        'longueur' => $longueur,
        'profondeur' => $_POST['profondeur'],
        'hauteur' => $_POST['hauteur'],
        'salinite' => $_POST['salinite'],
        'population' => $population,
    ];

    $enclos = null;

    if ($_POST['getType'] === 'ours') {
        $enclos = new EnclosOurs($enclosData);
    } elseif ($_POST['getType'] === 'tigre') {
        $enclos = new EnclosTigre($enclosData);
    } elseif ($_POST['getType'] === 'poisson') {
        $enclos = new Aquarium($enclosData);
    }elseif ($_POST['getType'] === 'oiseaux') {
        $enclos = new Voliere($enclosData);
    } else {
        // Gérer le cas où la catégorie n'est pas reconnue
    }

    if($enclos){
        $manager->add($enclos); // Utilisez $enclos ici au lieu de $getType
    }
}

if(isset($_POST['getType']) && !empty($_POST['getType']) && isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['poids']) && !empty($_POST['poids']) && isset($_POST['age']) && !empty($_POST['age'])){
    $getType = $_POST['getType'];
    $nom = $_POST['nom'];
    $poids = $_POST['poids'];
    $age = $_POST['age'];
  
    $animaleData = [
        'getType' => $getType,
        'nom' => $nom,
        'poids' => $poids,
        'age' => $age,
    ];

    $animale = null;
    
    if ($_POST['getType'] === 'ours') {
        $animale = new Ours($animaleData);
    } elseif ($_POST['getType'] === 'tigre') {
        $animale = new Tigres($animaleData);
    } elseif ($_POST['getType'] === 'poisson') {
        $animales = new Poisson($animaleData);
    }elseif ($_POST['getType'] === 'oiseaux') {
        $animale = new Oiseaux($animaleData);
    } else {
        // Gérer le cas où la catégorie n'est pas reconnue
    }


    if($animale){
        $manager2->addAnimals($animale); // Utilisez $enclos ici au lieu de $getType
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/employe.css" />
</head>
<body>
<form method="post" action="">
            <label><h3>définir un enclos</h3></label><br />
                <input type="text" name="largeur" placeholder="rentrer une largeur">
                <input type="text" name="longueur" placeholder="rentrer une longueur">
                <input type="text" name="profonder" placeholder="rentrer une profondeur">
                <input type="text" name="hauteur" placeholder="rentrer une hauteur">
                <input type="text" name="salinite" placeholder="rentrer une salinite">
                <input type="number" name="population" placeholder="rentrer le nombre d'animaux">
                <select name="getType">
                    <option value="">choisir le type d'animale</option>
                    <option value="ours">ours</option>
                    <option value="tigre">tigre</option>
                    <option value="aquarium">aquarium</option>
                    <option value="voliere">voliere</option>
                </select>
                <input type="submit" value="envoyer">
            </form>
            <!--  //////////  -->
            <form method="post" action="">
            <label><h3>définir un animale</h3></label><br />
                <input type="text" name="nom" placeholder="rentrer un nom d'animale">
                <input type="text" name="poids" placeholder="rentrer un poids">
                <input type="text" name="age" placeholder="rentrer un age">
                <select name="getType">
                    <option value="">choisir le type d'animale</option>
                    <option value="ours">ours</option>
                    <option value="tigre">tigre</option>
                    <option value="poisson">poisson</option>
                    <option value="oiseaux">oiseaux</option>
                </select>
                <select name="id_enclos">
                    <option value="">choisir le type d'enclos</option>
                    <option value="1">ours</option>
                    <option value="2">tigre</option>
                    <option value="3">aquarium</option>
                    <option value="4">voliere</option>
                </select>
                <input type="submit" value="envoyer">
            </form>
</body>
</html>
