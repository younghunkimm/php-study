<?php include '../dbconnect/dbconnect.php'; ?>

<?php
$query = 'select * from reply where num = '.$_POST['rno'];
$result = mysqli_query($dbcon, $query);
$reply = mysqli_fetch_array($result);

$query2 = 'select * from board where num = '.$_POST['bno'];
$result = mysqli_query($dbcon, $query2);
$board = mysqli_fetch_array($result);
?>

<?php if ($_POST['pw'] == $reply['pw']) { ?>
  <?php $query3 = 'delete from reply where num = '.$_POST['rno']; ?>
  <?php $result = mysqli_query($dbcon, $query3); ?>
  <script type="text/javascript">
    alert("댓글이 삭제되었습니다.");
    location.replace("./view.php?num=<?php echo $board['num'] ?>");
  </script>
<?php } else { ?>
  <script type="text/javascript">
    alert("비밀번호가 틀립니다.");
    history.back();
  </script>
<?php } ?>
