<?php



class hello extends CI_Controller {
    //http://localhost/zendWorkSpace/phpStudy/ci_study/CodeIgniter-2.2-stable/index.php/hello/index
    function index() {
        //echo "Hello World!";
        $data['title']="title";
        $data['content']="content";
        $this->load->view("admin/hello",$data);
    }
}
?>