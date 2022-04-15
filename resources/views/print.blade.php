<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>printlijst</title>
</head>
<body>
    <form action="print" method="GET">
        <input type="text" name="tour_id" id="tour_id" placeholder="Vul een tour ID in">
        <input type="submit" id="submit">
        {{csrf_field()}}
    </form>
</body>
</html>
