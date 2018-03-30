<?php
namespace app\admin\controller;

use app\admin\model\Index as Change;

class Index extends Base
{
    public function index()
    {

        return $this -> fetch();
    }

    public function cpasswd()
    {
    	if(request() -> isPost()){
    		$change = new Change();
    		$data = array(
    			'passwd' => MD5(input('passwd'))
    		);
            $change = $change -> cpasswd($data);
            if($change===1){
                $out = session('admin',NULL);
                if($out===NULL){
                    $this -> redirect('Login/index');
                }
            }
    	}else{
    		return $this -> fetch();
    	}
    }
}
