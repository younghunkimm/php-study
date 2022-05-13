<?php
$sql_host = "192.168.99.4:3310";
$sql_user = "hunifive";
$sql_password = "Pgmlife09!";
$sql_db = "hunifive";

# 연결실패여부
#php와 MySQL을 연결
$dbcon = mysqli_connect($sql_host, $sql_user, $sql_password, $sql_db) or die("데이터베이스연결실패");
// $query = "INSERT INTO topic (title, description, created) VALUES ('MySQL', 'MySQL is ...', NOW())";

# 연결은 됐지만 뭔가 에러가 있을 때 에러코드 반환
if (mysqli_connect_errno()) { # 연결이 안되면 false를 반환해 아래 코드 실행
  printf("Connect failed: %s\n", mysqli_connect_error());
  exit();
}
?>