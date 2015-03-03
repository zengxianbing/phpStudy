<?php
 include("header.php");   
  echo "Hello World!";
  //This is a comment
  /*
  This is
  a comment
  block
  */
  $txt="Hello World";
  echo  $txt; 
  
  
  $txt1="Hello World";
  $txt2="1234";
  echo $txt1." ".$txt2;
  
  
  echo strlen("Hello World");
  
  echo strpos("Hello World","world");
  
  $d=date("D");
  if($d=="Fri")
     echo "Have a nice weekend!";
  elseif($d=="Sun")
     echo "Have a nice Sunday!";
  else 
     echo "Have a nice day!";
	 
  $x=2;
  switch($x)
  {
    case 1:
	    echo "Number 1";
		break;
	case 2:
	    echo "Number 2";
		break;
	case 3:
	    echo "Number 3";
		break;
	default:
	    echo "No number between 1 and 3";
		
		

   $names=array("Peter","Quagmire","Joe");
   
   $names[0]="Peter";
   $names[1]="Quagmire";
   $names[2]="Joe";
   
   echo $names[1]."and".$names[2]."are".$names[0];
   
   $ages=array("Peter"=>32,"Quagmire"=>30,"Joe"=>34);
   
   $ages['Peter']="32";
   $ages['Quagmire']="30";
   $ages['Joe']="34";
   
   echo "Peter is".$ages['Peter']."years old.";
   
   $families=array
   (
     "Griffin"=>array
	 (
	   "Peter",
	   "Lois",
	   "Megan"
	 ),
	 "Quagmire"=>array
	 (
	  "Glenn"
	  ),
	  "Brown"=>array
	  (
	    "Cleveland",
		"Loretta",
		"Junior"
	  )
   );
  }
	 
	 
  echo "Is".$families['Griffin'][2].
  " a part of the Griffin family?";
	 

	$i=1;
	while($i<=5)
	{
	  echo "The number is".$i."<br/>";
	  $i++;
	}
	 
	 
	 $i=0;
	 do
	 {
	    $i++;
		echo "The number is".$i."<br/>";
	 }
	 while($i<5);
	 
	 
	 for($i=1;$i<=5;$i++)
	 {
	   echo "Hello World!<br/>";
	 }
	 $arr=array("one","two","three");
	 foreach($arr as $value)
	 {
	   echo "Value:".$value."<br/>";
	 }
	 
	 function writeMyName($fname)
	 {
	    echo $fname."Yang.<br/>";
	 }
	 
	 echo "My name is";
	 writeMyName("David");
	 
	 echo "My name is";
	 writeMyName("Mike");
	 
	 echo "My name is";
	 writeMyName("John");
	 
	 function writeMyName1($fname,$punctuation)
	 {
	    echo $fname."Yang".$punctuation."<br/>";
	 }
	 echo "My name is";
	 writeMyName1("David",".");
	 
	 echo "My name is";
	 writeMyName1("Mike","!");
	 echo "My name is";
	 writeMyName1("John","...");
	 
	 function add($x,$y)
	 {
	 $total=$x+$y;
	 return $total;
	    
	 }
	 echo "1+16=".add(1,16);
	 
echo date("Y/m/d");
echo "<br />";
echo date("Y.m.d");
echo "<br />";
echo date("Y-m-d");
$tomorrow = mktime(0,0,0,date("m"),date("d")+1,date("Y"));
echo "Tomorrow is ".date("Y/m/d", $tomorrow);

	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
?>

<br/>

<?php
require("wrongFile.php");
echo "Hello World!";
?>
<?php
//读取文件
/* $file=fopen("welcome.txt","r") or exit("Unable to open file!");
while(!feof($file))
{
  echo fgets($file)."<br/>";
 }
 fclose($file); */
?>

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
<?php
unset($_SESSION['views']);
?>

<?php
session_destroy();
?>












