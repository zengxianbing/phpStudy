<meta http-equiv="Content-Type" content="text/html; charset=gbk"> 
<?php 
include("IncDB.php"); 
$result=mysql_query("SELECT * FROM intd",$link); 
$row=mysql_fetch_row($result); 
while($row) 
{ 
echo "ID: ".$row[0]." 姓名: ".$row[1]." 时间: ".$row[3]."<br>"; 
echo $row[2]; 
echo "<hr><br>"; 
$row=mysql_fetch_row($result); 
} 
mysql_close($link); 
?> 
<form method="POST" action="InsetToDB.php"> 
昵称:<input type="text" size="8"; name="name"> 
<p>内容:<textarea rows="5" name="text" cols="60"></textarea> 
</p> 
<p><input type="submit" value="提交" name="B1"><input type="reset" value="重置" name="B2"></p> 
</form> 