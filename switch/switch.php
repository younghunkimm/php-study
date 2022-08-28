<p>한 번에 여러 개의 조건문을 사용하고 조건에 따라 명령문이 달라야 하는 경우에 사용</p>

<?php
$score = 85;
$grade = floor($score/10);

switch ($grade) {
  case 10:
    echo "등급 A";
  break;

  case 9:
    echo "등급 B";
  break;

  case 8:
    echo "등급 C";
  break;

  default:
    echo "등급 F";
}
?>

<!-- switch (고정값) 와 if (범위) 의 차이 메모 -->
<!-- 
  if문
    - 위에서부터 조건을 하나 하나 순차적으로 봄
    - 조건의 수가 적을수록 유리
    - 때에 따라 비교 연산일 땐 if가 낫다.
    
  switch문
    - 들어오는 조건을 보고 즉각 조건에 해당하는 문장으로 진입
    - 조건의 수가 다양하고 많을수록 유리
    - break를 사용하지 않으면 뒤에 조건까지 줄줄이 읽게 되어 break 필수
    - 비교 연산이 불가능
 -->