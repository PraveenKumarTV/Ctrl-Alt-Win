<?php
include 'db_connection.php';

$capabilities_query = "SELECT * FROM capabilities ORDER BY category";
$capabilities_result = mysqli_query($connection, $capabilities_query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Department Capabilities</title>
</head>
<body>
    <div class="capabilities-container">
        <h1>Our Capabilities</h1>
        <?php while($capability = mysqli_fetch_assoc($capabilities_result)): ?>
            <div class="capability-card">
                <h3><?php echo $capability['title']; ?></h3>
                <p><?php echo $capability['description']; ?></p>
                <img src="<?php echo $capability['image_path']; ?>" alt="Capability Image">
            </div>
        <?php endwhile; ?>
    </div>
</body>
</html>
