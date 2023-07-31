<?php

// http://localhost/jarvis/continue.php

$hewan = ['Kucing', 'Kuda', 'Kangguru', 'Koala', 'Kambing', 'Kijang'];

for($i = 0; $i < count($hewan); $i++){
    if($hewan[$i] == 'Kucing' || $hewan[$i] == "Koala"){
        echo 'Lucu';
        continue;
    } 

    echo "Tidak Comel!! <br/>";
}


?>