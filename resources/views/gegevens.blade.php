@include('layouts.head')

@include('layouts.header')

@php
        use App\Http\Controllers\OrderController; @endphp


<main class="bg-white py-16 px-4 overflow-hidden sm:px-6 lg:px-8 lg:py-24">
  <div class="relative max-w-[45rem] mx-auto">
    <svg class="absolute left-full transform translate-x-1/2" width="404" height="404" fill="none"
      viewBox="0 0 404 404" aria-hidden="true">
      <defs>
        <pattern id="85737c0e-0916-41d7-917f-596dc7edfa27" x="0" y="0" width="20" height="20"
          patternUnits="userSpaceOnUse">
          <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
        </pattern>
      </defs>
      <rect width="404" height="404" fill="url(#85737c0e-0916-41d7-917f-596dc7edfa27)" />
    </svg>
    <svg class="absolute right-full bottom-0 transform -translate-x-1/2" width="404" height="404" fill="none"
      viewBox="0 0 404 404" aria-hidden="true">
      <defs>
        <pattern id="85737c0e-0916-41d7-917f-596dc7edfa27" x="0" y="0" width="20" height="20"
          patternUnits="userSpaceOnUse">
          <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
        </pattern>
      </defs>
      <rect width="404" height="404" fill="url(#85737c0e-0916-41d7-917f-596dc7edfa27)" />
    </svg>
    <div class="text-center">
      <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Persoonlijke gegevens</h2>
    </div>
    <div class="mt-12">
      <form action="{{ route('confirmOrder') }}" method="post" class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
        @csrf
        <div class="sm:col-span-2">
          <label for="company" class="block text-sm font-medium text-gray-700">Datum selecteren tour</label>
          <div class="sm:flex sm:justify-between">
            <select name="tour" class="bg-white py-3 px-4 block w-full shadow-md focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
              <option>Energie, 24 januari 2023, 10:30-16:00</option>
            </select>
          </div>
        </div>
        <div class="sm:col-span-2">
          <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
          <div class="mt-1">
            <input type="email" name="user_mail" id="user_mail" autocomplete="organization"
              class="py-3 px-4 block w-full shadow-md focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md"
              placeholder="jantimmer@gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Voer een geldig emailadres in" required>
          </div>
        </div>
        <div>
          <label for="phonenumber" class="block text-sm font-medium text-gray-700">Telefoonnummer</label>

          <div class="mt-1">
            <input type="text" name="telefoonnumer" id="telefoonnummer" autocomplete="organization"
              class="py-3 px-4 block w-full shadow-md focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md"
              placeholder="0612345678" maxlength="10" minlength="10" pattern="[0-9]+" required>
          </div>

        </div>
        <div>
          <label for="postcode" class="block text-sm font-medium text-gray-700">Postcode</label>
          <div class="mt-1">
            <input type="text" name="postcode" id="postcode" autocomplete="given-name"  pattern="[0-9]{4}[A-Z]{2}" maxlength="6"
              class="py-3 px-4 block w-full shadow-md focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md"
              placeholder="1234AB" required>
          </div>
        </div>
          <div id="copy" class="sm:col-span-2">
            <div class="sm:col-span-2 sm:flex sm:justify-between">
              <div>
                <label for="first-name" class="block text-sm font-medium text-gray-700">Voornaam</label>
                <div class="mt-1">
                  <input type="text" name="firstName_" id="first-name_" autocomplete="given-name"
                    class="py-3 px-4 block w-full shadow-md focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md"
                    placeholder="Jan" required>
                </div>
              </div>
              <div class="mt-5 sm:mt-0">
                <label for="proposition" class="block text-sm font-medium text-gray-700">Tussenvoegsel</label>
                <div class="mt-1">
                <input type="text" name="proposition[]" id="proposition[]" autocomplete="proposition"
                    class="py-3 px-4 block w-full shadow-md focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md"
                    placeholder="Van">
                </div>
              </div>
              <div class="mt-5 sm:mt-0">
                <label for="last-name" class="block text-sm font-medium text-gray-700">Achternaam</label>
                <div class="mt-1">
                  <input type="text" name="lastName_" id="last-name_" autocomplete="family-name"
                    class="py-3 px-4 block w-full shadow-md focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md"
                    placeholder="Timmer" required>
                </div>
              </div>
            </div>
            <div class="mt-5">
              <label for="birthday[]" class="block text-sm font-medium text-gray-700">Geboortedatum</label>
              <div>

                <input type="month" value="2022-04" name="date_" id="date_" class="date py-3 px-4 block w-full shadow-md focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">

             

              </div>
            </div>
            <div class="mt-5 divide-y divide-dashed">
              <label for="price" class="block text-sm font-medium text-gray-700">Prijs</label>

              <div id="price" class="font-semibold text-2xl mt-[8px] mb-8">

              <div  class="font-semibold text-2xl mt-[8px] mb-8">
                <p id="price[]"> €10,-</p>
                  <input type="hidden" name="prijs[]" value="10">

              </div>
            </div>
          </div>
          <div id="container" class="sm:col-span-2"></div>
        <div class="flex items-center">
          <a href="#" class="">
            <i class="fa-solid fa-plus hover:animate-spin" id="ep"></i>
          </a>
          <span class="ml-2">Voeg persoon toe</span>
        </div>
        <div class="sm:col-span-2">
          <label for="message" class="block text-sm font-medium text-gray-700">Bericht</label>
          <div class="flex items-start">
            <textarea name="message" id="message" placeholder="Gebruikt u een wandelstok of rolator, heeft u alergiën of wilt u iets anders melden? Kunt u het hier opschrijven." class="h-40 bg-white py-3 px-4 block w-full shadow-md focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md"></textarea>
          </div>
        </div>
        <div class="sm:col-span-2">
          <div class="flex items-start">
            <div class="flex-shrink-0">
              <!-- Enabled: "bg-indigo-600", Not Enabled: "bg-gray-200" -->
              <label class="switch">
                <input type="checkbox" required>
                <span class="slider round"></span>
              </label>
              <span class="sr-only">Accepteer de policies</span>

            </div>
            <div class="ml-3">
              <p class="text-base text-gray-500">
                Als je dit selecteert accepteer je de
                <a href="images/Algemene-voorwaarden.pdf" class="font-medium text-gray-700 underline">Algemene voorwaarden.</a>
              </p>
            </div>
          </div>
        </div>
        <div class="divide-y divide-dashed sm:col-span-2">
          <p>Totaal:</p>
          <p id="totalPrice" name="totalPrice" class="text-3xl font-bold">€10,-</p>
        </div>
        <div class="sm:col-span-2">
          <button type="submit"
            class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-[#5b9e8c] hover:bg-opacity-70 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Ga
            verder naar betalen</button>
        </div>
      </form>
    </div>
  </div>
</main>

@include('layouts.footer')
