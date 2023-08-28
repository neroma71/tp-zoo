<?php
        class Poisson extends Animale
        {
            public function __construct(array $datas)
            {
                parent::__construct($datas);
            }

            public function son()
            {
                return "gloup gloup";
            }
            public function bouger()
            {
                return "je tourne en rond";
            }
            public function nager()
            {
                return "je nage de hauten bas et de gauche à droite";
            }
            
        }