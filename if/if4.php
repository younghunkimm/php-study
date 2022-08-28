<h2>논리 연산자</h2>

<?php
if (true and true) {
    echo 1;
}
if (true and false) {
    echo 2;
}
if (false and true) {
    echo 3;
}
if (false and false) {
    echo 4;
}
?>

<!-- 'and' 대신 '&&' 가능 -->