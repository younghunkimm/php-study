<p>한 번에 여러 개의 조건문을 사용하고 조건에 따라 명령문이 달라야 하는 경우에 사용</p>

<?php
$score = 85;
$grade = floor($score/10);

switch ($grade) {
    case 10:
        echo "등급 A";
    break;

    case 9:
        echo "등급 B";
    break;

    case 8:
        echo "등급 C";
    break;

    default:
        echo "등급 F";
}
?>