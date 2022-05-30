<?php include '../dbconnect/dbconnect.php'; ?>

<?php
if ($_GET['num'] && $_POST['dat_user'] && $_POST['dat_pw'] && $_POST['content']){
  $query = 'insert into reply (con_num, name, pw, content, date) ';
  $query.= 'values ('.$_GET['num'].', "'.$_POST['dat_user'].'", "'.$_POST['dat_pw'].'", "'.$_POST['content'].'", "'.date("Y-m-d H:i:s").'")';
  $result = mysqli_query($dbcon, $query);

  echo '<script> alert("댓글이 작성되었습니다."); location.href="./view.php?num='.$_GET['num'].'" </script>';
  // echo mysqli_error($dbcon);
} else {
  echo '<script> alert("댓글 작성에 실패했습니다."); history.back(); </script>';
}
?>