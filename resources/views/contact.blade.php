@include('layouts.head')

@include('layouts.header')

<main style="min-height: calc(100vh - 600px);">
  <div class="bg-white py-16 px-4 overflow-hidden sm:px-6 lg:px-8 lg:py-24">
    <div class="relative max-w-xl mx-auto">
      <svg class="absolute left-full transform translate-x-1/2" width="404" height="404" fill="none" viewBox="0 0 404 404" aria-hidden="true">
        <defs>
          <pattern id="85737c0e-0916-41d7-917f-596dc7edfa27" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
          </pattern>
        </defs>
        <rect width="404" height="404" fill="url(#85737c0e-0916-41d7-917f-596dc7edfa27)" />
      </svg>
      <svg class="absolute right-full bottom-0 transform -translate-x-1/2" width="404" height="404" fill="none" viewBox="0 0 404 404" aria-hidden="true">
        <defs>
          <pattern id="85737c0e-0916-41d7-917f-596dc7edfa27" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
          </pattern>
        </defs>
        <rect width="404" height="404" fill="url(#85737c0e-0916-41d7-917f-596dc7edfa27)" />
      </svg>
      <div class="text-center">
        <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Neem contact op met ons!</h2>
        <p class="mt-4 text-lg leading-6 text-gray-500">Voor al uw vragen over Historische vereniging Hardenberg kunt uw ons zowel per mail als telefonisch bereiken.</p>
      </div>
      <div class="mt-12">
        <form action="#" method="POST" class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
          <div>
            <label for="first-name" class="block text-sm font-medium text-gray-700">Voornaam</label>
            <div class="mt-1">
              <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="py-3 px-4 block w-full shadow-md focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md" placeholder="Jan" required>
            </div>
          </div>
          <div>
            <label for="last-name" class="block text-sm font-medium text-gray-700">Achternaam</label>
            <div class="mt-1">
              <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="py-3 px-4 block w-full shadow-md focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md" placeholder="Timmer">
            </div>
          </div>
          <div class="sm:col-span-2">
            <label for="company" class="block text-sm font-medium text-gray-700">Email</label>
            <div class="mt-1">
              <input type="email" name="company" id="company" autocomplete="organization" class="py-3 px-4 block w-full shadow-md focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md" placeholder="Jantimmer@gmail.com" required>
            </div>
          </div>
          <div class="sm:col-span-2">
            <label for="company" class="block text-sm font-medium text-gray-700">Telefoonnummer</label>
            <div class="mt-1">
              <input type="text" name="company" id="company" autocomplete="organization" class="py-3 px-4 block w-full shadow-md focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md" placeholder="0612345678">
            </div>
          </div>
          <div class="sm:col-span-2">
            <label for="message" class="block text-sm font-medium text-gray-700">Bericht</label>
            <div class="mt-1">
              <textarea required id="message" name="message" rows="4" class="py-3 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border border-gray-300 rounded-md"></textarea>
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
                  <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
              </div>
              <div class="ml-3">
                <p class="text-base text-gray-500">
                  Als je dit selecteert accepteer je de
                  <a href="images/Privacyverklaring.pdf" target="blank_" class="font-medium text-gray-700 underline">Privacy Policy.</a>
                </p>
              </div>
            </div>
          </div>
          <div class="sm:col-span-2">
            <button type="submit" class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-[#5b9e8c] hover:bg-opacity-70 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Verstuur bericht</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>

@include('layouts.footer')
