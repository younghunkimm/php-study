<html>
    <body>
        <h1>상수 정의</h1>
        <p>변하지 않는 값</p>

        <p>
            상수를 정의 할때는 define을 사용<br>
            첫번째 인자로 상수의 이름,<br>
            두번째 인자로 상수의 값
        </p>

        <?php
        define('TITLE', 'PHP Tutorial');
        echo TITLE;
        define('TITLE', 'JAVA Tutorial');
        ?>
    </body>
</html>