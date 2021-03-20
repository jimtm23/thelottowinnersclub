<?php

define (DB_USER, "root");
define (DB_PASSWORD, "demo");
define (DB_DATABASE, "demo");
define (DB_HOST, "localhost");

$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);


$query = "SELECT * FROM transaction";
$result = $conn->query($query);

$data=array();
while($row = $result->fetch_array(MYSQLI_ASSOC)){
  $data[] = $row;
}

$results = ["sEcho" => 1,
          "iTotalRecords" => count($data),
          "iTotalDisplayRecords" => count($data),
          "aaData" => $data ];

echo json_encode($results);

?>