<footer class="bg-gray-50" aria-labelledby="footer-heading">
    <h2 id="footer-heading" class="sr-only">Footer</h2>
    <div class="max-w-7xl mx-auto pt-16 pb-8 px-4 sm:px-6 lg:px-8">
      <div class="xl:grid xl:grid-cols-3 xl:gap-8">
        <div class="grid grid-cols-2 sm:grid-cols-3 gap-8 xl:col-span-3">
          <div class="md:grid md:grid-cols-2 md:gap-8">
            <div>
              <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">  </a>
              <ul role="list" class="mt-4 space-y-4">
                <li>
                  <p class="text-base text-gray-500"> <b>Handelsnaam:</b><br> Historische Vereniging Hardenberg en omgeving</p>
                </li>
                <li>
                  <p class="text-base text-gray-500"> <b>KVK Nummer:</b><br> 40061483</p>
                </li>
                <li>
                  <p class="text-base text-gray-500"> <b>Ontwerper logo:</b><br> Ad Hofsink, van Total iD</p>
                </li>
              </ul>
            </div>
          </div>
          <div class="md:grid md:grid-cols-2 md:gap-8">
            <div>
              <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase"></h3>
              <ul role="list" class="mt-4 space-y-4">
                <li>
                  <p class="text-base text-gray-500"> <b>Openingstijden:</b><br> maandag, woensdag, vrijdag van 9.00 tot 12.00 uur en op afspraak.</p>
                </li>
                <li>
                  <p class="text-base text-gray-500"> <b>Locatie:</b><br> Wilhelminaplein 3A 7772 AH  Hardenberg</p>
                </li>
              </ul>
            </div>
          </div>
          <div class="md:grid md:grid-cols-2 md:gap-8">
            <div>
              <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">  </a>
              <ul role="list" class="mt-4 space-y-4">
                <li>
                  <p class="text-base text-gray-500"> <b>Email:</b><br> info@hvhardenberg.nl</p>
                </li>
                <li>
                  <p class="text-base text-gray-500"> <b>Telefoonnummer:</b><br> 0523-265624</p>
                </li>
                <li>
                  <a href="images/Algemene-voorwaarden.pdf" target="blank_" class="text-base text-gray-500 hover:text-gray-900"><b>Voorwaarden:</b><br> <span class="underline">Algemene voorwaarden</span> </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-12 border-t border-gray-200 pt-8 md:flex md:items-center md:justify-between lg:mt-16">
        <div class="flex space-x-6 md:order-2">
          <a href="https://www.facebook.com/TijdreisHardenberg" class="text-gray-400 hover:text-gray-500" target="_blank">
            <i class="fa-brands fa-2x fa-facebook"></i>
          </a>
          <a href="/contact" class="text-gray-400 hover:text-gray-500">
            <i class="fa-solid fa-2x fa-at"></i>
          </a>
        </div>
        <p class="mt-8 text-base text-gray-400 md:mt-0 md:order-1">&copy; 2022 Tijdreis Hardenberg. All rights reserved. </p>
      </div>
    </div>
  </footer>
  <script src="js/app.js"></script>
<script>
    $(document).ready(function(){

        var cloneCount = 1;

        $("#ep").click(function(e) {
            e.preventDefault();
            var element = $('#copy');
            $("#container").append(element.html().replaceAll('_', '_'+ cloneCount++));
        });
    });

</script>
</body>
</html>
