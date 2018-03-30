<?php
namespace app\admin\validate;

use think\Validate;

class Article extends Validate
{
    protected $rule = [
        'type'  =>  'require',
        'cate'  =>  'require',
        'title' =>  'require|unique:article',
        'author' =>  'require',
        'keywords' =>  'require',
        'des' =>  'require',
        'content' =>  'require',
    ];

     protected $message  =   [
        'type.require' => '所属导航必须',
        'cate.require' => '所属类别必须',
        'title.require'     => '文章标题必须',
        'title.unique'     => '文章标题已存在',
        'author.require'   => '文章作者必须',
        'keywords.require'        => '关键字必须', 
        'des.require'        => '描述必须',   
        'content.require'        => '文章内容必须', 
    ];

    protected $scene = [
        'edit'  =>  ['type','cate','title','author','keywords','des','content'],
        'add'  =>  ['type','cate','title','author','keywords','des','content']
    ];
}