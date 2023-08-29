<?php
    abstract class Animale
    {
        protected int $poids;
        protected string $nom;
        protected int $age;
        protected bool $faim;
        protected bool $dormir;
        protected bool $malade;

        public function __construct(array $datas)
        {
            $this->hydrate($datas);
        }

        /**
         * Get the value of malade
         */ 
        public function getMalade()
        {
                return $this->malade;
        }

        /**
         * Set the value of malade
         *
         * @return  self
         */ 
        public function setMalade($malade)
        {
                $this->malade = $malade;

                return $this;
        }

        /**
         * Get the value of dormir
         */ 
        public function getDormir()
        {
                return $this->dormir;
        }

        /**
         * Set the value of dormir
         *
         * @return  self
         */ 
        public function setDormir($dormir)
        {
                $this->dormir = $dormir;

                return $this;
        }

        /**
         * Get the value of faim
         */ 
        public function getFaim()
        {
                return $this->faim;
        }

        /**
         * Set the value of faim
         *
         * @return  self
         */ 
        public function setFaim($faim)
        {
                $this->faim = $faim;

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

        /**
         * Get the value of poids
         */ 
        public function getPoids()
        {
                return $this->poids;
        }

        /**
         * Set the value of poids
         *
         * @return  self
         */ 
        public function setPoids($poids)
        {
                $this->poids = $poids;

                return $this;
        }

        public function reveil()
        {
                $sleep = $this->getDormir();
                $sleep = rand(0,1);
                $this->setDormir($sleep); 
        }

        public function manger()
        {
             $hungry = $this->getFaim();
             $hungry = rand(0,1);
             $this->setFaim($hungry); 
        }
        
        public function soins()
        {
                $sick = $this->getMalade();
                $sick = rand(0,1);
                $this->setMalade($sick); 
        }

        public function hydrate(array $datas)
        {
            if(isset($datas["poids"]))
            {
                $this->setPoids($datas["poids"]);
            }
            if(isset($datas["nom"]))
            {
                $this->setNom($datas["nom"]);
            }
            if(isset($datas["age"]))
            {
                $this->setAge($datas["age"]);
            }
            if(isset($datas["faim"]))
            {
                $this->setFaim($datas["faim"]);
            }
            if(isset($datas["dormir"]))
            {
                $this->setDormir($datas["dormir"]);
            }
            if(isset($datas["malade"]))
            {
                $this->setMalade($datas["malade"]);
            }
        }
        // methodes de base des mammifère
        abstract public function son();
        abstract public function bouger();
       
    }