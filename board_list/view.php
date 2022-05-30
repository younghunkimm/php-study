<?php include '../dbconnect/dbconnect.php'; ?>
<?php include './include/head.php'; ?>
<?php include './include/session.php'; ?>

<?php
// 조회수 증가
$hit = 'update board set hit = hit + 1 where num = '.$_GET['num'];
$result = mysqli_query($dbcon, $hit);

$query = 'select * from board where num = '.$_GET['num'];
$result = mysqli_query($dbcon, $query);
$row = mysqli_fetch_assoc($result);
?>

<body>
  <h2 class="main_title">VIEW</h2>
  <!-- MODIFY & DELETE & THUMBUP -->
  <div class="view_btn">
    <button class="view_btn1" onclick="location.href='./thumbup.php?num=<?php echo $_GET['num'] ?>&id=<?php echo $_SESSION['userid'] ?>'">추천</button>
    <button class="view_btn1" onclick="location.href='./modify.php?num=<?php echo $_GET['num'] ?>&id=<?php echo $_SESSION['userid'] ?>'">수정</button>
    <button class="view_btn1" onclick="location.href='./process_delete.php?num=<?php echo $_GET['num'] ?>&id=<?php echo $_SESSION['userid'] ?>'">삭제</button>    
  </div>
  <table class="view_table" align="center" width="100%">
    <tr>
      <td colspan="6" class="view_title" align="center" bgcolor="#f2f2f2"><?php echo $row['title'] ?></td>
    </tr>
    <tr>
      <td class="view_id" bgcolor=#f7f7f7 width="15%" align="center">작성자</td>
      <td><?php echo $row['id'] ?></td>
      <td class="view_hit" bgcolor=#f7f7f7 width="15%" align="center">조회수</td>
      <td><?php echo $row['hit'] ?></td>
      <td class="view_thumbup" bgcolor=#f7f7f7 width="15%" align="center">추천수</td>
      <td><?php echo $row['thumbup'] ?></td>
    </tr>
    <tr>
      <td colspan="6" class="view_content" align="top"><?php echo $row['content']; ?></td>
    </tr>
  </table>
  <div class="list_btn">
    <button class="view_btn1" onclick="location.href='./index.php'">목록으로</button>
  </div>
  
  <!-- 댓글 불러오기 -->
  <div class="reply_view">
    <h3>댓글목록</h3>

    <?php
    $query = 'select * from reply where con_num = "'.$_GET['num'].'" order by num desc';
    $result = mysqli_query($dbcon, $query);

    while ($row = mysqli_fetch_array($result)) {
    ?>

      <div class="dap_lo">
        <div><b><?php echo $row['name'] ?></b></div>
        <div class="dap_to comt_edit"><?php echo nl2br("$row[content]"); ?></div>
        <div class="rep_me dap_to"><?php echo $row['date'] ?></div>
        <div class="rep_me rep_menu">
          <a href="#" class="dat_edit_bt">수정</a>
          <a href="#" class="dat_delete_bt">삭제</a>
        </div>
        <!-- 댓글 수정 폼 dialog -->
        <div class="dat_edit">
          <form method="post" action="./rep_modify_ok.php">
            <input type="hidden" name="rno" value="<?php echo $row['num']; ?>">
            <input type="hidden" name="bno" value="<?php echo $_GET['num']; ?>">
            <input type="password" name="pw" class="dap_sm" placeholder="비밀번호"><br>
            <textarea name="content" class="dap_edit_t"><?php echo $row['content']; ?></textarea>
            <button type="submit" class="re_mo_bt">수정하기</button>
          </form>
        </div>
        <!-- 댓글 삭제 비밀번호 확인 -->
        <div class="dat_delete">
          <form method="post" action="./rep_delete.php">
            <input type="hidden" name="rno" value="<?php echo $row['num']; ?>"><input type="hidden" name="bno" value="<?php echo $_GET['num']; ?>">
            <p>
              비밀번호<input type="password" name="pw">
              <button type="submit">확인</button>
            </p>
          </form>
        </div>
      </div>

      <hr>

    <?php
    }
    ?>

    <!-- 댓글 입력 폼 -->
    <div class="dap_ins">
      <form method="post" action="./rep_ok.php?num=<?php echo $_GET['num'] ?>">
        <input type="text" name="dat_user" class="dat_user" size="15" placeholder="아이디">
        <input type="password" name="dat_pw" id="dat_pw" class="dat_pw" size="15" placeholder="비밀번호">
        <div style="margin-top: 10px">
          <textarea name="content" id="" cols="30" rows="10"></textarea>
          <button type="submit" id="rep_bt" class="re_bt">댓글</button>
        </div>
      </form>
    </div>
  </div>

  <div id="foot_box"></div>
</body>