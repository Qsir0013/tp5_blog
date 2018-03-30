<?php
namespace app\admin\model;

use think\Model;
use think\Db;
use think\Log;

class Index extends Model
{
	public function cpasswd($data){
		$where = array('name'=>session('admin')['name'],'is_delete'=>1);
		$change = Db::table('admin')->where($where)->setField($data);
		if($change===1){
			return $change;
		}else{
			msg('此密码和原密码相同！');
		}
	}
}