<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: url('https://media.istockphoto.com/id/543212762/photo/tractor-cultivating-field-at-spring.jpg?s=612x612&w=0&k=20&c=uJDy7MECNZeHDKfUrLNeQuT7A1IqQe89lmLREhjIJYU=') no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
        }

        .options-container {
            text-align: center;
            background: rgba(255, 255, 255, 0.7);
            padding: 40px;
            border-radius: 20px;
            margin-left: 0;
        }

        .option {
            display: block;
            margin: 15px 0;
            padding: 20px;
            background-color: #4CAF50;
            color: #000;
            font-weight: bold;
            font-size: 24px;
            cursor: pointer;
            border-radius: 10px;
            transition: background-color 0.3s ease;
        }

        .option:hover {
            background-color: #45a049;
        }
    </style>
    <title>Options Page</title>
</head>
<body>
    <div class="options-container">
        <div class="option" onclick="selectOption('FARMER')">FARMER</div>
        <div class="option" onclick="selectOption('EMPLOYEE')">EMPLOYEE</div>
        <div class="option" onclick="selectOption('EQUIPMENT LENDER')">EQUIPMENT LENDER</div>
        <div class="option" onclick="selectOption('EQUIPMENT BORROWER')">EQUIPMENT BORROWER</div>
    </div>

    <script>
    function selectOption(option) {
        if (option === 'FARMER') {
            // Redirect to the Farmdetails page
            window.location.href = 'farmhome.php';
        } else if (option === 'EMPLOYEE') {
            // Redirect to the Employee home page
            window.location.href = 'employeehome.php';
        } else if (option === 'EQUIPMENT LENDER') {
            // Redirect to the Equipment Lender page
            window.location.href = 'elenderhome.php';
        } else if (option === 'EQUIPMENT BORROWER') {
            // Redirect to the Equipment Borrower page
            window.location.href = 'eborrowerhome.php';
        } else {
            // Handle unknown options or provide a default redirect
            console.error('Unknown option: ' + option);
            // You can redirect to a default page or display an error message
            // window.location.href = 'default.php';
        }
    }
</script>

</body>
</html>