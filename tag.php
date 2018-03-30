<?php
$con = mysqli_connect('localhost','root','123456');
if (!$con)
{
    die('连接数据库错误' . mysqli_error());
}else{
	mysqli_select_db( $con,"guan");
	$sql = "CREATE TABLE tags(
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY COMMENT '序号', 
	    name VARCHAR(10) NOT NULL COMMENT '标签名',
	    num INT NOT NULL COMMENT '浏览量',
	    author VARCHAR(10) NOT NULL COMMENT '发布人',
	    ctime DATE NOT NULL COMMENT '创建时间',
		is_delete INT(1) DEFAULT '1' NOT NULL COMMENT '是否存在  1存在 0不存在'
		)";
	if(mysqli_query($con,$sql)){
	    echo 'tags数据表创建成功';
		mysqli_close($con);
	}else{
	    echo "tags数据表创建失败: " . mysqli_error();
	}
}
