<?php
require_once("./config/connexion.php"); 
require_once("./config/autoload.php"); 

$manager = new EmployeRepository($bdd);

$enclosList = $manager->getAllEnclos();


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
        <div class="play">
            <a href="employe.php">commencer à jouer</a>
        </div>
        </header>
            <div class="row d-flex mb-5 justify-content-center ">
                 <?php foreach ($enclosList as $enclos) : ?>
                     <a href="cage.php?id=<?php echo $enclos['id']; ?>" class="col-6 col-sm-6 col-lg-6 mx-3 text-center p-5 space">
                        <h2>Type: <?php echo $enclos['getType']; ?></h2>
                     </a>
                <?php endforeach; ?>
            </div>
    </section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>   
</body>
</html>