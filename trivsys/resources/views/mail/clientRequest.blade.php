<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ $subject }} </title>
</head>

<body>

    <h1> {{ $subject }} </h1>

    <p>Name : {{ $mailmessage['name'] }} </p>
    <p>Email : {{ $mailmessage['email'] }} </p>
    <p>Number : {{ $mailmessage['phone'] }} </p>
    <p>service : {{ $mailmessage['service'] }} </p>
    <p>Message : {{ $mailmessage['message'] }} </p>

</body>

</html>
