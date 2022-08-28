<?php include './include/head.php'; ?>

<body>
  <div>
    <span>로그인</span>
    <form method="post" action="process_login.php">
      <p>ID: <input type="text" name="id"></p>
      <p>PW: <input type="password" name="pw"></p>
      <button type="submit">로그인</button>
    </form>
    <br>
    <button id="join" onclick="location.href='./join.php'">회원가입</button>
  </div>
</body>