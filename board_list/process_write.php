<?php include '../dbconnect/dbconnect.php'; ?>

<?php
$query = 'insert into board (title, content, date, hit, id, password) ';
$query.= 'values ("'.$_POST['title'].'","'.$_POST['content'].'","'.date('Y-m-d H:i:s').'", 0, "'.$_POST['id'].'", "'.$_POST['pw'].'")';

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