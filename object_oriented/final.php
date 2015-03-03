<?php

class BaseClass{
    public function test() {
        echo "BaseClass::test() called";
    }
    
    final public function moreTesting() {
          echo "BaseClass::moreTesting() called";
    }
    
}

class ChildClass extends BaseClass{
    public function moreTesting() {
        echo "ChildClass::moreTesting() called";
    }
}
?>