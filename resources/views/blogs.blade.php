@extends('layout')

@section('content')
<section class="icons bg-light mx-auto">
    <div
      class="relative bg-blue-500 text-white bg-cover bg-center flex flex-col justify-center items-center"
      style="background-image: url('../img/adult.jpeg'); height: 50vh"
    >
      <!-- Dark Overlay -->
      <div class="absolute inset-0 bg-black opacity-50"></div>
      <!-- Dark Overlay -->
      <div class="absolute inset-0 bg-black opacity-50"></div>

      <div
        class="container mx-6 md:mx-48 py-20 text-center relative z-10 space-x-3"
      >
        <h1
          class="text-2xl md:text-5xl lg:text-4xl font-bold mb-4 mt-4 mx-auto"
        >
          Your Health Matters
        </h1>
        <p class="text-lg md:text-xl lg:text-2xl mb-8">
          Discover Tips and Insights for a Healthy Lifestyle
        </p>
        <a
          href="#"
          class="bg-white text-green-700 px-6 py-3 rounded-full font-semibold hover:bg-green-700 hover:text-white transition duration-300"
          >Explore Articles</a
        >
      </div>
    </div>
    <!-- Hero section ends here -->
  </section>
  <!-- Health Sections end here -->
  <div class="lg:max-w-5xl lg:mx-auto m-10 my-20">
    <h2 class="lg:text-3xl text-xl font-bold">Our Health Blogs</h2>
    <p class="lg:max-w-2xl mt-5 text-xs lg:text-base">
      Read the latest posts from experts at our Barangay Health Publishing
      covering a variety of health topics and perspectives on medical news.
    </p>
  </div>
  <!-- Main content starts here-->
  <!-- Blog posts -->
  <div class="max-w-6xl mx-auto space-y-16">
    <!-- Blog Post 1 -->
    <div
      class="lg:flex lg:space-x-10 mx-10 my-10 justify-items-center items-center"
    >
      <img
        src="../img/adult.jpeg"
        alt="Blog Post 1"
        class="mb-4 rounded-md h-72 w-full object-cover"
      />
      <div>
        <h4 class="text-green-500 text-lg font-medium mb-5">
          Staying Healty
        </h4>
        <h2 class="text-2xl font-semibold mb-2">
          The Importance of Regular Exercise
        </h2>
        <p class="mb-3">Published November 15, 2023</p>
        <p class="text-gray-700">
          Many people experience a decline in their driving skills as they
          age. While some choose to stop driving, others resist. Whether it's
          you or a loved one, planning ahead can help you tackle fixable
          issues, make transitions easier, and avoid harming yourself or
          someone else.
        </p>
        <a href="#" class="text-blue-500 mt-2 inline-block mt-5">Read more</a>
      </div>
    </div>
    <!-- Blog Post 1 -->
    <div
      class="lg:flex lg:space-x-10 mx-10 my-10 justify-items-center items-center"
    >
      <img
        src="../img/adult.jpeg"
        alt="Blog Post 1"
        class="mb-4 rounded-md h-72 w-full object-cover"
      />
      <div>
        <h4 class="text-green-500 text-lg font-medium mb-5">
          Staying Healty
        </h4>
        <h2 class="text-2xl font-semibold mb-2">
          The Importance of Regular Exercise
        </h2>
        <p class="mb-3">Published November 15, 2023</p>
        <p class="text-gray-700">
          Many people experience a decline in their driving skills as they
          age. While some choose to stop driving, others resist. Whether it's
          you or a loved one, planning ahead can help you tackle fixable
          issues, make transitions easier, and avoid harming yourself or
          someone else.
        </p>
        <a href="#" class="text-blue-500 mt-2 inline-block mt-5">Read more</a>
      </div>
    </div>
    <!-- Blog Post 1 -->
    <div
      class="lg:flex lg:space-x-10 mx-10 my-10 justify-items-center items-center"
    >
      <img
        src="../img/adult.jpeg"
        alt="Blog Post 1"
        class="mb-4 rounded-md h-72 w-full object-cover"
      />
      <div>
        <h4 class="text-green-500 text-lg font-medium mb-5">
          Staying Healty
        </h4>
        <h2 class="text-2xl font-semibold mb-2">
          The Importance of Regular Exercise
        </h2>
        <p class="mb-3">Published November 15, 2023</p>
        <p class="text-gray-700">
          Many people experience a decline in their driving skills as they
          age. While some choose to stop driving, others resist. Whether it's
          you or a loved one, planning ahead can help you tackle fixable
          issues, make transitions easier, and avoid harming yourself or
          someone else.
        </p>
        <a href="#" class="text-blue-500 mt-2 inline-block mt-5">Read more</a>
      </div>
    </div>

    <!-- Blog Post 2 -->

    <!-- Blog Post 3 -->
  </div>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.js"></script>