@extends('layouts/landing')

@section('content')
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
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    
    <main class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900 ">
        <div class="flex-1 h-full max-w-xl mx-auto  ">
            
            
            <a
            class="block w-80 px-4 py-4 mt-4 text-2xl font-medium leading-5 text-center  text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 focus:outline-none  focus:shadow-outline-red"
            href="/creercompte"
              >
                Veillez créér un compte!
              </a>
        </div>
        
    </main>   
    
  </body>
</html>
@endsection