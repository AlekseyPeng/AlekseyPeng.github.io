<?php
if(isset($_POST['name']) && isset($_POST['password'])){
    $name = $_POST['name'];
    $password = $_POST['password'];
    if($name === 'admin' && $password === 'pasword123'){
        echo '欢迎访问';

    } else {
        echo '登陆失败';
    }
} else {
    echo '参数错误';
}