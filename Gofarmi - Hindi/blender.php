<?php
require 'cble.php';

// Delete operation
if (isset($_GET['delete'])) {
    $phoneNumber = $_GET['delete']; // Get the phone number from the GET parameter
    // Delete the record from the database
    mysqli_query($conn, "DELETE FROM tb_upload WHERE phoneNumber='$phoneNumber'");
    // Redirect back to the main page after deletion
    header("Location: http://localhost:3000/blender.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 80%;
            margin: auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 15px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        .search-container {
            text-align: right;
            margin-bottom: 20px;
        }

        .search-container input[type='text'] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        .search-container button {
            padding: 10px 20px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .search-container button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="search-container">
            <form method="GET">
                <input type="text" name="address" placeholder="Search by address..." value="<?php echo isset($_GET['address']) ? $_GET['address'] : ''; ?>">
                <button type="submit">Search</button>
            </form>
        </div>

        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Image</th>
                <th>Address</th>
                <th>Phone Number</th>
                <th>Payment Details</th>
                <th>Action</th>
            </tr>
            <?php
            $i = 1;
            $searchAddress = isset($_GET['address']) ? $_GET['address'] : '';
            $searchCondition = !empty($searchAddress) ? " WHERE address LIKE '%$searchAddress%'" : "";
            $rows = mysqli_query($conn, "SELECT * FROM tb_upload $searchCondition ORDER BY name DESC");

            foreach ($rows as $row) : ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row["name"]; ?></td>
                    <td><img src="img/<?php echo $row['image']; ?>" width="300" title="<?php echo $row['image']; ?>"></td>
                    <td><?php echo $row["address"]; ?></td>
                    <td><?php echo $row["phoneNumber"]; ?></td>
                    <td><?php echo $row["paymentDetails"]; ?></td>
                    <td>
                        <a href="?delete=<?php echo $row['phoneNumber']; ?>" onclick="return confirm('Are you sure you want to delete this record?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>
