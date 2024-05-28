  @if (session('user'))
      {{--  ambil data user dan tampilkan --}}
      <nav id="navbar" class="fixed top-0 w-full z-10">
          <div
              class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4 bg-transparent transition-all duration-500 border-b border-transparent dark:bg-gray-900">
              <div class="left">
                  <a class="flex items-center space-x-3">
                      <img src={{ asset('assets/logo.svg') }} class="h-8" alt="Somno Logo" draggable="false" />
                  </a>
              </div>
              <div class="right">
                  <div class="flex items-center">
                      <button
                          class="flex items-center space-x-2 text-gray-800 dark:text-gray-200 bg-primary dark:bg-gray-800 px-3 py-2 rounded-full focus:outline-none focus:ring-2 focus:ring-primary"
                          id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                          data-dropdown-placement="bottom">
                          <img class="w-8 h-8 rounded-full" src="/assets/robot.svg" alt="user photo" draggable="false">

                          <span class="text-sm font-semibold text-gray-200">Hi,
                              {{ session('user')['name'] }}</span>
                      </button>

                      <div class="z-50 hidden my-4 text-base list-none bg-primary divide-y divide-gray-100 rounded-lg shadow"
                          id="user-dropdown">
                          <ul class="py-2" aria-labelledby="user-menu-button">
                              <li>
                                  <a href="#"
                                      class="block px-4 py-2 text-sm text-slate-100 hover:bg-gray-100 hover:text-black">Profile</a>
                              </li>
                              <li>
                                  <a href="#"
                                      class="block px-4 py-2 text-sm text-slate-100 hover:bg-gray-100 hover:text-black">Dashboard</a>
                              </li>
                              <li>
                                  <a href="#"
                                      class="block px-4 py-2 text-sm text-slate-100 hover:bg-gray-100 hover:text-black">Cek
                                      Kualitas Tidur</a>
                              </li>
                              <li>
                                  <a href="#"
                                      class="block px-4 py-2 text-sm text-slate-100 hover:bg-gray-100 hover:text-black">Sign
                                      out</a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </nav>
  @else
      <nav id="navbar" class="fixed top-0 w-full z-10">
          <div
              class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4 bg-transparent transition-all duration-500 border-b border-transparent dark:bg-gray-900">
              <a class="flex items-center space-x-3 rtl:space-x-reverse">
                  <img src={{ asset('assets/logo.svg') }} class="h-8" alt="Somno Logo" draggable="false" />
              </a>
              <div class="flex items-center space-x-6 rtl:space-x-reverse">
                  <a href="#"
                      class="text-sm font-bold text-bold hover:underline hover:underline-offset-4">Login</a>
                  <button href="#"
                      class="text-white bg-primary hover:bg-gray-500 hover:duration-300 hover:ease-in-out focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-4 py-2 text-center">Sign
                      Up
                  </button>
              </div>
          </div>
      </nav>
  @endif
