@include('layouts.head')

@include('layouts.header')

<main style="min-height: calc(100vh - 600px);" class="bg-white">
  <div class="pt-6 pb-16 sm:pb-24">
    <div class="mt-8 max-w-2xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
      <div class="lg:grid lg:grid-cols-12 lg:auto-rows-min lg:gap-x-8">
        <div class="lg:col-start-8 lg:col-span-5">
          <div class="justify-between">
            <h1 class="text-xl font-medium text-gray-900">Bestel jouw Tour</h1>
            <p class="text-xl font-medium text-gray-900 mt-4">€10,00 Kinderen</p>
            <p class="text-xl font-medium text-gray-900">€15,00 Volwassenen</p>
          </div>
          <!-- Reviews -->
        </div>
        <!-- Image gallery -->
        <div class="mt-8 lg:mt-0 lg:col-start-1 lg:col-span-7 lg:row-start-1 lg:row-span-3">
          <h2 class="sr-only">Images</h2>
          <div class="grid grid-cols-1">
            <img src="images/Happypeople.jpg" alt="group of happy people in bus"
              class="lg:col-span-2 lg:row-span-2 rounded-lg">
          </div>
        </div>
        <div class="mt-8 lg:col-span-5">
          <form>
            <!-- Size picker -->
            <div class="mt-8">
              <a href="/gegevens" type="submit"
                class="mt-8 text-center w-full bg-indigo-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white bg-[#5b9e8c] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Ga
                verder naar persoongegevens</a>
          </form>
          <!-- Product details -->
          <div class="mt-10">
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
          </section>
        </div>
      </div>
    </div>
  </div>
</main>

@include('layouts.footer')
