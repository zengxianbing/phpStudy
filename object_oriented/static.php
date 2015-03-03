<?php

class Foo
{
    public static $my_static='foo';
    
    public function staticValue(){
        return self::$my_static;
    }
}

class Bar extends Foo
{
    public function  fooStatic(){
        return parent::$my_static;
    }
}
print Foo::$my_static."";

$foo=new Foo();
print $foo->staticValue();
print $foo->my_static."";

//print $foo::$my_static."";

$classname="Foo";
//print $classname::$my_static."";

print Bar::$my_static."";
$bar=new Bar();
print $bar->fooStatic()."";



















?>