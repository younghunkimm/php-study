<?php
session_start();
if (!isset($_SESSION['is_login'])) {
    header('Location: ./login.html');
}
?>

<html>
    <body>
        <?php echo $_SESSION['nickname'];?>님 환영합니다.<br />
        <a href="./logout.php">로그아웃</a>
        <br>
    </body>
</html>

<!-- cookie(브라우저에 저장, 보안에 취약, 쿠키는 브라우저를 꺼도 남아있음, 쇼핑몰-내가본상품 등)와 
session(접속하고있는 서버에 정보를 저장, 방화벽, 보안)의 차이 (정확하게) 

    cookie
        1. 브라우저에 저장 (필요시 정보를 참조하거나 재사용)
        2. 개발자 도구로 정보를 확인할 수 있어 보안에 취약
        3. 사용 예시
            1) 방문 사이트에 로그인 시 "아이디와 비밀번호 저장 여부"
            2) 팝업창에서 "오늘 이 창을 다시 보지 않기"
    
    session
        1. 방문 사이트의 서버에 정보를 저장
        2. 브라우저를 닫을 때 휘발 되는 정보 (쿠키보다 비교적 보안이 좋다.)
        3. 저장 데이터 제한이 없다.
        4. 각 클라이언트에 고유 Session ID를 부여해서 구분해 각 요구에 맞는 서비스를 제공
        5. 사용 예시
            1) 화면을 이동해도 로그인이 풀리지 않고 로그아웃하기 전까지 유지

    cookie와 session의 차이
        1. 비슷한 역할, 동작 원리 비슷, 세션도 결국 쿠키를 사용하기 때문
        2. cookie는 브라우저, session은 서버에 데이터를 저장
        3. cookie는 만료기간이 있지만, session은 브라우저가 종료되면 만료기간 상관없이 삭제
        4. 쿠키에 정보가 있기 때문에 속도가 빠르고, 세션은 서버에 정보가 있기 때문에 비교적 느리다.
-->

<!-- isset 공부, (isset, empty의 명확한차이 정확하게) -->

<!-- 
    isset : 값 검증, 변수가 설정되었는지 확인해주는 함수
 -->
<?php
$apple = "3";

if (isset($apple)) {
    echo "apple is set<br />";
} else {
    echo "apple is not set<br />";
}
?>

<!-- 
    isset, empty 차이

        isset($확인할 변수명) : 확인하는 변수에 값이 존재하고 null 값이 아니라면 true를 반환, 그 외 false
        empty($확인할 변수명) : 확인하는 변수에 값이 없거나 값이 0 또는 false, null값일 경우에 true 반환

        변수가 선언되지 않았을 때는 반대개념
        변수가 선언된 경우 모두 true를 반환하는 경우가 있어 주의(0, "")
-->



<?php echo $_SESSION[''] ?> <!-- php 기본형 -->
<?=$_SESSION['']?> <!-- php버전이나 설정,세팅에따라 에러가 날수도있음 -->