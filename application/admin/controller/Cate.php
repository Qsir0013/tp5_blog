<?php
namespace app\admin\controller;

use app\admin\model\Base as Common;

class Cate extends Base
{
	public function index()
	{
		$Common = new Common();
		$this -> assign('list',$Common->list('cate','','type desc','10'));
		return $this -> fetch();
	}

	public function add()
	{
		$Common = new Common();
		if(request()->isPost()){
			$data = htmlsp($_POST);
			$Common -> add('cate',$data);
		}else{
			return $this -> fetch();
		}
	}

	public function edit(){
		$Common = new Common();
		$find = $Common->find('cate');
		if(request()->isPost()){
			$data = htmlsp($_POST);
			$Common -> edit('cate',$data,$find);
		}else{
			$this -> assign('find',$find);
			return $this -> fetch();
		}
	}

	public function delete(){
		$Common = new Common();
		$Common -> del('cate');
	}
}