<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    
<form method="post" action="{{ route('confirmOrder') }}">
        @csrf
        <input type="text" name="firstname" placeholder="Voornaam">
        <input type="text" name="lastname" placeholder="Achternaam">
        <input type="email" name="email" placeholder="Email">
        <input type="text" name="location" placeholder="Locatie">
        <input type="text" name="date" placeholder="Datum en Tijd">
        <input type="submit" name="button" value="Submit">
    </form>
</body>
</html>