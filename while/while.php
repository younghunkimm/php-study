<?php
// while (true) {
//     echo 'coding everybody';
// }
?>

<!-- 쓰면 서버 다운됨 조심 -->

<?php
while (false) {
  echo 'coding everybody';
}
?>

<!-- while, for, foreach -->
<!-- 
  foreach : 배열의 원소나, 객체의 프로퍼티 수만큼 반복하여 동작하는 구문
 -->

<?php
$employee_list = array (
  'Programmer' => 'Edward',
  'Designer' => 'Alex'
);

# Value만 가져오는 방법
foreach ($employee_list as $row) {
  echo "{$row}<br />";
}

# Key와 Value를 가져오는 방법
foreach ($employee_list as $key => $value) {
  echo "{$key} : {$value}<br />";
}

# Key와 Value의 값을 변형시킨다해도 arr에는 영향이 없다.
$arr = array(1, 2, 3, 4);
foreach ($arr as $key => $value) {
  $key *= 3;
  $value *= 2;

  echo "키={$key} 값={$value}<br />";
}
print_r($arr);
?>