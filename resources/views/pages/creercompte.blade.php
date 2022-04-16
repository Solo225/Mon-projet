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
  <div class="flex items-center min-h-56 p-6 bg-gray-50 dark:bg-gray-900">
      <div
        class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800"
      >
        <div class="flex flex-col overflow-y-auto md:flex-row">
          <div class="h-32 md:h-auto md:w-1/2">
            <img
              aria-hidden="true"
              class="object-cover w-full h-full dark:hidden"
              src="../assets/dashboard/img/login-office.jpg"
              alt="Office"
            />
            <img 
              aria-hidden="true"
              class="hidden object-cover w-full h-full dark:block"
              src="../assets/dashboard/img/create-account-office-dark.jpeg"
              alt="Office"
            />
          </div>
          <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
             <div class="w-full">
               
            <form method="POST" action="/creercompte">
                @csrf
                  <h1
                    class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200"
                  >
                    Créer un compte
                  </h1>
                  <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Nom</span>
                    <input name="nom"
                      class="block w-full mt-1 text-smdark:border-gray-600 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:text-gray-300 dark:focus:shadow-outline-gray form-input from-control"
                      placeholder="Entrez votre nom" value="{{old('nom')  }}" required 
                    />
                    <span class="text-red-700">@error('nom'){{ 'Non valide' }}
                  
                      @enderror</span>
                  </label>
                  <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Prenom(s)</span>
                    <input name="prenom"
                      class="block w-full mt-1 text-smdark:border-gray-600 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:text-gray-300 dark:focus:shadow-outline-gray form-input from-control"
                      placeholder="Entrez votre prenom(s)" value="{{old('prenom')  }}" required
                    />
                    <span class="text-red-700">@error('prenom'){{ 'Non valide' }}
                      @enderror</span>
                  </label>
                   <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">e-mail</span>
                    <input name="email"
                      class="block w-full mt-1 text-smdark:border-gray-600 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:text-gray-300 dark:focus:shadow-outline-gray form-input from-control"
                      placeholder="ronphobos@phobos.ci" value="{{old('email')  }}" required
                    />
                    <span class="text-red-700">@error('email'){{ 'Non valide' }}
                  
                      @enderror</span>
                  </label>
                    <input type="hidden" name="type" value="client">
                  <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Contact</span>
                    <input name="contact"
                      class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:text-gray-300 dark:focus:shadow-outline-gray form-input from-control"
                      placeholder="00 00 00 00 00" value="{{old('contact')  }}" required
                      
                    />
                    <span class="text-red-700">@error('contact'){{ 'Non valide ou existe déjà' }}
                  
                      @enderror</span>
                  </label>
                  <label class="block mt-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Mot de passe</span>
                    <input name="password"
                      class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:text-gray-300 dark:focus:shadow-outline-gray form-input from-control"
                      placeholder="***************"
                      type="password" value="{{old('password')  }}" required
                      
                    />
                    <span class="text-red-700">@error('password'){{ '8 caractères minimum' }}
                  
                      @enderror</span>
                  </label>
                  <label class="block mt-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">
                      Confirmation
                    </span>
                    <input name="password_confirmation"
                      class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:text-gray-300 dark:focus:shadow-outline-gray form-input  from-control"
                      placeholder="***************"
                      type="password" value="{{old('password_confirmation')  }}" required
                      
                    />
                    <span class="text-red-700">@error('password_confirmation'){{ 'Non valide' }}
                  
                      @enderror</span>
                  </label>

                  <div class="flex mt-6 text-sm">
                    <label class="flex items-center dark:text-gray-400">
                      <input
                        type="checkbox"
                        class="text-red-600 form-checkbox focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:focus:shadow-outline-gray" required
                      />
                      <span class="ml-2">
                      J'accepte la
                        <a class="underline"
                        href="#"
                        >
                        politique de confidentialité</a>
                      </span>
                    </label>
                  </div>

                  <!-- You should use a button here, as the anchor is only used for the example  -->
                  <button
                    class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red"

                  >
                     Créer 
                  </button>

            </form>


              <hr class="my-8" />

              <button
                class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium leading-5 text-white text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray"
              >



                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>

                </svg>
                Instagram
              </button>
              <button
                class="flex items-center justify-center w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-white text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray"
              >



                  <!-- Facebook Filled icon by Icons8 -->
                  <svg xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  version="1.0"
                  x="0px"
                  y="0px"
                  width="50"
                  height="50"
                  viewBox="0 0 50 50"
                  style="null"
                  class="w-4 h-4 mr-2"
                  aria-hidden="true"
                  viewBox="0 0 24 24"
                  fill="currentColor">
                  <path d="M40,0H10C4.486,0,0,4.486,0,10v30c0,5.514,4.486,10,10,10h30c5.514,0,10-4.486,10-10V10C50,4.486,45.514,0,40,0z M39,17h-3 c-2.145,0-3,0.504-3,2v3h6l-1,6h-5v20h-7V28h-3v-6h3v-3c0-4.677,1.581-8,7-8c2.902,0,6,1,6,1V17z"/>
                </svg>
                Facebook
              </button>

              <p class="mt-4">
                <a
                  class="text-sm font-medium text-red-600 dark:text-red-400 hover:underline"
                  href="/login"
                >
                  J'ai déjà un compte.
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>

</html>
