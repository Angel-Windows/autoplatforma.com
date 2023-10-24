@extends("layout.myApp")
@section("content")
    <div class="flex-auto">
        <!-- Worldwide Auto -->
        <section class="bg-white dark:bg-gray-900">
            <div class="mx-auto max-w-[1290px] px-[15px]">
                <div class="max-w-screen-xl   pb-[35px] mx-auto lg:pt-[36px] lg:pb-[55px]">
                    <div class="grid items-center gap-8 mb-8 lg:mb-16 lg:gap-12 lg:grid-cols-12">
                        <div class="col-span-6 text-center sm:mb-6 lg:text-left lg:mb-0">
                            <a href="#"
                               class="inline-flex items-center justify-between px-1 py-1 pr-4 mt-3 mb-6 text-sm text-gray-700 bg-gray-100 rounded-full dark:bg-gray-800 dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700 "
                               role="alert">
                                <span
                                    class="px-3 py-1 mr-3 text-xs text-white rounded-full bg-primary-600 hover:bg-primary-800 ">New</span>
                                <span
                                    class="text-sm font-medium leading-none text-gray-500 ">Canadian Impact Auto Auction</span>
                                <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <h1
                                class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl xl:text-6xl dark:text-white ">
                                Worldwide Auto Auction Services</h1>

                            <p
                                class="max-w-xl mx-auto mb-6 font-normal text-gray-500 lg:mx-0 xl:mb-8 text-base md:text-lg xl:text-xl dark:text-gray-400 ">
                                Experience the future of auto purchasing: our global auction services ensure a
                                streamlined path to your dream vehicle</p>
                            <!-- форма -->
                            <div class="rounded-lg">
                                <form class="max-w-lg mx-auto lg:ml-0" action="#">
                                    <label for="default-search-2"
                                           class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
                                    <div class="relative">
                                        <input type="search" id="default-search-2"
                                               class="block w-full p-4 text-sm text-gray-900 border border-gray-300 bg-gray-50 focus:outline-none focus:ring-primary-600 focus:border-primary-600 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 "
                                               style="border-radius: 8px;"
                                               placeholder="Search by vin, make or model" required="">
                                        <button type="submit"
                                                class="text-white inline-flex items-center absolute right-2.5 bottom-2 bg-primary-600 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-600 font-medium text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 "
                                                style="border-radius: 8px;">
                                            <svg class="w-4 h-4 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                      d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                      clip-rule="evenodd"></path>
                                            </svg>
                                            Search
                                        </button>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <div class="col-span-6">
                            <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/search-mockup.png"
                                 class="dark:hidden" alt="mockup">
                            <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/search-mockup-dark.png"
                                 class="hidden dark:block" alt="mockup dark">
                        </div>
                    </div>
                    <!-- карточки низ -->
                    <div class="grid gap-8 sm:gap-12 md:grid-cols-3">
                        <!-- карточка 1 -->
                        <div class="flex justify-center">
                            <svg class="w-6 h-6 mr-3 text-primary-600 dark:text-primary-500 shrink-0 "
                                 fill="currentColor"
                                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.433 7.418C8.588 7.315 8.779 7.222 9 7.151V8.849C8.79973 8.78623 8.60896 8.6964 8.433 8.582C8.07 8.34 8 8.114 8 8C8 7.886 8.07 7.66 8.433 7.418ZM11 12.849V11.151C11.22 11.222 11.412 11.315 11.567 11.418C11.931 11.661 12 11.886 12 12C12 12.114 11.93 12.34 11.567 12.582C11.391 12.6964 11.2003 12.7862 11 12.849Z"
                                    fill="#111928"/>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M10 18C12.1217 18 14.1566 17.1571 15.6569 15.6569C17.1571 14.1566 18 12.1217 18 10C18 7.87827 17.1571 5.84344 15.6569 4.34315C14.1566 2.84285 12.1217 2 10 2C7.87827 2 5.84344 2.84285 4.34315 4.34315C2.84285 5.84344 2 7.87827 2 10C2 12.1217 2.84285 14.1566 4.34315 15.6569C5.84344 17.1571 7.87827 18 10 18ZM11 5C11 4.73478 10.8946 4.48043 10.7071 4.29289C10.5196 4.10536 10.2652 4 10 4C9.73478 4 9.48043 4.10536 9.29289 4.29289C9.10536 4.48043 9 4.73478 9 5V5.092C8.40268 5.19833 7.83276 5.42344 7.324 5.754C6.602 6.234 6 7.009 6 8C6 8.99 6.602 9.765 7.324 10.246C7.804 10.566 8.378 10.791 9 10.908V12.849C8.609 12.722 8.32 12.532 8.157 12.345C8.0724 12.2412 7.96782 12.1554 7.84945 12.0928C7.73107 12.0302 7.60133 11.992 7.46791 11.9804C7.33449 11.9689 7.20012 11.9843 7.07276 12.0257C6.9454 12.0671 6.82765 12.1336 6.72649 12.2214C6.62534 12.3091 6.54284 12.4163 6.48389 12.5365C6.42494 12.6568 6.39075 12.7876 6.38334 12.9214C6.37592 13.0551 6.39544 13.1889 6.44073 13.3149C6.48602 13.441 6.55617 13.5566 6.647 13.655C7.209 14.304 8.06 14.731 9 14.908V15C9 15.2652 9.10536 15.5196 9.29289 15.7071C9.48043 15.8946 9.73478 16 10 16C10.2652 16 10.5196 15.8946 10.7071 15.7071C10.8946 15.5196 11 15.2652 11 15V14.908C11.5973 14.8017 12.1672 14.5766 12.676 14.246C13.398 13.766 14 12.991 14 12C14 11.01 13.398 10.235 12.676 9.754C12.1672 9.42344 11.5973 9.19833 11 9.092V7.151C11.391 7.278 11.68 7.468 11.843 7.655C11.9284 7.75631 12.0331 7.83965 12.1509 7.90016C12.2688 7.96067 12.3975 7.99716 12.5296 8.00749C12.6617 8.01783 12.7945 8.00182 12.9204 7.96038C13.0462 7.91894 13.1626 7.85291 13.2627 7.76612C13.3628 7.67932 13.4447 7.5735 13.5035 7.4548C13.5624 7.33609 13.5971 7.20688 13.6056 7.07465C13.6141 6.94243 13.5962 6.80984 13.553 6.68458C13.5098 6.55932 13.4422 6.44389 13.354 6.345C12.791 5.696 11.941 5.269 11 5.092V5Z"/>
                            </svg>
                            <div>
                                <h3 class="mb-1 text-lg font-bold leading-tight text-gray-900 dark:text-white ">Maximize
                                    Savings</h3>
                                <p class="font-normal text-gray-500 dark:text-gray-400 ">Unlock unbeatable prices on
                                    high-quality vehicles from global auctions.</p>
                            </div>
                        </div>
                        <!-- карточка 2 -->
                        <div class="flex justify-center">
                            <svg class="w-6 h-6 mr-3 text-primary-600 dark:text-primary-500 shrink-0"
                                 fill="currentColor"
                                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                      clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <h3 class="mb-1 text-lg font-bold leading-tight text-gray-900 dark:text-white ">Your
                                    Trusted Partner
                                </h3>
                                <p class="font-normal text-gray-500 dark:text-gray-400 ">We're your reliable ally,
                                    dedicated to helping you find the perfect vehicle with confidence.</p>
                            </div>
                        </div>
                        <!-- карточка 3 -->
                        <div class="flex justify-center">
                            <svg class="w-6 h-6 mr-3 text-primary-600 dark:text-primary-500 shrink-0"
                                 fill="currentColor"
                                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M10 18C12.1217 18 14.1566 17.1571 15.6569 15.6569C17.1571 14.1566 18 12.1217 18 10C18 7.87827 17.1571 5.84344 15.6569 4.34315C14.1566 2.84285 12.1217 2 10 2C7.87827 2 5.84344 2.84285 4.34315 4.34315C2.84285 5.84344 2 7.87827 2 10C2 12.1217 2.84285 14.1566 4.34315 15.6569C5.84344 17.1571 7.87827 18 10 18ZM11 6C11 5.73478 10.8946 5.48043 10.7071 5.29289C10.5196 5.10536 10.2652 5 10 5C9.73478 5 9.48043 5.10536 9.29289 5.29289C9.10536 5.48043 9 5.73478 9 6V10C9.00006 10.2652 9.10545 10.5195 9.293 10.707L12.121 13.536C12.2139 13.6289 12.3242 13.7026 12.4456 13.7529C12.567 13.8032 12.6971 13.8291 12.8285 13.8291C12.9599 13.8291 13.09 13.8032 13.2114 13.7529C13.3328 13.7026 13.4431 13.6289 13.536 13.536C13.6289 13.4431 13.7026 13.3328 13.7529 13.2114C13.8032 13.09 13.8291 12.9599 13.8291 12.8285C13.8291 12.6971 13.8032 12.567 13.7529 12.4456C13.7026 12.3242 13.6289 12.2139 13.536 12.121L11 9.586V6Z"/>
                            </svg>
                            <div>
                                <h3 class="mb-1 text-lg font-bold leading-tight text-gray-900 dark:text-white ">
                                    Time-Saving</h3>
                                <p class="font-normal text-gray-500 dark:text-gray-400 ">Skip wasting time at
                                    dealerships – we bring the auction experience to you.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 1 Block end -->
        </section>

        <!-- 2 Block logo-->
        <div class="wrap mb-[-1px] bg-white dark:bg-gray-900 pb-[35px] lg:pb-[55px]">

            <div class="items-wrap md1:flex md1:px-[15px] mx-auto max-w-[1290px]">
                <div id="karysel-1" class="items marquee">
                    <div class="flex justify-center items-center item">
                        <img src="img/logo/copart-logo.svg" alt="copart-logo">
                    </div>
                    <div class="flex justify-center items-center item">
                        <img src="img/logo/lotte-logo.svg" alt="lotte-logo">

                    </div>
                    <div class="flex justify-center items-center item">
                        <img src="img/logo/adesa-logo.svg" alt="adesa-logo">
                    </div>

                    <div class="flex justify-center items-center item">
                        <img src="img/logo/auction-winni-logo.svg" alt="auction-winni-logo">
                    </div>
                    <div class="flex justify-center items-center item">
                        <img src="img/logo/manheim-logo.svg" alt="manheim-logo">
                    </div>
                    <div class="flex justify-center items-center item">
                        <img src="img/logo/iaai-logo.svg" alt="iaai-logo">
                    </div>

                </div>
                <div id="karysel-2" aria-hidden="true" class="items marquee  ">
                    <div class="flex justify-center items-center item">
                        <img src="img/logo/copart-logo.svg" alt="copart-logo">
                    </div>
                    <div class="flex justify-center items-center item">
                        <img src="img/logo/lotte-logo.svg" alt="lotte-logo">

                    </div>
                    <div class="flex justify-center items-center item">
                        <img src="img/logo/adesa-logo.svg" alt="adesa-logo">
                    </div>

                    <div class="flex justify-center items-center item">
                        <img src="img/logo/auction-winni-logo.svg" alt="auction-winni-logo">
                    </div>
                    <div class="flex justify-center items-center item">
                        <img src="img/logo/manheim-logo.svg" alt="manheim-logo">
                    </div>
                    <div class="flex justify-center items-center item">
                        <img src="img/logo/iaai-logo.svg" alt="iaai-logo">
                    </div>

                </div>
            </div>


        </div>

        <!-- 3 Trusted -->
        <section class="bg-primary-600 dark:bg-gray-900">
            <div class="mx-auto max-w-[1290px] px-[15px]">
                <div
                    class="items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-4 lg:gap-16 xl:gap-24 lg:py-16 lg:px-0">
                    <div class="col-span-2 mb-8">
                        <p class="text-lg text-white font-medium dark:text-primary-500 ">Global Confidence"</p>
                        <h2
                            class="mt-3 mb-4 text-3xl tracking-tight font-extrabold tracking-tight text-white md:text-4xl dark:text-white ">
                            Trusted daily by over 1000+ users</h2>
                        <p class="font-light text-white sm:text-xl dark:text-gray-400 ">Our company provides you with
                            the opportunity for direct participation in car auctions, and offers services for vehicle
                            delivery and registration in your country. Our experts are always ready to assist you in
                            choosing the perfect car,
                            providing a modern solution for purchasing and delivering to any corner of the world</p>
                        <div class="pt-6 mt-6 space-y-4 border-t border-gray-200 dark:border-gray-700">
                            <div>
                                <a href="#"
                                   class="inline-flex items-center text-base font-medium text-white hover:text-primary-800 dark:text-primary-500 dark:hover:text-primary-700 ">
                                    Live car auctions
                                    <svg class="ml-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </div>
                            <div>
                                <a href="#"
                                   class="inline-flex items-center text-base font-medium text-white hover:text-primary-800 dark:text-primary-500 dark:hover:text-primary-700 ">
                                    Exclusive cars at a fixed price
                                    <svg class="ml-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- правая колонка -->
                    <div class="col-span-2 space-y-8 md:grid md:grid-cols-2 md:gap-12 md:space-y-0">
                        <div class="flex flex-row-reverse justify-between gap-[20px] md:block">
                            <div>
                                <svg class="mb-2 w-10 h-10 text-white md:w-12 md:h-12 dark:text-primary-500"
                                     fill="currentColor"
                                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.3939 2.08003C10.2694 2.02667 10.1353 1.99915 9.99988 1.99915C9.86443 1.99915 9.73038 2.02667 9.60588 2.08003L2.60588 5.08003C2.42549 5.15688 2.27168 5.28506 2.16356 5.44864C2.05545 5.61221 1.9978 5.80396 1.9978 6.00004C1.9978 6.19611 2.05545 6.38786 2.16356 6.55143C2.27168 6.71501 2.42549 6.84319 2.60588 6.92004L5.24988 8.05103C5.34802 7.94003 5.46963 7.85224 5.60588 7.79403L9.60588 6.08004C9.72693 6.02609 9.85749 5.99673 9.98997 5.99369C10.1225 5.99064 10.2542 6.01395 10.3776 6.06227C10.501 6.1106 10.6136 6.18296 10.7088 6.27517C10.8039 6.36738 10.8799 6.47758 10.9321 6.59938C10.9843 6.72118 11.0118 6.85214 11.0129 6.98466C11.0141 7.11718 10.9889 7.2486 10.9388 7.37129C10.8888 7.49399 10.8148 7.60551 10.7212 7.69937C10.6277 7.79323 10.5164 7.86756 10.3939 7.91804L7.66688 9.08804L9.60688 9.91903C9.73125 9.97226 9.86511 9.99971 10.0004 9.99971C10.1357 9.99971 10.2695 9.97226 10.3939 9.91903L17.3939 6.91903C17.5737 6.8419 17.7269 6.71372 17.8346 6.55037C17.9422 6.38702 17.9996 6.19568 17.9996 6.00004C17.9996 5.80439 17.9422 5.61305 17.8346 5.4497C17.7269 5.28635 17.5737 5.15817 17.3939 5.08103L10.3939 2.08104V2.08003ZM3.30988 9.39704L4.99988 10.12V14.222C4.65364 14.1433 4.30302 14.0852 3.94988 14.048C3.72203 14.0241 3.50931 13.9226 3.3473 13.7606C3.18529 13.5986 3.08383 13.3859 3.05988 13.158C2.92837 11.8989 3.01292 10.6266 3.30988 9.39604V9.39704ZM9.29988 16.573C8.6239 15.9098 7.84774 15.357 6.99988 14.935V10.978L8.81788 11.758C9.19138 11.9181 9.59352 12.0007 9.99988 12.0007C10.4063 12.0007 10.8084 11.9181 11.1819 11.758L16.6899 9.39704C16.9886 10.6274 17.0732 11.9 16.9399 13.159C16.9159 13.3869 16.8145 13.5996 16.6525 13.7616C16.4905 13.9236 16.2777 14.0251 16.0499 14.049C14.0324 14.2611 12.1464 15.1508 10.6999 16.573C10.513 16.7563 10.2616 16.8589 9.99988 16.8589C9.73813 16.8589 9.48681 16.7563 9.29988 16.573ZM5.99988 18C6.2651 18 6.51945 17.8947 6.70699 17.7071C6.89453 17.5196 6.99988 17.2653 6.99988 17V14.935C6.36388 14.6191 5.69248 14.38 4.99988 14.223V17C4.99988 17.2653 5.10524 17.5196 5.29278 17.7071C5.48031 17.8947 5.73467 18 5.99988 18Z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="mb-2 text-2xl text-white font-bold dark:text-white ">Experienced experts</h3>
                                <p class="font-light text-white dark:text-white ">You can fully rely and trust our team
                                    of international experts
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-row-reverse justify-between gap-[20px] md:block">
                            <div>
                                <svg class="mb-2 w-10 h-10 text-white md:w-12 md:h-12 dark:text-primary-500"
                                     fill="currentColor"
                                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9 2C8.73478 2 8.48043 2.10536 8.29289 2.29289C8.10536 2.48043 8 2.73478 8 3C8 3.26522 8.10536 3.51957 8.29289 3.70711C8.48043 3.89464 8.73478 4 9 4H11C11.2652 4 11.5196 3.89464 11.7071 3.70711C11.8946 3.51957 12 3.26522 12 3C12 2.73478 11.8946 2.48043 11.7071 2.29289C11.5196 2.10536 11.2652 2 11 2H9Z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M4 5C4 4.46957 4.21071 3.96086 4.58579 3.58579C4.96086 3.21071 5.46957 3 6 3C6 3.79565 6.31607 4.55871 6.87868 5.12132C7.44129 5.68393 8.20435 6 9 6H11C11.7956 6 12.5587 5.68393 13.1213 5.12132C13.6839 4.55871 14 3.79565 14 3C14.5304 3 15.0391 3.21071 15.4142 3.58579C15.7893 3.96086 16 4.46957 16 5V16C16 16.5304 15.7893 17.0391 15.4142 17.4142C15.0391 17.7893 14.5304 18 14 18H6C5.46957 18 4.96086 17.7893 4.58579 17.4142C4.21071 17.0391 4 16.5304 4 16V5ZM13.707 10.707C13.8892 10.5184 13.99 10.2658 13.9877 10.0036C13.9854 9.7414 13.8802 9.49059 13.6948 9.30518C13.5094 9.11977 13.2586 9.0146 12.9964 9.01233C12.7342 9.01005 12.4816 9.11084 12.293 9.293L9 12.586L7.707 11.293C7.5184 11.1108 7.2658 11.01 7.0036 11.0123C6.7414 11.0146 6.49059 11.1198 6.30518 11.3052C6.11977 11.4906 6.0146 11.7414 6.01233 12.0036C6.01005 12.2658 6.11084 12.5184 6.293 12.707L8.293 14.707C8.48053 14.8945 8.73484 14.9998 9 14.9998C9.26516 14.9998 9.51947 14.8945 9.707 14.707L13.707 10.707Z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="mb-2 text-2xl font-bold text-white dark:text-white ">9M+ cars in
                                    database</h3>
                                <p class="font-light text-white dark:text-white ">With us you can check the car before
                                    buying for free</p>
                            </div>
                        </div>
                        <div class="flex flex-row-reverse justify-between gap-[20px] md:block">
                            <div>
                                <svg class="mb-2 w-10 h-10 text-white md:w-12 md:h-12 dark:text-primary-500"
                                     fill="currentColor"
                                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="mb-2 text-2xl text-white font-bold dark:text-white ">Easy way to buy</h3>
                                <p class="font-light text-white dark:text-white ">You can buy a car in just 15 clicks.
                                    We will do the rest for you</p>
                            </div>
                        </div>
                        <div class="flex flex-row-reverse justify-between gap-[20px] md:block">
                            <div>
                                <svg class="mb-2 w-10 h-10 text-white md:w-12 md:h-12 dark:text-primary-500"
                                     fill="currentColor"
                                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="mb-2 text-2xl text-white font-bold dark:text-white ">21+ countries</h3>
                                <p class="font-light text-white dark:text-gray-400 ">Number of countries where we
                                    deliver cars to our customers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 4 Auto -->
        <section class="bg-white dark:bg-gray-900">
            <div class="mx-auto max-w-[1290px] px-[15px]">
                <div class="py-8 mx-auto max-w-screen-xl lg:py-16 lg:px-0">
                    <div class="container mx-auto text-center my-8">
                        <h2 class="mb-4  text-5xl md:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white ">
                            Explore the world of auto auctions for yourself
                        </h2>
                        <p class="font-light text-gray-500 text-base md:text-xl dark:text-gray-400  max-w-full ">
                            Millions of cars from around the world in one place. </p>
                        <p class="font-light text-gray-500 text-base md:text-xl dark:text-gray-400  max-w-full ">You'll
                            always find exactly what you need.</p>
                    </div>

                    <!-- grid container for cards -->

                    <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 md:px-[44px]">
                        @foreach($data_card as $key=>$item_card)
                            @include("components.car_card")
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <!-- 5 Block Images with heading and description-->
        <section class="bg-white dark:bg-gray-900">
            <div class="mx-auto max-w-[1290px] px-[15px]">
                <div class="gap-16 items-center py-8  mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 ">
                    <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400 ">
                        <h2 class="mb-4 text-3xl md:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white ">
                            Full Range of Services and Logistics for Any Country</h2>
                        <p class="mb-4 text-base md:text-lg ">Our commitment knows no borders. Whether you're situated
                            locally or internationally, our comprehensive suite of services
                            and logistics ensures a seamless experience tailored to your needs, transcending
                            geographical boundaries.</p>
                        <p>Reach out to our support team for guidance, consult with your personal manager, and together,
                            find the perfect vehicle.
                            Place your bid at the auction, granting us the opportunity to deliver this car to your
                            doorstep.
                        </p>
                    </div>
                    <div class="grid grid-cols-2 gap-4 mt-8">
                        <img class="w-full rounded-lg"
                             src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-2.png"
                             alt="office content 1">
                        <img class="mt-4 w-full lg:mt-10 rounded-lg"
                             src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-1.png"
                             alt="office content 2">
                    </div>
                </div>
            </div>
        </section>

        <!-- 6 Block start  FAQ as accordion -->
        <section class="bg-white dark:bg-gray-900">
            <div class="mx-auto max-w-[1290px] px-[15px]">
                <div class="py-8  mx-auto max-w-screen-xl lg:pt-[40px] lg:pb-[40px]  ">
                    <h2
                        class="mb-6 lg:mb-8 text-3xl md:text-4xl  tracking-tight font-extrabold text-center text-gray-900 dark:text-white ">
                        Frequently asked questions</h2>
                    <div class="mx-auto max-w-screen-md ">
                        <div id="accordion-flush" data-accordion="collapse"
                             data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white"
                             data-inactive-classes="text-gray-500 dark:text-gray-400">
                            <h2 id="accordion-flush-heading-1">
                                <button type="button"
                                        class="flex justify-between items-center py-5 w-full font-medium text-left text-gray-900 bg-white border-b border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-white "
                                        data-accordion-target="#accordion-flush-body-1" aria-expanded="true"
                                        aria-controls="accordion-flush-body-1">
                                    <span>How can I participate in car auctions?</span>
                                    <svg data-accordion-icon="" class="w-6 h-6 rotate-180 shrink-0" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-flush-body-1" class="" aria-labelledby="accordion-flush-heading-1">
                                <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                    <p class="mb-2 text-gray-500 dark:text-gray-400 ">To accomplish this, you'll need to
                                        register an account on our website, select the vehicle that catches your
                                        interest,
                                        and input your desired bid amount in the 'Bid' field on its page. Should your
                                        final bid emerge victorious, our managers
                                        will reach out to you to confirm the delivery destination of the car."</p>
                                    <p class="text-gray-500 dark:text-gray-400 ">You can find more detailed information
                                        about the car purchasing process on the
                                        <a href="#"
                                           class="text-primary-600 dark:text-primary-500 hover:underline ">dedicated
                                            page.
                                        </a>
                                </div>
                            </div>
                            <h2 id="accordion-flush-heading-2">
                                <button type="button"
                                        class="flex justify-between items-center py-5 w-full font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 "
                                        data-accordion-target="#accordion-flush-body-2" aria-expanded="false"
                                        aria-controls="accordion-flush-body-2">
                                    <span>What kind of support does your company provide during auctions?</span>
                                    <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor"
                                         viewBox="0 0 20 20"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                                <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                    <p class="mb-2 text-gray-500 dark:text-gray-400 ">Flowbite is first conceptualized
                                        and
                                        designed using the Figma software so everything you see in the library has a
                                        design
                                        equivalent in our Figma file.</p>
                                    <p class="text-gray-500 dark:text-gray-400 ">Check out the <a href="#"
                                                                                                  class="text-primary-600 dark:text-primary-500 hover:underline ">Figma
                                            design
                                            system</a> based on the utility classes from Tailwind CSS and components
                                        from
                                        Flowbite.</p>
                                </div>
                            </div>
                            <h2 id="accordion-flush-heading-3">
                                <button type="button"
                                        class="flex justify-between items-center py-5 w-full font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 "
                                        data-accordion-target="#accordion-flush-body-3" aria-expanded="false"
                                        aria-controls="accordion-flush-body-3">
                                    <span>What vehicle delivery services do you offer?</span>
                                    <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor"
                                         viewBox="0 0 20 20"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                                <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                    <p class="mb-2 text-gray-500 dark:text-gray-400 ">The main difference is that the
                                        core
                                        components from Flowbite are open source under the MIT license, whereas Tailwind
                                        UI is a
                                        paid product. Another difference is that Flowbite relies on smaller and
                                        standalone
                                        components, whereas Tailwind UI offers sections of pages.</p>
                                    <p class="mb-2 text-gray-500 dark:text-gray-400 ">However, we actually recommend
                                        using both
                                        Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason
                                        stopping
                                        you from using the best of two worlds.</p>
                                    <p class="mb-2 text-gray-500 dark:text-gray-400 ">Learn more about these
                                        technologies:</p>
                                    <ul class="pl-5 list-disc text-gray-500 dark:text-gray-400">
                                        <li><a href="#" class="text-primary-600 dark:text-primary-500 hover:underline ">Flowbite
                                                Pro</a></li>
                                        <li><a href="#" class="text-primary-600 dark:text-primary-500 hover:underline ">Tailwind
                                                UI</a></li>
                                    </ul>
                                </div>
                            </div>
                            <h2 id="accordion-flush-heading-4">
                                <button type="button"
                                        class="flex justify-between items-center py-5 w-full font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 "
                                        data-accordion-target="#accordion-flush-body-4" aria-expanded="false"
                                        aria-controls="accordion-flush-body-4">
                                    <span>What are the estimated delivery times to my country?</span>
                                    <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor"
                                         viewBox="0 0 20 20"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-flush-body-4" class="hidden" aria-labelledby="accordion-flush-heading-4">
                                <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                    <p class="mb-2 text-gray-500 dark:text-gray-400 ">The main difference is that the
                                        core
                                        components from Flowbite are open source under the MIT license, whereas Tailwind
                                        UI is a
                                        paid product. Another difference is that Flowbite relies on smaller and
                                        standalone
                                        components, whereas Tailwind UI offers sections of pages.</p>
                                    <p class="mb-2 text-gray-500 dark:text-gray-400 ">However, we actually recommend
                                        using both
                                        Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason
                                        stopping
                                        you from using the best of two worlds.</p>
                                    <p class="mb-2 text-gray-500 dark:text-gray-400 ">Learn more about these
                                        technologies:</p>
                                    <ul class="pl-5 list-disc text-gray-500 dark:text-gray-400">
                                        <li><a href="#" class="text-primary-600 dark:text-primary-500 hover:underline ">Flowbite
                                                Pro</a></li>
                                        <li><a href="#" class="text-primary-600 dark:text-primary-500 hover:underline ">Tailwind
                                                UI</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 7 Our blog -->
        <section class="bg-white dark:bg-gray-900">
            <div class="mx-auto max-w-[1290px] px-[15px]">
                <div class="py-8 mx-auto max-w-screen-xl lg:pb-[96px] lg:pt-[40px] ">
                    <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
                        <h2 class="mb-4 text-3xl md:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white ">
                            Our Blog</h2>
                        <p class="font-light text-gray-500 text-base md:text-xl dark:text-gray-400 ">Explore automotive
                            auctions with us and gain valuable insights from our international experts.</p>
                    </div>

                    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                        <!-- 1 карточка -->
                        @for($i = 0; $i <3; $i++)
                            <article
                                class="p-4 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                                <a href="{{route("page.blog")}}">
                                    <img class="mb-5 rounded-lg"
                                         src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/blog/office-laptops.png"
                                         alt="office laptop working">
                                </a>
                                <span
                                    class="bg-purple-100 text-purple-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-purple-200 dark:text-purple-900 ">Article</span>
                                <div>
                                    <h2 class="my-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white dark:hover:text-gray-300 inline-flex">
                                        <a href="#">Our first office</a>
                                    </h2>
                                </div>

                                <p class="mb-4 font-light text-gray-500 dark:text-gray-400 ">Over the past year,
                                    Volosoft
                                    has undergone
                                    many changes! After months of preparation and some hard work, we moved to our new
                                    office.</p>
                                <div class="flex items-center space-x-4">
                                    <img class="w-10 h-10 rounded-full"
                                         src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                         alt="Jese Leos avatar">
                                    <div class="font-medium dark:text-white">
                                        <div>Marcin</div>
                                        <div class="text-sm font-normal text-gray-500 dark:text-gray-400 ">Head of
                                            logistics
                                            department
                                        </div>
                                    </div>
                                </div>
                            </article>
                    @endfor
{{--                    <!-- 2 карточка -->--}}
{{--                        <article--}}
{{--                            class="p-4 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">--}}
{{--                            <a href="#">--}}
{{--                                <img class="mb-5 rounded-lg"--}}
{{--                                     src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/blog/google-hq.png"--}}
{{--                                     alt="Google HQ">--}}
{{--                            </a>--}}
{{--                            <span--}}
{{--                                class="bg-purple-100 text-purple-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-purple-200 dark:text-purple-900 ">Article</span>--}}
{{--                            <div>--}}
{{--                                <h2--}}
{{--                                    class="my-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white dark:hover:text-gray-300 inline-flex">--}}
{{--                                    <a href="#">Our first project with React</a>--}}
{{--                                </h2>--}}
{{--                            </div>--}}
{{--                            <p class="mb-4 font-light text-gray-500 dark:text-gray-400 ">Over the past year, Volosoft--}}
{{--                                has undergone--}}
{{--                                many changes! After months of preparation and some hard work, we moved to our new--}}
{{--                                office.</p>--}}
{{--                            <div class="flex items-center space-x-4">--}}
{{--                                <img class="w-10 h-10 rounded-full"--}}
{{--                                     src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png"--}}
{{--                                     alt="Roberta Casas avatar">--}}
{{--                                <div class="font-medium dark:text-white ">--}}
{{--                                    <div>Roberta Casas</div>--}}
{{--                                    <div class="text-sm font-normal text-gray-500 dark:text-gray-400 ">Auto selection--}}
{{--                                        expert--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </article>--}}
{{--                        <!-- 3 карточка -->--}}
{{--                        <article--}}
{{--                            class="p-4 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">--}}
{{--                            <a href="#">--}}
{{--                                <img class="mb-5 rounded-lg"--}}
{{--                                     src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/blog/office-laptops-2.png"--}}
{{--                                     alt="office laptops">--}}
{{--                            </a>--}}
{{--                            <span--}}
{{--                                class="bg-purple-100 text-purple-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-purple-200 dark:text-purple-900 ">Article</span>--}}
{{--                            <div>--}}
{{--                                <h2--}}
{{--                                    class="my-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white dark:hover:text-gray-300 inline-flex">--}}
{{--                                    <a href="#">Our first project with React</a>--}}
{{--                                </h2>--}}
{{--                            </div>--}}
{{--                            <p class="mb-4 font-light text-gray-500 dark:text-gray-400 ">Over the past year, Volosoft--}}
{{--                                has undergone--}}
{{--                                many changes! After months of preparation and some hard work, we moved to our new--}}
{{--                                office.</p>--}}
{{--                            <div class="flex items-center space-x-4">--}}
{{--                                <img class="w-10 h-10 rounded-full"--}}
{{--                                     src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/sofia-mcguire.png"--}}
{{--                                     alt="Sofia McGuire avatar">--}}
{{--                                <div class="font-medium dark:text-white ">--}}
{{--                                    <div>Sofia McGuire</div>--}}
{{--                                    <div class="text-sm font-normal text-gray-500 dark:text-gray-400 ">Client support--}}
{{--                                        manager--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </article>--}}
                    </div>
                </div>
            </div>
        </section>


    </div>
@stop
@section("script")
    <script src="js/main-js.js"></script>
@stop
