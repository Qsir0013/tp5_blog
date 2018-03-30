<?php
namespace app\index\model;

use think\Model;
use think\Db;

class Base extends Model
{
	public function searchDate(){

	}

	public function list($table,$where,$order,$limit=0){
		$select = Db::name($table) -> where($where) -> order($order) -> limit($limit)  -> select();
		if(!$select){

		}else{
			return $select;
		}
		
	}

	public function joinList($table,$join,$field,$where,$order){
		$select = Db::name($table) -> join($join) ->field($field) -> where($where) ->order($order) -> paginate(10);
		return $select;
	}

	public function findOne($table,$where){
		$find = Db::name($table) -> where($where) -> find();
		return $find;
	}
	
	public function searchList($table,$join,$field,$where,$order){
		
		$select = Db::name($table) -> join($join) ->field($field) -> where($where) ->order($order) -> paginate(10);
		return $select;
	}
}