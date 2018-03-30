<?php
namespace app\admin\validate;

use think\Validate;

class Link extends Validate
{
    protected $rule = [
        'title' => 'require|unique:link',
        'url' =>  'require'
    ];

     protected $message = [
        'title.require'  =>  '链接名称必须',
        'title.unique'  =>  '链接名称已存在',
        'url.require'  =>  '链接地址必须'
    ];

    protected $scene = [
        'add'  =>  ['title','url'],
        'edit'  =>  ['title','url'],
    ];
}