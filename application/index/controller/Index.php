<?php
namespace app\index\controller;

use app\index\model\Base as Common;

class Index extends Base
{
    public function index()
    {
    	$common = new Common();
    	$join = [
		    ['cate','article.cate=cate.id']
		];
    	$article = $common -> joinList(
    		'article',
    		$join,
    		'title,article.des,num,comment,article.create_time,author,cate.catename,article.id,article.keywords',
            '',
    		'article.update_time desc');
    	$this -> assign('article',$article);
        return $this -> fetch();
    }
}
