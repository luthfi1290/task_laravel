<?php 
    require_once 'method.php';
    require_once 'dataplayer.php';
    require_once 'display.php';

    $input = new method;
    $player = new player;
    $display = new front;
    do{
        echo $display->menu();
        $option = $input->input();
        switch($option)
        {
            case 1 :
                system('clear');
                if(player::$allplayer != 0 && count(player::$allplayer) < 3)
                {
                    do{
                        echo "Insert name new player : ";
                        $nama = strtolower($input->input());
                        $player->setName($nama);
                        player::$allplayer []= array("nama" => $player->getName(),
                                        "blood" => $player->getBlood(),
                                        "mana" => $player->getMana() 
                                        );
                        $jml = count(player::$allplayer);
                        echo "jumlah player : " . $jml . "\n";
                        echo "apakah ingin membuat player lagi ? y/n : ";
                        $option2 = strtolower($input->input());
                        if ( (strcasecmp($option2,'n')) == 0 && $jml < 2){
                            system('clear');
                            echo "player minimal harus 2 \n";
                            break;
                        }elseif ((strcasecmp($option2,'n'))== 0 ) {
                            system('clear');
                            break;
                        }
                        else{
                            system('clear');
                        }
                    }while($jml < 3 ); 
                }else{
                    echo "player sudah mencapai batas maksimal \n";
                }        
            break;

            case 2 :
                do{
                system('clear');
                echo " Current player : " . count(player::$allplayer) . PHP_EOL;
                if(count(player::$allplayer) == 1){
                    $display->winner();
                }else{
                    $display->battle();
                }
                echo "mau kembali ? y/n : ";
                $option2 = strtolower($input->input());
                }while((!strcasecmp($option2,'y') == 0));
                system('clear');
            break;
            case 3 : 
                do{
                    if(count(player::$allplayer) == 1){
                        $display->winner();
                    }else{
                        $display->battle();
                        echo "Who will attack : ";
                        $attack = $input->input();
                        echo "Who will defend : ";
                        $defend = $input->input();
                        strtolower($input->attack($attack));
                        $input->defend($defend);
                    }
                    system('clear');
                    $input->cek();
                    if(count(player::$allplayer) == 1){
                        $display->winner();
                    }else{
                    $display->battle();
                    }
                    echo "Lanjut ? y/n : ";
                    $option3 = strtolower($input->input());
                }while(!strcasecmp($option3,'n') == 0);
                system('clear');
            break;
            
            case 4 : 
                $display->exit();
            break;
            default:
                system('clear');
                echo "pilihan tidak ada \n";
        }
    }while($option != 4);
?>