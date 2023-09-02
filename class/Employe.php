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

        public function examinerEnclos(Enclos $enclos, Animale $animale)
        {
            echo "<h3>examen de ".$animale->getNom()."</h3>";
            echo "type d'enclos : ".$enclos->getType()."<br />";
            echo "largeur de l'enclos ". $enclos->getLargeur()."<br />";
            echo "longeur de l'enclos ". $enclos->getLongueur()."<br />";
           
            $enclos->entretien();
            if ($enclos->getEtat() == 0) {
                echo $animale->getNom()." ".$animale->bouger()." L'enclos est sale.<br />";
            } else 
            {
                echo "l'enclos est propre <br />";
            }
          
            $animale->manger();
            if($animale->getFaim() == 0)
            {
                echo $animale->getNom()." ".$animale->son()." à faim <br />";
            }
            else
            {
                echo $animale->getNom()." à mangé<br />";
            }

            $animale->soins();
            if($animale->getMalade() == 0)
            {
               echo $animale->getNom()." est malade<br />";
            }
            else
            {
                echo $animale->getNom()." est soigné<br />";
            }
        }
        //----//
        public function nettoyer(Enclos $enclos)
        {  
            if($enclos->getEtat() == 0) {
            echo $this->getNom()." Nettoye de l'enclos !";
            } 
             else 
            {
            $enclos->entretien();
            }
        }
      

    public function feed(Animale $animale)
    {  
        if($animale->getFaim() == 0)
        {
            echo $this->getNom()." Nourrit l'animale";
        }
        else
        {
        $animale->manger();
        }
    }

    public function cure(Animale $animale)
    {
    if($animale->getMalade() == 0)
    {
        echo $this->getNom()." Soigne l'animale";
    }
    else
    {
        echo $animale->soins();
    }
    }
}