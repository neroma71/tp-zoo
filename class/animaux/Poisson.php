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
                return "coule au fond";
            }
            public function nager()
            {
                return "je nage de hauten bas et de gauche à droite";
            }
            public function speciale()
            {
                return "profondeur : 10m";
            }
            public function salinite()
            {
                return "salinité : 17%";
            }
            
        }