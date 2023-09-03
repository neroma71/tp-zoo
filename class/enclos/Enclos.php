<?php
    abstract class Enclos
    {
        private int $id;
        protected string $largeur;
        protected string $longueur;
        protected bool $etat;
        protected int $count;
        protected array $animals = [];
        private string $images;

        public function __construct(array $datas)
        {
            $this->etat = false;
            $this->count = 0;
            $this->hydrate($datas);
        }

        /**
         * Get the value of images
         */ 
        public function getImages()
        {
                return $this->images;
        }

        /**
         * Set the value of images
         *
         * @return  self
         */ 
        public function setImages($images)
        {
                $this->images = $images;

                return $this;
        }

            /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
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
                echo "vous pouvez ajouter des animaux !";
            }else{
                echo " enclos plein, enlevé ". $animals->getNom();
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
                    $state = $this->getEtat();
                    $state = rand(0,1);
                    $this->setEtat($state); 
        }

        abstract public function getType();
        
        public function hydrate(array $datas)
        {
            if(isset($datas["id"]))
            {
                $this->setId($datas["id"]);
            }
            if(isset($datas["largeur"]))
            {
                $this->setLargeur($datas["largeur"]);
            }
            if(isset($datas["longueur"]))
            {
                $this->setLongueur($datas["longueur"]);
            }
            if(isset($datas["images"]))
            {
                $this->setImages($datas["images"]);
            }
            if(isset($datas["etat"]))
            {
                $this->setEtat($datas["etat"]);
            }
        }
    }