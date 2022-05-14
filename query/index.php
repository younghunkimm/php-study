<?php
include './include/dbconnect.php';

$query = "SELECT * FROM topic";
$result = mysqli_query($dbcon, $query);

# id 값이 없을 때 default 값
$article = array('title' => 'Welcome', 'description' => 'Hello, web');

print_r($article);
echo "<br />";
echo $query;
?>

<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>QUERY</title>
  </head>
  <body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
      <?php
      $list = '';
      while ($row = mysqli_fetch_array($result)) {
        // <li><a href=\"index.php?id=19\">MySQL</a></li>
        $list.= "<li><a href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
      }

      echo $list
      ?>
    </ol>
    <a href="create.php">create</a>
    <?php
    $update_link = '';
    $delete_link = '';
    if(isset($_GET['id'])) {
      $query = "SELECT * FROM topic WHERE id={$_GET['id']}";
      $result = mysqli_query($dbcon, $query);
      $row = mysqli_fetch_array($result);
      $article = array('title' => $row['title'], 'description' => $row['description']);

      $update_link = '<a href="./update.php?id='.$_GET['id'].'">update</a>';

      # 삭제 버튼을 링크로 처리하면 다른 사람에게 링크를 보냈을 때 링크를 클릭하면 데이터가 삭제된다.
      # 예시로 링크를 방문하는 플러그인 사용 시 플러그인으로 인해 데이터가 다 날아갈 수 있다.
      # 그래서 GET이 아닌 POST 방식으로 form으로 처리해야 안전하다.
      $delete_link = '
        <form action="process_delete.php" method="post">
          <input type="hidden" name="id" value="'.$_GET['id'].'">
          <input type="submit" value="delete">
        </form>
      ';
    }

    echo $update_link;
    echo $delete_link;
    ?>
    <h2><?=$article['title']?></h2>
    <?=$article['description']?>
  </body>
</html>