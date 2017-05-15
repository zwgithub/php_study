<?php 
    
    echo "hello php!\n";
    
    //常量的定义和使用
    define('pi','3.1415');
    echo constant('pi') . "\n";
    
    //当前请求的域名
    echo $_SERVER['HTTP_HOST'] . "\n";
    
    echo $_SERVER['SCRIPT_NAME'] . "\n";

    echo $_SERVER['REMOTE_ADDR'] . "\n";
