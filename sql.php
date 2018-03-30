-<?php
$con = mysqli_connect("localhost","root","123456");
if (!$con)
{
    die('连接数据库错误' . mysqli_error());
}
//创建数据库
$sql = "CREATE DATABASE guan DEFAULT CHARSET utf8 COLLATE utf8_general_ci";
if (mysqli_query($con,$sql))
{
    echo "数据库创建成功，正在创建数据表......<br/>";
    //创建数据表
    mysqli_select_db( $con,"guan");
    $sql = "CREATE TABLE admin (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY COMMENT '序号', 
    name VARCHAR(30) NOT NULL COMMENT '用户',
    passwd VARCHAR(32) NOT NULL COMMENT '密码',
    pid INT(1) NOT NULL COMMENT '对应角色id',
    ctime DATE NOT NULL COMMENT '创建时间',
	ltime DATE NOT NULL COMMENT '最后登陆时间',
	is_delete INT(1) DEFAULT '1' NOT NULL COMMENT '是否存在  1存在 0不存在'
    )";
    if(mysqli_query($con,$sql)){
        echo 'admin数据表创建成功';
		mysqli_close($con);
    }else{
        echo "admin数据表创建失败: " . mysqli_error();
    }
}
else
{
    echo "数据库创建失败: " . mysqli_error();
}
?>