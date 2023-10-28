@extends("layout.myApp")
@section("content")
    <div class="flex-auto dark:bg-gray-800">
        <!-- Catalog block -->
        <div class="mx-auto max-w-[1290px] px-[15px] pt-[16px] pb-[34px] lg:-10">
            <div class="">
                <div class="block md:flex items-start  gap-[25px] px-[0] md:px-[25px]">
                    <!-- left column -->
                    <form
                        method="POST"
                        action="{{route('ajax.catalog.filter')}}"
                        class="w-[100%] md:w-[50%] lg:w-[30%]  rounded-[8px] bg-white dark:bg-gray-900 pt-[12px] pb-[12px] pl-[12px] pr-[12px] shadow-md filter_car_form">
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
                                <input id="search" type="text" class=" w-full pl-10 p-2.5 py-2
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
                                <div id="search-results">
{{--                                @foreach($data_models as $key=>$item_list)--}}

{{--                                @endforeach--}}
                                </div>
                            </div>
                        </div>
                        <!-- Auction status -->
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop



@section("script")

    {{--    <script src="js/calc-js.js"></script>--}}
    {{--    <script src="js/auto-script.js"></script>--}}
    {{--    <script src="js/catalog-script.js"></script>--}}
    <script>
        const searchInput = document.getElementById('search');
        const searchResults = document.getElementById('search-results');

        searchInput.addEventListener('input', function () {
            const query = this.value;

            const xhr = new XMLHttpRequest();
            xhr.open('GET', '{{route('ajax.search')}}?query=' + query, true);

            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    searchResults.innerHTML = xhr.responseText;
                }
            };

            xhr.send();
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="{{asset("js/search.js")}}"></script>
@stop
