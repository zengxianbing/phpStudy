 
<?php 
$link=mysql_connect('localhost','zxb','123456'); 
if(!$link) 
{ 
die("<center>³ö´íÀ²:1!</center>"); 
} 
if(!mysql_select_db('lguestbook',$link)) 
{ 
die("<center>³ö´íÀ²:2!</center>"); 
} 
?> 
