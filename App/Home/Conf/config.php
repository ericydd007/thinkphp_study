<?php
return array(
    'APP_GROUP_LIST' => 'Home,Admin', // 分组
    'DEFAULT_GROUP' => 'Home', // 默认分组
    'APP_GROUP_MODE' => 1,
    // '配置项'=>'配置值'
    // 'DB_TYPE'=>'mysql',
    // 'DB_HOST' => 'localhost',
    // 'DB_NAME' => 'study',
    // 'DB_USER' => 'root',
    // 'DB_PWD' => '',
    // 'DB_PORT' => '3306',
    // 'DB_PREFIX' => '',
    // 'SHOW_PAGE_TRACE' => true,
    'DB_TYPE' => 'mongo', // 数据库类型
    'DB_HOST' => 'localhost', // 服务器地址
    'DB_NAME' => 'test', // 数据库名
    'DB_USER' => '', // 用户名
    'DB_PWD' => '', // 密码
    'DB_PORT' => '27017', // 端口
    
    'TMPL_ENGINE_TYPE' => 'Smarty',
    'TMPL_TEMPLATE_SUFFIX' => '.phtml',
    'TMPL_ENGINE_CONFIG' => array(
        'caching' => false,
        'template_dir' =>THEME_PATH,  //ThinkPHP.php定义了路径，否则报错，因为这个THEME_PATH未定义
        'compile_dir' => TEMP_PATH,
        'cache_dir' => CACHE_PATH,
        'left_delimiter' => '{',
        'right_delimiter' => '}',
      ),
);