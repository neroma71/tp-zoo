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
                return "tombe de sa branche";
            } 
            public function speciale()
            {
                return "hauteur : 25m";
            }
            public function salinite()
            {
                return "";
            }
        }