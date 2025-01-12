<?php
$conn = new mysqli("localhost", "root", "", "webtech");

$data = json_decode(file_get_contents("php://input"), true);

$id = $data['id'];

$sql = "DELETE FROM usermodel WHERE id=$id";
if ($conn->query($sql)) {
    echo json_encode(["message" => "Employee deleted successfully"]);
} else {
    echo json_encode(["message" => "Error: " . $conn->error]);
}
$conn->close();
?>