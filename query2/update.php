<?php
include '../dbconnect/dbconnect.php';

$query = "select * from user where id='".$_GET['id']."'";
$result = mysqli_query($dbcon, $query);
if ($result) {
  $count = mysqli_num_rows($result);
  if ($count == 0) {
    echo $_GET['id']."아이디의 회원이 없습니다.<br>";
    echo "<br><a href='main.html'>초기 화면으로</a>";
    exit();
  }
} else {
  echo "데이터 조회 실패<br>";
  echo "실패 원인 :".mysqli_error($dbcon);
  echo "<br><a href='main.html'>초기 화면으로</a>";
  exit();
}

$row = mysqli_fetch_array($result);
// print_r($row);
?>

<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
  </head>
  <body>
    <h1>회원 정보 수정</h1>
    <form action="process_update.php" method="post">

      <!-- num 을 hidden 으로 process_update.php 에 데이터를 전송 -->
      <input type="hidden" name="num" value="<?=$_GET['num']?>">
      아이디 : <input type="text" name="id" value="<?=$row['id']?>"><br>
      이름 : <input type="text" name="name" value="<?=$row['name']?>"><br>
      출생년도 : <input type="text" name="birth" value="<?=$row['birth']?>"><br>
      지역 : <input type="text" name="address" value="<?=$row['address']?>"><br>
      전화번호 : <input type="text" name="tel" value="<?=$row['tel']?>"><br>
      <input type="submit">
    </form>
  </body>
</html>

<?php include '../dbconnect/dbclose.php';