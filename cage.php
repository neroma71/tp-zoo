<?php
require_once("./config/connexion.php"); 
require_once("./config/autoload.php"); 

$manager = new EmployeRepository($bdd);


if (isset($_GET['id']) && !empty($_GET['id'])) {
    $enclosId = $_GET['id'];
    
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
        } elseif ($animalData['getType'] === 'poisson') {
            $animal = new Poisson($animalData);
        }elseif ($animalData['getType'] === 'oiseaux') {
            $animal = new Oiseaux($animalData);
        } 
        if ($animal) {
            $animal->hydrate($animalData);
            $animaux[] = $animal;
        }
    } 
}


$enclosList = $manager->getAllEnclos();
$employe = new Employe(['nom' => 'John', 'age' => 30, 'sexe' => 'homme']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de l'enclos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/cage.css">
</head>
<body style="background:url('<?php echo $enclos->getImages(); ?>')top center fixed no-repeat; background-size:cover;">
<main>
    <header>
        <h1>Détails de l'enclos</h1> 
        <div class="retour">
            <a href="index.php">Retour au Zoo</a>
        </div>
</header> 
        <div class="type">  
            <?php if ($enclos) : ?>
                 <p>Type: <?php echo $enclos->getType(); ?>
                    Largeur: <?php echo $enclos->getLargeur(); ?>
                    Longueur: <?php echo $enclos->getLongueur(); ?>
                    nombre d'animaux dans l'enclos : <?php  echo $nombreAnimaux = count($animaux); ?>
                </p>
        </div>
        <div class="presentation">
            <h2>Animaux dans cet enclos</h2>
            <ul>
                <?php foreach ($animaux as $animal) : ?>
                   <p><?php $enclos->addAnimals($animal); ?></p>
                    <li>Nom : <?php echo $animal->getNom(); ?>, Poids : <?php echo $animal->getPoids(); ?>, Âge : <?php echo $animal->getAge(); ?>ans<a href="delete.php?animale_id=<?php echo $animal->getAnimale_id(); ?>&id=<?php echo $enclosId; ?>">supprimer</a>
                    </li>
                 <?php endforeach; ?>
            </ul>
            </div>
            <div class="btn">Play</div>
            <?php
            if (isset($_SESSION['employee_points'])) {
            $employeePoints = $_SESSION['employee_points'];

            echo "<p class='point'>votre score est de : $employeePoints </p>";
            } else {
            echo "<p class='point'>Points de l'employé : 0</p>";
            }
            ?>
        <div class="animaux">
                <?php
        foreach ($animaux as $animal): ?>
           <div class='animale'>
             <p><?php  $employe->examinerEnclos($enclos, $animal);?></p>
             <div class="action">
                <p><?php  $employe->nettoyer($enclos);?></p>
                <p><?php  $employe->feed($animal);?></p>
                <p><?php  $employe->cure($animal);?></p>
            </div>
        </div>
            <?php endforeach; ?>
        </div>
    <?php else : ?>
        <p>Enclos non trouvé.</p>
    <?php endif; ?>
    <footer>© moi même</footer>
    </main>
    <script>
        const btn = document.querySelector('.btn');
        btn.addEventListener('click', ()=>{
                location.reload();
        });
    </script>
</body>
</html>
