@extends('build')

@section('data')
<div class="p-4 sm:ml-64 bg-slate-100">
    <div class="max-w-6xl max-h-[1254.803 px] mt-20 bg-white p-8">
      <div class="mt-10">
        <h2 class="text-2xl font-bold text-green-600">
          Patient Medical Record
        </h2>
        <div class="p-5 bg-slate-300 flex lg:space-x-48 mt-3">
          <div>
            <div class="w-">
              <h3 class="text-green-600 font-semibold">
                Patient Information
              </h3>
              <p class="text-sm font-medium">Charles Lester Radores</p>
              <div class="my-3 text-sm font-medium">
                <span class="text-green-600 font-semibold">Age:</span>
                &nbsp; 18
              </div>
              <div class="my-3 text-sm font-medium">
                <span class="text-green-600 font-semibold">Gender:</span>
                &nbsp; Male
              </div>
            </div>
            <div class="mt-5">
              <p class="text-sm font-medium">09123472894</p>
            </div>
            <div class="mt-5">
              <p class="text-sm font-medium">San Vicente BLK 11 LOT 1</p>
              <p class="text-sm font-medium">Pantok, SunnyValle</p>
              <p class="text-sm font-medium">Alaska</p>
            </div>
          </div>
          <div>
            <div class="mt-5">
              <h3 class="text-green-600 font-semibold">Birth Date</h3>
              <p class="text-sm font-medium">21/4/2023</p>
            </div>
            <div class="mt-5">
              <h3 class="text-green-600 font-semibold">Weight:</h3>
              <p class="text-sm font-medium">62.42 kg</p>
            </div>
            <div class="mt-5">
              <h3 class="text-green-600 font-semibold">Height:</h3>
              <p class="text-sm font-medium">157 cm</p>
            </div>
          </div>
        </div>
        <!-- caseas -->
        <h3
          class="text-xl font-semibold text-red-500 mt-5 pb-3 border-b border-red-500"
        >
          In Case of Emergency
        </h3>
        <div class="flex space-x-48">
          <div class="mt-5 font-medium lg:w-48">
            <p>John Doe</p>
          </div>
          <div class="mt-5">
            <div>
              <p class="text-sm font-medium">143 Paghanapin Street</p>
              <p class="text-sm font-medium">Pantok Binangonan</p>
              <p class="text-sm font-medium">Canada</p>
            </div>
          </div>
        </div>
        <div class="flex max-w-[30rem] justify-between">
          <div class="mt-5">
            <h3 class="text-green-600 font-semibold">Home Phone</h3>
            <p class="text-sm font-medium">092189332</p>
          </div>
          <div class="mt-5">
            <h3 class="text-green-600 font-semibold">Work Phone</h3>
            <p class="text-sm font-medium">0928713542</p>
          </div>
        </div>
        <!-- caseas -->
        <h3
          class="text-xl font-semibold text-red-500 mt-5 pb-3 border-b border-red-500"
        >
          General Medical History
        </h3>
      </div>
      <div class="flex lg:space-x-48 mt-5">
        <div>
          <h3 class="text-green-600 font-semibold">
            Chicken Pox (Varicella):
          </h3>
          <p class="bg-slate-300 py-2 px-4 w-32 text-sm text-center mt-2">
            NOT IMMUNE
          </p>
        </div>
        <div>
          <h3 class="text-green-600 font-semibold">Measles{Varicella}:</h3>
          <p class="bg-slate-300 py-2 px-4 w-32 text-sm text-center mt-2">
            NOT IMMUNE
          </p>
        </div>
      </div>
      <div>
        <h3 class="text-green-600 font-semibold mt-5">
          Have you had the Hepatitis B vaccination?
        </h3>
        <p class="bg-slate-300 py-2 px-4 w-20 text-sm text-center mt-2">NO</p>
      </div>
      <div class="pb-10 border-b border-green-500">
        <h3 class="text-green-600 font-semibold mt-5">
          List any medication taken regularly:
        </h3>
        <ul class="mt-3 text-sm">
          <li><span class="font-bold text-xl">&#x2022;</span> Shabu</li>
          <li><span class="font-bold text-xl">&#x2022;</span> Cocaine</li>
          <li><span class="font-bold text-xl">&#x2022;</span> Marijuna</li>
        </ul>
      </div>
      <div class="mt-10 flex space-x-48">
        <div>
          <h4 class="font-medium">Medical History</h4>
          <ul class="mt-3 text-sm">
            <li>
              <span class="font-bold text-xl">&#x2022;</span> Chicker Pox
            </li>
            <li><span class="font-bold text-xl">&#x2022;</span> Measles</li>
            <li>
              <span class="font-bold text-xl">&#x2022;</span> Rheumatic Fever
            </li>
          </ul>
        </div>
        <div>
          <h4 class="font-medium">Allergies</h4>
          <ul class="mt-3 text-sm">
            <li><span class="font-bold text-xl">&#x2022;</span> Measles</li>
            <li>
              <span class="font-bold text-xl">&#x2022;</span> Rheumatic Fever
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

@endsection