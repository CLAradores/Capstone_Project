@extends('build')

@section('data')


<form action="/event/{{$event->id}}" method="POST">
    @csrf
    @method('PUT')
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
                <img src="/img/eventBarangayLOGO.png" alt="" />
              </div>
              <div
                class="block pl-2 font-semibold text-xl self-start text-gray-700"
              >
                <h2 class="leading-relaxed">Edit an Event</h2>
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
                    value={{$event->event_title}}

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
                    value={{$event->event_location}}
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
                        value={{$event->event_date}}

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
                        value={{$event->event_time}}
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
                    name="event_description"
                    value={{$event->event_description}}
                  />
                  @error('event_description')
                  <p class="text-red-500 text-xs mt-1 ">{{$message}}</p>
                  @enderror
                </div>
           
                <div class="flex justify-center items-center">
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
                </button>
                {{-- <button
                  class="bg-green-500 green-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none"
                >
                  Create
                </button> --}}
                <div class="text-center">
                    {{-- <a href=""  class="bg-green-500 green-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Update</a> --}}
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
    </div>
  </form>
  @endsection