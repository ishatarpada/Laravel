 <!-- Navbar -->
 <nav class="bg-gray-800 p-4">
     <div class="container mx-auto flex justify-between items-center">
         <a href="https://flowbite.com" class="flex gap-2 ms-2 md:me-24 text-decoration-none">
             <img src="https://booking.webestica.com/assets/images/logo-icon.svg" class="h-8 me-5" alt="FlowBite Logo" />
             <span class="self-center text-xl font-semibold sm:text-2xl ms-2 whitespace-nowrap text-white">Flight</span>
         </a>
         <div class="relative">
             <button onclick="toggleDropdown()" class="text-white focus:outline-none border rounded-full p-2">
                 <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                         d="M12 14c3.31 0 6 2.69 6 6v2H6v-2c0-3.31 2.69-6 6-6zM12 12c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z" />
                 </svg>
             </button>
             <div id="dropdownMenu"
                 class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-lg shadow-lg hidden z-50">
                 <a href="{{ route('dashboard') }}"
                     class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Dashboard</a>
                 <a href="{{ route('photo') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Show
                     Photos</a>

                 {{--  @if (Gate::allows('isAdmin'))
                     <a href="{{ route('post') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Create a
                         Post</a>
                 @endif --}}

                 {{-- @can(Gate::allows('isAdmin'))
                     <a href="{{ route('post') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Create a
                         Post</a>
                 @else
                     <a href="{{ route('postShow') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">
                         Post</a>
                 @endcan --}}

                 <a href="{{ route('post') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Create a
                     Post</a>
                 <a href="{{ route('postShow', Auth::id()) }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">
                     Post</a>
                 <a href="{{ route('profile.show', Auth::id()) }}"
                     class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Profile</a>
                 <hr>

                 <a href="{{ route('logout') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Log
                     Out</a>
             </div>
         </div>
     </div>
 </nav>

 <script>
     function toggleDropdown() {
         var menu = document.getElementById("dropdownMenu");
         menu.classList.toggle("hidden");
     }

     // Close the dropdown if the user clicks outside of it
     window.onclick = function(event) {
         if (!event.target.matches('button') && !event.target.matches('svg') && !event.target.matches('path')) {
             var dropdowns = document.getElementsByClassName("dropdown-content");
             for (var i = 0; i < dropdowns.length; i++) {
                 var openDropdown = dropdowns[i];
                 if (!openDropdown.classList.contains('hidden')) {
                     openDropdown.classList.add('hidden');
                 }
             }
         }
     }
 </script>
