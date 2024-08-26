<?php
require 'config.php';
if(!empty($_SESSION["id"])){
    header("Location: index.php");
}
if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $confirmpassword=$_POST["confirmpassword"];
    $duplicate=mysqli_query($conn, "SELECT * FROM tb_user WHERE username='$username' OR email='$email'");
    if(mysqli_num_rows($duplicate)>0){
   echo
   "<script> alert ('Username or Email Has Already Taken'); </script>";
}


else{
if($password == $confirmpassword){
    $query = "INSERT INTO tb_user (name, username, email, password) VALUES ('$name', '$username', '$email', '$password')";

    mysqli_query($conn, $query);
    echo
   "<script> alert ('నమోదు విజయవంతమైంది'); </script>";
}
else{
    echo
    "<script> alert ('పాస్వర్డ్ సరిపోలడం లేదు'); </script>";

}


}
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url('https://images.nationalgeographic.org/image/upload/v1638892233/EducationHub/photos/crops-growing-in-thailand.jpg') center/cover no-repeat; /* Add your image URL */
        }

        .registration-container {
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
    
    <div class="registration-container">
        <h1>నమోదు</h1>
        <form action="" method="post" autocomplete="off">
            <label for="name">పేరు:</label>
            <input type="text" name="name" id="name" required value=""> <br>
            <label for="username">వినియోగదారు పేరు:</label>
            <input type="text" name="username" id="username" required value=""> <br>
            <label for="email">ఇమెయిల్:</label>
            <input type="text" name="email" id="email" required value=""> <br>
            <label for="password">పాస్వర్డ్:</label>
            <input type="password" name="password" id="password" required value=""> <br>
            <label for="confirmpassword">పాస్‌వర్డ్‌ని నిర్ధారించండి:</label>
            <input type="password" name="confirmpassword" id="confirmpassword" required value=""> <br>
            <button type="submit" name="submit">నమోదు చేసుకోండి</button>
        </form>
        <a href="login.php">ప్రవేశించండి</a>
        
    </div>
    


</body>

</html>
