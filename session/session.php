<h2>세션이란?</h2>
<ul>
    <li>session</li>
    <li>SID(session ID)를 식별자로 서버에 데이터를 저장</li>
    <li>SID로는 쿠키나 도메인 파라미터를 사용</li>
    <li>session_start();로 시작, 스크립트의 최상단에 위치해야 함</li>
    <li>$_SESSION</li>
    <li>데이터는 서버 내에 파일이나 DB에 저장 함</li>
    <li>주로 사용자 인증시 사용함</li>
</ul>

<?php
session_save_path('./session');
session_start();
$_SESSION['title'] = '생활코딩';
?>