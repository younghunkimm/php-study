<?php include '../dbconnect/dbconnect.php'; ?>
<?php include './include/session.php'; ?>

<?php
$query = 'select * from board where num = '.$_GET['num'].' and id ="'.$_GET['id'].'"';
$result = mysqli_query($dbcon, $query);
$row = mysqli_fetch_assoc($result);

if (!isset($_SESSION['userid'])) {
  echo '<script> alert("삭제 권한이 없습니다 - 1."); window.location.href = "./index.php"; </script>';
} else if ($_SESSION['userid'] == $row['id']) {
  $query = 'delete from board where num = '.$_GET['num'].' and id ="'.$_GET['id'].'"';
  $result = mysqli_query($dbcon, $query);
  echo '<script> alert("삭제 성공"); window.location.href = "./index.php"; </script>';
} else {
  echo '<script> alert("삭제 권한이 없습니다 - 1."); window.location.href = "./index.php"; </script>';
}
?>

<?php include '../dbconnect/dbclose.php'; ?>