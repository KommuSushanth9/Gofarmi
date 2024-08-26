<?php
include('connectionfd.php'); // Make sure to include your database connection file

// Specify the work category you want to display (you can set this dynamically based on user input)
$desiredWorkCategory = "paid"; // Change this to "free" if you want to display free work

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
            background: linear-gradient(45deg, #93a5cf, #e4efe9);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            width: 80%;
            max-width: 800px;
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
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-right: 10px;
            font-size: 16px;
            width: 300px;
        }
        .search-bar button {
            padding: 10px 20px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
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
            <input type='text' name='address' placeholder='Search by address...' value='$searchAddress'>
            <button type='submit'>Search</button>
          </form>";

    // Display farm details in a table
    echo "<table>
            <tr>
                <th>Crop Name</th>
                <th>Type of Work</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Payment Details</th>
            </tr>";

    // Output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$row['cropName']}</td>
                <td>{$row['workType']}</td>
                <td>{$row['phoneNumber']}</td>
                <td>{$row['address']}</td>
                <td>{$row['paymentDetails']}</td>
              </tr>";
    }

    echo "</table>
    </div>
</body>
</html>";
} else {
    echo "<p style='text-align: center;'>No farm details available for the selected work category.</p>";
}

// Close the database connection
mysqli_close($conn);
?>
