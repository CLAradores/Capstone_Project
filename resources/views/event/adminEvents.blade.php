@extends('build')

@section('data')
<div class="p-4 sm:ml-64">
    <div class="mt-20">
  <a href="/event/adminAddEvent">
    
    <button
      {{-- data-modal-target="default-modal"
      data-modal-toggle="default-modal" --}}
      class="block text-white bg-blue-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
      type="button"
    >
      <i class="fa-solid fa-address-book"></i>&nbsp; Post Event
    </button>
  </a>

      <!-- Main modal -->
      {{-- <div
        id="default-modal"
        tabindex="-1"
        aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
      > --}}
      {{-- <form action="/admin" method="POST"> --}}
        {{-- @csrf
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
                        name="event_title"

                      />
                      @error('event_title')
                      <p class="text-red-500 text-xs mt-1 ">{{$message}}</p>
                      @enderror
                    </div>
                    <div class="flex flex-col">
                      <label class="leading-loose">Location</label>
                      <input
                        type="text"
                        class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                        name="event_location"
                      />
                      @error('event_location')
                      <p class="text-red-500 text-xs mt-1 ">{{$message}}</p>
                      @enderror
                    </div>
                    <div class="flex items-center space-x-4">
                      <div class="flex flex-col">
                        <label class="leading-loose">Date</label>
                        <div
                          class="relative focus-within:text-gray-600 text-gray-400"
                        >
                          <input
                            type="date"
                            class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                            placeholder="25/02/2020"
                            name="event_date"
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
                          @error('event_date')
                          <p class="text-red-500 text-xs mt-1 ">{{$message}}</p>
                          @enderror
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
                            placeholder="00:00 am"
                            name="event_time"
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
                          @error('event_time')
                          <p class="text-red-500 text-xs mt-1 ">{{$message}}</p>
                          @enderror
                        </div>
                      </div>
                    </div>
                    <div class="flex flex-col">
                      <label class="leading-loose">Event Description</label>
                      <input
                        type="text"
                        class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                        {{-- placeholder="Optional" --}}
                        {{-- name="event_description"
                      />
                      @error('event_description')
                      <p class="text-red-500 text-xs mt-1 ">{{$message}}</p>
                      @enderror
                    </div> --}}
                    {{-- <div class="text-center">
                      <svg
                        class="mx-auto h-12 w-12 text-gray-300"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        aria-hidden="true"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                          clip-rule="evenodd"
                        />
                      </svg>
                      <div class="mt-4 flex text-sm leading-6 text-gray-600 flex justify-center item-center">
                        <label
                          for="file-upload"
                          class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500"
                        >
                          <span>Upload a file</span>
                          <input
                            id="file-upload"
                            name="event_picture"
                            type="file"
                            class="sr-only"
                          />
                        </label>
                        <p class="pl-1">or drag and drop</p>
                      </div>
                      <p class="text-xs leading-5 text-gray-600">
                        PNG, JPG, GIF up to 10MB
                      </p>
                    </div> --}}
                    {{-- <div class="flex justify-center items-center">
                      <input type="file" name="event_picture" >

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
                    </button> --}}
                    {{-- <button
                      class="bg-green-500 green-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none"
                    >
                      Create
                    </button> --}}
                    {{-- <div class="text-center">
                    <input
                    class="bg-green-500 green-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none"
                type="submit"
                value="Create"
              />
                   </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div> --}} 
      {{-- </form>
      </div> --}}

      <!-- Main modal -->
      {{-- <div
        id="static-modal"
        data-modal-backdrop="static"
        tabindex="-1"
        aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
      ></div> --}}
    </div>

    <section class="bg-white dark:bg-gray-900 antialiased">
      <div class="max-w-screen-xl px-4 py-8 mx-auto lg:px-6 sm:py-16 lg:py-24">
        <div class="max-w-3xl mx-auto text-center">
          <h2 class="text-4xl font-extrabold leading-tight tracking-tight text-gray-900 dark:text-white">
            Schedule
          </h2>
    
          <div class="mt-4">
            <a href="#" title=""
              class="inline-flex items-center text-lg font-medium text-primary-600 hover:underline dark:text-primary-500">
              Learn more about our agenda
              <svg aria-hidden="true" class="w-5 h-5 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd"
                  d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                  clip-rule="evenodd" />
              </svg>
            </a>
          </div>
        </div>

        {{-- @foreach($events as $event) --}}
        <div class="overflow-hidden px-10">

        
        @foreach($events as $item)
        <div class="flow-root max-w-6xl mx-auto mt-8 sm:mt-12 lg:mt-16 ">
          <div class="-my-4 divide-y divide-gray-200 dark:divide-gray-700">
            <div class="flex justify-between  gap-2 py-4 sm:gap-6 sm:flex-row items-center ">
              <div class="flex ">

                <p class="w-32 text-lg font-normal text-gray-500 sm:text-right dark:text-gray-400 shrink-0">
                  {{$item->event_time}}
                  {{-- 09:00 am --}}
                </p>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white lg:ms-32 ms-10">
                  <a href="#" class="hover:underline">{{$item->event_title}}</a>
                </h3>
              </div>
              <div class="flex lg:space-x-28 space-x-10">

                <p class="w-32 text-lg font-normal text-gray-500 sm:text-right dark:text-gray-400 shrink-0 flex justify-end">
                
                     {{$item->event_date}}
                </p>
                <div class="flex space-x-8">
                  <a href="/event/{{$item->id}}/adminEditEvent"><i class="fa-solid fa-pen-to-square text-xl text-green-500"></i></a>

                  {{-- <a href=""></a> --}}
                    <div>

                      {{-- <form method="POST" action="/event/{{$events->id}}">
                        @csrf
                        @method('DELETE')
                       <button>
                      </button>
                    </form> --}}
                    <i class="fa-solid fa-trash-can text-xl text-red-500"></i>
                    </div>

                </div>
              </div>
            </div>
        </div>
      </div>
      @endforeach
    </div>
   
      {{-- @endforeach --}}
    </section>
 
  </div>
@endsection