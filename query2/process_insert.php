<?php
include '../dbconnect/dbconnect.php';

$query = 'insert into user ';
$query.= '(id, name, birth, address, tel, date)';
$query.= 'values ';
$query.= '("'.$_POST['id'].'", "'.$_POST['name'].'", '.$_POST['birth'].', "'.$_POST['address'].'", "'.$_POST['tel'].'", "'.date('Y-m-d').'")';
$result = mysqli_query($dbcon, $query);

echo "<h1>신규 회원 입력 결과</h1>";
if ($result) {
  echo "데이터가 성공적으로 입력됨.";
} else {
  echo "데이터 입력 실패<br>";
  echo "실패 원인:".mysqli_error($dbcon);
}

include '../dbconnect/dbclose.php';
?>