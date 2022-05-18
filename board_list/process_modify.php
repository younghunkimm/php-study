<?php include '../dbconnect/dbconnect.php'; ?>

<?php
$query = 'update board set ';
$query.= 'title = "'.$_POST['title'].'", content = "'.$_POST['content'].'", date = "'.date('Y-m-d H:i:s').'" ' ;
$query.= 'where num='.$_POST['num'];
$result = mysqli_query($dbcon, $query);
?>

<?php if ($result){ ?>
  <script>
    alert("수정되었습니다.");
    window.location.href = "./view.php?num=<?php echo $_POST['num']?>";
  </script>
<?php } else {
  echo 'fail';
}
?>