<?php
require_once 'inc/db.php';
header('Content-Type: application/json');
$response['success'] = false;

$stmt = $pdo->prepare("SELECT * FROM users");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
if(!empty($result)) {
    $response['success'] = true;
    $response['data'] = $result;
}
echo json_encode($response);
?>