<!-- elseif -->
<!-- 순차적 분배 -->

<?php
$a = 1;
$b = 10;

if ($a === 1 and $b === 10) {
    echo 'a,b 일치';
} else if ($a === 1 or $b === 10) {
    echo 'a,b 둘중 하나 일치';
} else {
    echo 'a,b 불일치';
}

echo '<br />';

$a = 2;
$b = 20;

if ($a === 1 and $b === 10) {
    echo 'a,b 일치';
} else if ($a === 1 or $b === 10) {
    echo 'a,b 둘중 하나 일치';
} else {
    echo 'a,b 불일치';
}

echo '<br />';

$a = 1;
$b = 20;

if ($a === 1 and $b === 10) {
    echo 'a,b 일치';
} else if ($a === 1 or $b === 10) {
    echo 'a,b 둘중 하나 일치';
} else {
    echo 'a,b 불일치';
}
?>