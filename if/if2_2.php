<?php
if($_GET['id'] === 'egoing') {
  echo 'right';
} else {
  echo 'wrong';
}
?>

<!-- 
  get으로 넘긴건 $_GET으로만
  post로 넘긴건 $_POST로만
  
  get과 post를 둘다 받아야할때
  $_REQUEST (get이던 post던 다받아짐.) 다시한번공부

  <$_REQUEST>
   - $_GET과 $_POST가 합쳐진 배열
   - $_GET과 동일하게 보안에 취약하다
      (정확하게 말하면 파라미터가 붙진않지만 붙은것도 읽어버림)

  <보완방법>
    - 토큰 (우리 사이트를 통해 들어온건지) - 프레임워크 사용
    - 도메인 경로 체크해서 막을 수 있음
 -->