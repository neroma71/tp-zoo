<?php
    class Aquarium extends Enclos
    {
      private string $profondeur;
      private string $salinite
        public function __construct(array $datas, $profondeur)
        {
            parent::__construct($datas);
            $this->profondeur = $profondeur;
            $this->salinite = $salinite;
        }

         public function getProfondeur()
         {
            return $this->profondeur;
         }
         public function getType()
         {
            return 'Aquarium';
         }
         public function getSalinite()
         {
            return $this->salinite
         }
 }
