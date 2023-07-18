<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>

<body>
    <form action="">
        <input type="checkbox" @checked($user['premium']) value="premium"><br>
        <input type="text" value="{{ $user['name'] }}" @readonly(!$user['admin'])><br>
    </form>
</body>

</html>
