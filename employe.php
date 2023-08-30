<?php

    require_once("./config/connexion.php"); 
    require_once("./config/autoload.php"); 
    
    if(isset($_POST['largeur']) && !empty($_POST['largeur']) && isset($_POST['longueur']) && !empty($_POST['longueur']) && isset($_POST['population']) && !empty($_POST['population']) && isset($_POST['getType'])){
        $largeur = $_POST['largeur'];
        $longueur = $_POST['longueur'];
        $population = $_POST['population'];
        $type = $_POST['getType'];
    
       
        $enclosData = [
            'largeur' => $largeur,
            'longueur' => $longueur,
            'population' => $population,
        
        ];
    
      
        $manager->insertEnclos($enclosData, $type);
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
<form methode="post" action="index.php">
            <label>définir un enclos</label><br />
                <input type="text" name="largeur" placeholder="rentrer une largeur">
                <input type="text" name="longueur" placeholder="rentrer une longueur">
                <input type="number" name="population" placeholder="rentrer le nombre d'animaux">
                <select name="getType">
                    <option value="">choisir le type d'animale</option>
                    <option value="ourse">ourse</option>
                    <option value="tigre">tigre</option>
                    <option value="poisson">poisson</option>
                    <option value="oiseaux">oiseaux</option>
                </select>
                <input type="submit" value="envoyer">
            </form>
            <form methode="post" action="">
            <label>définir un animale</label><br />
                <input type="text" name="nom" placeholder="rentrer un nom d'animale">
                <input type="text" name="poids" placeholder="rentrer un poids">
                <input type="text" name="age" placeholder="rentrer un poids">
                <input type="submit" value="envoyer">
            </form>
</body>
</html>