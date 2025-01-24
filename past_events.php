<?php
include 'db_connection.php';

$events_query = "SELECT * FROM past_events ORDER BY event_date DESC";
$events_result = mysqli_query($connection, $events_query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Past Department Events</title>
</head>
<body>
    <h1>Our Past Events</h1>
    <?php while($event = mysqli_fetch_assoc($events_result)): ?>
        <div class="event-card">
            <h3><?php echo $event['event_name']; ?></h3>
            <p>Date: <?php echo $event['event_date']; ?></p>
            <p><?php echo $event['description']; ?></p>
            <img src="<?php echo $event['image_path']; ?>" alt="Event Image">
        </div>
    <?php endwhile; ?>
</body>
</html>
