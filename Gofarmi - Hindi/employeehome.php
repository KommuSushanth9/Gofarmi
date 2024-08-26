<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employment Platform</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('https://media.istockphoto.com/id/503646746/photo/farmer-spreading-fertilizer-in-the-field-wheat.jpg?s=612x612&w=0&k=20&c=Lgxsjbz0jaYyQrvfzhyAsW2zELtshRP4AtLzkpmcLiE=');
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

        #findJobButton {
            display: none;
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
            color: black; /* Set the color to black */
            text-decoration: none;
        }

        #workOptions {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 50px;
        }

        .workOption {
            margin: 0 20px;
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div id="profileIcon">&#128100;</div>

    <div id="profileOptions">
        <a href="#">प्रोफ़ाइल संपादित करें</a>
        <a href="home.php">लॉग आउट</a>
    </div>

    <div id="navLinks">
        <a href="#">हमारे बारे में</a>
        <a href="#">संपर्क करें</a>
    </div>

    <h1>हमारे रोजगार मंच में आपका स्वागत है</h1>

    <p>
    हमारा मंच नौकरी चाहने वालों को कृषि समुदायों में रोजगार के अवसरों से जोड़ता है, कृषि क्षेत्र के भीतर सहयोग और समर्थन को बढ़ावा देता है।
    </p>

    <div id="workOptions">
        <a href="displayfree_fd.php" class="workOption">मुफ्त काम</a>
        <a href="display_fd.php" class="workOption">भुगतान कार्य</a>
    </div>

    <script>
        
        document.getElementById('profileIcon').addEventListener('click', function () {
            var profileOptions = document.getElementById('profileOptions');
            profileOptions.style.display = (profileOptions.style.display === 'block') ? 'none' : 'block';
        });
    </script>

</body>

</html>