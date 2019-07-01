<?php 
//Адрес FTP-сервера 
$ftp_server="10.9.10.146"; 
//Пользователь 
$ftp_user= "student"; 
//Пароль 
$ftp_password="P@ssw0rd"; 
//задаем время исполнения скрипта, равное 120с 
set_time_limit(120); 
//Пытаемся установить соединение с FTP-сервером 
$link=ftp_connect($ftp_server); 
if(!$link) exit ("К сожалению, не удается установить соединение с FTP-сервером $ftp_server"); 
//Осуществляем регистрацию на сервере 
$login= ftp_login($link, $ftp_user, $ftp_password); 
//$login=ftp_login($conn_id, $ftp_user, $ftp_password 
ftp_pasv($link, true);
if(!$login) exit ("К сожалению, не удается зарегистрироваться на сервере. Проверьте регистрационные данные"); 
?> 
