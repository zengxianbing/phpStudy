<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class HelloWorld extends CI_Controller {
public function __construc() {
parent::__construct();
}
public function index()
{
   //http://localhost/zendWorkSpace/phpStudy/ci_study/CodeIgniter-2.2-stable/index.php/helloworld/index/
$this->load->view('helloworld');
}
}