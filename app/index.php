<?php
include 'config.php';
include 'db.php';

$result = $conn->query("SELECT * FROM products");
?>

<h1>Simple E-Commerce</h1>

<?php while($row = $result->fetch_assoc()): ?>
    <div>
        <h3><?php echo $row['name']; ?></h3>
        <p>₹<?php echo $row['price']; ?></p>
    </div>
<?php endwhile; ?>
