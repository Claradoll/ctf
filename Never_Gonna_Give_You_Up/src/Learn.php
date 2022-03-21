<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no"
    />
    <meta name="renderer" content="webkit" />
    <meta name="force-rendering" content="webkit" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/mdui@1.0.2/dist/css/mdui.min.css"
        integrity="sha256-HC/aPArtOc7yw62YcBzG24sJXjXJu0atujZh9a4LtUw="
        crossorigin="anonymous"
    />
    <title>babysql</title>
</head>
<body
    class="
      mdui-theme-layout-auto mdui-theme-primary-indigo mdui-theme-accent-pink
    "
>
<style type="text/css">
    body{
        background: url("img/background.jpg") no-repeat center center fixed;
        /*兼容浏览器版本*/
        -webkit-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
</style>
<div class="mdui-container">
    <div class="mdui-center" style="max-width: 32rem">
        <form action="/login" method="POST">
            <div class="mdui-textfield mdui-textfield-floating-label">
                <i class="mdui-icon material-icons">account_circle</i>
                <label class="mdui-textfield-label">用户名</label>
                <input
                    class="mdui-textfield-input"
                    type="text"
                    name="username"
                    pattern="^[a-zA-Z0-9]{6,32}$"
                    required
                />
                <div class="mdui-textfield-error">
                    用户名不合法
                </div>
            </div>

            <div class="mdui-textfield mdui-textfield-floating-label">
                <i class="mdui-icon material-icons">lock</i>
                <label class="mdui-textfield-label">密码</label>
                <input
                    class="mdui-textfield-input"
                    type="password"
                    name="password"
                    pattern="^[a-zA-Z0-9!@$%^&_+]{6,32}$"
                    required
                />
                <div class="mdui-textfield-error">
                    密码不合法
                </div>
            </div>
            <div class="mdui-col mdui-textfield">
                <input
                    class="mdui-btn mdui-color-theme-accent mdui-ripple mdui-center"
                    type="submit"
                    value="登录"
                    mdui-tooltip="{content: 'please login to get flag'}"
                />
            </div>
        </form>
    </div>
</div>

<script
    src="https://cdn.jsdelivr.net/npm/mdui@1.0.2/dist/js/mdui.min.js"
    integrity="sha256-pQMhrt4i+xYuZzfKboXTE2lnXDccZ8qI2Fh8gyGtX6Q="
    crossorigin="anonymous"
></script>
</body>
</html>
