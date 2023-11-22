{{-- 
@extends('build')

@section('data')

<div class="mt-20 flex justify-center items-center mx-auto max-w-5xl  overflow-x-scroll">

    <table class="   text-sm text-center rtl:text-right text-gray-500 dark:text-gray-400   ">
      
        <thead class=" text-xs text-gray-900 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr class="hover:bg-green-50 ">
                
              

                <th scope="col" class="px-6 py-3 border">
                    Patient Name
                  </th>
                <th scope="col" class="px-6 py-3 border">
                  Queue Number
                </th>
                <th scope="col" class="px-6 py-3 border">
                  Age
                </th>
                <th scope="col" class="px-6 py-3 border">
                  Gender
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
                  Action
                </th>
            </tr>
          <hr/>
            

          </thead>
          <tbody>
              @foreach($appointments as $appointment )
              <tr class="hover:bg-green-50 	">
                <td class="px-6 py-3 font-normal	text-gray-900 border">{{ $appointment->first_name }} {{ $appointment->last_name }}</td>
                <td class="px-6 py-3 font-normal	text-gray-900 border">{{ sprintf('%02d%02d-%03d', substr($appointment->appointment_date, 5, 2), substr($appointment->appointment_date, 8, 2), $appointment->queue_number) }}</td>
                <td class="px-6 py-3 font-normal	text-gray-900 border">{{ $appointment->age }}</td>
                <td class="px-6 py-3 font-normal	text-gray-900 border">{{ $appointment->gender}}</td>
                <td class="px-6 py-3 font-normal	text-gray-900 border">{{ $appointment->concern }}</td>
                <td class="px-6 py-3 font-normal	text-gray-900 border">{{ $appointment->service_type }}</td>
                <td class="px-6 py-3 font-normal	text-gray-900 border">{{ $appointment->appointment_date }}</td>

                          <td scope="col" class="px-6 py-3 font-normal	text-gray-900 border"> <span class="px-4 py-2 bg-green-500 rounded-full font-bold">Done</span></td>
                 
              </tr>
              @endforeach
          </tbody>
    </table>
</div>


    @endsection

     --}}

     @extends('build')

@section('data')
<div class="p-4 sm:ml-64">
    <div class="flex mt-20 justify-between items-center max-w-6xl  mx-auto">
      <div class="text-xl font-semibold flex justify-between items-center">Patient Appointments</div>
      <div>@include('partials._searchAppointment')</div>
     
    </div>
    <!-- drop -->
   

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
              <tr class="hover:bg-green-50 ">
                
              

                <th scope="col" class="whitespace-nowrap px-6 py-4 text-center border">
                    Patient Name
                  </th>
                <th scope="col" class="whitespace-nowrap px-6 py-4 text-center border">
                  Queue Number
                </th>
                <th scope="col" class="whitespace-nowrap px-6 py-4 text-center border">
                  Age
                </th>
                <th scope="col" class="whitespace-nowrap px-6 py-4 text-center border">
                  Gender
                </th>
                
                <th scope="col" class="whitespace-nowrap px-6 py-4 text-center border">
                  Concern Details
                </th>
                <th scope="col" class="whitespace-nowrap px-6 py-4 text-center border">
                  Service Type
                </th>
                <th scope="col" class="whitespace-nowrap px-6 py-4 text-center border">
                  Appointment Date
                </th>
                <th scope="col" class="whitespace-nowrap px-6 py-4 text-center border">
                  Action
                </th>
            </tr>
              </thead>
              @unless(count($appointments)==0)
              @foreach($appointments as $appointment )

              <tbody class="">
                <tr class="hover:bg-green-50 	">
                    <td class="whitespace-nowrap px-6 py-4 text-center border">{{ $appointment->first_name }} {{ $appointment->last_name }}</td>
                    <td class="whitespace-nowrap px-6 py-4 text-center border">{{ sprintf('%02d%02d-%03d', substr($appointment->appointment_date, 5, 2), substr($appointment->appointment_date, 8, 2), $appointment->queue_number) }}</td>
                    <td class="whitespace-nowrap px-6 py-4 text-center border">{{ $appointment->age }}</td>
                    <td class="whitespace-nowrap px-6 py-4 text-center border">{{ $appointment->gender}}</td>
                    <td class="whitespace-nowrap px-6 py-4 text-center border">{{ $appointment->concern }}</td>
                    <td class="whitespace-nowrap px-6 py-4 text-center border">{{ $appointment->service_type }}</td>
                    <td class="whitespace-nowrap px-6 py-4 text-center border">{{ $appointment->appointment_date }}</td>
    
    <td scope="col" class="px-6 py-3 font-normal flex justify-center items-center space-x-2	text-gray-900 border text-center">

         <button class="px-4 py-1 bg-green-500 rounded-full font-bold">
          Approve
         </button>
         

             <form method="POST" action="/admin/{{$appointment->id}}">
                @csrf
                @method('DELETE')
               <button type="submit" class="px-4 py-1 bg-red-400 rounded-full font-bold">
                   Cancel
              </button>
            </form>

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
        
        @if(count($appointments) < 10) 
            <div class="mt-6 p-4">
      {{$appointments->links()}}
    </div> 
        
        @endif

         {{-- <div class="mt-6 p-4">
            {{$appointments->links()}}
          </div>  --}}
  
  </div>
@endsection