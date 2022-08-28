<?php
$var = 2;
switch ($var) {
  case 1:
    echo "A";
  break;

  case 2:
  case 3:
    echo 'A';
    if ($var == 2) echo "B";
    if ($var == 3) echo "C";
  break;

  default:
    echo "Z";
}
?>
<br>
<!--
    특정수를 같이 출력하는 경우도 있다
    2를 3위로 올려놓고 3아래에 B,C를 넣는다
-->

<!-- 다중사용방법 공부 -->
<?php
$subject = "수학";
$score = 90;

echo "{$subject} : ";

switch ($subject) {
  case "수학":
    if ($score >= 95) {
      echo "A";
    } else if ($score >= 85) {
      echo "B";
    } else if ($score >= 75) {
      echo "C";
    } else {
      echo "F";
    };
    break;

  case "국어":
    if ($score >= 90) {
      echo "A";
    } else if ($score >= 80) {
      echo "B";
    } else if ($score >= 70) {
      echo "C";
    } else {
      echo "F";
    };
    break;
}
?>

<!-- '변수.='과 '변수='의 차이 -->
<!-- 
  = : 변수에 값을 대입할 때
  .= : 변수에 문자열을 연결할 때
 -->
<?php
$var = "test";
$var.= " value";

echo $var;

$var = 1;
$var.= 20;

echo $var;
?>