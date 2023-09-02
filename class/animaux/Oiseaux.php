<?php
        class Oiseaux extends Animale
        {
            public function __construct(array $datas)
            {
                parent::__construct($datas);
            }

            public function son()
            {
                return "cuit cuit";
            }
            
            public function bouger()
            {
                return "remue la queue";
            } 
        }