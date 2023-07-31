<?php 

//http://localhost/jarvis/ternary.php

$hari = 'Kamis';
$mood = ($hari == 'Sabtu' || $hari == 'Ahad') ? 'Full Healing' : 'No Healing';

echo 'Hari Ini Saya ' . $mood;



?>