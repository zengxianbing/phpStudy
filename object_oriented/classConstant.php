<?php

class MyClass
{
    
    const  constant='constant value';
    function showConstant(){
        echo slef::constant."";
    }
}

echo MyClass::constant."";
$classname="MyClass";
//echo $classname::constant;

function __autoload($class_name){
    require_once $class_name.'.php';
}

$obj=new MyClass1();

$obj2=new MyClass1();

class BaseClass{
    function __construct(){
        print 'In BaseClass constructor';
    }
}

class SubClass extends BaseClass{
    function __construct(){
        parent::__construct();
        print "In SubClass constructor";
    }
}
echo "<br/>";
$obj3=new BaseClass();
echo "<br/>";
$obj4=new SubClass();


class MyClass5
{
    public $public='Public';
    protected $protected='Protected';
    private  $private='Private';
    
    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

$obj5=new MyClass5();
echo $obj5->public;
//echo $obj5->protected;
//echo $obj5->private;
echo "<br/>";
$obj5->printHello();

class MyClass6 extends MyClass5
{
    protected  $protected='Protected2';
    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
    
}

$obj6=new MyClass6();
echo $obj6->public;
//echo $obj5->protected;
//echo $obj5->private;
echo "<br/>";
$obj6->printHello();


class  Bar
{
    public function test(){
        $this->testPrivate();
        $this->testPublic();
    }
    
    public  function testPublic(){
        echo "Bar::testPublic";
    }
    
    private function testPrivate(){
        echo "Bar::testPrivate";
    }
}

class  Foo extends  Bar
{
    public function testPublic(){
        echo "Foo::testPublic";
    }
    
    private function testPrivate(){
        echo "Foo::testPrivate";
    }
    
}

echo "<br/>";
$myFoo=new foo();
$myFoo->test();


class  MyClass7
{
    public function  __construct(){}
    public  function MyPublic(){}
    
    protected function MyProtected(){}
    
    private function MyPrivate(){}
    
    function Foo(){
        $this->MyPublic();
        $this->MyProtected();
        $this->MyPrivate();
    }
    
}

$myclass7=new MyClass7();
$myclass7->MyPublic();
//$myclass7->MyProtected();
//$myclass7->MyPrivate();
$myclass7->Foo();


class MyClass8 extends MyClass7
{
    function Foo2()
    {
        $this->MyPublic();
        $this->MyProtected();
       // $this->MyPrivate();
    }
}

$myclass8=new MyClass8();
$myclass8->MyPublic();
$myclass8->Foo2();

































?>