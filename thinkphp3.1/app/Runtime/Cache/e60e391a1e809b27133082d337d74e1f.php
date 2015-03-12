<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<script>
window.onload=function(){
	if(<?php echo ($data["sex"]); ?>==0){
		document.getElementsByName('sex')[1].checked='checked';
	}else{
		document.getElementsByName('sex')[0].checked='checked';
	}
	
}
</script>
</head>
<body>

<form action="/zendWorkSpace/phpStudy/thinkphp3.1/app/index.php/User/update" method="post">
 <input  type="hidden" name="id" value="<?php echo ($data["id"]); ?>"/>
 username:<input  type="text" name="username" value="<?php echo ($data["username"]); ?>"/><br/>
 sex:男<input type="radio" name="sex" value="1"/>女<input type="radio" name="sex" value="0"/><br/>
 <input type="submit" value="修改"/>
</form>
</body>
</html>