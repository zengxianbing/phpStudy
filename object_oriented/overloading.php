<?php

class MemberTest{
    private $data=array();
    
    public $declared=1;
    
    private $hidden=2;
    
    public function  __set($name,$value){
        echo "Setting'$name'to'$value'";
        $this->data[$name]=$value;
    }
    
    
    public function  __get($name){
        echo "Getting '$name'";
        if(array_key_exists($name,$this->data)){
            return $this->data[$name];
        }
        
        $trace=debug_backtrace();
       /*  trigger_error(
            'Undefined property via __get(): ' . $name .
            ' in ' . $trace[0]['file'] .
            ' on line ' . $trace[0]['line'],
            E_USER_NOTICE); */
        return null;
    }
    /**  PHP 5.1.0之后版本 */
    public function __isset($name) {
        echo "Is '$name' set? ";
        return isset($this->data[$name]);
    }
    
    /**  PHP 5.1.0之后版本 */
    public function __unset($name) {
        echo "Unsetting '$name' ";
        unset($this->data[$name]);
    }
    public function getHidden(){
        return $this->hidden;
    }
    
    
    
}
echo "<pre> ";

$obj = new MemberTest;

$obj->a = 1;
echo $obj->a . " ";

var_dump(isset($obj->a));
unset($obj->a);
var_dump(isset($obj->a));
echo " ";

echo $obj->declared . " ";

echo "Let's experiment with the private property named 'hidden': ";
echo "Privates are visible inside the class, so __get() not used... ";
echo $obj->getHidden() . " ";
echo "Privates not visible outside of class, so __get() is used... ";
echo $obj->hidden . " ";










class MethodTest{
    public function __call($name,$arguments){
        echo "Calling object method'$name'"
            .implode(',',$arguments)." ";
    }
    
    public static function  __callstatic($name,$arguments){
        echo "Calling static method '$name'"
             .implode(',',$arguments)." ";
    }
}

$obj=new MethodTest;
$obj->runTest('in object context');

MethodTest::runTest('in static context');



















?>