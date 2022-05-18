<?php include '../dbconnect/dbconnect.php'; ?>
<?php include './include/head.php'; ?>
<?php include './include/session.php'; ?>

<?php
// 조회수 증가
$hit = 'update board set hit = hit + 1 where num = '.$_GET['num'];
$result = mysqli_query($dbcon, $hit);

$query = 'select * from board where num = '.$_GET['num'];
$result = mysqli_query($dbcon, $query);
$row = mysqli_fetch_assoc($result);
?>

<body>
  <h2 class="main_title">VIEW</h2>
  <table class="view_table" align="center" width="100%">
    <tr>
      <td colspan="6" class="view_title" align="center" bgcolor="#f2f2f2"><?php echo $row['title'] ?></td>
    </tr>
    <tr>
      <td class="view_id" bgcolor=#f7f7f7 width="15%" align="center">작성자</td>
      <td><?php echo $row['id'] ?></td>
      <td class="view_hit" bgcolor=#f7f7f7 width="15%" align="center">조회수</td>
      <td><?php echo $row['hit'] ?></td>
      <td class="view_thumbup" bgcolor=#f7f7f7 width="15%" align="center">추천수</td>
      <td><?php echo $row['thumbup'] ?></td>
    </tr>
    <tr>
      <td colspan="6" class="view_content" valign="top"><?php echo $row['content'] ?></td>
    </tr>
  </table>
  
  <!-- MODIFY & DELETE -->
  <div class="view_btn">
    <button class="view_btn1" onclick="location.href='./index.php'">목록으로</button>
    <button class="view_btn1" onclick="location.href='./thumbup.php?num=<?php echo $_GET['num'] ?>&id=<?php echo $_SESSION['userid'] ?>'">추천</button>
    <button class="view_btn1" onclick="location.href='./modify.php?num=<?php echo $_GET['num'] ?>&id=<?php echo $_SESSION['userid'] ?>'">수정</button>
    <button class="view_btn1" onclick="location.href='./process_delete.php?num=<?php echo $_GET['num'] ?>&id=<?php echo $_SESSION['userid'] ?>'">삭제</button>
  </div>
</body>