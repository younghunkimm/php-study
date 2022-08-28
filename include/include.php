<?php
include 'greeting.php';
echo welcome();
?>

<h2>외부의 php 파일을 로드하는 방법 4가지</h2>
<ul>
    <li>include</li>
    <li>include_once</li> <!-- 에러처리없이 하나만 출력, 협업 때 실수 방지 -->
    <li>require</li>
    <li>require_once</li>
</ul>

<!-- header, footer include용으로 주로 쓰임 -->
<!-- 함수는 라이브러리 폴더를 하나 만들어서 씀 -->
<!-- 
    include와 require 차이 (에러차이, 기능은 같음) 

    include : 에러 상황 시 경고를 발생시킨 후 나머지 코드의 실행을 계속한다.
        - 단순히 화면 출력용 공통 파일을 포함할 때 사용하여 코드의 진행을 막지 않는 것이 좋다.

    require : 에러 상황 시 경고를 발생시키고 이후 코드의 실행이 중단된다. (단순히 화면 출력용)
        - 예외상황 발생 시 코드를 중단해야 할 경우
        - 데이터베이스에 연결해야 할 때 사용
        - 코드의 실행에 있어서 반드시 필요한 로직을 점검해야하는 코드를 포함하는 경우
-->