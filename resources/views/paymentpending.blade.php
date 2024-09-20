<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Pending - Pay Up!</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #ff4d4d 0%, #ff9999 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #ffffff;
        }

        .container {
            text-align: center;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            width: 90%;
            max-width: 500px;
        }

        h1 {
            font-size: 2rem;
            margin-bottom: 15px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        p {
            font-size: 1.2rem;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .loader {
            width: 150px;
            height: 150px;
            margin: 0 auto 20px;
        }

        .icons {
            font-size: 2rem;
            margin-bottom: 15px;
        }

        .icons i {
            margin: 0 8px;
            animation: shake 0.82s cubic-bezier(.36, .07, .19, .97) both infinite;
        }

        @keyframes shake {

            10%,
            90% {
                transform: translate3d(-1px, 0, 0);
            }

            20%,
            80% {
                transform: translate3d(2px, 0, 0);
            }

            30%,
            50%,
            70% {
                transform: translate3d(-4px, 0, 0);
            }

            40%,
            60% {
                transform: translate3d(4px, 0, 0);
            }
        }

        .amount-paid {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #ffffff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .countdown {
            font-size: 1.2rem;
            margin-bottom: 15px;
        }

        .countdown span {
            display: inline-block;
            padding: 8px;
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 8px;
            margin: 0 3px;
            min-width: 40px;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }
        }

        .countdown span {
            animation: pulse 1s infinite;
        }

        @media (max-width: 480px) {
            h1 {
                font-size: 1.5rem;
            }

            p {
                font-size: 1rem;
            }

            .icons {
                font-size: 1.5rem;
            }

            .amount-paid {
                font-size: 1.2rem;
            }

            .countdown {
                font-size: 1rem;
            }

            .countdown span {
                padding: 6px;
                min-width: 30px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="loader">
            <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_ysrn2iwp.json" background="transparent"
                speed="1" loop autoplay></lottie-player>
        </div>
        <div class="icons">
            <i class="fas fa-rupee-sign"></i>
            <i class="fas fa-money-bill-wave"></i>
            <i class="fas fa-coins"></i>
        </div>
        <h1>Payment Pending, Cheapskate!</h1>
        <p>Hey, Freeloader! Pay Up!</p>
        <div class="amount-paid">₹.0/- paid till now</div>
        <div class="countdown">
            <span id="days">00</span> days
            <span id="hours">00</span> hours
            <span id="minutes">00</span> minutes
            <span id="seconds">00</span> seconds
        </div>
    </div>

    <script>
        // Set the date we're counting down from (12 Aug 2024 11:59 AM)
        const countFromDate = new Date("2024-08-12T11:59:00").getTime();

        // Update the count up every 1 second
        const x = setInterval(function() {
            // Get current date and time
            const now = new Date().getTime();

            // Find the distance between now and the count from date
            const distance = now - countFromDate;

            // Time calculations for days, hours, minutes and seconds
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result
            document.getElementById("days").innerHTML = Math.abs(days).toString().padStart(2, '0');
            document.getElementById("hours").innerHTML = hours.toString().padStart(2, '0');
            document.getElementById("minutes").innerHTML = minutes.toString().padStart(2, '0');
            document.getElementById("seconds").innerHTML = seconds.toString().padStart(2, '0');
        }, 1000);
    </script>
</body>

</html>
