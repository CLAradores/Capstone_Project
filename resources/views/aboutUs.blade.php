@extends('layout')

@section('content')
<section class="bg-black text-white max">
    <div class="max-w-7xl m-auto">
      <h1
        style="height: 50vh"
        class="lg:text-4xl text-2xl font-bold text-center flex items-center ml-5"
      >
        About Us
      </h1>
    </div>
  </section>
  <section class="mt-20 text-center">
    <h2 class="lg:text-4xl text-2xl font-semibold mb-10">Who We Are</h2>
    <p class="w-2/3 mx-auto hero--text2">
      "We are a dedicated healthcare platform, committed to pioneering
      accessible, personalized care. Our team merges healthcare expertise with
      innovative technology to revolutionize the way individuals experience
      and access healthcare services. At [Your Company Name], our mission is
      to create a seamless, inclusive, and empowering healthcare experience
      for all, redefining the future of well-being. Join us in our journey to
      transform healthcare delivery and promote a healthier, more informed
      community."
    </p>
  </section>
  <section>
    <div
      class="max-w-6xl mx-auto lg:flex text-center justify-center lg:space-y-0 space-y-10 lg:mt-32 mt-10    "

    >
      <div class="border mx-10">
        <div class="text-center mx-10" style="padding: 3rem 1rem">
          <div
            class="text-center text-xl font-medium mb-10"
            style="background: #98fb98; padding: 1rem"
          >
            <h2 class="text-2xl font-semibold">Mission</h2>
          </div>
          <p class="lg:w-96">
            At [Your Company Name], our mission is to seamlessly integrate
            technology and healthcare, providing accessible, personalized care
            that empowers individuals in their wellness journey. We aim to
            revolutionize the healthcare experience.
          </p>
        </div>
      </div>
      <div class="border mx-10">
        <div class="text-center mx-10" style="padding: 3rem 1rem">
          <div
            class="text-center text-xl font-medium mb-10"
            style="background: #98fb98; padding: 1rem"
          >
            <h2 class="text-2xl font-semibold">Vision</h2>
          </div>
          <p class="lg:w-96">
            Our vision is to be the forefront of a healthcare revolution,
            where technology and compassion converge to redefine the future of
            well-being. We envision a world where healthcare is not just a
            service but a personalized, empowering experience.
          </p>
        </div>
      </div>
    </div>
  </section>
  <div class="lg:flex max-w-6xl mx-auto mt-20 justify-center items-center">
    <!-- ------ -->
    <div class="flex flex-col text-center justify-center items-center mx-10">
      <img
        src="../img/m5.jpeg"
        alt="img"
        style="height: 19rem; width: 13rem"
      />
      <h4 class="mb-4 mt-4">(Font-End Developer)</h4>
      <div class="flex justify-center text-xl space-x-10">
        <button
          data-tooltip-target="tooltip-default1"
          type="button"
          class="focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        >
          <a href="https://facebook.com" target="_blank">
            <i class="fa-solid fa-briefcase"></i>
          </a>
        </button>
        <div
          id="tooltip-default1"
          role="tooltip"
          class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700"
        >
          Porfolio
          <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <button
          data-tooltip-target="tooltip-default2"
          type="button"
          class="focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        >
          <a href="https://facebook.com" target="_blank">
            <i class="fa-brands fa-facebook"></i>
          </a>
        </button>
        <div
          id="tooltip-default2"
          role="tooltip"
          class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700"
        >
          Facebook Account
          <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <button
          data-tooltip-target="tooltip-default3"
          type="button"
          class="focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        >
          <a href="https://instagram.com" target="_blank">
            <i class="fa-brands fa-instagram"></i>
          </a>
        </button>
        <div
          id="tooltip-default3"
          role="tooltip"
          class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700"
        >
          Instagram Account
          <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <button
          data-tooltip-target="tooltip-default4"
          type="button"
          class="focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        >
          <a href="https://twitter.com" target="_blank">
            <i class="fa-brands fa-twitter"></i>
          </a>
        </button>
        <div
          id="tooltip-default4"
          role="tooltip"
          class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700"
        >
          Twitter Account
          <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <button
          data-tooltip-target="tooltip-default5"
          type="button"
          class="focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        >
          <a href="https://facebook.com" target="_blank">
            <i class="fa-brands fa-linkedin"></i>
          </a>
        </button>
        <div
          id="tooltip-default5"
          role="tooltip"
          class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700"
        >
          LinkedIn Account
          <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
      </div>
    </div>
    <!-- ---- -->
    <div
      class="flex flex-col text-center justify-center items-center mx-10 my-20"
    >
      <img
        src="../img/m5.jpeg"
        alt="img"
        style="height: 19rem; width: 13rem"
      />
      <h4 class="mb-4 mt-4">(Font-End Developer)</h4>
      <div class="flex justify-center text-xl space-x-10">
        <button
          data-tooltip-target="tooltip-default6"
          type="button"
          class="focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        >
          <a href="https://facebook.com" target="_blank">
            <i class="fa-solid fa-briefcase"></i>
          </a>
        </button>
        <div
          id="tooltip-default6"
          role="tooltip"
          class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700"
        >
          Porfolio
          <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <button
          data-tooltip-target="tooltip-default7"
          type="button"
          class="focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        >
          <a href="https://facebook.com" target="_blank">
            <i class="fa-brands fa-facebook"></i>
          </a>
        </button>
        <div
          id="tooltip-default7"
          role="tooltip"
          class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700"
        >
          Facebook Account
          <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <button
          data-tooltip-target="tooltip-default8"
          type="button"
          class="focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        >
          <a href="https://instagram.com" target="_blank">
            <i class="fa-brands fa-instagram"></i>
          </a>
        </button>
        <div
          id="tooltip-default8"
          role="tooltip"
          class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700"
        >
          Instagram Account
          <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <button
          data-tooltip-target="tooltip-default9"
          type="button"
          class="focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        >
          <a href="https://twitter.com" target="_blank">
            <i class="fa-brands fa-twitter"></i>
          </a>
        </button>
        <div
          id="tooltip-default9"
          role="tooltip"
          class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700"
        >
          Twitter Account
          <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <button
          data-tooltip-target="tooltip-default51"
          type="button"
          class="focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        >
          <a href="https://linkedin.com" target="_blank">
            <i class="fa-brands fa-linkedin"></i>
          </a>
        </button>
        <div
          id="tooltip-default51"
          role="tooltip"
          class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700"
        >
          LinkedIn Account
          <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
      </div>
    </div>
    <!-- ---- -->
    <div
      class="flex flex-col text-center justify-center items-center mx-10 my-20"
    >
      <img
        src="../img/m5.jpeg"
        alt="img"
        style="height: 19rem; width: 13rem"
      />
      <h4 class="mb-4 mt-4">(Font-End Developer)</h4>
      <div class="flex justify-center text-xl space-x-10">
        <button
          data-tooltip-target="tooltip-default11"
          type="button"
          class="focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        >
          <a href="https://facebook.com" target="_blank">
            <i class="fa-solid fa-briefcase"></i>
          </a>
        </button>
        <div
          id="tooltip-default11"
          role="tooltip"
          class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700"
        >
          Porfolio
          <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <button
          data-tooltip-target="tooltip-default12"
          type="button"
          class="focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        >
          <a href="https://facebook.com" target="_blank">
            <i class="fa-brands fa-facebook"></i>
          </a>
        </button>
        <div
          id="tooltip-default12"
          role="tooltip"
          class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700"
        >
          Facebook Account
          <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <button
          data-tooltip-target="tooltip-default13"
          type="button"
          class="focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        >
          <a href="https://instagram.com" target="_blank">
            <i class="fa-brands fa-instagram"></i>
          </a>
        </button>
        <div
          id="tooltip-default13"
          role="tooltip"
          class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700"
        >
          Instagram Account
          <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <button
          data-tooltip-target="tooltip-default14"
          type="button"
          class="focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        >
          <a href="https://twitter.com" target="_blank">
            <i class="fa-brands fa-twitter"></i>
          </a>
        </button>
        <div
          id="tooltip-default14"
          role="tooltip"
          class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700"
        >
          Twitter Account
          <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <button
          data-tooltip-target="tooltip-default15"
          type="button"
          class="focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        >
          <a href="https://linkedin.com" target="_blank">
            <i class="fa-brands fa-linkedin"></i>
          </a>
        </button>
        <div
          id="tooltip-default15"
          role="tooltip"
          class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700"
        >
          LinkedIn Account
          <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
      </div>
    </div>
    <!-- ---- -->
  </div>

  <!-- component -->

  <!-- Testimonials Starts Here -->
  <!-- Testimonials Section -->
  <section class="bg-gray-200 flex justify-center items-center py-16">
    <div class="container mx-auto">
      <h2 class="text-3xl font-extrabold text-center mb-8">
        What the people say
      </h2>

      <!-- Testimonial Cards -->
      <div class="flex flex-col lg:flex-row justify-center max-w-6xl mx-auto">
        <!-- Testimonial 1 -->
        <div
          class="bg-white  p-6 rounded-lg shadow-lg mb-8 lg:mb-0 lg:mr-4 w-full lg:w-1/3"
        >
          <div class="flex items-center mb-4">
            <img
              src="https://placekitten.com/100/100"
              alt="Person 1"
              class="w-12 h-12 rounded-full mr-4"
            />
            <div>
              <h3 class="text-lg font-semibold">Juan Dela Cruz</h3>
            </div>
          </div>
          <p class="text-gray-700 mb-4">
            "The exceptional service here has truly transformed my health. From attentive care to outstanding results, I've found a trusted partner in my well-being."
          </p>
          <div class="flex items-center">
            <div class="text-yellow-500 mr-2">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path
                  d="M10 1L12.39 6.36L18 7.24L13.5 11.64L14.47 18L10 14.73L5.53 18L6.5 11.64L2 7.24L7.61 6.36L10 1z"
                ></path>
              </svg>
            </div>
            <p class="text-gray-700">4.5 stars</p>
          </div>
          <p class="text-gray-500 text-sm mt-2">
            Published on: <span class="font-semibold">Oct 15, 2023</span>
          </p>
        </div>

        <!-- Testimonial 2 -->
        <div
          class="bg-white p-6 rounded-lg shadow-lg mb-8 lg:mb-0 lg:mx-4 w-full lg:w-1/3"
        >
          <div class="flex items-center mb-4">
            <img
              src="https://placekitten.com/100/101"
              alt="Person 2"
              class="w-12 h-12 rounded-full mr-4"
            />
            <div>
              <h3 class="text-lg font-semibold">Juana Dela Cruz</h3>
            </div>
          </div>
          <p class="text-gray-700 mb-4">
            "My dental experience exceeded expectations. Professional, friendly, and transformative – my smile has never been better!"
          </p>
          <div class="flex items-center">
            <div class="text-yellow-500 mr-2">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path
                  d="M10 1L12.39 6.36L18 7.24L13.5 11.64L14.47 18L10 14.73L5.53 18L6.5 11.64L2 7.24L7.61 6.36L10 1z"
                ></path>
              </svg>
            </div>
            <p class="text-gray-700">5.0 stars</p>
          </div>
          <p class="text-gray-500 text-sm mt-2">
            Published on: <span class="font-semibold">Oct 20, 2023</span>
          </p>
        </div>

        <!-- Testimonial 3 -->
        <div class="bg-white p-6 rounded-lg shadow-lg w-full lg:w-1/3">
          <div class="flex items-center mb-4">
            <img
              src="https://placekitten.com/100/102"
              alt="Person 3"
              class="w-12 h-12 rounded-full mr-4"
            />
            <div>
              <h3 class="text-lg font-semibold">Alex Johnson</h3>
            </div>
          </div>
          <p class="text-gray-700 mb-4">
            "Navigating wellness has been effortless with their guidance. Trustworthy, comprehensive care that empowers me to prioritize my health."
          </p>
          <div class="flex items-center">
            <div class="text-yellow-500 mr-2">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path
                  d="M10 1L12.39 6.36L18 7.24L13.5 11.64L14.47 18L10 14.73L5.53 18L6.5 11.64L2 7.24L7.61 6.36L10 1z"
                ></path>
              </svg>
            </div>
            <p class="text-gray-700">4.7 stars</p>
          </div>
          <p class="text-gray-500 text-sm mt-2">
            Published on: <span class="font-semibold">Oct 25, 2023</span>
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- Testimonials Ends Here -->
@endsection
 <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.js"></script>