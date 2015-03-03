<?php

interface  iTemplate
{
    public function  setVariable($name,$var);
    
    public  function  getHtml($template);
}

class Template implements  iTemplate
{
    private  $vars=array();
    
    public function  setVariable($name,$var)
    {
        $this->vars[$name]=$var;
    }
    
    public  function  getHtml($template)
    {
        foreach ($this->vars as $name=>$value){
            $template=str_replace('}'.$name.'}',$value,$template);
            
        }
        return $template;
    }
}


interface  a
{
    const b='Interface constant';
    public function foo();
}

interface  b extends  a
{
    public  function  baz(Baz $baz);
}

class c implements a,b
{
    public  function foo()
    {
        
    }
    public function baz(Baz $baz)
    {
        
    }
}

class d extends  c
{
    public function foo()
    {
        
    }
    public function bar()
    {
        
    }
    public function baz()
    {
        
    }
}


















?>