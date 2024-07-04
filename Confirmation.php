// confirmation.php
<?php
require 'config.php';
session_start();
if (isset($_SESSION['booking_id'])) {
    $booking_id = $_SESSION['booking_id'];
    $stmt = $conn->prepare("SELECT * FROM bookings WHERE id = ?");
    $stmt->bind_param("i", $booking_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $booking = $result->fetch_assoc();
    echo "Booking confirmed! Details: " . json_encode($booking);
}
?>
