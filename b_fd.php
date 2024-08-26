<?php
include('connectionfd.php'); // Make sure to include your database connection file

if (isset($_POST['submit'])) {
    // Retrieve form data
    $cropName = $_POST['cropName'];
    $workType = $_POST['workType'];
    $workCategory = $_POST['workCategory']; // Added line to retrieve work category
    $phoneNumber = $_POST['phoneNumber'];
    $address = $_POST['address'];
    $paymentDetails = $_POST['paymentDetails'];

    // Perform SQL insertion
    $sql = "INSERT INTO farmdetails (cropName, workType, workCategory, phoneNumber, address, paymentDetails) 
            VALUES ('$cropName', '$workType', '$workCategory', '$phoneNumber', '$address', '$paymentDetails')";

    if (mysqli_query($conn, $sql)) {
        echo "Record added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
