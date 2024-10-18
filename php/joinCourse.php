<?php
include 'db.php';

$userId = $_POST['userId'];
$courseId = $_POST['courseId'];

$sql = "INSERT INTO user_courses (user_id, course_id) VALUES ($userId, $courseId)";
if ($conn->query($sql) === TRUE) {
    echo json_encode(["message" => "加入课程成功"]);
} else {
    echo json_encode(["message" => "加入课程失败: " . $conn->error]);
}

$conn->close();
?>