<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipment Lender Platform</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('https://dyimg77.exportersindia.com/blog_images/20201225175913.jpg');
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

        #enterDetailsButton {
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
            color: black; /* Changed color to black */
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div id="profileIcon">&#128100;</div>

    <div id="profileOptions">
        <a href="#">ప్రొఫైల్‌ని సవరించండి</a>
        <a href="home.php">లాగ్అవుట్</a>
    </div>

    <div id="navLinks">
        <a href="#">మా గురించి</a>
        <a href="#"> మమ్మల్ని సంప్రదించండి </a>
    </div>

    <h1>మా సామగ్రి రుణదాత ప్లాట్‌ఫారమ్‌కు స్వాగతం</h1>

    <p>
    మా ప్లాట్‌ఫారమ్ పరికరాలు రుణదాతలను అవసరమైన వ్యక్తులతో కలుపుతుంది, వ్యవసాయ కమ్యూనిటీలో వ్యవసాయ యంత్రాల సమర్థవంతమైన వినియోగాన్ని ప్రోత్సహిస్తుంది.
    </p>

    <a href="lenderequip.php" id="enterDetailsButton">వివరాలను నమోదు చేయడానికి క్లిక్ చేయండి</a>

    <script>
        document.getElementById('profileIcon').addEventListener('click', function () {
            var profileOptions = document.getElementById('profileOptions');
            profileOptions.style.display = (profileOptions.style.display === 'block') ? 'none' : 'block';
        });
    </script>

</body>

</html>