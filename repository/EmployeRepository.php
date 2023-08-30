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
            $req = $this->db->prepare('INSERT INTO enclos ( getType, largeur, longueur, profondeur, hauteur, salinite, population) VALUE (:getType, :largeur, :longueur, :profondeur, :hauteur, :salinite)');

            $req->execute([
                'getType' => $enclos->getType(),
                'largeur' => $enclos->getLargeur(),
                'longueur' => $enclos->getLongueur(),
                'profondeur' => $enclos->getProfonder(),
                'hauteur' => $enclos->getHauteur(),
                'longueur' => $enclos->getLongueur(),
                'salinite' => $enclos->getSalinite()
            ]);
            $enclos = $this->db->lastInsertId();
            return $enclos;
        }

        public function addAnimals(Animale $animale)
        {
            $req = $this->db->prepare('INSERT INTO animale (getType, nom, poids, age, faim, dormir, malade, enclos_id) VALUE (:getType, :nom, :poids, :age, :faim, :dormir, :malade, :enclos_id)');
            
            $animale->setFaim(false);
            $animale->setDormir(false);
            $animale->setMalade(false);

            $req->execute([
                'getType' => $animale->getGetType(),
                'nom' => $animale->getNom(),
                'poids' => $animale->getPoids(),
                'age' => $animale->getAge(),
                'faim' => $animale->getFaim(),
                'dormir' => $animale->getDormir(),
                'malade' => $animale->getMalade(),
            ]);
            $animale = $this->db->lastInsertId();
            return $animale;
        }
    }
