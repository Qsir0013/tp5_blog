<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:83:"E:\phpStudy\PHPTutorial\WWW\guan\public/../application/admin\view\article\edit.html";i:1522400134;s:72:"E:\phpStudy\PHPTutorial\WWW\guan\application\admin\view\public\comm.html";i:1522400134;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="/guan/public/static/admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/guan/public/static/admin/css/main.css"/>
    <script type="text/javascript" src="/guan/public/static/admin/js/libs/modernizr.min.js"></script>
	<script type="text/javascript" charset="utf-8" src="/guan/public/static/admin/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/guan/public/static/admin/ueditor/ueditor.all.min.js"></script>
    <script type="text/javascript" src="/guan/public/static/admin/ueditor/lang/zh-cn/zh-cn.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="<?php echo url('Index/index'); ?>">首页</a></li>
                <li><a href="http://<?php echo \think\Request::instance()->server('HTTP_HOST'); ?>/guan/index.php" target="_blank">网站首页</a></li>
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
            <div class="crumb-list"><i class="icon-font"></i><a href="<?php echo url('Index/index'); ?>">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="<?php echo url('Article/index'); ?>">博文管理</a><span class="crumb-step">&gt;</span><span>修改博文</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <input name="id" type="hidden" value="<?php echo $find['id']; ?>" />
                                <th width="120"><i class="require-red">*</i>导航栏目：</th>
                                <td>
                                    <select name="type" id="catid" class="required">
                                        <option value="">请选择</option>
                                        <?php if(is_array($typelist) || $typelist instanceof \think\Collection || $typelist instanceof \think\Paginator): $i = 0; $__LIST__ = $typelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($find['type'] != $vo['id']): ?>
                                        <option value="<?php echo $vo['id']; ?>"><?php echo $vo['catename']; ?></option>
                                        <?php else: ?>
                                        <option selected value="<?php echo $vo['id']; ?>"><?php echo $vo['catename']; ?></option>
                                        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <input name="id" type="hidden" value="<?php echo $find['id']; ?>" />
                                <th width="120"><i class="require-red">*</i>文章类别：</th>
                                <td>
                                    <select name="cate" id="catid" class="required">
                                        <option value="">请选择</option>
                                        <?php if(is_array($catelist) || $catelist instanceof \think\Collection || $catelist instanceof \think\Paginator): $i = 0; $__LIST__ = $catelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($find['cate'] != $vo['id']): ?>
                                        <option value="<?php echo $vo['id']; ?>"><?php echo $vo['catename']; ?></option>
                                        <?php else: ?>
                                        <option selected value="<?php echo $vo['id']; ?>"><?php echo $vo['catename']; ?></option>
                                        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>标题：</th>
                                <td>
                                    <input class="common-text required" id="title" name="title" size="50" value="<?php echo $find['title']; ?>" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>作者：</th>
                                <td><input class="common-text" name="author" size="50" value="<?php echo $find['author']; ?>" type="text"></td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>关键字：</th>
                                <td><input class="common-text" name="keywords" size="50" value="<?php echo $find['keywords']; ?>" type="text"></td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>描述：</th>
                                <td><textarea name="des" class="common-textarea"  cols="30" style="width: 95%;" rows="10"><?php echo $find['des']; ?></textarea></td>
                            </tr>
                            <tr>
                                <th>缩略图：</th>
                                <td><input name="img" id="" type="file">
								<?php if($find['img'] == ''): ?>
								<img style="width:200px" src="/guan/public/zw.jpg" />
								<?php else: ?>
								<img style="width:200px" src="/guan/<?php echo $find['img']; ?>" />
								<?php endif; ?>
								</td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>内容：</th>
                                <td><textarea name="content" class="common-textarea" id="ueditor" cols="30" style="width: 98%;" rows="10"><?php echo $find['content']; ?></textarea></td>
                            </tr>
							<script type="text/javascript">  
                                var ue = UE.getEditor('ueditor');  
                            </script>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody></table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>
</body>
</html>