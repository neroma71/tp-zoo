<?php

    require_once("./config/autoload.php"); 

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
    $voliere->addAnimals($oiseaux);

    var_dump($voliere, $voliere->hauteur());
    var_dump($employe);

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
    <section class="container">
        <header>
            <h1>LE ZOO</h1>
        </header>
        <div class="row">
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