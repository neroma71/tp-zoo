<?php
        class Tigres extends Animale
        {
            public function __construct(array $datas)
            {
                parent::__construct($datas);
            }

            public function son()
            {
                return "grhoarg";
            }
            public function bouger()
            {
                return "tourne en rond";
            }
            public function vagabonder()
            {
                return "je me promène dans le zoo";
            }
            public function speciale()
            {
                return "";
            }
            public function salinite()
            {
                return "";
            }
        }
   