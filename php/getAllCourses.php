<?php
include 'db.php';

$sql = "SELECT c.id, c.name, cd.description, cd.price, t.name as teacher_name, t.description as teacher_description 
        FROM courses c 
        JOIN course_details cd ON c.id = cd.course_id
        JOIN teachers t ON c.teacher_id = t.id";
$result = $conn->query($sql);

$courses = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $courses[] = $row;
    }
}

echo json_encode($courses);

$conn->close();
?>