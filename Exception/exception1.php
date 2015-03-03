<?php
function inverse($x) {
    if(!$x){
        throw new Exception('Division by zero');
    }
    else return 1/$x;
}

try {
    
    echo inverse(5)."";
    echo inverse(0)."";
} catch (Exception $e) {
    echo 'Caught exception:'.$e->getMessage(),"";
}
echo "<br/>";
echo 'Hello World!';
class MyException extends Exception{}

class Test{
    public function testing() {
        try {
            try {
                throw new MyException('foo!');
            } catch (Exception $e) {
                throw $e;
            }
        } catch (Exception $e) {
           var_dump($e->getMessage());
        }
    }
}


$foo=new Test;
$foo->testing();



class TestException{
    public $var;
    const THROW_NONE=0;
    const THROW_CUSTOM=0;
    const THROW_DEFAULT=0;
    
    
    
    function __construct($avalue=slef::THROW_NONE) {
        switch ($avalue) {
            case self::THROW_CUSTOM:
                throw new MyException('1 is an invalid parameter',5);
                break;

            case self::THROW_DEFAULT:
                throw new Exception('2 isnt allowed as a parameter',6);
                break;
            default:
                $this->var=$avalue;
            break;
        }
    }
}


try {
    $o=new TestException(TestException::THROW_CUSTOM);
} catch (Exception $e) {
    echo "Caught my exception",$e;
    $e->customFunction();
} catch (Exception $e) {

    echo "Caught Default Exception",$e;
}

var_dump($o);
echo " ";


try {
    
    $o=new TestException(TestException::THROW_DEFAULT);
} catch (Exception $e) {
    echo "Caught my exception",$e;
    $e->customFunction();
} catch (Exception $e) {
    echo "Caught Default Exception",$e;
}

var_dump($o);
echo "";

try {

    $o=new TestException(TestException::THROW_CUSTOM);
} catch (Exception $e) {
    echo "Default Exception caught",$e;
}


var_dump($o);
echo "";


try {
    $o=new TestException();
} catch (Exception $e) {
    echo "Default Exception caught",$e;
}

var_dump($o);
echo "";



























?>