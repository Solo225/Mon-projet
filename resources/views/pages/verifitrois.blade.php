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

        <main class="h-full pb-16 mt-8 overflow-y-auto">
          <div class="container px-6 mx-auto grid">
            <form action="/commande" method="POST">
                @csrf

           
            <!-- CTA -->
            <a
              class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-red-100 bg-red-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-red"
              href="/verifiun"
            >

              <span class="text-white"> Vérification de l'identité &RightArrow;</span>
            </a>


            <div
              class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
            >
            <label class="block text-sm">
              <span class="font-medium">Rentrez la photo de la carte grise de votre moyen de transport</span>
                <input type="file" name="photo"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Jane Doe" required
                />
              </label>
              </div>
              <div class="flex-1 h-full max-w-xl mx-auto   ">

            <button
                class="block w-80 px-4 py-4 mt-8  font-medium leading-5 text-center text-white text-md  transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 focus:outline-none  focus:shadow-outline-red"
              >
                Etape suivante
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
