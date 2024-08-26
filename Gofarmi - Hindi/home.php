<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoFarmi - Home</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
        }
         
        header {
            background-color: #4CAF50;
            color: #ffffff;
            padding: 15px;
            text-align: center;
        }

        .hero-section {
            background-image: url('https://assets.corteva.com/is/image/Corteva/IMG-Contour_Farming_1_4529x3000-Global?$image_desktop$');
            background-size: cover;
            background-position: center;
            color: #ffffff;
            text-align: center;
            padding: 100px;
        }

        .cta-section {
            background-color: #ffffff;
            padding: 50px;
            text-align: center;
            border-bottom: 1px solid #ddd; /* Add a subtle border between sections */
        }

        .cta-button {
            background-color: #4CAF50;
            color: #ffffff;
            padding: 15px 30px;
            font-size: 16px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease; /* Smooth transition on hover */
        }

        .cta-button:hover {
            background-color: #45a049; /* Darker shade on hover */
        }

        /* Add more styling as needed */
    </style>
</head>
<body>
    <header>
        <h1>गोफार्मी</h1>
        <p>किसानों, उत्साही और मजदूरों को जोड़ना</p>
        <!-- Dropdown menu for language selection -->
        <select id="language-select">
            <option value="en">English</option>
            <option value="te">Telugu</option>
            <option value="hi">Hindi</option>
            <!-- Add more language options as needed -->
        </select>
    </header>

    <div class="hero-section">
        <h2><b>गोफार्मी में आपका स्वागत है</b></h2>
        <p>समुदाय को विकसित करने और कृषि में एक साथ बढ़ने के लिए आपका ऑनलाइन मंच।</p>
    </div>

    <div class="cta-section">
        <h2>आज ही शामिल हों!</h2>
        <p>अपने स्थानीय कृषक समुदाय से जुड़ें, ऑन-डिमांड श्रमिक ढूंढें और संसाधन साझाकरण का पता लगाएं।</p>
        <br>
        <a href="login.php" id="get-started-button" class="cta-button">शुरू हो जाओ</a>
    </div>

    <!-- JavaScript for language switching -->
    <script>
        document.getElementById('language-select').addEventListener('change', function() {
            var language = this.value;
            if (language === 'te') {
                // Redirect to Telugu content page
                window.location.href = 'Gofarmi%20-%20Telugu/home.php';
            } else if (language === 'hi') {
                // Redirect to Hindi content page
                window.location.href = 'Gofarmi%20-%20Hindi/home.php';
            } else {
                // Redirect to the same page with the selected language as a query parameter
                window.location.href = window.location.pathname + '?lang=' + language;
            }
        });
    </script>
</body>
</html>
