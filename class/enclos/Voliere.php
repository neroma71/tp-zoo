<?php
    class Voliere extends Enclos
    {

        private string $hauteur;

        public function __construct(array $datas, $hauteur)
        {
            $this->hauteur = $hauteur;
            parent::__construct($datas);
        }
         public function getType()
         {
            return 'Volière';
         }
        /**
         * Get the value of hauteur
         */ 
        public function getHauteur()
        {
                return $this->hauteur;
        }

        /**
         * Set the value of hauteur
         *
         * @return  self
         */ 
        public function setHauteur($hauteur)
        {
                $this->hauteur = $hauteur;

                return $this;
        }
}
