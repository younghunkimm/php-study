<h1>변수의 정의</h1>
<p>담겨진 값을 다른 값으로 바꿀 수 있는 문자나 숫자 같은 값을 담는 컨테이너</p>

<?php
$a = 1;
echo $a+1; #2
echo "<br />";
$a = 2;
print $a+1; #3
?>

<hr>

<!-- echo, print의 차이 -->
<!--
  echo : 그냥 명령문일 뿐이라 함수처럼 사용할 수 없고, 리턴값이 없다, print보다 코드 실행 속도가 미세하게 빠름
  print : 함수처럼 사용할 수 있고, 1을 리턴한다.
-->

<?php
# 구문 오류 발생
// $result = true;
// $result ? echo "True" : echo "false";

# 이렇게 써야함 (echo 자체는 함수로 쓸 수 없지만 echo문에 함수를 쓰는 것은 가능)
$result = true;
echo $result ? "True" : "false";
?>

<?php
$result = true;
$result ? print "True" : print "false";
?>

<hr>

<!-- 
  echo는 array가 문자로 찍힘
  print_r 로 찍어야 배열이 자세하게 확인됨 (var_dump)
-->

<?php
$a = array('a' => 1, 'b' => 2, 'c' => 3);

print_r($a);
echo '<br />';

echo $a;
echo '<br />';

var_dump($a);
?>