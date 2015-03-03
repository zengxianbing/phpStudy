<?php

class Connection
{
    protected $link;
    private $server,$username,$password,$db;
    
    public function __construct($server,$username,$password,$db) {

        $this->server=$server;
        $this->username=$username;
        $this->password=$password;
        $this->db=$db;
        $this->connect();
    }
    
    private function connect() {
        $this->lin=mysql_connect($this->server,
            $this->username,$this->password,this->db);
    }
    
    public function connect() {
        return array('server','username','password','db');
    }
    
    public function __wakeup() {
        $this->connect();
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}





class TestClass
{
    public $foo;
    
    public function __construct() {
        $this->foo=$foo;
    }
    
    public function __toString() {
        return $this->foo;
    }
}
$class=new TestClass('Hello');
echo $class;



















?>