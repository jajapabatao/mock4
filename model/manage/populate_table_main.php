<?php
    include('../master/connect.php');


  $sql = "SELECT * from user where status='active'";
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();

  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['user_id'],$fetch['user_name'], $fetch['user_type'],$fetch['status']);
  }
$conn = null;

echo json_encode($output);
?>

