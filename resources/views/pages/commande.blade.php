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
    <script>
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
    </script>

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
            collecte

            <div class="border border-red">

            
            <span class="text-gray-700 dark:text-gray-400 font-bold">Type de colis</span>
            <ul class="grid grid-cols-3 mt-4 gap-x-5 m-10 max-w-md mx-auto">
              <li class="relative font-blod">
                <input class="sr-only peer" type="radio" value="courses" name="answer" id="answer_yes">
                <label class="flex items-center justify-center font-blod p-5  bg-white border border-gray-300 text-sm rounded-lg cursor-pointer focus:outline-none peer-checked:bg-red-500 peer-checked:text-white  peer-checked:ring-red-500 peer-checked:ring-2 peer-checked:border-transparent " for="answer_yes">Courses</label>
            
                
            
              <li class="relative">
                <input class="sr-only peer" type="radio" value="colis" name="answer" id="answer_no">
                <label class="flex items-center justify-center p-5  bg-white border border-gray-300 text-sm rounded-lg cursor-pointer focus:outline-none  peer-checked:ring-red-500 peer-checked:bg-red-500 peer-checked:text-white peer-checked:ring-2 peer-checked:border-transparent" for="answer_no"> Colis</label>
            
                
               </li>
            
              <li class="relative">
                <input class="sr-only peer" type="radio" value="maybe" name="answer" id="answer_maybe">
                <label class="flex items-center justify-center p-5  bg-white border border-gray-300 text-sm rounded-lg cursor-pointer focus:outline-none peer-checked:bg-red-500 peer-checked:text-white peer-checked:ring-red-500 peer-checked:ring-2 peer-checked:border-transparent" for="answer_maybe"> Fragile</label>
            
                
              </li>
            </ul>
            <span class="text-gray-700 dark:text-gray-400 font-bold">Poids approximatif en Kg</span>
            <ul class="grid grid-cols-3 mt-4 gap-x-5 m-10 max-w-md mx-auto">
              <li class="relative">
                <input class="sr-only peer" type="radio" value="<3" name="answers" id="answer_yess">
                <label class="flex items-center justify-center p-5  bg-white border border-gray-300 text-sm rounded-lg cursor-pointer focus:outline-none peer-checked:bg-red-500 peer-checked:text-white peer-checked:ring-red-500 peer-checked:ring-2 peer-checked:border-transparent" for="answer_yess">< 3</label>
            
                
            
              <li class="relative">
                <input class="sr-only peer" type="radio" value="3-10" name="answers" id="answer_nos">
                <label class="flex  items-center justify-center p-5  bg-white border border-gray-300 text-sm rounded-lg cursor-pointer focus:outline-none peer-checked:bg-red-500 peer-checked:text-white peer-checked:ring-red-500 peer-checked:ring-2 peer-checked:border-transparent" for="answer_nos">3-10</label>
            
                
               </li>
            
              <li class="relative">
                <input class="sr-only peer" type="radio" value=">10" name="answers" id="answer_maybes">
                <label class="flex p-5 items-center justify-center  bg-white border text-sm border-gray-300 rounded-lg cursor-pointer focus:outline-none peer-checked:bg-red-500 peer-checked:text-white peer-checked:ring-red-500 peer-checked:ring-2 peer-checked:border-transparent" for="answer_maybes">>10</label>
            
                
              </li>
            </ul>
            <span class="text-gray-700 dark:text-gray-400 font-bold">Nombre de colis</span>
            <ul class="grid grid-cols-3 mt-4 gap-x-5 m-10 max-w-md mx-auto">
              <li class="relative">
                <input class="sr-only peer" type="radio" value="<5" name="answerss" id="answer_yesss">
                <label class="flex items-center justify-center p-5  bg-white border border-gray-300 text-sm rounded-lg cursor-pointer focus:outline-none peer-checked:bg-red-500 peer-checked:text-white peer-checked:ring-red-500 peer-checked:ring-2 peer-checked:border-transparent" for="answer_yesss">< 5</label>
            
                
            
              <li class="relative">
                <input class="sr-only peer" type="radio" value="5-10" name="answerss" id="answer_noss">
                <label class="flex items-center justify-center p-5  bg-white border border-gray-300 text-sm rounded-lg cursor-pointer focus:outline-none peer-checked:bg-red-500 peer-checked:text-white peer-checked:ring-red-500 peer-checked:ring-2 peer-checked:border-transparent" for="answer_noss">5-10</label>
            
                
               </li>
            
              <li class="relative">
                <input class="sr-only peer" type="radio" value=">10" name="answerss" id="answer_maybess">
                <label class="flex items-center justify-center p-5  bg-white border text-sm border-gray-300 rounded-lg cursor-pointer focus:outline-none peer-checked:bg-red-500 peer-checked:text-white peer-checked:ring-red-500 peer-checked:ring-2 peer-checked:border-transparent" for="answer_maybess">>10 </label>
            
                
              </li>
            </ul>
            <span class="text-gray-700 dark:text-gray-400 font-bold">Moyen de transport</span>
            <ul class="grid grid-cols-3 mt-4 gap-x-5 m-10 max-w-md mx-auto">
              <li class="relative">
                <input class="sr-only peer" type="radio" value="Piéton" name="answersss" id="answer_yessss">
                <label class="flex items-center justify-center p-5  bg-white border border-gray-300  text-sm rounded-lg cursor-pointer focus:outline-none peer-checked:bg-red-500 peer-checked:text-white peer-checked:ring-red-500 peer-checked:ring-2 peer-checked:border-transparent" for="answer_yessss">Piéton</label>
            
                
            
              <li class="relative">
                <input class="sr-only peer" type="radio" value="Vélo" name="answersss" id="answer_nossss">
                <label class="flex items-center justify-center p-5  bg-white border border-gray-300 text-sm rounded-lg cursor-pointer focus:outline-none peer-checked:bg-red-500 peer-checked:text-white peer-checked:ring-red-500 peer-checked:ring-2 peer-checked:border-transparent" for="answer_nossss">Vélo</label>
            
                
               </li>
            
              <li class="relative">
                <input class="sr-only peer" type="radio" value="Scooter" name="answersss" id="answer_maybesss">
                <label class="flex items-center justify-center p-5  bg-white border text-sm border-gray-300 rounded-lg cursor-pointer focus:outline-none peer-checked:bg-red-500 peer-checked:text-white peer-checked:ring-red-500 peer-checked:ring-2 peer-checked:border-transparent" for="answer_maybesss">Scooter </label>
            
                
              </li>
              <li class="relative mt-4">
                <input class="sr-only peer" type="radio" value="Camion" name="answersss" id="answer_maybesssss" required>
                <label class="flex items-center justify-center  p-5  bg-white border text-sm border-gray-300 rounded-lg cursor-pointer focus:outline-none peer-checked:bg-red-500 peer-checked:text-white peer-checked:ring-red-500 peer-checked:ring-2 peer-checked:border-transparent" for="answer_maybesssss">Camion</label>
            
                     
              </li>
              <li class="relative mt-4">
                <input class="sr-only peer" type="radio" value="Voiture" name="answersss" id="answer_maybessss">
                <label class="flex items-center justify-center p-5  bg-white border text-sm border-gray-300 rounded-lg cursor-pointer focus:outline-none peer-checked:bg-red-500 peer-checked:text-white peer-checked:ring-red-500 peer-checked:ring-2 peer-checked:border-transparent" for="answer_maybessss">  Voiture</label>
            
                
              </li>
            </ul>
            <div class="flex">

            
             
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400 font-bold">Date de depot</span>
                <input Type="text" name="date" id="datepicker" placeholder="Date"
                  class="block  mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:text-gray-300 dark:focus:shadow-outline-gray form-input" required
                />
                
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 relative left-5 dark:text-gray-400 font-bold">Heure</span>
                <input Type="time" name="date"
                  class="block relative left-5  mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:text-gray-300 dark:focus:shadow-outline-gray form-input" required
                />
                
              </label>
             
            </div>

              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400 font-bold">Nom de celui avec qui récupérer le colis </span>
                <input name="recupere"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                   required
                />
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400 font-bold">Contact de celui avec qui récupérer le colis </span>
                <input name="contact_recup"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                   required
                />
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400 font-bold">Point de dépot </span>
                <input name="point_depot"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                   required
                />
              </label>
            </div>
            Dêpot
            <div class="border border-red">

            
              <div class="flex">

            
             
                <label class="block mt-4 text-sm">
                  <span class="text-gray-700 dark:text-gray-400 font-bold">Date de depot</span>
                  <input Type="text" name="date" id="datepickers" placeholder="Date"
                    class="block  mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:text-gray-300 dark:focus:shadow-outline-gray form-input" required
                  />
                  
                </label>
                <label class="block mt-4 text-sm">
                  <span class="text-gray-700 relative left-5 dark:text-gray-400 font-bold">Heure</span>
                  <input Type="time" name="date"
                    class="block relative left-5  mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:text-gray-300 dark:focus:shadow-outline-gray form-input" required
                  />
                  
                </label>
               
              </div>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400 font-bold">Contact de celui  qui reçoit le colis </span>
                <input name="destinataire"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                   required
                />
              </label>
            </div>
              {{-- <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Nom de celui qui reçois le colis </span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  
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
