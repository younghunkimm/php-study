<?php
session_start();
$id = 'dudgns';
$pw = 'coding';
if(!empty($_POST['id']) && !empty($_POST['pw'])) {
    if($_POST['id'] == $id && $_POST['pw'] == $pw) {
        $_SESSION['is_login'] = true;
        $_SESSION['nickname'] = '영훈';
        header('Location: ./session.php');
        exit;
    }
} 
echo '로그인 하지 못했습니다.';
?>