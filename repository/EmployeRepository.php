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
            $req = $this->db->prepare('INSERT INTO enclos ( getType, largeur, longueur, images) VALUE (:getType, :largeur, :longueur,:images)');

            $uploadedFile = $_FILES['images'];
    if ($uploadedFile['error'] === UPLOAD_ERR_OK) {
        // Définir le chemin où enregistrer le fichier
        $uploadDir = 'uploads/'; // Répertoire où vous souhaitez stocker les images
        $uploadPath = $uploadDir . basename($uploadedFile['name']);

        // Déplacer le fichier vers le répertoire d'upload
        move_uploaded_file($uploadedFile['tmp_name'], $uploadPath);

        // Enregistrement du chemin dans la base de données
        $enclos->setImages($uploadPath);
    }

            $req->execute([
                'getType' => $enclos->getType(),
                'largeur' => $enclos->getLargeur(),
                'longueur' => $enclos->getLongueur(),
                'images'=> $enclos->getImages()
            ]);
            $enclos = $this->db->lastInsertId();
            return $enclos;
        }

        public function addAnimals(Animale $animale, $enclos_id)
{
    $req = $this->db->prepare('INSERT INTO animale (getType, nom, poids, age, faim, dormir, malade, enclos_id) VALUE (:getType, :nom, :poids, :age, :faim, :dormir, :malade, :enclos_id)');
            
    $animale->setFaim(true);
    $animale->setDormir(true);
    $animale->setMalade(true);

    $req->execute([
        'getType' => $animale->getGetType(),
        'nom' => $animale->getNom(),
        'poids' => $animale->getPoids(),
        'age' => $animale->getAge(),
        'faim' => $animale->getFaim(),
        'dormir' => $animale->getDormir(),
        'malade' => $animale->getMalade(),
        'enclos_id' => $enclos_id // Ajoutez cette ligne pour lier l'enclos_id
    ]);

    $animaleId = $this->db->lastInsertId();
    return $animaleId;
}
    public function getAllEnclos()
    {
        $req = "SELECT * FROM enclos";
        $stmt = $this->db->query($req);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getEnclosById($id)
    {
    $req = $this->db->prepare('SELECT * FROM enclos WHERE id = :id');
    $req->execute(['id' => $id]);
    return $req->fetch(PDO::FETCH_ASSOC);
    }
    public function getAnimauxByEnclosId($enclosId) {
        $req = $this->db->prepare('SELECT * FROM animale WHERE enclos_id = :enclosId');
        $req->execute(['enclosId' => $enclosId]);
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteAnimalById($animalId)
{
        $query = "DELETE FROM animale WHERE `animale_id` = :animalId"; 
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":animalId", $animalId, PDO::PARAM_INT);
        $stmt->execute();
    return true; 
    }
}


