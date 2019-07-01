<?php 
$dfg = 55;
$mame = $_POST['name'];
if ($mame == $dfg) { echo "   Вы угадали!";}
if ($mame > $dfg) { echo "   Выберите число меньше";}
if ($mame < $dfg) { echo "  Выберите число больше";}
?>