    <?php
    include("b_fd.php");
    ?>
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Farm Details Form</title>

        <style>
            body {
                background-image: url('https://www.theindiaforum.in/sites/default/files/field/image/2022/06/21/ramkumar-radhakrishnan-wikimedia-1622193304-1622193304.jpeg');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                margin: 0;
                padding: 0;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 100vh;
            }

            h2 {
                text-align: center;
                color: #fff; /* White color for the heading */
                font-weight: bold; /* Make the heading bold */
            }

            form {
                background-color: rgba(255, 255, 255, 0.8);
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                max-width: 400px;
                width: 100%;
            }

            label {
                display: block;
                margin-top: 10px;
                color: #333; /* Set color for labels */
            }

            input,
            select {
                width: 100%;
                padding: 8px;
                margin-top: 5px;
                margin-bottom: 10px;
                box-sizing: border-box;
                border: 1px solid #ccc;
                border-radius: 4px;
            }

            input[type="submit"] {
                background-color: #4caf50;
                color: white;
                cursor: pointer;
                font-weight: bold; /* Make the submit button text bold */
            }

            input[type="submit"]:hover {
                background-color: #45a049;
            }
        </style>
    </head>
    <body>

        <h2>Farm Details Form</h2>

        <form action="b_fd.php" method="post">
            <!-- Crop Name -->
            <label for="cropName">Crop Name:</label>
            <input type="text" id="cropName" name="cropName" required><br>

            <!-- Type of Work -->
            <label for="workType">Type of Work:</label>
            <input type="text" id="workType" name="workType" required><br>

            <!-- Work Type (Paid or Free) -->
<label for="workCategory">Work Category:</label>
<select id="workCategory" name="workCategory" required>
    <option value="paid">Paid Work</option>
    <option value="free">Free Work</option>
</select><br>

            <!-- Phone Number -->
            <!-- Phone Number -->
<label for="phoneNumber">Phone Number:</label>
<input type="text" id="phoneNumber" name="phoneNumber"  required>

            <!-- Address -->
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required><br>

            <!-- Payment Details -->
            <label for="paymentDetails">Payment Details:</label>
            <input type="text" id="paymentDetails" name="paymentDetails" required><br>

            <!-- Submit Button -->
            <input type="submit" name="submit" value="Submit">
            
            
        </form>

    </body>
    </html>







