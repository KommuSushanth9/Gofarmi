<?php
include('connectionfd.php'); // Make sure to include your database connection file

// Check if the form for updating a record is submitted
if (isset($_POST['update'])) {
    $phoneNumber = $_POST['phoneNumber'];
    $workType = $_POST['workType'];
    $address = $_POST['address'];
    $paymentDetails = $_POST['paymentDetails'];

    // Update the record in the database
    $updateSql = "UPDATE farmdetails SET workType='$workType', address='$address', paymentDetails='$paymentDetails' WHERE phoneNumber='$phoneNumber'";

    if (mysqli_query($conn, $updateSql)) {
        // Redirect to the same page after successful update
        header("Location: display_fd.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

// Check if a delete action is requested
if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['phoneNumber'])) {
    $phoneNumber = $_GET['phoneNumber'];

    // Delete the record from the database
    $deleteSql = "DELETE FROM farmdetails WHERE phoneNumber = '$phoneNumber'";

    if (mysqli_query($conn, $deleteSql)) {
        // Redirect to the same page after successful deletion
        header("Location: display_fd.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

// Specify the work category you want to display (you can set this dynamically based on user input)
$desiredWorkCategory = "free"; // Change this to "free" if you want to display free work

// Retrieve farm details from the database based on the work category and address filter
$searchAddress = isset($_GET['address']) ? $_GET['address'] : '';
$sql = "SELECT * FROM farmdetails WHERE workCategory = '$desiredWorkCategory'";
if (!empty($searchAddress)) {
    // Add address filter if searchAddress is provided
    $sql .= " AND address LIKE '%$searchAddress%'";
}
$result = mysqli_query($conn, $sql);

// Check if there are any records
if (mysqli_num_rows($result) > 0) {
    echo "<html>
<head>
    <title>Farm Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        .search-bar {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 20px;
        }
        .search-bar input[type='text'] {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-right: 10px;
        }
        .search-bar button {
            padding: 10px 20px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .search-bar button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class='container'>
        <h2>Farm Details - Work Category: $desiredWorkCategory</h2>";

    // Display search bar
    echo "<form class='search-bar' method='GET'>
            <input type='text' name='address' placeholder='पते के आधार पर खोजें...' value='$searchAddress'>
            <button type='submit'>खोज</button>
          </form>";

    // Display farm details in a table
    echo "<table>
            <tr>
                <th>फसल का नाम</th>
                <th>काम के प्रकार</th>
                <th>फ़ोन नंबर</th>
                <th>पता</th>
                <th>भुगतान विवरण</th>
                <th>कार्रवाई</th>
            </tr>";

    // Output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        $phoneNumber = $row['phoneNumber'];
        echo "<tr>
                <td>{$row['cropName']}</td>
                <td>{$row['workType']}</td>
                <td>{$row['phoneNumber']}</td>
                <td>{$row['address']}</td>
                <td>{$row['paymentDetails']}</td>
                <td>
                    <a href='displayfree_fd.php?action=delete&phoneNumber=$phoneNumber' onclick='return confirm(\"Are you sure you want to delete this record?\")'>Delete</a>
                    <button onclick=\"document.getElementById('updateForm$phoneNumber').style.display='block'\">Update</button>
                </td>
              </tr>";

        // Update form for each row
        echo "<div id='updateForm$phoneNumber' style='display: none;'>
                <form method='POST'>
                    <input type='hidden' name='phoneNumber' value='$phoneNumber'>
                    Type of Work: <input type='text' name='workType' value='{$row['workType']}'><br>
                    Address: <input type='text' name='address' value='{$row['address']}'><br>
                    Payment Details: <input type='text' name='paymentDetails' value='{$row['paymentDetails']}'><br>
                    <button type='submit' name='update'>अद्यतन</button>
                    <button type='button' onclick=\"document.getElementById('updateForm$phoneNumber').style.display='none'\">Cancel</button>
                </form>
              </div>";
    }

    echo "</table>
    </div>
</body>
</html>";
} else {
    echo "<p style='text-align: center;'>No farm details available for the selected work category.</p>";
}
mysqli_close($conn);
?>
