<?php
    class EnclosTigre extends Enclos
    {
        public function __construct(array $datas)
        {
            parent::__construct($datas);
        }
         public function getType()
         {
            return 'Tigres';
         }
    }