<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<style>
		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	</style>
</head>
<body>
	<div class="welcome">
        <form action="{{url('/auth/login')}}" method="post">
        <p>
            <label for="user_login">用户名</label>
            <input id="user_login" type="text" name="user_login" value="">
        </p>
        <p>
            <label for="user_pass">密码</label>
            <input id="user_pass" type="password" name="user_pass" value="">
        </p>
        <p>
            <input id="submit" type="submit" value="登录">
        </p>
        </form>
	</div>
</body>
</html>
