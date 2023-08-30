<?php
    class EmployeRepository
    {
        private PDO $db;

        public function __construct(PDO $db){
            $this->setDb($db);
        }

        /**
         * Get the value of db
         */ 
        public function getDb()
        {
                return $this->db;
        }

        /**
         * Set the value of db
         *
         * @return  self
         */ 
        public function setDb($db)
        {
                $this->db = $db;

                return $this;
        }

        public function add(Enclos $enclos)
        {
            $req = $this->db->prepare('INSERT INTO enclos (largeur, longueur, population, getType) VALUE  (:largeur, :longueur, :population, :getType)');

            $req->execute([
                'largeur' => $enclos->getLargeur(),
                'longueur' => $enclos->getLongueur(),
                'population' => $enclos->getPopulation(),
                'getType' => $enclos->getType(),
            ]);
        }
    }