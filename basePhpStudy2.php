<?php 
setcookie("user", "Alex Porter", time()+3600);
?>
<?php
// Print a cookie
echo $_COOKIE["user"];

// A way to view all cookies
print_r($_COOKIE);
?>

<?php
if (isset($_COOKIE["user"]))
  echo "Welcome " . $_COOKIE["user"] . "!<br />";
else
  echo "Welcome guest!<br />";
?>
<?php 
// set the expiration date to one hour ago
setcookie("user", "", time()-3600);
?>
<?php
session_start();
// store session data
$_SESSION['views']=1;
?>
<?php
//retrieve session data
echo "Pageviews=". $_SESSION['views'];
?>

<html>
<body>
<?php
//create function with an exception
function checkNum($number)
 {
 if($number>1)
  {
  throw new Exception("Value must be 1 or below");
  }
 return true;
 }

//trigger exception
checkNum(2);
?>
<?php
if(!file_exists("welcome.txt"))
 {
 die("File not found");
 }
else
 {
 $file=fopen("welcome.txt","r");
 }
?>


<?php
ob_start();
echo date("Y/m/d");
echo "<br />";
echo date("Y.m.d");
echo "<br />";
echo date("Y-m-d");

$tomorrow = mktime(0,0,0,date("m"),date("d")+1,date("Y"));
echo "Tomorrow is ".date("Y/m/d", $tomorrow);

/* $file=fopen("welcome.txt","r") or exit("Unable to open file!");
while (!feof($file)) 
  { 
  echo fgetc($file); 
  }
fclose($file); */
?>

<h1>鼓风机<h1>
<?php
require("wrongFile.php");
echo "Hello World!";
?>
</body>
</html>

