<?php
include './include/dbconnect.php';

$query = "select * from topic";
$result = mysqli_query($dbcon, $query);

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
    <?php
    # id 값이 없을 때 default 값
    $article = array('title' => 'Welcome', 'description' => 'Hello, web');
    if(isset($_GET['id'])) {
      $query = "select * from topic where id={$_GET['id']}";
      $result = mysqli_query($dbcon, $query);
      $row = mysqli_fetch_array($result);
      $article = array('title' => $row['title'], 'description' => $row['description']);
    }
    print_r($article);
    ?>
    <form action="process_update.php" method="post">
      <input type="hidden" name="id" value="<?=$_GET['id']?>">
      <p>
        <input type="text" name="title" placeholder="title" value="<?=$article['title']?>">
      </p>
      <p>
        <textarea name="description" placeholder="description"><?=$article['description']?></textarea>
      </p>
      <p>
        <input type="submit">
      </p>
    </form>
  </body>
</html>

<!-- 
  <UPDATE>
  1. 데이터를 수정
  2. 문법
    - UPDATE 테이블명 SET 컬럼1=컬럼1의 값 WHERE 대상이 될 컬럼명=컬럼의 값
  
  3. 예제
    - UPDATE student SET address='서울';
    - UPDATE student SET name='김영훈' WHERE id=1;
    - UPDATE student SET name='김영훈', birthday="2001-4-1; WHERE id=3;

  4. update, insert 똑같이 쓰는 방법
    - UPDATE 테이블명 SET 필드 = 값, 필드 = 값 where 필드 = 값;
    - INSERT 테이블명 SET 필드 = 값, 필드 = 값;
    *버전에 따라서 안될 수도 있음
 -->