<?php
namespace app\admin\model;

use think\Model;
use think\Db;
use think\Loader;
use think\File;

class Base extends Model
{

	public function find($table)
	{
		$id = input('id');
		$find = Db::name($table)->where('id',$id)->find();
		if($find){
			return $find;
		}else{
			msg('查询失败！');
		}
	}

	public function joinList($table,$join,$field,$where,$order){
		$list = Db::name($table)->join($join)->field($field)->where($where)->order($order)->paginate(5); 
		if($list){
			return $list;
		}else{
			msg('请求失败！');
		}
	}

	public function list($table,$where,$order,$num){
		$list = Db::name($table)->where($where)->order($order)->paginate($num); 
		if($list){
			return $list;
		}else{
			msg('请求失败！');
		}
	}

	public function add($table,$data){
		$validate = Loader::validate($table);
		$result = $validate->scene('add')->check($data);
		if(!$result){
		    msgback($validate->getError());
		}else{
			$file = request()->file('img');
		    if($file){
		        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
		        if($info){
		            $img = 'public' . DS . 'uploads' . DS . $info->getSaveName();
		            $img = isset($img)&&!empty($img)?$img:'';
		             $data['img'] =$img;
		        }else{
		            msgback( $file->getError());
		        }
		    }
		    $data['create_time']=date("Y-m-d H:i:s");
		    $data['update_time']=date("Y-m-d H:i:s");
		    $add = Db::name($table)->insert($data);
			if($add){
				msg('添加成功');
			}else{
				msg('添加失败');
			}
		}
	}

	public function edit($table,$data,$oldData){
		$find = $oldData;
		$validate = Loader::validate($table);
		$result = $validate->scene('edit')->check($data);
		if(!$result){
			msgback($validate->getError());
		}else{
			$file = request()->file('img');
			if($file){
		        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
	        	if($info){
		            $img = 'public' . DS . 'uploads' . DS . $info->getSaveName();
		            $data['img'] =$img;
		            $data['update_time'] =date("Y-m-d H:i:s");
			    	$edit = Db::name($table)->update($data);
					if($edit){
						msg('修改成功！');
					}else{
						msg('修改失败！');
					}
		        }else{
		            msgback( $file->getError());
		        }
		    }else{
		    	if(isset($find['img'])){
		    		$data['img'] = $find['img'];
		    	}
	    		$data['update_time'] = date("Y-m-d H:i:s");
		    	$edit = Db::name($table)->update($data);
				if($edit){
					msg('修改成功！');
				}else{
					msg('修改失败！');
				}
	    }
		}
	}

	public function del($table)
	{
		$id = input('id');
		$delete = Db::name($table)->where('id',$id)->delete();
		if($delete){
			msg('删除成功');
		}else{
			msg('删除成功');
		}
	}
}