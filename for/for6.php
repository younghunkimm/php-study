<!-- 1단부터 9단 만들기 -->

<?php
for ($i = 1; $i < 10; $i++) {
    echo "{$i}단<br />";
    for ($j = 1; $j < 10; $j++) {
        echo "{$i} X {$j} = ".($i*$j)."<br />";
    }
}
?>

<!-- 홀따옴표와 쌍따옴표의 차이점 -->
<?php
$name = "김영훈";
echo "$name 님 반갑습니다";
echo "<br />";

echo '$name 님 반갑습니다.';

# echo문 안에 변수명을 쓰려면 작은따옴표 대신 큰따옴표를 사용해야 한다.
?>