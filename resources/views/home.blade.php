<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>
    <header>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('members') }}">Members</a></li>
        </ul>
    </header>
    <main>
        <h1>HelloWord</h1>
        <h3>This is class{{ $classNumber }} and I'm {{ $studentName }}</h3>
    </main>
</body>

</html>