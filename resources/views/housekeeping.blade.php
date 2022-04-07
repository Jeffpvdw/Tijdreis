@include('layouts.head')

<body>
    <header>
        <div class="relative bg-white">
          <div class="flex justify-center max-w-7xl mx-auto sm:px-4 py-6 sm:justify-start md:space-x-10 lg:px-8">
            <div class="flex justify-start lg:w-0 lg:flex-1">
              <a class="h-32 m-auto" href="/">
                <span class="sr-only">Workflow</span>
                <img class="relative h-32" src="images/Logo.svg" alt="Tijdreis Hardenberg Logo">
              </a>
            </div>
          </div>
        </div>
      </header>
    <main>
      <form>
        <div class="relative flex flex-col items-center mt-12 m-auto max-w-auto sm:max-w-md sm:rounded-2xl bg-gradient-to-b from-[#5b9e8c] to-[#3f5062]">
          <input type="text" name="username" id="username" placeholder="Gebruikersnaam" class="bg-white sm:w-80 w-64 mt-10 p-2 rounded-2xl">
          <input type="text" name="password" id="password" placeholder="Wachtwoord" class="bg-white sm:w-80 w-64 mt-6 p-2 rounded-2xl">
          <input type="submit" class="mt-8 mb-8 bg-white px-6 py-2 rounded-2xl cursor-pointer active:bg-gray-400" value="Login">
        </div>
      </form>
    </main>
    <footer>

    </footer>
</body>
</html>