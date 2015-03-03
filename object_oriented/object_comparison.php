<?php
function bool2str() {
    if($bool==false){
        return 'FALSE';
    }else{
        return 'TRUE';
    }
    
}


function compareObjects(&$o1,&$o2) {
    echo 'o1==o2:'.bool2str($o1==$o2)."";
    echo 'o1!=o2:'.bool2str($o1!=$o2)."";
    echo 'o1==o2:'.bool2str($o1==$o2)."";
    echo 'o1!=o2:'.bool2str($o1!=$o2)."";
    
}

class Flag
{
    
    public $flag;
    function Flag() {
        $this->flag=$flag;
    }
}

class OtherFlag
{
    public $flag;
    function OtherFlag() {
        $this->flag=$flag;
    }
}

$o=new Flag();
$p=new Flag();
$q=$o;
$r=new OtherFlag();

echo "Two instance of the same class";
compareObjects($o,$p);
echo "Two instance of the same instance";
compareObjects($o,$p);
echo "Two instance of the different class";
compareObjects($o,$r);





































?>