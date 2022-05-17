<?php include '../dbconnect/dbconnect.php' ?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title>게시판</title>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <h2 class="main_title">게시판</h2>
  <table>
    <thead>
      <tr>
        <td width="50" align="center">번호</td>
        <td width="500" align="center">제목</td>
        <td width="100" align="center">작성자</td>
        <td width="200" align="center">날짜</td>
        <td width="50" align="center">조회수</td>
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
            <td width="50" align="center"><?php echo $total ?></td>
            <td width="500" align="center"><a href="view.php?num=<?php echo $row['num'] ?>"><?php echo $row['title'] ?></a></td>
            <td width="100" align="center"><?php echo $row['id'] ?></td>
            <td width="200" align="center"><?php echo $row['date'] ?></td>
            <td width="50" align="center"><?php echo $row['hit'] ?></td>
          </tr>
        <?php $total --; ?>
      <?php } ?>
    </tbody>
  </table>
  <div class="text">
    <span style="cursor: pointer;" onclick="location.href='./write.php'">글쓰기</span>
  </div>
</body>
</html>