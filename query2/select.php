<?php
include '../dbconnect/dbconnect.php';

# where 1 = 1 쓰는 이유 : 동적쿼리에서 특정상황마다 where절을 다르게 작성해줘야 할 때 편리함.
$cond = 'where 1 = 1';
if (($_GET['name']) && isset($_GET['name'])) {
  $cond.= ' and name like "%'.$_GET['name'].'%"';
}
# limit : 목록에 페이징 처리를 위해서 (목록, 상세페이지)
$query = 'select * from user '.$cond.' order by address asc, name desc limit 1000';
$result = mysqli_query($dbcon, $query);

# like 사용법
// 1. 'A' 로 시작하는 : 'A%'
// 2. 'A' 로 끝나는 : '%A'
// 3. 'A' 를 포함하는 : '%A%'
// 4. 'A' 로 시작하는 두글자 문자 : 'A_'
// 5. 첫번째 문자가 'A' 가 아닌 모든 문자열 : '[^A]'
// 6. 첫번째 문자가 'A' 또는 'B' 또는 'C' 인 문자열 : '[ABC]', '[A-C]'

# in 사용법 (부가적으로 짬날때) -------------------

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
        echo "<tr><td>{$row['num']}</td><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['birth']}</td><td>{$row['address']}</td><td>{$row['tel']}</td><td>{$row['date']}</td><td><a href='update.php?id=".$row['id']."'>수정</a></td><td><a href='delete.php?id=".$row['id']."'>삭제</a></td></tr>";
      }
      ?>
    </table>
    <br>
    <a href='main.html'>초기화면으로</a>
  </body>
</html>

<?php include '../dbconnect/dbclose.php';?>