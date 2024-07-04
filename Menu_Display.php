<!-- food_menu.html -->
<ul>
  <?php
  require 'config.php';
  $result = $conn->query("SELECT id, name, price FROM food_menu");
  while ($row = $result->fetch_assoc()) {
      echo "<li>{$row['name']} - {$row['price']}</li>";
  }
  ?>
</ul>



<!-- add_to_cart.html -->
<div id="cart"></div>
<button id="checkout">Checkout</button>

<script>
document.getElementById('checkout').addEventListener('click', function() {
  // Send cart data to server for processing
});
</script>
