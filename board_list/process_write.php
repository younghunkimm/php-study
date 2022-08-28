<?php include '../dbconnect/dbconnect.php'; ?>

<?php
// 비밀글 체크
isset($_POST['lockpost']) ? $is_lock = '1' : $is_lock = '0';
$query = 'insert into board (title, content, date, id, password, lock_post) ';
$query.= 'values ("'.$_POST['title'].'","'.$_POST['content'].'","'.date('Y-m-d H:i:s').'", "'.$_POST['id'].'", "'.$_POST['pw'].'", "'.$is_lock.'")';

$result = mysqli_query($dbcon, $query);
?>

<?php if ($result) { ?>
  <script>
    alert('<?php echo '글이 등록되었습니다.' ?>');
    location.replace('./index.php');
  </script>
<?php } else { ?>
  <?php echo 'FAIL<br>실패 이유 : '.mysqli_error($dbcon); ?>
<?php } ?>

<?php include '../dbconnect/dbclose.php';