@include('layouts.head')

<div class="h-full min-h-screen flex flex-col">
    <!-- Top nav-->
    <header class="flex-shrink-0 relative h-16 bg-white flex items-center">
        <!-- Logo area -->
        <div class="absolute inset-y-0 left-0 md:static md:flex-shrink-0">
            <a href="#"
               class="flex items-center justify-center h-16 w-16 bg-[#5b9e8c] focus:outline-none focus:ring-2 focus:ring-inset focus:ring-bg-[#5b9e8c] md:w-20">
                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=white"
                     alt="Workflow">
            </a>
        </div>
        <!-- Picker area -->
        <div class="mx-auto md:hidden">
            <div class="relative">
                <label for="inbox-select" class="sr-only">Choose inbox</label>
                <select id="inbox-select"
                        class="rounded-md border-0 bg-none pl-3 pr-8 text-base font-medium text-gray-900 focus:ring-2 focus:ring-indigo-600">
                    <option selected>Open</option>
                    <option>Archive</option>
                    <option>Customers</option>
                    <option>Flagged</option>
                    <option>Spam</option>
                    <option>Drafts</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center justify-center pr-2">
                    <!-- Heroicon name: solid/chevron-down -->
                    <svg class="h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                         fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                              clip-rule="evenodd"/>
                    </svg>
                </div>
            </div>
        </div>
        <!-- Menu button area -->
        <div class="absolute inset-y-0 right-0 pr-4 flex items-center sm:pr-6 md:hidden">
            <!-- Mobile menu button -->
            <button type="button"
                    class="-mr-2 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-600">
                <span class="sr-only">Open main menu</span>
                <!-- Heroicon name: outline/menu -->
                <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
        <!-- Desktop nav area -->
        <div class="hidden md:min-w-0 md:flex-1 md:flex md:items-center md:justify-between">
            <div class="min-w-0 flex-1">
                <div class="max-w-2xl relative text-gray-400 focus-within:text-gray-500">
                    <label for="desktop-search" class="sr-only">Search</label>
                    <input id="desktop-search" type="search" placeholder="Search"
                           class="block w-full border-transparent pl-12 placeholder-gray-500 focus:border-transparent sm:text-sm focus:ring-0">
                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center justify-center pl-4">
                        <!-- Heroicon name: solid/search -->
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                             aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="ml-10 pr-4 flex-shrink-0 flex items-center space-x-10">
                <nav aria-label="Global" class="flex space-x-10">
                    <a href="#" class="text-sm font-medium text-gray-900">Inboxes</a>
                    <a href="#" class="text-sm font-medium text-gray-900">Reporting</a>
                    <a href="#" class="text-sm font-medium text-gray-900">Settings</a>
                </nav>
                <div class="flex items-center space-x-8">
          <span class="inline-flex">
            <a href="#" class="-mx-1 bg-white p-1 rounded-full text-gray-400 hover:text-gray-500">
              <span class="sr-only">View notifications</span>
                <!-- Heroicon name: outline/bell -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                   stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
              </svg>
            </a>
          </span>
                    <div class="relative inline-block text-left">
                        <button type="button"
                                class="bg-white rounded-full flex text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600"
                                id="menu-0-button" aria-expanded="false" aria-haspopup="true">
                            <span class="sr-only">Open user menu</span>
                            <img class="h-8 w-8 rounded-full"
                                 src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                 alt="">
                        </button>
                        <!--
                          Dropdown menu, show/hide based on menu state.
                          Entering: "transition ease-out duration-100"
                            From: "transform opacity-0 scale-95"
                            To: "transform opacity-100 scale-100"
                          Leaving: "transition ease-in duration-75"
                            From: "transform opacity-100 scale-100"
                            To: "transform opacity-0 scale-95"
                        -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile menu, show/hide this `div` based on menu open/closed state -->
        <div class="fixed inset-0 z-40 md:hidden" role="dialog" aria-modal="true">
            <!--
              Off-canvas menu overlay, show/hide based on off-canvas menu state.
              Entering: "transition-opacity ease-linear duration-300"
                From: "opacity-0"
                To: "opacity-100"
              Leaving: "transition-opacity ease-linear duration-300"
                From: "opacity-100"
                To: "opacity-0"
            -->
            <div class="hidden sm:block sm:fixed sm:inset-0 sm:bg-gray-600 sm:bg-opacity-75" aria-hidden="true"></div>
            <!--
              Mobile menu, toggle classes based on menu state.
              Entering: "transition ease-out duration-150 sm:ease-in-out sm:duration-300"
                From: "transform opacity-0 scale-110 sm:translate-x-full sm:scale-100 sm:opacity-100"
                To: "transform opacity-100 scale-100  sm:translate-x-0 sm:scale-100 sm:opacity-100"
              Leaving: "transition ease-in duration-150 sm:ease-in-out sm:duration-300"
                From: "transform opacity-100 scale-100 sm:translate-x-0 sm:scale-100 sm:opacity-100"
                To: "transform opacity-0 scale-110  sm:translate-x-full sm:scale-100 sm:opacity-100"
            -->
            <nav class="fixed z-40 inset-0 h-full w-full bg-white sm:inset-y-0 sm:left-auto sm:right-0 sm:max-w-sm sm:w-full sm:shadow-lg"
                 aria-label="Global">
                <div class="h-16 flex items-center justify-between px-4 sm:px-6">
                    <a href="#">
                        <img class="block h-8 w-auto"
                             src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=500"
                             alt="Workflow">
                    </a>
                    <button type="button"
                            class="-mr-2 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-600">
                        <span class="sr-only">Close main menu</span>
                        <!-- Heroicon name: outline/x -->
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
                <div class="mt-2 max-w-8xl mx-auto px-4 sm:px-6">
                    <div class="relative text-gray-400 focus-within:text-gray-500">
                        <label for="mobile-search" class="sr-only">Search all inboxes</label>
                        <input id="mobile-search" type="search" placeholder="Search all inboxes"
                               class="block w-full border-gray-300 rounded-md pl-10 placeholder-gray-500 focus:border-indigo-600 focus:ring-indigo-600">
                        <div class="absolute inset-y-0 left-0 flex items-center justify-center pl-3">
                            <!-- Heroicon name: solid/search -->
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                 fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="max-w-8xl mx-auto py-3 px-2 sm:px-4">
                    <a href="#"
                       class="block rounded-md py-2 px-3 text-base font-medium text-gray-900 hover:bg-gray-100">Inboxes</a>
                    <a href="#"
                       class="block rounded-md py-2 pl-5 pr-3 text-base font-medium text-gray-500 hover:bg-gray-100">Technical
                        Support</a>
                    <a href="#"
                       class="block rounded-md py-2 pl-5 pr-3 text-base font-medium text-gray-500 hover:bg-gray-100">Sales</a>
                    <a href="#"
                       class="block rounded-md py-2 pl-5 pr-3 text-base font-medium text-gray-500 hover:bg-gray-100">General</a>
                    <a href="#"
                       class="block rounded-md py-2 px-3 text-base font-medium text-gray-900 hover:bg-gray-100">Reporting</a>
                    <a href="#"
                       class="block rounded-md py-2 px-3 text-base font-medium text-gray-900 hover:bg-gray-100">Settings</a>
                </div>
                <div class="border-t border-gray-200 pt-4 pb-3">
                    <div class="max-w-8xl mx-auto px-4 flex items-center sm:px-6">
                        <div class="flex-shrink-0">
                            <img class="h-10 w-10 rounded-full"
                                 src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                 alt="">
                        </div>
                        <div class="ml-3 min-w-0 flex-1">
                            <div class="text-base font-medium text-gray-800 truncate">Whitney Francis</div>
                            <div class="text-sm font-medium text-gray-500 truncate">whitney.francis@example.com</div>
                        </div>
                        <a href="#" class="ml-auto flex-shrink-0 bg-white p-2 text-gray-400 hover:text-gray-500">
                            <span class="sr-only">View notifications</span>
                            <!-- Heroicon name: outline/bell -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                            </svg>
                        </a>
                    </div>
                    <div class="mt-3 max-w-8xl mx-auto px-2 space-y-1 sm:px-4">
                        <a href="#"
                           class="block rounded-md py-2 px-3 text-base font-medium text-gray-900 hover:bg-gray-50">Your
                            Profile</a>
                        <a href="#"
                           class="block rounded-md py-2 px-3 text-base font-medium text-gray-900 hover:bg-gray-50">Sign
                            out</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- Bottom section -->
    <div class="min-h-0 flex-1 flex overflow-hidden">
        <!-- Narrow sidebar-->
        <nav aria-label="Sidebar" class="hidden md:block md:flex-shrink-0 md:bg-gray-800 md:overflow-y-auto">
            <div class="relative w-20 flex flex-col p-3 space-y-3">
                <a href="#"
                   class="bg-gray-900 text-white flex-shrink-0 inline-flex items-center justify-center h-14 w-14 rounded-lg">
                    <span class="sr-only">Open</span>
                    <!-- Heroicon name: outline/inbox -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                    </svg>
                </a>
                <a href="#"
                   class="text-gray-400 hover:bg-gray-700 flex-shrink-0 inline-flex items-center justify-center h-14 w-14 rounded-lg">
                    <span class="sr-only">Archive</span>
                    <!-- Heroicon name: outline/archive -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/>
                    </svg>
                </a>
                <a href="#"
                   class="text-gray-400 hover:bg-gray-700 flex-shrink-0 inline-flex items-center justify-center h-14 w-14 rounded-lg">
                    <span class="sr-only">Customers</span>
                    <!-- Heroicon name: outline/user-circle -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </a>
                <a href="#"
                   class="text-gray-400 hover:bg-gray-700 flex-shrink-0 inline-flex items-center justify-center h-14 w-14 rounded-lg">
                    <span class="sr-only">Drafts</span>
                    <!-- Heroicon name: outline/pencil-alt -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                    </svg>
                </a>
            </div>
        </nav>
        <!-- Main area -->
        <main class="min-w-0 flex-1 border-t border-gray-200 lg:flex">
            <!-- Primary column -->
            <section aria-labelledby="primary-heading"
                     class="min-w-0 flex-1 h-full flex flex-col overflow-y-auto lg:order-last">
                <h1 id="primary-heading" class="sr-only">Home</h1>
                <!-- Your content -->
                <p class="text-5xl m-1">Reisoverzicht</p>
                <div class="m-1">
                    <p class="text-3xl">Reis 1</p>
                    <p class="text-2xl">Hardenberg->Ommen</p>
                    <!--                    The table that appears when you edit the table-->
                    <div id="popup" class="hidden">
                        <table class="table-fixed w-4/5">
                            <thead class="text-left">
                            <tr>
                                <th class="border border-solid">Datum</th>
                                <th class="border border-solid">Beginpunt</th>
                                <th class="border border-solid">Eindpunt</th>
                                <th class="border border-solid">Tijd</th>
                                <th class="border border-solid">Deelnemers</th>
                                <th class="border border-solid">Prijs</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <form id="TravelForm" action="#" method="POST">
                                    <td><input id="Date" name="Date" placeholder="dd-mm-jjjj" type="text"
                                               class="border-solid border-2"></td>
                                    <td><input id="StartPoint" name="StartPoint" placeholder="Plaats" type="text"
                                               class="border-solid border-2"></td>
                                    <td><input id="EndPoint" name="EndPoint" placeholder="Plaats" type="text"
                                               class="border-solid border-2"></td>
                                    <td><input id="Time" name="Time" placeholder="00:00 - 00:00" type="text"
                                               class="border-solid border-2"></td>
                                    <td><input id="People" name="People" placeholder="Max. aantal deelnemers"
                                               type="text" class="border-solid border-2"></td>
                                    <td><input id="Price" name="Price" placeholder="Bedrag"
                                               type="text" class="border-solid border-2"></td>
                                </form>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--                    Table overview of a trip-->
                    <table class="table-fixed w-4/5" id="popup2">
                        <thead class="text-left">
                        <tr>
                            <th class="border border-solid">Datum</th>
                            <th class="border border-solid">Beginpunt</th>
                            <th class="border border-solid">Eindpunt</th>
                            <th class="border border-solid">Tijd</th>
                            <th class="border border-solid">Deelnemers</th>
                            <th class="border border-solid">Prijs</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="border border-solid">11-11-11</td>
                            <td class="border border-solid">Hardenberg</td>
                            <td class="border border-solid">Ommen</td>
                            <td class="border border-solid">12:00 - 16:00</td>
                            <td class="border border-solid">25/30</td>
                            <td class="border border-solid">€20</td>
                        </tr>
                        </tbody>
                    </table>
                    <!--                    Buttons for editing tables and changing the data in the database-->
                    <div>
                        <button class="ToggleEdit border-2 hover:border-[#5b9e8c] hover:text-[#5b9e8c] rounded p-0.5"
                                id="editbtn">Wijzig reis
                        </button>
                        <input form="TravelForm" value="Opslaan" type="submit"
                               class="hidden border-2 hover:border-[#5b9e8c] hover:text-[#5b9e8c] rounded p-0.5 cursor-pointer"
                               id="savebtn">
                        <button class="hidden ToggleEdit border-2 hover:border-rose-700 hover:text-rose-700 rounded p-0.5"
                                id="cancelbtn">Annuleer
                        </button>
                        <button class="DeleteTrip border-2 hover:border-rose-700 hover:text-rose-700 rounded p-0.5">
                            Verwijder reis
                        </button>
                    </div>
                    <!--                    Popup that appears asking the user if they are sure they want to delete the table.-->
                    <div id="ConfirmTxt" class="hidden bg-slate-300 bg-opacity-50 z-50 fixed inset-0">
                        <div class="flex items-center justify-center self-center h-screen w-screen">
                            <div class="block bg-white w-1/4.5 h-1/4.5 content-fit rounded-lg drop-shadow-lg p-2">
                                <div class="text-center text-2xl text-black mt-4">Weet u zeker dat u deze reis wilt
                                    verwijderen?
                                </div>
                                <table class="[border-spacing: 30px] my-8 mx-auto">
                                    <tr class="w-full">
                                        <td class="w-1/2">
                                            <!--                                            This button confirms that the table should be deleted and removed from the database-->
                                            <div class="w-1/2 text-2xl">
                                                <button class="border-2 hover:border-[#5b9e8c] hover:text-[#5b9e8c] rounded px-2">
                                                    Ja
                                                </button>
                                            </div>
                                        </td>
                                        <td class="w-1/2">
                                            <div class="w-1/2 text-2xl">
                                                <button class="DeleteTrip border-2 hover:border-rose-700 hover:text-rose-700 rounded px-2">
                                                    Nee
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <!--                Button used to add a trip-->
                <div>
                    <div class="m-1"><p>Reis toevoegen</p></div>
                    <div>
                        <button id="AddTrip" name="AddTrip">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-5 w-5 border-solid border-2 border-black m-1 hover:border-[#5b9e8c]"
                                 fill="none"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </section>
            <!-- Secondary column (hidden on smaller screens) -->
            <aside class="hidden lg:block lg:flex-shrink-0 lg:order-first">
                <div class="h-full relative flex flex-col w-96 border-r border-gray-200 bg-gray-100 overflow-y-auto">
                    <!-- De thema-selectie -->
                    <div class="bg-gray-800 w-full h-20 border border-white rounded">
                        <h3 class="text-white text-2xl text-center m-5">Energie</h3>
                    </div>
                    <div>
                        <button class="bg-gray-800 text-white bg-full h-10 w-full border border-white rounded"><a href="">Thema
                            2</a></button>
                    </div>
                    <div>
                        <button class="bg-gray-800 text-white bg-full h-10 w-full border border-white rounded"><a href="">Thema
                            3</a></button>
                    </div>
                </div>
            </aside>
        </main>
    </div>
</div>
<script src="../js/app.js"></script>
</body>
</html>