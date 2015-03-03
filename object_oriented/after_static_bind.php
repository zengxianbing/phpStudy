<?php

class A{
    public static function who() {
        echo __CLASS__;
    }
    public static function test() {
        self::who();
    }
    public  static function test1() {
      //  static::who();
    }
}

class B extends A{
    public static function who() {
        echo __CLASS__;
    }
}

B::test();
B::test1();
class TestChild extends TestParent{
    public function __construct() {
        static::who();
    }
    
    public function test() {
        $o=new TestParent();
    }
    
    public static function who() {
        echo __CLASS__."";
    }
}
class TestParent{
    public function __construct() {
        static::who();
    }
    
    public static function who(){
        echo __CLASS__."";
    }
}

$o=new TestChild();
$o->test();































?>