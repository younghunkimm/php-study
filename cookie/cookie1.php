<h2>쿠키란?</h2>
<ul>
    <li>cookie</li>
    <li>클라이언트(브라우저)에 데이터를 저장</li>
    <li>setCookie</li>
    <li>$_COOKIE</li>
</ul>
<p>유출돼도 전혀 문제없는 데이터만 저장해야함</p>

<?php
setCookie('cookie1', '생활코딩');
setCookie('cookie2', time(), time()+60);
?>

<ol>
    <li>
        setCookie('cookie1', '생활코딩')<br>
        cookie1 = key<br>
        생활코딩 = value<br>
        'cookie1' 이라는 이름을 가진 '생활코딩' 이라는 데이터가 사용자의 브라우저에 저장됨
    </li>
    <br>
    <li>
        setCookie('cookie2', time(), time()+60)<br>
        time() = 현재시간<br>
        time()+60 = 현재시간 + 60초<br>
        현재시간부터 60초 이후까지만 이 데이터가 유효하다. 지나면 브라우저에 의해 삭제됨.
    </li>
    <br>
    <li>
        세션 : 사용자가 브라우저를 닫는 순간 휘발하는 데이터
    </li>
</ol>