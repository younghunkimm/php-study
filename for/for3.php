<p>반복작업을 중간에 중단시키고 싶을 때 사용.</p>

<?php
for ($i = 0; $i < 10; $i++) {
    if ($i === 5) {
        break;
    }
    echo "coding everybody{$i}<br />";
}
?>