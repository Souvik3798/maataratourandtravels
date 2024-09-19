<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Pending</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .loader {
            width: 200px;
            height: 200px;
            margin: 0 auto 30px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="loader">
            <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_ysrn2iwp.json" background="transparent"
                speed="1" loop autoplay></lottie-player>
        </div>
        <h1>Payment Pending</h1>
        <p>Please Pay Your Payment</p>
    </div>
</body>

</html>
