@extends('build')

@section('data')
<div class="p-4 sm:ml-64">
    <div class="flex mt-20 justify-between max-w-6xl bg-gray-100 p-5">
      <div class="text-xl font-semibold ms-2">Patient Records</div>
      <div class="font-semibold flex justify-center items-center">
        <button
          id="dropdownDelayButtons"
          data-dropdown-toggle="dropdownDelays"
          data-dropdown-delay="500"
          data-dropdown-trigger="hover"
          type="button"
        >
          <i class="fa-solid fa-plus text-lg font-bold"></i>&nbsp; Add
        </button>
        <!-- Dropdown menu -->
        <div
          id="dropdownDelays"
          class="z-50 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700"
        >
          <ul
            class="py-2 text-sm text-gray-700 dark:text-gray-200"
            aria-labelledby="dropdownDelayButtons"
          >
            <li>
              <a
                href="adminEventAddRecords.html"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                >Senior Citizens</a
              >
            </li>
            <li>
              <a
                href="adminEventAddRecords.html"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                >Adults</a
              >
            </li>
            <li>
              <a
                href="adminEventAddRecords.html"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                >Kids</a
              >
            </li>
            <li>
              <a
                href="adminEventAddRecords.html"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                >Person with Disability</a
              >
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- drop -->
    <div class="flex justify-between mt-10 max-w-6xl">
      <div>
        <button
          id="dropdownDelayButton"
          data-dropdown-toggle="dropdownDelay"
          data-dropdown-delay="500"
          data-dropdown-trigger="hover"
          class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
          type="button"
        >
          Sort
          <svg
            class="w-2.5 h-2.5 ms-3"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 10 6"
          >
            <path
              stroke="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="m1 1 4 4 4-4"
            />
          </svg>
        </button>

        <!-- Dropdown menu -->
        <div
          id="dropdownDelay"
          class="z-50 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700"
        >
          <ul
            class="py-2 text-sm text-gray-700 dark:text-gray-200"
            aria-labelledby="dropdownDelayButton"
          >
            <li>
              <a
                href="#"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                >Senior Citizens</a
              >
            </li>
            <li>
              <a
                href="#"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                >Adults</a
              >
            </li>
            <li>
              <a
                href="#"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                >Kids</a
              >
            </li>
            <li>
              <a
                href="#"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                >Person with Disability</a
              >
            </li>
          </ul>
        </div>
      </div>
      <form>
        <label
          for="default-search"
          class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white"
          >Search</label
        >
        <div class="relative">
          <div
            class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none"
          >
            <svg
              class="w-4 h-4 text-gray-500 dark:text-gray-400"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 20 20"
            >
              <path
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"
              />
            </svg>
          </div>
          <input
            type="search"
            id="default-search"
            class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            required
          />
          <button
            type="submit"
            class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
          >
            Search
          </button>
        </div>
      </form>
    </div>

    <!-- drop -->

    <div class="flex flex-col overflow-x-auto mt-10">
      <div class="sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
          <div class="overflow-x-auto">
            <table class="min-w-full text-left text-sm font-light">
              <thead
                class="border-b font-medium dark:border-neutral-500"
                data-te-fixed-header="true"
              >
                <tr>
                  <th scope="col" class="px-6 py-2 text-center border">
                    Case No.
                  </th>
                  <th scope="col" class="px-6 py-2 text-center border">
                    Full Name
                  </th>
                  <th scope="col" class="px-6 py-2 text-center border">
                    Gender
                  </th>
                  <th scope="col" class="px-6 py-2 text-center border">
                    Age
                  </th>
                  <th scope="col" class="px-6 py-2 text-center border">
                    Date Added
                  </th>
                  <th scope="col" class="px-6 py-2 text-center border">
                    Action
                  </th>
                </tr>
              </thead>
              @foreach($records as $record)

              <tbody class="">
                <tr class="border-b dark:border-neutral-500">
                  <td class="whitespace-nowrap px-6 py-4 text-center border">
                    {{$record->id}}
                  </td>
                  <td class="whitespace-nowrap px-6 py-4 text-center border">
                    {{$record->last_name}} , {{$record->first_name}} {{$record->middle_name}}.
                  </td>
                  <td class="whitespace-nowrap px-6 py-4 text-center border">
                    {{$record->gender}}
                  </td>
                  <td class="whitespace-nowrap px-6 py-4 text-center border">
                    {{$record->age}}
                  </td>
                  <td class="whitespace-nowrap px-6 py-4 text-center border">
                    2023-05-15
                  </td>
                  <td
                    class="whitespace-nowrap px-6 py-4 text-center flex space-x-1 border items-center justify-center"
                  >
                    <button
                      class="px-3 py-1 bg-green-600 text-white font-medium rounded-md"
                    >
                      <a href="/admin/{{$record->id}}/adminEditRecords">Edit</a>
                    </button>
                    <button
                      class="px-3 py-1 bg-blue-500 text-white font-medium rounded-md"
                    >
                    <a href="/admin/{{$record->id}}"> View </a>
                    {{-- <a href="/admin/adminRecordView"> View </a> --}}
                    </button>
                  </td>
                </tr>
              </tbody>
              @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection