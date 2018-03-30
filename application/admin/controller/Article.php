<?php
namespace app\admin\controller;

use app\admin\model\Base as Common;

class Article extends Base
{
	public function index(){
		$Common = new Common();
		$join = [['cate','article.cate = cate.id ']];
		$field = 'title,catename,article.update_time,article.id,num';
		$order = 'num desc';
		$list = $Common->joinList('article',$join,$field,'',$order);
		if($list){
			$this -> assign('list',$list);
			return $this -> fetch();
		}
	}

	public function add(){
		$Common = new Common();
		if(request() -> isPost()){
			$data = htmlsp($_POST);
			$Common -> add('article',$data);
		}else{
			$this -> assign([
				'typelist'=>$Common->list('cate','type = 1 and id!=1','',''),
				'catelist'=>$Common->list('cate','type = 0','','')
			]);
			return $this -> fetch();
		}
	}

	public function edit(){
		$Common = new Common();
		$find = $Common->find('article');
		if(request()->isPost()){
			$data = htmlsp($_POST);
			$Common -> edit('article',$data,$find);
		}else{
			$this -> assign([
				'typelist'=>$Common->list('cate','type = 1 and id!=1','',''),
				'find'=>$find,
				'catelist'=>$Common->list('cate','type = 0','','')
			]);
			return $this -> fetch();
		}
	}

	public function delete(){
		$Common = new Common();
		$Common -> del('article');
	}

	public function look(){
		$Common = new Common();
		$find = $Common -> find('article');
		$content =  htmlspecialchars_decode($find['content']); 
		$this -> assign('content',$content);
		return $this -> fetch();
	}
}