<?php
  define ('APP_NAME','App');
  define ('APP_PATH','./App/');
  require ('./ThinkPHP/ThinkPHP.php');
  
  
  $module=isset($_GET['m'])?$_GET['m']:'Index';
  $action=isset($_GET['a'])?$_GET['a']:'Index';
  
  $mooc=new $module();
  $mooc->$action();
  class index{
      function __construct() {
          echo "调用了index控制器";
      }
      function index() {
            echo "我是index控制器的index方法";
      }
      function test() {
            echo "我是index控制器的test方法";
      }
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
  }
  
?>