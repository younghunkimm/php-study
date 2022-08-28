<?php
include '../dbconnect/dbconnect.php';

$query = 'select * from user where id="'.$_GET['id'].'"';
$result = mysqli_query($dbcon, $query);

if ($result) {
  $count = mysqli_num_rows ($result);
  if ($count == 0) {
    echo $_row['id']."아이디의 회원이 없음<br>";
    echo "<br><a href='main.html'>초기 화면으로</a>";
    exit();
  }
} else {
  echo "데이터 조회 실패<br>";
  echo "실패 원인 : ".mysqli_error($dbcon);
  echo "<br><a href='main.html'>초기 화면으로</a>";
  exit();
}

$row = mysqli_fetch_array($result);

include '../dbconnect/dbclose.php';
?>

<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
  </head>
  <body>
    <h1>회원 삭제</h1>
    <form action="process_delete.php" method="post">
      아이디 : <input type="text" name="id" value="<?=$row['id']?>" readonly><br>
      이름 : <input type="text" name="name" value="<?=$row['name']?>" readonly><br>
      회원을 삭제하겠습니까? <input type="submit">
    </form>
  </body>
</html>