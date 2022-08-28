<?php
$sql_host = "192.168.99.4:3310";
$sql_user = "hunifive";
$sql_password = "Pgmlife09!";
$sql_db = "hunifive1";

#php와 MySQL을 연결
$dbcon = mysqli_connect($sql_host, $sql_user, $sql_password, $sql_db) or die("데이터베이스연결실패");
$query = "INSER INTO topic (title, description, created) VALUES ('MySQL', 'MySQL is ...', NOW())";

#연결 확인
echo mysqli_connect_errno(); # 연결되면 0을 반환
echo mysqli_connect_error(); # 연결 오류에서 오류 설명을 반환

if (mysqli_connect_errno()) { # 연결이 안되면 false를 반환해 아래 코드 실행
  printf("Connect failed: %s\n", mysqli_connect_error());
  exit();
}

#die()와 exit()는 같은 함수
#die()는 메세지를 출력하고 현재 스크립트를 종료한다.

#printf()는 서식화된 출력을 지원.
#http://www.tcpschool.com/c/c_intro_printf
?>