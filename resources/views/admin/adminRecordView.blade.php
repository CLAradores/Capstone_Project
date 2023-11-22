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
              {{-- @foreach ($records as $record) --}}
                {{-- dd($record->attributes->first_name) --}}
              <p class="text-sm font-medium">{{$record->first_name}} {{$record->last_name}}</p>
              {{-- <div class="my-3 text-sm font-medium">
                <span class="text-green-600 font-semibold">Age:</span>
                &nbsp; {{$record->age}}
              </div> --}}
              <div class="my-3 text-sm font-medium">
                <span class="text-green-600 font-semibold">Gender:</span>
                &nbsp; {{$record->gender}}
              </div>
            </div>
            <div class="mt-5">
              <p class="text-sm font-medium">{{$record->phone_number}}</p>
            </div>
            <div class="mt-5">
              <p class="text-sm font-medium">{{$record->street_address}}</p>
              <p class="text-sm font-medium">{{$record->street_address_line_2}}</p>
              <p class="text-sm font-medium">{{$record->city}}</p>
            </div>
          </div>
          <div>
            <div class="mt-5">
              <h3 class="text-green-600 font-semibold">Birth Date</h3>
              <p class="text-sm font-medium">{{$record->day_bdate}}/{{$record->month_bdate}}/{{$record->year_bdate}}</p>
            </div>
            <div class="mt-5">
              <h3 class="text-green-600 font-semibold">Weight:</h3>
              <p class="text-sm font-medium">{{$record->weight}} kg</p>
            </div>
            <div class="mt-5">
              <h3 class="text-green-600 font-semibold">Height:</h3>
              <p class="text-sm font-medium">{{$record->height}} cm</p>
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
            <p>{{$record->contact_first_name}} {{$record->contact_last_name}} </p>
          </div>
          <div class="mt-5">
            <div>
              <p class="text-sm font-medium">{{$record->contact_street_address}}</p>
              <p class="text-sm font-medium">{{$record->contact_street_address_line_2}}</p>
              <p class="text-sm font-medium">{{$record->contact_city}}</p>
            </div>
          </div>
        </div>
        <div class="flex max-w-[30rem] justify-between">
          <div class="mt-5">
            <h3 class="text-green-600 font-semibold">Phone Number</h3>
            <p class="text-sm font-medium">{{$record->contact_phone_number}}</p>
          </div>
        
        </div>
        <!-- caseas -->
        <h3
          class="text-xl font-semibold text-red-500 mt-5 pb-3 border-b border-red-500"
        >
          General Medical History
        </h3>
      </div>
      {{-- <div class="flex lg:space-x-48 mt-5">
        <div>
          <h3 class="text-green-600 font-semibold">
            Chicken Pox (Varicella):
          </h3>
          <p class="bg-slate-300 py-2 px-4 w-32 text-sm text-center mt-2">
            {{$record->chicken_pox}}
          </p>
        </div>
        <div>
          <h3 class="text-green-600 font-semibold">Measles{Varicella}:</h3>
          <p class="bg-slate-300 py-2 px-4 w-32 text-sm text-center mt-2">
            {{$record->measles}}
          </p>
        </div>
      </div> --}}
      {{-- <div>
        <h3 class="text-green-600 font-semibold mt-5">
          Have you had the Hepatitis B vaccination?
        </h3>
        <p class="bg-slate-300 py-2 px-4 w-20 text-sm text-center mt-2">{{$record->hepa}}</p>
      </div> --}}
      <div class="pb-10 border-b border-green-500 flex lg:flex-row justify-center lg:justify-start flex-col lg:space-y-0 space-y-10 lg:space-x-28">
        <div>
            {{-- @php
            $medList = {{$record->list_reg_med}}
            $meds = explode(',' $medList)
            @endphp --}}
          <h3 class="text-green-600 font-semibold mt-5">
            List any medication taken regularly:
          </h3>
          <ul class="mt-3 text-sm">
            {{-- @foreach($meds as $med) --}}

           
            <li><span class="font-bold text-xl">&#x2022;</span> Paracetamol</li>
            <li><span class="font-bold text-xl">&#x2022;</span> Bio Flu</li>
            <li><span class="font-bold text-xl">&#x2022;</span> Loperamaid</li>
            {{-- @endforeach --}}
          </ul>
        </div>
        <div>
          <h4 class="text-green-600 font-semibold mt-5">Medical History</h4>
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
          <h4 class="text-green-600 font-semibold mt-5">Allergies</h4>
          <ul class="mt-3 text-sm">
            <li><span class="font-bold text-xl">&#x2022;</span> Measles</li>
            <li>
              <span class="font-bold text-xl">&#x2022;</span> Rheumatic Fever
            </li>
          </ul>
        </div>
      </div>
      {{-- <div class="mt-10 flex space-x-48">
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
      </div> --}}
    </div>
  </div>
  {{-- @endforeach --}}

@endsection