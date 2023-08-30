<?php
require_once("./config/connexion.php"); 
require_once("./config/autoload.php"); 

$enclosOursData =[
    "largeur" => 50,
    "longueur" => 50,
    "etat" => true,
    "population" => 4
];
$enclosTigreData =[
    "largeur" => 50,
    "longueur" => 50,
    "etat" => true,
    "population" => 3
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
       $enclosOurs = new EnclosOurs($enclosOursData),
       $enclosTigre = new EnclosTigre($enclosTigreData),
       $aquarium= new Aquarium($aquariumData),
       $voliere = new Voliere($voliereData)
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
    $voliere->addAnimals($oiseaux);

    var_dump($voliere, $voliere->hauteur());
    var_dump($employe);

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
            <a href="employe.php">commencer à jouer</a>
        </header>
        <div class="row d-flex justify-content-center">
        <a href="ours.php" class="col-6 text-center">
            <div>
                <?php echo "<h2>".$enclosOurs->getType()."</h2>" ?>
                <?php echo "<h2>".$enclosOurs->getPopulation()."</h2>" ?>
            </div>
        </a>
        <a href="tigre.php" class="col-6 text-center">
            <div>
                <?php echo "<h2>".$enclosTigre->getType()."</h2>" ?>
                <?php echo "<h2>".$enclosTigre->getPopulation()."</h2>" ?>
            </div>
        </a>
        <a href="aquarium.php" class="col-6 text-center">
            <div>
                <?php echo "<h2>".$aquarium->getType()."</h2>" ?>
                <?php echo "<h2>".$aquarium->getPopulation()."</h2>" ?>
            </div>
        </a>
        <a href="voliere.php" class="col-6 text-center">
            <div>
                <?php echo "<h2>".$voliere->getType()."</h2>" ?>
                <?php echo "<h2>".$voliere->getPopulation()."</h2>" ?>
            </div>
        </a>
        </div>
    </section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>   
</body>
</html>