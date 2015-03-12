<?php

class UserAction extends Action
{

    public function index()
    {
        $m = new Model("User");
        $arr = $m->select();
        var_dump($arr);
        $this->assign("data", $arr);
        $this->display();
    }

    public function delete()
    {
        $m = M("User");
        $id = $_GET["id"];
        $count = $m->delete($id);
        if ($count > 0) {
            $this->success("数据删除成功！");
        } else {
            $this->error("数据删除失败！");
        }
    }

    public function modify()
    {
        $id = $_GET["id"];
        $m = new Model("User");
        $arr = $m->find($id);
        // var_dump($arr);
        $this->assign("data", $arr);
        $this->display();
    }

    public function update()
    {
        $m = new Model("User");
        $data["id"] = $_POST["id"];
        $data["username"] = $_POST["username"];
        $data["sex"] = $_POST["sex"];
        $count = $m->save($data);
        if ($count > 0) {
            // $this->success("数据修改成功！");
            
            // $this->display('index');
            $this->success("数据修改成功", "index");
        } else {
            $this->error("数据修改失败！", "index");
        }
    }

    public function add()
    {
        $this->display();
    }

    public function create()
    {
        $m = new Model("User");
        // $data["id"]=$_POST["id"];
        $m->username = $_POST["username"];
        $m->sex = $_POST["sex"];
        $count = $m->add();
        if ($count > 0) {
            // $this->success("数据修改成功！");
            // $this->display('index');
            $this->success("数据添加成功", "index");
        } else {
            $this->error("数据添加失败！", "index");
        }
    }

    public function search()
    {
        if (isset($_POST['username'])&&$_POST['username']!=null) {
            $where['username'] = array(
                'like',
                "%{$_POST['username']}%"
            );
        }
        if (isset($_POST['sex'])&&$_POST['sex']!=null) {
            $where['sex'] = array(
                'eq',
                $_POST['sex']
            );
        }
        $m = M("User");
        $arr = $m->where($where)->select();
        $this->assign('data', $arr);
        $this->display('Index');
    }
}
?>