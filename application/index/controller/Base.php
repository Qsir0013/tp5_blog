<?php
namespace app\index\controller;

use think\Controller;
use app\index\model\Base as Common;

class Base extends Controller
{
	public function _initialize()
	{
		$common = new Common();
    	$nav = $common -> list('cate','type != 0','id');
    	$cate = $common -> list('cate','type = 0','id');
    	$msg = $common -> list('message','','id desc',10);
    	$link = $common -> list('link','','id desc','');
		$this -> assign(['nav'=>$nav,'cate'=>$cate,'msg'=>$msg,'link'=>$link]);
		$controller = request()->controller();
		define('controller',$controller);
	}

	public function search()
	{
		$common = new Common();
		if(request()->isPost()){
			$edtSearch = input('edtSearch');
			$join = [
				['cate','article.cate=cate.id']
			];
			$where = [
				'article.keywords'  =>  ['like', '%'.$edtSearch.'%']
			];
			$list = $common -> joinList(
			'article', 
			$join, 
			'title,article.des,num,comment,article.create_time,author,cate.catename,article.id,article.keywords', 
			$where, 
			'article.update_time desc');
			$this -> assign('searchArticle',$list);
		}else{
			$targs = input('targs');
			$join = [
				['cate','article.cate=cate.id']
			];
			$where = [
				'article.keywords'  =>  ['like', '%'.$targs.'%']
			];
			$list = $common -> joinList(
			'article', 
			$join, 
			'title,article.des,num,comment,article.create_time,author,cate.catename,article.id,article.keywords', 
			$where,			
			'article.update_time desc');
			
			$this -> assign('searchArticle',$list);
		}
		return $this -> fetch('public/search');
	}

	public function read()
	{
		$common = new Common();
		$id = input('id');
		$find = $common -> findOne('article',array('id'=>$id));
		$content = htmlspecialchars_decode($find['content']);
		$this -> assign(['article'=>$find,'content'=>$content]);
		return $this -> fetch('public/content');
	}

	public function cate(){
		$common = new Common();
		$cate = request()->route('id');
		$where = [
		'cate'=>$cate,
		];
		$join = [
			['cate','article.cate=cate.id']
		];
		$article = $common -> joinList(
			'article',
			$join,
			'title,article.des,num,comment,article.create_time,author,cate.catename,article.id,article.keywords',
			$where,
			'article.update_time desc');
		$this -> assign(['cateArticle'=>$article]);
		return $this -> fetch('public/index');
	}
	
	public function _empty($name)
    { 
        return $this->errorMsg($name);
    }
    
    
    protected function errorMsg($name)
    {
         msgback('不存在的方法：' . $name);
    }
}