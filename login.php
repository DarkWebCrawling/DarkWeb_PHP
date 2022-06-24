<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/styleSignin.css">
    <title>로그인</title>
</head>
<body>

<div class = "container">
    <div class = "header">
    </div>

    <div class="center">
        <h1>LOG IN</h1>
        <form action="login_action.php" form method="post">
            <div class="txt_field">
                <input type="text" name="id" required>
                <span></span>
                <label>Username</label>
            </div>

            <div class="txt_field">
                <input type="password" name="pw" required>
                <span></span>
                <label>Password</label>
            </div>

            <input type="submit" value="Login">

            <div class="signup_link">
                Not a member? <a href="register.php">Sign Up</a>
            </div>
    </div>
</div>
</body>
</html>