@include('layouts.head')

@include('layouts.header')

<main style="min-height: calc(100vh - 600px);" class="relative py-16 bg-white overflow-hidden">
    <div class="hidden lg:block lg:absolute lg:inset-y-0 lg:h-full lg:w-full">
        <div class="relative h-full text-lg max-w-prose mx-auto" aria-hidden="true">
            <svg class="absolute top-12 left-full transform translate-x-32" width="404" height="384" fill="none"
                 viewBox="0 0 404 384">
                <defs>
                    <pattern id="74b3fd99-0a6f-4271-bef2-e80eeafdf357" x="0" y="0" width="20" height="20"
                             patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"/>
                    </pattern>
                </defs>
                <rect width="404" height="384" fill="url(#74b3fd99-0a6f-4271-bef2-e80eeafdf357)"/>
            </svg>
            <svg class="absolute top-1/2 right-full transform -translate-y-1/2 -translate-x-32" width="404" height="384"
                 fill="none" viewBox="0 0 404 384">
                <defs>
                    <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20" height="20"
                             patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"/>
                    </pattern>
                </defs>
                <rect width="404" height="384" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)"/>
            </svg>
            <svg class="absolute bottom-12 left-full transform translate-x-32" width="404" height="384" fill="none"
                 viewBox="0 0 404 384">
                <defs>
                    <pattern id="d3eb07ae-5182-43e6-857d-35c643af9034" x="0" y="0" width="20" height="20"
                             patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"/>
                    </pattern>
                </defs>
                <rect width="404" height="384" fill="url(#d3eb07ae-5182-43e6-857d-35c643af9034)"/>
            </svg>
        </div>
    </div>
    <div class="relative px-4 lg:w-8/12 sm:w-5/6 m-auto sm:px-6 lg:px-8">
        <div class="text-lg max-w-prose mx-auto">
            <h1>
                <span
                    class="mt-2 block text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">De tour</span>
            </h1>
            <p class="mt-4 text-lg text-gray-500">Er is een bekende en wijze uitspraak die zegt:</p>
            <blockquote class="mt-4 text-lg text-center text-gray-500">“Je moet het <u>verleden</u>
                kennen om het
                <u>heden</u> te begrijpen,
                en om er voor de <u>toekomst</u> van te leren”.
            </blockquote>
            <p class="mt-4 text-lg text-gray-500">Dat wil de Historische Vereniging Hardenberg e.o. op
                een nieuwe manier in de praktijk
                brengen door middel van thematische Tijdreizen. Het zijn interessante excursies langs
                bijzondere locaties met daarbij geschiedkundige informatie en mooie verhalen. Hierdoor
                krijgt een deelnemer een goed beeld van de geschiedenis rond het betreffende thema. En
                waar mogelijk wordt er ook vooruit gekeken in de tijd: Wat doen we met de ervaringen uit
                het verleden? </p>
        </div>
        <div class="sm:grid">
            <div class="block justify-center flex flex-wrap pb-4 mt-5">
                <img class="w-80 lg:ml-10 pb-4" src="images/Happypeople.jpg" alt="" width="450" height="250">
                <img class="w-80 lg:ml-10 pb-4" src="images/hardenberg.jpg" alt="" width="450" height="250">
                <img class="w-80 lg:ml-10 pb-4" src="images/windmill2.jpg" alt="" width="450" height="250">
            </div>
        </div>
    </div>
</main>

@include('layouts.footer')
