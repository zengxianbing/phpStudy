<?php
return array(
	//'配置项'=>'配置值'
    'URL_CASE_INSENSITIVE' =>true,
    //'URL_PATHINFO_DEPR'=>'-', // 更改PATHINFO参数分隔符
    'TMPL_L_DELIM'=>'<{',//修改定界符
    'TMPL_R_DELIM'=>'}>',
    'DB_TYPE'      =>  'mysql',     // 数据库类型
    'DB_HOST'      =>  'localhost',     // 服务器地址
    'DB_NAME'      =>  'thinkphp',     // 数据库名
    'DB_USER'      =>  'zxb',     // 用户名
    'DB_PWD'       =>  '123456',     // 输入安装MySQL时设置的密码
    'DB_PORT'      =>  '3306',     // 端口
    'DB_PREFIX'    =>  'tp_',     // 数据库表前缀
    'DB_DSN'       =>  '',     // 数据库连接DSN 用于PDO方式
    'SHOW_PAGE_TRACE'  =>  'true',
    'TMPL_TEMPLATE_SUFFIX'=>'.html',
    //'TMPL_FILE_DEPR'=>'_',
);
?>