<?php
if (!true and !true) {
    echo 1;
}
if (!true and !false) {
    echo 2;
}
if (!false and !true) {
    echo 3;
}
if (!false and !false) {
    echo 4;
}
?>

<!-- 가상의 변수를 만들어서 실제로 대입 -->

<?php
$a = 1;
$b = 10;

if ($a === 1 and $b === 10) {
    echo 1;
}

if ($a === 1 and !$b === 10) {
    echo 2;
}

if (!$a === 1 and $b === 10) {
    echo 3;
}

if (!$a === 1 and !$b === 10) {
    echo 4;
}
?>