<?php
session_start();
include 'db_connection.php';

if (!$_SESSION['is_admin']) {
    header('Location: login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    
    $target_dir = "uploads/gallery/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    
    $insert_query = "INSERT INTO gallery_items (title, description, image_path, upload_date, category) 
                     VALUES ('$title', '$description', '$target_file', NOW(), '$category')";
    mysqli_query($connection, $insert_query);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Gallery Management</title>
</head>
<body>
    <h1>Upload Gallery Item</h1>
    <form method="POST" enctype="multipart/form-data">
        <input type="text" name="title" placeholder="Item Title" required>
        <textarea name="description" placeholder="Description" required></textarea>
        <select name="category">
            <option>Research</option>
            <option>Events</option>
            <option>Laboratories</option>
        </select>
        <input type="file" name="image" required>
        <button type="submit">Upload</button>
    </form>
</body>
</html>
