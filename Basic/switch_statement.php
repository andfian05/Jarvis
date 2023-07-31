<?php 

//http://localhost/jarvis/switch_statement.php

$hari = 'Sabtu';
$mood;

switch($hari){
    case 'Senin';
        $mood = 'Senin | Strees';
        break;
    case 'Selasa';
        $mood = 'Selasa | Pening';
        break;
    case 'Rabu';
        $mood = 'Rabu | Mual';
        break;
    case 'Kamis';
        $mood = 'Kamis | Menangis';
        break;
    case 'Jumat';
        $mood = 'Jumat | Bahagia';
        break;
    case 'Sabtu';
    case 'Ahad';
        $mood = 'Ahad | Healing';
        break;
    default :
        $mood = 'Biasa Saja';
        break;

}

echo 'Hari Ini Saya ' . $mood;

?>