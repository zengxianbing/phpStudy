<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');

class News extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');
    }

    public function index()
    {
        $data['news'] = $this->news_model->list_news();
        $this->load->view('list.html', $data);
    }

    public function add()
    {
        $this->load->view('add.html');
    }

    public function insert()
    {
        $data['title'] = $_POST['title'];
        $data['author'] = $_POST['author'];
        $data['content'] = $_POST['content'];
        $data['add_time'] = time();
        if ($this->news_model->add_news($data)) {
            echo "添加成功！";
        } else {
            
            echo "添加失败！";
        }
    }
    public function delete() {
        $data['id']=$_POST['id'];
        if($this->news_model->delete_news($data['id']))
        {
            echo "删除成功！";
            
        }else{
            
            echo "删除失败！";
        }
    }
    
    
}

?>