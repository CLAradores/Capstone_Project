<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- flowbite -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.css"
      rel="stylesheet"
    />
    <!-- Material Tailwind -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css"
    />
    <script
      src="https://kit.fontawesome.com/cc433e9725.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>KodeCenter</title>
  </head>
  <body>

      <nav
        class="fixed  top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700"
        style=" font-family: Poppins, sans-serif">
        <div class="px-3 py-3 lg:px-5 lg:pl-3 w-9/12 mx-auto">
          <div class="flex items-center justify-between">
            <div class="flex items-center justify-start rtl:justify-end ">
              <button
                data-drawer-target="logo-sidebar"
                data-drawer-toggle="logo-sidebar"
                aria-controls="logo-sidebar"
                type="button"
                class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
              >
                <span class="sr-only">Open sidebar</span>
                <svg
                  class="w-6 h-6"
                  aria-hidden="true"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    clip-rule="evenodd"
                    fill-rule="evenodd"
                    d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"
                  ></path>
                </svg>
              </button>
              <a href="/" class="flex ms-2 md:me-24">
                <img
                src="../img/healthlogo2.png"
                  class="h-8 me-3"
                  alt="FlowBite Logo"
                />
                <span
                  class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white"
                  >KodeCenter</span
                >
              </a>
            </div>
            <div class="flex items-center">
              <button class="flex flex-end bg-green-500 rounded font-bold text-white hover:bg-green-300 p-2"> <a href="/appointment">Book Appointment</a></button>
              <div class="flex items-center ms-3">
                <div>
                  <button
                    type="button"
                    class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    aria-expanded="false"
                    data-dropdown-toggle="dropdown-user"
                  >
                    <span class="sr-only">Open user menu</span>
                    <img
                      class="w-8 h-8 rounded-full"
                      src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                      alt="user photo"
                    />
                  </button>
                </div>
                <div
                  class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                  id="dropdown-user"
                >
                  <div class="px-4 py-3" role="none">
                    <p class="text-sm text-gray-900 dark:text-white" role="none">
                      Neil Sims
                    </p>
                    <p
                      class="text-sm font-medium text-gray-900 truncate dark:text-gray-300"
                      role="none"
                    >
                      neil.sims@flowbite.com
                    </p>
                  </div>
                  <ul class="py-1" role="none">
                    <li>
                      <a
                        href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                        role="menuitem"
                        >Dashboard</a
                      >
                    </li>
                    <li>
                      <a
                        href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                        role="menuitem"
                        >Settings</a
                      >
                    </li>
                    <li>
                      <a
                        href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                        role="menuitem"
                        >Earnings</a
                      >
                    </li>
                    <li>
                      <a
                        href="{{ route('logout') }}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                        role="menuitem"
                        >Sign out</a
                      >
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
   
      <div class="flex justify-start items-left text-left mt-28 max-w-7xl mx-auto">
  
        <h1 class="text-2xl font-semibold flex justify-center items-center">
          Appointment Details:
        </h1>
      </div>
  <div class="flex flex-col justify-center items-center  max-w-6xl mx-auto">
    <div class="flex flex-col justify-center items-center  mt-10 ">

    


    <table class=" table-auto w-[90vw] text-sm text-center rtl:text-right text-gray-500 dark:text-gray-400  max-w-screen-2xl mx-auto ">
      
        <thead class=" text-xs text-gray-900 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr class="hover:bg-green-50 ">
                
              
                <th scope="col" class="px-6 py-3 border">
                  Queue Number
                </th>
                <th scope="col" class="px-6 py-3 border">
                  Concern Details
                </th>
                <th scope="col" class="px-6 py-3 border">
                  Service Type
                </th>
                <th scope="col" class="px-6 py-3 border">
                  Appointment Date
                </th>
                <th scope="col" class="px-6 py-3 border">
                  Status
                </th>
            </tr>
          <hr/>
            
          {{-- <th scope="col" class="px-6 py-3 font-normal	text-gray-900 border">{{$appointment->service_type}}</td> --}}

          </thead>
          <tbody>
              @foreach($appointments as $appointment )
              <tr class="hover:bg-green-50 	">
                <td class="px-6 py-3 font-normal	text-gray-900 border">{{ sprintf('%02d%02d-%03d', substr($appointment->appointment_date, 5, 2), substr($appointment->appointment_date, 8, 2), $appointment->queue_number) }}</td>
                <td class="px-6 py-3 font-normal	text-gray-900 border">{{ $appointment->concern }}</td>
                <td class="px-6 py-3 font-normal	text-gray-900 border">{{ $appointment->service_type }}</td>
                <td class="px-6 py-3 font-normal	text-gray-900 border">{{ $appointment->appointment_date }}</td>

                          <td scope="col" class="px-6 py-3 font-normal	text-gray-900 border"> <span class="px-4 py-1 bg-red-400 rounded-full font-bold">Onqueue</span></td>
                 
              </tr>
              @endforeach
          </tbody>
    </table>
  </div>
    </div>
  </div>

  <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/script-name.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.js"></script>
</body>
</html>
