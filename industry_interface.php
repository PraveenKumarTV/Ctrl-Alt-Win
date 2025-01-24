<?php
include 'db_connection.php';

$industry_query = "SELECT * FROM industry_interface ORDER BY start_date DESC";
$industry_result = mysqli_query($connection, $industry_query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Industry Collaborations</title>
</head>
<body>
    <h1>Industry Partnerships</h1>
    <?php while($collaboration = mysqli_fetch_assoc($industry_result)): ?>
        <div class="industry-card">
            <h3><?php echo $collaboration['company_name']; ?></h3>
            <p>Collaboration Type: <?php echo $collaboration['collaboration_type']; ?></p>
            <p><?php echo $collaboration['project_description']; ?></p>
        </div>
    <?php endwhile; ?>
</body>
</html>
