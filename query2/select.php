<?php
include '../dbconnect/dbconnect.php';

$query = "select * from user where address='서울' order by name asc limit 1000";

$result = mysqli_query($dbcon, $query);

if ($result) {
  echo mysqli_num_rows($result)."건이 조회됨.<br><br>";
} else {
  echo "user 데이터 조회 실패<br>";
  echo "실패 원인 : ".mysqli_error($dbcon);
  exit();
}

while ($row = mysqli_fetch_array($result)) {
  echo "{$row['id']}, {$row['name']}, {$row['address']}, {$row['date']}<br>";
}


include '../dbconnect/dbclose.php';
?>