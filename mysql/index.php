<meta http-equiv="Content-Type" content="text/html; charset=gbk"> 
<?php 
include("IncDB.php"); 
$result=mysql_query("SELECT * FROM intd",$link); 
$row=mysql_fetch_row($result); 
while($row) 
{ 
echo "ID: ".$row[0]." ����: ".$row[1]." ʱ��: ".$row[3]."<br>"; 
echo $row[2]; 
echo "<hr><br>"; 
$row=mysql_fetch_row($result); 
} 
mysql_close($link); 
?> 
<form method="POST" action="InsetToDB.php"> 
�ǳ�:<input type="text" size="8"; name="name"> 
<p>����:<textarea rows="5" name="text" cols="60"></textarea> 
</p> 
<p><input type="submit" value="�ύ" name="B1"><input type="reset" value="����" name="B2"></p> 
</form> 