<h2>variable variables. 변수의 이름을 변수로 변경 할 수 있는 기능</h2>

<?php
$title = 'subject';
$$title = 'PHP tutorial';

echo $title; #subject
echo "<br />";
echo $subject; #PHP tutorial
?>

<h4>
    $$title - '$'가 두번 표시<br>
    이것은 문자열 'PHP tutorial'이 변수 $title 값이 아니라 변수 $subject의 값이라는 의미
</h4>