<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>범죄 데이터 수집 장소</title>
<body bgcolor="#D3D3D3"></body>
</head>
<body>

<header>
    <center>
        <a href="./home.php"><h1>범죄 데이터 수집 장소</h1></a>
    </center>
</header>

<div class="header">
    <h1 class="logo">
        <a href="./home.php" class="TopMainLogo">
            <center>
                <img src="./main.jpg" width="700" height="400" alt="범죄데이터 수집 장소">
        </a>
        </center>
    </h1>

    <div id="divWrapper">
        <nav>
            <ul>
                <li class="on"><a href="crawlingtest.php">다크웹 크롤링 (단어 데이터)</a></li>
                <li class="on"><a href="crawlingtest_img.php">다크웹 크롤링 (이미지 데이터)</a></li>
                <li class="on"><a href="crawling_siyeon.php">다크웹 크롤링 시연 (단어 데이터)</a></li>
                <?php
                session_start();
                /* 주석 테스트 */

                if(isset($_SESSION['userid'])) {
                    ?>
                    <li><?php echo $_SESSION['userid']."님, "?><a href="logout_action.php">로그아웃</a></li>
                    <?php
                } else {
                    ?>
                    <li><a href="login.php">로그인</a></li>
                    <?php
                }
                ?>
            </ul>
        </nav>
    </div>
    <div class="footerInfo">
        <address>(13조) 졸업프로젝트 과제</address>
        <address><a href="https://github.com/DarkWebCrawling">👨🏻‍💻 GitHub : github.com/DarkWebCrawling</a></address>
        <address><a href="mailto:ming_ssok@g.cnu.ac.kr">📨 E-MAIL : ming_ssok@g.cnu.ac.kr</a></address>
    </div>
    </ul>
</div>
</body>
</html>
