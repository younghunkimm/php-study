<?php
include '../dbconnect/dbconnect.php';

$query = 'delete from user where id="'.$_POST['id'].'"';
$result = mysqli_query($dbcon, $query);

echo "<h1>회원 삭제 결과</h1>";
if ($result) {
  echo $_POST['id']." 회원 삭제 성공.";
} else {
  echo "회원 삭제 실패<br>";
  echo "실패 원인 : ".mysqli_error($dbcon);
}

echo "<a href='main.html'>초기 화면으로</a>";


include '../dbconnect/dbclose.php';
?>