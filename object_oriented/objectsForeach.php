<?php

class MyClass
{

    public $var1 = 'value 1';

    public $var2 = 'value 2';

    public $var3 = 'value 3';

    protected $protected = 'protected var';

    private $private = 'private var';

    function iterateVisible()
    {
        echo "MyClass::iterateVisible";
        foreach ($this as $key => $value) {
            print "$key=>$value";
        }
    }
}

$class=new MyClass();

foreach ($class as $key=>$value){
    print "$key=>$value";
}

echo "";
$class->iterateVisible();

class  MyIterator implements Iterator{
    private $var=array();
    
    public  function __construct($array){
        if(is_array($array)){
            $this->var=$array;
        }
    }
    
    public function rewind(){
        echo "rewinding";
        reset($this->var);
    }
    
    public function  current(){
        $var=current($this->var);
        echo "current:$var";
        return $var;
    }
    
    public function key() {
        $var=key($this->var);
        echo "key:$var ";
        return $var;
    }
    
    public function next() {
        $var=next($this->var);
        echo "next:$var ";
        return $var;
    }
    
    public function valid() {
        $var=$this->current()!==false;
        echo "valid:{$var}";
        return $var;
    }
}

$values=array(1,2,3);
$it=new MyIterator($values);

foreach ($it as $a=>$b){
    print "$a:$b";
}


class MyCollection implements IteratorAggregate
{
    private $items=array();
    private $count=0;
    
    public function getIterator() {
        return new MyIterator($this->items);
    }
    
    public function add() {
        $this->items[$this->count++]=$value;
    }
}














?>