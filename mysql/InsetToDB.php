<?php 
include("IncDB.php"); 
$name=addslashes($_POST['name']); 
$text=addslashes($_POST['text']); 
$sql = "INSERT INTO `intd` (`id`, `name`, `text`, `datetime`) VALUES (NULL, '$name', '$text', now());"; 
//$sql="INSERT INTO `intd` ( , `name` , `text`,`datetime` ) VALUES ( ,'$name','$text',now())"; 
if(mysql_query($sql,$link)) 
{ 
echo "ÁôÑÔ³É¹¦£¡"; 
echo "<meta http-equiv=\"refresh\" content=\"1;URL=index.php\">"; 
} 
else 
echo "ÁôÑÔÊ§°Ü£¡"; 
mysql_close($link); 
?> 