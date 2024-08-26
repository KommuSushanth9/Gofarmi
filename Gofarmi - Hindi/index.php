<?php
require 'config.php';
if(!empty($_SESSION["id"])){
    $id=$_SESSION["id"];
    $result=mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
    $row=mysqli_fetch_assoc($result);
}
else{
header("Location:login.php");
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
   
    <title> Index</title>
</head>
<body>
    <h1>धन्यवाद, पुनः पधारें <?php echo $row["name"]; ?></h1>
    <a href="logout1.php"> लॉग आउट </a>
</body>
</html> 