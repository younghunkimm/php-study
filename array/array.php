<?php
$name = 'egoing';
echo $name;
?>

<p>하나의 변수에 3개의 데이터를 담고, 각각의 데이터를 요소(element)라고 부름.</p>
<p>배열에 데이터를 꺼내오는 방법</p>
<?php
$member = ['egoing', 'k8805', 'sorialgi'];

echo $member[0].'<br />';
echo $member[1].'<br />';
echo $member[2].'<br />';
?>

<p>배열에 담겨있는 값을 가져올 때 대괄호 안에 숫자를 넣고, 이 숫자를 색인(index) 라고 부름.</p>
