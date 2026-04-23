<?php
// Docker Compose එකේ 'db' service එකේ දුන්න විස්තර මෙතනට දාන්න
$host = 'db';           // docker-compose.yml හි service name එක
$user = 'rama';   // MYSQL_USER ලෙස දුන් නම
$pass = 'admin123';  // MYSQL_PASSWORD ලෙස දුන් මුරපදය
$db   = 'student_db';   // MYSQL_DATABASE ලෙස දුන් නම

// Connection එක සාදා ගැනීම
$conn = new mysqli($host, $user, $pass, $db);

// Connection එකේ දෝෂයක් ඇත්දැයි පරීක්ෂා කිරීම
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// සාර්ථක නම් මෙය පෙන්විය හැක (පසුව මෙය ඉවත් කරන්න පුළුවන්)
// echo "Connected successfully to MySQL!";
?>