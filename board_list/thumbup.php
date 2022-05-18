<?php include '../dbconnect/dbconnect.php'; ?>

<?php
$thumbup = 'update board set thumbup  = thumbup + 1 where num = '.$_GET['num'];
$result = mysqli_query($dbcon, $thumbup);
?>

<script>
  alert('추천되었습니다.');
  window.location.href = './view.php?num=<?php echo $_GET['num'] ?>';
</script>