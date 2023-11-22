@extends('build')

@section('data')
<div class="p-4 sm:ml-64">
    <div class="flex mt-20 justify-between max-w-6xl bg-gray-100 p-5 mx-auto">
      <div class="text-xl font-semibold ms-2">Patient Records</div>
      <div class="font-semibold flex justify-center items-center">
        <button
          id="dropdownDelayButtons"
          data-dropdown-toggle="dropdownDelays"
          data-dropdown-delay="500"
          data-dropdown-trigger="hover"
          type="button"
        >
         <a href="/admin/adminAddRecords"> <i class="fa-solid fa-plus text-lg font-bold"></i>&nbsp; Add </a>
        </button>
       
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
     
      @include('partials._search')
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
                    Records No.
                  </th>
                  <th scope="col" class="px-6 py-2 text-center border">
                    Full Name
                  </th>
                  <th scope="col" class="px-6 py-2 text-center border">
                    Gender
                  </th>
                  {{-- <th scope="col" class="px-6 py-2 text-center border">
                    Age
                  </th> --}}
                  <th scope="col" class="px-6 py-2 text-center border">
                    Date Added
                  </th>
                  <th scope="col" class="px-6 py-2 text-center border">
                    Action
                  </th>
                </tr>
              </thead>
              @unless(count($records)==0)
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
                  {{-- </td>
                  <td class="whitespace-nowrap px-6 py-4 text-center border">
                    {{$record->age}}
                  </td> --}}
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
              {{-- @else
<p>No Record Found</p>
              @endunless --}}
            </table>
          </div>
        </div>
      </div>
      @else
         
            <h1 className=" font-bold text-4xl text-center">NO RECORDS FOUND...</h1>
       @endunless
    </div>
    <div class="mt-6 p-4">
      {{$records->links()}}
    </div>
  </div>
@endsection