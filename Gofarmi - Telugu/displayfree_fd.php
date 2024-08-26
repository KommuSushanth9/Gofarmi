<?php
include('connectionfd.php'); // Make sure to include your database connection file

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
        <h2>వ్యవసాయ వివరాలు - పని వర్గం: ఉచిత</h2>";

    // Display search bar
    echo "<form class='search-bar' method='GET'>
            <input type='text' name='address' placeholder='చిరునామా ద్వారా శోధించండి...' value='$searchAddress'>
            <button type='submit'>వెతకండి</button>
          </form>";

    // Display farm details in a table
    echo "<table>
            <tr>
                <th>పంట పేరు</th>
                <th>రకమైన పని</th>
                <th>ఫోను నంబరు</th>
                <th>చిరునామా</th>
                <th>చెల్లింపు వివరాలు</th>
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
    echo "<p style='text-align: center;'>ఎంచుకున్న పని వర్గానికి వ్యవసాయ వివరాలు అందుబాటులో లేవు.</p>";
}
mysqli_close($conn);
?>