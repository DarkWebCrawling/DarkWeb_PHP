

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>회원가입</title>
    <link rel="stylesheet" href="./css/styleSignin.css">
</head>
<body>


<div class = "container">

    <div class = "header">
    </div>

    <div class="center">
        <h1>SIGN UP</h1>
        <form action="register_action.php" form method="post">
            <div class="txt_field">
                <input type="text" name="id" required>
                <span></span>
                <label>ID</label>
            </div>


            <div class="txt_field">
                <input type="password" name="pw" required>
                <span></span>
                <label>Password</label>
            </div>
            <input type="submit" value="SIGN UP">
            <div class="signup_link">
                Already a member? <a href="login.php">Sign In</a>
            </div>
    </div>
</div>
</body>
</html>
