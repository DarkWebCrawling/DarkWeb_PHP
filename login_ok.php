<?php
$host = '146.56.172.84';
$user = 'root';
$pw = '871717';
$dbName = 'Library';
$mysqli = new mysqli($host, $user, $pw, $dbName);

if($mysqli){
  echo "MySQL 접속 성공";
}else{
  echo "MySQL 접속 실패";
}
?>

<?php
if(!isset($_POST['user_id']) || !isset($_POST['user_pw'])) exit;

$user_id = $_POST['user_id'];
$user_pw = $_POST['user_pw'];

$sql = "SELECT * FROM CUSTOMER WHERE CNO='$user_id' AND PASSWD='$user_pw'";
$stmt = $conn -> prepare("SELECT * FROM CUSTOMER WHERE CNO='$user_id' AND PASSWD='$user_pw'");
$result = $stmt -> execute();
$row = $stmt -> fetch();

$name = $row['NAME'];
$cno = $row['CNO'];


if($row > 0) {
  session_start();
  $_SESSION['user_id'] = $user_id;
  $_SESSION['user_name'] = $name;

  if($cno == 777) {
    $_SESSION['admin_id'] = $user_id;
  }
  echo "<script>alert('[$name]님, 로그인을 환영합니다.');</script>";
  echo "<meta http-equiv='refresh' content='0;url=home.php'>";
}
else {
  echo "<script>alert('로그인 실패');</script>";
  echo "<meta http-equiv='refresh' content='0;url=login.php'>";
}
?>
