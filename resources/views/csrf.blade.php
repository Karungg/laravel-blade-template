<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CSRF</title>
</head>

<body>
    <form action="/test" method="POST">
        @csrf
        <input type="text" name="name">
        <input type="submit" value="Send">
    </form>
</body>

</html>
