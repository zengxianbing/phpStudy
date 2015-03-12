<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
index <?php echo ($data); ?><br/>



<?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo["id"]); ?>----- <?php echo ($vo["username"]); ?>----- <?php echo ($vo["sex"]); ?><br/><?php endforeach; endif; else: echo "" ;endif; ?>

<?php echo ($array2[k1]); ?>
</body>
</html>