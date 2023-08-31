<?php
/*
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

        $employe = new Employe(['nom' => 'John', 'age' => 30, 'sexe' => 'homme']);

        foreach ($animaux as $animal) {
            $employe->examinerEnclos($enclosObject, $animal);
            $employe->feed($animal);
            $employe->cure($animal);
        }
        ?>
        */