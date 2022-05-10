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