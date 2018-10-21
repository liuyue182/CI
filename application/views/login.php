<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
        <base href="<?php echo site_url();?>">
</head>
<body>
<form action="welcome/login_check" method="post">
    用户名：<input type="text" name="username"><br>
    密码：<input type="password" name="pwd1"><br>
    <input type="submit" value="登录">
</form>
</body>
</html>