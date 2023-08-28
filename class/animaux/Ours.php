<?php
        class Ours extends Animale
        {
            public function __construct(array $datas)
            {
                parent::__construct($datas);
            }

            public function son()
            {
                return "grrr !!!";
            }
            public function bouger()
            {
                return "je tourne en rond";
            }
          
            
        }