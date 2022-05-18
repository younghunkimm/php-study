<?php include '../dbconnect/dbconnect.php'; ?>
<?php include './include/session.php'; ?>

<?php
$query = 'select * from mem where id="'.$_POST['id'].'"';
$result = mysqli_query($dbcon, $query);

if (mysqli_num_rows($result) == 1) {
  $row = mysqli_fetch_assoc($result);
  if ($row['pw'] == $_POST['pw']) {
    $_SESSION['userid'] = $_POST['id'];
    if (isset($_SESSION['userid'])) {
      echo '<script> alert("로그인 되었습니다."); window.location.href = "./index.php"; </script>';
    } else {
      echo 'session fail : '.mysqli_error($dbcon);
    }
  } else {
    echo '<script> alert("아이디 혹은 비밀번호가 잘못되었습니다."); history.back(); </script>';
  }
} else {
  echo '<script> alert("아이디 혹은 비밀번호가 잘못되었습니다."); history.back(); </script>';
}
?>