<?php
session_start();

if (!$_SESSION['is_admin']) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Admin Control Panel</h1>
    <div class="admin-menu">
        <a href="gallery_admin.php">Manage Gallery</a>
        <a href="past_events.php">Manage Events</a>
        <a href="industry_interface.php">Manage Industry Interfaces</a>
    </div>
</body>
</html>
