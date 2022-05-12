<?php
$i = 0;

while ($i < 5) {
    echo 'coding everybody';
    $i += 1;
}
?>

<hr>

<!-- 예제 -->
<p>배열의 갯수만큼 반복</p>
<?php
$arr = array("php", "반복문", "while");
$i = 0;

while ($i < count($arr)) {
  echo $arr[$i]."<br />";
  $i++;
}
?>

<p>무한반복문에서 break 사용</p>
<?php
$val = 0;
$i = 0;

while (true) {
  $i++;
  $val += $i;
  
  if ($val > 1000) {
    echo '$val : '.$val."<br />";
    echo '$i : '.$i."<br />";
    break;
  }
}
?>