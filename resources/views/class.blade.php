<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Class</title>

    <style>
        .red {
            color: red;
        }

        .bold {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <ul>
        @foreach ($hobbies as $hobby)
            <li @class(['red', 'bold' => $hobby['love']])>{{ $hobby['name'] }}</li>
        @endforeach
    </ul>
</body>

</html>
