<?php
header('Content-Type:application/json');

include('servercon.php');

$start = $dbconnect->prepare("SELECT id, name, age, salary from emp_tbl");
$start->execute();
$result = $start->get_result();
$outp = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($outp); 