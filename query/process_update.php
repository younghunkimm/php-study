<?php
include './include/dbconnect.php';

$query = "UPDATE topic SET title = '{$_POST['title']}', description = '{$_POST['description']}' WHERE id = {$_POST['id']}";

$result = mysqli_query($dbcon, $query);
if ($result === false) {
  echo '수정하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요.';
  error_log(mysqli_error($dbcon));
} else {
  echo '수정했습니다. <a href="index.php">돌아가기</a>';
}
?>