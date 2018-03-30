<?php
namespace app\admin\controller;

use app\admin\model\Base as Common;

class Msg extends Base
{
	public function index()
	{
		$Common = new Common();
		$this -> assign('list',$Common->list('message','','create_time desc','10'));
		return $this -> fetch();
	}

	public function look(){
		$Common = new Common();
		$this -> assign('find',$Common->find('message'));
		return $this -> fetch();
	}

	public function delete(){
		$Common = new Common();
		$Common -> del('message');
	}
}