<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:85:"E:\phpStudy\PHPTutorial\WWW\guan\public/../application/index\view\public\content.html";i:1522384476;s:71:"E:\phpStudy\PHPTutorial\WWW\guan\application\index\view\public\nav.html";i:1522382178;s:73:"E:\phpStudy\PHPTutorial\WWW\guan\application\index\view\public\right.html";i:1522382054;s:71:"E:\phpStudy\PHPTutorial\WWW\guan\application\index\view\public\fot.html";i:1520475494;}*/ ?>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
 <head> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <meta http-equiv="Content-Language" content="zh-CN" /> 
  <meta name="keywords" content="<?php echo $article['keywords']; ?>" /> 
  <meta name="description" content="<?php echo $article['des']; ?>" /> 
  <title>Qsir的博客_<?php echo $article['title']; ?></title> 
  <link rel="stylesheet" rev="stylesheet" href="/guan/public/static/index/style/style.css" type="text/css" media="screen" /> 
  <link rel="shortcut icon" href="/favicon.ico" /> 
  <script src="/guan/public/static/index/style/common.js" type="text/javascript"></script> 
  <script src="/guan/public/static/index/style/c_html_js_add.js" type="text/javascript"></script> 
  <script src="/guan/public/static/index/style/custom.js" type="text/javascript"></script> 
 </head> 
 <body class="single"> 
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
                            
                                <a title="<?php echo $vo['catename']; ?>" <?php if($vo['id'] == 2): ?> target="_blank" <?php else: endif; ?> href="/guan/index.php/index/<?php echo $vo['url']; ?>">
                                    <?php echo $vo['catename']; ?>
                                </a>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div> 
     <div id="divMain"> 
      <div class="post single-post cate2 auth1"> 
       <div class="post-nav">
        <a class="l" href="" title="​">&laquo; 上一篇</a>
        <a class="r" href="" title="">下一篇 &raquo;</a>
       </div> 
       <h4 class="post-date">2016-3-11 13:23:45</h4> 
       <h2 class="post-title"><?php echo $article['title']; ?></h2> 
       <div class="post-body" style="box-shadow:5px 5px 5px 1px #888888;padding:10px">
        <?php echo $content; ?>
        <p><br /></p>
       </div> 
       <h5 class="post-tags">Tags:
		<?php 
			$targs = explode(',',$article['keywords']);
			foreach($targs as $k=>$v){
				echo "<a style='color:blue;' href='/guan/index.php/index/base/search/targs/$v'>$v</a>&nbsp;&nbsp;";
			} 
		?> 
	   </h5> 
       <h6 class="post-footer"> 发布:<?php echo $article['author']; ?> | 分类:大生活 | 评论:<?php echo $article['comment']; ?> | 浏览:<span ><?php echo $article['num']; ?></span> <br /> 
        <!-- AD BEGIN --> <br /> 
        <div style="width:660px;" align="center"> 
        </div> 
        <!-- AD END --> </h6> 
      </div> 
      <ul class="msg mutuality"> 
       <li class="tbname">相关文章:</li> 
       <li class="msgarticle"><p><a href="http://www.youmew.com/post/80.html">平凡的日子里，我感到幸福，又感到绝望。</a>&nbsp;&nbsp;(2017-9-9 23:0:29)</p><p><a href="http://www.youmew.com/post/79.html">第301天后……</a>&nbsp;&nbsp;(2017-6-27 21:57:53)</p><p><a href="http://www.youmew.com/post/77.html">明心见性的一段对话</a>&nbsp;&nbsp;(2016-3-17 10:45:44)</p><p><a href="http://www.youmew.com/post/75.html">2016年就一个字：戒！​</a>&nbsp;&nbsp;(2016-1-26 13:52:59)</p><p><a href="http://www.youmew.com/post/74.html">初冬，景如故</a>&nbsp;&nbsp;(2015-11-21 17:2:53)</p><p><a href="http://www.youmew.com/post/72.html">五十度灰的天空</a>&nbsp;&nbsp;(2015-4-30 4:47:49)</p><p><a href="http://www.youmew.com/post/71.html">见路不走，清明</a>&nbsp;&nbsp;(2015-4-1 11:59:32)</p><p><a href="http://www.youmew.com/post/70.html">神雕侠侣不过只是男欢女爱罢了</a>&nbsp;&nbsp;(2015-2-20 9:2:14)</p><p><a href="http://www.youmew.com/post/69.html">山花烂漫的季节，我们各自冷暖自知</a>&nbsp;&nbsp;(2015-2-4 11:59:13)</p><p><a href="http://www.youmew.com/post/68.html">一场梦而已。</a>&nbsp;&nbsp;(2015-1-20 5:11:26)</p></li> 
      </ul> 
     </div> 
	 <div id="divSidebar">
    <dl class="function" id="divSearchPanel">
        <dt class="function_t">
            关键字搜索
        </dt>
        <dd class="function_c">
            <div>
                <div style="padding:0.5em 0 0.5em 1em;">
                    <form method="post" action="/guan/index.php/index/Base/search">
                        <input type="text" name="edtSearch" id="edtSearch" size="12" />
                        <input type="submit" value="提交" name="btnPost" id="btnPost" />
                    </form>
                </div>
            </div>
        </dd>
    </dl>
	<?php if(\think\Session::get('controller') == 'Msg'): else: ?>
    <dl class="function" id="divTags">
        <dt class="function_t">
            按类别浏览
        </dt>
        <dd class="function_c">
            <ul>
                <?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <li class="tag-name tag-name-size-0">
                    <a href="/guan/index.php/index/<?php echo \think\Session::get('controller'); ?>/cate/catename/<?php echo $vo['id']; ?>">
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
    </div>
   </div>
  </div>
 </body>
</html>