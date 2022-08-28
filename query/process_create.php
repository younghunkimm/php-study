<?php
include './include/dbconnect.php';

$query = "insert into topic (title, description, created) values ('{$_POST['title']}', '{$_POST['description']}', NOW())";

$result = mysqli_query($dbcon, $query);
if ($result === false) {
  echo '생성하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요.';
  error_log(mysqli_error($dbcon));
} else {
  echo '생성했습니다. <a href="index.php">돌아가기</a>';
}
?>