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
    <script src="../assets/dashboard/js/init-alpine.js"></script>
    <script src="../path/to/flowbite/dist/datepicker.js"></script>
    <script src="https://unpkg.com/flowbite@1.4.1/dist/datepicker.js"></script>
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
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Commmande
            </h2>
            <!-- CTA -->
            <a
              class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-red-100 bg-red-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-red"
              href="/pageclient"
            >

              <span class="text-white">Revenir à l'historique &RightArrow;</span>
            </a>


            <div
              class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
            >
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Type de colis</span>
                <input name="type_prod"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Jane Doe"
                />
              </label>



              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  Poids du colis
                </span>
                <select name="poids"
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:focus:shadow-outline-gray"
                >
                  <option value="1 kg">Inférieure à 1kg</option>
                  <option value="3 kg">Inférieure à 3kg</option>
                  <option value="entre 3 et 10kg">Entre 3 et 10kg</option>
                  <option value="sup à 10kg">Supérieure à 10kg</option>
                </select>
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  Moyen de transport
                </span>
                <select name="transport"
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:focus:shadow-outline-gray"
                >
                  <option value="pieton">Piéton</option>
                  <option value="velo">Vélo</option>
                  <option value="moto">Moto</option>
                  <option value="voiture">Voiture</option>
                  <option value="camion">Camion</option>
                </select>
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  Nombre de colis
                </span>
                <select name="nombre_colis"
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:focus:shadow-outline-gray"
                >
                  <option value="1">Egale 1</option>
                  <option value="inf à 5">Inférieure à 5</option>
                  <option value="sup à 5">Supérieure à 5</option>

                </select>
                </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Point de retrait</span>
                <input name="point_retrait"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Jane Doe"
                />
              </label>
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Date et Heure</span>
                <input Type="datetime-local" name="date"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                />
                </label>

                <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Nom de celui avec qui récupérer le colis </span>
                <input name="recupere"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Jane Doe"
                />
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Contact de celui avec qui récupérer le colis </span>
                <input name="contact_recup"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Jane Doe"
                />
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Point de dépot </span>
                <input name="point_depot"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Jane Doe"
                />
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Date et heure de depot  </span>
                <input type="datetime-local" name="date_depot"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Jane Doe"
                />
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Numéro de celui  qui reçoit le colis </span>
                <input name="destinataire"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Jane Doe"
                />
              </label>
              {{-- <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Nom de celui qui reçois le colis </span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Jane Doe"
                />
              </label> --}}
              </div>
              <div class="flex-1 h-full max-w-xl mx-auto   ">

            <button
                class="block w-80 px-4 py-4 mt-8  font-medium leading-5 text-center text-white text-md  transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 focus:outline-none  focus:shadow-outline-red"
              >
                Effectuer la commande
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
