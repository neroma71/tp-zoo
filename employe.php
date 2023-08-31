<?php

    require_once("./config/connexion.php"); 
    require_once("./config/autoload.php"); 

    $manager = new EmployeRepository($bdd);
    $manager2 = new EmployeRepository($bdd);

if(isset($_POST['getType']) 
&& !empty($_POST['getType']) 
&& isset($_POST['largeur']) 
&& !empty($_POST['largeur'])
&& isset($_POST['longueur']) 
&& !empty($_POST['longueur'])){
    
    $getType = $_POST['getType'];
    $largeur = $_POST['largeur'];
    $longueur = $_POST['longueur'];

    $enclosData = [
        'getType' => $getType,
        'largeur' => $largeur,
        'longueur' => $longueur
    ];
    
    $enclos = null;

    if ($_POST['getType'] === 'ours') {
        $enclos = new EnclosOurs($enclosData);
    } elseif ($_POST['getType'] === 'tigre') {
        $enclos = new EnclosTigre($enclosData);
    } elseif ($_POST['getType'] === 'aquarium') {
        $enclos = new Aquarium($enclosData);
    }elseif ($_POST['getType'] === 'voliere') {
        $enclos = new Voliere($enclosData);
    } else {
        // Gérer le cas où la catégorie n'est pas reconnue
    }

    if($enclos){
        $manager->add($enclos); // Utilisez $enclos ici au lieu de $getType
    }
}
/*-------------*/

if(isset($_POST['getType']) 
&& !empty($_POST['getType']) 
&& isset($_POST['nom']) 
&& !empty($_POST['nom']) 
&& isset($_POST['poids']) 
&& !empty($_POST['poids']) 
&& isset($_POST['age']) 
&& !empty($_POST['age'])
&& isset($_POST['id_enclos']) 
&& !empty($_POST['id_enclos'])
){

    $getType = $_POST['getType'];
    $nom = $_POST['nom'];
    $poids = $_POST['poids'];
    $age = $_POST['age'];
    $id_enclos = $_POST['id_enclos'];
  
    $animaleData = [
        'getType' => $getType,
        'nom' => $nom,
        'poids' => $poids,
        'age' => $age,
        'id_enclos' => $id_enclos
    ];

    $animale = null;
    
    if ($_POST['getType'] === 'ours') {
        $animale = new Ours($animaleData);
    } elseif ($_POST['getType'] === 'tigre') {
        $animale = new Tigres($animaleData);
    }elseif ($_POST['getType'] === 'poisson') {
        $animale = new Oiseaux($animaleData);
    }elseif ($_POST['getType'] === 'oiseaux') {
        $animales = new Poisson($animaleData);
    } else {
        // Gérer le cas où la catégorie n'est pas reconnue
    }

    // insertion des images
    if (isset($_FILES['images']) && $_FILES['images']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'uploads/';
        $uploadFile = $uploadDir . basename($_FILES['images']['name']);

        if (move_uploaded_file($_FILES['images']['tmp_name'], $uploadFile)) {
            $hero->setImages($uploadFile);
        } else {
            echo "Erreur lors du téléchargement de l'image.";
        }
    }

    if($animale){
        $manager2->addAnimals($animale, $id_enclos); // Utilisez $enclos ici au lieu de $getType
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
<form method="post" action="" enctype="multipart/form-data">
            <label><h3>définir un enclos</h3></label><br />
                <input type="text" name="largeur" placeholder="rentrer une largeur">
                <input type="text" name="longueur" placeholder="rentrer une longueur">
                <select name="getType">
                    <option value="">choisir le type d'enclos</option>
                    <option value="ours">ours</option>
                    <option value="tigre">tigre</option>
                    <option value="aquarium">aquarium</option>
                    <option value="voliere">voliere</option>
                </select>
                <input type="file" name="images">
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
