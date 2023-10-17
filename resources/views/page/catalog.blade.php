@extends("layout.myApp")
@section("content")
    <div class="flex-auto dark:bg-gray-800">

        <!-- Catalog block -->
        <div class="mx-auto max-w-[1290px] px-[15px] pt-[16px] pb-[34px] lg:-10">
            <div class="">

                <h1 class="text-center leading-tight text-3xl md:text-4xl font-extrabold mb-[5px] mt-[25px] dark:text-white">
                    Explore the world of auto
                    auctions for yourself</h1>

                <p class="text-center  text-base md:text-lg max-w-[450px] mx-auto font-normal text-gray-500 mb-[41px]  ">
                    Millions of cars from around the world in one place.
                    You'll always find exactly what you need.
                </p>

                <!-- Breadcrumb mobile -->
                <div class="mb-[15px]  md1:hidden">
                    <nav class="flex ml-[13px] md:ml-[38px]" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 md:space-x-3">
                            <li class="inline-flex items-center">
                                <a href="#"
                                   class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-primary-600 dark:text-gray-400 dark:hover:text-white ">
                                    <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                         fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                                    </svg>
                                    Home
                                </a>
                            </li>
                            <li>
                                <div class="flex items-center">
                                    <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                         xmlns="http://www.w3.org/2000/svg"
                                         fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-width="2"
                                              d="m1 9 4-4-4-4"/>
                                    </svg>
                                    <a href="#"
                                       class="ml-1 text-sm font-medium text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-400 dark:hover:text-white ">Mercedes-Benz</a>
                                </div>
                            </li>
                            <li aria-current="page">
                                <div class="flex items-center">
                                    <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                         xmlns="http://www.w3.org/2000/svg"
                                         fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-width="2"
                                              d="m1 9 4-4-4-4"/>
                                    </svg>
                                    <span
                                        class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400 ">AMG</span>
                                </div>
                            </li>
                        </ol>
                    </nav>

                </div>
                <div class="block md:flex items-start  gap-[25px] px-[0] md:px-[25px]">
                    <!-- left column -->

                    <div
                        class="w-[100%] md:w-[50%] lg:w-[30%]  rounded-[8px] bg-white dark:bg-gray-900 pt-[12px] pb-[12px] pl-[12px] pr-[12px] shadow-md ">
                        <div class="flex justify-between items-center">
                            <p class="text-sm font-medium text-gray-900 ">Filters</p>
                            <button class="text-primary-600 hover:text-primary-800 text-sm font-medium ">Clear all
                            </button>

                        </div>

                        <!-- Select make -->

                        <div class="mt-[15px] mb-[15px]">
                            <div class="flex gap-[8px] items-center mb-[10px]  ">
                                <label for="countries"
                                       class="block  text-sm font-medium text-gray-900 dark:text-white ">
                                    Select make & model</label>
                                <div>
                                    <img src="img/catalog/information-circle.svg" alt="information-circle">
                                </div>
                            </div>
                            <form action="" class="relative flex mb-2 ">
                                <!-- <img src="img/catalog/search-primary.svg" alt="icon" > -->

                                <svg class="absolute top-[9px] left-[16px]" width="18" height="19" viewBox="0 0 18 19"
                                     fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.75 16.25L11.25 11.75M12.75 8C12.75 8.68944 12.6142 9.37213 12.3504 10.0091C12.0865 10.646 11.6998 11.2248 11.2123 11.7123C10.7248 12.1998 10.146 12.5865 9.50909 12.8504C8.87213 13.1142 8.18944 13.25 7.5 13.25C6.81056 13.25 6.12787 13.1142 5.49091 12.8504C4.85395 12.5865 4.2752 12.1998 3.78769 11.7123C3.30018 11.2248 2.91347 10.646 2.64963 10.0091C2.3858 9.37213 2.25 8.68944 2.25 8C2.25 6.60761 2.80312 5.27226 3.78769 4.28769C4.77226 3.30312 6.10761 2.75 7.5 2.75C8.89239 2.75 10.2277 3.30312 11.2123 4.28769C12.1969 5.27226 12.75 6.60761 12.75 8Z"
                                        stroke="#6B7280" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                </svg>
                                <input id="" type="text" class=" w-full pl-10 p-2.5 py-2
                                                                        bg-white border rounded-md border border-gray-300 placeholder-gray-500
                                                                        focus:ring-primary-500 focus:border-primary-600 block focus:bg-gray-50 focus:placeholder-gray-900
                                                                        dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500
                                                                        text-sm font-normal
                                                                        inp-search" placeholder=" Aud" value="">
                                <button type="button" class="button-btn">


                                    <img src="img/catalog/check.svg" alt="icon"
                                         class="absolute top-[10px] right-[15px]">
                                </button>
                                <button type="button" class="button-btn-cross hidden">
                                    <img src="img/catalog/cross-01.svg" alt="icon"
                                         class="absolute top-[15px] right-[15px] ">
                                </button>


                            </form>
                            <!-- -------------------выпадашка основная ---------------------------------- -->
                            <div
                                class="hidden border rounded-lg border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-800 focus:ring-primary-500 focus:border-primary-500 block     w-fulldark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 pt-4 py-1 box-search  h-[220px] overflow-auto">
                                <p class="mb-3 pl-4 text-sm text-gray-900 font-semibold ">Search suggestion</p>
                                <!-- ---------- 1 ---------- -->
                                <div class="relative  mb-3 pl-[42px] pr-[36px] ">

                                    <img src="img/catalog/search.svg" alt="icon" class="absolute top-[3px] left-[17px]">


                                    <label data-v-e1="" class="flex items-center relative inp-make">
                                                        <span data-v-e1=""
                                                              class="text-sm font-normal text-primary-500 dark:text-gray-300 cursor-pointer">
                                                            Audi
                                                        </span>
                                        <span data-v-e1=""
                                              class="filter-selection-checkbox absolute right-[0px] top-[5px]">
                                                            <span data-v-2fd0448e="" data-v-e1="">
                                                                <input class="h-[16px] w-[16px]" data-v-2fd0448e=""
                                                                       type="checkbox" value="[object Object]">
                                                                <span data-v-2fd0448e="" class="cursor-pointer ">

                                                                </span>
                                                            </span>
                                                        </span>
                                    </label>


                                </div>
                                <!-- выпадашка с чеками -->
                                <div class="hidden check-make mb-3 pl-[25px]">

                                    <div class="  items-center  pl-[36px] pr-[36px] relative mb-3">
                                        <div>
                                            <img src="img/catalog/arrow-right.svg" alt="arrow-right-icon"
                                                 class="mr-2 absolute top-[6px] left-[17px] ">
                                        </div>
                                        <label data-v-e1="" class="flex items-center justify-between relative">
                                                            <span data-v-e1=""
                                                                  class="text-sm font-normal text-primary-500 dark:text-gray-300 cursor-pointer ">
                                                                SQ8
                                                            </span>
                                            <span data-v-e1=""
                                                  class="filter-selection-checkbox absolute right-[0px] top-[5px]">
                                                                <span data-v-2fd0448e="" data-v-e1="">
                                                                    <input class="h-[16px] w-[16px]" data-v-2fd0448e=""
                                                                           type="checkbox" value="[object Object]">
                                                                    <span data-v-2fd0448e="" class="cursor-pointer ">

                                                                    </span>
                                                                </span>
                                                            </span>
                                        </label>

                                    </div>
                                    <div class="  items-center  pl-[36px] pr-[36px] relative mb-3">
                                        <div>
                                            <img src="img/catalog/arrow-right.svg" alt="arrow-right-icon"
                                                 class="mr-2 absolute top-[6px] left-[17px] ">
                                        </div>
                                        <label data-v-e1="" class="flex items-center justify-between relative">
                                                            <span data-v-e1=""
                                                                  class="text-sm font-normal text-primary-500 dark:text-gray-300 cursor-pointer ">
                                                                SQ8
                                                            </span>
                                            <span data-v-e1=""
                                                  class="filter-selection-checkbox absolute right-[0px] top-[5px]">
                                                                <span data-v-2fd0448e="" data-v-e1="">
                                                                    <input class="h-[16px] w-[16px]" data-v-2fd0448e=""
                                                                           type="checkbox" value="[object Object]">
                                                                    <span data-v-2fd0448e="" class="cursor-pointer ">

                                                                    </span>
                                                                </span>
                                                            </span>
                                        </label>

                                    </div>

                                    <div class="  items-center  pl-[36px] pr-[36px] relative mb-3">
                                        <div>
                                            <img src="img/catalog/arrow-right.svg" alt="arrow-right-icon"
                                                 class="mr-2 absolute top-[6px] left-[17px] ">
                                        </div>
                                        <label data-v-e1="" class="flex items-center justify-between relative">
                                                            <span data-v-e1=""
                                                                  class="text-sm font-normal text-primary-500 dark:text-gray-300 cursor-pointer ">
                                                                SQ8
                                                            </span>
                                            <span data-v-e1=""
                                                  class="filter-selection-checkbox absolute right-[0px] top-[5px]">
                                                                <span data-v-2fd0448e="" data-v-e1="">
                                                                    <input class="h-[16px] w-[16px]" data-v-2fd0448e=""
                                                                           type="checkbox" value="[object Object]">
                                                                    <span data-v-2fd0448e="" class="cursor-pointer ">

                                                                    </span>
                                                                </span>
                                                            </span>
                                        </label>

                                    </div>
                                </div>


                                <!-- ---------- 2 ---------- -->
                                <div class="relative  mb-3 pl-[42px] pr-[36px] ">

                                    <img src="img/catalog/search.svg" alt="icon" class="absolute top-[3px] left-[17px]">


                                    <label data-v-e1="" class="flex items-center relative inp-make">
                                                        <span data-v-e1=""
                                                              class="text-sm font-normal text-primary-500 dark:text-gray-300 cursor-pointer">
                                                            Audi
                                                        </span>
                                        <span data-v-e1=""
                                              class="filter-selection-checkbox absolute right-[0px] top-[5px]">
                                                            <span data-v-2fd0448e="" data-v-e1="">
                                                                <input class="h-[16px] w-[16px]" data-v-2fd0448e=""
                                                                       type="checkbox" value="[object Object]">
                                                                <span data-v-2fd0448e="" class="cursor-pointer ">

                                                                </span>
                                                            </span>
                                                        </span>
                                    </label>


                                </div>
                                <!-- выпадашка с чеками -->
                                <div class="hidden check-make mb-3 pl-[25px]">

                                    <div class="  items-center  pl-[36px] pr-[36px] relative mb-3">
                                        <div>
                                            <img src="img/catalog/arrow-right.svg" alt="arrow-right-icon"
                                                 class="mr-2 absolute top-[6px] left-[17px] ">
                                        </div>
                                        <label data-v-e1="" class="flex items-center justify-between relative">
                                                            <span data-v-e1=""
                                                                  class="text-sm font-normal text-primary-500 dark:text-gray-300 cursor-pointer ">
                                                                SQ8
                                                            </span>
                                            <span data-v-e1=""
                                                  class="filter-selection-checkbox absolute right-[0px] top-[5px]">
                                                                <span data-v-2fd0448e="" data-v-e1="">
                                                                    <input class="h-[16px] w-[16px]" data-v-2fd0448e=""
                                                                           type="checkbox" value="[object Object]">
                                                                    <span data-v-2fd0448e="" class="cursor-pointer ">

                                                                    </span>
                                                                </span>
                                                            </span>
                                        </label>

                                    </div>
                                    <div class="  items-center  pl-[36px] pr-[36px] relative mb-3">
                                        <div>
                                            <img src="img/catalog/arrow-right.svg" alt="arrow-right-icon"
                                                 class="mr-2 absolute top-[6px] left-[17px] ">
                                        </div>
                                        <label data-v-e1="" class="flex items-center justify-between relative">
                                                            <span data-v-e1=""
                                                                  class="text-sm font-normal text-primary-500 dark:text-gray-300 cursor-pointer ">
                                                                SQ8
                                                            </span>
                                            <span data-v-e1=""
                                                  class="filter-selection-checkbox absolute right-[0px] top-[5px]">
                                                                <span data-v-2fd0448e="" data-v-e1="">
                                                                    <input class="h-[16px] w-[16px]" data-v-2fd0448e=""
                                                                           type="checkbox" value="[object Object]">
                                                                    <span data-v-2fd0448e="" class="cursor-pointer ">

                                                                    </span>
                                                                </span>
                                                            </span>
                                        </label>

                                    </div>

                                    <div class="  items-center  pl-[36px] pr-[36px] relative mb-3">
                                        <div>
                                            <img src="img/catalog/arrow-right.svg" alt="arrow-right-icon"
                                                 class="mr-2 absolute top-[6px] left-[17px] ">
                                        </div>
                                        <label data-v-e1="" class="flex items-center justify-between relative">
                                                            <span data-v-e1=""
                                                                  class="text-sm font-normal text-primary-500 dark:text-gray-300 cursor-pointer ">
                                                                SQ8
                                                            </span>
                                            <span data-v-e1=""
                                                  class="filter-selection-checkbox absolute right-[0px] top-[5px]">
                                                                <span data-v-2fd0448e="" data-v-e1="">
                                                                    <input class="h-[16px] w-[16px]" data-v-2fd0448e=""
                                                                           type="checkbox" value="[object Object]">
                                                                    <span data-v-2fd0448e="" class="cursor-pointer ">

                                                                    </span>
                                                                </span>
                                                            </span>
                                        </label>

                                    </div>
                                </div>


                                <!-- --------- 3 ----------- -->
                                <div class="relative  mb-3 pl-[42px] pr-[36px] ">

                                    <img src="img/catalog/search.svg" alt="icon" class="absolute top-[3px] left-[17px]">


                                    <label data-v-e1="" class="flex items-center relative inp-make">
                                                        <span data-v-e1=""
                                                              class="text-sm font-normal text-primary-500 dark:text-gray-300 cursor-pointer">
                                                            Audi
                                                        </span>
                                        <span data-v-e1=""
                                              class="filter-selection-checkbox absolute right-[0px] top-[5px]">
                                                            <span data-v-2fd0448e="" data-v-e1="">
                                                                <input class="h-[16px] w-[16px]" data-v-2fd0448e=""
                                                                       type="checkbox" value="[object Object]">
                                                                <span data-v-2fd0448e="" class="cursor-pointer ">

                                                                </span>
                                                            </span>
                                                        </span>
                                    </label>


                                </div>
                                <!-- выпадашка с чеками -->
                                <div class="hidden check-make mb-3 pl-[25px]">

                                    <div class="  items-center  pl-[36px] pr-[36px] relative mb-3">
                                        <div>
                                            <img src="img/catalog/arrow-right.svg" alt="arrow-right-icon"
                                                 class="mr-2 absolute top-[6px] left-[17px] ">
                                        </div>
                                        <label data-v-e1="" class="flex items-center justify-between relative">
                                                            <span data-v-e1=""
                                                                  class="text-sm font-normal text-primary-500 dark:text-gray-300 cursor-pointer ">
                                                                SQ8
                                                            </span>
                                            <span data-v-e1=""
                                                  class="filter-selection-checkbox absolute right-[0px] top-[5px]">
                                                                <span data-v-2fd0448e="" data-v-e1="">
                                                                    <input class="h-[16px] w-[16px]" data-v-2fd0448e=""
                                                                           type="checkbox" value="[object Object]">
                                                                    <span data-v-2fd0448e="" class="cursor-pointer ">

                                                                    </span>
                                                                </span>
                                                            </span>
                                        </label>

                                    </div>
                                    <div class="  items-center  pl-[36px] pr-[36px] relative mb-3">
                                        <div>
                                            <img src="img/catalog/arrow-right.svg" alt="arrow-right-icon"
                                                 class="mr-2 absolute top-[6px] left-[17px] ">
                                        </div>
                                        <label data-v-e1="" class="flex items-center justify-between relative">
                                                            <span data-v-e1=""
                                                                  class="text-sm font-normal text-primary-500 dark:text-gray-300 cursor-pointer ">
                                                                SQ8
                                                            </span>
                                            <span data-v-e1=""
                                                  class="filter-selection-checkbox absolute right-[0px] top-[5px]">
                                                                <span data-v-2fd0448e="" data-v-e1="">
                                                                    <input class="h-[16px] w-[16px]" data-v-2fd0448e=""
                                                                           type="checkbox" value="[object Object]">
                                                                    <span data-v-2fd0448e="" class="cursor-pointer ">

                                                                    </span>
                                                                </span>
                                                            </span>
                                        </label>

                                    </div>

                                    <div class="  items-center  pl-[36px] pr-[36px] relative mb-3">
                                        <div>
                                            <img src="img/catalog/arrow-right.svg" alt="arrow-right-icon"
                                                 class="mr-2 absolute top-[6px] left-[17px] ">
                                        </div>
                                        <label data-v-e1="" class="flex items-center justify-between relative">
                                                            <span data-v-e1=""
                                                                  class="text-sm font-normal text-primary-500 dark:text-gray-300 cursor-pointer ">
                                                                SQ8
                                                            </span>
                                            <span data-v-e1=""
                                                  class="filter-selection-checkbox absolute right-[0px] top-[5px]">
                                                                <span data-v-2fd0448e="" data-v-e1="">
                                                                    <input class="h-[16px] w-[16px]" data-v-2fd0448e=""
                                                                           type="checkbox" value="[object Object]">
                                                                    <span data-v-2fd0448e="" class="cursor-pointer ">

                                                                    </span>
                                                                </span>
                                                            </span>
                                        </label>

                                    </div>
                                </div>


                                <!-- --------- 4 ----------- -->
                                <div class="relative  mb-3 pl-[42px] pr-[36px] ">

                                    <img src="img/catalog/search.svg" alt="icon" class="absolute top-[3px] left-[17px]">


                                    <label data-v-e1="" class="flex items-center relative inp-make">
                                                        <span data-v-e1=""
                                                              class="text-sm font-normal text-primary-500 dark:text-gray-300 cursor-pointer">
                                                            Audi
                                                        </span>
                                        <span data-v-e1=""
                                              class="filter-selection-checkbox absolute right-[0px] top-[5px]">
                                                            <span data-v-2fd0448e="" data-v-e1="">
                                                                <input class="h-[16px] w-[16px]" data-v-2fd0448e=""
                                                                       type="checkbox" value="[object Object]">
                                                                <span data-v-2fd0448e="" class="cursor-pointer ">

                                                                </span>
                                                            </span>
                                                        </span>
                                    </label>


                                </div>
                                <!-- выпадашка с чеками -->
                                <div class="hidden check-make mb-3 pl-[25px]">

                                    <div class="  items-center  pl-[36px] pr-[36px] relative mb-3">
                                        <div>
                                            <img src="img/catalog/arrow-right.svg" alt="arrow-right-icon"
                                                 class="mr-2 absolute top-[6px] left-[17px] ">
                                        </div>
                                        <label data-v-e1="" class="flex items-center justify-between relative">
                                                            <span data-v-e1=""
                                                                  class="text-sm font-normal text-primary-500 dark:text-gray-300 cursor-pointer ">
                                                                SQ8
                                                            </span>
                                            <span data-v-e1=""
                                                  class="filter-selection-checkbox absolute right-[0px] top-[5px]">
                                                                <span data-v-2fd0448e="" data-v-e1="">
                                                                    <input class="h-[16px] w-[16px]" data-v-2fd0448e=""
                                                                           type="checkbox" value="[object Object]">
                                                                    <span data-v-2fd0448e="" class="cursor-pointer ">

                                                                    </span>
                                                                </span>
                                                            </span>
                                        </label>

                                    </div>
                                    <div class="  items-center  pl-[36px] pr-[36px] relative mb-3">
                                        <div>
                                            <img src="img/catalog/arrow-right.svg" alt="arrow-right-icon"
                                                 class="mr-2 absolute top-[6px] left-[17px] ">
                                        </div>
                                        <label data-v-e1="" class="flex items-center justify-between relative">
                                                            <span data-v-e1=""
                                                                  class="text-sm font-normal text-primary-500 dark:text-gray-300 cursor-pointer ">
                                                                SQ8
                                                            </span>
                                            <span data-v-e1=""
                                                  class="filter-selection-checkbox absolute right-[0px] top-[5px]">
                                                                <span data-v-2fd0448e="" data-v-e1="">
                                                                    <input class="h-[16px] w-[16px]" data-v-2fd0448e=""
                                                                           type="checkbox" value="[object Object]">
                                                                    <span data-v-2fd0448e="" class="cursor-pointer ">

                                                                    </span>
                                                                </span>
                                                            </span>
                                        </label>

                                    </div>

                                    <div class="  items-center  pl-[36px] pr-[36px] relative mb-3">
                                        <div>
                                            <img src="img/catalog/arrow-right.svg" alt="arrow-right-icon"
                                                 class="mr-2 absolute top-[6px] left-[17px] ">
                                        </div>
                                        <label data-v-e1="" class="flex items-center justify-between relative">
                                                            <span data-v-e1=""
                                                                  class="text-sm font-normal text-primary-500 dark:text-gray-300 cursor-pointer ">
                                                                SQ8
                                                            </span>
                                            <span data-v-e1=""
                                                  class="filter-selection-checkbox absolute right-[0px] top-[5px]">
                                                                <span data-v-2fd0448e="" data-v-e1="">
                                                                    <input class="h-[16px] w-[16px]" data-v-2fd0448e=""
                                                                           type="checkbox" value="[object Object]">
                                                                    <span data-v-2fd0448e="" class="cursor-pointer ">

                                                                    </span>
                                                                </span>
                                                            </span>
                                        </label>

                                    </div>
                                </div>


                                <!-- --------- 4 ----------- -->
                                <div class="relative  mb-3 pl-[42px] pr-[36px] ">

                                    <img src="img/catalog/search.svg" alt="icon" class="absolute top-[3px] left-[17px]">


                                    <label data-v-e1="" class="flex items-center relative inp-make">
                                                        <span data-v-e1=""
                                                              class="text-sm font-normal text-primary-500 dark:text-gray-300 cursor-pointer">
                                                            Audi
                                                        </span>
                                        <span data-v-e1=""
                                              class="filter-selection-checkbox absolute right-[0px] top-[5px]">
                                                            <span data-v-2fd0448e="" data-v-e1="">
                                                                <input class="h-[16px] w-[16px]" data-v-2fd0448e=""
                                                                       type="checkbox" value="[object Object]">
                                                                <span data-v-2fd0448e="" class="cursor-pointer ">

                                                                </span>
                                                            </span>
                                                        </span>
                                    </label>


                                </div>
                                <!-- выпадашка с чеками -->
                                <div class="hidden check-make mb-3 pl-[25px]">

                                    <div class="  items-center  pl-[36px] pr-[36px] relative mb-3">
                                        <div>
                                            <img src="img/catalog/arrow-right.svg" alt="arrow-right-icon"
                                                 class="mr-2 absolute top-[6px] left-[17px] ">
                                        </div>
                                        <label data-v-e1="" class="flex items-center justify-between relative">
                                                            <span data-v-e1=""
                                                                  class="text-sm font-normal text-primary-500 dark:text-gray-300 cursor-pointer ">
                                                                SQ8
                                                            </span>
                                            <span data-v-e1=""
                                                  class="filter-selection-checkbox absolute right-[0px] top-[5px]">
                                                                <span data-v-2fd0448e="" data-v-e1="">
                                                                    <input class="h-[16px] w-[16px]" data-v-2fd0448e=""
                                                                           type="checkbox" value="[object Object]">
                                                                    <span data-v-2fd0448e="" class="cursor-pointer ">

                                                                    </span>
                                                                </span>
                                                            </span>
                                        </label>

                                    </div>
                                    <div class="  items-center  pl-[36px] pr-[36px] relative mb-3">
                                        <div>
                                            <img src="img/catalog/arrow-right.svg" alt="arrow-right-icon"
                                                 class="mr-2 absolute top-[6px] left-[17px] ">
                                        </div>
                                        <label data-v-e1="" class="flex items-center justify-between relative">
                                                            <span data-v-e1=""
                                                                  class="text-sm font-normal text-primary-500 dark:text-gray-300 cursor-pointer ">
                                                                SQ8
                                                            </span>
                                            <span data-v-e1=""
                                                  class="filter-selection-checkbox absolute right-[0px] top-[5px]">
                                                                <span data-v-2fd0448e="" data-v-e1="">
                                                                    <input class="h-[16px] w-[16px]" data-v-2fd0448e=""
                                                                           type="checkbox" value="[object Object]">
                                                                    <span data-v-2fd0448e="" class="cursor-pointer ">

                                                                    </span>
                                                                </span>
                                                            </span>
                                        </label>

                                    </div>

                                    <div class="  items-center  pl-[36px] pr-[36px] relative mb-3">
                                        <div>
                                            <img src="img/catalog/arrow-right.svg" alt="arrow-right-icon"
                                                 class="mr-2 absolute top-[6px] left-[17px] ">
                                        </div>
                                        <label data-v-e1="" class="flex items-center justify-between relative">
                                                            <span data-v-e1=""
                                                                  class="text-sm font-normal text-primary-500 dark:text-gray-300 cursor-pointer ">
                                                                SQ8
                                                            </span>
                                            <span data-v-e1=""
                                                  class="filter-selection-checkbox absolute right-[0px] top-[5px]">
                                                                <span data-v-2fd0448e="" data-v-e1="">
                                                                    <input class="h-[16px] w-[16px]" data-v-2fd0448e=""
                                                                           type="checkbox" value="[object Object]">
                                                                    <span data-v-2fd0448e="" class="cursor-pointer ">

                                                                    </span>
                                                                </span>
                                                            </span>
                                        </label>

                                    </div>
                                </div>


                            </div>


                        </div>


                        <!-- range -->
                        <div class="w-[90%] mx-auto">
                            <p class="text-sm font-medium text-gray-900 mb-[15px]">Model year</p>
                            <div id="slider" class=" h-[8px] mb-[12px]"></div>
                            <div class="flex justify-between w-full gap-[12px]">
                                <div>
                                    <p class=" mb-[8px] text-sm font-medium text-gray-900">From</p>
                                    <input type="text" id="min-value"
                                           class="flex text-sm font-normal text-gray-500 rounded-[8px] py-[8px] px-[16px] border border-solid border-gray-300 bg-gray-50 mx-auto w-full md:w-[142px">
                                </div>
                                <div class="">
                                    <p class=" mb-[8px] text-sm font-medium text-gray-900 ">To</p>
                                    <input type="text" id="max-value"
                                           class="flex text-sm font-normal text-gray-500 rounded-[8px] py-[8px] px-[16px] border border-solid border-gray-300 bg-gray-50 mx-auto w-full md:w-[142px">
                                </div>

                            </div>
                        </div>

                        <!-- Auction status -->
                        <div class="pt-3">
                            <div class="flex gap-[8px] items-center mb-[10px]  ">
                                <label for="countries"
                                       class="block  text-sm font-medium text-gray-900 dark:text-white ">
                                    Auction status</label>
                                <div>
                                    <img src="img/catalog/information-circle.svg" alt="information-circle">
                                </div>
                            </div>
                            <!-- табы -->

                            <div class="tabu-body__nav flex gap-3 justify-between">
                                <button type="button" class="tabu-body__item text-primary-600 bg-white border          border-primary-600
                                                     text-sm font-medium rounded-lg  px-5 py-[8px]   w-[90px] text-center"
                                        data-tab="tab-1">All
                                </button>
                                <button type="button" class="tabu-body__item text-primary-600 bg-white border _activ border-primary-600
                                                     text-sm font-medium rounded-lg  px-5 py-[8px]   w-[90px] text-center"
                                        data-tab="tab-2">Live
                                </button>
                                <button type="button" class="tabu-body__item text-primary-600 bg-white border          border-primary-600
                                                     text-sm font-medium rounded-lg  px-5 py-[8px]   w-[90px] text-center"
                                        data-tab="tab-3">Sold
                                </button>
                            </div>


                        </div>


                        <!-- accordion -->
                        <div id="accordion-flush" data-accordion="collapse"
                             data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white"
                             data-inactive-classes="text-gray-500 dark:text-gray-400">
                            <!-- Auction -->

                            <h2 id="accordion-flush-heading-1">
                                <button type="button"
                                        class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-900 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 text-sm "
                                        data-accordion-target="#accordion-flush-body-1" aria-expanded="true"
                                        aria-controls="accordion-flush-body-1">
                                    <span>Auction</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M9 5 5 1 1 5"/>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                                <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                    <!-- тогле -->
                                    <div class="mb-[12px] relative">
                                        <label class="relative inline-flex items-center cursor-pointer ">
                                            <input type="checkbox" value="" class="sr-only peer">
                                            <div
                                                class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary-300 dark:peer-focus:ring-primary-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600">
                                            </div>

                                        </label>
                                        <div class="absolute top-[-4px] left-[56px]">
                                            <span class=" text-sm font-medium text-gray-900 dark:text-gray-300 ">All auto auctions</span>
                                            <p class="  text-xs font-normal text-gray-500 ">From all countries</p>
                                        </div>

                                    </div>


                                    <!-- тогле -->
                                    <div class="mb-[12px] relative">
                                        <label class="relative inline-flex items-center cursor-pointer ">
                                            <input type="checkbox" value="" class="sr-only peer">
                                            <div
                                                class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary-300 dark:peer-focus:ring-primary-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600">
                                            </div>

                                        </label>
                                        <div class="absolute top-[-4px] left-[56px]">
                                            <span class=" text-sm font-medium text-gray-900 dark:text-gray-300 ">Copart USA</span>
                                            <p class="  text-xs font-normal text-gray-500 ">Used cars auction</p>
                                        </div>

                                    </div>

                                    <!-- тогле -->
                                    <div class="mb-[12px] relative">
                                        <label class="relative inline-flex items-center cursor-pointer ">
                                            <input type="checkbox" value="" class="sr-only peer">
                                            <div
                                                class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary-300 dark:peer-focus:ring-primary-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600">
                                            </div>

                                        </label>
                                        <div class="absolute top-[-4px] left-[56px]">
                                            <span class=" text-sm font-medium text-gray-900 dark:text-gray-300 ">IAAI USA</span>
                                            <p class="  text-xs font-normal text-gray-500 ">Used cars auction</p>
                                        </div>

                                    </div>

                                    <!-- тогле -->
                                    <div class=" relative">
                                        <label class="relative inline-flex items-center cursor-pointer ">
                                            <input type="checkbox" value="" class="sr-only peer">
                                            <div
                                                class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary-300 dark:peer-focus:ring-primary-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600">
                                            </div>

                                        </label>
                                        <div class="absolute top-[-4px] left-[56px]">
                                            <span class=" text-sm font-medium text-gray-900 dark:text-gray-300 ">Impact (IAAI CA)</span>
                                            <p class="  text-xs font-normal text-gray-500 ">Used cars auction</p>
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <!-- Condition -->

                            <h2 id="accordion-flush-heading-2">
                                <button type="button"
                                        class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 text-sm "
                                        data-accordion-target="#accordion-flush-body-2 " aria-expanded="false"
                                        aria-controls="accordion-flush-body-2">
                                    <span>Condition</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M9 5 5 1 1 5"/>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                                <div class="py-5 border-b border-gray-200 dark:border-gray-700">

                                    <!-- checkbox -->
                                    <div class="block items-center  ">
                                        <input id="checked-checkbox" type="checkbox" value=""
                                               class="w-4 h-4 text-primary-600 bg-gray-100 border-gray-300 rounded  dark:ring-offset-gray-800  dark:bg-gray-700 dark:border-gray-600 cursor-pointer">
                                        <label for="checked-checkbox"
                                               class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300 cursor-pointer  block relative top-[-23px] right-[-19px]">Run
                                            and drive (129)
                                        </label>
                                    </div>
                                    <div class="block items-center mt-[-10px]">
                                        <input id="checked-checkbox-2" type="checkbox" value=""
                                               class="w-4 h-4 text-primary-600 bg-gray-100 border-gray-300 rounded  dark:ring-offset-gray-800  dark:bg-gray-700 dark:border-gray-600 cursor-pointer ">
                                        <label for="checked-checkbox-2"
                                               class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300 cursor-pointer block relative top-[-23px] right-[-19px]">Cannot
                                            start (62)
                                        </label>
                                    </div>
                                    <div class="block items-center mt-[-10px] ">
                                        <input id="checked-checkbox-3" type="checkbox" value=""
                                               class="w-4 h-4 text-primary-600 bg-gray-100 border-gray-300 rounded  dark:ring-offset-gray-800  dark:bg-gray-700 dark:border-gray-600 cursor-pointer">
                                        <label for="checked-checkbox-3"
                                               class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300 cursor-pointer block relative top-[-23px] right-[-19px]">Vehicle
                                            Starts (33)
                                        </label>
                                    </div>


                                    <div>
                                        <a href="#"
                                           class="text-sm font-medium text-primary-600 hover:text-primary-800 ">View
                                            all</a>
                                    </div>
                                </div>
                            </div>


                            <!-- Damage -->

                            <h2 id="accordion-flush-heading-3">
                                <button type="button"
                                        class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 text-sm "
                                        data-accordion-target="#accordion-flush-body-3" aria-expanded="false"
                                        aria-controls="accordion-flush-body-3">
                                    <span>Damage</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M9 5 5 1 1 5"/>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                                <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                    <p class="mb-2 text-gray-500 dark:text-gray-400 ">The main difference is that the
                                        core components
                                        from
                                        Flowbite are open source under the MIT license, whereas Tailwind UI is a paid
                                        product.
                                        Another
                                        difference is that Flowbite relies on smaller and standalone components, whereas
                                        Tailwind UI
                                        offers
                                        sections of pages.</p>
                                    <p class="mb-2 text-gray-500 dark:text-gray-400">454545454545454</p>
                                    <p class="mb-2 text-gray-500 dark:text-gray-400 ">Learn more about these
                                        technologies:</p>
                                    <ul class="pl-5 text-gray-500 list-disc dark:text-gray-400">
                                        <li><a href="https://flowbite.com/pro/"
                                               class="text-primary-600 dark:text-primary-500 hover:underline ">Flowbite
                                                Pro</a></li>
                                        <li><a href="https://tailwindui.com/" rel="nofollow"
                                               class="text-primary-600 dark:text-primary-500 hover:underline ">Tailwind
                                                UI</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Fuel type -->

                            <h2 id="accordion-flush-heading-4">
                                <button type="button"
                                        class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 text-sm "
                                        data-accordion-target="#accordion-flush-body-4" aria-expanded="false"
                                        aria-controls="accordion-flush-body-4">
                                    <span>Fuel type</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M9 5 5 1 1 5"/>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-flush-body-4" class="hidden" aria-labelledby="accordion-flush-heading-4">
                                <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                    <p class="mb-2 text-gray-500 dark:text-gray-400 ">The main difference is that the
                                        core components
                                        from
                                        Flowbite are open source under the MIT license, whereas Tailwind UI is a paid
                                        product.
                                        Another
                                        difference is that Flowbite relies on smaller and standalone components, whereas
                                        Tailwind UI
                                        offers
                                        sections of pages.</p>
                                    <p class="mb-2 text-gray-500 dark:text-gray-400 ">However, we actually recommend
                                        using both
                                        Flowbite,
                                        Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you
                                        from using
                                        the best of
                                        two worlds.</p>
                                    <p class="mb-2 text-gray-500 dark:text-gray-400 ">Learn more about these
                                        technologies:</p>
                                    <ul class="pl-5 text-gray-500 list-disc dark:text-gray-400">
                                        <li><a href="https://flowbite.com/pro/"
                                               class="text-primary-600 dark:text-primary-500 hover:underline ">Flowbite
                                                Pro</a></li>
                                        <li><a href="https://tailwindui.com/" rel="nofollow"
                                               class="text-primary-600 dark:text-primary-500 hover:underline ">Tailwind
                                                UI</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                    </div>


                    <!-- right column -->
                    <div class="w-[100%]  ">
                        <!-- select -->

                        <div
                            class="flex items-center justify-end  md1:justify-between mb-[12px] mr-[12px] md:pr-[12px] w-full">

                            <!-- Breadcrumb -->
                            <nav class="hidden md1:flex ml-[13px] " aria-label="Breadcrumb">
                                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                                    <li class="inline-flex items-center">
                                        <a href="#"
                                           class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-primary-600 dark:text-gray-400 dark:hover:text-white ">
                                            <svg class="w-3 h-3 mr-2.5" aria-hidden="true"
                                                 xmlns="http://www.w3.org/2000/svg"
                                                 fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                                            </svg>
                                            Home
                                        </a>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                            <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                      stroke-linejoin="round"
                                                      stroke-width="2" d="m1 9 4-4-4-4"/>
                                            </svg>
                                            <a href="#"
                                               class="ml-1 text-sm font-medium text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-400 dark:hover:text-white ">Mercedes-Benz</a>
                                        </div>
                                    </li>
                                    <li aria-current="page">
                                        <div class="flex items-center">
                                            <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                      stroke-linejoin="round"
                                                      stroke-width="2" d="m1 9 4-4-4-4"/>
                                            </svg>
                                            <span
                                                class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">AMG</span>
                                        </div>
                                    </li>
                                </ol>
                            </nav>

                            <!-- Dropdown btn mobile do 768px -->


                            <div class="relative inline-block w-full md:w-auto">
                                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                                        class="bg-white focus:bg-primary-800 border border-gray-200 text-gray-900 hover:text-white focus:text-white text-sm rounded-lg text-sm font-medium hover:bg-primary-600
                                                    focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-[34px] py-2.5 text-center inline-flex justify-center
                                                    items-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 w-full transition duration-300 ease-in-out delay-0"
                                        type="button">

                                    <div class="flex md:hidden justify-center dark:text-white">
                                        <img src="img/catalog/filter.svg" alt="filter-icon" class="mr-[8px]">
                                        Sort By
                                    </div>

                                    <p class="hidden md:flex dark:text-white ">Sort by options</p>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17"
                                         fill="currentColor " class="dark:text-white ml-[8px]">
                                        <g id="chevron-down">
                                            <path id="Vector" fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M4.23441 6.33441C4.38443 6.18443 4.58788 6.10018 4.80001 6.10018C5.01214 6.10018 5.21559 6.18443 5.36561 6.33441L8.00001 8.96881L10.6344 6.33441C10.7082 6.258 10.7965 6.19706 10.8941 6.15513C10.9917 6.1132 11.0967 6.09113 11.2029 6.09021C11.3091 6.08929 11.4145 6.10953 11.5128 6.14975C11.6111 6.18998 11.7004 6.24938 11.7755 6.32449C11.8506 6.39961 11.91 6.48893 11.9503 6.58725C11.9905 6.68556 12.0107 6.79091 12.0098 6.89713C12.0089 7.00335 11.9868 7.10833 11.9449 7.20593C11.903 7.30354 11.842 7.39181 11.7656 7.46561L8.56561 10.6656C8.41559 10.8156 8.21214 10.8998 8.00001 10.8998C7.78788 10.8998 7.58443 10.8156 7.43441 10.6656L4.23441 7.46561C4.08444 7.31559 4.00018 7.11214 4.00018 6.90001C4.00018 6.68788 4.08444 6.48443 4.23441 6.33441V6.33441Z">
                                            </path>
                                        </g>
                                    </svg>
                                </button>
                                <!-- Dropdown menu -->
                                <div id="dropdown"
                                     class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700  w-full dropdown-menu">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 "
                                        aria-labelledby="dropdownDefaultButton">
                                        <li>
                                            <a href="#"
                                               class="flex items-center gap-[12px] px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white btn-btn ">
                                                <img src="img/catalog/calendar.svg" alt="calendar-icon">
                                                Auction date</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                               class="flex items-center gap-[12px]  px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white btn-btn ">
                                                <img src="img/catalog/trending-up.svg" alt="calendar-icon">Price low to
                                                high</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                               class="flex items-center gap-[12px]  px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white btn-btn ">
                                                <img src="img/catalog/trending-down.svg" alt="calendar-icon">Price high
                                                to low</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>


                        </div>


                        <!-- catalog car -->
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[18px] mb-[37px]">
                            <!-- 1 card -->
                            <article
                                class="w-full bg-white rounded-[15px] border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 relative">
                                <div class="relative">
                                    <a href="#">
                                        <img class="rounded-t-[15px] w-full" src="img/card/01.png" alt="auto">

                                    </a>

                                    <!-- primary block -->
                                    <div
                                        class="text-white text-xs font-medium bg-primary-600 inline-flex px-4 py-0.5 pb-1 rounded-full absolute top-[13px] left-[15px]">
                                        <svg class="w-4 h-4 mt-1.5" aria-hidden="true"
                                             xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M1.858 5.30002H3.2202C3.2825 4.21782 3.4883 3.22102 3.8061 2.41742C3.29441 2.73097 2.85579 3.15046 2.51977 3.64768C2.18374 4.1449 1.95809 4.70831 1.858 5.30002ZM5.9999 0.400024C4.51469 0.400024 3.09031 0.990023 2.0401 2.04023C0.989901 3.09043 0.399902 4.51481 0.399902 6.00002C0.399902 7.48524 0.989901 8.90962 2.0401 9.95982C3.09031 11.01 4.51469 11.6 5.9999 11.6C7.48512 11.6 8.9095 11.01 9.9597 9.95982C11.0099 8.90962 11.5999 7.48524 11.5999 6.00002C11.5999 4.51481 11.0099 3.09043 9.9597 2.04023C8.9095 0.990023 7.48512 0.400024 5.9999 0.400024V0.400024ZM5.9999 1.80002C5.9467 1.80002 5.8375 1.82242 5.6744 1.98342C5.5078 2.14722 5.3265 2.41952 5.1585 2.81082C4.8862 3.44572 4.6874 4.31022 4.6223 5.30002H7.3775C7.3124 4.31022 7.1136 3.44572 6.8413 2.81082C6.6733 2.41882 6.4913 2.14722 6.3254 1.98342C6.1623 1.82242 6.0531 1.80002 5.9999 1.80002ZM8.7796 5.30002C8.7173 4.21782 8.5115 3.22102 8.1937 2.41742C8.7054 2.73097 9.14401 3.15046 9.48004 3.64768C9.81607 4.1449 10.0417 4.70831 10.1418 5.30002H8.7796ZM7.3775 6.70002H4.6223C4.6874 7.68982 4.8862 8.55432 5.1585 9.18922C5.3265 9.58122 5.5085 9.85283 5.6744 10.0166C5.8375 10.1776 5.9467 10.2 5.9999 10.2C6.0531 10.2 6.1623 10.1776 6.3254 10.0166C6.492 9.85283 6.674 9.58052 6.8413 9.18922C7.1136 8.55432 7.3124 7.68982 7.3775 6.70002ZM8.1937 9.58263C8.5115 8.77973 8.7173 7.78222 8.7796 6.70002H10.1418C10.0417 7.29174 9.81607 7.85515 9.48004 8.35237C9.14401 8.84959 8.7054 9.26908 8.1937 9.58263V9.58263ZM3.8061 9.58263C3.4883 8.77903 3.2825 7.78222 3.2209 6.70002H1.858C1.95809 7.29174 2.18374 7.85515 2.51977 8.35237C2.85579 8.84959 3.29441 9.26908 3.8061 9.58263V9.58263Z"/>
                                        </svg>
                                        <p class="mt-1 ">Copart</p>

                                    </div>


                                </div>


                                <!--block body card  -->
                                <div class="p-5 pb-2.5">
                                    <!-- model auto -->

                                    <div class="flex justify-between mb-[7px]">
                                        <a href="#"
                                           class=" w-fix leading-none text-lg font-semibold  text-gray-900 dark:text-white dark:hover:text-gray-300 max-w-[220px]">
                                            Geep Grand Cheroky
                                        </a>
                                        <!-- heart -->
                                        <svg
                                            class="w-5 h-5 transition duration-300 transform fill-current text-white hover:text-red-500"
                                            width="23"
                                            height="20" viewBox="0 0 23 20" xmlns="http://www.w3.org/2000/svg"
                                            style="cursor: pointer;">
                                            <path
                                                d="M1.76037 4.75019C2.01478 4.13598 2.38769 3.57789 2.85779 3.10779C3.32789 2.63769 3.88598 2.26478 4.50019 2.01037C5.11441 1.75595 5.77272 1.625 6.43754 1.625C7.10237 1.625 7.76068 1.75595 8.37489 2.01037C8.98911 2.26478 9.5472 2.63769 10.0173 3.10779L11.5 4.59054L12.9828 3.10779C13.9322 2.15839 15.2199 1.62501 16.5625 1.62501C17.9052 1.62501 19.1929 2.15839 20.1423 3.10779C21.0917 4.0572 21.6251 5.34488 21.6251 6.68754C21.6251 8.03021 21.0917 9.31789 20.1423 10.2673L11.5 18.9095L2.85779 10.2673C2.38769 9.7972 2.01478 9.23911 1.76037 8.62489C1.50595 8.01068 1.375 7.35237 1.375 6.68754C1.375 6.02272 1.50595 5.36441 1.76037 4.75019Z"
                                                stroke="#EF4444" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                            </path>
                                        </svg>


                                    </div>


                                    <!-- price -->
                                    <div class="flex gap-x-1.5 mb-1">
                                        <p class="leading-tight text-xl font-semibold text-gray-900 dark:text-gray-400 ">
                                            $13.099</p>

                                        <!-- gray block -->
                                        <div class="flex bg-gray-100 rounded-full px-3 py-1 gap-1">
                                            <div><img class="mt-[1px]" src="img/card/status-online.svg" alt="icon">
                                            </div>

                                            <p class="font-medium text-xs  text-center font-medium ">Live bid</p>

                                        </div>

                                    </div>

                                    <p class="leading-tight text-xs font-medium text-gray-500 mb-1 ">Condition: Run &
                                        Drive Verified
                                    </p>
                                    <p class="leading-tight text-xs font-medium text-gray-500 mb-1 ">Primary Damage:
                                        front end</p>
                                    <p class="leading-tight text-xs font-medium text-gray-500 mb-0 ">VIN:
                                        3VW2K7AJ3FM257322</p>


                                </div>
                                <!-- underline -->
                                <div class="w-full h-px bg-black dark:bg-gray-300"></div>

                                <!-- block calendar -->
                                <div class=" py-2 p-5 flex justify-between">
                                    <!-- left calendar -->
                                    <div class="flex gap-1">
                                        <div>
                                            <img src="img/card/calendar.svg" alt="icon">
                                        </div>
                                        <p class="text-xs font-medium text-gray-900 dark:text-gray-300">2021 year</p>
                                    </div>
                                    <!-- right calendar -->
                                    <div class="flex gap-1">
                                        <div>
                                            <img src="img/card/calendar.svg" alt="icon">
                                        </div>
                                        <p class="text-xs font-medium text-gray-900 dark:text-gray-300">Fuel:
                                            gasoline</p>
                                    </div>
                                </div>

                            </article>


                            <!-- 2 card -->
                            <article
                                class="w-full bg-white rounded-[15px] border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 relative">
                                <div class="relative">
                                    <a href="#">
                                        <img class="rounded-t-[15px] w-full" src="img/card/01.png" alt="auto">

                                    </a>

                                    <!-- red block -->
                                    <div
                                        class="text-white text-xs font-medium bg-red-600 inline-flex px-4 py-0.5 pb-1 rounded-full absolute top-[13px] left-[15px]">
                                        <svg class="w-4 h-4 mt-1.5" aria-hidden="true"
                                             xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M1.858 5.30002H3.2202C3.2825 4.21782 3.4883 3.22102 3.8061 2.41742C3.29441 2.73097 2.85579 3.15046 2.51977 3.64768C2.18374 4.1449 1.95809 4.70831 1.858 5.30002ZM5.9999 0.400024C4.51469 0.400024 3.09031 0.990023 2.0401 2.04023C0.989901 3.09043 0.399902 4.51481 0.399902 6.00002C0.399902 7.48524 0.989901 8.90962 2.0401 9.95982C3.09031 11.01 4.51469 11.6 5.9999 11.6C7.48512 11.6 8.9095 11.01 9.9597 9.95982C11.0099 8.90962 11.5999 7.48524 11.5999 6.00002C11.5999 4.51481 11.0099 3.09043 9.9597 2.04023C8.9095 0.990023 7.48512 0.400024 5.9999 0.400024V0.400024ZM5.9999 1.80002C5.9467 1.80002 5.8375 1.82242 5.6744 1.98342C5.5078 2.14722 5.3265 2.41952 5.1585 2.81082C4.8862 3.44572 4.6874 4.31022 4.6223 5.30002H7.3775C7.3124 4.31022 7.1136 3.44572 6.8413 2.81082C6.6733 2.41882 6.4913 2.14722 6.3254 1.98342C6.1623 1.82242 6.0531 1.80002 5.9999 1.80002ZM8.7796 5.30002C8.7173 4.21782 8.5115 3.22102 8.1937 2.41742C8.7054 2.73097 9.14401 3.15046 9.48004 3.64768C9.81607 4.1449 10.0417 4.70831 10.1418 5.30002H8.7796ZM7.3775 6.70002H4.6223C4.6874 7.68982 4.8862 8.55432 5.1585 9.18922C5.3265 9.58122 5.5085 9.85283 5.6744 10.0166C5.8375 10.1776 5.9467 10.2 5.9999 10.2C6.0531 10.2 6.1623 10.1776 6.3254 10.0166C6.492 9.85283 6.674 9.58052 6.8413 9.18922C7.1136 8.55432 7.3124 7.68982 7.3775 6.70002ZM8.1937 9.58263C8.5115 8.77973 8.7173 7.78222 8.7796 6.70002H10.1418C10.0417 7.29174 9.81607 7.85515 9.48004 8.35237C9.14401 8.84959 8.7054 9.26908 8.1937 9.58263V9.58263ZM3.8061 9.58263C3.4883 8.77903 3.2825 7.78222 3.2209 6.70002H1.858C1.95809 7.29174 2.18374 7.85515 2.51977 8.35237C2.85579 8.84959 3.29441 9.26908 3.8061 9.58263V9.58263Z"/>
                                        </svg>
                                        <p class="mt-1 uppercase ">IAAI</p>

                                    </div>


                                    <!-- yellow block -->
                                    <div class="absolute bottom-[-15px] left-[-7px]">
                                        <div
                                            class="inline-flex gap-1 bg-yellow-300 px-2 py-[5px] relative rounded-[3px]">
                                            <img src="img/card/fire.svg" alt="icon">
                                            <p class="text-xs font-medium text-gray-900 ">Reccomend</p>
                                            <div class="absolute top-[23px] left-0">
                                                <svg class="text-yellow-300" xmlns="http://www.w3.org/2000/svg"
                                                     id="Шар_2" fill="currentColor"
                                                     data-name="Шар 2" width="7" height="9.74" viewBox="0 0 7 9.74">

                                                    <path class="cls-1" fill-rule="evenodd" clip-rule="evenodd"
                                                          d="M7,9.74V0H0V1.38Z"/>
                                                </svg>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                                <!--block body card  -->
                                <div class="p-5 pb-2.5">
                                    <!-- model auto -->

                                    <div class="flex justify-between mb-[5px]">
                                        <a href="#"
                                           class=" w-fix leading-none text-lg font-semibold  text-gray-900 dark:text-white dark:hover:text-gray-300 max-w-[220px]">
                                            Geep Grand Cheroky Geep Grand Cheroky
                                        </a>
                                        <!-- heart -->
                                        <svg
                                            class="w-5 h-5 transition duration-300 transform fill-current text-white hover:text-red-500"
                                            width="23"
                                            height="20" viewBox="0 0 23 20" xmlns="http://www.w3.org/2000/svg"
                                            style="cursor: pointer;">
                                            <path
                                                d="M1.76037 4.75019C2.01478 4.13598 2.38769 3.57789 2.85779 3.10779C3.32789 2.63769 3.88598 2.26478 4.50019 2.01037C5.11441 1.75595 5.77272 1.625 6.43754 1.625C7.10237 1.625 7.76068 1.75595 8.37489 2.01037C8.98911 2.26478 9.5472 2.63769 10.0173 3.10779L11.5 4.59054L12.9828 3.10779C13.9322 2.15839 15.2199 1.62501 16.5625 1.62501C17.9052 1.62501 19.1929 2.15839 20.1423 3.10779C21.0917 4.0572 21.6251 5.34488 21.6251 6.68754C21.6251 8.03021 21.0917 9.31789 20.1423 10.2673L11.5 18.9095L2.85779 10.2673C2.38769 9.7972 2.01478 9.23911 1.76037 8.62489C1.50595 8.01068 1.375 7.35237 1.375 6.68754C1.375 6.02272 1.50595 5.36441 1.76037 4.75019Z"
                                                stroke="#EF4444" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                            </path>
                                        </svg>

                                    </div>


                                    <!-- price -->
                                    <div class="flex gap-x-1.5 mb-1">
                                        <p class="leading-tight text-xl font-semibold text-gray-900 dark:text-gray-400 ">
                                            $13.099</p>

                                        <!-- gray block -->
                                        <div class="flex bg-gray-100 rounded-full px-3 py-1 gap-1">
                                            <div><img class="mt-[1px]" src="img/card/status-online.svg" alt="icon">
                                            </div>

                                            <p class="font-medium text-xs  text-center font-medium ">Live bid</p>

                                        </div>

                                    </div>

                                    <p class="leading-tight text-xs font-medium text-gray-500 mb-1 ">Condition: Run &
                                        Drive Verified
                                    </p>
                                    <p class="leading-tight text-xs font-medium text-gray-500 mb-1 ">Primary Damage:
                                        front end</p>


                                </div>
                                <!-- underline -->
                                <div class="w-full h-px bg-black dark:bg-gray-300"></div>

                                <!-- block calendar -->
                                <div class=" py-2 p-5 flex justify-between">
                                    <!-- left calendar -->
                                    <div class="flex gap-1">
                                        <div>
                                            <img src="img/card/calendar.svg" alt="icon">
                                        </div>
                                        <p class="text-xs font-medium text-gray-900 dark:text-gray-300">2021 year</p>
                                    </div>
                                    <!-- right calendar -->
                                    <div class="flex gap-1">
                                        <div>
                                            <img src="img/card/calendar.svg" alt="icon">
                                        </div>
                                        <p class="text-xs font-medium text-gray-900 dark:text-gray-300">Fuel:
                                            gasoline</p>
                                    </div>
                                </div>

                            </article>


                            <!-- 1 card -->
                            <article
                                class="w-full bg-white rounded-[15px] border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 relative">
                                <div class="relative">
                                    <a href="#">
                                        <img class="rounded-t-[15px] w-full" src="img/card/01.png" alt="auto">

                                    </a>

                                    <!-- primary block -->
                                    <div
                                        class="text-white text-xs font-medium bg-primary-600 inline-flex px-4 py-0.5 pb-1 rounded-full absolute top-[13px] left-[15px]">
                                        <svg class="w-4 h-4 mt-1.5" aria-hidden="true"
                                             xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M1.858 5.30002H3.2202C3.2825 4.21782 3.4883 3.22102 3.8061 2.41742C3.29441 2.73097 2.85579 3.15046 2.51977 3.64768C2.18374 4.1449 1.95809 4.70831 1.858 5.30002ZM5.9999 0.400024C4.51469 0.400024 3.09031 0.990023 2.0401 2.04023C0.989901 3.09043 0.399902 4.51481 0.399902 6.00002C0.399902 7.48524 0.989901 8.90962 2.0401 9.95982C3.09031 11.01 4.51469 11.6 5.9999 11.6C7.48512 11.6 8.9095 11.01 9.9597 9.95982C11.0099 8.90962 11.5999 7.48524 11.5999 6.00002C11.5999 4.51481 11.0099 3.09043 9.9597 2.04023C8.9095 0.990023 7.48512 0.400024 5.9999 0.400024V0.400024ZM5.9999 1.80002C5.9467 1.80002 5.8375 1.82242 5.6744 1.98342C5.5078 2.14722 5.3265 2.41952 5.1585 2.81082C4.8862 3.44572 4.6874 4.31022 4.6223 5.30002H7.3775C7.3124 4.31022 7.1136 3.44572 6.8413 2.81082C6.6733 2.41882 6.4913 2.14722 6.3254 1.98342C6.1623 1.82242 6.0531 1.80002 5.9999 1.80002ZM8.7796 5.30002C8.7173 4.21782 8.5115 3.22102 8.1937 2.41742C8.7054 2.73097 9.14401 3.15046 9.48004 3.64768C9.81607 4.1449 10.0417 4.70831 10.1418 5.30002H8.7796ZM7.3775 6.70002H4.6223C4.6874 7.68982 4.8862 8.55432 5.1585 9.18922C5.3265 9.58122 5.5085 9.85283 5.6744 10.0166C5.8375 10.1776 5.9467 10.2 5.9999 10.2C6.0531 10.2 6.1623 10.1776 6.3254 10.0166C6.492 9.85283 6.674 9.58052 6.8413 9.18922C7.1136 8.55432 7.3124 7.68982 7.3775 6.70002ZM8.1937 9.58263C8.5115 8.77973 8.7173 7.78222 8.7796 6.70002H10.1418C10.0417 7.29174 9.81607 7.85515 9.48004 8.35237C9.14401 8.84959 8.7054 9.26908 8.1937 9.58263V9.58263ZM3.8061 9.58263C3.4883 8.77903 3.2825 7.78222 3.2209 6.70002H1.858C1.95809 7.29174 2.18374 7.85515 2.51977 8.35237C2.85579 8.84959 3.29441 9.26908 3.8061 9.58263V9.58263Z"/>
                                        </svg>
                                        <p class="mt-1 ">Copart</p>

                                    </div>


                                </div>


                                <!--block body card  -->
                                <div class="p-5 pb-2.5">
                                    <!-- model auto -->

                                    <div class="flex justify-between mb-[7px]">
                                        <a href="#"
                                           class=" w-fix leading-none text-lg font-semibold  text-gray-900 dark:text-white dark:hover:text-gray-300 max-w-[220px]">
                                            Geep Grand
                                            Cheroky
                                        </a>
                                        <!-- heart -->
                                        <svg
                                            class="w-5 h-5 transition duration-300 transform fill-current text-white hover:text-red-500"
                                            width="23"
                                            height="20" viewBox="0 0 23 20" xmlns="http://www.w3.org/2000/svg"
                                            style="cursor: pointer;">
                                            <path
                                                d="M1.76037 4.75019C2.01478 4.13598 2.38769 3.57789 2.85779 3.10779C3.32789 2.63769 3.88598 2.26478 4.50019 2.01037C5.11441 1.75595 5.77272 1.625 6.43754 1.625C7.10237 1.625 7.76068 1.75595 8.37489 2.01037C8.98911 2.26478 9.5472 2.63769 10.0173 3.10779L11.5 4.59054L12.9828 3.10779C13.9322 2.15839 15.2199 1.62501 16.5625 1.62501C17.9052 1.62501 19.1929 2.15839 20.1423 3.10779C21.0917 4.0572 21.6251 5.34488 21.6251 6.68754C21.6251 8.03021 21.0917 9.31789 20.1423 10.2673L11.5 18.9095L2.85779 10.2673C2.38769 9.7972 2.01478 9.23911 1.76037 8.62489C1.50595 8.01068 1.375 7.35237 1.375 6.68754C1.375 6.02272 1.50595 5.36441 1.76037 4.75019Z"
                                                stroke="#EF4444" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                            </path>
                                        </svg>


                                    </div>


                                    <!-- price -->
                                    <div class="flex gap-x-1.5 mb-1">
                                        <p class="leading-tight text-xl font-semibold text-gray-900 dark:text-gray-400 ">
                                            $13.099</p>

                                        <!-- gray block -->
                                        <div class="flex bg-gray-100 rounded-full px-3 py-1 gap-1">
                                            <div><img class="mt-[1px]" src="img/card/status-online.svg" alt="icon">
                                            </div>

                                            <p class="font-medium text-xs  text-center font-medium ">Live bid</p>

                                        </div>

                                    </div>

                                    <p class="leading-tight text-xs font-medium text-gray-500 mb-1 ">Condition: Run &
                                        Drive Verified
                                    </p>
                                    <p class="leading-tight text-xs font-medium text-gray-500 mb-1 ">Primary Damage:
                                        front end</p>
                                    <p class="leading-tight text-xs font-medium text-gray-500 mb-0 ">VIN:
                                        3VW2K7AJ3FM257322</p>


                                </div>
                                <!-- underline -->
                                <div class="w-full h-px bg-black dark:bg-gray-300"></div>

                                <!-- block calendar -->
                                <div class=" py-2 p-5 flex justify-between">
                                    <!-- left calendar -->
                                    <div class="flex gap-1">
                                        <div>
                                            <img src="img/card/calendar.svg" alt="icon">
                                        </div>
                                        <p class="text-xs font-medium text-gray-900 dark:text-gray-300">2021 year</p>
                                    </div>
                                    <!-- right calendar -->
                                    <div class="flex gap-1">
                                        <div>
                                            <img src="img/card/calendar.svg" alt="icon">
                                        </div>
                                        <p class="text-xs font-medium text-gray-900 dark:text-gray-300">Fuel:
                                            gasoline</p>
                                    </div>
                                </div>

                            </article>
                            <!-- 1 card -->
                            <article
                                class="w-full bg-white rounded-[15px] border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 relative">
                                <div class="relative">
                                    <a href="#">
                                        <img class="rounded-t-[15px] w-full" src="img/card/01.png" alt="auto">

                                    </a>

                                    <!-- primary block -->
                                    <div
                                        class="text-white text-xs font-medium bg-primary-600 inline-flex px-4 py-0.5 pb-1 rounded-full absolute top-[13px] left-[15px]">
                                        <svg class="w-4 h-4 mt-1.5" aria-hidden="true"
                                             xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M1.858 5.30002H3.2202C3.2825 4.21782 3.4883 3.22102 3.8061 2.41742C3.29441 2.73097 2.85579 3.15046 2.51977 3.64768C2.18374 4.1449 1.95809 4.70831 1.858 5.30002ZM5.9999 0.400024C4.51469 0.400024 3.09031 0.990023 2.0401 2.04023C0.989901 3.09043 0.399902 4.51481 0.399902 6.00002C0.399902 7.48524 0.989901 8.90962 2.0401 9.95982C3.09031 11.01 4.51469 11.6 5.9999 11.6C7.48512 11.6 8.9095 11.01 9.9597 9.95982C11.0099 8.90962 11.5999 7.48524 11.5999 6.00002C11.5999 4.51481 11.0099 3.09043 9.9597 2.04023C8.9095 0.990023 7.48512 0.400024 5.9999 0.400024V0.400024ZM5.9999 1.80002C5.9467 1.80002 5.8375 1.82242 5.6744 1.98342C5.5078 2.14722 5.3265 2.41952 5.1585 2.81082C4.8862 3.44572 4.6874 4.31022 4.6223 5.30002H7.3775C7.3124 4.31022 7.1136 3.44572 6.8413 2.81082C6.6733 2.41882 6.4913 2.14722 6.3254 1.98342C6.1623 1.82242 6.0531 1.80002 5.9999 1.80002ZM8.7796 5.30002C8.7173 4.21782 8.5115 3.22102 8.1937 2.41742C8.7054 2.73097 9.14401 3.15046 9.48004 3.64768C9.81607 4.1449 10.0417 4.70831 10.1418 5.30002H8.7796ZM7.3775 6.70002H4.6223C4.6874 7.68982 4.8862 8.55432 5.1585 9.18922C5.3265 9.58122 5.5085 9.85283 5.6744 10.0166C5.8375 10.1776 5.9467 10.2 5.9999 10.2C6.0531 10.2 6.1623 10.1776 6.3254 10.0166C6.492 9.85283 6.674 9.58052 6.8413 9.18922C7.1136 8.55432 7.3124 7.68982 7.3775 6.70002ZM8.1937 9.58263C8.5115 8.77973 8.7173 7.78222 8.7796 6.70002H10.1418C10.0417 7.29174 9.81607 7.85515 9.48004 8.35237C9.14401 8.84959 8.7054 9.26908 8.1937 9.58263V9.58263ZM3.8061 9.58263C3.4883 8.77903 3.2825 7.78222 3.2209 6.70002H1.858C1.95809 7.29174 2.18374 7.85515 2.51977 8.35237C2.85579 8.84959 3.29441 9.26908 3.8061 9.58263V9.58263Z"/>
                                        </svg>
                                        <p class="mt-1 ">Copart</p>

                                    </div>


                                </div>


                                <!--block body card  -->
                                <div class="p-5 pb-2.5">
                                    <!-- model auto -->

                                    <div class="flex justify-between mb-[7px]">
                                        <a href="#"
                                           class=" w-fix leading-none text-lg font-semibold  text-gray-900 dark:text-white dark:hover:text-gray-300 max-w-[220px]">
                                            Geep Grand Cheroky
                                        </a>
                                        <!-- heart -->
                                        <svg
                                            class="w-5 h-5 transition duration-300 transform fill-current text-white hover:text-red-500"
                                            width="23"
                                            height="20" viewBox="0 0 23 20" xmlns="http://www.w3.org/2000/svg"
                                            style="cursor: pointer;">
                                            <path
                                                d="M1.76037 4.75019C2.01478 4.13598 2.38769 3.57789 2.85779 3.10779C3.32789 2.63769 3.88598 2.26478 4.50019 2.01037C5.11441 1.75595 5.77272 1.625 6.43754 1.625C7.10237 1.625 7.76068 1.75595 8.37489 2.01037C8.98911 2.26478 9.5472 2.63769 10.0173 3.10779L11.5 4.59054L12.9828 3.10779C13.9322 2.15839 15.2199 1.62501 16.5625 1.62501C17.9052 1.62501 19.1929 2.15839 20.1423 3.10779C21.0917 4.0572 21.6251 5.34488 21.6251 6.68754C21.6251 8.03021 21.0917 9.31789 20.1423 10.2673L11.5 18.9095L2.85779 10.2673C2.38769 9.7972 2.01478 9.23911 1.76037 8.62489C1.50595 8.01068 1.375 7.35237 1.375 6.68754C1.375 6.02272 1.50595 5.36441 1.76037 4.75019Z"
                                                stroke="#EF4444" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                            </path>
                                        </svg>


                                    </div>


                                    <!-- price -->
                                    <div class="flex gap-x-1.5 mb-1">
                                        <p class="leading-tight text-xl font-semibold text-gray-900 dark:text-gray-400 ">
                                            $13.099</p>

                                        <!-- gray block -->
                                        <div class="flex bg-gray-100 rounded-full px-3 py-1 gap-1">
                                            <div><img class="mt-[1px]" src="img/card/status-online.svg" alt="icon">
                                            </div>

                                            <p class="font-medium text-xs  text-center font-medium ">Live bid</p>

                                        </div>

                                    </div>

                                    <p class="leading-tight text-xs font-medium text-gray-500 mb-1 ">Condition: Run &
                                        Drive Verified
                                    </p>
                                    <p class="leading-tight text-xs font-medium text-gray-500 mb-1 ">Primary Damage:
                                        front end</p>
                                    <p class="leading-tight text-xs font-medium text-gray-500 mb-0 ">VIN:
                                        3VW2K7AJ3FM257322</p>


                                </div>
                                <!-- underline -->
                                <div class="w-full h-px bg-black dark:bg-gray-300"></div>

                                <!-- block calendar -->
                                <div class=" py-2 p-5 flex justify-between">
                                    <!-- left calendar -->
                                    <div class="flex gap-1">
                                        <div>
                                            <img src="img/card/calendar.svg" alt="icon">
                                        </div>
                                        <p class="text-xs font-medium text-gray-900 dark:text-gray-300">2021 year</p>
                                    </div>
                                    <!-- right calendar -->
                                    <div class="flex gap-1">
                                        <div>
                                            <img src="img/card/calendar.svg" alt="icon">
                                        </div>
                                        <p class="text-xs font-medium text-gray-900 dark:text-gray-300">Fuel:
                                            gasoline</p>
                                    </div>
                                </div>

                            </article>


                            <!-- 2 card -->
                            <article
                                class="w-full bg-white rounded-[15px] border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 relative">
                                <div class="relative">
                                    <a href="#">
                                        <img class="rounded-t-[15px] w-full" src="img/card/01.png" alt="auto">

                                    </a>

                                    <!-- red block -->
                                    <div
                                        class="text-white text-xs font-medium bg-red-600 inline-flex px-4 py-0.5 pb-1 rounded-full absolute top-[13px] left-[15px]">
                                        <svg class="w-4 h-4 mt-1.5" aria-hidden="true"
                                             xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M1.858 5.30002H3.2202C3.2825 4.21782 3.4883 3.22102 3.8061 2.41742C3.29441 2.73097 2.85579 3.15046 2.51977 3.64768C2.18374 4.1449 1.95809 4.70831 1.858 5.30002ZM5.9999 0.400024C4.51469 0.400024 3.09031 0.990023 2.0401 2.04023C0.989901 3.09043 0.399902 4.51481 0.399902 6.00002C0.399902 7.48524 0.989901 8.90962 2.0401 9.95982C3.09031 11.01 4.51469 11.6 5.9999 11.6C7.48512 11.6 8.9095 11.01 9.9597 9.95982C11.0099 8.90962 11.5999 7.48524 11.5999 6.00002C11.5999 4.51481 11.0099 3.09043 9.9597 2.04023C8.9095 0.990023 7.48512 0.400024 5.9999 0.400024V0.400024ZM5.9999 1.80002C5.9467 1.80002 5.8375 1.82242 5.6744 1.98342C5.5078 2.14722 5.3265 2.41952 5.1585 2.81082C4.8862 3.44572 4.6874 4.31022 4.6223 5.30002H7.3775C7.3124 4.31022 7.1136 3.44572 6.8413 2.81082C6.6733 2.41882 6.4913 2.14722 6.3254 1.98342C6.1623 1.82242 6.0531 1.80002 5.9999 1.80002ZM8.7796 5.30002C8.7173 4.21782 8.5115 3.22102 8.1937 2.41742C8.7054 2.73097 9.14401 3.15046 9.48004 3.64768C9.81607 4.1449 10.0417 4.70831 10.1418 5.30002H8.7796ZM7.3775 6.70002H4.6223C4.6874 7.68982 4.8862 8.55432 5.1585 9.18922C5.3265 9.58122 5.5085 9.85283 5.6744 10.0166C5.8375 10.1776 5.9467 10.2 5.9999 10.2C6.0531 10.2 6.1623 10.1776 6.3254 10.0166C6.492 9.85283 6.674 9.58052 6.8413 9.18922C7.1136 8.55432 7.3124 7.68982 7.3775 6.70002ZM8.1937 9.58263C8.5115 8.77973 8.7173 7.78222 8.7796 6.70002H10.1418C10.0417 7.29174 9.81607 7.85515 9.48004 8.35237C9.14401 8.84959 8.7054 9.26908 8.1937 9.58263V9.58263ZM3.8061 9.58263C3.4883 8.77903 3.2825 7.78222 3.2209 6.70002H1.858C1.95809 7.29174 2.18374 7.85515 2.51977 8.35237C2.85579 8.84959 3.29441 9.26908 3.8061 9.58263V9.58263Z"/>
                                        </svg>
                                        <p class="mt-1 uppercase ">IAAI</p>

                                    </div>


                                    <!-- yellow block -->
                                    <div class="absolute bottom-[-15px] left-[-7px]">
                                        <div
                                            class="inline-flex gap-1 bg-yellow-300 px-2 py-[5px] relative rounded-[3px]">
                                            <img src="img/card/fire.svg" alt="icon">
                                            <p class="text-xs font-medium text-gray-900 ">Reccomend</p>
                                            <div class="absolute top-[23px] left-0">
                                                <svg class="text-yellow-300" xmlns="http://www.w3.org/2000/svg"
                                                     id="Шар_2" fill="currentColor"
                                                     data-name="Шар 2" width="7" height="9.74" viewBox="0 0 7 9.74">

                                                    <path class="cls-1" fill-rule="evenodd" clip-rule="evenodd"
                                                          d="M7,9.74V0H0V1.38Z"/>
                                                </svg>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                                <!--block body card  -->
                                <div class="p-5 pb-2.5">
                                    <!-- model auto -->

                                    <div class="flex justify-between mb-[5px]">
                                        <a href="#"
                                           class=" w-fix leading-none text-lg font-semibold  text-gray-900 dark:text-white dark:hover:text-gray-300 max-w-[220px]">
                                            Geep Grand Cheroky Geep Grand Cheroky
                                        </a>
                                        <!-- heart -->
                                        <svg
                                            class="w-5 h-5 transition duration-300 transform fill-current text-white hover:text-red-500"
                                            width="23"
                                            height="20" viewBox="0 0 23 20" xmlns="http://www.w3.org/2000/svg"
                                            style="cursor: pointer;">
                                            <path
                                                d="M1.76037 4.75019C2.01478 4.13598 2.38769 3.57789 2.85779 3.10779C3.32789 2.63769 3.88598 2.26478 4.50019 2.01037C5.11441 1.75595 5.77272 1.625 6.43754 1.625C7.10237 1.625 7.76068 1.75595 8.37489 2.01037C8.98911 2.26478 9.5472 2.63769 10.0173 3.10779L11.5 4.59054L12.9828 3.10779C13.9322 2.15839 15.2199 1.62501 16.5625 1.62501C17.9052 1.62501 19.1929 2.15839 20.1423 3.10779C21.0917 4.0572 21.6251 5.34488 21.6251 6.68754C21.6251 8.03021 21.0917 9.31789 20.1423 10.2673L11.5 18.9095L2.85779 10.2673C2.38769 9.7972 2.01478 9.23911 1.76037 8.62489C1.50595 8.01068 1.375 7.35237 1.375 6.68754C1.375 6.02272 1.50595 5.36441 1.76037 4.75019Z"
                                                stroke="#EF4444" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                            </path>
                                        </svg>

                                    </div>


                                    <!-- price -->
                                    <div class="flex gap-x-1.5 mb-1">
                                        <p class="leading-tight text-xl font-semibold text-gray-900 dark:text-gray-400 ">
                                            $13.099</p>

                                        <!-- gray block -->
                                        <div class="flex bg-gray-100 rounded-full px-3 py-1 gap-1">
                                            <div><img class="mt-[1px]" src="img/card/status-online.svg" alt="icon">
                                            </div>

                                            <p class="font-medium text-xs  text-center font-medium ">Live bid</p>

                                        </div>

                                    </div>

                                    <p class="leading-tight text-xs font-medium text-gray-500 mb-1 ">Condition: Run &
                                        Drive Verified
                                    </p>
                                    <p class="leading-tight text-xs font-medium text-gray-500 mb-1 ">Primary Damage:
                                        front end</p>


                                </div>
                                <!-- underline -->
                                <div class="w-full h-px bg-black dark:bg-gray-300"></div>

                                <!-- block calendar -->
                                <div class=" py-2 p-5 flex justify-between">
                                    <!-- left calendar -->
                                    <div class="flex gap-1">
                                        <div>
                                            <img src="img/card/calendar.svg" alt="icon">
                                        </div>
                                        <p class="text-xs font-medium text-gray-900 dark:text-gray-300">2021 year</p>
                                    </div>
                                    <!-- right calendar -->
                                    <div class="flex gap-1">
                                        <div>
                                            <img src="img/card/calendar.svg" alt="icon">
                                        </div>
                                        <p class="text-xs font-medium text-gray-900 dark:text-gray-300">Fuel:
                                            gasoline</p>
                                    </div>
                                </div>

                            </article>


                            <!-- 1 card -->
                            <article
                                class="w-full bg-white rounded-[15px] border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 relative">
                                <div class="relative">
                                    <a href="#">
                                        <img class="rounded-t-[15px] w-full" src="img/card/01.png" alt="auto">

                                    </a>

                                    <!-- primary block -->
                                    <div
                                        class="text-white text-xs font-medium bg-primary-600 inline-flex px-4 py-0.5 pb-1 rounded-full absolute top-[13px] left-[15px]">
                                        <svg class="w-4 h-4 mt-1.5" aria-hidden="true"
                                             xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M1.858 5.30002H3.2202C3.2825 4.21782 3.4883 3.22102 3.8061 2.41742C3.29441 2.73097 2.85579 3.15046 2.51977 3.64768C2.18374 4.1449 1.95809 4.70831 1.858 5.30002ZM5.9999 0.400024C4.51469 0.400024 3.09031 0.990023 2.0401 2.04023C0.989901 3.09043 0.399902 4.51481 0.399902 6.00002C0.399902 7.48524 0.989901 8.90962 2.0401 9.95982C3.09031 11.01 4.51469 11.6 5.9999 11.6C7.48512 11.6 8.9095 11.01 9.9597 9.95982C11.0099 8.90962 11.5999 7.48524 11.5999 6.00002C11.5999 4.51481 11.0099 3.09043 9.9597 2.04023C8.9095 0.990023 7.48512 0.400024 5.9999 0.400024V0.400024ZM5.9999 1.80002C5.9467 1.80002 5.8375 1.82242 5.6744 1.98342C5.5078 2.14722 5.3265 2.41952 5.1585 2.81082C4.8862 3.44572 4.6874 4.31022 4.6223 5.30002H7.3775C7.3124 4.31022 7.1136 3.44572 6.8413 2.81082C6.6733 2.41882 6.4913 2.14722 6.3254 1.98342C6.1623 1.82242 6.0531 1.80002 5.9999 1.80002ZM8.7796 5.30002C8.7173 4.21782 8.5115 3.22102 8.1937 2.41742C8.7054 2.73097 9.14401 3.15046 9.48004 3.64768C9.81607 4.1449 10.0417 4.70831 10.1418 5.30002H8.7796ZM7.3775 6.70002H4.6223C4.6874 7.68982 4.8862 8.55432 5.1585 9.18922C5.3265 9.58122 5.5085 9.85283 5.6744 10.0166C5.8375 10.1776 5.9467 10.2 5.9999 10.2C6.0531 10.2 6.1623 10.1776 6.3254 10.0166C6.492 9.85283 6.674 9.58052 6.8413 9.18922C7.1136 8.55432 7.3124 7.68982 7.3775 6.70002ZM8.1937 9.58263C8.5115 8.77973 8.7173 7.78222 8.7796 6.70002H10.1418C10.0417 7.29174 9.81607 7.85515 9.48004 8.35237C9.14401 8.84959 8.7054 9.26908 8.1937 9.58263V9.58263ZM3.8061 9.58263C3.4883 8.77903 3.2825 7.78222 3.2209 6.70002H1.858C1.95809 7.29174 2.18374 7.85515 2.51977 8.35237C2.85579 8.84959 3.29441 9.26908 3.8061 9.58263V9.58263Z"/>
                                        </svg>
                                        <p class="mt-1 ">Copart</p>

                                    </div>


                                </div>


                                <!--block body card  -->
                                <div class="p-5 pb-2.5">
                                    <!-- model auto -->

                                    <div class="flex justify-between mb-[7px]">
                                        <a href="#"
                                           class=" w-fix leading-none text-lg font-semibold  text-gray-900 dark:text-white dark:hover:text-gray-300 max-w-[220px]">
                                            Geep Grand
                                            Cheroky
                                        </a>
                                        <!-- heart -->
                                        <svg
                                            class="w-5 h-5 transition duration-300 transform fill-current text-white hover:text-red-500"
                                            width="23"
                                            height="20" viewBox="0 0 23 20" xmlns="http://www.w3.org/2000/svg"
                                            style="cursor: pointer;">
                                            <path
                                                d="M1.76037 4.75019C2.01478 4.13598 2.38769 3.57789 2.85779 3.10779C3.32789 2.63769 3.88598 2.26478 4.50019 2.01037C5.11441 1.75595 5.77272 1.625 6.43754 1.625C7.10237 1.625 7.76068 1.75595 8.37489 2.01037C8.98911 2.26478 9.5472 2.63769 10.0173 3.10779L11.5 4.59054L12.9828 3.10779C13.9322 2.15839 15.2199 1.62501 16.5625 1.62501C17.9052 1.62501 19.1929 2.15839 20.1423 3.10779C21.0917 4.0572 21.6251 5.34488 21.6251 6.68754C21.6251 8.03021 21.0917 9.31789 20.1423 10.2673L11.5 18.9095L2.85779 10.2673C2.38769 9.7972 2.01478 9.23911 1.76037 8.62489C1.50595 8.01068 1.375 7.35237 1.375 6.68754C1.375 6.02272 1.50595 5.36441 1.76037 4.75019Z"
                                                stroke="#EF4444" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                            </path>
                                        </svg>


                                    </div>


                                    <!-- price -->
                                    <div class="flex gap-x-1.5 mb-1">
                                        <p class="leading-tight text-xl font-semibold text-gray-900 dark:text-gray-400 ">
                                            $13.099</p>

                                        <!-- gray block -->
                                        <div class="flex bg-gray-100 rounded-full px-3 py-1 gap-1">
                                            <div><img class="mt-[1px]" src="img/card/status-online.svg" alt="icon">
                                            </div>

                                            <p class="font-medium text-xs  text-center font-medium ">Live bid</p>

                                        </div>

                                    </div>

                                    <p class="leading-tight text-xs font-medium text-gray-500 mb-1 ">Condition: Run &
                                        Drive Verified
                                    </p>
                                    <p class="leading-tight text-xs font-medium text-gray-500 mb-1 ">Primary Damage:
                                        front end</p>
                                    <p class="leading-tight text-xs font-medium text-gray-500 mb-0 ">VIN:
                                        3VW2K7AJ3FM257322</p>


                                </div>
                                <!-- underline -->
                                <div class="w-full h-px bg-black dark:bg-gray-300"></div>

                                <!-- block calendar -->
                                <div class=" py-2 p-5 flex justify-between">
                                    <!-- left calendar -->
                                    <div class="flex gap-1">
                                        <div>
                                            <img src="img/card/calendar.svg" alt="icon">
                                        </div>
                                        <p class="text-xs font-medium text-gray-900 dark:text-gray-300">2021 year</p>
                                    </div>
                                    <!-- right calendar -->
                                    <div class="flex gap-1">
                                        <div>
                                            <img src="img/card/calendar.svg" alt="icon">
                                        </div>
                                        <p class="text-xs font-medium text-gray-900 dark:text-gray-300">Fuel:
                                            gasoline</p>
                                    </div>
                                </div>

                            </article>
                            <!-- 1 card -->
                            <article
                                class="w-full bg-white rounded-[15px] border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 relative">
                                <div class="relative">
                                    <a href="#">
                                        <img class="rounded-t-[15px] w-full" src="img/card/01.png" alt="auto">

                                    </a>

                                    <!-- primary block -->
                                    <div
                                        class="text-white text-xs font-medium bg-primary-600 inline-flex px-4 py-0.5 pb-1 rounded-full absolute top-[13px] left-[15px]">
                                        <svg class="w-4 h-4 mt-1.5" aria-hidden="true"
                                             xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M1.858 5.30002H3.2202C3.2825 4.21782 3.4883 3.22102 3.8061 2.41742C3.29441 2.73097 2.85579 3.15046 2.51977 3.64768C2.18374 4.1449 1.95809 4.70831 1.858 5.30002ZM5.9999 0.400024C4.51469 0.400024 3.09031 0.990023 2.0401 2.04023C0.989901 3.09043 0.399902 4.51481 0.399902 6.00002C0.399902 7.48524 0.989901 8.90962 2.0401 9.95982C3.09031 11.01 4.51469 11.6 5.9999 11.6C7.48512 11.6 8.9095 11.01 9.9597 9.95982C11.0099 8.90962 11.5999 7.48524 11.5999 6.00002C11.5999 4.51481 11.0099 3.09043 9.9597 2.04023C8.9095 0.990023 7.48512 0.400024 5.9999 0.400024V0.400024ZM5.9999 1.80002C5.9467 1.80002 5.8375 1.82242 5.6744 1.98342C5.5078 2.14722 5.3265 2.41952 5.1585 2.81082C4.8862 3.44572 4.6874 4.31022 4.6223 5.30002H7.3775C7.3124 4.31022 7.1136 3.44572 6.8413 2.81082C6.6733 2.41882 6.4913 2.14722 6.3254 1.98342C6.1623 1.82242 6.0531 1.80002 5.9999 1.80002ZM8.7796 5.30002C8.7173 4.21782 8.5115 3.22102 8.1937 2.41742C8.7054 2.73097 9.14401 3.15046 9.48004 3.64768C9.81607 4.1449 10.0417 4.70831 10.1418 5.30002H8.7796ZM7.3775 6.70002H4.6223C4.6874 7.68982 4.8862 8.55432 5.1585 9.18922C5.3265 9.58122 5.5085 9.85283 5.6744 10.0166C5.8375 10.1776 5.9467 10.2 5.9999 10.2C6.0531 10.2 6.1623 10.1776 6.3254 10.0166C6.492 9.85283 6.674 9.58052 6.8413 9.18922C7.1136 8.55432 7.3124 7.68982 7.3775 6.70002ZM8.1937 9.58263C8.5115 8.77973 8.7173 7.78222 8.7796 6.70002H10.1418C10.0417 7.29174 9.81607 7.85515 9.48004 8.35237C9.14401 8.84959 8.7054 9.26908 8.1937 9.58263V9.58263ZM3.8061 9.58263C3.4883 8.77903 3.2825 7.78222 3.2209 6.70002H1.858C1.95809 7.29174 2.18374 7.85515 2.51977 8.35237C2.85579 8.84959 3.29441 9.26908 3.8061 9.58263V9.58263Z"/>
                                        </svg>
                                        <p class="mt-1 ">Copart</p>

                                    </div>


                                </div>


                                <!--block body card  -->
                                <div class="p-5 pb-2.5">
                                    <!-- model auto -->

                                    <div class="flex justify-between mb-[7px]">
                                        <a href="#"
                                           class=" w-fix leading-none text-lg font-semibold  text-gray-900 dark:text-white dark:hover:text-gray-300 max-w-[220px]">
                                            Geep Grand Cheroky
                                        </a>
                                        <!-- heart -->
                                        <svg
                                            class="w-5 h-5 transition duration-300 transform fill-current text-white hover:text-red-500"
                                            width="23"
                                            height="20" viewBox="0 0 23 20" xmlns="http://www.w3.org/2000/svg"
                                            style="cursor: pointer;">
                                            <path
                                                d="M1.76037 4.75019C2.01478 4.13598 2.38769 3.57789 2.85779 3.10779C3.32789 2.63769 3.88598 2.26478 4.50019 2.01037C5.11441 1.75595 5.77272 1.625 6.43754 1.625C7.10237 1.625 7.76068 1.75595 8.37489 2.01037C8.98911 2.26478 9.5472 2.63769 10.0173 3.10779L11.5 4.59054L12.9828 3.10779C13.9322 2.15839 15.2199 1.62501 16.5625 1.62501C17.9052 1.62501 19.1929 2.15839 20.1423 3.10779C21.0917 4.0572 21.6251 5.34488 21.6251 6.68754C21.6251 8.03021 21.0917 9.31789 20.1423 10.2673L11.5 18.9095L2.85779 10.2673C2.38769 9.7972 2.01478 9.23911 1.76037 8.62489C1.50595 8.01068 1.375 7.35237 1.375 6.68754C1.375 6.02272 1.50595 5.36441 1.76037 4.75019Z"
                                                stroke="#EF4444" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                            </path>
                                        </svg>


                                    </div>


                                    <!-- price -->
                                    <div class="flex gap-x-1.5 mb-1">
                                        <p class="leading-tight text-xl font-semibold text-gray-900 dark:text-gray-400 ">
                                            $13.099</p>

                                        <!-- gray block -->
                                        <div class="flex bg-gray-100 rounded-full px-3 py-1 gap-1">
                                            <div><img class="mt-[1px]" src="img/card/status-online.svg" alt="icon">
                                            </div>

                                            <p class="font-medium text-xs  text-center font-medium ">Live bid</p>

                                        </div>

                                    </div>

                                    <p class="leading-tight text-xs font-medium text-gray-500 mb-1 ">Condition: Run &
                                        Drive Verified
                                    </p>
                                    <p class="leading-tight text-xs font-medium text-gray-500 mb-1 ">Primary Damage:
                                        front end</p>
                                    <p class="leading-tight text-xs font-medium text-gray-500 mb-0 ">VIN:
                                        3VW2K7AJ3FM257322</p>


                                </div>
                                <!-- underline -->
                                <div class="w-full h-px bg-black dark:bg-gray-300"></div>

                                <!-- block calendar -->
                                <div class=" py-2 p-5 flex justify-between">
                                    <!-- left calendar -->
                                    <div class="flex gap-1">
                                        <div>
                                            <img src="img/card/calendar.svg" alt="icon">
                                        </div>
                                        <p class="text-xs font-medium text-gray-900 dark:text-gray-300">2021 year</p>
                                    </div>
                                    <!-- right calendar -->
                                    <div class="flex gap-1">
                                        <div>
                                            <img src="img/card/calendar.svg" alt="icon">
                                        </div>
                                        <p class="text-xs font-medium text-gray-900 dark:text-gray-300">Fuel:
                                            gasoline</p>
                                    </div>
                                </div>

                            </article>


                            <!-- 2 card -->
                            <article
                                class="w-full bg-white rounded-[15px] border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 relative">
                                <div class="relative">
                                    <a href="#">
                                        <img class="rounded-t-[15px] w-full" src="img/card/01.png" alt="auto">

                                    </a>

                                    <!-- red block -->
                                    <div
                                        class="text-white text-xs font-medium bg-red-600 inline-flex px-4 py-0.5 pb-1 rounded-full absolute top-[13px] left-[15px]">
                                        <svg class="w-4 h-4 mt-1.5" aria-hidden="true"
                                             xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M1.858 5.30002H3.2202C3.2825 4.21782 3.4883 3.22102 3.8061 2.41742C3.29441 2.73097 2.85579 3.15046 2.51977 3.64768C2.18374 4.1449 1.95809 4.70831 1.858 5.30002ZM5.9999 0.400024C4.51469 0.400024 3.09031 0.990023 2.0401 2.04023C0.989901 3.09043 0.399902 4.51481 0.399902 6.00002C0.399902 7.48524 0.989901 8.90962 2.0401 9.95982C3.09031 11.01 4.51469 11.6 5.9999 11.6C7.48512 11.6 8.9095 11.01 9.9597 9.95982C11.0099 8.90962 11.5999 7.48524 11.5999 6.00002C11.5999 4.51481 11.0099 3.09043 9.9597 2.04023C8.9095 0.990023 7.48512 0.400024 5.9999 0.400024V0.400024ZM5.9999 1.80002C5.9467 1.80002 5.8375 1.82242 5.6744 1.98342C5.5078 2.14722 5.3265 2.41952 5.1585 2.81082C4.8862 3.44572 4.6874 4.31022 4.6223 5.30002H7.3775C7.3124 4.31022 7.1136 3.44572 6.8413 2.81082C6.6733 2.41882 6.4913 2.14722 6.3254 1.98342C6.1623 1.82242 6.0531 1.80002 5.9999 1.80002ZM8.7796 5.30002C8.7173 4.21782 8.5115 3.22102 8.1937 2.41742C8.7054 2.73097 9.14401 3.15046 9.48004 3.64768C9.81607 4.1449 10.0417 4.70831 10.1418 5.30002H8.7796ZM7.3775 6.70002H4.6223C4.6874 7.68982 4.8862 8.55432 5.1585 9.18922C5.3265 9.58122 5.5085 9.85283 5.6744 10.0166C5.8375 10.1776 5.9467 10.2 5.9999 10.2C6.0531 10.2 6.1623 10.1776 6.3254 10.0166C6.492 9.85283 6.674 9.58052 6.8413 9.18922C7.1136 8.55432 7.3124 7.68982 7.3775 6.70002ZM8.1937 9.58263C8.5115 8.77973 8.7173 7.78222 8.7796 6.70002H10.1418C10.0417 7.29174 9.81607 7.85515 9.48004 8.35237C9.14401 8.84959 8.7054 9.26908 8.1937 9.58263V9.58263ZM3.8061 9.58263C3.4883 8.77903 3.2825 7.78222 3.2209 6.70002H1.858C1.95809 7.29174 2.18374 7.85515 2.51977 8.35237C2.85579 8.84959 3.29441 9.26908 3.8061 9.58263V9.58263Z"/>
                                        </svg>
                                        <p class="mt-1 uppercase ">IAAI</p>

                                    </div>


                                    <!-- yellow block -->
                                    <div class="absolute bottom-[-15px] left-[-7px]">
                                        <div
                                            class="inline-flex gap-1 bg-yellow-300 px-2 py-[5px] relative rounded-[3px]">
                                            <img src="img/card/fire.svg" alt="icon">
                                            <p class="text-xs font-medium text-gray-900 ">Reccomend</p>
                                            <div class="absolute top-[23px] left-0">
                                                <svg class="text-yellow-300" xmlns="http://www.w3.org/2000/svg"
                                                     id="Шар_2" fill="currentColor"
                                                     data-name="Шар 2" width="7" height="9.74" viewBox="0 0 7 9.74">

                                                    <path class="cls-1" fill-rule="evenodd" clip-rule="evenodd"
                                                          d="M7,9.74V0H0V1.38Z"/>
                                                </svg>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                                <!--block body card  -->
                                <div class="p-5 pb-2.5">
                                    <!-- model auto -->

                                    <div class="flex justify-between mb-[5px]">
                                        <a href="#"
                                           class=" w-fix leading-none text-lg font-semibold  text-gray-900 dark:text-white dark:hover:text-gray-300 max-w-[220px]">
                                            Geep Grand Cheroky Geep Grand Cheroky
                                        </a>
                                        <!-- heart -->
                                        <svg
                                            class="w-5 h-5 transition duration-300 transform fill-current text-white hover:text-red-500"
                                            width="23"
                                            height="20" viewBox="0 0 23 20" xmlns="http://www.w3.org/2000/svg"
                                            style="cursor: pointer;">
                                            <path
                                                d="M1.76037 4.75019C2.01478 4.13598 2.38769 3.57789 2.85779 3.10779C3.32789 2.63769 3.88598 2.26478 4.50019 2.01037C5.11441 1.75595 5.77272 1.625 6.43754 1.625C7.10237 1.625 7.76068 1.75595 8.37489 2.01037C8.98911 2.26478 9.5472 2.63769 10.0173 3.10779L11.5 4.59054L12.9828 3.10779C13.9322 2.15839 15.2199 1.62501 16.5625 1.62501C17.9052 1.62501 19.1929 2.15839 20.1423 3.10779C21.0917 4.0572 21.6251 5.34488 21.6251 6.68754C21.6251 8.03021 21.0917 9.31789 20.1423 10.2673L11.5 18.9095L2.85779 10.2673C2.38769 9.7972 2.01478 9.23911 1.76037 8.62489C1.50595 8.01068 1.375 7.35237 1.375 6.68754C1.375 6.02272 1.50595 5.36441 1.76037 4.75019Z"
                                                stroke="#EF4444" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                            </path>
                                        </svg>

                                    </div>


                                    <!-- price -->
                                    <div class="flex gap-x-1.5 mb-1">
                                        <p class="leading-tight text-xl font-semibold text-gray-900 dark:text-gray-400 ">
                                            $13.099</p>

                                        <!-- gray block -->
                                        <div class="flex bg-gray-100 rounded-full px-3 py-1 gap-1">
                                            <div><img class="mt-[1px]" src="img/card/status-online.svg" alt="icon">
                                            </div>

                                            <p class="font-medium text-xs  text-center font-medium ">Live bid</p>

                                        </div>

                                    </div>

                                    <p class="leading-tight text-xs font-medium text-gray-500 mb-1 ">Condition: Run &
                                        Drive Verified
                                    </p>
                                    <p class="leading-tight text-xs font-medium text-gray-500 mb-1 ">Primary Damage:
                                        front end</p>


                                </div>
                                <!-- underline -->
                                <div class="w-full h-px bg-black dark:bg-gray-300"></div>

                                <!-- block calendar -->
                                <div class=" py-2 p-5 flex justify-between">
                                    <!-- left calendar -->
                                    <div class="flex gap-1">
                                        <div>
                                            <img src="img/card/calendar.svg" alt="icon">
                                        </div>
                                        <p class="text-xs font-medium text-gray-900 dark:text-gray-300">2021 year</p>
                                    </div>
                                    <!-- right calendar -->
                                    <div class="flex gap-1">
                                        <div>
                                            <img src="img/card/calendar.svg" alt="icon">
                                        </div>
                                        <p class="text-xs font-medium text-gray-900 dark:text-gray-300">Fuel:
                                            gasoline</p>
                                    </div>
                                </div>

                            </article>


                            <!-- 1 card -->
                            <article
                                class="w-full bg-white rounded-[15px] border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 relative">
                                <div class="relative">
                                    <a href="#">
                                        <img class="rounded-t-[15px] w-full" src="img/card/01.png" alt="auto">

                                    </a>

                                    <!-- primary block -->
                                    <div
                                        class="text-white text-xs font-medium bg-primary-600 inline-flex px-4 py-0.5 pb-1 rounded-full absolute top-[13px] left-[15px]">
                                        <svg class="w-4 h-4 mt-1.5" aria-hidden="true"
                                             xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M1.858 5.30002H3.2202C3.2825 4.21782 3.4883 3.22102 3.8061 2.41742C3.29441 2.73097 2.85579 3.15046 2.51977 3.64768C2.18374 4.1449 1.95809 4.70831 1.858 5.30002ZM5.9999 0.400024C4.51469 0.400024 3.09031 0.990023 2.0401 2.04023C0.989901 3.09043 0.399902 4.51481 0.399902 6.00002C0.399902 7.48524 0.989901 8.90962 2.0401 9.95982C3.09031 11.01 4.51469 11.6 5.9999 11.6C7.48512 11.6 8.9095 11.01 9.9597 9.95982C11.0099 8.90962 11.5999 7.48524 11.5999 6.00002C11.5999 4.51481 11.0099 3.09043 9.9597 2.04023C8.9095 0.990023 7.48512 0.400024 5.9999 0.400024V0.400024ZM5.9999 1.80002C5.9467 1.80002 5.8375 1.82242 5.6744 1.98342C5.5078 2.14722 5.3265 2.41952 5.1585 2.81082C4.8862 3.44572 4.6874 4.31022 4.6223 5.30002H7.3775C7.3124 4.31022 7.1136 3.44572 6.8413 2.81082C6.6733 2.41882 6.4913 2.14722 6.3254 1.98342C6.1623 1.82242 6.0531 1.80002 5.9999 1.80002ZM8.7796 5.30002C8.7173 4.21782 8.5115 3.22102 8.1937 2.41742C8.7054 2.73097 9.14401 3.15046 9.48004 3.64768C9.81607 4.1449 10.0417 4.70831 10.1418 5.30002H8.7796ZM7.3775 6.70002H4.6223C4.6874 7.68982 4.8862 8.55432 5.1585 9.18922C5.3265 9.58122 5.5085 9.85283 5.6744 10.0166C5.8375 10.1776 5.9467 10.2 5.9999 10.2C6.0531 10.2 6.1623 10.1776 6.3254 10.0166C6.492 9.85283 6.674 9.58052 6.8413 9.18922C7.1136 8.55432 7.3124 7.68982 7.3775 6.70002ZM8.1937 9.58263C8.5115 8.77973 8.7173 7.78222 8.7796 6.70002H10.1418C10.0417 7.29174 9.81607 7.85515 9.48004 8.35237C9.14401 8.84959 8.7054 9.26908 8.1937 9.58263V9.58263ZM3.8061 9.58263C3.4883 8.77903 3.2825 7.78222 3.2209 6.70002H1.858C1.95809 7.29174 2.18374 7.85515 2.51977 8.35237C2.85579 8.84959 3.29441 9.26908 3.8061 9.58263V9.58263Z"/>
                                        </svg>
                                        <p class="mt-1 ">Copart</p>

                                    </div>


                                </div>


                                <!--block body card  -->
                                <div class="p-5 pb-2.5">
                                    <!-- model auto -->

                                    <div class="flex justify-between mb-[7px]">
                                        <a href="#"
                                           class=" w-fix leading-none text-lg font-semibold  text-gray-900 dark:text-white dark:hover:text-gray-300 max-w-[220px]">
                                            Geep Grand
                                            Cheroky
                                        </a>
                                        <!-- heart -->
                                        <svg
                                            class="w-5 h-5 transition duration-300 transform fill-current text-white hover:text-red-500"
                                            width="23"
                                            height="20" viewBox="0 0 23 20" xmlns="http://www.w3.org/2000/svg"
                                            style="cursor: pointer;">
                                            <path
                                                d="M1.76037 4.75019C2.01478 4.13598 2.38769 3.57789 2.85779 3.10779C3.32789 2.63769 3.88598 2.26478 4.50019 2.01037C5.11441 1.75595 5.77272 1.625 6.43754 1.625C7.10237 1.625 7.76068 1.75595 8.37489 2.01037C8.98911 2.26478 9.5472 2.63769 10.0173 3.10779L11.5 4.59054L12.9828 3.10779C13.9322 2.15839 15.2199 1.62501 16.5625 1.62501C17.9052 1.62501 19.1929 2.15839 20.1423 3.10779C21.0917 4.0572 21.6251 5.34488 21.6251 6.68754C21.6251 8.03021 21.0917 9.31789 20.1423 10.2673L11.5 18.9095L2.85779 10.2673C2.38769 9.7972 2.01478 9.23911 1.76037 8.62489C1.50595 8.01068 1.375 7.35237 1.375 6.68754C1.375 6.02272 1.50595 5.36441 1.76037 4.75019Z"
                                                stroke="#EF4444" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                            </path>
                                        </svg>


                                    </div>


                                    <!-- price -->
                                    <div class="flex gap-x-1.5 mb-1">
                                        <p class="leading-tight text-xl font-semibold text-gray-900 dark:text-gray-400 ">
                                            $13.099</p>

                                        <!-- gray block -->
                                        <div class="flex bg-gray-100 rounded-full px-3 py-1 gap-1">
                                            <div><img class="mt-[1px]" src="img/card/status-online.svg" alt="icon">
                                            </div>

                                            <p class="font-medium text-xs  text-center font-medium ">Live bid</p>

                                        </div>

                                    </div>

                                    <p class="leading-tight text-xs font-medium text-gray-500 mb-1 ">Condition: Run &
                                        Drive Verified
                                    </p>
                                    <p class="leading-tight text-xs font-medium text-gray-500 mb-1 ">Primary Damage:
                                        front end</p>
                                    <p class="leading-tight text-xs font-medium text-gray-500 mb-0 ">VIN:
                                        3VW2K7AJ3FM257322</p>


                                </div>
                                <!-- underline -->
                                <div class="w-full h-px bg-black dark:bg-gray-300"></div>

                                <!-- block calendar -->
                                <div class=" py-2 p-5 flex justify-between">
                                    <!-- left calendar -->
                                    <div class="flex gap-1">
                                        <div>
                                            <img src="img/card/calendar.svg" alt="icon">
                                        </div>
                                        <p class="text-xs font-medium text-gray-900 dark:text-gray-300">2021 year</p>
                                    </div>
                                    <!-- right calendar -->
                                    <div class="flex gap-1">
                                        <div>
                                            <img src="img/card/calendar.svg" alt="icon">
                                        </div>
                                        <p class="text-xs font-medium text-gray-900 dark:text-gray-300">Fuel:
                                            gasoline</p>
                                    </div>
                                </div>

                            </article>

                        </div>
                        <!-- pagination -->
                        <div class="  block mb-[28px]  lg2:flex justify-between h-[36px]">
                            <nav aria-label="Page navigation example " class="text-center mb-3  md:mb-[0px]  ">
                                <ul class="inline-flex -space-x-px text-base h-10 ">
                                    <li>

                                        <a href="#"
                                           class="flex lg:hidden text-base font-medium items-center justify-center px-4 h-10 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                            <img src="img/catalog/chevron-left.svg" alt="chevron-left">
                                        </a>
                                    </li>
                                    <li>

                                        <a href="#"
                                           class="hidden lg:flex text-base font-medium items-center justify-center px-4 h-10 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white ">Previous</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="flex text-base font-medium items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white ">1</a>
                                    </li>
                                    <li>
                                        <a href="#" aria-current="page"
                                           class="flex text-base font-medium items-center justify-center px-4 h-10 text-primary-600 border border-gray-300 bg-primary-50 hover:bg-primary-100 hover:text-primary-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white ">2</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="flex text-base font-medium items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white ">3</a>
                                    </li>

                                    <li>
                                        <a href="#"
                                           class="flex text-base font-medium items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white ">4</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="hidden lg:flex text-base font-medium items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white ">5</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="hidden lg:flex text-base font-medium items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white ">6</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="hidden lg:flex text-base font-medium items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white ">7</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="hidden lg:flex text-base font-medium items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white ">8</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="flex text-base font-medium items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white ">...</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="flex lg:hidden text-base font-medium items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white ">100</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="hidden lg:flex text-base font-medium items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white ">11020</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="hidden lg:flex text-base font-medium  items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white ">Next</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="flex lg:hidden text-base font-medium  items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                            <img src="img/catalog/chevron-right.svg" alt="chevron-right">
                                        </a>
                                    </li>
                                </ul>
                            </nav>

                            <div class="text-center h-[36px] ">
                                <a href="#"
                                   class="inline-flex text-center text-white bg-primary-600 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 pt-[11px] pb-[9px] lg:pr-[16px] lg:pl-[11px]  dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800 ">
                                    <img class="mr-[8px]" src="img/catalog/heart.svg" alt="heart-icon">
                                    Contact our support team
                                </a>
                            </div>


                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex-auto dark:bg-gray-800">
        <div class="mx-auto max-w-[1290px] px-[15px] md:px-[29px] pt-[16px] pb-[34px]">
            <div class="text-base font-normal text-gray-500 ">
                <p>
                    The Audi A6 is an exceptional blend of style, comfort, and performance that inspires car enthusiasts
                    worldwide. Part of Audi's lineup of executive sedans, the A6 represents the pinnacle of engineering
                    prowess and technological advancement from the Audi brand. In this article, we will delve into the
                    key features and advantages of the Audi A6.
                </p>
                <p>Design and Exterior</p>
                <p>
                    The Audi A6 boasts a refined and elegant design that seamlessly combines elements of sportiness with
                    classic luxury. Its slender headlights, aggressive front grille, and sleek silhouette make this car
                    a sight to behold. With a wide range of body colors and wheel designs to choose from, every Audi A6
                    owner can personalize their vehicle to match their unique taste.
                </p>
                <p>Interior Comfort and Technology</p>
                <p>
                    Step inside the Audi A6, and you'll be greeted by a world of comfort and cutting-edge technology.
                    The interior is a testament to Audi's commitment to providing the utmost luxury. High-quality
                    materials, meticulously crafted surfaces, and ergonomic design elements create an inviting and
                    comfortable cabin.
                    Audi's MMI (Multi Media Interface) system takes center stage, providing seamless connectivity,
                    navigation, and infotainment control. The A6 also offers an available virtual cockpit, a fully
                    digital instrument cluster that allows drivers to customize the information displayed, including
                    navigation maps and vehicle performance data.
                </p>


            </div>
        </div>
    </div>
@stop
@section("script")
    <script src="js/catalog-script.js"></script>
@stop
