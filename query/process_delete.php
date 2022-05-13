<?php
include './include/dbconnect.php';

$query = "DELETE FROM topic WHERE id = {$_POST['id']}";

$result = mysqli_query($dbcon, $query);
if ($result === false) {
  echo '삭제하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요.';
  error_log(mysqli_error($dbcon));
} else {
  echo '삭제했습니다. <a href="index.php">돌아가기</a>';
}
?>

<!-- 
  <DELETE>
  1. 행단위로 데이터 삭제
  2. 문법
    - DELETE FROM table_name WHERE 삭제칼럼명 = 값;
  3. 예제
    - DELETE FROM user WHERE id = 'hunifive';

  <TRUNCATE>
  1. 테이블의 전체 데이터를 삭제
  2. 테이블에 외부키(foreign key)가 없다면 DELETE보다 훨씬 빠르게 삭제됨
  3. 문법
    - TRUNCATE 테이블명
  4. 예제
    - TRUNCATE student;

  <DROP TABLE>
  1. 테이블을 삭제
  2. 문법
    - DROP TABLE 테이블명;
    - DROP TABLE student;
 -->