@include('layouts.head')

@include('layouts.header')

<main>
    <!-- Hero section -->
    <div class="relative">
        <div class="absolute inset-x-0 bottom-0 h-1/2 bg-gray-100"></div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="relative shadow-xl sm:rounded-2xl sm:overflow-hidden">
                <div class="absolute inset-0">
                    <img class="h-full w-full object-cover" src="/images/Bord.jpg" alt="People working on laptops">
                    <div class="absolute inset-0 bg-gradient-to-r bg-[#3f5062] to-indigo-700 mix-blend-multiply"></div>
                </div>
                <div class="relative px-4 py-16 sm:px-6 sm:py-24 lg:py-32 lg:px-8">
                    <h1 class="text-center text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">
                        <span class="text-6xl block text-white">Welkom bij Tijdreis-Hardenberg!</span>
                    </h1>
                    <p class="mt-6 max-w-lg mx-auto text-center text-xl text-indigo-200 sm:max-w-3xl">
                        Hier is het vertrekpunt voor een afwisselende reis door de tijd. Jong en oud gaan op stap door
                        <b>verleden</b>, <b>heden</b> en <b>toekomst</b>. <br>
                        De geschiedenis komt tot leven! Want tijdens de trip zien en horen we historische ontwikkelingen
                        in Hardenberg en omgeving. Maar we werpen óók een blik in de toekomst! Het thema is dit jaar:
                        ENERGIE.
                    </p>
                    <div class="mt-10 max-w-sm mx-auto sm:max-w-none sm:flex sm:justify-center">
                        <div class="space-y-4 sm:space-y-0 sm:mx-auto sm:inline-grid sm:grid-cols-2 sm:gap-5">
                            <a href="/bestel"
                               class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-grey-500 bg-white hover:bg-indigo-50 sm:px-8 italic">
                                Lees verder... </a>
                            <a href="/thema"
                               class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-[#5b9e8c] hover:bg-opacity-70 sm:px-8 italic">
                                ...of boek direct een tijdreis </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Logo Cloud -->
    <div class="bg-gray-100">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <div class="mt-6 flex justify-evenly">
                <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                    <a href="https://www.facebook.com/TijdreisHardenberg" target="_blank">
                        <i class="fa-brands fa-4x fa-facebook opacity-80 text-[#3b5998] hover:opacity-80 lg:opacity-40"></i>
                    </a>
                </div>
                <div class="col-span-1 flex justify-center md:col-span-2 md:col-start-2 lg:col-span-1">
                    <a href="/contact">
                        <i class="fa-solid fa-4x fa-at opacity-80 text-[#3f5062] hover:opacity-80 lg:opacity-40"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Alternating Feature Sections -->
    <div class="relative pt-16 pb-32 overflow-hidden">
        <div aria-hidden="true" class="absolute inset-x-0 top-0 h-48 bg-gradient-to-b from-gray-100"></div>
        <div class="relative">
            <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
                <div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-16 lg:max-w-none lg:mx-0 lg:px-0">
                    <div>
                        <div>
              <span class="h-12 w-12 rounded-md flex items-center justify-center bg-[#5b9e8c]">
                <!-- Heroicon name: outline/inbox -->
                <i class="fa-solid fa-bus text-white fa-2x"></i>
              </span>
                        </div>
                        <div class="mt-6">
                            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900">De reis</h2>
                            <p class="mt-4 text-lg text-gray-500">Er is een bekende en wijze uitspraak die zegt:</p>
                            <blockquote class="mt-4 text-lg text-center text-gray-500">“Je moet het <u>verleden</u> kennen om het
                                <u>heden</u> te begrijpen,
                                en om er voor de <u>toekomst</u> van te leren”.</blockquote>
                            <p class="mt-4 text-lg text-gray-500">Dat wil de Historische Vereniging Hardenberg e.o. op
                                een nieuwe manier in de praktijk
                                brengen door middel van thematische Tijdreizen. Het zijn interessante excursies langs
                                bijzondere locaties met daarbij geschiedkundige informatie en mooie verhalen. Hierdoor
                                krijgt een deelnemer een goed beeld van de geschiedenis rond het betreffende thema. En
                                waar mogelijk wordt er ook vooruit gekeken in de tijd: Wat doen we met de ervaringen uit
                                het verleden? </p>
                            <div class="mt-6">
                                <a href="/tour"
                                   class="inline-flex bg-gradient-to-r bg-[#5b9e8c] to-indigo-600 bg-origin-border px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white hover:bg-opacity-70">
                                    Lees meer </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-12 sm:mt-16 lg:mt-0">
                    <div class="pl-4 -mr-14 sm:pl-6 md:-mr-16 lg:px-0 lg:m-0 lg:relative lg:h-full pr-20 flex items-center">
                        <img
                            class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:left-0 lg:w-auto lg:max-w-[38rem]"
                            src="/images/windmills.jpg" alt="Inbox user interface">
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-24">
            <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
                <div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-32 lg:max-w-none lg:mx-0 lg:px-0 lg:col-start-2">
                    <div>
                        <div>
              <span class="h-12 w-12 rounded-md flex items-center justify-center bg-[#5b9e8c]">
                <!-- Heroicon name: outline/sparkles -->
                <i class="fa-solid fa-clipboard-list text-white fa-2x"></i>
              </span>
                        </div>
                        <div class="mt-6">
                            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900">Het thema</h2>
                            <p class="mt-4 text-lg text-gray-500">Het onderwerp van de eerste Tijdreis is
                                “<b>Energie</b>”. We
                                zien en horen de ontwikkelingen rond dit onderwerp in ons deel van het land. Welke
                                energiebronnen waren hier voorradig en werden er gebruikt? En wat was de invloed daarvan
                                op het gebied, de samenleving en het dagelijks leven?
                                Energiebronnen die aan de orde komen tijdens de Tijdreis zijn: turf, kolen, aardgas,
                                wind- en zonne-energie, biogas of waterstofgas? </p>
                            <div class="mt-6">
                                <a href="/thema"
                                   class="inline-flex bg-gradient-to-r bg-[#5b9e8c] to-indigo-600 bg-origin-border px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white hover:bg-opacity-70">
                                    Lees verder... </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-12 sm:mt-16 lg:mt-0 lg:col-start-1">
                    <div
                        class="pr-4 -ml-14 sm:pr-6 md:-ml-16 lg:px-0 lg:m-0 lg:relative lg:h-full pl-20 flex items-center">
                        <img
                            class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:right-0  lg:w-auto lg:max-w-none"
                            src="/images/Happypeople.jpg" alt="Customer profile user interface">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gradient Feature Section -->
    <div class="bg-gradient-to-b from-[#5b9e8c] to-[#3f5062]">
        <div class="max-w-4xl mx-auto px-4 py-16 sm:px-6 sm:pt-14 sm:pb-24 lg:max-w-7xl lg:px-8">
            <h2 class="text-3xl font-extrabold text-white tracking-tight text-center">Waar zijn we gevestigd?</h2>
            <iframe class="rounded-2xl w-full h-[28rem] mt-12"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2424.701203676492!2d6.614742915942823!3d52.57501453990292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4165204865453b6f%3A0x3dba0f1341eb84e5!2sHistorische%20Vereniging%20Hardenberg%20en%20Omgeving!5e0!3m2!1sen!2snl!4v1646654849392!5m2!1sen!2snl"
                    style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

    </div>
</main>
</div>
<!-- Stats section -->
<div class="relative bg-gray-900">
    <div class="h-80 absolute inset-x-0 bottom-0 xl:top-0 xl:h-full">
        <div class="h-full w-full xl:grid xl:grid-cols-2">
            <div class="h-full xl:relative xl:col-start-2">
                <img class="h-full w-full object-cover opacity-25 xl:absolute xl:inset-0" src="/images/solar.jpg"
                     alt="People working on laptops">
                <div aria-hidden="true"
                     class="absolute inset-x-0 top-0 h-32 bg-gradient-to-b from-gray-900 xl:inset-y-0 xl:left-0 xl:h-full xl:w-32 xl:bg-gradient-to-r"></div>
            </div>
        </div>
    </div>
    <div
        class="max-w-4xl mx-auto ml-24 px-4 sm:px-6 lg:max-w-7xl lg:px-8 xl:grid xl:grid-cols-2 xl:grid-flow-col-dense xl:gap-x-8">
        <div class="relative pt-12 pb-64 sm:pt-24 sm:pb-64 xl:col-start-1 xl:pb-24">
            <p class="mt-3 text-3xl font-extrabold text-white">Het thema dit jaar :<br/> Energie</p>
            <p class="mt-5 text-lg text-gray-300">Dit jaar gaan we het hebben over het thema energie. Wat bedoelen we
                hiermee? Denk bijvoorbeeld aan vroeger toen mensen veen en turf aan het verbranden waren
                , of hoe we nu zonnepanelen installeren omdat we schonere alternatieven.</p>
        </div>
    </div>
</div>
</main>

@include('layouts.footer')
