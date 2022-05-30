<?php include '../dbconnect/dbconnect.php'; ?>

<?php
$query = 'select * from reply where num = '.$_POST['rno']; // 댓글 번호
$result = mysqli_query($dbcon, $query);
$reply = mysqli_fetch_array($result);

$query2 = 'select * from board where num = '.$_POST['bno']; // 게시글 번호
$result = mysqli_query($dbcon, $query2);
$board = mysqli_fetch_array($result);
?>

<?php if ($_POST['pw'] == $reply['pw']){ ?>
  <?php $query3 = 'update reply set content = "'.$_POST['content'].'" where num = "'.$_POST['rno'].'"'; ?>
  <?php $result = mysqli_query($dbcon, $query3) ?>
  <script type="text/javascript">
    alert("수정되었습니다.");
    location.replace("./view.php?num=<?php echo $_POST['bno'] ?>");
  </script>
<?php } else { ?>
  <script type="text/javascript">
    alert("비밀번호가 틀립니다.");
    history.back();
  </script>
<?php } ?>