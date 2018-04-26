<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:83:"E:\phpStudy\PHPTutorial\WWW\guan\public/../application/index\view\public\index.html";i:1524704806;s:71:"E:\phpStudy\PHPTutorial\WWW\guan\application\index\view\public\nav.html";i:1524707625;s:73:"E:\phpStudy\PHPTutorial\WWW\guan\application\index\view\public\right.html";i:1524708182;s:71:"E:\phpStudy\PHPTutorial\WWW\guan\application\index\view\public\fot.html";i:1524649614;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="Content-Language" content="zh-CN" />
        <meta name="keywords" content="<?php echo $nav['0']['keywords']; ?>" />
        <meta name="description" content="<?php echo $nav['0']['des']; ?>"
        />
        <title>
            Qsir的博客__<?php echo $nav['0']['catename']; ?>
        </title>
        <link rel="stylesheet" rev="stylesheet" href="/static/index/style/style.css" type="text/css"
        media="screen" />
        <link rel="shortcut icon" href="/static/index/favicon.ico" />
        <script src="/static/index/style/common.js" type="text/javascript">
        </script>
        <script src="/static/index/style/c_html_js_add.js" type="text/javascript">
        </script>
        <script src="/static/index/style/custom.js" type="text/javascript">
        </script>
        <link rel="alternate" type="application/rss+xml" href="style/feed.css"/>
        <style>
            .pagination li{
                float:left;
                margin-right:10px;
            }
        </style>
    </head>
    
    <body class="multi default">
        <div id="divAll">
            <div id="divPage">
                <div id="divMiddle">
                    <div id="divTop">
                        <h1 id="BlogTitle">
                        </h1>
                    </div>
                    <div id="divNavBar">
                        <ul>
                            <?php if(is_array($nav) || $nav instanceof \think\Collection || $nav instanceof \think\Paginator): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <li>
                            
                                <a title="<?php echo $vo['catename']; ?>" <?php if($vo['id'] == 2): ?> target="_blank" <?php else: endif; ?> href="/<?php echo $vo['url']; ?>">
                                    <?php echo $vo['catename']; ?>
                                </a>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                    <div id="divMain">
                    <?php if(is_array($cateArticle) || $cateArticle instanceof \think\Collection || $cateArticle instanceof \think\Paginator): $i = 0; $__LIST__ = $cateArticle;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <div class="post multi-post cate4 auth1">
                            <h4 class="post-date">
                                <?php echo $vo['create_time']; ?>
                            </h4>
                            <h2 class="post-title">
                                <a href="/read/<?php echo $vo['id']; ?>">
                                    <?php echo $vo['title']; ?>
                                </a>
                            </h2>
                            <div class="post-body">
                                <p>
                                    <?php echo msubstr($vo['des'],0,200); ?>
                                </p>
                            </div>
                            <h5 class="post-tags">
                                Tags:
                                <span class="tags">
                                    <?php 
                                        $targs = explode(',',$vo['keywords']);
                                        foreach($targs as $k=>$v){
                                            echo "<a href='/search/targs/$v'>$v</a>&nbsp;&nbsp;";
                                        } 
                                    ?> 
                                </span>
                            </h5>
                            <h6 class="post-footer">
                                发布:<?php echo $vo['author']; ?> | 分类:<?php echo $vo['catename']; ?> | 评论:<?php echo $vo['comment']; ?> | 浏览:<?php echo $vo['num']; ?>
                                <a href="/read/<?php echo $vo['id']; ?>">
                                    阅读全文 >
                                </a>
                            </h6>
                        </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                        <div class="post pagebar">
                            <?php echo $cateArticle->render(); ?>
                            共<?php echo $cateArticle->total(); ?>条 <?php echo $cateArticle->currentPage(); ?>/<?php echo $cateArticle->lastPage(); ?> 页
                        </div>
                    </div>
                    <div id="divSidebar">
    <dl class="function" id="divSearchPanel">
        <dt class="function_t">
            关键字搜索
        </dt>
        <dd class="function_c">
            <div>
                <div style="padding:0.5em 0 0.5em 1em;">
                    <form method="post" action="/search">
                        <input type="text" name="edtSearch" id="edtSearch" size="12" />
                        <input type="submit" value="提交" name="btnPost" id="btnPost" />
                    </form>
                </div>
            </div>
        </dd>
    </dl>
	<?php if(\think\Session::get('controller') == 'Base'): else: ?>
    <dl class="function" id="divTags">
        <dt class="function_t">
            按类别浏览
        </dt>
        <dd class="function_c">
            <ul>
                <?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <li class="tag-name tag-name-size-0">
                    <a href="/cate/<?php echo $vo['id']; ?>">
                        <?php echo $vo['catename']; ?>
                    </a>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </dd>
    </dl>
	<?php endif; ?>
    <dl class="function" id="divComments">
        <dt class="function_t">
            最新留言
        </dt>
        <dd class="function_c">
            <ul>
            <?php if(is_array($msg) || $msg instanceof \think\Collection || $msg instanceof \think\Paginator): $i = 0; $__LIST__ = $msg;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <li style="text-overflow:ellipsis;">
                    <a href="<?php echo url('Msg/index'); ?>" title="<?php echo $vo['name']; ?>留言于——<?php echo $vo['create_time']; ?>">
                        <?php echo $vo['content']; ?>
                    </a>
                </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>  
            </ul>
        </dd>
    </dl>
    <dl class="function" id="divLinkage">
        <dt class="function_t">
            友情链接
        </dt>
        <dd >
            <ul>
                <li>
                    <?php if(is_array($link) || $link instanceof \think\Collection || $link instanceof \think\Paginator): $i = 0; $__LIST__ = $link;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <a href="<?php echo $vo['url']; ?>" target="_blank">
                        <?php echo $vo['title']; ?>
                    </a>&nbsp;&nbsp;
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </li>
                <li>
                    <a href="<?php echo url('Msg/index'); ?>" target="_blank" title="申请链接">
                        <span style="color:#006000;">
                            交换友情链接
                        </span>
                    </a>
                </li>
            </ul>
        </dd>
    </dl>
    <dl class="function" id="divMisc">
        <dt class="function_t">
            分享到：
        </dt>
        <dd class="function_c">
            <ul>
                <li>
                    <img src="images/weixin.jpg" height="110" width="110" border="0" alt="Qsir的个人公众号"
                    title="微信扫一扫。" />
                </li>
                <li>
                    <!-- Baidu Button BEGIN -->
                    <div class="bdsharebuttonbox">
                        <a href="#" class="bds_more" data-cmd="more">
                        </a>
                        <a title="分享到微信" href="#" class="bds_weixin" data-cmd="weixin">
                        </a>
                        <a title="分享到QQ空间" href="#" class="bds_qzone" data-cmd="qzone">
                        </a>
                        <a title="分享到百度贴吧" href="#" class="bds_tieba" data-cmd="tieba">
                        </a>
                        <a title="分享到新浪微博" href="#" class="bds_tsina" data-cmd="tsina">
                        </a>
                    </div>
                    <script>
                        window._bd_share_config = {
                            "common": {
                                "bdSnsKey": {},
                                "bdText": "",
                                "bdMini": "2",
                                "bdMiniList": ["sqq", "weixin", "qzone", "tsina", "tieba", "douban"],
                                "bdPic": "",
                                "bdStyle": "0",
                                "bdSize": "16"
                            },
                            "share": {}
                        };
                        with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~ ( - new Date() / 36e5)];
                    </script>
                    <!-- Baidu Button END -->
                </li>
            </ul>
        </dd>
    </dl>
</div>
                    <div id="divBottom"> 
      <h3 id="BlogCopyRight"><script src="http://s20.cnzz.com/stat.php?id=681872&amp;web_id=681872&amp;show=pic" language="JavaScript"></script>　陕ICP备11002139号-1</h3> 
      <h4 id="BlogPowerBy">Powered By <a href="http://www.rainbowsoft.org/" title="RainbowSoft Studio Z-Blog" target="_blank">Z-Blog</a>　本站遵循<a rel="license" target="_blank" title="署名-非商业性使用-禁止演绎 3.0 中国大陆许可协议" href="http://creativecommons.org/licenses/by-nc-nd/3.0/cn/"> CC BY-NC-ND 3.0 CN协议 </a>。</h4> 
     </div>
     <div class="clear"></div> 
    </div>
    <div class="clear"></div> 
   </div>
   <div class="clear"></div> 
  </div>   
  <!-- 2016-6-23 1:59:46 -->
 </body>
</html>