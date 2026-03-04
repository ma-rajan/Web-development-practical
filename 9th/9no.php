<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create Database
$sql = "CREATE DATABASE dbstudent";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}

// Select Database
$conn->select_db("dbstudent");

// Create Table
$sql = "CREATE TABLE tblstudent (
    ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(50) NOT NULL,
    Address VARCHAR(100) NOT NULL,
    PhoneNo VARCHAR(15) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>