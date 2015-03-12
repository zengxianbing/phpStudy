<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
Hello,World!

<br/>
<br/>
<br/>

<form action="/zendWorkSpace/phpStudy/thinkphp3.1/app/index.php/User/search">
  用户名：<input type="text" name="username"/>男<input type="radio" name="sex" value="0"/>
  女<input type="radio" name="sex" value="1"/>
  <br/>
  <input type="submit" value="搜索"/>
</form>
<br/><br/>
<a href="/zendWorkSpace/phpStudy/thinkphp3.1/app/index.php/User/add.html">添加数据</a>
<table>
<tr><td>id</td><td>username</td><td>sex</td><td>修改</td></tr>

<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr><td><?php echo ($vo["id"]); ?></td>
  <td><?php echo ($vo["username"]); ?></td>
  <td><?php echo ($vo["sex"]); ?></td>
  <td><a href="/zendWorkSpace/phpStudy/thinkphp3.1/app/index.php/User/modify/id/<?php echo ($vo["id"]); ?>">修改</a>，<a href="/zendWorkSpace/phpStudy/thinkphp3.1/app/index.php/User/delete/id/<?php echo ($vo["id"]); ?>">刪除</a></td>
  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
</body>
</html>