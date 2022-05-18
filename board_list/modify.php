<?php include '../dbconnect/dbconnect.php'; ?>
<?php include './include/session.php'; ?>

<?php
$query = 'select title, content, date, id from board where num='.$_GET['num'];
$result = mysqli_query($dbcon, $query);
$row = mysqli_fetch_assoc($result);

if (!isset($_SESSION['userid'])) {
  echo '<script> alert("수정 권한이 없습니다 - 1."); window.location.href = "./index.php"; </script>';
} else if ($_SESSION['userid'] == $row['id']) {
?>

  <form method="post" action="process_modify.php">
    <table style="padding-top: 50px" align=center width=700 border=0 cellpadding=2>
      <tr>
        <td height=20 align=center bgcolor=#ccc style="color: white">글수정</td>
      </tr>
      <tr>
        <td bgcolor="white">
          <table class="table2">
            <tr>
              <td>작성자</td>
              <td><input type="hidden" name="id" value="<?php echo $_SESSION['userid'] ?>"><?php echo $_SESSION['userid'] ?></td>
            </tr>
            <tr>
              <td>제목</td>
              <td><input type="text" name="title" size=60 value="<?php echo $row['title'] ?>"></td>
            </tr>
            <tr>
              <td>글내용</td>
              <td><textarea name="content" cols="85" rows="15"><?php echo $row['content'] ?></textarea></td>
            </tr>
          </table>
          <div>
            <input type="hidden" name="num" value="<?php echo $_GET['num'] ?>">
            <button type="submit">작성</button>
          </div>
        </td>
      </tr>
    </table>
  </form>

<?php
} else {
  echo '<script> alert("수정 권한이 없습니다 - 2."); window.location.href = "./index.php"; </script>';
}
?>