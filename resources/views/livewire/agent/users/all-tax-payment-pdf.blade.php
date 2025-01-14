<div>








        <!-- Table Section -->
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <!-- Card -->
            <div class="flex flex-col">
              <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                  <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-neutral-900 dark:border-neutral-700">

                    <!-- Table -->
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                      <thead class="bg-gray-50 dark:bg-neutral-800">
                        <tr>
                          {{-- <th scope="col" class="ps-6 py-3 text-start">
                            <label for="hs-at-with-checkboxes-main" class="flex">
                              <input type="checkbox" class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-at-with-checkboxes-main">
                              <span class="sr-only">Checkbox</span>
                            </label>
                          </th> --}}


                          <th scope="col" class="pe-6 py-3 text-start">
                            <div class="flex items-center gap-x-2">
                              <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                S/N
                              </span>
                            </div>
                          </th>

                          <th scope="col" class="pe-6 py-3 text-start">
                            <div class="flex items-center gap-x-2">
                              <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                Order
                              </span>
                            </div>
                          </th>

                          <th scope="col" class="px-6 py-3 text-start">
                            <div class="flex items-center gap-x-2">
                              <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                Date
                              </span>
                            </div>
                          </th>



                          <th scope="col" class="px-6 py-3 text-start">
                            <div class="flex items-center gap-x-2">
                              <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                Property Owner's Name
                              </span>
                            </div>
                          </th>


                          <th scope="col" class="px-6 py-3 text-start">
                            <div class="flex items-center gap-x-2">
                              <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                Property Name
                              </span>
                            </div>
                          </th>



                          <th scope="col" class="px-6 py-3 text-start">
                            <div class="flex items-center gap-x-2">
                              <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                Phone No
                              </span>
                            </div>
                          </th>


                          <th scope="col" class="px-6 py-3 text-start">
                            <div class="flex items-center gap-x-2">
                              <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                Amount
                              </span>
                            </div>
                          </th>




                          <th scope="col" class="px-6 py-3 text-start">
                            <div class="flex items-center gap-x-2">
                              <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                Property Address
                              </span>
                            </div>
                          </th>



                          <th scope="col" class="px-6 py-3 text-start">
                            <div class="flex items-center gap-x-2">
                              <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                Payment Status
                              </span>
                            </div>
                          </th>

                          {{-- <th scope="col" class="px-6 py-3 text-start">
                            <div class="flex items-center gap-x-2">
                              <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                Payment Method
                              </span>
                            </div>
                          </th> --}}

                          <th scope="col" class="px-6 py-3 text-end"></th>
                        </tr>
                      </thead>

                      <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">

                        @forelse ($taxPayments as $payment)

                        <tr>


                <td class="size-px whitespace-nowrap">
                    <div class="ps-6 py-2">
                    <label for="hs-at-with-checkboxes-1" class="flex">
                        <input type="checkbox" class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-at-with-checkboxes-1">                      <span class="sr-only">Checkbox</span>
                    </label>
                    </div>
            </td>




                      <td class="size-px whitespace-nowrap">
                        <div class="pe-6 py-2">
                          <a class="text-sm text-blue-600 decoration-2 hover:underline dark:text-blue-500" href="#">{{ $loop->iteration }}</a>
                        </div>
                      </td>

                          <td class="size-px whitespace-nowrap">
                            <div class="pe-6 py-2">
                              <a class="text-sm text-blue-600 decoration-2 hover:underline dark:text-blue-500" href="#">#35463</a>
                            </div>
                          </td>


                          <td class="size-px whitespace-nowrap">
                            <div class="px-6 py-2">
                              <span class="text-sm text-gray-600 dark:text-neutral-400">{{ $payment->created_at->format('Y-m-d H:i:s') }}
                            </span>
                            </div>
                          </td>


                          <td class="size-px whitespace-nowrap">
                            <div class="px-6 py-2">
                              <span class="text-sm text-gray-600 dark:text-neutral-400">{{ $payment->property_own_name }}</span>
                            </div>
                          </td>


                          <td class="size-px whitespace-nowrap">
                            <div class="px-6 py-2">
                              <span class="text-sm text-gray-600 dark:text-neutral-400">{{ $payment->property_name }}</span>
                            </div>
                          </td>


                          <td class="size-px whitespace-nowrap">
                            <div class="px-6 py-2">
                              <span class="text-sm text-gray-600 dark:text-neutral-400">{{ $payment->phone }}</span>
                            </div>
                          </td>


                          <td class="size-px whitespace-nowrap">
                            <div class="px-6 py-2">
                              <span class="text-sm text-gray-600 dark:text-neutral-400">${{ number_format($payment->amount_paid, 2) }}</span>
                            </div>
                          </td>



                          <td class="size-px whitespace-nowrap">
                            <div class="px-6 py-2">
                              <span class="text-sm text-gray-600 dark:text-neutral-400">{{ $payment->property_address }}</span>
                            </div>
                          </td>




                          <td class="size-px whitespace-nowrap">
                            <div class="px-6 py-2">
                              <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                </svg>
                                Paid
                              </span>
                            </div>
                          </td>



        {{--
                          <td class="size-px whitespace-nowrap">
                            <div class="px-6 py-2">
                              <div class="flex items-center gap-x-2">
                                <svg class="size-5" width="400" height="248" viewBox="0 0 400 248" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <g clip-path="url(#clip05asd)">
                                  <path d="M254 220.8H146V26.4H254V220.8Z" fill="#FF5F00"/>
                                  <path d="M152.8 123.6C152.8 84.2 171.2 49 200 26.4C178.2 9.2 151.4 0 123.6 0C55.4 0 0 55.4 0 123.6C0 191.8 55.4 247.2 123.6 247.2C151.4 247.2 178.2 238 200 220.8C171.2 198.2 152.8 163 152.8 123.6Z" fill="#EB001B"/>
                                  <path d="M400 123.6C400 191.8 344.6 247.2 276.4 247.2C248.6 247.2 221.8 238 200 220.8C228.8 198.2 247.2 163 247.2 123.6C247.2 84.2 228.8 49 200 26.4C221.8 9.2 248.6 0 276.4 0C344.6 0 400 55.4 400 123.6Z" fill="#F79E1B"/>
                                  </g>
                                  <defs>
                                  <clipPath id="clip05asd">
                                  <rect width="400" height="247.2" fill="white"/>
                                  </clipPath>
                                  </defs>
                                </svg>
                                <span class="text-sm text-gray-600 dark:text-neutral-400">•••• 4242</span>
                              </div>
                            </div>
                          </td>
         --}}






                          <td class="size-px whitespace-nowrap">
                            <div class="px-6 py-1.5 flex justify-end">
                              <div class="group inline-flex items-center divide-x divide-gray-300 border border-gray-300 bg-white shadow-sm rounded-lg transition-all dark:divide-neutral-700 dark:bg-neutral-700 dark:border-neutral-700">
                                <div class="hs-tooltip inline-block">
                                  <a class="hs-tooltip-toggle py-1.5 px-2 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-s-md bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
                                    <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                      <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                      <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                    </svg>
                                    <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm dark:bg-neutral-700" role="tooltip">
                                      Download PDF
                                    </span>
                                  </a>
                                </div>


                                {{-- <div class="hs-dropdown [--placement:bottom-right] relative inline-flex">
                                  <button id="hs-table-dropdown-1" type="button" class="hs-dropdown-toggle py-1.5 px-2 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-e-md bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                    <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                      <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                                    </svg>
                                  </button>
                                  <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden divide-y divide-gray-200 min-w-40 z-10 bg-white shadow-2xl rounded-lg p-2 mt-2 dark:divide-neutral-700 dark:bg-neutral-800 dark:border dark:border-neutral-700" role="menu" aria-orientation="vertical" aria-labelledby="hs-table-dropdown-1">
                                    <div class="py-2 first:pt-0 last:pb-0">
                                      <span class="block py-2 px-3 text-xs font-medium uppercase text-gray-400 dark:text-neutral-600">
                                        Options
                                      </span>
                                      <a class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="#">
                                        <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                          <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                                          <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                                        </svg>
                                        Copy
                                      </a>
                                      <a class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="#">
                                        <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                          <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                                          <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
                                        </svg>
                                        Print
                                      </a>
                                    </div>
                                    <div class="py-2 first:pt-0 last:pb-0">
                                      <span class="block py-2 px-3 text-xs font-medium uppercase text-gray-400 dark:text-neutral-600">
                                        Download options
                                      </span>
                                      <a class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="#">
                                        <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                          <path d="M5.884 6.68a.5.5 0 1 0-.768.64L7.349 10l-2.233 2.68a.5.5 0 0 0 .768.64L8 10.781l2.116 2.54a.5.5 0 0 0 .768-.641L8.651 10l2.233-2.68a.5.5 0 0 0-.768-.64L8 9.219l-2.116-2.54z"/>
                                          <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                                        </svg>
                                        Excel
                                      </a>
                                      <a class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="#">
                                        <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM3.517 14.841a1.13 1.13 0 0 0 .401.823c.13.108.289.192.478.252.19.061.411.091.665.091.338 0 .624-.053.859-.158.236-.105.416-.252.539-.44.125-.189.187-.408.187-.656 0-.224-.045-.41-.134-.56a1.001 1.001 0 0 0-.375-.357 2.027 2.027 0 0 0-.566-.21l-.621-.144a.97.97 0 0 1-.404-.176.37.37 0 0 1-.144-.299c0-.156.062-.284.185-.384.125-.101.296-.152.512-.152.143 0 .266.023.37.068a.624.624 0 0 1 .246.181.56.56 0 0 1 .12.258h.75a1.092 1.092 0 0 0-.2-.566 1.21 1.21 0 0 0-.5-.41 1.813 1.813 0 0 0-.78-.152c-.293 0-.551.05-.776.15-.225.099-.4.24-.527.421-.127.182-.19.395-.19.639 0 .201.04.376.122.524.082.149.2.27.352.367.152.095.332.167.539.213l.618.144c.207.049.361.113.463.193a.387.387 0 0 1 .152.326.505.505 0 0 1-.085.29.559.559 0 0 1-.255.193c-.111.047-.249.07-.413.07-.117 0-.223-.013-.32-.04a.838.838 0 0 1-.248-.115.578.578 0 0 1-.255-.384h-.765ZM.806 13.693c0-.248.034-.46.102-.633a.868.868 0 0 1 .302-.399.814.814 0 0 1 .475-.137c.15 0 .283.032.398.097a.7.7 0 0 1 .272.26.85.85 0 0 1 .12.381h.765v-.072a1.33 1.33 0 0 0-.466-.964 1.441 1.441 0 0 0-.489-.272 1.838 1.838 0 0 0-.606-.097c-.356 0-.66.074-.911.223-.25.148-.44.359-.572.632-.13.274-.196.6-.196.979v.498c0 .379.064.704.193.976.131.271.322.48.572.626.25.145.554.217.914.217.293 0 .554-.055.785-.164.23-.11.414-.26.55-.454a1.27 1.27 0 0 0 .226-.674v-.076h-.764a.799.799 0 0 1-.118.363.7.7 0 0 1-.272.25.874.874 0 0 1-.401.087.845.845 0 0 1-.478-.132.833.833 0 0 1-.299-.392 1.699 1.699 0 0 1-.102-.627v-.495Zm8.239 2.238h-.953l-1.338-3.999h.917l.896 3.138h.038l.888-3.138h.879l-1.327 4Z"/>
                                        </svg>
                                        .CSV
                                      </a>
                                      <a class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="#">
                                        <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                          <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                                          <path d="M4.603 14.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.697 19.697 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.188-.012.396-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.066.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.712 5.712 0 0 1-.911-.95 11.651 11.651 0 0 0-1.997.406 11.307 11.307 0 0 1-1.02 1.51c-.292.35-.609.656-.927.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.266.266 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.71 12.71 0 0 1 1.01-.193 11.744 11.744 0 0 1-.51-.858 20.801 20.801 0 0 1-.5 1.05zm2.446.45c.15.163.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.876 3.876 0 0 0-.612-.053zM8.078 7.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/>
                                        </svg>
                                        .PDF
                                      </a>
                                    </div>
                                  </div>
                                </div> --}}
                              </div>
                            </div>
                          </td>
                        </tr>


                        @empty
                        <tr>
                            <td colspan="7" class="border border-gray-300 p-2 text-center">No records found.</td>
                        </tr>
                    @endforelse



                      </tbody>
                    </table>
                    <!-- End Table -->

                    <!-- Footer -->
                    <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 dark:border-neutral-700">
                      <div class="max-w-sm space-y-3">
                        <select class="py-2 px-3 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option selected>9</option>
                          <option>20</option>
                        </select>
                      </div>

                      <div>
                        <div class="inline-flex gap-x-2">
                            <div class="mt-4">
                                {{ $taxPayments->links() }}
                            </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Footer -->
                  </div>
                </div>
              </div>
            </div>
            <!-- End Card -->
          </div>
          <!-- End Table Section -->












        </div>






</div>
