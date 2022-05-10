<p>멤버를 담고 있는 배열을 반환</p>

<?php
function get_members1() {
    return ['egoing', 'k8805', 'sorialgi'];
}

var_dump(get_members1());
?>

<p>함수의 리턴값이 배열일 때 특정한 요소를 가져오는 방법</p>

<?php
function get_members2() {
    return ['egoing', 'k8805', 'sorialgi'];
}

$tmp = get_members2();
echo $tmp[1];
?>

<p>PHP 버전이 5.4 이상일 때 (더 간단)</p>

<?php
function get_members3() {
    return ['egoing', 'k8805', 'sorialgi'];
}

echo get_members3()[1];
?>