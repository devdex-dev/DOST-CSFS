<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
      rel="stylesheet"
    /> 
    <link href="./src/output.css" rel="stylesheet" />



  </head>

  <body class="text-gray-800 font-inter">
    <!-- start: Sidebar -->
    <div
      class="fixed left-0 top-0 w-64 h-full bg-gray-900 p-4 z-50 sidebar-menu transition-transform"
    >
      <a href="#" class="flex items-center pb-4 border-b border-b-gray-800">
        <img src="./assets/1.png" alt="" class="w-8 h-8 rounded object-cover" />
        <span class="text-lg font-bold text-white ml-3">DOST CSFS</span>
      </a>
      <ul class="mt-4">
        <li class="mb-1 group">
          <a
            href="./dashboard.php"
            class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100"
          >
            <i class="ri-home-2-line mr-3 text-lg"></i>
            <span class="text-sm">Dashboard</span>
          </a>
        </li>

        <li class="mb-1 group active">
          <a
            href="#"
            class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100"
          >
            <i class="ri-survey-line mr-3 text-lg"></i>
            <span class="text-sm">Forms</span>
          </a>
        </li>

        <li class="mb-1 group">
          <a
            href="./reports.php"
            class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100"
          >
            <i class="ri-file-chart-line mr-3 text-lg"></i>
            <span class="text-sm">Reports</span>
          </a>
        </li>
        <li class="mb-1 group">
          <a
            href="./index2.html"
            class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100"
          >
            <i class="ri-admin-line mr-3 text-lg"></i>
            <span class="text-sm">Admin</span>
          </a>
        </li>
      </ul>
    </div>
    <div
      class="fixed top-0 left-0 w-full h-full bg-black/50 z-40 md:hidden sidebar-overlay"
    ></div>
    <!-- end: Sidebar -->

    <!-- start: Main -->
    <main
      class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-50 min-h-screen transition-all main"
    >
      <div
        class="py-2 px-6 bg-white flex items-center shadow-md shadow-black/5 sticky top-0 left-0 z-30"
      >
        <button type="button" class="text-lg text-gray-600 sidebar-toggle">
          <i class="ri-menu-line"></i>
        </button>
        <ul class="flex items-center text-sm ml-4">
          <li class="mr-2">
            <a class="text-base text-black font-bold">Forms</a>
          </li>
        </ul>

        <!-- profile avatar dropdown -->
        <ul class="ml-auto flex items-center">
          <!-- avatar -->
          <li class="dropdown ml-3">
            <button type="button" class="dropdown-toggle flex items-center">
              <img
                src="https://placehold.co/32x32"
                alt=""
                class="w-8 h-8 rounded block object-cover align-middle"
              />
            </button>
            <ul
              class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]"
            >
              <li>
                <a
                  href="#"
                  class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50"
                  >Profile</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50"
                  >Setting</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50"
                  >Logout</a
                >
              </li>
            </ul>
          </li>
        </ul>
      </div>

      <!-- content -->

      <div class="p-6">
        <div class="grid grid-cols-1 gap-6">
          <div
            class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5"
          >
            <div class="flex justify-between">
              <!-- diri isulod na div -->
              <div>
                <div class="text-2xl font-semibold mb-1">
                  Personal Information
                </div>
                <div class="sm:col-span-3">
                  <label
                    for="country"
                    class="block text-sm font-medium leading-6 text-gray-900 pt-8"
                    >Type of Service</label
                  >
                  <div class="mt-2">
                    <select
                      id="sex"
                      name="sex"
                      autocomplete="sex-choice"
                      class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6"
                    >
                      <option>Select Options</option>
                      <option>Technology Intervention</option>
                      <option>Technology Training</option>
                      <option>Technology Forum/Seminar</option>
                      <option>Consultancy Services</option>
                      <option>Testing and Calibration</option>
                      <option>Packaging and Labeling Services</option>
                      <option>Scholarship Program Services</option>
                      <option>Formula and Conversion</option>
                      <option>R&D Management</option>
                    </select>
                  </div>
                </div>

                <div class="sm:col-span-4">
                  <label
                    for="email"
                    class="block text-sm font-medium leading-6 text-gray-900 pt-8"
                    >Training Title</label
                  >
                  <div class="mt-2">
                    <input
                      id="email"
                      name="email"
                      type="email"
                      autocomplete="email"
                      class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    />
                  </div>
                </div>

                <!-- basinc info btns -->
                <div class="flex items-center mb-4 order-tab">
                  <div class="">
                    <div
                      class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6"
                    >
                      <div class="sm:col-span-3">
                        <label
                          for="first-name"
                          class="block text-sm font-medium leading-6 text-gray-900"
                          >First name</label
                        >
                        <div class="mt-2">
                          <input
                            type="text"
                            name="first-name"
                            id="first-name"
                            autocomplete="given-name"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                          />
                        </div>
                      </div>

                      <div class="sm:col-span-3">
                        <label
                          for="last-name"
                          class="block text-sm font-medium leading-6 text-gray-900"
                          >Last name</label
                        >
                        <div class="mt-2">
                          <input
                            type="text"
                            name="last-name"
                            id="last-name"
                            autocomplete="family-name"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                          />
                        </div>
                      </div>

                      <div class="sm:col-span-3">
                        <label
                          for="country"
                          class="block text-sm font-medium leading-6 text-gray-900"
                          >Sex</label
                        >
                        <div class="mt-2">
                          <select
                            id="sex"
                            name="sex"
                            autocomplete="sex-choice"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6"
                          >
                            <option>Select Options</option>
                            <option>Male</option>
                            <option>Female</option>
                          </select>
                        </div>
                      </div>

                      <div class="sm:col-span-4">
                        <label
                          for="email"
                          class="block text-sm font-medium leading-6 text-gray-900"
                          >Email address</label
                        >
                        <div class="mt-2">
                          <input
                            id="email"
                            name="email"
                            type="email"
                            autocomplete="email"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                          />
                        </div>
                      </div>

                      <div class="sm:col-span-4">
                        <label
                          for="email"
                          class="block text-sm font-medium leading-6 text-gray-900"
                          >Contact No.</label
                        >
                        <div class="mt-2">
                          <input
                            id="email"
                            name="email"
                            type="email"
                            autocomplete="email"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                          />
                        </div>
                      </div>

                      <div class="sm:col-span-4">
                        <label
                          for="email"
                          class="block text-sm font-medium leading-6 text-gray-900"
                          >Date</label
                        >
                        <div class="mt-2">
                          <input
                            id="email"
                            name="email"
                            type="email"
                            autocomplete="email"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                          />
                        </div>
                      </div>

                      <div class="col-span-full">
                        <label
                          for="street-address"
                          class="block text-sm font-medium leading-6 text-gray-900"
                          >Address</label
                        >
                        <div class="mt-2">
                          <input
                            type="text"
                            name="street-address"
                            id="street-address"
                            autocomplete="street-address"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                          />
                        </div>
                      </div>

                      <div class="sm:col-span-2 sm:col-start-1">
                        <label
                          for="city"
                          class="block text-sm font-medium leading-6 text-gray-900"
                          >Age</label
                        >
                        <div class="mt-2">
                          <input
                            type="text"
                            name="city"
                            id="city"
                            autocomplete="address-level2"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                          />
                        </div>
                      </div>

                      <div class="sm:col-span-2">
                        <label
                          for="region"
                          class="block text-sm font-medium leading-6 text-gray-900"
                          >Designation</label
                        >
                        <div class="mt-2">
                          <input
                            type="text"
                            name="region"
                            id="region"
                            autocomplete="address-level1"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                          />
                        </div>
                      </div>

                      <div class="sm:col-span-2">
                        <label
                          for="postal-code"
                          class="block text-sm font-medium leading-6 text-gray-900"
                          >Company Name</label
                        >
                        <div class="mt-2">
                          <input
                            type="text"
                            name="postal-code"
                            id="postal-code"
                            autocomplete="postal-code"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                          />
                        </div>
                      </div>
                    </div>

                    <br />
                    <div class="pt-5">
                      <h1
                        class="text-base font-semibold leading-7 text-gray-900"
                      >
                        Mark your answers with a check (/)
                      </h1>

                      <div class="pt-5 space-y-5">
                        <fieldset>
                          <legend
                            class="text-sm font-semibold leading-6 text-gray-900"
                          >
                            Are you a:
                          </legend>
                          <div class="pt-5 flex flex-wrap items-center gap-4">
                            <div class="relative flex items-center gap-x-1">
                              <input
                                id="industry"
                                name="industry"
                                type="checkbox"
                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600"
                              />
                              <label
                                for="industry"
                                class="font-medium text-gray-900"
                                >Senior Citizen</label
                              >
                            </div>
                            <div class="relative flex items-center gap-x-3">
                              <input
                                id="civil-society"
                                name="civil-society"
                                type="checkbox"
                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600"
                              />
                              <label
                                for="civil-society"
                                class="font-medium text-gray-900"
                                >Differently-Abled Person</label
                              >
                            </div>
                            <div class="relative flex items-center gap-x-3">
                              <input
                                id="academe"
                                name="academe"
                                type="checkbox"
                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600"
                              />
                              <label
                                for="academe"
                                class="font-medium text-gray-900"
                                >4Ps Member</label
                              >
                            </div>
                            <div class="relative flex items-center gap-x-3">
                              <input
                                id="government"
                                name="government"
                                type="checkbox"
                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600"
                              />
                              <label
                                for="government"
                                class="font-medium text-gray-900"
                                >Youth(18-30yo)
                              </label>
                            </div>
                            <div class="relative flex items-center gap-x-3">
                              <input
                                id="media"
                                name="media"
                                type="checkbox"
                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600"
                              />
                              <label
                                for="media"
                                class="font-medium text-gray-900"
                                >Indigenous Group Member</label
                              >
                            </div>
                          </div>
                        </fieldset>
                        <fieldset>
                          <legend
                            class="text-sm font-semibold leading-6 text-gray-900"
                          >
                            In what sector do you belong to?
                          </legend>
                          <div class="pt-5 flex flex-wrap items-center gap-4">
                            <div class="relative flex items-center gap-x-1">
                              <input
                                id="industry"
                                name="industry"
                                type="checkbox"
                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600"
                              />
                              <label
                                for="industry"
                                class="font-medium text-gray-900"
                                >Industry</label
                              >
                            </div>
                            <div class="relative flex items-center gap-x-3">
                              <input
                                id="civil-society"
                                name="civil-society"
                                type="checkbox"
                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600"
                              />
                              <label
                                for="civil-society"
                                class="font-medium text-gray-900"
                                >Civil Society Organization</label
                              >
                            </div>
                            <div class="relative flex items-center gap-x-3">
                              <input
                                id="academe"
                                name="academe"
                                type="checkbox"
                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600"
                              />
                              <label
                                for="academe"
                                class="font-medium text-gray-900"
                                >Academe</label
                              >
                            </div>
                            <div class="relative flex items-center gap-x-3">
                              <input
                                id="government"
                                name="government"
                                type="checkbox"
                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600"
                              />
                              <label
                                for="government"
                                class="font-medium text-gray-900"
                                >Government</label
                              >
                            </div>
                            <div class="relative flex items-center gap-x-3">
                              <input
                                id="media"
                                name="media"
                                type="checkbox"
                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600"
                              />
                              <label
                                for="media"
                                class="font-medium text-gray-900"
                                >Media</label
                              >
                            </div>
                          </div>
                        </fieldset>
                        <fieldset>
                          <legend
                            class="text-sm font-semibold leading-6 text-gray-900"
                          >
                            Is it your FIRST TIME to avail of the DOST
                            Assistance/Service?
                          </legend>

                          <div class="pt-5 flex flex-wrap items-center gap-4">
                            <div class="flex items-center gap-x-3">
                              <input
                                id="push-everything"
                                name="push-notifications"
                                type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                              />
                              <label
                                for="push-everything"
                                class="block text-sm font-medium leading-6 text-gray-900"
                                >Yes</label
                              >
                            </div>
                            <div class="flex items-center gap-x-3">
                              <input
                                id="push-email"
                                name="push-notifications"
                                type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                              />
                              <label
                                for="push-email"
                                class="block text-sm font-medium leading-6 text-gray-900"
                                >No</label
                              >
                            </div>
                          </div>
                        </fieldset>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="p-6">
        <div class="grid grid-cols-1 gap-6 mb-6">
          <div
            class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5"
          >
            <div class="flex justify-between">
              <!-- diri isulod na div -->
              <div>
                <div class="text-2xl font-semibold mb-10">
                  1. How will you RATE the delivery of our assistance/service?
                </div>
                <fieldset>
                  <legend class="text-sm font-semibold leading-5 text-gray-900">
                    Legend
                  </legend>
                  <div class="pt-5 flex flex-wrap items-center gap-4">
                    <div class="relative flex items-center gap-x-1">
                      <label for="industry" class="font-medium text-gray-900"
                        >1-Strongly Disagree</label
                      >
                    </div>
                    <div class="relative flex items-center gap-x-3">
                      <label
                        for="civil-society"
                        class="font-medium text-gray-900"
                        >2-Disagree
                      </label>
                    </div>
                    <div class="relative flex items-center gap-x-3">
                      <label for="academe" class="font-medium text-gray-900"
                        >3-Neither Agree nor Disagree</label
                      >
                    </div>
                    <div class="relative flex items-center gap-x-3">
                      <label for="government" class="font-medium text-gray-900"
                        >4-Agree
                      </label>
                    </div>
                    <div class="relative flex items-center gap-x-3">
                      <label for="media" class="font-medium text-gray-900"
                        >5-Strongly Agree</label
                      >
                    </div>
                  </div>
                </fieldset>

                <!-- questions 1 -->
                <div class="pt-8 pl-4">
                  <ul role="list" class="divide-y divide-gray-100">
                    <li class="flex justify-between gap-x-3">
                      <div class="flex min-w-0 gap-x-4">
                        <div class="min-w-0 flex-auto">
                          <p
                            class="text-sm font-semibold leading-6 text-gray-900"
                          >
                            SQD0. I am satisfied with the assistance / service
                            that I availed.
                          </p>
                          <p
                            class="mt-1 truncate text-xs leading-5 text-gray-500"
                          >
                            Overall Perception of the Assistance/Service
                          </p>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <fieldset>
                    <div class="pl-4">
                      <div class="flex items-center gap-x-3">
                        <input
                          id="push-everything"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="push-everything"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >1 - Strongly Disagree</label
                        >
                      </div>
                      <div class="flex items-center gap-x-3">
                        <input
                          id="push-email"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="push-email"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >2 - Disagree</label
                        >
                      </div>
                      <div class="flex items-center gap-x-3">
                        <input
                          id="push-email"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="push-email"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >3 - Neither Agree nor Disagree</label
                        >
                      </div>
                      <div class="flex items-center gap-x-3">
                        <input
                          id="push-email"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="push-email"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >4 - Agree</label
                        >
                      </div>
                      <div class="flex items-center gap-x-3">
                        <input
                          id="strongly-agree"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="strongly-a"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >5 - Strongly Agree</label
                        >
                      </div>
                    </div>
                  </fieldset>
                </div>
                <!-- end of questions  -->
                <!-- questions 2 -->
                <div class="pt-8 pl-4">
                  <ul role="list" class="divide-y divide-gray-100">
                    <li class="flex justify-between gap-x-3">
                      <div class="flex min-w-0 gap-x-4">
                        <div class="min-w-0 flex-auto">
                          <p
                            class="text-sm font-semibold leading-6 text-gray-900"
                          >
                            SQD1. I spent a reasonable amount of time for my
                            transaction or the availed assistance / service.
                          </p>
                          <p
                            class="mt-1 truncate text-xs leading-5 text-gray-500"
                          >
                            (The coordination timeline and transactional
                            timeline are convenient and in accordance to the
                            Citizen’s Charter of DOST.)
                          </p>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <fieldset>
                    <div class="pl-4">
                      <div class="flex items-center gap-x-3">
                        <input
                          id="push-everything"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="push-everything"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >1 - Strongly Disagree</label
                        >
                      </div>
                      <div class="flex items-center gap-x-3">
                        <input
                          id="push-email"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="push-email"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >2 - Disagree</label
                        >
                      </div>
                      <div class="flex items-center gap-x-3">
                        <input
                          id="push-email"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="push-email"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >3 - Neither Agree nor Disagree</label
                        >
                      </div>
                      <div class="flex items-center gap-x-3">
                        <input
                          id="push-email"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="push-email"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >4 - Agree</label
                        >
                      </div>
                      <div class="flex items-center gap-x-3">
                        <input
                          id="strongly-agree"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="strongly-a"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >5 - Strongly Agree</label
                        >
                      </div>
                    </div>
                  </fieldset>
                </div>
                <!-- end of questions -->
                <!-- questions 3 -->
                <div class="pt-8 pl-4">
                  <ul role="list" class="divide-y divide-gray-100">
                    <li class="flex justify-between gap-x-3">
                      <div class="flex min-w-0 gap-x-4">
                        <div class="min-w-0 flex-auto">
                          <p
                            class="text-sm font-semibold leading-6 text-gray-900"
                          >
                            SQD2. The office followed the transaction or the
                            availed assistance / service’s requirements and
                            steps based on the information provided.
                          </p>
                          <p
                            class="mt-1 truncate text-xs leading-5 text-gray-500"
                          >
                            (Provided what was needed and what was promised in
                            accordance with the policy and standards and
                            mutually agreed terms and conditions.)
                          </p>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <fieldset>
                    <div class="pl-4">
                      <div class="flex items-center gap-x-3">
                        <input
                          id="push-everything"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="push-everything"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >1 - Strongly Disagree</label
                        >
                      </div>
                      <div class="flex items-center gap-x-3">
                        <input
                          id="push-email"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="push-email"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >2 - Disagree</label
                        >
                      </div>
                      <div class="flex items-center gap-x-3">
                        <input
                          id="push-email"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="push-email"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >3 - Neither Agree nor Disagree</label
                        >
                      </div>
                      <div class="flex items-center gap-x-3">
                        <input
                          id="push-email"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="push-email"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >4 - Agree</label
                        >
                      </div>
                      <div class="flex items-center gap-x-3">
                        <input
                          id="strongly-agree"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="strongly-a"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >5 - Strongly Agree</label
                        >
                      </div>
                    </div>
                  </fieldset>
                </div>
                <!-- end of questions -->
                <!-- questions 4 -->
                <div class="pt-8 pl-4">
                  <ul role="list" class="divide-y divide-gray-100">
                    <li class="flex justify-between gap-x-3">
                      <div class="flex min-w-0 gap-x-4">
                        <div class="min-w-0 flex-auto">
                          <p
                            class="text-sm font-semibold leading-6 text-gray-900"
                          >
                            SQD3. The steps (including payment, if applicable) I
                            needed to do for my transaction or the availed
                            assistance / service were easy and simple.
                          </p>
                          <p
                            class="mt-1 truncate text-xs leading-5 text-gray-500"
                          >
                            (Including convenience of location, ample amenities
                            for comfortable transactions, use of clear signages
                            and modes of technology.)
                          </p>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <fieldset>
                    <div class="pl-4">
                      <div class="flex items-center gap-x-3">
                        <input
                          id="push-everything"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="push-everything"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >1 - Strongly Disagree</label
                        >
                      </div>
                      <div class="flex items-center gap-x-3">
                        <input
                          id="push-email"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="push-email"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >2 - Disagree</label
                        >
                      </div>
                      <div class="flex items-center gap-x-3">
                        <input
                          id="push-email"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="push-email"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >3 - Neither Agree nor Disagree</label
                        >
                      </div>
                      <div class="flex items-center gap-x-3">
                        <input
                          id="push-email"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="push-email"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >4 - Agree</label
                        >
                      </div>
                      <div class="flex items-center gap-x-3">
                        <input
                          id="strongly-agree"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="strongly-a"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >5 - Strongly Agree</label
                        >
                      </div>
                    </div>
                  </fieldset>
                </div>
                <!-- end of questions -->
                <!-- questions 5 -->
                <div class="pt-8 pl-4">
                  <ul role="list" class="divide-y divide-gray-100">
                    <li class="flex justify-between gap-x-3">
                      <div class="flex min-w-0 gap-x-4">
                        <div class="min-w-0 flex-auto">
                          <p
                            class="text-sm font-semibold leading-6 text-gray-900"
                          >
                            SQD4. I easily found information about my
                            transaction or the availed assistance / service from
                            the office or its website.
                          </p>
                          <p
                            class="mt-1 truncate text-xs leading-5 text-gray-500"
                          >
                            (Customers were informed in a language that can
                            easily be understood and feedback mechanisms were in
                            place.)
                          </p>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <fieldset>
                    <div class="pl-4">
                      <div class="flex items-center gap-x-3">
                        <input
                          id="push-everything"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="push-everything"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >1 - Strongly Disagree</label
                        >
                      </div>
                      <div class="flex items-center gap-x-3">
                        <input
                          id="push-email"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="push-email"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >2 - Disagree</label
                        >
                      </div>
                      <div class="flex items-center gap-x-3">
                        <input
                          id="push-email"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="push-email"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >3 - Neither Agree nor Disagree</label
                        >
                      </div>
                      <div class="flex items-center gap-x-3">
                        <input
                          id="push-email"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="push-email"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >4 - Agree</label
                        >
                      </div>
                      <div class="flex items-center gap-x-3">
                        <input
                          id="strongly-agree"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="strongly-a"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >5 - Strongly Agree</label
                        >
                      </div>
                    </div>
                  </fieldset>
                </div>
                <!-- end of questions -->

                <!-- SQD5 5 -->
                <div class="pt-8 pl-4">
                  <ul role="list" class="divide-y divide-gray-100">
                    <li class="flex justify-between gap-x-3">
                      <div class="flex min-w-0 gap-x-4">
                        <div class="min-w-0 flex-auto">
                          <p
                            class="text-sm font-semibold leading-6 text-gray-900"
                          >
                            SQD5. I paid a reasonable amount of fees for my
                            transaction
                          </p>
                          <p
                            class="mt-1 truncate text-xs leading-5 text-gray-500"
                          >
                            (Including the satisfaction on spending a reasonable
                            counterpart amount for the implementation of the
                            assistance / service.)
                          </p>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <fieldset>
                    <div class="pl-4">
                      <div class="flex items-center gap-x-3">
                        <input
                          id="push-everything"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="push-everything"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >1 - Strongly Disagree</label
                        >
                      </div>
                      <div class="flex items-center gap-x-3">
                        <input
                          id="push-email"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="push-email"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >2 - Disagree</label
                        >
                      </div>
                      <div class="flex items-center gap-x-3">
                        <input
                          id="push-email"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="push-email"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >3 - Neither Agree nor Disagree</label
                        >
                      </div>
                      <div class="flex items-center gap-x-3">
                        <input
                          id="push-email"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="push-email"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >4 - Agree</label
                        >
                      </div>
                      <div class="flex items-center gap-x-3">
                        <input
                          id="strongly-agree"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="strongly-a"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >5 - Strongly Agree</label
                        >
                      </div>
                    </div>
                  </fieldset>
                </div>
                <!-- end of questions -->

                <!-- SQD7 -->
                <div class="pt-8 pl-4">
                  <ul role="list" class="divide-y divide-gray-100">
                    <li class="flex justify-between gap-x-3">
                      <div class="flex min-w-0 gap-x-4">
                        <div class="min-w-0 flex-auto">
                          <p
                            class="text-sm font-semibold leading-6 text-gray-900"
                          >
                            SQD8. I got what I needed from the government
                            office, or (if denied) denial of request was
                            sufficiently explained to me.
                          </p>
                          <p
                            class="mt-1 truncate text-xs leading-5 text-gray-500"
                          >
                            (The extent of achieving outcomes or realizing the
                            intended benefits of the government assistance /
                            service.)
                          </p>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <fieldset>
                    <div class="pl-4">
                      <div class="flex items-center gap-x-3">
                        <input
                          id="push-everything"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="push-everything"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >1 - Strongly Disagree</label
                        >
                      </div>
                      <div class="flex items-center gap-x-3">
                        <input
                          id="push-email"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="push-email"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >2 - Disagree</label
                        >
                      </div>
                      <div class="flex items-center gap-x-3">
                        <input
                          id="push-email"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="push-email"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >3 - Neither Agree nor Disagree</label
                        >
                      </div>
                      <div class="flex items-center gap-x-3">
                        <input
                          id="push-email"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="push-email"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >4 - Agree</label
                        >
                      </div>
                      <div class="flex items-center gap-x-3">
                        <input
                          id="strongly-agree"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="strongly-a"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >5 - Strongly Agree</label
                        >
                      </div>
                    </div>
                  </fieldset>
                </div>
                <!-- end of questions -->

                <!-- SQD5 6 -->
                <div class="pt-8 pl-4">
                  <ul role="list" class="divide-y divide-gray-100">
                    <li class="flex justify-between gap-x-3">
                      <div class="flex min-w-0 gap-x-4">
                        <div class="min-w-0 flex-auto">
                          <p
                            class="text-sm font-semibold leading-6 text-gray-900"
                          >
                            SQD6. I feel the office was fair to everyone, or
                            “walang palakasan,” during my transaction.
                          </p>
                          <p
                            class="mt-1 truncate text-xs leading-5 text-gray-500"
                          >
                            (The assurance that there is honesty, justice,
                            fairness, and trust in the availed assistance /
                            service.)
                          </p>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <fieldset>
                    <div class="pl-4">
                      <div class="flex items-center gap-x-3">
                        <input
                          id="push-everything"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="push-everything"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >1 - Strongly Disagree</label
                        >
                      </div>
                      <div class="flex items-center gap-x-3">
                        <input
                          id="push-email"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="push-email"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >2 - Disagree</label
                        >
                      </div>
                      <div class="flex items-center gap-x-3">
                        <input
                          id="push-email"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="push-email"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >3 - Neither Agree nor Disagree</label
                        >
                      </div>
                      <div class="flex items-center gap-x-3">
                        <input
                          id="push-email"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="push-email"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >4 - Agree</label
                        >
                      </div>
                      <div class="flex items-center gap-x-3">
                        <input
                          id="strongly-agree"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="strongly-a"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >5 - Strongly Agree</label
                        >
                      </div>
                    </div>
                  </fieldset>
                </div>
                <!-- end of questions -->
                <!-- SQD7 -->
                <div class="pt-8 pl-4">
                  <ul role="list" class="divide-y divide-gray-100">
                    <li class="flex justify-between gap-x-3">
                      <div class="flex min-w-0 gap-x-4">
                        <div class="min-w-0 flex-auto">
                          <p
                            class="text-sm font-semibold leading-6 text-gray-900"
                          >
                            SQD7. I was treated courteously by the staff, and
                            (if asked for help) the staff was helpful.
                          </p>
                          <p
                            class="mt-1 truncate text-xs leading-5 text-gray-500"
                          >
                            (The staff performed his/her duties, product /
                            service knowledge, understand the customer’s needs,
                            and good working relationship.)
                          </p>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <fieldset>
                    <div class="pl-4">
                      <div class="flex items-center gap-x-3">
                        <input
                          id="push-everything"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="push-everything"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >1 - Strongly Disagree</label
                        >
                      </div>
                      <div class="flex items-center gap-x-3">
                        <input
                          id="push-email"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="push-email"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >2 - Disagree</label
                        >
                      </div>
                      <div class="flex items-center gap-x-3">
                        <input
                          id="push-email"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="push-email"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >3 - Neither Agree nor Disagree</label
                        >
                      </div>
                      <div class="flex items-center gap-x-3">
                        <input
                          id="push-email"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="push-email"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >4 - Agree</label
                        >
                      </div>
                      <div class="flex items-center gap-x-3">
                        <input
                          id="strongly-agree"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="strongly-a"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >5 - Strongly Agree</label
                        >
                      </div>
                    </div>
                  </fieldset>
                </div>
                <!-- end of questions -->
              </div>
            </div>
          </div>

          <!-- Net Promoter Score Survey -->
          <div
            class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5"
          >
            <div class="flex justify-between">
              <!-- diri isulod na div -->
              <div>
                <div class="text-2xl font-semibold mb-1">
                  2. Net Promoter Score Survey
                </div>
                <fieldset>
                  <legend class="text-sm font-semibold leading-6 text-gray-900">
                    In what sector do you belong to?
                  </legend>
                  <div class="pt-5 flex flex-wrap items-center gap-4">
                    <div class="relative flex items-center gap-x-1">
                      <label for="industry" class="font-medium text-gray-900"
                        >1-- Highly Unlikely</label
                      >
                    </div>
                    <div class="relative flex items-center gap-x-3">
                      <label
                        for="civil-society"
                        class="font-medium text-gray-900"
                        >2- - Unlikely
                      </label>
                    </div>
                    <div class="relative flex items-center gap-x-3">
                      <label for="academe" class="font-medium text-gray-900"
                        >3-- Neutral</label
                      >
                    </div>
                    <div class="relative flex items-center gap-x-3">
                      <label for="government" class="font-medium text-gray-900"
                        >4-Likely
                      </label>
                    </div>
                    <div class="relative flex items-center gap-x-3">
                      <label for="media" class="font-medium text-gray-900"
                        >5-Highly Likely</label
                      >
                    </div>
                  </div>
                </fieldset>

                <!-- 2.1 -->
                <div class="pt-8 pl-4">
                  <ul role="list" class="divide-y divide-gray-100">
                    <li class="flex justify-between gap-x-3">
                      <div class="flex min-w-0 gap-x-4">
                        <div class="min-w-0 flex-auto">
                          <p
                            class="text-sm font-semibold leading-6 text-gray-900"
                          >
                            2.1 How likely are you to recommend our
                            assistance/services to others?
                          </p>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <fieldset>
                    <div class="pl-4">
                      <div class="flex items-center gap-x-3">
                        <input
                          id="push-everything"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="push-everything"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >1 - Highly Unlikely</label
                        >
                      </div>
                      <div class="flex items-center gap-x-3">
                        <input
                          id="push-email"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="push-email"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >2 - Unlikely</label
                        >
                      </div>
                      <div class="flex items-center gap-x-3">
                        <input
                          id="push-email"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="push-email"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >3 - Neutral</label
                        >
                      </div>
                      <div class="flex items-center gap-x-3">
                        <input
                          id="push-email"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="push-email"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >4 - Likely</label
                        >
                      </div>
                      <div class="flex items-center gap-x-3">
                        <input
                          id="strongly-agree"
                          name="push-notifications"
                          type="radio"
                          class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                        />
                        <label
                          for="strongly-a"
                          class="block text-xs font-medium leading-6 text-gray-900"
                          >5 - Highly Likely
                        </label>
                      </div>
                    </div>
                  </fieldset>
                </div>
                <div class="pt-8 pl-4">
                  <ul role="list" class="divide-y divide-gray-100">
                    <li class="flex justify-between gap-x-3">
                      <div class="flex min-w-0 gap-x-4">
                        <div class="min-w-0 flex-auto">
                          <p
                            class="text-sm font-semibold leading-6 text-gray-900"
                          >
                            2.2 How likely are you to recommend to others
                            SIMILAR ASSISTANCE / SERVICE you have availed from
                            the following agencies/institutions? If did not
                            receive any similar assistance / service, please put
                            N/A.
                          </p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="flex">
                  <!-- Ateneo -->
                  <div class="pt-8 pl-4 flex-grow">
                    <ul role="list" class="divide-y divide-gray-100">
                      <li class="flex justify-between gap-x-3">
                        <div class="flex min-w-0 gap-x-4">
                          <div class="min-w-0 flex-auto">
                            <p
                              class="mt-1 truncate text-xs leading-5 text-gray-500"
                            >
                              Ateneo de Davao University
                            </p>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <fieldset>
                      <div class="pl-4">
                        <div class="flex items-center gap-x-3">
                          <input
                            id="push-everything"
                            name="push-notifications"
                            type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                          />
                          <label
                            for="push-everything"
                            class="block text-xs font-medium leading-6 text-gray-900"
                            >0 - N/A</label
                          >
                        </div>
                        <div class="flex items-center gap-x-3">
                          <input
                            id="push-everything"
                            name="push-notifications"
                            type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                          />
                          <label
                            for="push-everything"
                            class="block text-xs font-medium leading-6 text-gray-900"
                            >1 - Highly Unlikely</label
                          >
                        </div>
                        <div class="flex items-center gap-x-3">
                          <input
                            id="push-email"
                            name="push-notifications"
                            type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                          />
                          <label
                            for="push-email"
                            class="block text-xs font-medium leading-6 text-gray-900"
                            >2 - Unlikely</label
                          >
                        </div>
                        <div class="flex items-center gap-x-3">
                          <input
                            id="push-email"
                            name="push-notifications"
                            type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                          />
                          <label
                            for="push-email"
                            class="block text-xs font-medium leading-6 text-gray-900"
                            >3 - Neutral</label
                          >
                        </div>
                        <div class="flex items-center gap-x-3">
                          <input
                            id="push-email"
                            name="push-notifications"
                            type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                          />
                          <label
                            for="push-email"
                            class="block text-xs font-medium leading-6 text-gray-900"
                            >4 - Likely</label
                          >
                        </div>
                        <div class="flex items-center gap-x-3">
                          <input
                            id="strongly-agree"
                            name="push-notifications"
                            type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                          />
                          <label
                            for="strongly-a"
                            class="block text-xs font-medium leading-6 text-gray-900"
                            >5 - Highly Likely
                          </label>
                        </div>
                      </div>
                    </fieldset>
                  </div>

                  <!-- Department of Agriculture -->
                  <div class="pt-8 pl-4 flex-grow">
                    <ul role="list" class="divide-y divide-gray-100">
                      <li class="flex justify-between gap-x-3">
                        <div class="flex min-w-0 gap-x-4">
                          <div class="min-w-0 flex-auto">
                            <p
                              class="mt-1 truncate text-xs leading-5 text-gray-500"
                            >
                              Department of Agriculture XI
                            </p>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <fieldset>
                      <div class="pl-4">
                        <div class="flex items-center gap-x-3">
                          <input
                            id="push-everything"
                            name="push-notifications"
                            type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                          />
                          <label
                            for="push-everything"
                            class="block text-xs font-medium leading-6 text-gray-900"
                            >0 - N/A</label
                          >
                        </div>
                        <div class="flex items-center gap-x-3">
                          <input
                            id="push-everything"
                            name="push-notifications"
                            type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                          />
                          <label
                            for="push-everything"
                            class="block text-xs font-medium leading-6 text-gray-900"
                            >1 - Highly Unlikely</label
                          >
                        </div>
                        <div class="flex items-center gap-x-3">
                          <input
                            id="push-email"
                            name="push-notifications"
                            type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                          />
                          <label
                            for="push-email"
                            class="block text-xs font-medium leading-6 text-gray-900"
                            >2 - Unlikely</label
                          >
                        </div>
                        <div class="flex items-center gap-x-3">
                          <input
                            id="push-email"
                            name="push-notifications"
                            type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                          />
                          <label
                            for="push-email"
                            class="block text-xs font-medium leading-6 text-gray-900"
                            >3 - Neutral</label
                          >
                        </div>
                        <div class="flex items-center gap-x-3">
                          <input
                            id="push-email"
                            name="push-notifications"
                            type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                          />
                          <label
                            for="push-email"
                            class="block text-xs font-medium leading-6 text-gray-900"
                            >4 - Likely</label
                          >
                        </div>
                        <div class="flex items-center gap-x-3">
                          <input
                            id="strongly-agree"
                            name="push-notifications"
                            type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                          />
                          <label
                            for="strongly-a"
                            class="block text-xs font-medium leading-6 text-gray-900"
                            >5 - Highly Likely
                          </label>
                        </div>
                      </div>
                    </fieldset>
                  </div>

                  <!-- Department of Trade and Industry -->
                  <div class="pt-8 pl-4 flex-grow">
                    <ul role="list" class="divide-y divide-gray-100">
                      <li class="flex justify-between gap-x-3">
                        <div class="flex min-w-0 gap-x-4">
                          <div class="min-w-0 flex-auto">
                            <p
                              class="mt-1 truncate text-xs leading-5 text-gray-500"
                            >
                              Department of Trade and Industry XI
                            </p>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <fieldset>
                      <div class="pl-4">
                        <div class="flex items-center gap-x-3">
                          <input
                            id="push-everything"
                            name="push-notifications"
                            type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                          />
                          <label
                            for="push-everything"
                            class="block text-xs font-medium leading-6 text-gray-900"
                            >0 - N/A</label
                          >
                        </div>
                        <div class="flex items-center gap-x-3">
                          <input
                            id="push-everything"
                            name="push-notifications"
                            type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                          />
                          <label
                            for="push-everything"
                            class="block text-xs font-medium leading-6 text-gray-900"
                            >1 - Highly Unlikely</label
                          >
                        </div>
                        <div class="flex items-center gap-x-3">
                          <input
                            id="push-email"
                            name="push-notifications"
                            type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                          />
                          <label
                            for="push-email"
                            class="block text-xs font-medium leading-6 text-gray-900"
                            >2 - Unlikely</label
                          >
                        </div>
                        <div class="flex items-center gap-x-3">
                          <input
                            id="push-email"
                            name="push-notifications"
                            type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                          />
                          <label
                            for="push-email"
                            class="block text-xs font-medium leading-6 text-gray-900"
                            >3 - Neutral</label
                          >
                        </div>
                        <div class="flex items-center gap-x-3">
                          <input
                            id="push-email"
                            name="push-notifications"
                            type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                          />
                          <label
                            for="push-email"
                            class="block text-xs font-medium leading-6 text-gray-900"
                            >4 - Likely</label
                          >
                        </div>
                        <div class="flex items-center gap-x-3">
                          <input
                            id="strongly-agree"
                            name="push-notifications"
                            type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                          />
                          <label
                            for="strongly-a"
                            class="block text-xs font-medium leading-6 text-gray-900"
                            >5 - Highly Likely
                          </label>
                        </div>
                      </div>
                    </fieldset>
                  </div>
                </div>
                <div class="flex">
                  <!-- Ateneo -->
                  <div class="pt-8 pl-4 flex-grow">
                    <ul role="list" class="divide-y divide-gray-100">
                      <li class="flex justify-between gap-x-3">
                        <div class="flex min-w-0 gap-x-4">
                          <div class="min-w-0 flex-auto">
                            <p
                              class="mt-1 truncate text-xs leading-5 text-gray-500"
                            >
                              Food and Drug Administration
                            </p>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <fieldset>
                      <div class="pl-4">
                        <div class="flex items-center gap-x-3">
                          <input
                            id="push-everything"
                            name="push-notifications"
                            type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                          />
                          <label
                            for="push-everything"
                            class="block text-xs font-medium leading-6 text-gray-900"
                            >0 - N/A</label
                          >
                        </div>
                        <div class="flex items-center gap-x-3">
                          <input
                            id="push-everything"
                            name="push-notifications"
                            type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                          />
                          <label
                            for="push-everything"
                            class="block text-xs font-medium leading-6 text-gray-900"
                            >1 - Highly Unlikely</label
                          >
                        </div>
                        <div class="flex items-center gap-x-3">
                          <input
                            id="push-email"
                            name="push-notifications"
                            type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                          />
                          <label
                            for="push-email"
                            class="block text-xs font-medium leading-6 text-gray-900"
                            >2 - Unlikely</label
                          >
                        </div>
                        <div class="flex items-center gap-x-3">
                          <input
                            id="push-email"
                            name="push-notifications"
                            type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                          />
                          <label
                            for="push-email"
                            class="block text-xs font-medium leading-6 text-gray-900"
                            >3 - Neutral</label
                          >
                        </div>
                        <div class="flex items-center gap-x-3">
                          <input
                            id="push-email"
                            name="push-notifications"
                            type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                          />
                          <label
                            for="push-email"
                            class="block text-xs font-medium leading-6 text-gray-900"
                            >4 - Likely</label
                          >
                        </div>
                        <div class="flex items-center gap-x-3">
                          <input
                            id="strongly-agree"
                            name="push-notifications"
                            type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                          />
                          <label
                            for="strongly-a"
                            class="block text-xs font-medium leading-6 text-gray-900"
                            >5 - Highly Likely
                          </label>
                        </div>
                      </div>
                    </fieldset>
                  </div>

                  <!-- Small Business Corportation -->
                  <div class="pt-8 pl-4 flex-grow">
                    <ul role="list" class="divide-y divide-gray-100">
                      <li class="flex justify-between gap-x-3">
                        <div class="flex min-w-0 gap-x-4">
                          <div class="min-w-0 flex-auto">
                            <p
                              class="mt-1 truncate text-xs leading-5 text-gray-500"
                            >
                              Small Business Corporation
                            </p>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <fieldset>
                      <div class="pl-4">
                        <div class="flex items-center gap-x-3">
                          <input
                            id="push-everything"
                            name="push-notifications"
                            type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                          />
                          <label
                            for="push-everything"
                            class="block text-xs font-medium leading-6 text-gray-900"
                            >0 - N/A</label
                          >
                        </div>
                        <div class="flex items-center gap-x-3">
                          <input
                            id="push-everything"
                            name="push-notifications"
                            type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                          />
                          <label
                            for="push-everything"
                            class="block text-xs font-medium leading-6 text-gray-900"
                            >1 - Highly Unlikely</label
                          >
                        </div>
                        <div class="flex items-center gap-x-3">
                          <input
                            id="push-email"
                            name="push-notifications"
                            type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                          />
                          <label
                            for="push-email"
                            class="block text-xs font-medium leading-6 text-gray-900"
                            >2 - Unlikely</label
                          >
                        </div>
                        <div class="flex items-center gap-x-3">
                          <input
                            id="push-email"
                            name="push-notifications"
                            type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                          />
                          <label
                            for="push-email"
                            class="block text-xs font-medium leading-6 text-gray-900"
                            >3 - Neutral</label
                          >
                        </div>
                        <div class="flex items-center gap-x-3">
                          <input
                            id="push-email"
                            name="push-notifications"
                            type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                          />
                          <label
                            for="push-email"
                            class="block text-xs font-medium leading-6 text-gray-900"
                            >4 - Likely</label
                          >
                        </div>
                        <div class="flex items-center gap-x-3">
                          <input
                            id="strongly-agree"
                            name="push-notifications"
                            type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                          />
                          <label
                            for="strongly-a"
                            class="block text-xs font-medium leading-6 text-gray-900"
                            >5 - Highly Likely
                          </label>
                        </div>
                      </div>
                    </fieldset>
                  </div>

                  <!-- Small Business Corporation -->
                  <div class="pt-8 pl-4 flex-grow">
                    <ul role="list" class="divide-y divide-gray-100">
                      <li class="flex justify-between gap-x-3">
                        <div class="flex min-w-0 gap-x-4">
                          <div class="min-w-0 flex-auto">
                            <p
                              class="mt-1 truncate text-xs leading-5 text-gray-500"
                            >
                              Tesda XI
                            </p>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <fieldset>
                      <div class="pl-4">
                        <div class="flex items-center gap-x-3">
                          <input
                            id="push-everything"
                            name="push-notifications"
                            type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                          />
                          <label
                            for="push-everything"
                            class="block text-xs font-medium leading-6 text-gray-900"
                            >0 - N/A</label
                          >
                        </div>
                        <div class="flex items-center gap-x-3">
                          <input
                            id="push-everything"
                            name="push-notifications"
                            type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                          />
                          <label
                            for="push-everything"
                            class="block text-xs font-medium leading-6 text-gray-900"
                            >1 - Highly Unlikely</label
                          >
                        </div>
                        <div class="flex items-center gap-x-3">
                          <input
                            id="push-email"
                            name="push-notifications"
                            type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                          />
                          <label
                            for="push-email"
                            class="block text-xs font-medium leading-6 text-gray-900"
                            >2 - Unlikely</label
                          >
                        </div>
                        <div class="flex items-center gap-x-3">
                          <input
                            id="push-email"
                            name="push-notifications"
                            type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                          />
                          <label
                            for="push-email"
                            class="block text-xs font-medium leading-6 text-gray-900"
                            >3 - Neutral</label
                          >
                        </div>
                        <div class="flex items-center gap-x-3">
                          <input
                            id="push-email"
                            name="push-notifications"
                            type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                          />
                          <label
                            for="push-email"
                            class="block text-xs font-medium leading-6 text-gray-900"
                            >4 - Likely</label
                          >
                        </div>
                        <div class="flex items-center gap-x-3">
                          <input
                            id="strongly-agree"
                            name="push-notifications"
                            type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                          />
                          <label
                            for="strongly-a"
                            class="block text-xs font-medium leading-6 text-gray-900"
                            >5 - Highly Likely
                          </label>
                        </div>
                      </div>
                    </fieldset>
                  </div>
                </div>
                <div class="flex">
                  <!-- TESDA XI -->
                  <div class="pt-8 pl-4 flex-grow">
                    <ul role="list" class="divide-y divide-gray-100">
                      <li class="flex justify-between gap-x-3">
                        <div class="flex min-w-0 gap-x-4">
                          <div class="min-w-0 flex-auto">
                            <p
                              class="mt-1 truncate text-xs leading-5 text-gray-500"
                            >
                              University of the Immaculate Conception
                            </p>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <fieldset>
                      <div class="pl-4">
                        <div class="flex items-center gap-x-3">
                          <input
                            id="push-everything"
                            name="push-notifications"
                            type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                          />
                          <label
                            for="push-everything"
                            class="block text-xs font-medium leading-6 text-gray-900"
                            >0 - N/A</label
                          >
                        </div>
                        <div class="flex items-center gap-x-3">
                          <input
                            id="push-everything"
                            name="push-notifications"
                            type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                          />
                          <label
                            for="push-everything"
                            class="block text-xs font-medium leading-6 text-gray-900"
                            >1 - Highly Unlikely</label
                          >
                        </div>
                        <div class="flex items-center gap-x-3">
                          <input
                            id="push-email"
                            name="push-notifications"
                            type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                          />
                          <label
                            for="push-email"
                            class="block text-xs font-medium leading-6 text-gray-900"
                            >2 - Unlikely</label
                          >
                        </div>
                        <div class="flex items-center gap-x-3">
                          <input
                            id="push-email"
                            name="push-notifications"
                            type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                          />
                          <label
                            for="push-email"
                            class="block text-xs font-medium leading-6 text-gray-900"
                            >3 - Neutral</label
                          >
                        </div>
                        <div class="flex items-center gap-x-3">
                          <input
                            id="push-email"
                            name="push-notifications"
                            type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                          />
                          <label
                            for="push-email"
                            class="block text-xs font-medium leading-6 text-gray-900"
                            >4 - Likely</label
                          >
                        </div>
                        <div class="flex items-center gap-x-3">
                          <input
                            id="strongly-agree"
                            name="push-notifications"
                            type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                          />
                          <label
                            for="strongly-a"
                            class="block text-xs font-medium leading-6 text-gray-900"
                            >5 - Highly Likely
                          </label>
                        </div>
                      </div>
                    </fieldset>
                  </div>
                </div>
              </div>
              <!-- end of div -->
            </div>
          </div>
          <div
            class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5"
          >
            <div class="flex justify-between">
              <!-- diri isulod na div -->
              <div>
                <div class="text-2xl font-semibold mb-1">
                  3. What is your OVERALL MOOD/FEELING best describes your
                  experience with us?
                </div>
                <fieldset>
                  <legend class="text-sm font-semibold leading-6 text-gray-900">
                    Please check the appropriate box
                  </legend>
                  <div class="pt-5 flex flex-wrap items-center gap-4">
                    <div class="flex items-center gap-x-3">
                      <input
                        id="push-everything"
                        name="push-notifications"
                        type="radio"
                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                      />
                      <label
                        for="push-everything"
                        class="block text-sm font-medium leading-6 text-gray-900"
                        >Disappointed
                      </label>
                    </div>
                    <div class="flex items-center gap-x-3">
                      <input
                        id="push-email"
                        name="push-notifications"
                        type="radio"
                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                      />
                      <label
                        for="push-email"
                        class="block text-sm font-medium leading-6 text-gray-900"
                        >Unsatisfied
                      </label>
                    </div>
                    <div class="flex items-center gap-x-3">
                      <input
                        id="push-email"
                        name="push-notifications"
                        type="radio"
                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                      />
                      <label
                        for="push-email"
                        class="block text-sm font-medium leading-6 text-gray-900"
                        >Neutral</label
                      >
                    </div>
                    <div class="flex items-center gap-x-3">
                      <input
                        id="push-email"
                        name="push-notifications"
                        type="radio"
                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                      />
                      <label
                        for="push-email"
                        class="block text-sm font-medium leading-6 text-gray-900"
                        >Satisfied</label
                      >
                    </div>
                    <div class="flex items-center gap-x-3">
                      <input
                        id="push-email"
                        name="push-notifications"
                        type="radio"
                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                      />
                      <label
                        for="push-email"
                        class="block text-sm font-medium leading-6 text-gray-900"
                        >Delighted
                      </label>
                    </div>
                  </div>
                </fieldset>
              </div>
              <!-- end of div -->
            </div>
          </div>
          <div
            class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5"
          >
            <div class="flex justify-between">
              <!-- diri isulod na div -->
              <div>
                <div class="text-2xl font-semibold mb-1">
                  4. We want to hear from you!
                </div>
                <fieldset>
                  <legend class="text-sm font-semibold leading-6 text-gray-900">
                    What are your suggestions to improve our assistance/service?
                    Or are there noteworthy observations that you would like to
                    share?
                  </legend>
                  <div class="mt-2">
                    <textarea
                      id="about"
                      name="about"
                      rows="3"
                      class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    ></textarea>
                  </div>
                </fieldset>
              </div>
              <!-- end of div -->
            </div>
          </div>
          <div class="mt-6 flex items-center justify-end gap-x-6">
            <button
              type="button"
              class="text-sm font-semibold leading-6 text-gray-900"
            >
              Cancel
            </button>
            <button
              type="submit"
              class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
            >
              Submit
            </button>
          </div>
        </div>
      </div>
    </main>
    <!-- end: Main -->

    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="/src/dashboard.js"></script>
  </body>
</html>
