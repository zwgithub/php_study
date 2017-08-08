<?php 


    $name = $_POST['name'];
    echo $name . '<br>';

    $pwd = $_POST['pwd'];
    echo $pwd . '<br>';

    mysql_connect('localhost','root','a123456') or die('数据库连接失败');
    mysql_query('set names utf8');
    mysql_query('use czw_test');

    $sql = "insert into user values('".$name."','".$pwd."')";
    $res = mysql_query($sql);
    echo mysql_error();
