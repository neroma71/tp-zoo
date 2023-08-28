<?php
    class Employe
    {
        private string $nom;
        private int $age;
        private string $sexe;

        public function __construct(array $datas)
        {
            $this->hydrate($datas);
        }

        /**
         * Get the value of sexe
         */ 
        public function getSexe()
        {
                return $this->sexe;
        }

        /**
         * Set the value of sexe
         *
         * @return  self
         */ 
        public function setSexe($sexe)
        {
                $this->sexe = $sexe;

                return $this;
        }

        /**
         * Get the value of age
         */ 
        public function getAge()
        {
                return $this->age;
        }

        /**
         * Set the value of age
         *
         * @return  self
         */ 
        public function setAge($age)
        {
                $this->age = $age;

                return $this;
        }

        /**
         * Get the value of nom
         */ 
        public function getNom()
        {
                return $this->nom;
        }

        /**
         * Set the value of nom
         *
         * @return  self
         */ 
        public function setNom($nom)
        {
                $this->nom = $nom;

                return $this;
        }

        public function hydrate(array $datas)
        {
            if(isset($datas["sexe"]))
            {
                $this->setSexe($datas["sexe"]);
            }
            if(isset($datas["age"]))
            {
                $this->setAge($datas["age"]);
            }
            if(isset($datas["nom"]))
            {
                $this->setNom($datas["nom"]);
            } 
        }
        
        public function examinerEnclos(Enclos $enclos)
        {
            echo "examen de l'enclos <br />";
            echo "Type d'enclos: " . $enclos->getType() . "<br />";
            echo "nombre d'animaux ". $enclos->getPopulation() . "<br />";
            echo "longueur ". $enclos->getLargeur() . "<br />";
            echo "largeur ". $enclos->getLongueur() . "<br />";

            echo "Voulez-vous nettoyer cet enclos ? (oui/non) ";
        //version pc : $reponse = readline("Voulez-vous nettoyer cet enclos ? (oui/non) "); 
        $reponse = strtolower(trim(fgets(fopen('php://stdin', 'r'))));
        if ($reponse === "oui") {
            $enclos->entretien();
        }
       }

    }