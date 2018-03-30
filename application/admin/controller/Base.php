<?php
namespace app\admin\controller;

use think\Controller;

class Base extends Controller
{
    public function _initialize()
    {
        $admin = session('admin');
        if($admin===NULL){
        	$this -> redirect('Login/index');
        }
    }
}
