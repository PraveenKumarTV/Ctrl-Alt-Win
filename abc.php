<?php
// Array of laboratories with image URLs
$laboratories = [
    "Cloud Systems Laboratory" => ["link" => "Cloud/index.html", "image" => "images/Cloud.webp"],
    "Data Analytics Lab" => ["link" => "DA/index.php", "image" => "images/DA.webp"],
    "DST-CSRI - Cognitive Science Lab" => ["link" => "Cognitive/index.php", "image" => "images/Cognitive.webp"],
    "Honeywell IoT Product Development Lab" => ["link" => "Honeywell/index.php", "image" => "images/Honeywell.webp"],
    "Mobile Application Development Studio" => ["link" => "Mobile/index.php", "image" => "images/Mobile.webp"],
    "Machine Learning Laboratory" => ["link" => "ML/index.php", "image" => "images/ML.webp"],
    "Motorola - Enterprise Mobility Lab" => ["link" => "Motorola/index.php", "image" => "images/Motorola.jpg"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratories</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Resetting default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body and container styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4; /* Fallback color */
            background-image: url('bg.jpg'); /* Replace with your background image path */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #FFFF00;
        }

        /* Lab list grid layout */
        .lab-list {
            display: grid;
            grid-template-columns: repeat(2, 1fr); /* Two items per row */
            gap: 20px;
            justify-items: center;
        }

        /* Individual lab item styling */
        .lab-item {
            background-color: #fff;
            border: 2px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            width: 100%;
            max-width: 300px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Image styling */
        .lab-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-bottom: 2px solid #ddd;
        }

        /* Lab name styling */
        .lab-name {
            padding: 15px;
            font-size: 18px;
            font-weight: bold;
            color: #333;
            background-color: #f7f7f7;
            text-transform: capitalize;
        }

        /* Hover effect for lab items */
        .lab-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
        }

        /* Responsive styling for smaller screens */
        @media (max-width: 768px) {
            .lab-list {
                grid-template-columns: repeat(1, 1fr); /* One item per row on smaller screens */
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>IT Laboratories</h1>
        <div class="lab-list">
            <?php foreach ($laboratories as $lab => $details): ?>
                <div class="lab-item">
                    <a href="<?php echo $details['link']; ?>">
                        <img src="<?php echo $details['image']; ?>" alt="<?php echo $lab; ?>" class="lab-image">
                        <p class="lab-name"><?php echo $lab; ?></p>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
