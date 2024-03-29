<!DOCTYPE html>

<html>
<head>
    <meta charset = 'utf-8'>
    <title>다크웹 크롤링 시연 (단어 데이터)</title>
</head>
<style>
    table{
        border-top: 1px solid #444444;
        border-collapse: collapse;
    }
    tr{
        border-bottom: 1px solid #444444;
        padding: 10px;
    }
    td{
        border-bottom: 1px solid #efefef;
        padding: 10px;
    }
    table .even{
        background: #efefef;
    }
    .text{
        text-align:center;
        padding-top:20px;
        color:#000000
    }
    .text:hover{
        text-decoration: underline;
    }
    a:link {color : #57A0EE; text-decoration:none;}
    a:hover { text-decoration : underline;}
</style>
<body>

<h2 align=center><a href = "./crawling_siyeon.php">다크웹 크롤링 시연 (단어 데이터)</a></h2>

<form class="row">
    <div class="col-10" align="center">
        <label for="searchWord" class="visually-hidden">TITLE 검색</label>
        <input type="text" class="form-control" id="searchWord" name="searchWord" placeholder="Search TITLE" value="<?= $searchWord ?>">
        <button type="submit" class="btn btn-primary mb-3">검색</button>
    </div>
    <div class="col-auto text-end">
    </div>
</form>

<table align = center>
    <thead align = "center">
    <tr>
        <td width = "50" align="center">No</td>
        <td width = "200" align = "center">TITLE</td>
        <td width = "200" align = "center">URL</td>
        <td width = "200" align = "center">범죄여부</td>
        <td width = "200" align = "center">카테고리</td>

    </tr>
    </thead>

    <tbody>

    <?php
    $searchWord = $_GET['searchWord'];

    $conn = mysqli_connect('146.56.172.84', 'root', '871717', 'CRIME', 3306);
    $query = "SELECT * FROM wordSiyeon where title like'%$searchWord%'";
    $result = $conn->query($query);
    $total = mysqli_num_rows($result);


    if(isset($_GET['page'])){
        $page = $_GET['page'];
    } else {
        $page = 1;
    }

    $sql = "SELECT * FROM wordSiyeon where title like '%$searchWord%'";
    $res = mysqli_query($conn, $sql);

    $total_post = mysqli_num_rows($res);
    $per = 10;

    $start = ($page-1)*$per + 1;
    $start -= 1;

    $sql_page = "SELECT * FROM wordSiyeon where title like '%$searchWord%' limit $start, $per";
    $res_page = mysqli_query($conn, $sql_page);

    while($row = mysqli_fetch_array($res_page)){ //DB에 저장된 데이터 수 (열 기준)
        if($total%2==0){
            ?>                      <tr class = "even">
        <?php   }
        else{
            ?>                      <tr>
        <?php } ?>
        <td width=50 align="center" style="word-break:break-all"><?php echo $row['NO']?></td>
        <td width=420 align="center" style="word-break:break-all"><?php echo $row['title']?></td>
        <td width=420 align="center" style="word-break:break-all"><a href = "<?php echo $row['url']?>"><?php echo $row['url']?></td>
        <td width=420 align="center" style="word-break:break-all"><?php echo $row['crime']?></td>
        <td width=420 align="center" style="word-break:break-all"><?php echo $row['cate']?></td>
        </tr>
        <?php
        $total--;
    }
    ?>
    </tbody>
</table>

<?php

$total_page = ceil($total_post / $per);
$page_num = 1;

?>
<div align = "center">
    <?php
    if($page > 1){
        echo "<a href=\"crawling_siyeon.php?page=1\">[처음] </a>";
    }
    if($page > 1){
        $pre = $page - 1;
        echo "<a href=\"crawling_siyeon.php?page=$pre\">이전 </a>";
    }

    $total_page = ceil($total_post / $per);
    $page_num = 1;

    while($page_num <= $total_page){
        if($page==$page_num){
            echo "<a style=\"color:purple;\" href=\"crawling_siyeon.php?page=$page_num\">$page_num </a>";
        } else {
            echo "<a href=\"crawling_siyeon.php?page=$page_num\">$page_num </a>"; }
        $page_num++;
    }

    if($page < $total_page){
        $next = $page + 1;
        echo "<a href=\"crawling_siyeon.php?page=$next\">다음 </a>";
    }
    if($page < $total_page){
        echo "<a href=\"crawling_siyeon.php?page=$total_page\">[끝]</a>";
    }
    ?>
</div>
<div class = text>
    <font style="cursor: hand"onClick="location.href='./home.php'">뒤로가기</font>
</div>



</body>
</html>