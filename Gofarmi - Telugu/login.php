<?php
require 'config.php';

// Check if a session is not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!empty($_SESSION["id"])) {
    header("Location: index.php");
    exit(); // Ensure the script stops executing after redirection
}

if (isset($_POST["submit"])) {
    $usernameemail = $_POST["usernameemail"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username='$usernameemail' OR email ='$usernameemail'");
    $row = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) > 0) {
        if ($password == $row["password"]) {
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location: selection.php");
            exit(); // Ensure the script stops executing after redirection
        } else {
            echo "<script> alert ('Wrong password'); </script>";
        }
    } else {
        echo "<script> alert ('User Not Registered'); </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url('https://img.freepik.com/free-photo/sunny-meadow-landscape_1112-134.jpg?size=626&ext=jpg&ga=GA1.1.632798143.1705363200&semt=ais') center/cover no-repeat; /* Add your image URL */
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            width: 300px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #45a049;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 10px;
            text-decoration: none;
            color: #333;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h1>ప్రవేశించండి</h1>
        <form action="" method="post" autocomplete="off">
            <label for="usernameemail">వాడుకపేరు లేదా ఈమెయిల్:</label>
            <input type="text" name="usernameemail" id="usernameemail" required value=""> <br>
            <label for="password">పాస్వర్డ్:</label>
            <input type="password" name="password" id="password" required value=""> <br>
            <button type="submit" name="submit">Login</button>
        </form>
        <br>
        <a href="registration.php">నమోదు చేసుకోండి</a>
    </div>
   <!-- Google Translate script -->


</body>

</html>


