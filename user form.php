<?php
session_start();

// Connect to database (replace dbname, username, password with actual credentials)
require_once "databaseconnection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email']; // Corrected variable name
    $address = $_POST['address'];

    // Use prepared statements to prevent SQL injection
    $sql = "SELECT * FROM user WHERE email=?"; // Corrected column name
    $fdamp = $connection->prepare($sql);
    $fdamp->bind_param("s", $email); // Corrected parameter type
    $fdamp->execute();
    $result = $fdamp->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (address_verify($address, $row['address'])) {
            $_SESSION['user_id'] = $row['user_id']; // Set the fue_suppler_id session variable
            header("Location:landing.php");
            exit();
        } else {
            echo "Invalid email or phone.";
        }
    } else {
        echo "User not found.";
    }
}

$connection->close();

function address_verify($address, $storeaddress) {
    
    return $address === $storeaddress;
}
?>