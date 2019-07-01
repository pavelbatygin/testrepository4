<?php
$link = mysql_connect('localhost', 'root', 'root');
if (!$link) {
    die('Не удалось соединиться : ' . mysql_error());
}
$databasename="bd1";
mysql_select_db($databasename) or die ('Невозможно открыть базу данных $databasename');

mysql_select_db($databasename) or  die ("Невозможно открыть базу данных $databasename: ".mysql_error());
print "Успешный выбор базы данных \"$databasename\" <br />";  
mysql_close();

$host="localhost";
$user="root";
$pass="root ";
$db="bd1";

function write_form(){
     print <<<FORM
<form action="{$_SERVER['PHP_SELF']}" method="post">
<p> Введите номер группы:
<input type="text" name="Nomer" value="" />
</p>
<p> Название:
<input type="text" name="Nazvanie" value="" />
</p>
<input type="submit" value="ВВОД" />
</form>
FORM;
 }
function add_to_database($Nomer,$Nazvanie,$dba_error)
{
$host="localhost";
$user="root";
$pass="root ";
$db="bd1";

global $host, $user, $pass, $db;
$link= mysql_pconnect('localhost', 'root', 'root');
if (!link) 
{$dba_error=mysql_error();return false;} 

if (! mysql_select_db($db,$link))
{$dba_error=mysql_error();return false;}

$Nomer=mysql_real_escape_string($Nomer,$link);
$Nazvanie=mysql_real_escape_string($Nazvanie,$link);

$query="insert into Gruppa (Nomer,Nazvanie)
values ('$Nomer','$Nazvanie')";
if   (! mysql_query($query, $link)) {$dba_error=mysql_error();return false;}
return true;
}
if (! empty ($_REQUEST['Nomer']) && ! empty ($_REQUEST['Nazvanie']))
{
    $dba_error="";
    $ret=add_to_database($_REQUEST['Nomer'],$_REQUEST['Nazvanie'], $dba_error);
    if (! $ret) {print "Ошибка: $dba_error<br />\n";}
    else {print "Спасибо <br />\n";} }
 else {    write_form();	}
 

try {
	$html="<table border=1><tr><td>ФИО</td><td>Группа</td></tr>";
	$dbh = new PDO('mysql:host=localhost;dbname=bd1', 'root', 'root');
    foreach($dbh->query('select * from Gruppa') as $row) {
        $html=$html.'<tr><td>'.$row[Nomer].'</td><td>'.$row[Nazvanie].'</td></tr>';
    }
    $dbh = null;
	$html=$html."</table>";
	echo $html;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>