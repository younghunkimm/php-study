<?php
$a = 100;
echo gettype($a);
settype($a, 'double');
echo '<br />';
echo gettype($a);
?>

<p>
    integer(정수)<br>
    double(실수)<br>
    <mark>gettype</mark>은 인자로 전달된 값의 데이터 형을 출력<br>
    <mark>settype</mark>은 첫번째 인자로 주어진 값을 두번째 인자에 해당하는 데이터 형으로 변경
</p>

<hr>

<!-- 문자형으로 바꿀때 -->
<?php
$n = 20;

echo gettype($n);
echo '<br />';

# 정수형
settype($n, 'integer');
echo gettype($n);
echo '<br />';

# 문자형
settype($n, 'string');
echo gettype($n);
echo '<br />';

# 논리형
settype($n, 'boolean');
echo gettype($n);
echo '<br />';

# 배열형
settype($n, 'array');
echo gettype($n);
echo '<br />';

# 객체형
settype($n, 'object');
echo gettype($n);
echo '<br />';

# null형
settype($n, 'null');
echo gettype($n);
?>