<?php
        class Tigres extends Animale
        {
            public function __construct(array $datas)
            {
                parent::__construct($datas);
            }

            public function son()
            {
                return "groarhhgroahhr";
            }
            public function bouger()
            {
                return "tourne en rond";
            }
            public function vagabonder()
            {
                return "je me promène dans le zoo";
            }
            
        }
   