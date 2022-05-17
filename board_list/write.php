<?php include '../dbconnect/dbconnect.php'; ?>
<?php include './include/head.php'; ?>

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
              <td><input type="text" name="id" size=20></td>
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
              <td><input type="password" name="pw" size=10 maxlength=10></td>
            </tr>
          </table>
          <div style="text-align: center">
            <button type="submit">작성</button>
          </div>
        </td>
      </tr>
    </table>
  </form>
</body>