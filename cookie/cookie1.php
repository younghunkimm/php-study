<h2>쿠키란?</h2>
<ul>
    <li>cookie</li>
    <li>클라이언트(브라우저)에 데이터를 저장</li>
    <li>setCookie</li>
    <li>$_COOKIE</li>
</ul>

<?php
setCookie('cookie1', '생활코딩');
setCookie('cookie2', time(), time()+60);
?>