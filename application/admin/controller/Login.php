<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\Login as Log;

class Login extends Controller
{
	public function index()
	{
		$log = new Log();
		if(request() -> isPost()){
			$log = $log -> login(input('verifyCode'),input('name'),input('passwd'));
			if($log ===1 ){
				$this -> success('登陆成功','Index/index',3); 
			}
		}else{
			return $this -> fetch();
		}
	}

	public function out()
	{
		$out = session('admin',NULL);
		if($out===NULL){
			$this -> redirect('Login/index'); 
		}else{
			msg('退出异常！');
		}
	}
}