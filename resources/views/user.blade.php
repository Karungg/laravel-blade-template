<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
</head>
@once
    <style>
        .red {
            color: red;
        }
    </style>
@endonce

<body>
    <h1>{{ $user['name'] }}</h1>
    <ul>
        @foreach ($user['hobbies'] as $hobby)
            <li class="red">{{ $hobby }}</li>
        @endforeach
    </ul>
</body>

</html>
