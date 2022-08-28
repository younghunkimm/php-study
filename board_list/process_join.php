<?php include '../dbconnect/dbconnect.php'; ?>

<?php
$query = 'insert into mem (id, pw, date, permit) ';
$query.= 'values ("'.$_POST['id'].'", "'.$_POST['pw'].'", "'.date("Y-m-d H:i:s").'", "'.$_POST['email'].'")';
$result = mysqli_query($dbcon, $query);

if ($result) {
  echo '<script> alert("가입 되었습니다."); window.location.href = "./login.php"; </script>';
} else {
  echo '<script> alert("fail"); history.back(); </script>';
}
?>

<?php include '../dbconnect/dbclose.php'; ?>