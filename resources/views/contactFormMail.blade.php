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
            <!--Naam var's--> {{ $data['name'] }}
        </td>
    </tr>

    <tr>
        <td style="text-align: center;">
            {{ $data['email'] }}
        </td>
    <tr>

    <tr>
        <td style="text-align: center;">
            {{ $data['subject'] }}
        </td>
    <tr>

    <tr>
        <td style="text-align: center;">
            {{ $data['msg'] }}
        </td>
    </tr>

    <tr>
        <td style="text-align: center;">
            <p>This mail has been sent from a contact form on your website.</p>
        </td>
    </tr>
</table>
</body>
</html>