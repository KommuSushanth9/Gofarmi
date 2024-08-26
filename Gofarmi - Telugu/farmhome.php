<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmers Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('https://t3.ftcdn.net/jpg/03/40/70/04/360_F_340700428_AquH6hbzeMOYLQ6g6kfWAMuUvfw60Zd1.jpg');
            background-size: cover;
            background-position: center 20%; /* Move the image up a bit */
            color: white;
            text-align: center;
            padding-top: 50px;
            position: relative;
        }

        h1 {
            color: green;
        }

        p {
            line-height: 1.5;
            color: black;
            font-weight: bold; /* Set the font-weight to bold */
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
            color: black; /* Set the color to black */
            padding: 5px;
            text-decoration: none;
            font-weight: bold; /* Set the font-weight to bold */
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
    </style>
</head>

<body>

    <div id="navLinks">
        <a href="#">మా గురించి</a>
        <a href="#">మమ్మల్ని సంప్రదించండి</a>
    </div>

    <div id="profileIcon">&#128100;</div>

    <div id="profileOptions">
        <a href="#">ప్రొఫైల్‌ని సవరించండి</a>
        <a href="home.php">లాగ్అవుట్</a>
    </div>

    <h1>మా రైతు సంఘానికి స్వాగతం</h1>

    <p>
    మా ప్లాట్‌ఫారమ్ రైతులను వారి పొరుగున ఉన్న సంభావ్య ఉద్యోగులతో కనెక్ట్ చేయడానికి, వ్యవసాయ సంఘంలో సహకారాన్ని మరియు మద్దతును పెంపొందించడానికి అంకితం చేయబడింది.
    </p>

   
    <a href="Farmdetails.php" id="enterDetailsButton"><b> వివరాలను నమోదు చేయడానికి క్లిక్ చేయండి </b></a>
    <script>
        document.getElementById('profileIcon').addEventListener('click', function () {
            var profileOptions = document.getElementById('profileOptions');
            profileOptions.style.display = (profileOptions.style.display === 'block') ? 'none' : 'block';
        });
    </script>

</body>

</html>