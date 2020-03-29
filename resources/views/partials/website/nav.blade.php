<nav x-data="{ open: false }" x-on:keydown.window.escape="open = false" class="bg-indigo-700">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-16">
        <div class="flex items-center">
          <div class="flex-shrink-0 text-white">
            {{-- <img class="h-8 w-8" src="https://ceycairportcity.org/wp-content/uploads/2020/01/ceyc_logo-e1578178440895.png" alt="" /> --}}
            <a href="../home">CEYC Live</a>
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline">
              <a href="../home" class="px-3 py-2 rounded-md text-sm font-medium {{ request()->is('home') ? 'text-white  bg-indigo-800 focus:outline-none focus:text-white focus:bg-indigo-600' : 'text-indigo-50 hover:text-white hover:bg-indigo-600 focus:outline-none focus:text-white focus:bg-indigo-600' }}">Live Service</a>
              <a href="../videos" class="ml-4 px-3 py-2 rounded-md text-sm font-medium  {{ request()->is('videos') ? 'text-white  bg-indigo-800 focus:outline-none focus:text-white focus:bg-indigo-600' : 'text-indigo-50 hover:text-white hover:bg-indigo-600 focus:outline-none focus:text-white focus:bg-indigo-600' }}">Service Archives</a>
              <a href="../givings" class="ml-4 px-3 py-2 rounded-md text-sm font-medium {{ request()->is('givings') ? 'text-white  bg-indigo-800 focus:outline-none focus:text-white focus:bg-indigo-600' : 'text-indigo-50 hover:text-white hover:bg-indigo-600 focus:outline-none focus:text-white focus:bg-indigo-600' }}">Giving</a>
              <a href="#" v-on:click.prevent="shareURl = true" class="ml-4 px-3 py-2 rounded-md text-sm font-medium  {{ request()->is('invite') ? 'text-white  bg-indigo-800 focus:outline-none focus:text-white focus:bg-indigo-600' : 'text-indigo-50 hover:text-white hover:bg-indigo-600 focus:outline-none focus:text-white focus:bg-indigo-600' }}">Invite Someone</a> 
              <a href="#" v-on:click.prevent="salvation()" class="ml-4 px-3 py-2 rounded-md text-sm font-medium text-indigo-100 bg-red-500 hover:text-white hover:bg-indigo-600 focus:outline-none focus:text-white focus:bg-indigo-600">Get Born Again</a>


            </div>
          </div>
        </div>
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">
            <button class="p-1 border-2 border-transparent text-indigo-300 rounded-full hover:text-white focus:outline-none focus:text-white focus:bg-indigo-600">
              <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
              </svg>
            </button>
            <div x-on:click.away="open = false" class="ml-3 relative" x-data="{ open: false }">
              <div>
                <button x-on:click="open = !open" class="max-w-xs flex items-center text-sm rounded-full text-white focus:outline-none focus:shadow-solid">
                  {{-- <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" /> --}}
                  <div class="h-8 w-8 rounded-full bg-white">
                    <i class="las la-user-alt text-3xl text-indigo-600"></i>
                  </div>
                </button>
              </div>
              <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg">
                <div class="py-1 rounded-md bg-white shadow-xs">
                  <a href="../accounts" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Edit Profile</a>
                  <a href="../invites" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Invites</a>
                  <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" href="{{ route('logout') }}"  onclick="event.preventDefault();
                  document.getElementById('logout-form2').submit();">
                  Logout
                  <form id="logout-form2" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="-mr-2 flex md:hidden">
          <button x-on:click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-indigo-300 hover:text-white hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600 focus:text-white">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
              <path x-bind:class="{'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              <path x-bind:class="{'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>
    <div x-bind:class="{'block': open, 'hidden': !open}" class="hidden md:hidden">
      <div class="px-2 pt-2 pb-3 sm:px-3">
      <a href="../" class="block px-3 py-2 rounded-md text-base font-medium text-white bg-indigo-800 focus:outline-none focus:text-white focus:bg-gray-700">Home</a>
        <a href="../home" class="block px-3 py-2 rounded-md text-base font-medium text-white bg-indigo-800 focus:outline-none focus:text-white focus:bg-gray-700">Live Service</a>
        <a href="../videos" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-indigo-200 hover:text-white hover:bg-indigo-600 focus:outline-none focus:text-white focus:bg-indigo-600">Service Archives</a>
        <a href="../givings" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-indigo-200 hover:text-white hover:bg-indigo-600 focus:outline-none focus:text-white focus:bg-indigo-600">Giving</a>
        {{-- <a href="#" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-indigo-200 hover:text-white hover:bg-indigo-600 focus:outline-none focus:text-white focus:bg-indigo-600">Messaging Center</a> --}}
        <a href="#" v-on:click.prevent="shareURl = true" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-indigo-200 hover:text-white hover:bg-indigo-600 focus:outline-none focus:text-white focus:bg-indigo-600">Invite Someone</a>
      </div>
      @auth
      <div class="pt-4 pb-3 border-t border-gray-700">
        <div class="flex items-center px-5">
          <div class="flex-shrink-0">
            {{-- <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" /> --}}
            <i class="text-3xl text-white rounded-full las la-user-circle"></i>
          </div>
          
          <div class="ml-3">
          <div class="text-base font-medium leading-none text-white">{{ auth()->user()->name }}/</div>
            <div class="mt-1 text-sm font-medium leading-none text-indigo-300">{{ auth()->user()->email }}</div>
          </div>
        </div>
       
        <div class="mt-3 px-2">
          <a href="../accounts" class="block px-3 py-2 rounded-md text-base font-medium text-indigo-300 hover:text-white hover:bg-indigo-600 focus:outline-none focus:text-white focus:bg-indigo-600">Edit Profile</a>
          <a href="../invites" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-indigo-300 hover:text-white hover:bg-indigo-600 focus:outline-none focus:text-white focus:bg-indigo-600">Invites</a>
          <a  class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-indigo-300 bg-indigo-800 hover:text-white hover:bg-indigo-600 focus:outline-none focus:text-white focus:bg-indigo-600" href="{{ route('logout') }}"  onclick="event.preventDefault();
              document.getElementById('logout-form2').submit();">
              Logout
              <form id="logout-form2" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
						</a>
        </div>
      </div>
      @endauth
    </div>
        
    <div style="display:none"  v-show="shareURl" class="fixed bottom-0 inset-x-0 px-4 pb-6 sm:inset-0 sm:p-0 sm:flex sm:items-center sm:justify-center">
      <div v-show="shareURl" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 transition-opacity">
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
      </div>

      <div v-show="shareURl" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" class="bg-white rounded-lg px-4 pt-5 pb-4 overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full sm:p-6">
        <div>
          <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-green-100">
            <i class="las la-broadcast-tower text-green-600 text-2xl"></i>
          </div>
          <div class="mt-3 text-center sm:mt-5">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
              Share with Family & Friends
            </h3>
            <div class="mt-2">
              <p class="text-sm leading-5 text-gray-500 mt-1 mb-3">
                Choose your prefered Social Platform
              </p>
            <a class="px-3 pt-8 pb-2 rounded-md text-sm font-medium text-indigo-600 hover:text-white hover:bg-indigo-900 focus:outline-none focus:text-white focus:bg-indigo-900" href="https://www.facebook.com/sharer/sharer.php?u={{ url('/register') }}?invite={{ auth()->user()->id }}" target="_blank"><i class="text-5xl lab la-facebook"></i></a>
              <a class="ml-4 px-3 pt-8 pb-2 rounded-md text-sm font-medium text-indigo-600 hover:text-white hover:bg-indigo-900 focus:outline-none focus:text-white focus:bg-indigo-900" href="https://twitter.com/intent/tweet?text=You're welcome to CEYC Online Church. Join us in an awesome time with the Lord.&amp;url={{ url('/register') }}?invite={{ auth()->user()->id }}" class="social-button " target="_blank"><i class="text-5xl lab la-twitter"></i></a>
              <a class="ml-4 px-3 pt-8 pb-2 rounded-md text-sm font-medium text-indigo-600 hover:text-white hover:bg-indigo-900 focus:outline-none focus:text-white focus:bg-indigo-900" href="https://wa.me/?text={{ url('/register') }}?invite={{ auth()->user()->id }}" class="social-button " target="_blank"><i class="text-5xl lab la-whatsapp"></i></span></a>   
            </div>
          </div>
          <div class="mt-5 sm:mt-6">
            <span class="flex w-full rounded-md shadow-sm">
              <button v-on:click="closeShareURL()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-indigo-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                Close
              </button>
            </span>
          </div>
        </div>

      </div>
    </div>
  </nav>