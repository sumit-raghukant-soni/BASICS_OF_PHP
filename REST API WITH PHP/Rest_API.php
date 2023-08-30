<?php
header("Content-Type:application/json");
require_once($_SERVER['DOCUMENT_ROOT'].'/php programs/Practical_06/NEW/connection.php');

$key = $_REQUEST['q'];

$sql = "SELECT * FROM practical_07_faculty_names where name Like ?";
$q = $conn->prepare($sql);
$q->bindParam(1,$key);
$q->execute();

$data = "No match found!";
if ($q->rowCount() != 0) {
    $data = "";
    while ($row = $q->fetch()) {
        $data .= $row['Name'] . " " . $row['Password'];
    }
}

$temp = json_encode($data);
echo json_encode($data);

?>