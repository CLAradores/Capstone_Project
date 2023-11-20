@extends('build')

@section('data')
<div class="p-4 sm:ml-64 bg-slate-100">
    <div class="max-w-5xl mx-auto mt-20 bg-white p-8">
      <div>
        <h3 class="text-2xl font-semibold">Medical Information Form</h3>
        <p class="mt-2 pb-5">Fill out your information carefully</p>
        <hr />
        <div>

          <form  class="mt-6" method="POST" action="/admin/{{$record->id}}" enctype="multipart/form-data">
            @csrf 
            @method('PUT')
            <h3 class="mt-6 font-medium lg-mb-0 mb-10">
              Name <span class="text-red-500"> * </span>
            </h3>
            <div
              class="lg:flex space-y-8 justify-center items-center lg:space-x-16 space-x-2"
            >
              <div class="relative h-11 w-full min-w-[200px] lg:mt-6">
                <input
                  placeholder="First Name"
                  class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                  name="first_name"
                  value="{{$record->first_name}}"
                />
                @error('first_name')
                <p class="text-red-500 text-xs mt-1 ">{{$message}}</p>
                @enderror
                <label
                  class="after:content[' '] pointer-events-none absolute left-0 -top-2.5 flex h-full w-full select-none text-sm font-normal leading-tight text-blue-gray-500 transition-all after:absolute after:-bottom-2.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-pink-500 after:transition-transform after:duration-300 peer-placeholder-shown:leading-tight peer-placeholder-shown:text-blue-gray-500 peer-focus:text-sm peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:after:scale-x-100 peer-focus:after:border-pink-500 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500"
                >
                  First Name
                </label>
              </div>
              <div class="relative h-11 w-full min-w-[200px]">
                <input
                  placeholder="Last Name"
                  class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                  name="last_name"
                  value="{{$record->last_name}}"

                />
                
                <label
                  class="after:content[' '] pointer-events-none absolute left-0 -top-2.5 flex h-full w-full select-none text-sm font-normal leading-tight text-blue-gray-500 transition-all after:absolute after:-bottom-2.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-pink-500 after:transition-transform after:duration-300 peer-placeholder-shown:leading-tight peer-placeholder-shown:text-blue-gray-500 peer-focus:text-sm peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:after:scale-x-100 peer-focus:after:border-pink-500 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500"
                >
                  Last Name
                </label>
                @error('last_name')
                <p class="text-red-500 text-xs mt-1 ">{{$message}}</p>
                @enderror
              </div>
              <div class="relative h-11 w-full min-w-[200px]">
                <input
                  placeholder="Middle Name"
                  class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                  name="middle_name"
                  value="{{$record->middle_name}}"
                />
                <label
                  class="after:content[' '] pointer-events-none absolute left-0 -top-2.5 flex h-full w-full select-none text-sm font-normal leading-tight text-blue-gray-500 transition-all after:absolute after:-bottom-2.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-pink-500 after:transition-transform after:duration-300 peer-placeholder-shown:leading-tight peer-placeholder-shown:text-blue-gray-500 peer-focus:text-sm peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:after:scale-x-100 peer-focus:after:border-pink-500 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500"
                >
                  Middle Name
                </label>
                @error('middle_name')
                <p class="text-red-500 text-xs mt-1 ">{{$message}}</p>
                @enderror
              </div>
            </div>
            <div class="mt-10 pb-10 flex space-x-32 border-b">
              <div>
                <h4 class="font-medium mt-3">
                  Gender
                  <span class="text-red-500"> * </span>
                </h4>
                <div>
                  <div class="mt-3">
                    <input type="radio" name="gender" value='Male'   id="male" />
                    <label for="male">Male</label>
                  </div>
                  <div class="mt-3">
                    <input type="radio" name="gender" value='Female' id="female" />
                    <label for="female">Female</label>
                  </div>
                  @error('gender')
                  <p class="text-red-500 text-xs mt-1 ">{{$message}}</p>
                  @enderror
                </div>
              </div>
              <div>
                <label for="age">Age</label> &nbsp;
                <input id="age" name="age" value="{{$record->age}}" class="rounded-lg w-16" type="text" />
                @error('age')
                <p class="text-red-500 text-xs mt-1 ">{{$message}}</p>
                @enderror
              </div>
           
            </div>
            <div>
              <!-- Phone# -->
              <h3 class="mt-6 font-medium">
                Phone Number <span class="text-red-500"> * </span>
              </h3>
              <div class="flex space-x-16">
                <div class="relative h-11 max-w-[16.875rem]">
                  <input
                    class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                    name='phone_number'
                    value="{{$record->phone_number}}"
                  />
                </div>
              </div>
              @error('phone_number')
              <p class="text-red-500 text-xs mt-1 ">{{$message}}</p>
              @enderror
            </div>
            <!-- ----- -->
            <div>
              <!-- BirthDate -->
              <h3 class="mt-6 font-medium">
                Birth Date <span class="text-red-500"> * </span>
              </h3>
              <div class="lg:flex">
                <div class="relative h-11 max-w-auto mx-5 md:my-5 my-0 mt-5">
                  <select
                    class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 empty:!bg-red-500 focus:border-2 focus:border-pink-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                    name='month_bdate'
                    
                  >
                    <option >month</option>
                    <option value="01">january</option>
                    <option value="02">Febuary</option>
                    <option value="03">March</option>
                    <option value="04">April</option>
                    <option value="05">May</option>
                    <option value="06">June</option>
                    <option value="07">July</option>
                  </select>
            
                </div>
                <div class="relative h-11 max-w-auto mx-5 mt-5">
                  <select
                    class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 empty:!bg-red-500 focus:border-2 focus:border-pink-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                    name='day_bdate'
                  >
                    <option >day</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                  </select>
           
                </div>
                <div class="relative h-11 max-w-auto mx-5 mt-5">
                  <select
                    class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 empty:!bg-red-500 focus:border-2 focus:border-pink-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                    name='year_bdate'
                  >
                    <option >year</option>
                    <option value="2023">2023</option>
                    <option value="2022">2022</option>
                    <option value="2021">2021</option>
                    <option value="2020">2020</option>
                    <option value="2019">2019</option>
                    <option value="2018">2018</option>
                    <option value="2017">2017</option>
                  </select>
                </div>
           
              </div>
            </div>
            <!-- address -->
            <h3 class="mt-6 font-medium">
              Address <span class="text-red-500"> * </span>
            </h3>
            <div
              class="lg:flex space-y-8 justify-center items-center lg:space-x-16 space-x-2"
            >
              <div class="relative h-11 w-full min-w-[200px] lg:mt-6">
                <input
                  placeholder="Street Address"
                  class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                  name='street_address'
                  value="{{$record->street_address}}"
                />
                @error('street_address')
                <p class="text-red-500 text-xs mt-1 ">{{$message}}</p>
                @enderror
              </div>
              <div class="relative h-11 w-full min-w-[200px]">
                <input
                  placeholder="Street Address Line 2"
                  class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                  name='street_address_line_2'
                  value="{{$record->street_address_line_2}}"
                />
                @error('street_address_line_2')
                <p class="text-red-500 text-xs mt-1 ">{{$message}}</p>
                @enderror
              </div>
              <div class="relative h-11 w-full min-w-[200px]">
                <input
                  placeholder="City"
                  class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                  name='city'
                  value="{{$record->city}}"
                />
                @error('city')
                <p class="text-red-500 text-xs mt-1 ">{{$message}}</p>
                @enderror
              </div>
            </div>
            <!-- 222 -->
            <div
              class="lg:flex space-y-8 justify-center items-center lg:space-x-16 space-x-2 mt-10"
            >
              {{-- <div class="relative h-11 w-full min-w-[200px] lg:mt-6 sm:ms-5">
                <input
                  placeholder="State/Province"
                  class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                  name='state_province'
                  value=''
                />
                @error('state_province')
                <p class="text-red-500 text-xs mt-1 ">{{$message}}</p>
                @enderror
              </div>
              <div class="relative h-11 w-full min-w-[200px]">
                <input
                  placeholder="Postal / Zip Code"
                  class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                  name='postal_zipcode'
                  value=''
                />
                @error('postal_zipcode')
                <p class="text-red-500 text-xs mt-1 ">{{$message}}</p>
                @enderror
              </div>
              <div class="relative h-11 w-full min-w-[200px]">
                <input
                  placeholder="Country"
                  class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                  name='country'
                  value=''
                  />
                  @error('country')
                  <p class="text-red-500 text-xs mt-1 ">{{$message}}</p>
                  @enderror
              </div> --}}
            </div>
            <div class="mt-10">
              <div class="lg:flex justify-center items-center lg:space-x-32">
                <span>Weight:</span>
                <div class="relative h-11 w-full min-w-[200px]">
                  <input
                    placeholder="in kg"
                    class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                    name='weight'
                    value="{{$record->weight}} kg"
                  />
             
                </div>
                @error('weight')
                <p class="text-red-500 text-xs mt-1 ">{{$message}}</p>
                @enderror
              </div>
              <div
                class="lg:flex justify-center items-center lg:space-x-32 mt-10"
              >
                <span>Height:</span>
                <div class="relative h-11 w-full min-w-[200px]">
                  <input
                    placeholder="in cm"
                    class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                    name='height'
                    value="{{$record->height}} cm"
                  />
                  @error('height')
                  <p class="text-red-500 text-xs mt-1 ">{{$message}}</p>
                  @enderror
                </div>
              </div>
            </div>
            <h3 class="text-3xl font-semibold mt-16">In Case of Emergency</h3>
            <div>
              <h3 class="mt-6 font-medium lg-mb-0 mb-5">
                Name <span class="text-red-500"> * </span>
              </h3>
              <div
                class="lg:flex space-y-8 justify-center items-center lg:space-x-16 space-x-2"
              >
                <div class="relative h-11 w-full min-w-[200px] lg:mt-6">
                  <input
                    placeholder="First Name"
                    class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                    name='contact_first_name'
                    value="{{$record->contact_first_name}}"
                  />
                  <label
                    class="after:content[' '] pointer-events-none absolute left-0 -top-2.5 flex h-full w-full select-none text-sm font-normal leading-tight text-blue-gray-500 transition-all after:absolute after:-bottom-2.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-pink-500 after:transition-transform after:duration-300 peer-placeholder-shown:leading-tight peer-placeholder-shown:text-blue-gray-500 peer-focus:text-sm peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:after:scale-x-100 peer-focus:after:border-pink-500 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500"
                  >
                    First Name
                  </label>
                  @error('contact_first_name')
                  <p class="text-red-500 text-xs mt-1 ">{{$message}}</p>
                  @enderror
                </div>
                <div class="relative h-11 w-full min-w-[200px]">
                  <input
                    placeholder="Last Name"
                    class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                    name='contact_last_name'
                    value="{{$record->contact_last_name}}"
                  />
                  <label
                    class="after:content[' '] pointer-events-none absolute left-0 -top-2.5 flex h-full w-full select-none text-sm font-normal leading-tight text-blue-gray-500 transition-all after:absolute after:-bottom-2.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-pink-500 after:transition-transform after:duration-300 peer-placeholder-shown:leading-tight peer-placeholder-shown:text-blue-gray-500 peer-focus:text-sm peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:after:scale-x-100 peer-focus:after:border-pink-500 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500"
                  >
                    Last Name
                  </label>
                  @error('contact_last_name')
                  <p class="text-red-500 text-xs mt-1 ">{{$message}}</p>
                  @enderror
                </div>
              </div>
              <!-- address -->
              <h3 class="mt-10 font-medium">
                Address <span class="text-red-500"> * </span>
              </h3>
              <div
                class="lg:flex space-y-8 justify-center items-center lg:space-x-16 space-x-2"
              >
                <div class="relative h-11 w-full min-w-[200px] lg:mt-6">
                  <input
                    placeholder="Street Address"
                    class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                    name='contact_street_address'
                    value="{{$record->contact_street_address}}"
                  />
                  @error('contact_street_address')
                  <p class="text-red-500 text-xs mt-1 ">{{$message}}</p>
                  @enderror
                </div>
                <div class="relative h-11 w-full min-w-[200px]">
                  <input
                    placeholder="Street Address Line 2"
                    class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                    name='contact_street_address_line_2'
                    value="{{$record->contact_street_address_line_2}}"

                  />
                  @error('contact_street_address_line_2')
                  <p class="text-red-500 text-xs mt-1 ">{{$message}}</p>
                  @enderror
                </div>
                <div class="relative h-11 w-full min-w-[200px]">
                  <input
                    placeholder="City"
                    class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                    name='contact_city'
                    value="{{$record->contact_city}}"
                    />
                    @error('contact_city')
                    <p class="text-red-500 text-xs mt-1 ">{{$message}}</p>
                    @enderror
                </div>
              </div>
              <!-- 222 -->
              <div
                class="lg:flex space-y-8 justify-center items-center lg:space-x-16 space-x-2 mt-10"
              >
                {{-- <div class="relative h-11 w-full min-w-[200px] lg:mt-6">
                  <input
                    placeholder="State/Province"
                    class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                    name='contact_state_province'
                    value=''
                  />
                  @error('contact_state_province')
                  <p class="text-red-500 text-xs mt-1 ">{{$message}}</p>
                  @enderror
                </div> --}}
                {{-- <div class="relative h-11 w-full min-w-[200px]">
                  <input
                    placeholder="Postal / Zip Code"
                    class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                    name='contact_postal_zipcode'
                    value=''
                  />
                  @error('contact_postal_zipcode')
                  <p class="text-red-500 text-xs mt-1 ">{{$message}}</p>
                  @enderror
                </div> --}}
                {{-- <div class="relative h-11 w-full min-w-[200px]">
                  <input
                    placeholder="Country"
                    class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                    name='contact_country'
                    value=''
                  />
                  @error('contact_country')
                  <p class="text-red-500 text-xs mt-1 ">{{$message}}</p>
                  @enderror
                </div> --}}
              </div>
            </div>
            <h3 class="mt-6 font-medium">
              Phone Number <span class="text-red-500"> * </span>
            </h3>
            <div class="relative h-11 max-w-[16.875rem]">
              <input
                placeholder="Phone Number"
                class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                name='contact_phone_number'
                value="{{$record->contact_phone_number}}"
              />
              @error('contact_phone_number')
              <p class="text-red-500 text-xs mt-1 ">{{$message}}</p>
              @enderror
            </div>
            <!-- Gemeral Med His. -->
            <div>
              <h3 class="text-3xl font-semibold mt-16">
                General Medical History
              </h3>
              <h4 class="mt-16 font-medium">
                Have you had the Hepatitis B vaccination?
                <span class="text-red-500"> * </span>
              </h4>
              <div>
                <div class="mt-3">
                  <input type="radio" name="hepa" value="Yes" id="yes" />
                  <label for="yes">Yes</label>
                  
                </div>
                <div class="mt-3">
                  <input type="radio" name="hepa" value="No" id="no" />
                  <label for="no">No</label>
                </div>
          
              </div>
            </div>
            <!-- immune -->
            <div>
              <p class="my-16">
                Immunity information (please note: this information must be
                provided prior to employment or you will not be allowed to
                work):
              </p>
              <div class="flex lg:space-x-32 space-x-20 items-center">
                <div class="font-medium">
                  <h4>Chicken Pox</h4>
                  <h4>(Varicella):</h4>
                </div>
                <div>
                  <div>
                    <div>
                      <input type="radio" id="pox1" name="chicken_pox" value="IMMUNE" />
                      <label for="pox1">IMMUNE</label>
                    </div>
                    <div class="mt-3">
                      <input type="radio" id="pox2" name="chicken_pox" value="NOT IMMUNE" />
                      <label for="pox2">NOT IMMUNE</label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- measles -->
              <div class="flex lg:space-x-32 space-x-20 items-center mt-16">
                <div class="font-medium">
                  <h4>Measles:&nbsp; &nbsp; &nbsp; &nbsp;</h4>
                </div>
                <div>
                  <div>
                    <div>
                      <input type="radio" name="measle" value="IMMUNE" id="measle1" />
                      <label for="measle1">IMMUNE</label>
                    </div>
                    <div class="mt-3">
                      <input type="radio" name="measle" value="NOT IMMUNE" id="measle2" />
                      <label for="measle2">NOT IMMUNE</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt-10">
                <h4 class="font-medium">
                  Medical History (Please check if you have past medical
                  history of the following)
                </h4>
                <div class="flex space-x-28 mt-3">
                  <div>
                    <div class="flex items-center mt-2">
                      <input
                        type="checkbox"
                        name="cancer"
                        value="Cancer"
                        id="cancer"
                      />
                      &nbsp;
                      <label for="cancer">Cancer</label>
                    </div>
                    <div class="flex items-center mt-2">
                      <input
                        type="checkbox"
                        name="pox"
                        value="Chicken Pox"
                        id="pox"
                      />
                      &nbsp;
                      <label for="pox">Chicken Pox</label>
                    </div>
                    <div class="flex items-center mt-2">
                      <input
                        type="checkbox"
                        name="diptheria"
                        id="diptheria"
                        value="Diptheria"
                      />
                      &nbsp;
                      <label for="diptheria">Diptheria</label>
                    </div>
                    <div class="flex items-center mt-2">
                      <input
                        type="checkbox"
                        name="epilepsy"
                        value="Epilepsy"
                        id="epilepsy"
                      />
                      &nbsp;
                      <label for="epilepsy">Epilepsy</label>
                    </div>
                    <div class="flex items-center mt-2">
                      <input
                        type="checkbox"
                        value="Mumps"
                        name="mumps"
                        id="mumps"
                      />
                      &nbsp;
                      <label for="mumps">Mumps</label>
                    </div>
                    <div class="flex items-center mt-2">
                      <input
                        type="checkbox"
                        value="Scarlet Fever"
                        name="fever"
                        id="fever"
                      />
                      &nbsp;
                      <label for="fever">Scarlet Fever</label>
                    </div>
                    <div class="flex items-center mt-2">
                      <label for="other1">Other</label>
                      <div class="relative h-11 w-full min-w-[200px]">
                        <input
                          id="other1"
                          name="other1"
                          value=""
                          class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                        />
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="flex items-center mt-2">
                      <input
                        type="checkbox"
                        name="cadiovascular"
                        id="cadiovascular"
                        value="Cadiovascular Disease"
                      />
                      &nbsp;
                      <label for="cadiovascular">Cadiovascular Disease</label>
                    </div>
                    <div class="flex items-center mt-2">
                      <input
                        type="checkbox"
                        name="diabetes"
                        value="Diabetes"
                        id="diabetes"
                      />
                      &nbsp;
                      <label for="diabetes">Diabetes</label>
                    </div>
                    <div class="flex items-center mt-2">
                      <input
                        type="checkbox"
                        name="infections"
                        id="infections"
                        value="Ear Infections"
                      />
                      &nbsp;
                      <label for="infeections">Ear Infeections</label>
                    </div>

                    <div class="flex items-center mt-2">
                      <input
                        type="checkbox"
                        name="rheumatic"
                        id="rheumatic"
                        value="Rheumatic Fever"
                      />
                      &nbsp;
                      <label for="rheumatic">Rheumatic Fever</label>
                    </div>
                    <div class="flex items-center mt-2">
                      <input
                        type="checkbox"
                        name="tuberculosis"
                        id="tuberculosis"
                        value="Tuberculosis"
                      />
                      &nbsp;
                      <label for="tuberculosis">Tuberculosis</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt-10">
                <h4 class="font-medium">Allergies</h4>
                <div class="flex">
                  <div>
                    <div class="flex items-center mt-2">
                      <input
                        type="checkbox"
                        name="surgeries"
                        id="surgeries"
                        value="Surgeries"
                      />
                      &nbsp;
                      <label for="surgeries">Surgeries</label>
                    </div>
                    <div class="flex items-center mt-2">
                      <input
                        type="checkbox"
                        value="Injuries"
                        name="injuries"
                        id="injuries"
                      />
                      &nbsp;
                      <label for="injuries">Injuries</label>
                    </div>
                    <div class="flex items-center mt-2">
                      <input
                        type="checkbox"
                        name="hospitalization"
                        id="hospitalization"
                        value="Hospitalization"
                      />
                      &nbsp;
                      <label for="hospitalization">Hospitalization</label>
                    </div>
                    <div class="flex items-center mt-2">
                      <label for="other2">Other</label>
                      <div class="relative h-11 w-full min-w-[200px]">
                        <input
                          id="other2"
                          name="other2"
                          class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                          value=""
                        />
                      </div>
                    </div>
                  </div>

                  <div>
                    <div class="flex items-start mt-2">
                      <input
                        type="checkbox"
                        name="accicdents"
                        id="accicdents"
                      />
                      &nbsp;
                      <label for="accicdents">Accicdents</label>
                    </div>
                    <div class="flex items-center mt-2">
                      <input
                        type="checkbox"
                        name="congenital"
                        id="congenital"

                      />
                      &nbsp;
                      <label for="congenital">Congenital Defects</label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- textarea -->
              <div class="my-16 font-medium">
                <div class="mt-10">
                  <h4>List any medication taken regularly:</h4>
                  <textarea
                    class="mt-4"
                    name="textarea1"
                    value="{{$record->textarea1}}"
                    id=""
                    cols="40"
                    rows="2"
                  ></textarea>
                </div>
              </div>
            </div>
            <!-- insureance -->
            <div class="flex space-x-5 justify-end ">
            <div class="text-center mt-10">
              <input
                class="bg-black text-white py-2 px-4"
                type="submit"
                value="Update Form"
              />
            </div>
            <div class="text-center mt-10">
              <form action="POST" action="/admin/{{$record->id}}">
                @csrf
                @method('DELETE')
               <button  class="bg-red-600 text-white py-2 px-4">
                 Delete Record
                </button>
              </form>
            </div>
          </div>
          </div>
          </form>

        </div>
      </div>
    </div>
  </div>
@endsection