<?php
mysqli_close($dbcon);
?>

<!-- 
  db 연결을 끊는 이유

  1. connection을 끊고 다른 connection을 사용하고 싶을 때
  2. 시간이 긴 page 처리에서 db connection이 전반부에서만 사용될 때의 resource 중복 낭비를 위해
 -->