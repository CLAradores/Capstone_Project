@extends('build')

@section('data')
<div class="p-4 sm:ml-64 mt-20">
  <div class="container mx-auto mt-10 lg:space-y-10">
    <h1 class="text-3xl font-semibold mb-6">Admin Dashboard</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Total Patients Card -->
        <div class="bg-white p-6 rounded-md shadow-md">
            <h2 class="text-xl font-semibold mb-4">Dental Patients</h2>
            <p class="text-3xl font-bold text-blue-500">250</p>
        </div>

        <!-- Male Patients Card -->
        <div class="bg-white p-6 rounded-md shadow-md">
            <h2 class="text-xl font-semibold mb-4">Male Patients</h2>
            <p class="text-3xl font-bold text-blue-500">300</p>
        </div>

        <!-- Female Patients Card -->
        <div class="bg-white p-6 rounded-md shadow-md">
            <h2 class="text-xl font-semibold mb-4">Female Patients</h2>
            <p class="text-3xl font-bold text-pink-500">800</p>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Total Patients Card -->
        <div class="bg-white p-6 rounded-md shadow-md">
            <h2 class="text-xl font-semibold mb-4">Adult Patients</h2>
            <p class="text-3xl font-bold text-blue-500">150</p>
        </div>

        <!-- Male Patients Card -->
        <div class="bg-white p-6 rounded-md shadow-md">
            <h2 class="text-xl font-semibold mb-4">Senior Citizen Patients</h2>
            <p class="text-3xl font-bold text-blue-500">180</p>
        </div>

        <!-- Female Patients Card -->
        <div class="bg-white p-6 rounded-md shadow-md">
            <h2 class="text-xl font-semibold mb-4">PWD Patients</h2>
            <p class="text-3xl font-bold text-pink-500">150</p>
        </div>
    </div>
</div>
</div>
@endsection