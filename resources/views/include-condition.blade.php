<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inlude Condition</title>
</head>

<body>
    @includeWhen($user['owner'], 'header-admin');
    <p>Selamat datang {{ $user['name'] }}</p>
</body>

</html>
