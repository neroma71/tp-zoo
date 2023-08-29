<?php
class Zoo
{
    private string $name;
    private array $enclosList = [];
    private array $allAnimals = [];

    public function __construct(array $enclosList)
    {
        $this->enclosList = $enclosList;
        $this->getAllAnimals();
    }

    

    /**
     * Set the value of allAnimals
     *
     * @return  self
     */ 
    public function setAllAnimals($allAnimals)
    {
        $this->allAnimals = $allAnimals;

        return $this;
    }

    /**
     * Get the value of enclosList
     */ 
    public function getEnclosList()
    {
        return $this->enclosList;
    }

    /**
     * Set the value of enclosList
     *
     * @return  self
     */ 
    public function setEnclosList($enclosList)
    {
        $this->enclosList = $enclosList;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    private function getAllAnimals()
    {
        foreach ($this->enclosList as $enclos) {
            $animalsInEnclos = $enclos->getAnimals();
            $this->allAnimals = array_merge($this->allAnimals, $animalsInEnclos);
        }
    }

    public function afficherEnclos()
    {
        echo "Liste des enclos dans le zoo :<br>";
        foreach ($this->enclosList as $enclos) {
            echo "Type d'enclos : " . $enclos->getType() . "<br>";
            echo "Nombre d'animaux dans l'enclos : " . $enclos->getPopulation() . "<br>";
            echo "<br>";
        }
    }

    public function afficherAnimauxDansEnclos()
    {
        echo "Liste des animaux dans chaque enclos :<br>";
        foreach ($this->enclosList as $enclos) {
            echo "Type d'enclos : " . $enclos->getType() . "<br>";
            echo "Animaux dans l'enclos : ";
            $animalsInEnclos = $enclos->getAnimals();
            foreach ($animalsInEnclos as $animal) {
                echo $animal->getNom() . " ";
            }
            echo "<br><br>";
        }
    }

    public function afficherTousAnimaux()
    {
        echo "Liste de tous les animaux dans le zoo :<br>";
        foreach ($this->allAnimals as $animal) {
            echo "Type d'animal : " . get_class($animal) . "<br>";
            echo "Nom : " . $animal->getNom() . "<br>";
            echo "<br>";
        }
    }
}