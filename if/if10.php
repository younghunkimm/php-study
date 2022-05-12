<p>
    <strong>0</strong>은 <span style="color:red">false</span>,
    <strong>0이 아닌 숫자</strong>는 <span style="color:blue">true</span>
</p>
<p><mark>값이 없는 배열, 빈문자열, NULL, 문자 0</mark> 등도 <strong>0</strong>으로 간주</p>

<?php
if (1 and 1) {
    echo 1;
}
if (1 and 0) {
    echo 2;
}
if (0 and 1) {
    echo 3;
}
if (0 and 0) {
    echo 4;
}
?>

<!-- 0만 필터링을 하고싶을 때 (===), 0과 false 구분가능 -->