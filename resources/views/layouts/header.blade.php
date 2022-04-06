<header>
    <div class="relative bg-white">
      <div class="flex justify-between items-center max-w-7xl mx-auto px-4 py-6 sm:px-6 md:justify-start md:space-x-10 lg:px-8">
        <div class="flex justify-start lg:w-0 lg:flex-1">
          <a class="h-20 " href="#">
            <span class="sr-only">Workflow</span>
            <a href="/"><img class="h-20" src="/images/Logo.svg" alt="Tijdreis Hardenberg Logo"></a>
          </a>
        </div>
        <div class="-mr-2 -my-2 md:hidden">
          <button type="button" class="MobileMenuButton bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
            <span class="sr-only">Open menu</span>
            <!-- Heroicon name: outline/menu -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
        <nav class="hidden md:flex space-x-10">
          <a href="payment.html" class="text-base font-medium text-gray-500 hover:text-gray-900"> Bestellen </a>
          <a href="tour.html" class="text-base font-medium text-gray-500 hover:text-gray-900"> Tour </a>
          <!-- themamenu -->
          <ul>
            <li>
              <button id="dropbtn" type="button" class="dropbtn">
                <p id="HeaderRotate" class="text-base font-medium text-gray-500 hover:text-gray-900">Thema's <i class="HeaderArrow duration-150 fa-solid fa-angle-down"></i></p>
              </button>
            </li>
            <li>
              <div id="Themas" class="hidden rounded-xl absolute z-10 block mt-5 px-5 py-3 border-2 border-slate-700 bg-white w-full max-w-fit pl-3 drop-shadow-xl">
                <ul>
                  <li>
                    <a href="Thema.html" class="text-base font-medium text-gray-500 hover:text-gray-900">Energie</a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
          <!-- themamenu -->
          <a href="/contact" class="text-base font-medium text-gray-500 hover:text-gray-900"> Contact </a>
        </nav>
      </div>
      <!--
        Mobile menu, show/hide based on mobile menu state.
        Entering: "duration-200 ease-out"
          From: "opacity-0 scale-95"
          To: "opacity-100 scale-100"
        Leaving: "duration-100 ease-in"
          From: "opacity-100 scale-100"
          To: "opacity-0 scale-95"
      -->
      <div id="dropdown-content" class="absolute z-30 top-0 inset-x-0 p-2 transition transform origin-top-right hidden">
        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
          <div class="pt-5 pb-6 px-5">
            <div class="flex items-center justify-between">
              <div class="">
                <a href="/"><img class="h-20 w-auto" src="/images/Logo.svg" alt="Tijdreis Hardenberg Logo"></a>
              </div>
              <div class="-mr-2">
                <button type="button" class="MobileMenuButton bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                  <span class="sr-only">Close menu</span>
                  <!-- Heroicon name: outline/x -->
                  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                </button>
              </div>
            </div>
          </div>
          <div class="py-6 px-5">
            <div class="grid grid-cols-2 gap-4">
              <a href="payment.html" class="text-base font-medium text-gray-900 hover:text-gray-700"> Bestellen </a>
              <a href="tour.html" class="text-base font-medium text-gray-900 hover:text-gray-700"> Tour </a>
              <!-- themamenu -->
              <ul>
                <li>
                  <button id="dropbtn" type="button" class="dropbtn">
                    <p class="text-base font-medium text-gray-900 hover:text-gray-700">Thema's <i class="HeaderArrow duration-150 fa-solid fa-angle-down"></i></p>
                  </button>
                </li>
                <li>
                  <div id="MobileThemas" class="hidden rounded-xl absolute z-10 block mt-5 px-5 py-3 border-2 border-slate-700 bg-white w-full max-w-fit pl-3 drop-shadow-xl">
                    <ul>
                      <li>
                        <a href="Thema.html" class="text-base font-medium text-gray-500 hover:text-gray-900">Energie</a>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
              <!-- themamenu -->
              <a href="/contact" class="text-base font-medium text-gray-900 hover:text-gray-700"> Contact </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>