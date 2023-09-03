<?php
    class Employe
    {
        private string $nom;
        private int $age;
        private string $sexe;
        public int $point = 0;
        public bool $zooClean = false;
        public bool $animalsHealthy = false;

        public function __construct(array $datas)
        {
            $this->hydrate($datas);
            $this->point = 0;
        }

        /**
         * Get the value of sexe
         */ 
        public function getPoint()
        {
                return $this->point;
        }

        /**
         * Set the value of sexe
         *
         * @return  self
         */ 
        public function setPoint($point)
        {
                $this->point = $point;

                return $this;
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
       
        public function addPoint(){
            $this->point++; 
            $_SESSION['employee_points'] = $this->point;
        }
        public function examinerEnclos(Enclos $enclos, Animale $animale)
        {
            echo "<h3>examen de ".$animale->getNom()."</h3>";
            echo "type d'enclos : ".$enclos->getType()."<br />";
            echo "largeur de l'enclos ". $enclos->getLargeur()."<br />";
            echo "longeur de l'enclos ". $enclos->getLongueur()."<br />";

            if(method_exists($animale, 'speciale')){
                echo $animale->speciale()."<br />";
            }
            if(method_exists($animale, 'salinite')){
                echo $animale->salinite()."<br />";
            }
            $this->addPoint(1);
            
            $enclos->entretien();
            if ($enclos->getEtat() == 0) {
                echo $animale->getNom()." <span>".$animale->bouger()." </span>L'enclos est sale.<br />";
             
            } else 
            {
                echo "l'enclos est propre <br />";
            }
          
            $animale->manger();
            if($animale->getFaim() == 0)
            {
                echo $animale->getNom()." <span> ".$animale->son()." </span> à faim<br />";
                $this->addPoint(1);
            }
            else
            {
                echo $animale->getNom()." à mangé<br />";
                $this->animalsHealthy = false;
            }

            $animale->soins();
            if($animale->getMalade() == 0)
            {
               echo $animale->getNom()." <span> ".$animale->son()." </span>est malade il fume une clope<br />";
               $this->addPoint(1);
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
            echo $this->getNom()." nettoye l'enclos !";
            
            $this->addPoint(1);
            } 
             else 
            {
            $enclos->entretien();
            $this->zooClean = true;
            }
        }
      

    public function feed(Animale $animale)
    {  
        if($animale->getFaim() == 0)
        {
            echo $this->getNom()." Nourrit l'animale";
            $this->addPoint(1);
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
        $this->animalsHealthy = false;
        $this->addPoint(1);
    }
    else
    {
        echo $animale->soins();
        $this->animalsHealthy = true;
    }
   }
}