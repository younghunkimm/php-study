<style>
    p {
        font-weight: bold;
    }
</style>

<p>배열의 크기 - <mark>echo count($n)</mark></p>

<?php
$n = [1, 2, 3, 4, 5];

echo count($n);
?>

<hr>

<p>배열의 끝에 아이템 추가 - <mark>array_push($arr, 'f')</mark></p>

<?php
$arr = ['a', 'b', 'c', 'd', 'e'];
array_push($arr, 'f');
var_dump($arr);
?>

<p>복수의 아이템을 배열에 추가 - <mark>$li = array_merge($li, ['f', 'g'])</mark></p>

<?php
$li = ['a', 'b', 'c', 'd', 'e'];
$li = array_merge($li, ['f', 'g']);
var_dump($li);
?>

<p>배열의 시작점에 아이템 추가 - <mark>array_unshift($li, 'z')</mark></p>

<?php
$li = ['a', 'b', 'c', 'd', 'e'];
array_unshift($li, 'z');
var_dump($li);
?>

<p>두번째 인덱스 뒤에 대문자 B를 넣고 싶을 때 - <mark>array_splice($li, 2, 0, 'B');</mark></p>

<?php
$li = ['a', 'b', 'c', 'd', 'e', 'z'];
array_splice($li, 2, 0, 'B');
var_dump($li);
?>

<hr>

<p>배열의 첫 번째 요소를 제거 - <mark>array_shift($li)</mark></p>

<?php
$li = ['a', 'b', 'c', 'd', 'e', 'z'];
array_shift($li);
var_dump($li);
?>

<p>배열의 마지막 요소를 제거 - <mark>array_pop($li)</mark></p>

<?php
$li = ['a', 'b', 'c', 'd', 'e', 'z'];
array_pop($li);
var_dump($li);
?>

<hr>

<p>정렬 - <mark>sort($li)</mark></p>

<?php
$li = ['c', 'e', 'a', 'b', 'd'];
sort($li);
var_dump($li);
?>

<p>역순 정렬 - <mark>rsort($li)</mark></p>

<?php
$li = ['c', 'e', 'a', 'b', 'd'];
rsort($li);
var_dump($li);
?>

<hr>

<p>연관배열 생성</p>
<span>
    $grades = array('egoing' >= 10, 'k8805' >= 6, 'sorialgi' >= 80);<br>
    egoing 은 key, 10 은 value
</span>

<?php
$grades = array('egoing' => 10, 'k8805' => 6, 'sorialgi' => 80);
?>

<p>연관배열 생성 (다른방법)</p>

<?php
$grades = [];
$grades['egoing'] = 10;
$grades['k8805'] = 6;
$grades['sorialgi'] = 80;
var_dump($grades);
?>

<p>특정한 key의 값을 가져오는 법</p>

<?php
echo $grades['sorialgi'];
?>

<p>배열의 데이터를 기준으로 반복작업</p>
<p>
    foreach 문은 $grades 위치의 배열에 담긴 요소의 숫자만큼 반복문을 실행함<br>
    반복문이 실행될 때마다 <mark>요소의 키 값을 $key 자리의 변수</mark>에<br>
    <mark>요소의 값을 $value 자리의 변수</mark>에 할당해서 반복문 안에서 접근 할 수 있도록 함.
</p>

<?php
foreach($grades as $key => $value) {
    echo "key: {$key} / value: {$value}<br />";
}
?>