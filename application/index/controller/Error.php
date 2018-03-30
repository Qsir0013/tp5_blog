<?php
namespace app\index\controller;

use think\Request;

class Error 
{
    public function index(Request $request)
    {
        $controller = $request->controller();
        return $this->msg($controller);
    }
    
    protected function msg($name)
    {
         msgback('不存在控制器：' . $name);
    }
}