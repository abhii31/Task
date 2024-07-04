// reserve.php (add seat limit check)
<?php
// ... existing code ...
$screen_capacity = 60; // Example capacity
$stmt = $conn->prepare("SELECT COUNT(*) FROM bookings WHERE movie_id = ? AND screen_id = ?");
$stmt->bind_param("ii", $movie_id, $screen_id);
$stmt->execute();
$stmt->bind_result($booked_seats_count);
if ($booked_seats_count + count($seats) <= $screen_capacity) {
    // Proceed with booking
} else {
    echo "Screen is fully booked.";
}
?>
