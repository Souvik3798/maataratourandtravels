<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Email</title>
</head>
<body>
    <h1>New Message From {{ $data['name'] }}</h1>
    <p>{{ $data['phone'] }}</p>
    <p>{{ $data['email'] }}</p>
    <p>{{ $data['message'] }}</p>
</body>
</html>
