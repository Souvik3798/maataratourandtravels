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
            height: 100vh;
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
            padding: 40px;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        }

        h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        p {
            font-size: 1.5rem;
            margin-bottom: 30px;
            font-weight: bold;
        }

        .loader {
            width: 200px;
            height: 200px;
            margin: 0 auto 30px;
        }

        .icons {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .icons i {
            margin: 0 10px;
            animation: shake 0.82s cubic-bezier(.36,.07,.19,.97) both infinite;
        }

        @keyframes shake {
            10%, 90% { transform: translate3d(-1px, 0, 0); }
            20%, 80% { transform: translate3d(2px, 0, 0); }
            30%, 50%, 70% { transform: translate3d(-4px, 0, 0); }
            40%, 60% { transform: translate3d(4px, 0, 0); }
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
        <p>Hey, Freeloader! Pay Up or Get Lost!</p>
    </div>
</body>

</html>
