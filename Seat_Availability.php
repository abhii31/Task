// check_availability.php
<?php
require 'config.php';
$movie_id = $_GET['movie_id'];
$result = $conn->query("SELECT seats FROM bookings WHERE movie_id = $movie_id");
$booked_seats = [];
while ($row = $result->fetch_assoc()) {
    $booked_seats = array_merge($booked_seats, json_decode($row['seats']));
}
echo json_encode($booked_seats);
?>
