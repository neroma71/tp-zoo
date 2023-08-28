<?php
    class Aquarium extends Enclos
    {
        public function __construct(array $datas)
        {
            parent::__construct($datas);
        }
         public function profondeur()
         {
            return 20;
         }
         public function type()
         {
            return 'Poissons';
         }
         public function salinite()
         {
            return 10;
         }
 }