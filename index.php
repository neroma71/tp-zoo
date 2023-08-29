<?php
require_once("./config/autoload.php"); 

$enclosOursData =[
    "largeur" => 50,
    "longueur" => 50,
    "etat" => true,
    "population" => 6
];
$enclosTigreData =[
    "largeur" => 50,
    "longueur" => 50,
    "etat" => true,
    "population" => 6
];
$aquariumData =[
    "largeur" => 50,
    "longueur" => 50,
    "etat" => true,
    "profondeur" => 10,
    "population" => 6
];
$voliereData =[
    "largeur" => 50,
    "longueur" => 50,
    "etat" => true,
    "phauteur" => 10,
    "population" => 6
];
    $listeDesEnclos = [
        new EnclosOurs($enclosOursData),
        new EnclosTigre($enclosTigreData),
        new Aquarium($aquariumData),
        new Voliere($voliereData),
    ];
    $zoo = new Zoo($listeDesEnclos);
/*
    $oiseauxData = [
        "poids" => 25,
        "taille" => 2,
        "nom" => "jo",
        "age" => 33,
        "faim" => true,
        "dormir" => true,
        "malade" => true
    ];
    
    $voliereData = [
        "largeur" => 50,
        "longueur" => 50,
        "hauteur" => 20,
        "etat" => true,
        "population" => 6
        
    ];
    $employeData = [
        "nom" => 'fred',
        "age" => 30,
        "sexe"=>"homme"
    ];


    $employe = new Employe( $employeData);
    $oiseaux = new Oiseaux($oiseauxData);


    $voliere = new Voliere($voliereData);
   

   echo $employe->examinerEnclos($voliere, $oiseaux);
   echo "<br />";
   echo $employe->nettoyer($voliere);
   echo "<br />";
   echo $employe->feed($oiseaux);
   echo "<br />";
   echo $employe->cure($oiseaux);
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZOO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section class="container-fluid">
        <header>
            <h1>LE ZOO</h1>
        </header>
        <div class="row d-flex justify-content-center">
            <div class="col-6">
                dfsds

            </div>
            <div class="col-6">
                dfsdf
            </div>
            <div class="col-6">
                sdfdsfs
            </div>
            <div class="col-6">
                sdfsdf
            </div>
        </div>
    </section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>   
</body>
</html>