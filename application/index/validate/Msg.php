<?php
namespace app\admin\validate;

use think\Validate;

class Cate extends Validate
{
    protected $rule = [
        'type' => 'require',
        'catename' =>  'require|max:10|unique:cate',
        'keywords' =>  'require',
        'des' =>  'require',
    ];

     protected $message = [
        'type' => '栏目类型必须',
        'catename.require'  =>  '栏目名称必须',
        'catename.unique'  =>  '栏目名称已存在',
        'catename.max'  =>  '栏目名称不能超过10位',
        'keywords.require'  =>  '栏目关键字必须',
        'des.require'  =>  '栏目描述必须',
    ];

    protected $scene = [
        'edit'  =>  ['catename','keywords','des'],
    ];
}