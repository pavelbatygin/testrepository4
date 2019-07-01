<?php


$prod =  array ("1",  "    Безуглая", "              3", "            4", "          5");
$lo8 = $prod[2]+$prod[3]-$prod[4];
$prod =  array ("1",  "    Безуглая", "              3", "            4", "          5", "                   $lo8");
$prod2 = array ("2",  "    Леонтьев", "              6", "            4", "          9", "");
$lo9 = $prod2[2]+$prod2[3]-$prod2[4];
$prod2 = array ("2",  "    Леонтьев", "              6", "            4", "          9", "                   $lo9");
$prod3 = array ("3",  "    Семёнов ", "              1", "            7", "          6", "");
$lo10 = $prod3[2]+$prod3[3]-$prod3[4];
$prod3 = array ("3",  "    Семёнов ", "              1", "            7", "          6", "                   $lo10");
$lo4 = $prod[2]+$prod2[2]+$prod3[2];
$lo5 = $prod[3]+$prod2[3]+$prod3[3];
$lo6 = $prod[4]+$prod2[4]+$prod3[4];
$lo7 = $lo8+$lo9+$lo10;


$prod4 = array ("ВСЕГО", "                      $lo4 ", "           $lo5", "         $lo6", "                  $lo7");
print "<pre><table>";
printf("%-20s%23s\n", "Номер" . " ФИО_водителя ". " Остаток_на_начало ". " Получено ". " Израсходовано "," Остаток ");
printf("%'-78s\n","");
foreach ($prod as $key )  {printf($key." "); }
printf("\n");
foreach ($prod2 as $key2 )  {printf($key2." "); }
printf("\n");
foreach ($prod3 as $key3 )  {printf($key3." "); }
printf("\n");
printf("%'-78s\n","");
foreach ($prod4 as $key4 )  {printf($key4." "); }

print "</br></br>";

$a = "Romanov";
$b = "Ivan";
$c = "Petrovich";
printf ($a);
printf (" ");
printf ($b[0]);
printf (".");
printf ($c[0]);
printf (".");
?>
