<?php
    include('../master/connect.php');


  $sql = "SELECT * FROM unit ORDER BY unit_name desc";
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['unit_id'],$fetch['abbrv']);

  }
$conn = null;

echo json_encode($output);
?>
