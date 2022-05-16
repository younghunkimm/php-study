<?php
include '../dbconnect/dbconnect.php';

$query = 'update user set ';
$query.= 'id="'.$_POST['id'].'", name="'.$_POST['name'].'", birth="'.$_POST['birth'].'", address="'.$_POST['address'].'", tel="'.$_POST['tel'].'", date="'.date('Y-m-d').'" ';
$query.= 'where id="'.$_POST['id'].'"';
// $query.= "id={$_POST['id']}, name={$_POST['name']}, birth={$POST_['birth']}, address={$_POST['address']}, tel={$_POST['tel'}";

// $query = "
//   update user set
//   id = '{$_POST['id']}', name = '{$_POST['name']}', birth = '{$_POST['birth']}', address = '{$_POST['address']}', tel = '{$_POST['tel']}'
//   where id = '{$_POST['id']}'
// ";

$result = mysqli_query($dbcon, $query);

echo "<h1>회원 정보 수정 결과</h1>";
if ($result) {
  echo "데이터 수정 성공";
} else {
  echo "데이터 수정 실패<br>";
  echo "실패 원인: ".mysqli_error($dbcon);
}

include '../dbconnect/dbclose.php';
?>