<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<!-- <form action="/zendWorkSpace/phpStudy/thinkphp3.1/app/index.php/User/create" method="post"> -->
 <form action="__URL__/create" method="post">
 <input  type="hidden" name="id" />
 username:<input  type="text" name="username" /><br/>
 sex:男<input type="radio" name="sex" value="1"/>女<input type="radio" name="sex" value="0"/><br/>
 <input type="submit" value="添加数据"/>
</form>
</body>
</html>