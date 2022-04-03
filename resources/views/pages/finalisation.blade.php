<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shipp-group Pour vos livraisons</title>
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
  </head>
  <body>
    
  
  <main class="h-full mt-6 pb-16 overflow-y-auto">
          <div class="container grid px-6 mx-auto">
            
            <!-- CTA -->
            <h1
              class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-red-100 bg-red-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-red"
              
            >
              <div class="flex items-center">
                <svg
                  class="w-5 h-5"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                >
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                  ></path>
                </svg>
                <span class="text-white">Vérification de votre Identité et votre  moyen de déplacement</span>
              </div>
            </h1>

            <div
              class="max-w-2xl px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
            >
              <p class="mb-4 text-gray-600 dark:text-gray-400">
                This is possibly
                <strong>the most accessible a modal can get</strong>
                , using JavaScript. When opened, it uses
                <code>assets/js/focus-trap.js</code>
                to create a
                <em>focus trap</em>
                , which means that if you use your keyboard to navigate around,
                focus won't leak to the elements behind, staying inside the
                modal in a loop, until you take any action.
              </p>

              <p class="text-gray-600 dark:text-gray-400">
                Also, on small screens it is placed at the bottom of the screen,
                to account for larger devices and make it easier to click the
                larger buttons.
              </p>
            </div>
            
            <div class="flex flex-col mt-2 text-sm">
                <h4
                    class="mb-2 text-sm   text-red-700 dark:text-gray-200"
                >
                    Moyen de deplacement
                </h4>
                <label class="ml-6 items-center dark:text-gray-400" for="">
                  <input
                    type="checkbox"
                    class="text-red-600 form-checkbox focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:focus:shadow-outline-gray" id=""
                  />
                  Moto
                </label>
                </h4>
                <label class="ml-6 items-center dark:text-gray-400" for="t">
                  <input
                    type="checkbox"
                    class="text-red-600 form-checkbox focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:focus:shadow-outline-gray" id="t"
                  />
                  Voiture
                </label>
                </h4>
                <label class="ml-6 items-center dark:text-gray-400" for="">
                  <input
                    type="checkbox"
                    class="text-red-600 form-checkbox focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:focus:shadow-outline-gray" id=""
                  />
                  Autre(Vélo,Piéton)
                </label>
                </h4>
                
              </div>

            <div>
              <button
                @click="openModal"
                class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red"
              >
                Open Modal
              </button>
            </div>
          </div>
        </main>
  </body>

</html>