<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
    <form action="print" method="GET">
        <input type="text" name="tour_id" id="tour_id" placeholder="Vul een tour ID in">
        <input type="submit" id="submit">
        {{csrf_field()}}
    </form>
        @if (isset($tour))
        <div id="PrintContent" class="w-[200mm] h-[287mm] text-center">
            <table class="h-fit w-full border-collapse border border-slate-400 table-fixed">
                <thead>
                <tr>
                    <th class="border border-slate-300 bg-gray-200 h-12">Voornaam</th>
                    <th class="border border-slate-300 bg-gray-200">Tussenvoegsel</th>
                    <th class="border border-slate-300 bg-gray-200">Achternaam</th>
                    <th class="border border-slate-300 bg-gray-200">Geboortedatum</th>
                    <th class="border border-slate-300 bg-gray-200">Postcode</th>
                    <th class="border border-slate-300 bg-gray-200">Commentaar</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($tour as $item)
                            <td class="text-center border border-slate-300">{{$item->firstname}}</td>
                            <td class="text-center border border-slate-300">{{$item->preposition}}</td>
                            <td class="text-center border border-slate-300">{{$item->lastname}}</td>
                            <td class="text-center border border-slate-300">{{$item->birthdate}}</td>
                            <td class="text-center border border-slate-300">{{$item->zipcode}}</td>
                            <td class="text-center border border-slate-300">{{$item->comment}}</td>
                        </tr>
                        @endforeach
                </tbody>                
                </table>
                <button id='print'>Print deze pagina</button>
            </div>
        @else
            <h1>Er is geen tour ID ingevuld</h1>
        @endif

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.print/1.6.2/jQuery.print.min.js"
        integrity="sha512-t3XNbzH2GEXeT9juLjifw/5ejswnjWWMMDxsdCg4+MmvrM+MwqGhxlWeFJ53xN/SBHPDnW0gXYvBx/afZZfGMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $( "#print" ).click(function() {
        window.print();
});
</script>
</body>
</html>