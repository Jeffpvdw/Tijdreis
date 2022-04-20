<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mail 2 the end endgame</title>
</head>
<body style="background-color: #f3f4f6; font-family: sans-serif; padding: 70px 200px;">
<table style=" background-color: white; width: 100%; height: 100%; border: 3px rgba(192,192,192, 0.2) groove; padding: 20px;">
    <tr>
        <td style="text-align: center; font-size: 15px; padding-top: 15px;">
            <h1>Nieuw mail vanuit contactformulier</h1>
        </td>
    </tr>

    <tr>
        <td style="text-align: center; font-size: 15px; padding-top: 15px;">
            <h3>Naam:</h3>
            <!--Naam var's--> {{ $data['firstname'] }} {{ $data['lastname'] }}
        </td>
    </tr>

    <tr>
        <td style="text-align: center;">
            <h3>Email adres:</h3>
            {{ $data['email'] }}
        </td>
    <tr>

    <tr>
        <td style="text-align: center;">
            <h3>Telefoonnummer:</h3>
            {{ $data['phone'] }}
        </td>
    <tr>

    <tr>
        <td style="text-align: center;">
            <h3>Bericht:</h3>
            {{ $data['msg'] }}
        </td>
    </tr>

    <tr><td>&nbsp;</td></tr>
    <tr><td>&nbsp;</td></tr>
    <tr><td>&nbsp;</td></tr>

    <tr>
        <td style="text-align: center;">
            <p><em>Dit is verstuurd vanuit een contactformulier op de website van Tijdreis Hardenberg.</p>
        </td>
    </tr>
</table>
</body>
</html>