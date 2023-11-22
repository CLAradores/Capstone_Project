@extends('layout')

@section('content')
<section class="bg-black eventheroIMG text-white max" style="
background: linear-gradient(
    rgba(0, 0, 0, 0.7),
    rgba(0, 0, 0, 0.7)
  ),
  url(../img/eventhero.jpg);
background-repeat: no-repeat;
background-position: center center;
background-size: cover;
height: 50%;
width: 100%;
">
    <div class="max-w-7xl m-auto">
      <h1
        style="height: 50vh"
        class="lg:text-5xl text-2xl font-bold text-center flex items-center ml-5"
      >
        Events
      </h1>
    </div>
  </section>
  <div class="text-center text-white p-3 lg:p-5" style="background: #085c4c">
    <h2 class="text-xl lg:text-3xl font-semibold">
      Don't miss this out
    </h2>
  </div>
  <div class="max-w-6xl mx-auto mt-16">
    <div>
      @foreach($events as $event)
      <div
        class="lg:flex mt-20 lg:mr-20 mx-20 lg:mx-0 p-5 border-green-400 border rounded-lg bg-green-100"
      >
        <img src="{{$event->event_picture ? asset('storage/' . $event->event_picture) : asset('img/bata.jpg')}}"    alt="img" class="h-72 w-full lg:w-96" />
        <div class="flex lg:ml-3 flex-col justify-center space-y-5">
          <div
            class="text-center text-xl font-medium "
            style="background: #98fb98; padding: 1rem"
          >
            <h2 class="text-xl font-semibold lg:text-left text-center">
              {{$event->event_title}}
            </h2>
          </div>
          <div class="space-y-5 text-center lg:text-left">
            <div class="flex space-x-10">
              <h3>Date: <span class="font-medium">{{$event->event_date}}</span></h3>
              <h3>Time: <span class="font-medium">{{$event->event_time}}</span></h3>
              <h3>Location: <span class="font-medium">{{$event->event_location}}</span></h3>
            </div>
            <p class="lg:text-base text-xs font-medium">
            {{$event->event_description}}
            </p>
          </div>
        </div>
        
      </div>
      @endforeach
      {{-- <div
        class="lg:flex mt-20 lg:mr-20 mx-20 lg:mx-0 border-green-400 border rounded-lg bg-green-100 p-5"
      >
        <img
          src="../img/eventFAM.jpeg"
          alt="img"
          class="h-72 w-full lg:w-96"
        />
        <div class="flex lg:ml-3 flex-col justify-center space-y-5">
          <div
            class="text-center text-xl font-medium"
            style="background: #98fb98; padding: 1rem"
          >
            <h2 class="text-xl font-semibold lg:text-left text-center">
              Family Planning
            </h2>
          </div>
          <div class="space-y-5 text-center lg:text-left">
            <div class="flex space-x-10">
              <h3>Date: 11/26/2004</h3>
              <h3>Location: Barangay Covered Court</h3>
            </div>
            <p class="lg:text-base text-xs">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima
              voluptates quod porro dolorum, commodi dicta ab fugiat
              reiciendis iusto quaerat.
            </p>
          </div>
        </div>
      </div>
      <div
        class="lg:flex mt-20 lg:mr-20 mx-20 lg:mx-0 border-green-400 border rounded-lg bg-green-100 p-5"
      >
        <img
          src="../img/eventPre.jpg"
          alt="img"
          class="h-72 w-full lg:w-96"
        />
        <div class="flex lg:ml-3 flex-col justify-center space-y-5">
          <div
            class="text-center text-xl font-medium"
            style="background: #98fb98; padding: 1rem"
          >
            <h2 class="text-xl font-semibold lg:text-left text-center">
              Pre- Natal Care Program
            </h2>
          </div>
          <div class="space-y-5 text-center lg:text-left">
            <div class="flex space-x-10">
              <h3>Date: 11/26/2004</h3>
              <h3>Location: Barangay Covered Court</h3>
            </div>
            <p class="lg:text-base text-xs">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima
              voluptates quod porro dolorum, commodi dicta ab fugiat
              reiciendis iusto quaerat.
            </p>
          </div>
        </div>
      </div>
      <div
        class="lg:flex mt-20 lg:mr-20 mx-20 lg:mx-0 border-green-400 border rounded-lg bg-green-100 p-5"
      >
        <img src="../img/eventTB.jpg" alt="img" class="h-72 w-full lg:w-96" />
        <div class="flex lg:ml-3 flex-col justify-center space-y-5">
          <div
            class="text-center text-xl font-medium"
            style="background: #98fb98; padding: 1rem"
          >
            <h2 class="text-xl font-semibold lg:text-left text-center">
              Tuberculosis Treatment Program
            </h2>
          </div>
          <div class="space-y-5 text-center lg:text-left">
            <div class="flex space-x-10">
              <h3>Date: 11/26/2004</h3>
              <h3>Location: Barangay Covered Court</h3>
            </div>
            <p class="lg:text-base text-xs">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima
              voluptates quod porro dolorum, commodi dicta ab fugiat
              reiciendis iusto quaerat.
            </p>
          </div>
        </div>
      </div> --}}
    </div>

  </div>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.js"></script>