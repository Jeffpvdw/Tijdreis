<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
<a href="{{ backpack_url('dashboard') }}" class="absolute mt-2 ml-4 rounded bg-[#5b9e8c] hover:bg-[#3e8270] hover:shadow-md p-2 border-2 m-auto text-white font-semibold text-center">terug naar dashboard</a>
<div class=" w-full text-center my-4 ">
    <form action="print" method="GET" class="w-full m-auto text-center">
        <input type="text" name="tour_id" id="tour_id" placeholder="Vul een tour ID in"
               class="shadow-xl border border-neutral-200 rounded-lg text-center">
        <div class="w-3/6 m-auto flex content-center mt-2">
            <select name="tour_id" id="tour_id"
                    class=" bg-white py-3 px-4 block w-4/6 m-auto shadow-md focus:ring-indigo-500 focus:border-indigo-500 border-gray-500 rounded-md">
                <option value=""selected hidden>kies de reis die u wilt printen</option>
                <option>test woorden voor jelle</option>
                <option>meer test woorden voor jelle</option>
                <option>jelle</option>
                <option>bingus</option>
            </select>
            <input type="submit" id="submit" class=" m-auto cursor-pointer rounded bg-[#5b9e8c] hover:bg-[#3e8270] hover:shadow-md p-1 border-1 m-auto text-white font-semibold  " value="haal lijst op">
        </div>
        {{csrf_field()}}
    </form>
    <button id='print' class="rounded bg-[#5b9e8c] hover:bg-[#3e8270] hover:shadow-md p-2 border-2 mt-4 m-auto text-white font-semibold text-center">
        Print deze pagina
    </button>
</div>
<div id="PrintContent" class="w-11/12 text-center m-auto">
    <table class="h-fit w-full border-collapse border border-slate-400 table-fixed">
        <thead>
        <tr class="border-b-4 border-black">
            <th class="border border-slate-300 bg-gray-200 h-12">Voornaam</th>
            <th class="border border-slate-300 bg-gray-200">Tussenvoegsel</th>
            <th class="border border-slate-300 bg-gray-200">Achternaam</th>
            <th class="border border-slate-300 bg-gray-200">Geboortedatum</th>
            <th class="border border-slate-300 bg-gray-200">Postcode</th>
            <th class="border border-slate-300 bg-gray-200">Commentaar</th>
        </tr>
        </thead>
        <tbody>
        <tr class="border-b-4 border-black">
            {{--                        @foreach ($tour as $item)--}}
            <td class="text-center border border-slate-300">Jan</td>
            <td class="text-center border border-slate-300">De</td>
            <td class="text-center border border-slate-300">Vries</td>
            <td class="text-center border border-slate-300">Gisteren</td>
            <td class="text-center border border-slate-300">1234 AB</td>
            <td class="text-center border border-slate-300">Help ik heb een zware noten allergie en ik gebruik een
                rollator om te lopen.
            </td>
        </tr>
        {{--                        @endforeach--}}
        </tbody>
    </table>
</div>
<div class="w-full text-center">

    {{--        @else--}}
    <h1>Er is geen tour ID ingevuld</h1>
    {{--        @endif--}}
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.print/1.6.2/jQuery.print.min.js"
        integrity="sha512-t3XNbzH2GEXeT9juLjifw/5ejswnjWWMMDxsdCg4+MmvrM+MwqGhxlWeFJ53xN/SBHPDnW0gXYvBx/afZZfGMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $("#print").click(function () {
        var divContents = document.getElementById("PrintContent").innerHTML;
        var a = window.open('', '');
        a.document.write('<html>');
        a.document.write('<head>');
        a.document.write('<script src="https://cdn.tailwindcss.com"></script');
        a.document.write('>');
        a.document.write('<title>printlijst</title>');
        a.document.write('</head>');
        a.document.write('<body>');
        a.document.write(divContents);
        a.document.write('</body></html>');
        setTimeout(function () {
            a.print();
            a.close();
        }, 100);
    });
</script>
</body>
</html>
