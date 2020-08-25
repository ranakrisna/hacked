<?php
$result = [];
$result["time"] = time();
$result["tipe"] = $_SERVER['REQUEST_METHOD'];
$result["data"] = file_get_contents('php://input');
$result["header"] = [];
foreach (getallheaders() as $header => $value) {
    $result["header"][$header] =  $value;
}
echo json_encode($result);
