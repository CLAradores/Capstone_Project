@extends('layout')

@section('content')
<section class="bg-black eventheroIMG text-white max">
    <div class="max-w-7xl m-auto">
      <h1
        style="height: 50vh"
        class="lg:text-4xl text-2xl font-bold text-center flex items-center ml-5"
      >
        Events
      </h1>
    </div>
  </section>
  <div class="text-center text-white p-3 lg:p-5" style="background: #085c4c">
    <h2 class="text-xl lg:text-3xl font-semibold">
      What's You Don't Want to Miss
    </h2>
  </div>
  <div class="max-w-6xl mx-auto mt-16">
    <div>
      <div
        class="lg:flex mt-20 lg:mr-20 mx-20 lg:mx-0 p-5 border-green-400 border rounded-lg bg-green-100"
      >
        <img src="../img/eventFA.jpg" alt="img" class="h-72 w-full lg:w-96" />
        <div class="flex lg:ml-3 flex-col justify-center space-y-5">
          <div
            class="text-center text-xl font-medium"
            style="background: #98fb98; padding: 1rem"
          >
            <h2 class="text-xl font-semibold lg:text-left text-center">
              First Aid / Medical Assistance
            </h2>
          </div>
          <div class="space-y-5 text-center lg:text-left">
            <div class="flex space-x-10">
              <h3>Date: 11/26/2004</h3>
              <h3>Location: Barangay Hall</h3>
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
      </div>
    </div>

  </div>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.js"></script>