<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('create') }}" method="post">
        @csrf
        <input type="text" name="name">
        <input type="text" name="description">
        <input type="date" name="date-debut">
        <input type="date" name="date-fin">

        <button name='submite'>submite</button>
    </form>

    <p>{{ $totalprojects }}</p>
</body>
</html>