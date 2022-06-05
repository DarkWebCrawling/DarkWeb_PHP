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
        <h1>범죄 데이터 수집 장소</h1>
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

                if(isset($_SESSION['user_id'])) {
                    ?>
                    <li><a href="rental.php">대출 조회/연장</a></li>
                    <li><a href="reserve.php">예약 조회/취소</a></li>
                    <li><a href="previous.php">이전 대출기록</a></li>
                    <li><a href="myInfo.php">내 정보</a></li>
                    <?php
                    if(isset($_SESSION['admin_id'])) {
                        ?>
                        <li class="on"><a href="adminRESERVE.php">예약취소 메일 보내기</a></li>
                        <li><a href="valuable.php">유용한 통계</a></li>
                        <?php
                    }
                    ?>
                    <li><?php echo $_SESSION['user_name']."님, "?><a href="logout.php">로그아웃</a></li>
                    <?php
                } else {
                    ?>
                    <li><a href="./signin.php">로그인</a></li>
                    <li><a href="./signup.php">회원가입</a></li>
                    <?php
                }
                ?>
            </ul>
        </nav>
    </div>
    <div class="footerInfo">
        <address>(13조) 졸업프로젝트 과제</address>
        <address>E-MAIL : ming_ssok@g.cnu.ac.kr<p> </p></address>
    </div>
    </ul>
</div>
</body>
</html>
