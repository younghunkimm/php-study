<?php include './include/session.php'; ?>

<?php
$result = session_destroy();
if ($result) {
  echo '<script> alert("로그아웃 되었습니다."); history.back(); </script>';
}
?>