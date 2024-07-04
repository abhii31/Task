// reserve.php
<?php
require 'config.php';
session_start();
if (!isset($_SESSION['user_id'])) {
    echo "Please log in first.";
    exit;
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_SESSION['user_id'];
    $movie_id = $_POST['movie_id'];
    $seats = $_POST['seats']; // Array of selected seats
    $stmt = $conn->prepare("INSERT INTO bookings (user_id, movie_id, seats) VALUES (?, ?, ?)");
    $stmt->bind_param("iis", $user_id, $movie_id, json_encode($seats));
    $stmt->execute();
    echo "Booking successful!";
}
?>
