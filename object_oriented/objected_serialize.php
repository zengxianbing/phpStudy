<?php
class A{
    public $one=1;
    public  function show_one() {
        echo $this->one;
    }
}

//include("classa.inc");
  include("classa.inc");
$a=new A;
$s=serialize($a);

file_put_contents('store',$s);

include("classa.inc");

$s=file_get_contents('store');
$a=unserialize($s);

$a->show_one();

?>