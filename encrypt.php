<?php
include './dbconnect/dbconnect.php';

$query = "select * from user";
$result = mysqli_query($dbcon, $query);

while ($row = mysqli_fetch_array($result)){
  $id = $row['id'];
  $address = $row['address'];
  $name = $row['name'];
  $birth = $row['birth'];
  $tel = $row['tel'];
  
  echo "<pre>";
  echo "{$name}, {$birth}, {$tel}, {$id}";
  echo "</pre>";

  $query2 = " update user set ";
  $query2.= "
    name = HEX(AES_ENCRYPT('{$name}', 'ZGluZ2RvbmdLZXk=')),
    birth = HEX(AES_ENCRYPT('{$birth}', 'ZGluZ2RvbmdLZXk=')),
    tel = HEX(AES_ENCRYPT('{$tel}', 'ZGluZ2RvbmdLZXk='))
  ";
  $query2.= " where id = '{$id}' ";
  echo $query2;
  // $query = " select * from user where id = '".$row['id']."' ";
  // $result2 = mysqli_query($dbcon, $query2);
  echo mysqli_error($dbcon);
}
?>