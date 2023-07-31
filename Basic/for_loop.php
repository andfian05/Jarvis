<?php 

// http://localhost/jarvis/for_loop.php

// for($i = 1; $i <= 10; $i++) {
//     echo '<br/> Angka ' . $i;
// }

$mood = ['Bahagia', 'Sedih', 'Senyum', 'Stress', 'Badmood', 'Full Senyum', 'Healing'];

for($i = 0; $i <= 6; $i++){
    echo '<br/> Hari Ini Saya ' . $mood[$i];
}


?>