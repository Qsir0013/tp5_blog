<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:82:"E:\phpStudy\PHPTutorial\WWW\guan\public/../application/admin\view\login\index.html";i:1524649813;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>yi_后台登录</title>
    <link href="/static/admin/css/admin_login.css" rel="stylesheet" />
</head>
<body>
<div class="admin_login_wrap">
    <h1>后台管理</h1>
    <div class="adming_login_border">
        <div class="admin_input">
            <form action="" method="post">
                <ul class="admin_items">
                    <li>
                        <label for="user">用户名：</label>
                        <input type="text" name="name" value="" id="user" size="35" class="admin_input_style" />
                    </li>
                    <li>
                        <label for="pwd">密码：</label>
                        <input type="password" name="passwd" value="" id="pwd" size="35" class="admin_input_style" />
                    </li>
                    <li>
                        <label for="pwd">验证码：</label>
                        <input type="text"  name="verifyCode" value="" size="35" class="admin_input_style" />
                        <div><img src="<?php echo captcha_src(); ?>" alt="captcha"  onclick="this.src=this.src+'?'+Math.random()" /></div>
                    </li>
                    <li>
                        <input type="submit" tabindex="3" value="提交" class="btn btn-primary" />
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>
</body>
</html>