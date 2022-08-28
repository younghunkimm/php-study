<?php include '../dbconnect/dbconnect.php'; ?>
<?php include './include/head.php'; ?>

<?php
$query = 'select * from board where num = '.$_GET['num'];
$result = mysqli_query($dbcon, $query);
$row = mysqli_fetch_assoc($result);
?>

<body>
  <div id="writepass">
    <form action="" method="post">
      <p>
        비밀번호 : <input type="text" name="pw_chk" maxlength=10>
        <input type="submit">
      </p>
    </form>
  </div>

  <?php
  if(isset($_POST['pw_chk'])) {
    if ($_POST['pw_chk'] == $row['password']) {
      echo '<script> window.location.href = "./view.php?num='.$row['num'].'" </script>';
    } else {
      echo '<script> alert("비밀번호가 틀립니다."); window.location.href = "./index.php"; </script>';
    }
  }
  ?>
</body>