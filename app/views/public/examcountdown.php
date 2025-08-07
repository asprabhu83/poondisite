<?php
$targetDate = "2025-06-02 09:30:00";
$targetTimestamp = strtotime($targetDate);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Exam Results Countdown</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #eef1f5;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .countdown-box {
            background: #fff;
            padding: 40px 60px;
            border-radius: 16px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            text-align: center;
        }
        .countdown-box h2 {
            color: #2c3e50;
            margin-bottom: 25px;
        }
        #countdown {
            font-size: 32px;
            color: #e74c3c;
            font-weight: bold;
        }
        #result-link {
            display: none;
            margin-top: 20px;
        }
        #result-link a {
            text-decoration: none;
            font-size: 20px;
            color: #ffffff;
            background-color: #27ae60;
            padding: 10px 20px;
            border-radius: 8px;
            transition: background-color 0.3s;
        }
        #result-link a:hover {
            background-color: #219150;
        }
    </style>
</head>
<body>

<div class="countdown-box">
    <h2>Countdown to Exam Results</h2>
    <div id="countdown">Loading...</div>
    <div id="result-link">
        🎉 Results are now published!<br><br>
        <a href="results-page.php">Click here to view the results</a>
    </div>
</div>

<script>
    var targetDate = new Date(<?php echo $targetTimestamp * 1000; ?>);

    var countdown = setInterval(function () {
        var now = new Date().getTime();
        var distance = targetDate - now;

        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        if (distance >= 0) {
            document.getElementById("countdown").innerHTML =
                days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
        } else {
            clearInterval(countdown);
            document.getElementById("countdown").style.display = "none";
            document.getElementById("result-link").style.display = "block";
        }
    }, 1000);
</script>

</body>
</html>
