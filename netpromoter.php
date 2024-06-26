<div class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5 mt-6">
  <div class="flex justify-between">
    <!-- diri isulod na div -->
    <div>
      <div class="text-3xl text-default font-bold mb-10">
        2. Net Promoter Score Survey
      </div>
      <fieldset>
        <legend class="text-sm font-semibold leading-6 text-gray-900">
          In what sector do you belong to?
        </legend>
        <div class="pt-5 flex flex-wrap items-center gap-4">
          <div class="relative flex items-center gap-x-1">

            <label for="media" class="font-medium text-gray-900">5-Highly Likely</label>
          </div>
          <div class="relative flex items-center gap-x-3">

            <label for="government" class="font-medium text-gray-900">4-Likely
            </label>
          </div>
          <div class="relative flex items-center gap-x-3">
            <label for="academe" class="font-medium text-gray-900">3-- Neutral</label>
          </div>
          <div class="relative flex items-center gap-x-3">
            <label for="civil-society" class="font-medium text-gray-900">2- - Unlikely
            </label>
          </div>
          <div class="relative flex items-center gap-x-3">
            <label for="industry" class="font-medium text-gray-900">1-- Highly Unlikely</label>
          </div>
        </div>
      </fieldset>

      <!-- 2.1 -->
      <div class="pt-8 pl-4">
        <ul role="list" class="divide-y divide-gray-100">
          <li class="flex justify-between gap-x-3">
            <div class="flex min-w-0 gap-x-4">
              <div class="min-w-0 flex-auto">
                <p class="text-sm font-semibold leading-6 text-gray-900">
                  2.1 How likely are you to recommend our
                  assistance/services to others?
                </p>
              </div>
            </div>
          </li>
        </ul>

        <div class="pl-4">
          <div class="flex items-center gap-x-3">
            <input name="net_promoter" value="5" type="radio"
              class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" checked />
            <label for="strongly-a" class="block text-xs font-medium leading-6 text-gray-900">5 - Highly
              Likely
            </label>
          </div>
          <div class="flex items-center gap-x-3">
            <input name="net_promoter" value="4" type="radio"
              class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
            <label for="push-email" class="block text-xs font-medium leading-6 text-gray-900">4 -
              Likely</label>
          </div>
          <div class="flex items-center gap-x-3">
            <input name="net_promoter" value="3" type="radio"
              class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
            <label for="push-email" class="block text-xs font-medium leading-6 text-gray-900">3 -
              Neutral</label>
          </div>
          <div class="flex items-center gap-x-3">
            <input name="net_promoter" value="2" type="radio"
              class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />

            <label for="push-email" class="block text-xs font-medium leading-6 text-gray-900">2 -
              Unlikely</label>
          </div>
          <div class="flex items-center gap-x-3">
            <input name="net_promoter" value="1" type="radio"
              class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />

            <label for="push-everything" class="block text-xs font-medium leading-6 text-gray-900">1 -
              Highly
              Unlikely</label>
          </div>
        </div>

      </div>
      <!-- end of 2.1  -->

      <!-- start of 2.2  -->
      <div class="pt-8 pl-4">
        <ul role="list" class="divide-y divide-gray-100">
          <li class="flex justify-between gap-x-3">
            <div class="flex min-w-0 gap-x-4">
              <div class="min-w-0 flex-auto">
                <p class="text-sm font-semibold leading-6 text-gray-900">
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
                  <p class="mt-1 truncate text-xs leading-5 text-gray-500">
                    Ateneo de Davao University
                  </p>
                </div>
              </div>
            </li>
          </ul>

          <div class="pl-4">
            <div class="flex items-center gap-x-3">
              <input name="ateneo" value="0" type="radio"
                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" checked />
              <label for="push-everything" class="block text-xs font-medium leading-6 text-gray-900">0 -
                N/A</label>
            </div>
            <div class="flex items-center gap-x-3">
              <input name="ateneo" value="5" type="radio"
                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
              <label for="strongly-a" class="block text-xs font-medium leading-6 text-gray-900">5 - Highly
                Likely
              </label>
            </div>
            <div class="flex items-center gap-x-3">
              <input name="ateneo" value="4" type="radio"
                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
              <label for="push-email" class="block text-xs font-medium leading-6 text-gray-900">4 -
                Likely</label>
            </div>
            <div class="flex items-center gap-x-3">
              <input name="ateneo" value="3" type="radio"
                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
              <label for="push-email" class="block text-xs font-medium leading-6 text-gray-900">3 -
                Neutral</label>
            </div>
            <div class="flex items-center gap-x-3">
              <input name="ateneo" value="2" type="radio"
                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
              <label for="push-email" class="block text-xs font-medium leading-6 text-gray-900">2 -
                Unlikely</label>
            </div>
            <div class="flex items-center gap-x-3">
              <input name="ateneo" value="1" type="radio"
                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
              <label for="push-everything" class="block text-xs font-medium leading-6 text-gray-900">1 -
                Highly Unlikely</label>
            </div>
          </div>

        </div>

        <!-- Department of Agriculture -->
        <div class="pt-8 pl-4 flex-grow">
          <ul role="list" class="divide-y divide-gray-100">
            <li class="flex justify-between gap-x-3">
              <div class="flex min-w-0 gap-x-4">
                <div class="min-w-0 flex-auto">
                  <p class="mt-1 truncate text-xs leading-5 text-gray-500">
                    Department of Agriculture XI
                  </p>
                </div>
              </div>
            </li>
          </ul>
          <div class="pl-4">
            <div class="flex items-center gap-x-3">
              <input name="doa" value="0" type="radio" checked
                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600 " />
              <label for="push-everything" class="block text-xs font-medium leading-6 text-gray-900">0 -
                N/A</label>
            </div>
            <div class="flex items-center gap-x-3">
              <input name="doa" value="5" type="radio"
                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
              <label for="strongly-a" class="block text-xs font-medium leading-6 text-gray-900">5 - Highly
                Likely
              </label>
            </div>
            <div class="flex items-center gap-x-3">
              <input name="doa" value="4" type="radio"
                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
              <label for="push-email" class="block text-xs font-medium leading-6 text-gray-900">4 -
                Likely</label>
            </div>
            <div class="flex items-center gap-x-3">
              <input name="doa" value="3" type="radio"
                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
              <label for="push-email" class="block text-xs font-medium leading-6 text-gray-900">3 -
                Neutral</label>
            </div>
            <div class="flex items-center gap-x-3">
              <input name="doa" value="2" type="radio"
                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
              <label for="push-email" class="block text-xs font-medium leading-6 text-gray-900">2 -
                Unlikely</label>
            </div>
            <div class="flex items-center gap-x-3">
              <input name="doa" value="1" type="radio"
                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
              <label for="push-everything" class="block text-xs font-medium leading-6 text-gray-900">1 -
                Highly Unlikely</label>
            </div>
          </div>
        </div>

        <!-- Department of Trade and Industry -->
        <div class="pt-8 pl-4 flex-grow">
          <ul role="list" class="divide-y divide-gray-100">
            <li class="flex justify-between gap-x-3">
              <div class="flex min-w-0 gap-x-4">
                <div class="min-w-0 flex-auto">
                  <p class="mt-1 truncate text-xs leading-5 text-gray-500">
                    Department of Trade and Industry XI
                  </p>
                </div>
              </div>
            </li>
          </ul>
          <div class="pl-4">
            <div class="flex items-center gap-x-3">
              <input name="dti" value="0" type="radio" checked
                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
              <label for="push-everything" class="block text-xs font-medium leading-6 text-gray-900">0 -
                N/A</label>
            </div>
            <div class="flex items-center gap-x-3">
              <input name="dti" value="5" type="radio"
                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
              <label for="strongly-a" class="block text-xs font-medium leading-6 text-gray-900">5 - Highly
                Likely
              </label>
            </div>
            <div class="flex items-center gap-x-3">
              <input name="dti" value="4" type="radio"
                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
              <label for="push-email" class="block text-xs font-medium leading-6 text-gray-900">4 -
                Likely</label>
            </div>
            <div class="flex items-center gap-x-3">
              <input name="dti" value="3" type="radio"
                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
              <label for="push-email" class="block text-xs font-medium leading-6 text-gray-900">3 -
                Neutral</label>
            </div>
            <div class="flex items-center gap-x-3">
              <input name="dti" value="2" type="radio"
                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
              <label for="push-email" class="block text-xs font-medium leading-6 text-gray-900">2 -
                Unlikely</label>
            </div>
            <div class="flex items-center gap-x-3">
              <input name="dti" value="1" type="radio"
                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
              <label for="push-everything" class="block text-xs font-medium leading-6 text-gray-900">1 -
                Highly Unlikely</label>
            </div>
          </div>
        </div>
      </div>
      <div class="flex">

        <!-- FDA -->
        <div class="pt-8 pl-4 flex-grow">
          <ul role="list" class="divide-y divide-gray-100">
            <li class="flex justify-between gap-x-3">
              <div class="flex min-w-0 gap-x-4">
                <div class="min-w-0 flex-auto">
                  <p class="mt-1 truncate text-xs leading-5 text-gray-500">
                    Food and Drug Administration
                  </p>
                </div>
              </div>
            </li>
          </ul>
          <div class="pl-4">
            <div class="flex items-center gap-x-3">
              <input name="fda" value="0" type="radio" checked
                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
              <label for="push-everything" class="block text-xs font-medium leading-6 text-gray-900">0 -
                N/A</label>
            </div>
            <div class="flex items-center gap-x-3">
              <input name="fda" value="5" type="radio"
                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
              <label for="strongly-a" class="block text-xs font-medium leading-6 text-gray-900">5 - Highly
                Likely
              </label>
            </div>
            <div class="flex items-center gap-x-3">
              <input name="fda" value="4" type="radio"
                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
              <label for="push-email" class="block text-xs font-medium leading-6 text-gray-900">4 -
                Likely</label>
            </div>
            <div class="flex items-center gap-x-3">
              <input name="fda" value="3" type="radio"
                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
              <label for="push-email" class="block text-xs font-medium leading-6 text-gray-900">3 -
                Neutral</label>
            </div>
            <div class="flex items-center gap-x-3">
              <input name="fda" value="2" type="radio"
                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
              <label for="push-email" class="block text-xs font-medium leading-6 text-gray-900">2 -
                Unlikely</label>
            </div>
            <div class="flex items-center gap-x-3">
              <input name="fda" value="1" type="radio"
                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
              <label for="push-everything" class="block text-xs font-medium leading-6 text-gray-900">1 -
                Highly Unlikely</label>
            </div>
          </div>
        </div>

        <!-- Small Business Corportation -->
        <div class="pt-8 pl-4 flex-grow">
          <ul role="list" class="divide-y divide-gray-100">
            <li class="flex justify-between gap-x-3">
              <div class="flex min-w-0 gap-x-4">
                <div class="min-w-0 flex-auto">
                  <p class="mt-1 truncate text-xs leading-5 text-gray-500">
                    Small Business Corporation
                  </p>
                </div>
              </div>
            </li>
          </ul>
          <div class="pl-4">
            <div class="flex items-center gap-x-3">
              <input name="sbc" value="0" type="radio" checked
                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
              <label for="push-everything" class="block text-xs font-medium leading-6 text-gray-900">0 -
                N/A</label>
            </div>
            <div class="flex items-center gap-x-3">
              <input name="sbc" value="5" type="radio"
                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
              <label for="strongly-a" class="block text-xs font-medium leading-6 text-gray-900">5 - Highly
                Likely
              </label>
            </div>
            <div class="flex items-center gap-x-3">
              <input name="sbc" value="4" type="radio"
                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
              <label for="push-email" class="block text-xs font-medium leading-6 text-gray-900">4 -
                Likely</label>
            </div>
            <div class="flex items-center gap-x-3">
              <input name="sbc" value="3" type="radio"
                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
              <label for="push-email" class="block text-xs font-medium leading-6 text-gray-900">3 -
                Neutral</label>
            </div>
            <div class="flex items-center gap-x-3">
              <input name="sbc" value="2" type="radio"
                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
              <label for="push-email" class="block text-xs font-medium leading-6 text-gray-900">2 -
                Unlikely</label>
            </div>
            <div class="flex items-center gap-x-3">
              <input name="sbc" value="1" type="radio"
                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
              <label for="push-everything" class="block text-xs font-medium leading-6 text-gray-900">1 -
                Highly Unlikely</label>
            </div>
          </div>
        </div>

        <!-- tesda -->
        <div class="pt-8 pl-4 flex-grow">
          <ul role="list" class="divide-y divide-gray-100">
            <li class="flex justify-between gap-x-3">
              <div class="flex min-w-0 gap-x-4">
                <div class="min-w-0 flex-auto">
                  <p class="mt-1 truncate text-xs leading-5 text-gray-500">
                    Tesda XI
                  </p>
                </div>
              </div>
            </li>
          </ul>
          <div class="pl-4">
            <div class="flex items-center gap-x-3">
              <input name="tesda" value="0" type="radio" checked
                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
              <label for="push-everything" class="block text-xs font-medium leading-6 text-gray-900">0 -
                N/A</label>
            </div>
            <div class="flex items-center gap-x-3">
              <input name="tesda" value="5" type="radio"
                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
              <label for="strongly-a" class="block text-xs font-medium leading-6 text-gray-900">5 - Highly
                Likely
              </label>
            </div>
            <div class="flex items-center gap-x-3">
              <input name="tesda" value="4" type="radio"
                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
              <label for="push-email" class="block text-xs font-medium leading-6 text-gray-900">4 -
                Likely</label>
            </div>
            <div class="flex items-center gap-x-3">
              <input name="tesda" value="3" type="radio"
                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
              <label for="push-email" class="block text-xs font-medium leading-6 text-gray-900">3 -
                Neutral</label>
            </div>
            <div class="flex items-center gap-x-3">
              <input name="tesda" value="2" type="radio"
                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
              <label for="push-email" class="block text-xs font-medium leading-6 text-gray-900">2 -
                Unlikely</label>
            </div>
            <div class="flex items-center gap-x-3">
              <input name="tesda" value="1" type="radio"
                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
              <label for="push-everything" class="block text-xs font-medium leading-6 text-gray-900">1 -
                Highly Unlikely</label>
            </div>
          </div>
        </div>
      </div>
      <div class="flex">
        <!-- UIC -->
        <div class="pt-8 pl-4 flex-grow">
          <ul role="list" class="divide-y divide-gray-100">
            <li class="flex justify-between gap-x-3">
              <div class="flex min-w-0 gap-x-4">
                <div class="min-w-0 flex-auto">
                  <p class="mt-1 truncate text-xs leading-5 text-gray-500">
                    University of the Immaculate Conception
                  </p>
                </div>
              </div>
            </li>
          </ul>
          <div class="pl-4">
            <div class="flex items-center gap-x-3">
              <input name="uic" value="0" type="radio" checked
                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
              <label for="push-everything" class="block text-xs font-medium leading-6 text-gray-900">0 -
                N/A</label>
            </div>
            <div class="flex items-center gap-x-3">
              <input name="uic" value="5" type="radio"
                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
              <label for="strongly-a" class="block text-xs font-medium leading-6 text-gray-900">5 - Highly
                Likely
              </label>
            </div>
            <div class="flex items-center gap-x-3">
              <input name="uic" value="4" type="radio"
                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
              <label for="push-email" class="block text-xs font-medium leading-6 text-gray-900">4 -
                Likely</label>
            </div>
            <div class="flex items-center gap-x-3">
              <input name="uic" value="3" type="radio"
                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
              <label for="push-email" class="block text-xs font-medium leading-6 text-gray-900">3 -
                Neutral</label>
            </div>
            <div class="flex items-center gap-x-3">
              <input name="uic" value="2" type="radio"
                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
              <label for="push-email" class="block text-xs font-medium leading-6 text-gray-900">2 -
                Unlikely</label>
            </div>
            <div class="flex items-center gap-x-3">
              <input name="uic" value="1" type="radio"
                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
              <label for="push-everything" class="block text-xs font-medium leading-6 text-gray-900">1 -
                Highly Unlikely</label>
            </div>
          </div>
        </div>

        <div class="pt-8  flex-grow">
          <div class="sm:col-span-2 sm:col-start-1">
            <p class="mt-1 truncate text-xs leading-5 text-gray-500">
              Others
            </p>
            <div class="mt-2">
              <input type="text" name="other_agency"
                class="block w-64 rounded-md border-0 py-1 pl-4 text-gray-900 shadow-sm ring-1 ring-gray input-spinner outline-none focus:ring-2 focus:ring-inset focus:ring-custom sm:text-sm sm:leading-6" />
            </div>
          </div>
          <div class="pt-2 pl-4">
            <div class="flex items-center gap-x-3">
              <input name="other_agency_score" value="0" type="radio" checked
                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
              <label for="push-everything" class="block text-xs font-medium leading-6 text-gray-900">0 -
                N/A</label>
            </div>
            <div class="flex items-center gap-x-3">
              <input name="other_agency_score" value="5" type="radio"
                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
              <label for="strongly-a" class="block text-xs font-medium leading-6 text-gray-900">5 - Highly
                Likely
              </label>
            </div>
            <div class="flex items-center gap-x-3">
              <input name="other_agency_score" value="4" type="radio"
                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
              <label for="push-email" class="block text-xs font-medium leading-6 text-gray-900">4 -
                Likely</label>
            </div>
            <div class="flex items-center gap-x-3">
              <input name="other_agency_score" value="3" type="radio"
                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
              <label for="push-email" class="block text-xs font-medium leading-6 text-gray-900">3 -
                Neutral</label>
            </div>
            <div class="flex items-center gap-x-3">
              <input name="other_agency_score" value="2" type="radio"
                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
              <label for="push-email" class="block text-xs font-medium leading-6 text-gray-900">2 -
                Unlikely</label>
            </div>
            <div class="flex items-center gap-x-3">
              <input name="other_agency_score" value="1" type="radio"
                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
              <label for="push-everything" class="block text-xs font-medium leading-6 text-gray-900">1 -
                Highly Unlikely</label>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end of div -->
  </div>
</div>