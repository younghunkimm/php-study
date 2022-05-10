<p>배열의 진가는 반복문과 결합했을 때 나타난다. 반복문으로 배열에 담긴 정보를 하나씩 꺼내서 처리 가능하기 때문</p>

<?php
function get_members() {
    return ['egoing', 'k8805', 'sorialgi'];
}

$members = get_members();

for ($i = 0; $i < count($members); $i++) {
    echo ucfirst($members[$i]).'<br />';
}
?>

<p>echo ucfirst(). - 알파벳의 첫글자를 대문자로 만드는 방법</p>