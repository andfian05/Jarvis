<?php

//http://localhost/jarvis/break.php

for($i = 1; $i <= 10; $i++){
    if($i == 7){
        break;
    } 

    echo $i . " ";

}


$hewan = ['Kucing', 'Kuda', 'Kangguru', 'Koala', 'Kambing'];

for($i = 0; $i < count($hewan); $i++){
    if($hewan[$i] == 'Kucing'){
        echo 'Lucu';
        break;
    } 

    echo "Tidak Comel!! <br/>";
}

?>