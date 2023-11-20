@extends('build')

@section('data')
<div class="p-4 sm:ml-64">
    <div class="mt-20">
  
      <button
        data-modal-target="default-modal"
        data-modal-toggle="default-modal"
        class="block text-white bg-blue-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
        type="button"
      >
        <i class="fa-solid fa-address-book"></i>&nbsp; Post Event
      </button>

      <!-- Main modal -->
      <div
        id="default-modal"
        tabindex="-1"
        aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
      >
        <div class="w-auto py-6 flex flex-col justify-center sm:py-12">
          <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div
              class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10"
            >
              <div class="max-w-md mx-auto">
                <div class="flex items-center space-x-5">
                  <div
                    class="h-14 w-14 bg-yellow-200 rounded-full flex flex-shrink-0 justify-center items-center text-yellow-500 text-2xl font-mono"
                  >
                    <img src="../img/eventBarangayLOGO.png" alt="" />
                  </div>
                  <div
                    class="block pl-2 font-semibold text-xl self-start text-gray-700"
                  >
                    <h2 class="leading-relaxed">Create an Event</h2>
                    <p
                      class="text-sm text-gray-500 font-normal leading-relaxed"
                    >
                      Lorem ipsum, dolor sit amet consectetur adipisicing
                      elit.
                    </p>
                  </div>
                </div>
                <div class="divide-y divide-gray-200">
                  <div
                    class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7"
                  >
                    <div class="flex flex-col">
                      <label class="leading-loose">Event Title</label>
                      <input
                        type="text"
                        class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                      />
                    </div>
                    <div class="flex flex-col">
                      <label class="leading-loose">Location</label>
                      <input
                        type="text"
                        class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                      />
                    </div>
                    <div class="flex items-center space-x-4">
                      <div class="flex flex-col">
                        <label class="leading-loose">Start</label>
                        <div
                          class="relative focus-within:text-gray-600 text-gray-400"
                        >
                          <input
                            type="date"
                            class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                            placeholder="25/02/2020"
                          />
                          <div class="absolute left-3 top-2">
                            <svg
                              class="w-6 h-6"
                              fill="none"
                              stroke="currentColor"
                              viewBox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                              ></path>
                            </svg>
                          </div>
                        </div>
                      </div>
                      <div class="flex flex-col">
                        <label class="leading-loose">Time</label>
                        <div
                          class="relative focus-within:text-gray-600 text-gray-400"
                        >
                          <input
                            type="time"
                            class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                            placeholder="26/02/2020"
                          />
                          <div class="absolute left-3 top-2">
                            <svg
                              class="w-6 h-6"
                              fill="none"
                              stroke="currentColor"
                              viewBox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                              ></path>
                            </svg>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="flex flex-col">
                      <label class="leading-loose">Event Description</label>
                      <input
                        type="text"
                        class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                        placeholder="Optional"
                      />
                    </div>
                  </div>
                  <div class="pt-4 flex items-center space-x-4">
                    <button
                      class="flex justify-center items-center w-full text-gray-900 px-4 py-3 rounded-md focus:outline-none"
                    >
                      <svg
                        class="w-6 h-6 mr-3"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M6 18L18 6M6 6l12 12"
                        ></path>
                      </svg>
                      Cancel
                    </button>
                    <button
                      class="bg-green-500 green-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none"
                    >
                      Create
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Main modal -->
      <div
        id="static-modal"
        data-modal-backdrop="static"
        tabindex="-1"
        aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
      ></div>
    </div>
    <!-- start MOdal -->
    <!-- //////////////////////////////////////////////////////////////////////////////////// -->
    <div class="bg-gray-200">
      <div class="container mx-auto mt-10">
        <div class="wrapper bg-white rounded shadow w-full">
          <div class="header flex justify-between border-b p-2">
            <span class="text-lg font-bold"> 2020 July </span>
            <div class="buttons">
              <button class="p-1">
                <svg
                  width="1em"
                  fill="gray"
                  height="1em"
                  viewBox="0 0 16 16"
                  class="bi bi-arrow-left-circle"
                  fill="currentColor"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-rule="evenodd"
                    d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"
                  />
                  <path
                    fill-rule="evenodd"
                    d="M8.354 11.354a.5.5 0 0 0 0-.708L5.707 8l2.647-2.646a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708 0z"
                  />
                  <path
                    fill-rule="evenodd"
                    d="M11.5 8a.5.5 0 0 0-.5-.5H6a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5z"
                  />
                </svg>
              </button>
              <button class="p-1">
                <svg
                  width="1em"
                  fill="gray"
                  height="1em"
                  viewBox="0 0 16 16"
                  class="bi bi-arrow-right-circle"
                  fill="currentColor"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-rule="evenodd"
                    d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"
                  />
                  <path
                    fill-rule="evenodd"
                    d="M7.646 11.354a.5.5 0 0 1 0-.708L10.293 8 7.646 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z"
                  />
                  <path
                    fill-rule="evenodd"
                    d="M4.5 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z"
                  />
                </svg>
              </button>
            </div>
          </div>
          <table class="w-full" style="height: 50vh">
            <thead>
              <tr>
                <th
                  class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs"
                >
                  <span class="xl:block lg:block md:block sm:block hidden"
                    >Sunday</span
                  >
                  <span class="xl:hidden lg:hidden md:hidden sm:hidden block"
                    >Sun</span
                  >
                </th>
                <th
                  class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs"
                >
                  <span class="xl:block lg:block md:block sm:block hidden"
                    >Monday</span
                  >
                  <span class="xl:hidden lg:hidden md:hidden sm:hidden block"
                    >Mon</span
                  >
                </th>
                <th
                  class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs"
                >
                  <span class="xl:block lg:block md:block sm:block hidden"
                    >Tuesday</span
                  >
                  <span class="xl:hidden lg:hidden md:hidden sm:hidden block"
                    >Tue</span
                  >
                </th>
                <th
                  class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs"
                >
                  <span class="xl:block lg:block md:block sm:block hidden"
                    >Wednesday</span
                  >
                  <span class="xl:hidden lg:hidden md:hidden sm:hidden block"
                    >Wed</span
                  >
                </th>
                <th
                  class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs"
                >
                  <span class="xl:block lg:block md:block sm:block hidden"
                    >Thursday</span
                  >
                  <span class="xl:hidden lg:hidden md:hidden sm:hidden block"
                    >Thu</span
                  >
                </th>
                <th
                  class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs"
                >
                  <span class="xl:block lg:block md:block sm:block hidden"
                    >Friday</span
                  >
                  <span class="xl:hidden lg:hidden md:hidden sm:hidden block"
                    >Fri</span
                  >
                </th>
                <th
                  class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs"
                >
                  <span class="xl:block lg:block md:block sm:block hidden"
                    >Saturday</span
                  >
                  <span class="xl:hidden lg:hidden md:hidden sm:hidden block"
                    >Sat</span
                  >
                </th>
              </tr>
            </thead>
            <tbody>
              <tr class="text-center h-20">
                <td
                  class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300"
                >
                  <div
                    class="flex flex-col h-40 xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden"
                  >
                    <div class="top h-5 w-full">
                      <span class="text-gray-500">1</span>
                    </div>
                    <div
                      class="bottom flex-grow h-30 py-1 w-full cursor-pointer"
                    >
                      <div
                        class="event bg-purple-400 text-white rounded p-1 text-sm mb-1"
                      >
                        <span class="event-name"> Meeting </span>
                        <span class="time"> 12:00~14:00 </span>
                      </div>
                      <div
                        class="event bg-purple-400 text-white rounded p-1 text-sm mb-1"
                      >
                        <span class="event-name"> Meeting </span>
                        <span class="time"> 18:00~20:00 </span>
                      </div>
                    </div>
                  </div>
                </td>
                <td
                  class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300"
                >
                  <div
                    class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden"
                  >
                    <div class="top h-5 w-full">
                      <span class="text-gray-500">2</span>
                    </div>
                    <div
                      class="bottom flex-grow h-30 py-1 w-full cursor-pointer"
                    ></div>
                  </div>
                </td>
                <td
                  class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300"
                >
                  <div
                    class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden"
                  >
                    <div class="top h-5 w-full">
                      <span class="text-gray-500">3</span>
                    </div>
                    <div
                      class="bottom flex-grow h-30 py-1 w-full cursor-pointer"
                    ></div>
                  </div>
                </td>
                <td
                  class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300"
                >
                  <div
                    class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden"
                  >
                    <div class="top h-5 w-full">
                      <span class="text-gray-500">4</span>
                    </div>
                    <div
                      class="bottom flex-grow h-30 py-1 w-full cursor-pointer"
                    ></div>
                  </div>
                </td>
                <td
                  class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300"
                >
                  <div
                    class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden"
                  >
                    <div class="top h-5 w-full">
                      <span class="text-gray-500">6</span>
                    </div>
                    <div
                      class="bottom flex-grow h-30 py-1 w-full cursor-pointer"
                    ></div>
                  </div>
                </td>
                <td
                  class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-hidden transition cursor-pointer duration-500 ease hover:bg-gray-300"
                >
                  <div
                    class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden"
                  >
                    <div class="top h-5 w-full">
                      <span class="text-gray-500">7</span>
                    </div>
                    <div
                      class="bottom flex-grow h-30 py-1 w-full cursor-pointer"
                    >
                      <div
                        class="event bg-blue-400 text-white rounded p-1 text-sm mb-1"
                      >
                        <span class="event-name"> Shopping </span>
                        <span class="time"> 12:00~14:00 </span>
                      </div>
                    </div>
                  </div>
                </td>
                <td
                  class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300"
                >
                  <div
                    class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden"
                  >
                    <div class="top h-5 w-full">
                      <span class="text-gray-500 text-sm">8</span>
                    </div>
                    <div
                      class="bottom flex-grow h-30 py-1 w-full cursor-pointer"
                    ></div>
                  </div>
                </td>
              </tr>

              <!--         line 1 -->
              <tr class="text-center h-20">
                <td
                  class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300"
                >
                  <div
                    class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden"
                  >
                    <div class="top h-5 w-full">
                      <span class="text-gray-500">9</span>
                    </div>
                    <div
                      class="bottom flex-grow h-30 py-1 w-full cursor-pointer"
                    ></div>
                  </div>
                </td>
                <td
                  class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300"
                >
                  <div
                    class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden"
                  >
                    <div class="top h-5 w-full">
                      <span class="text-gray-500">10</span>
                    </div>
                    <div
                      class="bottom flex-grow h-30 py-1 w-full cursor-pointer"
                    ></div>
                  </div>
                </td>
                <td
                  class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300"
                >
                  <div
                    class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden"
                  >
                    <div class="top h-5 w-full">
                      <span class="text-gray-500">12</span>
                    </div>
                    <div
                      class="bottom flex-grow h-30 py-1 w-full cursor-pointer"
                    ></div>
                  </div>
                </td>
                <td
                  class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300"
                >
                  <div
                    class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden"
                  >
                    <div class="top h-5 w-full">
                      <span class="text-gray-500">13</span>
                    </div>
                    <div
                      class="bottom flex-grow h-30 py-1 w-full cursor-pointer"
                    ></div>
                  </div>
                </td>
                <td
                  class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300"
                >
                  <div
                    class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden"
                  >
                    <div class="top h-5 w-full">
                      <span class="text-gray-500">14</span>
                    </div>
                    <div
                      class="bottom flex-grow h-30 py-1 w-full cursor-pointer"
                    ></div>
                  </div>
                </td>
                <td
                  class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300"
                >
                  <div
                    class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden"
                  >
                    <div class="top h-5 w-full">
                      <span class="text-gray-500">15</span>
                    </div>
                    <div
                      class="bottom flex-grow h-30 py-1 w-full cursor-pointer"
                    ></div>
                  </div>
                </td>
                <td
                  class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300"
                >
                  <div
                    class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden"
                  >
                    <div class="top h-5 w-full">
                      <span class="text-gray-500 text-sm">16</span>
                    </div>
                    <div
                      class="bottom flex-grow h-30 py-1 w-full cursor-pointer"
                    ></div>
                  </div>
                </td>
              </tr>
              <!--         line 1 -->

              <!--         line 2 -->
              <tr class="text-center h-20">
                <td
                  class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300"
                >
                  <div
                    class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden"
                  >
                    <div class="top h-5 w-full">
                      <span class="text-gray-500">16</span>
                    </div>
                    <div
                      class="bottom flex-grow h-30 py-1 w-full cursor-pointer"
                    ></div>
                  </div>
                </td>
                <td
                  class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300"
                >
                  <div
                    class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden"
                  >
                    <div class="top h-5 w-full">
                      <span class="text-gray-500">17</span>
                    </div>
                    <div
                      class="bottom flex-grow h-30 py-1 w-full cursor-pointer"
                    ></div>
                  </div>
                </td>
                <td
                  class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300"
                >
                  <div
                    class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden"
                  >
                    <div class="top h-5 w-full">
                      <span class="text-gray-500">18</span>
                    </div>
                    <div
                      class="bottom flex-grow h-30 py-1 w-full cursor-pointer"
                    ></div>
                  </div>
                </td>
                <td
                  class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300"
                >
                  <div
                    class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden"
                  >
                    <div class="top h-5 w-full">
                      <span class="text-gray-500">19</span>
                    </div>
                    <div
                      class="bottom flex-grow h-30 py-1 w-full cursor-pointer"
                    ></div>
                  </div>
                </td>
                <td
                  class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300"
                >
                  <div
                    class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden"
                  >
                    <div class="top h-5 w-full">
                      <span class="text-gray-500">20</span>
                    </div>
                    <div
                      class="bottom flex-grow h-30 py-1 w-full cursor-pointer"
                    ></div>
                  </div>
                </td>
                <td
                  class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300"
                >
                  <div
                    class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden"
                  >
                    <div class="top h-5 w-full">
                      <span class="text-gray-500">21</span>
                    </div>
                    <div
                      class="bottom flex-grow h-30 py-1 w-full cursor-pointer"
                    ></div>
                  </div>
                </td>
                <td
                  class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300"
                >
                  <div
                    class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden"
                  >
                    <div class="top h-5 w-full">
                      <span class="text-gray-500 text-sm">22</span>
                    </div>
                    <div
                      class="bottom flex-grow h-30 py-1 w-full cursor-pointer"
                    ></div>
                  </div>
                </td>
              </tr>
              <!--         line 2 -->

              <!--         line 3 -->
              <tr class="text-center h-20">
                <td
                  class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300"
                >
                  <div
                    class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden"
                  >
                    <div class="top h-5 w-full">
                      <span class="text-gray-500">23</span>
                    </div>
                    <div
                      class="bottom flex-grow h-30 py-1 w-full cursor-pointer"
                    ></div>
                  </div>
                </td>
                <td
                  class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300"
                >
                  <div
                    class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden"
                  >
                    <div class="top h-5 w-full">
                      <span class="text-gray-500">24</span>
                    </div>
                    <div
                      class="bottom flex-grow h-30 py-1 w-full cursor-pointer"
                    ></div>
                  </div>
                </td>
                <td
                  class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300"
                >
                  <div
                    class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden"
                  >
                    <div class="top h-5 w-full">
                      <span class="text-gray-500">25</span>
                    </div>
                    <div
                      class="bottom flex-grow h-30 py-1 w-full cursor-pointer"
                    ></div>
                  </div>
                </td>
                <td
                  class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300"
                >
                  <div
                    class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden"
                  >
                    <div class="top h-5 w-full">
                      <span class="text-gray-500">26</span>
                    </div>
                    <div
                      class="bottom flex-grow h-30 py-1 w-full cursor-pointer"
                    ></div>
                  </div>
                </td>
                <td
                  class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300"
                >
                  <div
                    class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden"
                  >
                    <div class="top h-5 w-full">
                      <span class="text-gray-500">27</span>
                    </div>
                    <div
                      class="bottom flex-grow h-30 py-1 w-full cursor-pointer"
                    ></div>
                  </div>
                </td>
                <td
                  class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300"
                >
                  <div
                    class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden"
                  >
                    <div class="top h-5 w-full">
                      <span class="text-gray-500">28</span>
                    </div>
                    <div
                      class="bottom flex-grow h-30 py-1 w-full cursor-pointer"
                    ></div>
                  </div>
                </td>
                <td
                  class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300"
                >
                  <div
                    class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden"
                  >
                    <div class="top h-5 w-full">
                      <span class="text-gray-500 text-sm">29</span>
                    </div>
                    <div
                      class="bottom flex-grow h-30 py-1 w-full cursor-pointer"
                    ></div>
                  </div>
                </td>
              </tr>
              <!--         line 3 -->

              <!--         line 4 -->
              <tr class="text-center h-20">
                <td
                  class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300"
                >
                  <div
                    class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden"
                  >
                    <div class="top h-5 w-full">
                      <span class="text-gray-500">30</span>
                    </div>
                    <div
                      class="bottom flex-grow h-30 py-1 w-full cursor-pointer"
                    ></div>
                  </div>
                </td>
                <td
                  class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300"
                >
                  <div
                    class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden"
                  >
                    <div class="top h-5 w-full">
                      <span class="text-gray-500">31</span>
                    </div>
                    <div
                      class="bottom flex-grow h-30 py-1 w-full cursor-pointer"
                    ></div>
                  </div>
                </td>
                <td
                  class="border bg-gray-100 p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300"
                >
                  <div
                    class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden"
                  >
                    <div class="top h-5 w-full">
                      <span class="text-gray-500">1</span>
                    </div>
                    <div
                      class="bottom flex-grow h-30 py-1 w-full cursor-pointer"
                    ></div>
                  </div>
                </td>
                <td
                  class="border bg-gray-100 p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300"
                >
                  <div
                    class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden"
                  >
                    <div class="top h-5 w-full">
                      <span class="text-gray-500">2</span>
                    </div>
                    <div
                      class="bottom flex-grow h-30 py-1 w-full cursor-pointer"
                    ></div>
                  </div>
                </td>
                <td
                  class="border bg-gray-100 p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300"
                >
                  <div
                    class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden"
                  >
                    <div class="top h-5 w-full">
                      <span class="text-gray-500">3</span>
                    </div>
                    <div
                      class="bottom flex-grow h-30 py-1 w-full cursor-pointer"
                    ></div>
                  </div>
                </td>
                <td
                  class="border bg-gray-100 p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300"
                >
                  <div
                    class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden"
                  >
                    <div class="top h-5 w-full">
                      <span class="text-gray-500">4</span>
                    </div>
                    <div
                      class="bottom flex-grow h-30 py-1 w-full cursor-pointer"
                    ></div>
                  </div>
                </td>
                <td
                  class="border bg-gray-100 p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300"
                >
                  <div
                    class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden"
                  >
                    <div class="top h-5 w-full">
                      <span class="text-gray-500 text-sm">5</span>
                    </div>
                    <div
                      class="bottom flex-grow h-30 py-1 w-full cursor-pointer"
                    ></div>
                  </div>
                </td>
              </tr>
              <!--         line 4 -->
            </tbody>
          </table>
        </div>
      </div>
      <!-- //////////////////////////////////////////////////////////////////////////////////// -->
      <!-- <div class="flex mt-20 justify-center">
        <div class="bg-black h-20 w-72 mx-10 my-5"></div>
        <div class="bg-black h-20 w-72 mx-10 my-5"></div>
        <div class="bg-black h-20 w-72 mx-10 my-5"></div>
      </div>
      <div class="flex mt-20 justify-center">
        <div class="bg-black h-20 w-72 mx-10 my-5"></div>
        <div class="bg-black h-20 w-72 mx-10 my-5"></div>
        <div class="bg-black h-20 w-72 mx-10 my-5"></div>
      </div> -->
    </div>
  </div>
@endsection