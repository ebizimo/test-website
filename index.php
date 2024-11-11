<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our CBT App</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ADD8E6;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h1 {
            font-size: 50px;
            /* Adjust font size */
            color: #333;
            /* Darker text color */
            font-weight: bold;
            /* Make text bold */
            margin: 0;
            /* No margin on top or bottom */
            letter-spacing: 2px;
            /* Increase letter spacing */
            text-transform: uppercase;
            /* Make the text uppercase */
            text-align: center;
        }

        .container {
            max-width: 800px;
            background: white;
            padding: 150px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            color: white;
            background-color: green;
            text-decoration: none;
            border-radius: 5px;
            margin: 10px 0;

        }

        p {
            text-align: center;
            font-weight: bold;
            font-size: 35;
        }

        .download-btn {
            position: absolute;
            bottom: 100px;
            left: 50%;
            transform: translateX(-50%);
        }

        /* Navigation bar styles */
        .navbar {
            width: 100%;
            background-color: #333;
            overflow: hidden;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
        }

        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
            font-size: 17px;
        }

        .navbar a:hover {
            background-color: #575757;
        }

        .navbar a.active {
            background-color: #04AA6D;
        }

        .container {
            margin-top: 60px;
            /* Adjust to avoid overlap with the navbar */
        }
    </style>
</head>

<body>
    <!-- Navigation bar -->
    <div class="navbar">
        <a href="index.php" class="active">Home</a>
        <a href="download.php">Downloads</a>
        <a href="subscription.php">Buy OSCE Activation Pin</a>
        <a href="video.php">Tutorial Video</a>
        <a href="installation.php">Installation Guide</a>
        <a href="subscription.php">How To Use The App</a>
        <a href="about.html">About Us</a>
    </div>

    <div class="container">
        <h1>CBT OSCE</h1>
        <p>OSCE Exam Application for all Nursing Training Institutions in Nigeria</p>
        <p><a href="subscription.php" class="button">Buy OSCE Activation Pin</a></p>

    </div>
</body>

</html>