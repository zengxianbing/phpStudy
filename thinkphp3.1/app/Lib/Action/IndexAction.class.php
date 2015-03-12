<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action
{

    public function index()
    {
        
        // $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
        $m = new Model("User");
        $arr = $m->select();
        $finarr = $m->find();
        var_dump($arr);
        echo "<br/>";
        var_dump($finarr);
        echo "<br/>";
        // $arrField=$m->getField("username");
        $arrField = $m->where("id=2")->getField("username");
        var_dump($arrField);
        echo $arr;
        $name = "zxb";
        $this->assign("data", $name);
        $this->assign("arr", $arr);
        $array2=array("k1"=>"aaaa","k2"=>"bbbbb");
        $this->assign("array2",$array2);
        $this->display();
        // echo "hello,world!";
    }

    public function show()
    {
        
        // PATHINFO模式
        // http://localhost/app/index.php/module/action/var/value/
        
        // http://localhost/zendWorkSpace/phpStudy/thinkphp3.1/app/index.php/Index/show/name/zxb/age/13
        
        // 普通模式：
        // http://localhost/app/?m=module&a=action&var=value
        // http://localhost/zendWorkSpace/phpStudy/thinkphp3.1/app/index.php?m=Index&a=show&name=zxb&age=23
        
        // 兼容模式：是用于不支持PATHINFO的特殊环境，URL地址是：
        // http://localhost/app/?s=/module/action/var/value/
        $m = new Model("User");
        // a、字符串
        // echo $m->where("id=4")->getField("username");
        // $arr = $m->where("id=4")->getField("username");
        // $arr = $m->where("id=4 and username='www'")->find();
        
        // b、数组
        // $data['sex']=0;
        // $data['username']='www';
        // $data['_logic']='or';
        // $arr=$m->where($data)->find();
        // $this->assign("arr", $arr);
        
        // c、表达式查询方式
        /*
         * $data['id'] = array(
         * 'lt',
         * 10
         * );
         * $arr = $m->where($data)->select();
         */
        
        // d、区间查询
        /*
         * $data['id']=array(array('gt',4),array('lt',10));
         * $arr=$m->where($data)->find();
         * $data['id']=array(array('gt',4),array('lt',10));//默认关系是 and 的关系
         * //SELECT * FROM `tp_user` WHERE ( (`id` > 4) AND (`id` < 10) )
         *
         * $data['id']=array(array('gt',4),array('lt',10),'or') //关系就是or的关系
         *
         * $data['name']=array(array('like','%2%'),array('like','%五%'),'gege','or');
         */
        
        
        // e、SQL直接查询
        $arr=$m->query('select * from tp_user');
        
        var_dump($arr);
        $result=$m->execute("insert into tp_user('username') values('33333')");
        $this->display();
        
        // $this->display();
        // echo "show method();name=".$_GET["name"]."age=".$_GET["age"];
    }

    public function add()
    {
        $m = new Model("User");
        $m->username = "cc";
        $m->sex = "1";
        echo $m->add();
        // $this->display();
    }

    public function delete()
    {
        // $m=new Model("User");
        $m = M("User");
        // $m->delete(2);
        $m->where("id=1")->delete();
    }

    public function publicerror(){
        $this->display("Public:error");
    }
    public function update()
    {
        // $m=new Model("User");
        $m = M("User");
        $data["id"] = "5";
        $data["username"] = "dd";
        $data["sex"] = "1";
        $m->save($data);
        // $this->display();
    }
}