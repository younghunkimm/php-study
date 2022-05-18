<?php include '../dbconnect/dbconnect.php'; ?>
<?php include './include/session.php'; ?>
<?php include './include/head.php'; ?>

<?php
$query = 'select * from board order by num desc';
$result = mysqli_query($dbcon, $query);
$total = mysqli_num_rows($result);
?>

<?php if(isset($_SESSION['userid'])) { ?>
  <?php echo $_SESSION['userid'].'님 안녕하세요. <button onclick="location.href=\'./process_logout.php\'">로그아웃</button>'; ?>
<?php } else { ?>
  <button onclick="location.href='./login.php'">로그인</button><br>
<?php } ?>

<body>
  <h2 class="main_title">게시판</h2>
  <div class="text">
    <button type="button" style="cursor: pointer;" onclick="location.href='./write.php'">글쓰기</button>
  </div>
  <table width="100%">
    <thead>
      <tr>
        <td width="10%" align="center">번호</td>
        <td width="30%" align="center">제목</td>
        <td width="20%" align="center">글쓴이</td>
        <td width="20%" align="center">작성일</td>
        <td width="10%" align="center">조회수</td>
        <td width="10%" align="center">추천수</td>
      </tr>
    </thead>
    <tbody>
      <?php
      $query = 'select * from board order by num desc';
      $result = mysqli_query($dbcon, $query);
      $total = mysqli_num_rows($result);
      ?>

      <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <?php if ($total%2 == 0) { ?>
          <tr class="even">
        <?php } else { ?>
          <tr>
        <?php } ?>
            <td width="10%" align="center"><?php echo $total ?></td>
            <td width="30%" align="center">
            <?php if ($row['lock_post']) { ?>
              <a href="ck_view.php?num=<?php echo $row['num'] ?>"><?php echo $row['title'] ?><small> [비밀글]</small></a>
            <?php } else { ?>
              <a href="view.php?num=<?php echo $row['num'] ?>"><?php echo $row['title'] ?></a>
            <?php } ?>
            </td>
            <td width="20%" align="center"><?php echo $row['id'] ?></td>
            <td width="20%" align="center"><?php echo $row['date'] ?></td>
            <td width="10%" align="center"><?php echo $row['hit'] ?></td>
            <td width="10%" align="center"><?php echo $row['thumbup'] ?></td>
          </tr>
        <?php $total --; ?>
      <?php } ?>
    </tbody>
  </table>
</body>
</html>

<?php include '../dbconnect/dbclose.php'; ?>