@extends(backpack_view('blank'))

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/dead9ccdc0.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> 
    <script type="text/javascript">

        // Load the Visualization API and the corechart package.
        google.charts.load('current', {'packages': ['corechart']});

        // als pagina geladen voer functie uit
        google.charts.setOnLoadCallback(drawChart);

        // functie waar informatie gegeven word omgezet in een svg circel diagram
        function drawChart() {
            // dit is de eerste grafiek voor leeften en zo
            var data = new google.visualization.DataTable();

            // voer hier de kolommen in om te laten visualiseren
            data.addColumn('string', 'Leeftijd');
            data.addColumn('number', 'aantal');
            data.addRows([
                // informatie invoegen gaat als volgt ['(display naam)', (aantal, dit word door de api omgerekend naar procenten)]
                ['< 5', 7],
                ['5 - 15', 15],
                ['15 - 18', 12],
                ['18 - 50', 40],
                [' 50 >', 8]
            ]);

            // dit is waar je je grafiek een naam kan geven en opmaak kan bepalen
            var options = {
                chartArea: {
                    width: '50%'
                },
                'title': 'pecentage mensen per leeftijdsgroep',
                'width': '100%',
                'height': 400
            };

            // hier word naar een id gezocht in je bestand als dit id is gevonden word de grafiek daar in geladen als svg
            var chart = new google.visualization.PieChart(document.getElementById('leeftijden'));
            chart.draw(data, options);
            // dit is  het einde van de code voor een grafiek


            // dit is de eerste grafiek voor leeften en zo
            var data = new google.visualization.DataTable();

            // voer hier de kolommen in om te laten visualiseren
            data.addColumn('string', 'Leeftijd');
            data.addColumn('number', 'aantal');
            data.addRows([
                // informatie invoegen gaat als volgt ['(display naam)', (aantal, dit word door de api omgerekend naar procenten)]
                ['< 5', 1],
                ['5 - 15', 1],
                ['15 - 18', 1],
                [' 50 >', 1]
            ]);

            // dit is waar je je grafiek een naam kan geven en opmaak kan bepalen
            var options = {
                chartArea: {
                    width: '50%'
                },
                'title': 'dikke aids jij',
                'width': '100%',
                'height': 400
            };

            // hier word naar een id gezocht in je bestand als dit id is gevonden word de grafiek daar in geladen als svg
            var chart = new google.visualization.PieChart(document.getElementById('andere dinges'));
            let draw = chart.draw(data, options);
            // dit is  het einde van de code voor een grafiek
        }

    </script>
</head>
<body>
<h2 class="font-3xl">Statistieken</h2>
<div class="h-full min-h-screen flex">
    <!-- Bottom section -->
    <div class="min-h-0 flex-1 flex overflow-hidden">
        <!-- Main area -->
        <main class=" w-full md:w-auto flex-1 items-center border-t lg:flex ">
            <!-- Primary column -->
            <section aria-labelledby="primary-heading"
                     class="w-full md:w-auto justify-center content-start flex-1 h-full flex flex-col overflow-y-auto lg:order-last">
                <!-- Your content -->
                <div id="leeftijden" class="h-auto flex-initial w-auto"></div>
                <div id="andere dinges" class="h-auto flex-1 w-auto"></div>
            </section>
            <!-- Secondary column (hidden on smaller screens) -->
        </main>
    </div>
</div>
</body>
</html>
@endsection