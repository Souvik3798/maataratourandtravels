<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Email</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #fafafa;
            margin: 0;
            padding: 20px;
            color: #424242;
        }
        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            padding: 20px;
            margin: auto;
            max-width: 600px;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        h1 {
            color: #1976d2;
            border-bottom: 4px solid #1976d2;
            padding-bottom: 10px;
        }
        p {
            background-color: #e3f2fd;
            padding: 12px;
            border-radius: 4px;
            margin-top: 16px;
            display: flex;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0,0,0,0.15);
            transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s;
        }
        p:hover {
            background-color: #bbdefb;
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.25);
            cursor: pointer;
        }
        .material-icons {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>New Message From {{ $data['name'] }}</h1>
        <p><span class="material-icons">phone</span>{{ $data['phone'] }}</p>
        <p><span class="material-icons">email</span>{{ $data['email'] }}</p>
        <p><span class="material-icons">message</span>{{ $data['message'] }}</p>
    </div>
</body>
</html>
