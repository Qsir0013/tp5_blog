<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:80:"E:\phpStudy\PHPTutorial\WWW\guan\public/../application/index\view\msg\index.html";i:1520833258;s:71:"E:\phpStudy\PHPTutorial\WWW\guan\application\index\view\public\nav.html";i:1522382178;s:73:"E:\phpStudy\PHPTutorial\WWW\guan\application\index\view\public\right.html";i:1522382054;s:71:"E:\phpStudy\PHPTutorial\WWW\guan\application\index\view\public\fot.html";i:1520475494;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
 <head> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <meta http-equiv="Content-Language" content="zh-CN" /> 
  <meta name="keywords" content="<?php echo $nav['2']['keywords']; ?>" /> 
  <meta name="description" content="<?php echo $nav['2']['des']; ?>" /> 
  <title>Qsir的博客__<?php echo $nav['2']['des']; ?> </title> 
  <link rel="stylesheet" rev="stylesheet" href="/guan/public/static/index/style/style.css" type="text/css" media="screen" /> 
  <link rel="shortcut icon" href="/guan/public/static/index/favicon.ico" /> 
  <script src="/guan/public/static/index/style/common.js" type="text/javascript"></script> 
  
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
      <div class="post" id="divCommentPost"> 
       <p class="posttop"><a name="comment">发表留言:</a><small><a rel="nofollow" id="cancel-reply" href="#divCommentPost" style="display:none;">取消回复</a></small></p> 
       <form id="frmSumbit" target="_self" method="post" action=""> 
        <input type="hidden" name="inpId" id="inpId" value="75" /> 
        <input type="hidden" name="inpArticle" id="inpArticle" value="" /> 
        <input type="hidden" name="inpRevID" id="inpRevID" value="" /> 
        <p><input type="text" name="inpName" id="inpName" class="text" value="" size="28" tabindex="1" /> <label for="inpName">名称（必填）</label></p> 
        <p><input type="text" name="inpEmail" id="inpEmail" class="text" value="" size="28" tabindex="2" /> <label for="inpEmail">邮箱</label></p> 
        <p><input type="text" name="inpHomePage" id="inpHomePage" class="text" value="" size="28" tabindex="3" /> <label for="inpHomePage">网站链接</label></p> 
        <p><input type="text" name="inpVerify" id="inpVerify" class="text" value="" size="28" tabindex="4" /> <label for="inpVerify">验证（必填）</label> <img style="border:1px solid silver;width:60px;height:20px;" src="" alt="验证码" title="验证码" /></p> 
        <p><label for="txaArticle">正文（必填）(留言最长字数:1000)</label></p> 
        <p><textarea name="txaArticle" id="txaArticle" onchange="GetActiveText(this.id);" onclick="GetActiveText(this.id);" onfocus="GetActiveText(this.id);" class="text" cols="50" rows="4" tabindex="5"></textarea></p> 
        <p><input name="btnSumbit" type="submit" tabindex="6" value="提交" onclick="JavaScript:return VerifyMessage()" class="button" /> <input type="checkbox" name="chkRemember" value="1" id="chkRemember" /> <label for="chkRemember">记住我,下次回复时不用重新输入个人信息</label></p> 
        <script language="JavaScript" type="text/javascript">objActive="txaArticle";ExportUbbFrame();</script> 
       </form> 
       <p class="postbottom">◎欢迎参与讨论，请在这里发表您的看法、交流您的观点。</p> 
       <script language="JavaScript" type="text/javascript">LoadRememberInfo();</script> 
      </div> 
      <ul class="msg msghead"> 
       <li class="tbname">留言列表:</li> 
      </ul> 
      <ins style="display:none;" id="AjaxCommentBegin"></ins>
      <?php if(is_array($msg) || $msg instanceof \think\Collection || $msg instanceof \think\Paginator): $i = 0; $__LIST__ = $msg;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
      <ul class="msg" id="cmt1475"> 
         <li class="msgname">
         <img class="avatar" src="http://cn.gravatar.com/avatar/e762b2d63651344d2ca3db6bcef8286b?s=40&amp;d=mm" alt="" width="32" />&nbsp;
         <span class="commentname">
         <a href="" rel="nofollow" target="_blank"><?php echo $vo['name']; ?></a></span><br /><small>&nbsp;发布于&nbsp;<?php echo $vo['create_time']; ?>&nbsp;&nbsp;<span class="revertcomment"><a onclick="RevertComment('1475')">回复该留言</a></span></small>
         </li> 
         <li class="msgarticle">
         <?php echo $vo['content']; ?>
         </li>
      </ul> 
      <?php endforeach; endif; else: echo "" ;endif; ?> 
     </div> <div id="divSidebar">
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