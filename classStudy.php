<?php
  class A
  {
     function foo()
	 {
	    if(isset($this)){
		   echo '$this is defined(';
		   echo get_class($this);
           echo ")";
		   }else{
		     echo "$this is not defined.";
		   }
	 }
	 
  
  }
  
  class B
  {
     function bar()
	 {
	    A::foo();
	 }
  }
  
  $a=new A();
  $a->foo();
  A::foo();
  $b=new B();
  $b->bar();
  B::bar();
  
  
?>
<?php

/*    // 成员声明
   $var='a default value';
   // 方法声明
  public function displayVar(){
     echo $this->var;
  } */
?>

<?php
  class SimpleClass
  {
    /*  public $var1='hello'.'world';
     public $var2=<<<<EOD
hello world
EOD:
     public $var3=1+2;
     public $var4=self::myStaticMethod();
     public $var5=$myVar; */
     
 // 正确的类成员定义：
    public $var6=myConstant;
    public $var7=self::classConstant;
    public $var8=array(true,false);	
	
	function  displayVar()
	{
	   echo "simpleClass displayVar";
	}
  }
?>

<br/>

<?php
$assigned=$instance;
$reference=&$instance;

$instance->var='$assigned will have this value';

$instance=null;

var_dump($instance);
var_dump($reference);
var_dump($assigned);
?>

<?php 
class ExtendClass extends SimpleClass
{
  function displayVar()
  {
     echo "Extending class";
	 parent::displayVar();
  }
}

$extends=new ExtendClass();
$extends->displayVar();
?>














