<?php
    class Voliere extends Enclos
    {
        public function __construct(array $datas)
        {
            parent::__construct($datas);
        }
         public function hauteur()
         {
            return 20;
         }
         public function getType()
         {
            return 'Volière';
         }
 }