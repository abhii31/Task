<!-- movies.html -->
<ul>
  <?php
  require 'config.php';
  $result = $conn->query("SELECT id, title, genre, showtime FROM movies");
  while ($row = $result->fetch_assoc()) {
      echo "<li>{$row['title']} - {$row['genre']} - {$row['showtime']}</li>";
  }
  ?>
</ul>


<!-- seat_selection.html -->
<div id="seat-map"></div>
<button id="confirm-selection">Confirm Selection</button>

<script>
document.getElementById('confirm-selection').addEventListener('click', function() {
  // Fetch selected seats and send to server for reservation
});
</script>
