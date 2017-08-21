<?php 
    require_once 'index.php';
    require_once 'method.php';
    require_once 'dataplayer.php';



    class front{

        public function menu()
        {
            echo "====================================" . PHP_EOL;
            echo "      Welcome to Battle Arena       " . PHP_EOL;
            echo "====================================" . PHP_EOL;
            echo " Menu :                             " . PHP_EOL;
            echo " 1. Create new player               " . PHP_EOL;
            echo " 2. Status Player                   " . PHP_EOL;
            echo " 3. Start Fight!!!                  " . PHP_EOL;
            echo " 4. Exit                            " . PHP_EOL;
            echo "====================================" . PHP_EOL;
            echo "Options (1-4) : ";
        }

        public function create()
        {
            echo "====================================" . PHP_EOL;
            echo "        Create a new player         " . PHP_EOL;
            echo "====================================" . PHP_EOL;
            echo " Menu :                             " . PHP_EOL;
            echo " 1. Create new player               " . PHP_EOL;
            echo " 2. Back                            " . PHP_EOL;
            echo "====================================" . PHP_EOL;
            echo "Options (1-2) : ";
        }

        public function battle() 
        {
            system('clear');
            echo "====================================" . PHP_EOL;
            echo player::listplayer();
            echo "====================================" . PHP_EOL;
        }

        public function exit()
        {
            system('clear');
            echo "====================================" . PHP_EOL;
            echo "=      Terima Kasih banyak !!      =" . PHP_EOL;
            echo "====================================" . PHP_EOL;
        }

        public function winner(){
            system('clear');
            foreach (player::$allplayer as $key => $value) {
                $nama = $value['nama'];
                echo "===================================" . PHP_EOL;
                echo "Congratulation to " . $nama . " you the winner" . PHP_EOL;
                echo "===================================" . PHP_EOL;
            }
        }
    }



?>