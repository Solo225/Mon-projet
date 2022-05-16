<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shipp-group Pour vos livraison</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../assets/dashboard/css/tailwind.output.css" />
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <link rel="stylesheet" href="//apps.bdimg.com/libs/jqueryui/1.10.4/css/jquery-ui.min.css">
    <script src="../assets/dashboard/js/init-alpine.js"></script>
    <script src="../path/to/flowbite/dist/datepicker.js"></script>
    <script src="https://unpkg.com/flowbite@1.4.1/dist/datepicker.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js" integrity="sha256-6XMVI0zB8cRzfZjqKcD01PBsAy3FlDASrlC8SxCpInY=" crossorigin="anonymous"></script>
    <script src="//apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    {{-- <script>
      $(function() {
        $( "#datepicker" ).datepicker({
           minDate : 0
    });
    
      });
    </script>
    <script>
      $(function() {
        $( "#datepickers" ).datepicker({
           minDate : 0
    });
    
      });
    </script> --}}

  </head>
  <body>
    <div
      class="flex h-screen bg-gray-50 dark:bg-gray-900"
      :class="{ 'overflow-hidden': isSideMenuOpen}"
    >


      <div class="flex flex-col flex-1">

        <main class="h-full pb-16 overflow-y-auto">
          <div class="container px-6 mx-auto grid">
            <form action="/commande" method="POST">
                @csrf

            <h2
              class="my-6 text-2xl font-bold text-gray-700 dark:text-gray-200"
            >
              Commmande
            </h2>
            <!-- CTA -->
            <a
              class="flex items-center justify-between p-4 mb-8  text-red-100 bg-red-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-red"
              href="/pageclient"
            >

              <span class="text-white text-sm font-bold ">Revenir à l'historique &RightArrow;</span>
            </a>


            <div
              class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
            >
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400 font-bold">Point de collecte</span>
                <select name="point_retrait"
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:focus:shadow-outline-gray"
                >
                  <option value="1 kg">Maroc</option>
                  <option value="3 kg">Palmeraie</option>
                  <option value="entre 3 et 10kg">Port-bouet</option>
                  <option value="sup à 10kg">Bassam</option>
                </select>
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400 font-bold">Contact de l'expéditeur </span>
                <input name="contact_recup"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                   required
                />
              </label>

              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400 font-bold">Point de depôt </span>
                <select name="point_depot"
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:focus:shadow-outline-gray"
                >
                  <option value="1 kg">Yopougon</option>
                  <option value="3 kg">Adjamé</option>
                  <option value="entre 3 et 10kg">Abobo</option>
                  <option value="sup à 10kg">Rivera</option>
                </select>
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400 font-bold">Contact du destinataire</span>
                <input name="contactdestinataire"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                   required
                />
              </label>
              </div>
              <div class="flex-1 h-full max-w-xl mx-auto   ">

            <button
                class="block w-80 px-4 py-4 mt-8  font-medium leading-5 text-center text-white text-md  transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 focus:outline-none  focus:shadow-outline-red"
              >
                Suivant
            </button>
            </div>
          </div>
            </div>
        </form>
          </div>
        </main>
      </div>
    </div>
  </body>
</html>
