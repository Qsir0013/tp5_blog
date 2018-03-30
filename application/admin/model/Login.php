<?php
namespace app\admin\model;

use think\Model;
use think\Db;

class Login extends Model
{
	public function login($code,$name,$passwd)
	{
		if(!captcha_check($code)){
		 	msgback('验证码不正确！');
		}else{
			$name = isset($name)&&!empty($name)?$name:1;
			$passwd = isset($passwd)&&!empty($passwd)?MD5($passwd):1;
			if($name===1||$passwd===1){
				msgback('账号密码都必须填写！');
			}else{
				$where = array('name'=>$name,'passwd'=>$passwd,'is_delete'=>1);
				$find = Db::table('admin')->where($where)->find();
				if($find===NULL){
					msg('信息错误！');
				}else{
					session('admin',$find);
					return 1;
				}
			}
		}
	}

	
}