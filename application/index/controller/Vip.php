<?php
namespace app\index\controller;

class Vip extends Base
{
    public function index()
    {
    	if(request()->isAjax()){
    		$url = $_POST['url'];
			$res = 'http://api.baiyug.cn/vip/index.php?url='.$url;
			echo $res;
    	}else{
    		return $this -> fetch();
    	}
    }
}
