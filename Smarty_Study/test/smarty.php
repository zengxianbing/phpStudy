<?php 
    include("smarty/main.php");
    $tpl->assign("title", "你所需要的标题");
    $tpl->assign("content", "你所需要的内容");
    $tpl->display("tpls/templates/leapsoul.tpl");
?>