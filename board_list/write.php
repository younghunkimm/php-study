<?php include '../dbconnect/dbconnect.php'; ?>
<?php include './include/session.php'; ?>
<?php include './include/head.php'; ?>

<!-- 로그인 후 글작성 가능 기능 -->
<?php
if (!isset($_SESSION['userid'])) {
  echo '<script> alert("로그인이 필요합니다."); window.location.href = "./index.php"; </script>';
}
?>

<body>
  <form method="post" action="process_write.php">
    <table style="margin:0 auto">
      <tr>
        <td style="height: 20; text-align: center; background: #ccc;"><span style="color:white">글쓰기</span></td>
      </tr>
      <tr>
        <td>
          <table class="table2">
            <tr>
              <td>작성자</td>
              <td><input type="hidden" name="id" size=20 value="<?php echo $_SESSION['userid'] ?>"><?php echo $_SESSION['userid'] ?></td>
            </tr>
            <tr>
              <td>제목</td>
              <td><input type="text" name="title" size=60></td>
            </tr>
            <tr>
              <td>내용</td>
              <td><textarea name="content" cols="85" rows="15"></textarea></td>
            </tr>
            <tr>
              <td>비밀번호</td>
              <td><input type="password" name="pw" id="lock_pw" size=10 maxlength=10 disabled><input type="checkbox" name="lockpost" id="lock_ck" onclick="toggleTextBox(this)">비밀글</input></td>
            </tr>
            <script>
              function toggleTextBox(checkbox) {
                const lockPw = document.getElementById('lock_pw');
                lockPw.disabled = checkbox.checked ? false : true;

                if (lockPw.disabled) {
                  lockPw.value = null;
                } else {
                  lockPw.focus();
                }
              }
            </script>
          </table>
          <div style="text-align: center">
            <button type="submit">작성</button>
          </div>
        </td>
      </tr>
    </table>
  </form>
</body>