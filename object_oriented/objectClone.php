<?php

class SubObject
{
    static $instance=0;
    public $instance;
    
    public function __construct() {
        $this->instance=++self::$instance;
    }
    
    public function __clone(){
        $this->instance=++self::$instances;
    }
}

class MyCloneable{
    public $object1;
    public $object2;
    
    function __clone() {
        $this->object1=clone $this->object1;
    }
}

$obj=new MyCloneable();

$obj->objcet1=new SubObject();
$obj->objcet2=new SubObject();
$obj2=clone $obj;

print_r($obj2);


















?>