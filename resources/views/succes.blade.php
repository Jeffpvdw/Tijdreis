@include('layouts.head')

@include('layouts.header')

<main>
  <!-- Hero section -->
  <div class="absolute inset-0 bottom-[-200px] sm:bottom-[-100px] md:bottom-0 z-[-1] bg-gray-100 my-auto">
    <div class="flex items-center justify-center min-h-screen">
      <div class="max-w-7xl md:w-8/12 mx-auto sm:px-6 lg:px-8 sm:mt-30">
        <div class="inline-flex relative w-full shadow-xl h-3/5 sm:rounded-2xl sm:overflow-hidden bg-[#F8F8F8]">
          <div class="relative m-auto px-4 py-16 sm:px-6 sm:py-16 lg:py-26 lg:px-8">
            <h1 class="text-center text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">
              <span class="text-l sm:text-5xl lg:text-6xl block text-[#3F5062] text-opacity-50">Bedankt voor uw boeking</span>
            </h1>
            <p class="mt-6 max-w-lg mx-auto text-center text-xl text-[#af8352] sm:max-w-3xl">
              De betaling is gelukt! Hartelijk bedankt voor uw boeking. Voor meer informatie over de reis kunt u op de informatie-knop hieronder drukken.
              Informatie krijgt u via de mail.
            </p>
            <div class="mt-10 max-w-sm mx-auto lg:max-w-none lg:flex lg:justify-center">
              <div class="space-y-4 lg:space-y-0 lg:mx-auto lg:inline-grid lg:gap-5">
                <a href="{{--PDF download, not available yet--}}" class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-[#5b9e8c] hover:bg-opacity-70 sm:px-8"> Reisinformatie </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<script src="js/app.js"></script>