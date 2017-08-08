<?php 
    header('Content-type:text/html;charset=utf-8');
    $link = @mysql_connect('localhost','root','a123456');
    if (!$link) {
        echo '数据库连接失败:<br/>';
        echo '错误编号:' . mysql_errno() . '<br/>';
        echo '错误原因' . mysql_error() . '<br/>';
        exit();
    }

    mysql_query('set names utf8') or die('字符集设置失败');
    mysql_select_db('class') or die('选择数据库失败');
    $sql = 'select *from pro_student'; 
    $res = mysql_query($sql);

    $length = mysql_num_rows($res);
    for ($i = 0; $i < $length; $i++) {
        $row = mysql_fetch_assoc($res);
    } 
    echo '<pre>';

    var_dump($row);
