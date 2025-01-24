<?php
// Database configuration
$servername = "localhost";
$username = "root";  // Change this to your database username
$password = "";      // Change this to your database password
$dbname = "student_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database and table if not exists
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    $sql = "CREATE TABLE IF NOT EXISTS students (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        full_name VARCHAR(255) NOT NULL,
        dob DATE NOT NULL,
        father_name VARCHAR(255) NOT NULL,
        father_phone VARCHAR(15) NOT NULL,
        mother_name VARCHAR(255) NOT NULL,
        mother_phone VARCHAR(15) NOT NULL,
        year VARCHAR(10) NOT NULL,
        department VARCHAR(255) NOT NULL,
        semester VARCHAR(50) NOT NULL,
        previous_cgpa DECIMAL(3,2) NOT NULL,
        current_sgpa DECIMAL(3,2) NOT NULL,
        dbms_attendance INT NOT NULL,
        network_attendance INT NOT NULL,
        iot_attendance INT NOT NULL,
        algorithm_attendance INT NOT NULL,
        project_attendance INT NOT NULL,
        statistics_attendance INT NOT NULL
    )";

    if ($conn->query($sql) === TRUE) {
        // Table created successfully
    } else {
        echo "Error creating table: " . $conn->error;
    }
}

// Handling form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST['studentFullName'];
    $dob = $_POST['studentDOB'];
    $fatherName = $_POST['fatherName'];
    $fatherPhone = $_POST['fatherPhoneNo'];
    $motherName = $_POST['motherName'];
    $motherPhone = $_POST['motherPhoneNo'];
    $year = $_POST['studentYear'];
    $department = $_POST['studentDepartment'];
    $semester = $_POST['studentSemester'];
    $previousCGPA = $_POST['previousCGPA'];
    $currentSGPA = $_POST['currentSGPA'];
    $dbmsAttendance = $_POST['dbmsAttendance'];
    $networkAttendance = $_POST['networkAttendance'];
    $iotAttendance = $_POST['iotAttendance'];
    $algorithmAttendance = $_POST['algorithmAttendance'];
    $projectAttendance = $_POST['projectManagementAttendance'];
    $statisticsAttendance = $_POST['statisticsAttendance'];

    // Insert data into database
    $stmt = $conn->prepare("INSERT INTO students (full_name, dob, father_name, father_phone, mother_name, mother_phone, year, department, semester, previous_cgpa, current_sgpa, dbms_attendance, network_attendance, iot_attendance, algorithm_attendance, project_attendance, statistics_attendance) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssddiiiii", $fullName, $dob, $fatherName, $fatherPhone, $motherName, $motherPhone, $year, $department, $semester, $previousCGPA, $currentSGPA, $dbmsAttendance, $networkAttendance, $iotAttendance, $algorithmAttendance, $projectAttendance, $statisticsAttendance);

    if ($stmt->execute()) {
        echo "New student registered successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }
}

// Close the database connection
$conn->close();
?>
