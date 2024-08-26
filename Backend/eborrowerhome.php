<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipment Borrower Platform</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('https://marvel-b1-cdn.bc0a.com/f00000000083059/www.titanmachinery.com/images/default-source/heartland-landing-page-images/600x300_2023_content_images_heartland_resize_web9.jpg?sfvrsn=785dd3a3_4');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh; /* Ensures full viewport height */
            color: white;
            text-align: center;
            padding-top: 50px;
            position: relative;
        }

        h1 {
            color: #008000; /* Green color */
        }

        p {
            line-height: 1.5;
            color: black;
            font-weight: bold;
        }

        #selectEquipmentButton {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }

        #profileIcon {
            font-size: 32px;
            position: absolute;
            top: 10px;
            left: 10px;
            cursor: pointer;
        }

        #profileOptions {
            position: absolute;
            top: 50px;
            left: 10px;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 10px;
            border-radius: 5px;
            display: none;
            width: 150px;
            text-align: left;
        }

        #profileOptions a {
            display: block;
            color: #333;
            padding: 5px;
            text-decoration: none;
        }

        #profileOptions a:hover {
            background-color: #ddd;
        }

        #navLinks {
            position: absolute;
            top: 10px;
            right: 10px;
            display: flex;
            gap: 20px;
            font-size: 16px;
        }

        #navLinks a {
            color: white; /* Set the color to white */
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div id="profileIcon">&#128100;</div>

    <div id="profileOptions">
        <a href="#">Edit Profile</a>
        <a href="home.php">Logout</a>
    </div>

    <div id="navLinks">
        <a href="#">About Us</a>
        <a href="#">Contact Us</a>
    </div>

    <h1>Welcome to Our Equipment Borrower Platform</h1>

    <p>
        Our platform connects equipment borrowers with available machinery, facilitating smooth operations within the farming community.
    </p>

    <a href="blender.php" id="selectEquipmentButton">Click to Select Equipment</a>

    <script>
        document.getElementById('profileIcon').addEventListener('click', function () {
            var profileOptions = document.getElementById('profileOptions');
            profileOptions.style.display = (profileOptions.style.display === 'block') ? 'none' : 'block';
        });
    </script>

</body>

</html>
