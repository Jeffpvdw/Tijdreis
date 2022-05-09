<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mail 2 the end endgame</title>
</head>
<body style="background-color: #f3f4f6; font-family: sans-serif; padding: 70px 200px;">
<table cellpadding: 0; cellspacing: 0; align="center" style=" table-layout: fixed; background-color: white; border: 3px rgba(192,192,192, 0.2) groove; padding: 20px;">
    <tr style="">
        <td>
            <table style="background-color: white; max-width: 550px;">
                <tr>
                    <td style="text-align: center; font-size: 15px; padding-top: 15px;">
                        <b>Geachte heer/mevrouw, <span id="LastName"> {{ $data['lastname'] }} </span></b>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                        <p>Bedankt voor uw deelname aan Tijdreis-Hardenberg, hierbij de informatie voor de door u
                            gekozen
                            datum en tijd.
                            Als u nog meer informatie wil over Tijdreis-Hardenberg bezoek dan nog eens onze <a href="">website(linkt
                                thema pagina)</a>, En als u nog vragen heeft
                            waar u geen informatie over kunt vinden neem alst u blieft contact met</p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                        <h3>Datum, tijd en locatie:</h4>
                        <p>{{ $data['tour'] }}</p>
                    </td>
                </tr>

                <tr>
                    <td style="text-align: center;">
                        <h3>Door u ingevoerde contactgegevens:</h4>
                        <p>{{ $data['email'] }}</p>
                        <p>{{ $data['phone'] }}</p>
                    </td>
                </tr>

                <tr>
                    <td style="text-align: center;">
                        <h3>Totaalprijs:</h4>
                        <p>{{ $data['price'] }}</p>
                    </td>
                </tr>

                <tr>
                    <td style="text-align: center;">
                        <p> Als u ons verder wil ondersteunen kunt u
                            <a href="https://www.hvhardenberg.nl/lidmaatschap/">hier</a>
                            lid worden. Ook kunt u
                            <a href="https://www.hvhardenberg.nl/lidmaatschap/">hier</a>
                            meer informatie vinden over wat ons ondersteunen bedraagt.
                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                        <b>Met vriendelijke groet</b>
                        <p>Historische vereniging Hardenberg</p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                        <p>
                            Wilhelminaplein 3a,<br>
                            7772 AH Hardenberg
                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                        <p>
                            <img src="https://www.tijdreis-hardenberg.nl/logo.jpg" alt="logo tijdreis Hardenberg">
                        </p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>