@extends('layout')

@section('content')
<section class="bg-black eventheroIMG text-white">
    <div class="max-w-7xl m-auto">
      <h1
        style="height: 50vh"
        class="lg:text-4xl text-2xl font-bold text-center flex items-center ml-5"
      >
        Services
      </h1>
    </div>
  </section>
  <div class="text-center text-white p-3 lg:p-5" style="background: #085c4c">
    <h2 class="text-xl lg:text-3xl font-semibold">What We Offer</h2>
  </div>

  <section class="max-w-6xl m-auto mt-16">
    <div
      class="flex items-center lg:space-x-12 space-x-5 mx-2 p-5 lg:mx-0 lg:border border-green-400 rounded-lg bg-green-100"
    >
      <img class="lg:h-96 h-64 w-2/4" src="../img/blog.png" alt="" />
      <div class="flex flex-col justify-center w-2/4">
        <div
          style="background: #98fb98"
          class="text-center lg:text-lg text-sm font-medium p-2 lg:p-4 lg:mb-5 mb-4"
        >
      Check Up for Kids
        </div>
        <p class="lg:text-base text-xs">
          Ensure the Brightest Beginnings for Your Little Ones with Our Kid-Focused Check-ups! Our pediatric check-up services are designed to monitor, protect, and promote the health of your children. 
        </p>
        <div class="mt-2 lg:mt-0">
          <div class="flex justify-between">
            <div class="lg:text-lg text-sm font-mediun lg:mt-3">
              <i class="fa-regular fa-calendar-days"></i>&nbsp;
              <span class="font-medium">Lunes</span>
            </div>
            <div class="lg:text-lg text-sm font-mediun lg:mt-3">
              <i class="fa-solid fa-location-dot"></i>&nbsp;
              <span class="font-medium">Barangay Clinic</span>
            </div>
          </div>
          <div class="lg:text-lg text-sm font-mediun mt-2 lg:mt-3">
            <i class="fa-regular fa-clock font-semibold"></i>&nbsp;
            <span class="font-medium">7:00 AM - 12:00 PM</span>
          </div>
        </div>
        <div class="lg:mt-10 mt-5">
          <a
            href="/login"
            class="flex w-full justify-center items-center px-3 py-2 lg:text-lg text-sm font-medium text-center text-white bg-green-900 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
          >
            Book a consultation
            <svg
              class="rtl:rotate-180 w-3.5 h-3.5 ms-2"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 14 10"
            >
              <path
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M1 5h12m0 0L9 1m4 4L9 9"
              />
            </svg>
          </a>
        </div>
      </div>
    </div>
    <div
      class="flex items-center mt-16 lg:space-x-12 space-x-5 mx-2 p-5 lg:mx-0 lg:border border-green-400 rounded-lg bg-green-100"
    >
      <div class="flex flex-col justify-center w-2/4">
        <div
          style="background: #98fb98"
          class="text-center lg:text-lg text-sm font-medium p-2 lg:p-4 lg:mb-5 mb-4"
        >
        Pre-natal Check Up
        </div>
        <p class="lg:text-base text-xs">
          Embark on the Journey to Motherhood with Confidence and Care. Our prenatal check-up services are crafted to support you at every step of this beautiful journey.
        </p>
        <div class="mt-2 lg:mt-0">
          <div class="flex justify-between">
            <div class="lg:text-lg text-sm font-mediun lg:mt-3">
              <i class="fa-regular fa-calendar-days"></i>&nbsp;
              <span class="font-medium">Martes</span>
            </div>
            <div class="lg:text-lg text-sm font-mediun lg:mt-3">
              <i class="fa-solid fa-location-dot"></i>&nbsp;
              <span class="font-medium">Barangay Clinic</span>
            </div>
          </div>
          <div class="lg:text-lg text-sm font-mediun mt-2 lg:mt-3">
            <i class="fa-regular fa-clock font-semibold"></i>&nbsp;
            <span class="font-medium">7:00 AM - 12:00 PM</span>
          </div>
        </div>
        <div class="lg:mt-10 mt-5">
          <a
            href="/login"
            class="flex w-full justify-center items-center px-3 py-2 lg:text-lg text-sm font-medium text-center text-white bg-green-900 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
          >
            Book a consultation
            <svg
              class="rtl:rotate-180 w-3.5 h-3.5 ms-2"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 14 10"
            >
              <path
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M1 5h12m0 0L9 1m4 4L9 9"
              />
            </svg>
          </a>
        </div>
      </div>
      <img class="w-2/4 lg:h-96 h-64" src="../img/serviceBTS.jpg" alt="" />
    </div>
    <div
      class="flex items-center lg:space-x-12 space-x-5 mx-2 p-5 lg:mx-0 lg:border border-green-400 rounded-lg bg-green-100 mt-16"
    >
      <img class="w-2/4 lg:h-96 h-64"  src="../img/servicesADT.jpg"  alt="" />
      <div class="flex flex-col justify-center w-2/4">
        <div
          style="background: #98fb98"
          class="text-center lg:text-lg text-sm font-medium p-2 lg:p-4 lg:mb-5 mb-4"
        >
        Check up for Adults
        </div>
        <p class="lg:text-base text-xs">
          Prioritize Your Health with Our Comprehensive Adult Check-up Services. At our health center, we understand the importance of proactive healthcare for adults. Our thorough check-up services cover a spectrum of health indicators, from vital signs to screenings, ensuring a holistic assessment of your well-being.
        </p>
        <div class="mt-2 lg:mt-0">
          <div class="flex justify-between">
            <div class="lg:text-lg text-sm font-mediun lg:mt-3">
              <i class="fa-regular fa-calendar-days"></i>&nbsp;
              <span class="font-medium">Miyerkules</span>
            </div>
            <div class="lg:text-lg text-sm font-mediun lg:mt-3">
              <i class="fa-solid fa-location-dot"></i>&nbsp;
              <span class="font-medium">Barangay Clinic</span>
            </div>
          </div>
          <div class="lg:text-lg text-sm font-mediun mt-2 lg:mt-3">
            <i class="fa-regular fa-clock font-semibold"></i>&nbsp;
            <span class="font-medium">7:00 AM - 12:00 PM</span>
          </div>
        </div>
        <div class="lg:mt-10 mt-5">
          <a
            href="/login"
            class="flex w-full justify-center items-center px-3 py-2 lg:text-lg text-sm font-medium text-center text-white bg-green-900 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
          >
            Book a consultation
            <svg
              class="rtl:rotate-180 w-3.5 h-3.5 ms-2"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 14 10"
            >
              <path
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M1 5h12m0 0L9 1m4 4L9 9"
              />
            </svg>
          </a>
        </div>
      </div>
    </div>
    <div
      class="flex items-center lg:space-x-12 space-x-5 mx-2 p-5 lg:mx-0 lg:border border-green-400 rounded-lg bg-green-100 mt-16"
    >
      <div class="flex flex-col justify-center w-2/4">
        <div
          style="background: #98fb98"
          class="text-center lg:text-lg text-sm font-medium p-2 lg:p-4 lg:mb-5 mb-4"
        >
          Senior Citizen Check Up
        </div>
        <p class="lg:text-base text-xs">
          Embrace the Golden Years with Confidence through Our Senior Citizen Check-up Services. Our dedicated team understands the unique healthcare needs of seniors and is committed to providing comprehensive check-ups tailored to support a healthy and active lifestyle.
        </p>
        <div class="mt-2 lg:mt-0">
          <div class="flex justify-between">
            <div class="lg:text-lg text-sm font-mediun lg:mt-3">
              <i class="fa-regular fa-calendar-days"></i>&nbsp;
              <span class="font-medium">Huwebes</span>
            </div>
            <div class="lg:text-lg text-sm font-mediun lg:mt-3">
              <i class="fa-solid fa-location-dot"></i>&nbsp;
              <span class="font-medium">Barangay Clinic</span>
            </div>
          </div>
          <div class="lg:text-lg text-sm font-mediun mt-2 lg:mt-3">
            <i class="fa-regular fa-clock font-semibold"></i>&nbsp;
            <span class="font-medium">7:00 AM - 12:00 PM</span>
          </div>
        </div>
        <div class="lg:mt-10 mt-5">
          <a
            href="/login"
            class="flex w-full justify-center items-center px-3 py-2 lg:text-lg text-sm font-medium text-center text-white bg-green-900 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
          >
            Book a consultation
            <svg
              class="rtl:rotate-180 w-3.5 h-3.5 ms-2"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 14 10"
            >
              <path
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M1 5h12m0 0L9 1m4 4L9 9"
              />
            </svg>
          </a>
        </div>
      </div>
      <img class="w-2/4 lg:h-96 h-64"   src="../img/servicesSNR.jpg" alt="" />
    </div>
    <div
      class="flex items-center lg:space-x-12 space-x-5 mx-2 p-5 lg:mx-0 lg:border border-green-400 rounded-lg bg-green-100 mt-16"
    >
      <img class="w-2/4 lg:h-96 h-64" src="../img/servicesPWD.jpg" alt="" />
      <div class="flex flex-col justify-center w-2/4">
        <div
          style="background: #98fb98"
          class="text-center lg:text-lg text-sm font-medium p-2 lg:p-4 lg:mb-5 mb-4"
        >
          PWD Check Up
        </div>
        <p class="lg:text-base text-xs">
          Empowering Health for Persons with Disabilities (PWD): Our specialized check-up services are designed with utmost consideration for the unique needs of individuals with disabilities.
        </p>
        <div class="mt-2 lg:mt-0">
          <div class="flex justify-between">
            <div class="lg:text-lg text-sm font-mediun lg:mt-3">
              <i class="fa-regular fa-calendar-days"></i>&nbsp;
              <span class="font-medium">Biyernes</span>
            </div>
            <div class="lg:text-lg text-sm font-mediun lg:mt-3">
              <i class="fa-solid fa-location-dot"></i>&nbsp;
              <span class="font-medium">Barangay Clinic</span>
            </div>
          </div>
          <div class="lg:text-lg text-sm font-mediun mt-2 lg:mt-3">
            <i class="fa-regular fa-clock font-semibold"></i>&nbsp;
            <span class="font-medium">7:00 AM - 12:00 PM</span>
          </div>
        </div>
        <div class="lg:mt-10 mt-5">
          <a
            href="/login"
            class="flex w-full justify-center items-center px-3 py-2 lg:text-lg text-sm font-medium text-center text-white bg-green-900 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
          >
            Book a consultation
            <svg
              class="rtl:rotate-180 w-3.5 h-3.5 ms-2"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 14 10"
            >
              <path
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M1 5h12m0 0L9 1m4 4L9 9"
              />
            </svg>
          </a>
        </div>
      </div>
    </div>
    <div
      class="flex items-center lg:space-x-12 space-x-5 mx-2 p-5 lg:mx-0 lg:border border-green-400 rounded-lg bg-green-100 mt-16"
    >
      <div class="flex flex-col justify-center w-2/4">
        <div
          style="background: #98fb98"
          class="text-center lg:text-lg text-sm font-medium p-2 lg:p-4 lg:mb-5 mb-4"
        >
          Dental Check Up
        </div>
        <p class="lg:text-base text-xs">
          Transform Your Smile with Our Comprehensive Dental Check-ups. Our dental check-up services are dedicated to ensuring your oral health is at its best. From routine examinations to preventive care, our skilled dental professionals use state-of-the-art technology to provide thorough assessments. 
        </p>
        <div class="mt-2 lg:mt-0">
          <div class="flex justify-between">
            <div class="lg:text-lg text-sm font-mediun lg:mt-3">
              <i class="fa-regular fa-calendar-days"></i>&nbsp;
              <span class="font-medium">Sabado</span>
            </div>
            <div class="lg:text-lg text-sm font-mediun lg:mt-3">
              <i class="fa-solid fa-location-dot"></i>&nbsp;
              <span class="font-medium">Barangay Clinic</span>
            </div>
          </div>
          <div class="lg:text-lg text-sm font-mediun mt-2 lg:mt-3">
            <i class="fa-regular fa-clock font-semibold"></i>&nbsp;
            <span class="font-medium">7:00 AM - 12:00 PM</span>
          </div>
        </div>
        <div class="lg:mt-10 mt-5">
          <a
            href="/login"
            class="flex w-full justify-center items-center px-3 py-2 lg:text-lg text-sm font-medium text-center text-white bg-green-900 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
          >
            Book a consultation
            <svg
              class="rtl:rotate-180 w-3.5 h-3.5 ms-2"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 14 10"
            >
              <path
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M1 5h12m0 0L9 1m4 4L9 9"
              />
            </svg>
          </a>
        </div>
      </div>
      <img class="w-2/4 lg:h-96 h-64"  src="../img/serviceDTL.jpg" alt="" />
    </div>
  </section>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.js"></script>