<html>
  <body>
    <h2>변수와 비교연산자 그리고 조건문</h2>
    <p>egoing 입력시 right, 그 외 입력 시 wrong</p>
    <form method="get" action="./if2_2.php">
      <input type="text" name="id" />
      <input type="submit" />
    </form>
  </body>
</html>

<!-- get 과 post의 차이 -->
<!-- 
  <get> - http://example.php?key=value

    1. 가져온다는 개념
    2. 서버에서 어떤 데이터를 가져와 보여줄때 사용
    3. 어떤 값이나 내용, 상태 등을 바꾸지 않는 경우
      ex) 게시판에서 글의 내용이나, 목록을 보여주는 경우
    4. 데이터를 읽을 때만 사용, 수정할 때 사용하지 않음(데이터 변형의 위험없이 사용가능)
    
    5. GET 요청에 대한 기타 참고 사항
      1) 불필요한 요청을 제한하기 위해 요청이 캐시될 수 있다.
      2) 파라미터에 내용이 노출 되기 때문에 민감한 데이터를 다룰 땐 사용하면 안된다.
      3) GET 요청은 브라우저 기록에 남는다.
      4) GET 요청을 북마크에 추가할 수 있다.
      5) GET 요청에는 데이터 길이에 대한 제한이 있다.
      6) GET으로 서버에게 동일한 요청을 여러번 전송하더라도 동일한 응답이 돌아와야한다. (조회에 주로 사용)

    단점
    일반회원의 정보를 가져와서 url에 숫자를 바꾸면 다른회원의 정보를 볼수 있어 보안에 취약
    넘기는 숫자를 암호화처리해서 보완한다 (복호화도 있다)


  <post> - http://example.php

    1. 서버상의 데이터 값이나 상태를 바꾸기 위해 사용
      ex) 글의 내용을 저장하고, 수정할때
    2. 리소스를 생성/업데이트하기 위해 서버에 데이터를 보내는데 사용
    3. GET과 달리 전송해야될 데이터를 HTTP 메세지의 Body에 담아 전송
      그리고 그 Body의 타입은 요청 헤더의 Content-Type에 요청 데이터의 타입을 표시 따라 결정 (POST로 보낼 땐 필수)
    4. 길이의 제한없이 데이터 전송 (대용량 데이터 전송 가능)
    5. 데이터가 Body로 전송되고, 내용이 눈에 보이지 않아 안전하다고 생각할 수 있지만,
      POST 요청도 크롬의 개발자 도구, Fiddler와 같은 툴로 요청 내용을 확인할 수 있기 때문에
      민감한 데이터의 경우 반드시 암호화해 전송해야함.

    
    6. POST 요청에 대한 기타 참고 사항
      1) POST 요청은 캐시되지 않는다.
      2) POST 요청은 브라우저 기록에 남아 있지 않다
      3) POST 요청을 북마크에 추가할 수 없다.
      4) POST 요청에는 데이터 길이에 대한 제한이 없다.
      5) POST는 서버에게 동일한 요청을 여러 번 전송해도 응답은 항상 다를 수 있다. (표현이 난해 - 동일한 요청)
        - 동일한 요청 : get도 1을 보내고 post도 1을 보낼 때 같은 응답이 와야한다.
-->


<!-- <암호화해서 전송하는 방법 SSL(https) 확인> -->
<!--  
  1. md5(string $str [, bool $raw_output = FALSE ])
    - $str : 해시값을 생성할 문자열
    - raw_output : TRUE이면 16바이너리 형식 반환, FALSE이면 32자리 문자열 반환(default)
    1) 문자열에서 md5 해시값을 생성하는 함수 (단방향)
    2) 문자열이 같다면 같은 해시값을 만드므로, 비밀번호를 암호화하여 저장하는 용도로는 맞지 않다.
-->
<p>md5('apple') : <?php echo md5('apple'); ?></p>
<p>md5('banana') : <?php echo md5('banana', true); ?></p>

<!-- 2. SHA-256, SHA-512 (단방향 알고리즘) -->
<?php
$hashed = base64_encode(hash('sha256', 'password', true));
echo "SHA-256 : {$hashed}";
?>
<br>
<?php
$hashed = base64_encode(hash('sha512', 'password', true));
echo "SHA-512 : {$hashed}";
?>

<!--
  3. password_hash(암호화할 문자열, 파라미터) (단방향 알고리즘)
    1) 파라미터
      - PASSWORD_DEFAULT : bcrypt 알고리즘 (PHP 5.5.0부터), 결과를 60자 이상으로 확장 할 수 있는 데이터베이스열에 저장하는 것이 좋다(255자 적합)
      - PASSWORD_BCRYPT : CRYPT_BLOWFISH 알고리즘. 결과는 항상 60자 문자열 (실패하면 false)
      - PASSWORD_ARGON2I : Argon2i 해싱 알고리즘. PHP가 Argon2 지원으로 컴파일 된 경우에만 사용 가능
      - PASSWORD_ARGON2ID : Argon2id 해싱 알고리즘. PHP가 Argon2 지원으로 컴파일 된 경우에만 사용 가능

    * 보통 PASSWORD_DEFAULT로 사용하고 저장할 DB column은 VARCHAR(255)로 한다.
    2) 순서
      ① password_hash 로 비밀번호 암호화
      ② 암호화된 문자열을 DB에 저장
      ③ 비밀번호 체크는
        - 화면에서 입력받은 문자열과,
        - userid 로 조회 후 비밀번호 컬럼값을 password_verify 로 비교한다.
-->

<?php
$orgStr = "hello~Bryan~";

$enc1 = password_hash($orgStr, PASSWORD_DEFAULT);
$enc2 = password_hash($orgStr, PASSWORD_DEFAULT);
$enc3 = password_hash($orgStr, PASSWORD_DEFAULT);

echo "<br />org = $orgStr";
echo "<br />enc1 = $enc1";
echo "<br />enc2 = $enc2";
echo "<br />enc3 = $enc3";
echo "<hr />";

$tmp = "hello~";
echo "<br />$tmp 는 ".(password_verify($tmp, $enc3) ? "일치함" : "다름");

$tmp = "hello~bryan~";
echo "<br />$tmp 는 ".(password_verify($tmp, $enc2) ? "일치함" : "다름");

$tmp = "hello~Bryan~";
echo "<br />$tmp 는 ".(password_verify($tmp, $enc1) ? "일치함" : "다름");
?>