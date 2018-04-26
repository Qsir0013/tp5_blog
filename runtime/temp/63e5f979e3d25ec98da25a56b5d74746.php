<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:81:"E:\phpStudy\PHPTutorial\WWW\guan\public/../application/admin\view\link\index.html";i:1524649725;s:72:"E:\phpStudy\PHPTutorial\WWW\guan\application\admin\view\public\comm.html";i:1524706452;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="/static/admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/static/admin/css/main.css"/>
    <script type="text/javascript" src="/static/admin/js/libs/modernizr.min.js"></script>
    
    <style>
    .pagination {}
    .pagination li {display: inline-block;margin-right: -1px;padding: 5px;border: 1px solid #e2e2e2;min-width: 20px;text-align: center;}
    .pagination li.active {background: #009688;color: #fff;border: 1px solid #009688;}
    .pagination li a {display: block;text-align: center;}
    </style>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="<?php echo url('Index/index'); ?>">首页</a></li>
                <li><a href="http://<?php echo \think\Request::instance()->server('HTTP_HOST'); ?>" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a ><?php echo \think\Session::get('admin.name'); ?></a></li>
                <li><a href="<?php echo url('Index/cpasswd'); ?>">修改密码</a></li>
                <li><a href="<?php echo url('Login/out'); ?>">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a><i class="icon-font">&#xe003;</i>常用操作</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo url('Cate/index'); ?>"><i class="icon-font">&#xe008;</i>栏目管理</a></li>
                        <li><a href="<?php echo url('Article/index'); ?>"><i class="icon-font">&#xe005;</i>博文管理</a></li>
                        <li><a href="<?php echo url('Msg/index'); ?>"><i class="icon-font">&#xe004;</i>留言管理</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe012;</i>评论管理</a></li>
                        <li><a href="<?php echo url('Link/index'); ?>"><i class="icon-font">&#xe052;</i>友情链接</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe033;</i>广告管理</a></li>
                    </ul>
                </li>
                <li>
                    <a ><i class="icon-font">&#xe018;</i>系统管理</a>
                    <ul class="sub-menu">
                        <li><a href="system.html"><i class="icon-font">&#xe017;</i>系统设置</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe037;</i>清理缓存</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe046;</i>数据备份</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe045;</i>数据还原</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="<?php echo url('Index/index'); ?>">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">友情链接管理</span></div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="<?php echo url('Link/add'); ?>"><i class="icon-font"></i>新增友情链接</a>
                        <!--<a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i>批量删除</a>-->
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                            <th>ID</th>
                            <th>链接名称</th>
                            <th>链接地址</th>
                            <th>操作</th>
                        </tr>
                        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <tr>
                            <td class="tc"><input name="id[]" value="59" type="checkbox"></td>
                            <td><?php echo $vo['id']; ?></td>
                            <td title="<?php echo $vo['title']; ?>"><?php echo $vo['title']; ?></td>
                            <td><?php echo $vo['url']; ?></td>
                            <td>
                                <a class="link-update" href="<?php echo url('Link/edit',array('id'=>$vo['id'])); ?>">修改</a>
                                <a onclick="return confirm('是否删除这条数据？')" class="link-del" href="<?php echo url('Link/delete',array('id'=>$vo['id'])); ?>">删除</a>
                            </td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
                    <div  class="list-page">共<?php echo $list->total(); ?>条 <?php echo $list->currentPage(); ?>/<?php echo $list->lastPage(); ?> 页<?php echo $list->render(); ?></div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>