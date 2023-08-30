<?php
    class Aquarium extends Enclos
    {
      private string $profondeur;
      
        public function __construct(array $datas, $profondeur)
        {
            parent::__construct($datas);
        }

         public static function profondeur()
         {
            return 20;
         }
         public function getType()
         {
            return 'Aquarium';
         }
         public function salinite()
         {
            return 10;
         }
 }