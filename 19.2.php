<?php 
//������������� ���������� � FTP-�������� 
require_once("19.php"); 
ftp_chdir($link, 2901);
//���������� �������� ����� �� FTP-������ 
$ret=ftp_nb_put($link, "text.txt", "text.txt", FTP_BINARY); 
//���� �������� 
while($ret==FTP_MOREDATA) 
{ 
//������� �����, ����� ������������ ����, 
//��� ������� �������� ���� 
echo "."; 
//���������� �������� 
$ret=ftp_nb_continue($link); 
} 
if ($ret!=FTP_FINISHED) 
exit("<br> �� ����� �������� ����� ��������� ������ ..."); 
?> 
