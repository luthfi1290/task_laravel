<?php 
    require_once 'index.php';
    require_once 'dataplayer.php';
    require_once 'display.php';

   
    class method 
    {
        public function input() 
        {
            $file = fopen("php://stdin","r");
            $input = fgets($file);
            $input = trim($input);
            fclose($file);
            return $input;
        }

        public function attack($attack) 
        {
            foreach (player::$allplayer as $key => $value) {
                $mana = $value['mana'];
                $sisa = $mana - 5;
                if($value['nama'] == $attack)
                {
                    player::$allplayer[$key]['mana'] = $sisa;
                }
            }
        }

        public function defend($defend)
        {
            foreach (player::$allplayer as $key => $value) {
                $blood = $value['blood'];
                $basic = 20;
                $critical = rand(0,5);
                $miss = rand(0,10);
                $attack = ($basic + $critical) - $miss;
                $sisa = $blood - $attack;
                if($value['nama'] == $defend)
                {
                    player::$allplayer[$key]['blood'] = $sisa;
                }
            }
        }

        public function cek(){
            foreach (player::$allplayer as $key => $value) {
                if($value['blood'] <= 0){
                    unset(player::$allplayer[$key]);
                }
            }
        }
    }



?>