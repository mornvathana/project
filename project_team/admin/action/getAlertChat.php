<?php
session_start();
include('../../config/dbcon.php');

$id = $_POST['userid'];

$sql = "
    SELECT c1.*, u.name 
    FROM chatbox c1
    JOIN users u ON c1.user_id = u.id
    INNER JOIN (
        SELECT user_id, MAX(id) as max_id
        FROM chatbox
        GROUP BY user_id
    ) c2 ON c1.user_id = c2.user_id AND c1.id = c2.max_id WHERE c1.user_id != $id
    ORDER BY c1.id DESC
";

$result = $conn->query($sql);
$message = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $message[] = array(
            "id" => $row['id'],
            "message" => $row['message'],
            "userid" => $row['user_id'],
            "name" => $row['name'], 
        );
    }
}

echo json_encode($message);
?>
