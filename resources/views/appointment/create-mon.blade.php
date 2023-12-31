<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Book Appointment Form</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
    />
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    {{-- <x-app-layout> --}}
      <x-slot name="header">
          <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
              {{ __('Book Appointment') }}
          </h2>
      </x-slot>
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-10 offset-md-1 border p-4 shadow bg-light">
      
          <div class="col-12">
            <h3
              class="mt-4 fw-bold text-center text-secondary fs-4 text-uppercase mb-1">
               {{-- <x-application-logo class="block center	 h-9 w-auto fill-current  text-gray-800 dark:text-gray-200" />   --}}
              Barangay Health Center
            </h3>
            <h5 class="fw-bold text-center text-secondary fs-s mb-10">
              New Appointment form
            </h5>
           
          </div>
          <form method="POST" action="/appointment">
            @csrf 
           
            <div class="row g-3">
           
              <div class="flex justify-between ">
              
                <div class="flex justify-between space-x-10 w-4/5">
  
                  <div class="w-full">
                    <h6 class="ml-1 mt-3"> Patient's First Name</h6>
                    <input
                      type="text"
                      name="first_name"
                      class="form-control "
                      pattern="[A-Z\sa-z]{3,20}"
                      {{-- required --}}
                    />@error('first_name')
                    <span class="text-red-500">{{$message}}</span>
                  @enderror
                  </div>
  
                  <div class="w-full">
                    <h6 class="ml-1 mt-3"> Patient's Last Name</h6>
                    <input
                      type="text"
                      class="form-control "
                      name="last_name"
                    />
                  </div>
  
                </div>
                <div class="w-1/12 mr-16">
                  <h6 class="ml-1 mt-3"> Age</h6>
                  <input
                    type="text"
                    name="age"
                    class="form-control "
                    required
                  />@error('age')
                  <span class="text-red-500">{{$message}}</span>
                @enderror
                </div>
              </div>
              
           
           
              <div class="col-md-4"><h6 class="ml-1 mt-3">Date of Birth </h6>
                <input
                  type="date"
                  class="form-control"
                  placeholder="Date of Birth"
                  name="birth_date"
                  required
                />
                @error('age')
                  <span class="text-red-500">{{$message}}</span>
                @enderror
              </div>

              <div class="col-4"><h6 class="ml-1 mt-3">Gender <span class="text-red-500"> *</span></h6>
                <select
                  class="form-select"
                  name="gender"
                  required
                  @error('age')
                  <span class="text-red-500">{{$message}}</span>
                @enderror
                >
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
              <div class="col-md-4"><h6 class="ml-1 mt-3">Mobile Number <span class="text-red-500"> *</span></h6>
                <input
                  type="text"
                  name="phone"
                  class="form-control"
                  placeholder="09121234247"
                  pattern="[0]{1}[9]{1}[0-9]{9}"
                  max="11"
                  {{-- required --}}
                />
              </div>
              <div class="flex justify-between items-center  space-x-5">

                <div class="flex flex-col w-full">
                  <label class="ml-1 mt-3" for="appointment_date">Appointment Date <span class="text-red-500"> *</span></label>
                  <input class="form-control" type="date" name="appointment_date" id="appointment_date" required>
                </div>

                <div class="w-full"><h6 class="ml-1 mt-3">Home Address <span class="text-red-500"> *</span></h6>
                  <input
                    type="text"
                    name="address"
                    class="form-control"
                    placeholder="212 Zone 3, Barangay Sta. Ignacia, Tarlac City"
                    {{-- required --}}
                  />
                </div>
                
                
              
                <div class="w-full">
                  <h6 class="ml-1 mt-3">Services Available <span class="text-red-500"> *</span></h6>
  
                  <select
                  type="text"
                  name="service_type"
                    class="form-select"
                    required
                  >
                  @foreach ($serviceTypes as $type)
                  <option value="{{ $type }}">{{ $type }}</option>
              @endforeach
                  </select>
                </div>
              </div>

              <div class="col-12"> <h6 class="mt-3">
                Appointment Concern Details<span class="text-red-500"> *</span>
              </h6>
                <textarea
                  class="form-control"
                  name="concern"
                  placeholder="Describe your appointment concern"
                  {{-- required --}}
                ></textarea>
              </div>
              <div class="col-12 mt-5 mb-4">
                <x-primary-button class="ms-4 float-end">
                  {{ __('Book this Appointment') }}
              </x-primary-button>  
                <button
                  type="cancel"
                  class="btn bg-red-500 fw-bold text-white float-end hover:text-white me-2 hover:bg-red-400"
                >
       Cancel
               </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  {{-- </x-app-layout> --}}
  </body>
</html>
