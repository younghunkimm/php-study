<?php include './include/head.php'; ?>

<body>
  <div>
    <p>회원가입</p>
    <form method="post" action="process_join.php">
      <p>ID: <input type="text" name="id"></p>
      <p>PW: <input type="password" name="pw"></p>
      <p>Email: <input type="email" name="email"></p>
      <button type="submit">회원가입</button>
    </form>
  </div>
</body>