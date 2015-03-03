<?php

$con=mysql_connect("localhost","zxb","123456");
if(!$con){
    die('Could not conect'.mysql_error());
}

mysql_select_db('world',$con);

$result=mysql_query("select Name,CountryCode from city");

while($row=mysql_fetch_array($result)){
    echo $row['Name']."------".$row['CountryCode'];
    echo "<br/>";
}

mysql_close($con);
?>