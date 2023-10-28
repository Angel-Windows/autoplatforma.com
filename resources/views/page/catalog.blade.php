@extends("layout.myApp")
@section("content")
    <script>
        const arrayYearSlider = [{{$time_line['min']}}, {{$time_line['max']}}];

    </script>
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

                        </ol>
                    </nav>

                </div>
                <div class="block md:flex items-start  gap-[25px] px-[0] md:px-[25px]">
                    <!-- left column -->

                    <form
                        method="POST"
                        action="{{route('ajax.catalog.filter')}}"
                        class="w-[100%] md:w-[50%] lg:w-[30%]  rounded-[8px] bg-white dark:bg-gray-900 pt-[12px] pb-[12px] pl-[12px] pr-[12px] shadow-md filter_car_form">
                        <input type="hidden" name="page" value="{{$page_active}}">
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
                                    <img src="{{asset("img/catalog/information-circle.svg")}}" alt="information-circle">
                                </div>
                            </div>
                            <div class="relative flex mb-2 ">
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


                                    <img src="{{asset("img/catalog/check.svg")}}" alt="icon"
                                         class="absolute top-[10px] right-[15px]">
                                </button>
                                <button type="button" class="button-btn-cross hidden">
                                    <img src="{{asset("img/catalog/cross-01.svg")}}" alt="icon"
                                         class="absolute top-[15px] right-[15px] ">
                                </button>
                            </div>
                            <!-- -------------------выпадашка основная ---------------------------------- -->
                            <div
                                class="hidden border rounded-lg border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-800 focus:ring-primary-500 focus:border-primary-500 block     w-fulldark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 pt-4 py-1 box-search  h-[220px] overflow-auto">
                                <p class="mb-3 pl-4 text-sm text-gray-900 font-semibold ">Search suggestion</p>
                                @foreach($data_models as $key=>$item_list)
                                    <div class="relative  mb-3 pl-[42px] pr-[36px] ">
                                        <img src="{{asset("img/catalog/search.svg")}}" alt="icon"
                                             class="absolute top-[3px] left-[17px]">
                                        <label data-v-e1="" class="flex items-center relative inp-make">
                                                        <span data-v-e1=""
                                                              class="text-sm font-normal text-primary-500 dark:text-gray-300 cursor-pointer">
                                                           {{$key}}
                                                        </span>
                                            <span data-v-e1=""
                                                  class="filter-selection-checkbox absolute right-[0px] top-[5px]">
                                                            <span data-v-2fd0448e="" data-v-e1="">
                                                                <input class="h-[16px] w-[16px]" data-v-2fd0448e=""
                                                                       type="checkbox" value="{{$key}}"
                                                                       name="make"
                                                                >
                                                                <span data-v-2fd0448e="" class="cursor-pointer ">

                                                                </span>
                                                            </span>
                                                        </span>
                                        </label>
                                    </div>
                                    <!-- выпадашка с чеками -->
                                    <div class="hidden check-make mb-3 pl-[25px]">
                                        @foreach($item_list as $item)
                                            <div class="items-center  pl-[36px] pr-[36px] relative mb-3">
                                                <div>
                                                    <img src="{{asset("img/catalog/arrow-right.svg")}}"
                                                         alt="arrow-right-icon"
                                                         class="mr-2 absolute top-[6px] left-[17px] ">
                                                </div>
                                                <label data-v-e1="" class="flex items-center justify-between relative">
                                                            <span data-v-e1=""
                                                                  class="text-sm font-normal text-primary-500 dark:text-gray-300 cursor-pointer ">
                                                                {{$item}}
                                                            </span>
                                                    <span data-v-e1=""
                                                          class="filter-selection-checkbox absolute right-[0px] top-[5px]">
                                                                <span data-v-2fd0448e="" data-v-e1="">
                                                                    <input class="h-[16px] w-[16px]" data-v-2fd0448e=""
                                                                           type="checkbox" value="{{$item}}"
                                                                           name="model">
                                                                    <span data-v-2fd0448e=""
                                                                          class="cursor-pointer "></span>
                                                                </span>
                                                            </span>
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- range -->
                        <div class="flex flex-col ">
                            <p class="text-sm font-medium text-gray-900 mb-[15px]">Model year</p>
                            <div class="pl-3 pr-5">
                                <div id="slider" class="   mb-[12px]"></div>
                            </div>
                            <div class="flex justify-between w-full gap-[12px]">
                                <div>
                                    <p class=" mb-[8px] text-sm font-medium text-gray-900">From</p>
                                    <input type="text" id="min-value"
                                           name="min-year"
                                           class="flex text-sm font-normal text-gray-500 rounded-[8px] py-[8px] px-[16px] border border-solid border-gray-300 bg-gray-50 mx-auto w-full md:w-[142px">
                                </div>
                                <div class="">
                                    <p class=" mb-[8px] text-sm font-medium text-gray-900 ">To</p>
                                    <input type="text" id="max-value"
                                           name="max-year"
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
                                <input id="auction_status" type="hidden" name="auction_status" value="">
                            </div>
                            <!-- табы -->

                            <div class="tabu-body__nav flex gap-3 justify-between">
                                <button onclick="changeAuctionStatus()" type="button" class="tabu-body__item text-primary-600 bg-white border          border-primary-600
                                                     text-sm font-medium rounded-lg  px-5 py-[8px]   w-[90px] text-center"
                                        data-tab="tab-1">All
                                </button>
                                <button onclick="changeAuctionStatus(1)" type="button" class="tabu-body__item text-primary-600 bg-white border _activ border-primary-600
                                                     text-sm font-medium rounded-lg  px-5 py-[8px]   w-[90px] text-center"
                                        data-tab="tab-2">Live
                                </button>
                                <button onclick="changeAuctionStatus(2)" type="button" class="tabu-body__item text-primary-600 bg-white border          border-primary-600
                                                     text-sm font-medium rounded-lg  px-5 py-[8px]   w-[90px] text-center"
                                        data-tab="tab-3">Sold
                                </button>
                            </div>


                        </div>


                        <!-- accordion -->
                        <div id="accordion-flush" data-accordion="collapse"
                             data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white"
                             data-inactive-classes="text-gray-500 dark:text-gray-400" class="mb-4">
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
                            <div id="accordion-flush-body-1" class="hidden">
                                <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                    <!-- тогле -->
                                    <div class="mb-[12px] relative">
                                        <label class="relative inline-flex items-center cursor-pointer ">
                                            <input type="checkbox" name="auctions[]" value="" class="sr-only peer">
                                            <span
                                                class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary-300 dark:peer-focus:ring-primary-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600">
                                                    </span>

                                        </label>
                                        <div class="absolute top-[-4px] left-[56px]">
                                            <span class=" text-sm font-medium text-gray-900 dark:text-gray-300 ">All auto auctions</span>
                                            <p class="  text-xs font-normal text-gray-500 ">From all countries</p>
                                        </div>

                                    </div>


                                    <!-- тогле -->
                                    <div class="mb-[12px] relative">
                                        <label class="relative inline-flex items-center cursor-pointer ">
                                            <input type="checkbox" name="auctions[]" value="0" class="sr-only peer">
                                            <span
                                                class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary-300 dark:peer-focus:ring-primary-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600">
                                                        </span>

                                        </label>
                                        <div class="absolute top-[-4px] left-[56px]">
                                            <span class=" text-sm font-medium text-gray-900 dark:text-gray-300 ">Copart USA</span>
                                            <p class="  text-xs font-normal text-gray-500 ">Used cars auction</p>
                                        </div>

                                    </div>

                                    <!-- тогле -->
                                    <div class="mb-[12px] relative">
                                        <label class="relative inline-flex items-center cursor-pointer ">
                                            <input type="checkbox" name="auctions[]" value="1" class="sr-only peer">
                                            <span
                                                class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary-300 dark:peer-focus:ring-primary-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600">
                                                            </span>

                                        </label>
                                        <div class="absolute top-[-4px] left-[56px]">
                                            <span class=" text-sm font-medium text-gray-900 dark:text-gray-300 ">IAAI USA</span>
                                            <p class="  text-xs font-normal text-gray-500 ">Used cars auction</p>
                                        </div>

                                    </div>

                                    <!-- тогле -->
                                    <div class=" relative">
                                        <label class="relative inline-flex items-center cursor-pointer ">
                                            <input type="checkbox" name="auctions[]" value="2" class="sr-only peer">
                                            <span
                                                class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary-300 dark:peer-focus:ring-primary-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600">
                                                    </span>

                                        </label>
                                        <div class="absolute top-[-4px] left-[56px]">
                                            <span class=" text-sm font-medium text-gray-900 dark:text-gray-300 ">Impact (IAAI CA)</span>
                                            <p class="  text-xs font-normal text-gray-500 ">Used cars auction</p>
                                        </div>

                                    </div>

                                </div>
                            </div>


                        </div>
                    @foreach($list_filters as $item_filters)
                        <!-- condition -->
                            <div class="rounded-lg bg-white shadow-md px-3 py-3 mb-3">
                                <!-- елементы спойлера -->
                                <div data-name="title" class="flex justify-between items-center cursor-pointer">
                                    <h3 class="leading-none text-sm font-medium text-gray-900">{{$item_filters['name']}}</h3>
                                    <div>
                                        <img src="img/catalog/chevron-down.svg" alt="icon">
                                    </div>
                                </div>
                                <div class="hidden mt-5 pr-3">
                                    <div class="flex gap-2 items-center mb-[10px] ">
                                        <input id="checked-checkbox-1" type="checkbox" value=""
                                               class="w-4 h-4 text-primary-600 bg-gray-100 border-gray-300 rounded  dark:ring-offset-gray-800  dark:bg-gray-700 dark:border-gray-600 cursor-pointer
                                                            w-[9%]">
                                        <svg width="12" height="12" viewBox="0 0 10 11" fill="none"
                                             xmlns="http://www.w3.org/2000/svg" class="w-[6%]">
                                            <circle cx="5" cy="5.5" r="4.5" stroke="#111928"/>
                                        </svg>
                                        <label for="checked-checkbox-1"
                                               class=" text-sm font-medium text-gray-900 dark:text-gray-300 cursor-pointer flex justify-between w-[100%] capitalize ">
                                            all
                                            <span class="text-sm font-medium text-gray-400 leading-normal ">{{$item_filters['all_count'] ?? 0}}</span>
                                        </label>

                                    </div>
                                    @foreach($item_filters['data'] as $item)
                                        <div class="flex gap-2 items-center mb-[10px] ">
                                            <input id="checked-checkbox-{{$item->alias}}" type="checkbox" value="{{$item->alias}}" name="{{$item_filters['name']}}[]"
                                                   class="flex w-4 h-4 text-primary-600 bg-gray-100 border-gray-300 rounded  dark:ring-offset-gray-800  dark:bg-gray-700 dark:border-gray-600 cursor-pointer
                                                            w-[9%]">
                                            <span
                                                class="w-[11px] h-[11px] bg-green-400 rounded-[100%] pl-[10px]"></span>
                                            <label for="checked-checkbox-{{$item->alias}}"
                                                   class="text-sm font-medium text-gray-900 dark:text-gray-300 cursor-pointer flex justify-between w-[100%] capitalize ml-1">
                                                {{$item->alias}}
                                                <span
                                                    class="text-sm font-medium text-gray-400 leading-normal">{{$item->count_of_cars ?? 0}}</span>
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </form>


                    <!-- right column -->
                    <div class="w-[100%]  ">
                        <!-- select -->

                        <div
                            class="flex items-center justify-end  md1:justify-between mb-[12px] mr-[12px] md:pr-[12px] w-full">

                            <!-- Breadcrumb -->
                            <div class="relative">
                                <nav
                                    class="hidden md1:flex items-center rounded-lg border border-gray-200 bg-white px-2 lg:px-5 py-[6px]  "
                                    aria-label="Breadcrumb">
                                    <ol class="inline-flex items-center gap-4 ">
                                        <li class="hidden lg:flex items-center gap-4">
                                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.707 2.793C10.5195 2.60553 10.2652 2.50021 10 2.50021C9.73484 2.50021 9.48053 2.60553 9.293 2.793L2.293 9.793C2.11084 9.9816 2.01005 10.2342 2.01233 10.4964C2.01461 10.7586 2.11978 11.0094 2.30518 11.1948C2.49059 11.3802 2.7414 11.4854 3.0036 11.4877C3.2658 11.49 3.5184 11.3892 3.707 11.207L4 10.914V17.5C4 17.7652 4.10536 18.0196 4.2929 18.2071C4.48043 18.3946 4.73479 18.5 5 18.5H7C7.26522 18.5 7.51957 18.3946 7.70711 18.2071C7.89465 18.0196 8 17.7652 8 17.5V15.5C8 15.2348 8.10536 14.9804 8.2929 14.7929C8.48043 14.6054 8.73479 14.5 9 14.5H11C11.2652 14.5 11.5196 14.6054 11.7071 14.7929C11.8946 14.9804 12 15.2348 12 15.5V17.5C12 17.7652 12.1054 18.0196 12.2929 18.2071C12.4804 18.3946 12.7348 18.5 13 18.5H15C15.2652 18.5 15.5196 18.3946 15.7071 18.2071C15.8946 18.0196 16 17.7652 16 17.5V10.914L16.293 11.207C16.4816 11.3892 16.7342 11.49 16.9964 11.4877C17.2586 11.4854 17.5094 11.3802 17.6948 11.1948C17.8802 11.0094 17.9854 10.7586 17.9877 10.4964C17.99 10.2342 17.8892 9.9816 17.707 9.793L10.707 2.793Z"
                                                    fill="#374151"/>
                                            </svg>
                                            <div class="flex items-center">
                                                <a href="#"
                                                   class=" text-sm font-medium text-gray-700 hover:text-blue-600  dark:text-gray-400 dark:hover:text-white">Catalog</a>
                                            </div>
                                        </li>
                                        @if(isset($breadcrumbs['make']))
                                            <li data-dropdow-2 aria-current="page" class="relative">
                                                <div class="flex items-center gap-4">
                                                    <svg class="hidden lg:flex w-3 h-3  text-gray-400"
                                                         aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                         fill="none" viewBox="0 0 6 10">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                              stroke-linejoin="round" stroke-width="2"
                                                              d="m1 9 4-4-4-4"/>
                                                    </svg>
                                                    <button data-dropdow type="button"
                                                            class=" text-sm font-medium -gray-700 dark:text-gray-400">{{$breadcrumbs['model'][0]->lot_makes_name ?? ""}}</button>
                                                    @if(count($breadcrumbs['make'])>1)
                                                        <button data-dropdow type="button"
                                                                class="bg-blue-100 text-blue-800 text-xs font-medium leading-normal  px-[10px] py-[2px] rounded-md dark:bg-blue-200 dark:text-blue-800 hidden sm:flex ml-[6px]">
                                                            + {{count($breadcrumbs['make'])-1}}
                                                        </button>
                                                        <button data-dropdow type="button">
                                                            <svg width="30" height="30" viewBox="0 0 20 21" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                      d="M5.293 7.79299C5.48053 7.60552 5.73484 7.5002 6 7.5002C6.26516 7.5002 6.51947 7.60552 6.707 7.79299L10 11.086L13.293 7.79299C13.3852 7.69748 13.4956 7.6213 13.6176 7.56889C13.7396 7.51648 13.8708 7.48889 14.0036 7.48774C14.1364 7.48659 14.2681 7.51189 14.391 7.56217C14.5139 7.61245 14.6255 7.6867 14.7194 7.78059C14.8133 7.87449 14.8875 7.98614 14.9378 8.10904C14.9881 8.23193 15.0134 8.36361 15.0123 8.49639C15.0111 8.62917 14.9835 8.76039 14.9311 8.88239C14.8787 9.0044 14.8025 9.11474 14.707 9.20699L10.707 13.207C10.5195 13.3945 10.2652 13.4998 10 13.4998C9.73484 13.4998 9.48053 13.3945 9.293 13.207L5.293 9.20699C5.10553 9.01946 5.00021 8.76515 5.00021 8.49999C5.00021 8.23483 5.10553 7.98052 5.293 7.79299Z"
                                                                      fill="#9CA3AF"/>
                                                            </svg>
                                                        </button>
                                                    @endif
                                                </div>
                                                <!-- выпадашка -->
                                                @if(count($breadcrumbs['model']??[])>1)
                                                    <div id="item-2"
                                                         class="z-10 bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 absolute top-[44px] right-[0px] none-breadcrumb ">
                                                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                                                            @foreach($breadcrumbs['make'] as $item)
                                                                <li>
                                                                    <a href="#"
                                                                       class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{$item->alias}}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                            </li>
                                        @endif
                                        @if(isset($breadcrumbs['model']))
                                            <li data-dropdow-1 aria-current="page" class="relative">
                                                <div class="flex items-center gap-4">
                                                    <button data-dropdow type="button"
                                                            class=" text-sm font-medium text-gray-500  dark:text-gray-400">
                                                        {{$breadcrumbs['model'][0]->alias}}
                                                    </button>
                                                    @if(count($breadcrumbs['model']??[])>1)
                                                        <button data-dropdow
                                                                class="bg-blue-100 text-blue-800 text-xs font-medium leading-normal  px-[10px] py-[2px] rounded-md dark:bg-blue-200 dark:text-blue-800 hidden sm:flex ml-[6px]">
                                                            + {{count($breadcrumbs['model'])-1}}
                                                        </button>

                                                        <button data-dropdow type="button">
                                                            <svg width="30" height="30" viewBox="0 0 20 21" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                      d="M5.293 7.79299C5.48053 7.60552 5.73484 7.5002 6 7.5002C6.26516 7.5002 6.51947 7.60552 6.707 7.79299L10 11.086L13.293 7.79299C13.3852 7.69748 13.4956 7.6213 13.6176 7.56889C13.7396 7.51648 13.8708 7.48889 14.0036 7.48774C14.1364 7.48659 14.2681 7.51189 14.391 7.56217C14.5139 7.61245 14.6255 7.6867 14.7194 7.78059C14.8133 7.87449 14.8875 7.98614 14.9378 8.10904C14.9881 8.23193 15.0134 8.36361 15.0123 8.49639C15.0111 8.62917 14.9835 8.76039 14.9311 8.88239C14.8787 9.0044 14.8025 9.11474 14.707 9.20699L10.707 13.207C10.5195 13.3945 10.2652 13.4998 10 13.4998C9.73484 13.4998 9.48053 13.3945 9.293 13.207L5.293 9.20699C5.10553 9.01946 5.00021 8.76515 5.00021 8.49999C5.00021 8.23483 5.10553 7.98052 5.293 7.79299Z"
                                                                      fill="#9CA3AF"/>
                                                            </svg>
                                                        </button>
                                                    @endif
                                                </div>
                                                <!-- выпадашка -->
                                                @if(count($breadcrumbs['model']??[])>1)
                                                    <div id="item-1"
                                                         class="z-10 bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 absolute top-[44px] right-[0px] none-breadcrumb">
                                                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                                                            @foreach($breadcrumbs['model'] as $item)
                                                                <li>
                                                                    <a href="#"
                                                                       class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{$item->alias}}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                            </li>
                                        @endif
                                    </ol>


                                </nav>


                            </div>

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
                                            <a href="{{route("page.catalog", ['page'=>$page_active, 'sort'=>1])}}"
                                               class="flex items-center gap-[12px] px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white btn-btn ">
                                                <img src="img/catalog/calendar.svg" alt="calendar-icon">
                                                Auction date
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route("page.catalog", ['page'=>$page_active, 'sort'=>2])}}"
                                               class="flex items-center gap-[12px]  px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white btn-btn ">
                                                <img src="img/catalog/trending-up.svg" alt="calendar-icon">
                                                Price low to high
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route("page.catalog", ['page'=>$page_active, 'sort'=>3])}}"
                                               class="flex items-center gap-[12px]  px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white btn-btn ">
                                                <img src="img/catalog/trending-down.svg" alt="calendar-icon">
                                                Price high to low
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- catalog car -->
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[18px] mb-[37px] car_card_lis">
                            @include('components.catalog.car_card_list')

                        </div>
                        <!-- pagination -->
                        @include("components.catalog.pagination")


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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script>
        let noDataFilters =
            {
                'min-year': "{{$time_line['min']}}",
                'max-year': "{{$time_line['max']}}",
                'auction_status': "",
                'conditions': "",
                'damage': "",
                'fuel': "",
                'page': 1,
            };
    </script>
    <script src="{{asset('js/main-js.js')}}"></script>
    <script src="{{asset("js/catalog-script.js")}}"></script>
    <script src="{{asset("js/filter.js")}}"></script>
@stop
