<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:title" content="CEYC Airport City" /> 
        <meta property="og:type" content="article" /> 
        <meta property="og:url" content="http://live.ceycairportcity.org" />
        <meta property="og:description" content="You're welcome to CEYC Online Church. Join us worship the Lord in the beauty of His Holiness" />
        <meta name="twitter:image" content="http://live.christembassynungua.org/images/christ_embassy_nungua.jpg" />
        <meta property="og:image" content="http://live.christembassynungua.org/images/christ_embassy_nungua.jpg"  />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        {{-- <link href="{{ asset('css/bootstrapcss.css') }}" rel="stylesheet"> --}}
        <script src="{{ asset('js/app.js') }}" defer></script>
        <title>Home</title>
        @php
            $bg = array('christ_embassy_nungua.jpg','church.jpg','church1.jpg' ); // array of filenames

            $i = rand(0, count($bg)-1); // generate random number size of the array
            $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
         @endphp

          <style type="text/css">
                .bg-image-slider{
                  background-color: rgba(0, 0, 0, 0.267);
                  background-image: url(../images/{{ $selectedBg }});
                  background-repeat: no-repeat;
                  background-blend-mode: overlay;
                  background-position: top;
                };
          </style>
    </head>
    <body>

      <div class="relative overflow-hidden h-screen  bg-image-slider bg-cover bg-fixed m-0">
        <div class="hidden sm:block sm:absolute sm:inset-y-0 sm:h-full sm:w-full">
          <div class="relative h-full max-w-screen-xl mx-auto">
            <svg class="absolute right-full transform translate-y-1/4 translate-x-1/4 lg:translate-x-1/2" width="404" height="784" fill="none" viewBox="0 0 404 784">
              <defs>
                <pattern id="svg-pattern-squares-1" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                  <rect x="0" y="0" width="4" height="4" class="text-indigo-300" fill="currentColor" />
                </pattern>
              </defs>
              <rect width="404" height="784" fill="url(#svg-pattern-squares-1)" />
            </svg>
            <svg class="absolute left-full transform -translate-y-3/4 -translate-x-1/4 md:-translate-y-1/2 lg:-translate-x-1/2" width="404" height="784" fill="none" viewBox="0 0 404 784">
              <defs>
                <pattern id="svg-pattern-squares-2" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                  <rect x="0" y="0" width="4" height="4" class="text-indigo-300" fill="currentColor" />
                </pattern>
              </defs>
              <rect width="404" height="784" fill="url(#svg-pattern-squares-2)" />
            </svg>
          </div>
        </div>

        <div x-data="{ open: false }" class="relative pt-6 pb-12 sm:pb-16 md:pb-20 lg:pb-28 xl:pb-32 z-0">
          <div class="max-w-screen-xl mx-auto px-4 sm:px-6">
            <nav class="relative flex items-center justify-between sm:h-10 md:justify-center">
              <div class="flex items-center flex-1 md:absolute md:inset-y-0 md:left-0">
                <div class="flex items-center justify-between w-full md:w-auto">
                  <a class="text-white" href="../">
                    {{-- <img class="h-8 w-auto sm:h-10" src="https://ceycairportcity.org/wp-content/uploads/2020/01/ceyc_logo-e1578178440895.png" alt="" /> --}}
                    CEYC Live
                  </a>
                  <div class="-mr-2 flex items-center md:hidden">
                    <button x-on:click="open = true" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-100 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-100 transition duration-150 ease-in-out">
                      <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
              <div class="hidden md:block">
                <a href="../" class="font-medium text-white hover:text-red-500 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">Home</a>
                <a href="../home" class="ml-10 font-medium text-white hover:text-red-500 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">Live Service</a>
                <a href="../videos" class="ml-10 font-medium text-white hover:text-red-500 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">Service Archives</a>
                <a href="#" class="ml-10 font-medium text-white hover:text-red-500 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">Salvation</a>
                <a href="#" class="ml-10 font-medium text-white hover:text-red-500 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">Contact</a>
              </div>
              <div class="hidden md:absolute md:flex md:items-center md:justify-end md:inset-y-0 md:right-0">
                @auth
                <a href="../home" class="inline-flex items-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-indigo-600 bg-white hover:text-indigo-500 focus:outline-none focus:shadow-outline-blue active:bg-gray-50 active:text-indigo-700 transition duration-150 ease-in-out">
                  <i class="las la-user-alt text-2xl mr-2"></i> Account
                </a>
            
                @endauth
                @guest
                <span class="inline-flex rounded-md shadow mx-1">
                  <a href="../login" class="inline-flex items-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-indigo-600 bg-white hover:text-indigo-500 focus:outline-none focus:shadow-outline-blue active:bg-gray-50 active:text-indigo-700 transition duration-150 ease-in-out">
                    Log in
                  </a>
                </span>
                <span class="inline-flex rounded-md shadow mx-1">
                  <a href="../register" class="inline-flex items-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-indigo-600 bg-white hover:text-indigo-500 focus:outline-none focus:shadow-outline-blue active:bg-gray-50 active:text-indigo-700 transition duration-150 ease-in-out">
                    Register
                  </a>
                </span>
                @endguest
              
              </div>
            </nav>
          </div>

          <div x-show="open" style="display: none;" class="absolute top-0 inset-x-0 p-2 md:hidden z-0">
            <div class="rounded-lg shadow-md transition transform origin-top-right" x-show="open" x-transition:enter="duration-150 ease-out" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="duration-100 ease-in" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95">
              <div class="rounded-lg bg-white shadow-xs overflow-hidden">
                <div class="px-5 pt-4 flex items-center justify-between">
                  <a class="text-white" href="../">
                    {{-- <img class="h-8 w-auto" src="https://ceycairportcity.org/wp-content/uploads/2020/01/ceyc_logo-e1578178440895.png" alt="" /> --}}
                    CEYC Live
                  </a>
                  <div class="-mr-2">
                    <button x-on:click="open = false" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-100 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-100 transition duration-150 ease-in-out">
                      <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                      </svg>
                    </button>
                  </div>
                </div>
                <div class="px-2 pt-2 pb-3">
                  <a href="../" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-red-500 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">Home</a>
                  <a href="../home" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-red-500 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">Live Service</a>
                  <a href="../videos" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-red-500 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">Service Archives</a>
                  <a href="#" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-red-500 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">Salvation</a>
                  <a href="#" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-red-500 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">Contact</a>
                </div>
                <div>
                  @auth
                  <a href="../home" class="block w-full px-5 py-3 text-center font-medium text-indigo-600 bg-gray-50 hover:bg-gray-100 hover:text-indigo-700 focus:outline-none focus:bg-gray-100 focus:text-indigo-700 transition duration-150 ease-in-out">
                    <i class="las la-user-alt text-2xl mr-2"></i> Account
                  </a>
                  @endauth
                  @guest
                  <a href="../login" class="block w-full px-5 py-3 text-center font-medium text-indigo-600 bg-gray-50 hover:bg-gray-100 hover:text-indigo-700 focus:outline-none focus:bg-gray-100 focus:text-indigo-700 transition duration-150 ease-in-out">
                    Log in
                  </a>
                  <a href="../register" class="block w-full px-5 py-3 text-center font-medium text-indigo-600 bg-gray-50 hover:bg-gray-100 hover:text-indigo-700 focus:outline-none focus:bg-gray-100 focus:text-indigo-700 transition duration-150 ease-in-out">
                    Register
                  </a>
                  @endguest
                </div>
              </div>
            </div>
          </div>

          <div class="mt-32 mx-auto max-w-screen-xl px-4">
          <!-- sm:mt-48 sm:px-6 md:mt-72 lg:mt-92 xl:mt-72 z-10  -->
            <div class="text-center">
              <h2 class="text-4xl tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
                <span class="text-white">You're Welcome to CEYC Airport City</span>               
              </h2>
              <div class="leading-10 font-extrabold text-red-700 sm:text-5xl sm:leading-none md:text-5xl py-2 md:py-3 px-8 bg-white mt-3 rounded max-w-4xl mx-auto z-20">
                Giving Your Life a New Meaning
              </div>
              <p class="mt-3 max-w-md mx-auto text-base text-gray-100 sm:text-lg md:mt-5 md:text-2xl md:max-w-3xl">
                Register to take full advantage of our Online church.
              </p>
              <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
                <div class="rounded-md shadow">
                  <a href="../register" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline-indigo transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                    Get started
                  </a>
                </div>
                <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
                  <a href="../home" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-indigo-600 bg-white hover:text-indigo-500 focus:outline-none focus:shadow-outline-blue transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                    Live Service
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </body>
</html>