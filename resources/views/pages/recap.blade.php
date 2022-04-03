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
    <div
      class="flex h-screen bg-gray-50 mt-8 dark:bg-gray-900"
      :class="{ 'overflow-hidden': isSideMenuOpen }"
    >
 
      <div class="flex flex-col flex-1 w-full">
        
        <main class="h-full overflow-y-auto mb-8">
          <div class="container px-6 mx-auto grid">
            <a
                class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-white bg-red-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-red"
                href="/pageclient"
              >
                <div class="flex items-center">
                  <svg
                    class="w-5 h-5 mr-2"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    ></path>
                  </svg>
                  <h1>Recaptulatif de la commande</h1>
                </div>
                <span>Revenir à la page client &RightArrow;</span>
              </a>
            
            
            

            <!-- New Table -->
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                  <thead>
                    <tr
                      class="text-xs  tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                    >
                      <th class="px-4 py-3">Type colis</th>
                      <th class="px-4 py-3">Poids</th>
                      <th class="px-4 py-3">Nombre</th>
                      <th class="px-4 py-3">Moyen de transport</th>
                      <th class="px-4 py-3">Point de retrait</th>
                      <th class="px-4 py-3">Date  et heure récupération</th>
                    </tr>
                  </thead>
                  <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                  >
                    
                    <tr class="text-gray-700 dark:text-gray-400">
                      <td class="px-4 py-3">
                        <div class="flex items-center text-sm">                          
                          <div>
                            <p class="">Nourriture</p>
                          </div>
                        </div>
                      </td>
                      <td class="px-4 py-3">
                        <div class="flex items-center text-sm">                          
                          <div>
                            <p class="">10kg</p>
                            
                          </div>
                        </div>
                      </td>
                      <td class="px-4 py-3">
                        <div class="flex items-center text-sm">                          
                          <div>
                            <p class="">25</p>
                          </div>
                        </div>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        Moto
                      </td>
                      <td class="px-4 py-3 text-sm">
                        
                          Adjamé
                      </td>
                      
                      <td class="px-4 py-3 text-sm">
                        24/04/2022
                      </td>
                    </tr> 
                  
                  </tbody>
                </table>
              </div>
              
              
          </div>
          <div class="w-full overflow-hidden rounded-lg mt-8 shadow-xs">
            <div class="w-full overflow-x-auto">
              <table class="w-full whitespace-no-wrap">
                <thead>
                  <tr
                    class="text-xs  tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                  >
                    <th class="px-4 py-3">Nom du détenteur</th>
                    <th class="px-4 py-3">Contact du détenteur </th>
                    <th class="px-4 py-3">Point de dépot</th>
                    <th class="px-4 py-3">Contact</th>
                    <th class="px-4 py-3">Prix</th>
                    <th class="px-4 py-3">Date et heure de depot</th>

                  </tr>
                </thead>
                <tbody
                  class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                >
                  
                  <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3">
                      <div class="flex items-center text-sm">                          
                        <div>
                          <p class="">Nourriture</p>
                        </div>
                      </div>
                    </td>
                    <td class="px-4 py-3">
                      <div class="flex items-center text-sm">                          
                        <div>
                          <p class="">10kg</p>
                          
                        </div>
                      </div>
                    </td>
                    <td class="px-4 py-3">
                      <div class="flex items-center text-sm">                          
                        <div>
                          <p class="">25</p>
                        </div>
                      </div>
                    </td>
                    <td class="px-4 py-3 text-sm">
                      Moto
                    </td>
                    
                    <td class="px-4 py-3 text-xs">
                      2500Fcfa
                    </td>
                    <td class="px-4 py-3 text-sm">
                      24/04/2022
                    </td>
                  </tr> 
                
                </tbody>
              </table>
            </div>
            
            
        </div>

          <div class="flex-1 h-full max-w-xl mx-auto   ">

            <a
                class="block w-80 px-4 py-4 mt-8  font-medium leading-5 text-center text-white text-md  transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 focus:outline-none  focus:shadow-outline-red"
                href="/commande"
              >
                Nouvelle commande
              </a>
            </div>
        </main>
      </div>
    </div>
  </body>
</html>
