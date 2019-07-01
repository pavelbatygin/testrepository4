<?php 
//Устанавливаем соединение с FTP-сервером 
require_once("19.php"); 
ftp_chdir($link, 2901);
//Инициируем загрузку файла на FTP-сервер 
$ret=ftp_nb_put($link, "text.txt", "text.txt", FTP_BINARY); 
//Цикл загрузки 
while($ret==FTP_MOREDATA) 
{ 
//Выводим точки, чтобы пользователь знал, 
//что процесс загрузки идет 
echo "."; 
//Продолжаем загрузку 
$ret=ftp_nb_continue($link); 
} 
if ($ret!=FTP_FINISHED) 
exit("<br> Во время загрузки файла произошла ошибка ..."); 
?> 
