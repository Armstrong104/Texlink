<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Mail</title>
</head>

<body>
    <h3>Name: {{ $mailData['name'] }}</h3>
    <h3>Phone: {{ $mailData['phone'] }}</h3>
    <h3>Message: {{ $mailData['message'] }}</h3>
    <p>Thank You from </p>
    <p>{{ $mailData['name'] }}</p>
</body>

</html>
