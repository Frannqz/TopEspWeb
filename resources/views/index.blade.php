<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Sitio</title>
    <link rel="stylesheet" href="{{ asset('../css/styles.css') }}">
</head>

<body>

    @include('header')
    <br><br><br><br>
    <h2>Home</h2>
    {{ $welcome_msg }} <br>
    {{ $var2 }} <br>
    {{ $var3 }}
</body>

</html>
