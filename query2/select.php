<?php
include '../dbconnect/dbconnect.php';

$cond = 'where 1 = 1';
if (($_GET['name']) && isset($_GET['name'])) {
  $cond.= ' and name like "%'.$_GET['name'].'%"';
}
// $query = 'select * from user where address="서울" order by name asc limit 1000';
$query = 'select * from user '.$cond.' order by address asc, name desc limit 1000';
$result = mysqli_query($dbcon, $query);

if ($result) {
  echo mysqli_num_rows($result)."건이 조회됨.<br><br>";
} else {
  echo "user 데이터 조회 실패<br>";
  echo "실패 원인 : ".mysqli_error($dbcon);
  exit();
}
?>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
  </head>
  <body>
    <h1>회원 조회 결과</h1>
    <form action="select.php" method="get">
      이름으로 조회 : <input type="text" name="name" placeholder="이름 입력">
      <input type="submit">
    </form>
    <table border=1 style="border-collapse: collapse">
      <tr>
        <th>번호</th>
        <th>아이디</th>
        <th>이름</th>
        <th>출생년도</th>
        <th>지역</th>
        <th>전화번호</th>
        <th>날짜</th>
        <th>수정</th>
        <th>삭제</th>
      </tr>
      <?php
      if (isset($_GET['name'])) {
        $result = mysqli_query($dbcon, $query);

        if ($result) {
          echo "'".$_GET['name']."' 검색 결과<br><br>";
        } else {
          echo "user 데이터 조회 실패<br>";
          echo "실패 원인 : ".mysqli_error($dbcon);
          exit();
        }
      }

      while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>{$row['num']}</td>";
        echo "<td>{$row['id']}</td>";
        echo "<td>{$row['name']}</td>";
        echo "<td>{$row['birth']}</td>";
        echo "<td>{$row['address']}</td>";
        echo "<td>{$row['tel']}</td>";
        echo "<td>{$row['date']}</td>";
        echo "<td><a href='update.php?id=".$row['id']."'>수정</a></td>";
        echo "<td><a href='delete.php?id=".$row['id']."'>삭제</a></td>";
        echo "</tr>";
      }
      ?>
    </table>
    <br>
    <a href='main.html'>초기화면으로</a>
  </body>
</html>

<?php include '../dbconnect/dbclose.php';?>