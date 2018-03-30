<?php
namespace app\index\controller;

use app\index\model\Base as Common;

class Msg extends Base
{
    public function index()
    {
    	if(request()->isPost()){
    		
    	}else{
            $Common = new Common();
            $msg = $Common -> list('message','','create_time desc','10');
            $this->assign('msg',$msg);
    		return $this -> fetch();
    	}
    }
}
