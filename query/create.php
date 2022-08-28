<?php include './include/dbconnect.php';?>

<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>QUERY</title>
  </head>
  <body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
      <!-- 직관적으로 바로 여기다가 -->
      <?php
      $query = "select * from topic";
      $result = mysqli_query($dbcon, $query);

      $list = '';
      while ($row = mysqli_fetch_array($result)) {
        // <li><a href=\"index.php?id=19\">MySQL</a></li>
        $list.= "<li><a href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
      }

      echo $list
      ?>
    </ol>
    <form action="process_create.php" method="post">
      <p>
        <input type="text" name="title" placeholder="title">
      </p>
      <p>
        <textarea name="description" placeholder="description"></textarea>
      </p>
      <p>
        <input type="submit">
      </p>
    </form>
  </body>
</html>