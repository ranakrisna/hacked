<?php
$result = [];
$result["time"] = time();
$result["tipe"] = $_SERVER['REQUEST_METHOD'];
$result["data"] = file_get_contents('php://input');;
echo json_encode($result);
