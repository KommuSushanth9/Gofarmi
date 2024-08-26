<?php
require 'cble.php';

// Ensure 'img/' directory exists
$imgDirectory = 'img/';
if (!is_dir($imgDirectory)) {
    // Create the directory if it doesn't exist
    mkdir($imgDirectory);
}

if (isset($_POST["submit"])) {
    // Sanitize input to prevent SQL injection
    
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $address = mysqli_real_escape_string($conn, $_POST["address"]);
    $phoneNumber = mysqli_real_escape_string($conn, $_POST["phoneNumber"]);
    $paymentDetails = mysqli_real_escape_string($conn, $_POST["paymentDetails"]);

    // Check if the 'name' field is not empty
    if (empty($name)) {
        echo "<script>alert('Name field is empty');</script>";
    } else {
        // Check if an image is uploaded
        if (isset($_FILES["image"]) && $_FILES["image"]["error"] != 4) {
            $fileName = $_FILES["image"]["name"];
            $fileSize = $_FILES["image"]["size"];
            $tmpName = $_FILES["image"]["tmp_name"];

            $validImageExtension = ['jpg', 'jpeg', 'png'];
            $imageExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

            // Check if the image extension is valid
            if (!in_array($imageExtension, $validImageExtension)) {
                echo "<script>alert('Invalid Image Extension');</script>";
            } elseif ($fileSize > 1000000) {
                echo "<script>alert('Image Size Is Too Large');</script>";
            } else {
                $newImageName = uniqid() . '.' . $imageExtension;
                move_uploaded_file($tmpName, 'img/' . $newImageName);

                $query = "INSERT INTO tb_upload VALUES( '$name', '$newImageName', '$address', '$phoneNumber', '$paymentDetails')";
                mysqli_query($conn, $query);

                echo "
                    <script>
                        alert('Successfully Added');
                        document.location.href = 'lenderequip.php';
                    </script>
                ";
            }
        } else {
            // Handle the case where no image is uploaded
            echo "<script>alert('No image uploaded');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Upload Image File</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://media.licdn.com/dms/image/D4D12AQFPtcovjKXYsQ/article-cover_image-shrink_720_1280/0/1681365731967?e=2147483647&v=beta&t=B1UtgGrb24lQeMR4HBCAidRyN8ifzxPam-V1XZQQa08');
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: rgba(255, 255, 255, 0.8); /* Use rgba for transparency */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            width: 300px;
            text-align: center;
            margin-left: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }

        #imagePreview {
            margin-top: 10px;
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <form action="" method="post" autocomplete="off" enctype="multipart/form-data" onsubmit="return validateForm()">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required value=""><br>

        <label for="address">Address:</label>
        <input type="text" name="address" id="address" required><br>

        <label for="phoneNumber">Phone Number:</label>
        <input type="tel" name="phoneNumber" id="phoneNumber" required><br>

        <label for="paymentDetails">Payment Details:</label>
        <input type="text" name="paymentDetails" id="paymentDetails" required><br>

        <label for="image">Image:</label>
        <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png" onchange="previewImage()"><br>
        
        <img id="imagePreview" src="#" alt="Image Preview"><br><br>

        <button type="submit" name="submit">Submit</button>
    </form>

    <script>
        function previewImage() {
            var input = document.getElementById('image');
            var preview = document.getElementById('imagePreview');
            
            var file = input.files[0];
            var reader = new FileReader();

            reader.onloadend = function () {
                preview.src = reader.result;
            }

            if (file) {
                reader.readAsDataURL(file);
            } else {
                preview.src = "";
            }
        }

        function validateForm() {
            // You can add additional validation logic here if needed
            return true;
        }
    </script>
</body>
</html>
