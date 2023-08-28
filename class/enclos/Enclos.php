<?php
    abstract class Enclos
    {
        protected int $largeur;
        protected int $longueur;
        protected bool $etat;
        protected int $population;
        protected int $count;
        protected array $animals = [];

        public function __construct(array $datas)
        {
            $this->count = 0;
            $this->hydrate($datas);
        }

         /**
         * Get the value of animals
         */ 
        public function getAnimals()
        {
                return $this->animals;
        }

        /**
         * Set the value of animals
         *
         * @return  self
         */ 
        public function addAnimals($animals)
        {
            if($this->count < 6){
                $this->animals[] = $animals;
                $this->count ++;
                echo "ajouter des animaux ";
            }else{
                echo " enclos plein";
            }
               
        }
        public function removeAnimals($animals)
        {
            if($this->count > 6){
                $this->animals[] = $animals;
                $this->count --;
                echo " enlever des animaux";
            }else{
                echo "enlevé ".$animals->getNom();
            }
               
        }
        /**
         * Get the value of largeur
         */ 
        public function getLargeur()
        {
                return $this->largeur;
        }

        /**
         * Set the value of largeur
         *
         * @return  self
         */ 
        public function setLargeur($largeur)
        {
                $this->largeur = $largeur;

                return $this;
        }

        /**
         * Get the value of longueur
         */ 
        public function getLongueur()
        {
                return $this->longueur;
        }

        /**
         * Set the value of longueur
         *
         * @return  self
         */ 
        public function setLongueur($longueur)
        {
                $this->longueur = $longueur;

                return $this;
        }

        

        /**
         * Get the value of population
         */ 
        public function getPopulation()
        {
                return $this->population;
        }

        /**
         * Set the value of population
         *
         * @return  self
         */ 
        public function setPopulation($population)
        {
                $this->population = $population;
                return $this;
        }
        /**
         * Get the value of etat
         */ 
        public function getEtat()
        {
                return $this->etat;
        }

        /**
         * Set the value of etat
         *
         * @return  self
         */ 
        public function setEtat($etat)
        {
                $this->etat = $etat;

                return $this;
        }

        public function entretien()
        {
            $this->setEtat(false);
        }

        public function hydrate(array $datas)
        {
            if(isset($datas["largeur"]))
            {
                $this->setLargeur($datas["largeur"]);
            }
            if(isset($datas["longueur"]))
            {
                $this->setLongueur($datas["longueur"]);
            }
            if(isset($datas["etat"]))
            {
                $this->setEtat($datas["etat"]);
            }
            if(isset($datas["population"]))
            {
                $this->setPopulation($datas["population"]);
            }
        }
       
    }