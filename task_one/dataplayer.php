<?php 
    class player {
        public $nama;
        public $blood = 100;
        public $mana = 40;
        public static $allplayer = array();

        public function setName($nama)
        {
            $this->nama = $nama;
            $this->blood;
            $this->mana;
        }

        public function getName()
        {
            return $this->nama;
        }

        public function getBlood()
        {
            return $this->blood;
        }

        public function getMana()
        {
            return $this->mana;
        }

        public static function listplayer()
        {
            $j = 1;
            foreach (self::$allplayer as $key => $value) {
            echo "$j. " . " Name = " . $value['nama'];
            echo " Blood = " . $value['blood'];
            echo " Mana  = " . $value['mana'] . PHP_EOL;
            $j++;
            }
        }

    }



?>