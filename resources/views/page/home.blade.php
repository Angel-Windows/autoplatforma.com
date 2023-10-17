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
        <!-- Block end -->


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
                                    <svg class="w-4 h-4 mt-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                         fill="currentColor">
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
                                        width="23" height="20" viewBox="0 0 23 20" xmlns="http://www.w3.org/2000/svg"
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
                                        <div><img class="mt-[1px]" src="img/card/status-online.svg" alt="icon"></div>

                                        <p class="font-medium text-xs  text-center font-medium ">Live bid</p>

                                    </div>

                                </div>

                                <p class="leading-tight text-xs font-medium text-gray-500 mb-1 ">Condition: Run & Drive
                                    Verified</p>
                                <p class="leading-tight text-xs font-medium text-gray-500 mb-1 ">Primary Damage: front
                                    end</p>
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
                                    <p class="text-xs font-medium text-gray-900 dark:text-gray-300">Fuel: gasoline</p>
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
                                    <svg class="w-4 h-4 mt-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                         fill="currentColor">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M1.858 5.30002H3.2202C3.2825 4.21782 3.4883 3.22102 3.8061 2.41742C3.29441 2.73097 2.85579 3.15046 2.51977 3.64768C2.18374 4.1449 1.95809 4.70831 1.858 5.30002ZM5.9999 0.400024C4.51469 0.400024 3.09031 0.990023 2.0401 2.04023C0.989901 3.09043 0.399902 4.51481 0.399902 6.00002C0.399902 7.48524 0.989901 8.90962 2.0401 9.95982C3.09031 11.01 4.51469 11.6 5.9999 11.6C7.48512 11.6 8.9095 11.01 9.9597 9.95982C11.0099 8.90962 11.5999 7.48524 11.5999 6.00002C11.5999 4.51481 11.0099 3.09043 9.9597 2.04023C8.9095 0.990023 7.48512 0.400024 5.9999 0.400024V0.400024ZM5.9999 1.80002C5.9467 1.80002 5.8375 1.82242 5.6744 1.98342C5.5078 2.14722 5.3265 2.41952 5.1585 2.81082C4.8862 3.44572 4.6874 4.31022 4.6223 5.30002H7.3775C7.3124 4.31022 7.1136 3.44572 6.8413 2.81082C6.6733 2.41882 6.4913 2.14722 6.3254 1.98342C6.1623 1.82242 6.0531 1.80002 5.9999 1.80002ZM8.7796 5.30002C8.7173 4.21782 8.5115 3.22102 8.1937 2.41742C8.7054 2.73097 9.14401 3.15046 9.48004 3.64768C9.81607 4.1449 10.0417 4.70831 10.1418 5.30002H8.7796ZM7.3775 6.70002H4.6223C4.6874 7.68982 4.8862 8.55432 5.1585 9.18922C5.3265 9.58122 5.5085 9.85283 5.6744 10.0166C5.8375 10.1776 5.9467 10.2 5.9999 10.2C6.0531 10.2 6.1623 10.1776 6.3254 10.0166C6.492 9.85283 6.674 9.58052 6.8413 9.18922C7.1136 8.55432 7.3124 7.68982 7.3775 6.70002ZM8.1937 9.58263C8.5115 8.77973 8.7173 7.78222 8.7796 6.70002H10.1418C10.0417 7.29174 9.81607 7.85515 9.48004 8.35237C9.14401 8.84959 8.7054 9.26908 8.1937 9.58263V9.58263ZM3.8061 9.58263C3.4883 8.77903 3.2825 7.78222 3.2209 6.70002H1.858C1.95809 7.29174 2.18374 7.85515 2.51977 8.35237C2.85579 8.84959 3.29441 9.26908 3.8061 9.58263V9.58263Z"/>
                                    </svg>
                                    <p class="mt-1 uppercase ">IAAI</p>

                                </div>


                                <!-- yellow block -->
                                <div class="absolute bottom-[-15px] left-[-7px]">
                                    <div class="inline-flex gap-1 bg-yellow-300 px-2 py-[5px] relative rounded-[3px]">
                                        <img src="img/card/fire.svg" alt="icon">
                                        <p class="text-xs font-medium text-gray-900 ">Reccomend</p>
                                        <div class="absolute top-[23px] left-0">
                                            <svg class="text-yellow-300" xmlns="http://www.w3.org/2000/svg" id="Шар_2"
                                                 fill="currentColor"
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
                                        width="23" height="20"
                                        viewBox="0 0 23 20" xmlns="http://www.w3.org/2000/svg"
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
                                        <div><img class="mt-[1px]" src="img/card/status-online.svg" alt="icon"></div>

                                        <p class="font-medium text-xs  text-center font-medium ">Live bid</p>

                                    </div>

                                </div>

                                <p class="leading-tight text-xs font-medium text-gray-500 mb-1 ">Condition: Run & Drive
                                    Verified</p>
                                <p class="leading-tight text-xs font-medium text-gray-500 mb-1 ">Primary Damage: front
                                    end</p>


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
                                    <p class="text-xs font-medium text-gray-900 dark:text-gray-300">Fuel: gasoline</p>
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
                                    <svg class="w-4 h-4 mt-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                         fill="currentColor">
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
                                        <div><img class="mt-[1px]" src="img/card/status-online.svg" alt="icon"></div>

                                        <p class="font-medium text-xs  text-center font-medium ">Live bid</p>

                                    </div>

                                </div>

                                <p class="leading-tight text-xs font-medium text-gray-500 mb-1 ">Condition: Run & Drive
                                    Verified</p>
                                <p class="leading-tight text-xs font-medium text-gray-500 mb-1 ">Primary Damage: front
                                    end</p>
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
                                    <p class="text-xs font-medium text-gray-900 dark:text-gray-300">Fuel: gasoline</p>
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
                                    <svg class="w-4 h-4 mt-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                         fill="currentColor">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M1.858 5.30002H3.2202C3.2825 4.21782 3.4883 3.22102 3.8061 2.41742C3.29441 2.73097 2.85579 3.15046 2.51977 3.64768C2.18374 4.1449 1.95809 4.70831 1.858 5.30002ZM5.9999 0.400024C4.51469 0.400024 3.09031 0.990023 2.0401 2.04023C0.989901 3.09043 0.399902 4.51481 0.399902 6.00002C0.399902 7.48524 0.989901 8.90962 2.0401 9.95982C3.09031 11.01 4.51469 11.6 5.9999 11.6C7.48512 11.6 8.9095 11.01 9.9597 9.95982C11.0099 8.90962 11.5999 7.48524 11.5999 6.00002C11.5999 4.51481 11.0099 3.09043 9.9597 2.04023C8.9095 0.990023 7.48512 0.400024 5.9999 0.400024V0.400024ZM5.9999 1.80002C5.9467 1.80002 5.8375 1.82242 5.6744 1.98342C5.5078 2.14722 5.3265 2.41952 5.1585 2.81082C4.8862 3.44572 4.6874 4.31022 4.6223 5.30002H7.3775C7.3124 4.31022 7.1136 3.44572 6.8413 2.81082C6.6733 2.41882 6.4913 2.14722 6.3254 1.98342C6.1623 1.82242 6.0531 1.80002 5.9999 1.80002ZM8.7796 5.30002C8.7173 4.21782 8.5115 3.22102 8.1937 2.41742C8.7054 2.73097 9.14401 3.15046 9.48004 3.64768C9.81607 4.1449 10.0417 4.70831 10.1418 5.30002H8.7796ZM7.3775 6.70002H4.6223C4.6874 7.68982 4.8862 8.55432 5.1585 9.18922C5.3265 9.58122 5.5085 9.85283 5.6744 10.0166C5.8375 10.1776 5.9467 10.2 5.9999 10.2C6.0531 10.2 6.1623 10.1776 6.3254 10.0166C6.492 9.85283 6.674 9.58052 6.8413 9.18922C7.1136 8.55432 7.3124 7.68982 7.3775 6.70002ZM8.1937 9.58263C8.5115 8.77973 8.7173 7.78222 8.7796 6.70002H10.1418C10.0417 7.29174 9.81607 7.85515 9.48004 8.35237C9.14401 8.84959 8.7054 9.26908 8.1937 9.58263V9.58263ZM3.8061 9.58263C3.4883 8.77903 3.2825 7.78222 3.2209 6.70002H1.858C1.95809 7.29174 2.18374 7.85515 2.51977 8.35237C2.85579 8.84959 3.29441 9.26908 3.8061 9.58263V9.58263Z"/>
                                    </svg>
                                    <p class="mt-1 uppercase ">IAAI</p>

                                </div>


                                <!-- yellow block -->
                                <div class="absolute bottom-[-15px] left-[-7px]">
                                    <div class="inline-flex gap-1 bg-yellow-300 px-2 py-[5px] relative rounded-[3px]">
                                        <img src="img/card/fire.svg" alt="icon">
                                        <p class="text-xs font-medium text-gray-900 ">Reccomend</p>
                                        <div class="absolute top-[23px] left-0">
                                            <svg class="text-yellow-300" xmlns="http://www.w3.org/2000/svg" id="Шар_2"
                                                 fill="currentColor"
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
                                        <div><img class="mt-[1px]" src="img/card/status-online.svg" alt="icon"></div>

                                        <p class="font-medium text-xs  text-center font-medium ">Live bid</p>

                                    </div>

                                </div>

                                <p class="leading-tight text-xs font-medium text-gray-500 mb-1 ">Condition: Run & Drive
                                    Verified</p>
                                <p class="leading-tight text-xs font-medium text-gray-500 mb-1 ">Primary Damage: front
                                    end</p>


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
                                    <p class="text-xs font-medium text-gray-900 dark:text-gray-300">Fuel: gasoline</p>
                                </div>
                            </div>

                        </article>


                        <!-- ------------------------------------------------------------------- -->
                        <article
                            class="w-full bg-white rounded-[15px] border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 relative">
                            <div class="relative">
                                <a href="#">
                                    <img class="rounded-t-[15px] w-full" src="img/card/01.png" alt="auto">

                                </a>

                                <!-- primary block -->
                                <div
                                    class="text-white text-xs font-medium bg-primary-600 inline-flex px-4 py-0.5 pb-1 rounded-full absolute top-[13px] left-[15px]">
                                    <svg class="w-4 h-4 mt-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                         fill="currentColor">
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
                                        <div><img class="mt-[1px]" src="img/card/status-online.svg" alt="icon"></div>

                                        <p class="font-medium text-xs  text-center font-medium ">Live bid</p>

                                    </div>

                                </div>

                                <p class="leading-tight text-xs font-medium text-gray-500 mb-1 ">Condition: Run & Drive
                                    Verified</p>
                                <p class="leading-tight text-xs font-medium text-gray-500 mb-1 ">Primary Damage: front
                                    end</p>
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
                                    <p class="text-xs font-medium text-gray-900 dark:text-gray-300">Fuel: gasoline</p>
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
                                    <svg class="w-4 h-4 mt-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                         fill="currentColor">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M1.858 5.30002H3.2202C3.2825 4.21782 3.4883 3.22102 3.8061 2.41742C3.29441 2.73097 2.85579 3.15046 2.51977 3.64768C2.18374 4.1449 1.95809 4.70831 1.858 5.30002ZM5.9999 0.400024C4.51469 0.400024 3.09031 0.990023 2.0401 2.04023C0.989901 3.09043 0.399902 4.51481 0.399902 6.00002C0.399902 7.48524 0.989901 8.90962 2.0401 9.95982C3.09031 11.01 4.51469 11.6 5.9999 11.6C7.48512 11.6 8.9095 11.01 9.9597 9.95982C11.0099 8.90962 11.5999 7.48524 11.5999 6.00002C11.5999 4.51481 11.0099 3.09043 9.9597 2.04023C8.9095 0.990023 7.48512 0.400024 5.9999 0.400024V0.400024ZM5.9999 1.80002C5.9467 1.80002 5.8375 1.82242 5.6744 1.98342C5.5078 2.14722 5.3265 2.41952 5.1585 2.81082C4.8862 3.44572 4.6874 4.31022 4.6223 5.30002H7.3775C7.3124 4.31022 7.1136 3.44572 6.8413 2.81082C6.6733 2.41882 6.4913 2.14722 6.3254 1.98342C6.1623 1.82242 6.0531 1.80002 5.9999 1.80002ZM8.7796 5.30002C8.7173 4.21782 8.5115 3.22102 8.1937 2.41742C8.7054 2.73097 9.14401 3.15046 9.48004 3.64768C9.81607 4.1449 10.0417 4.70831 10.1418 5.30002H8.7796ZM7.3775 6.70002H4.6223C4.6874 7.68982 4.8862 8.55432 5.1585 9.18922C5.3265 9.58122 5.5085 9.85283 5.6744 10.0166C5.8375 10.1776 5.9467 10.2 5.9999 10.2C6.0531 10.2 6.1623 10.1776 6.3254 10.0166C6.492 9.85283 6.674 9.58052 6.8413 9.18922C7.1136 8.55432 7.3124 7.68982 7.3775 6.70002ZM8.1937 9.58263C8.5115 8.77973 8.7173 7.78222 8.7796 6.70002H10.1418C10.0417 7.29174 9.81607 7.85515 9.48004 8.35237C9.14401 8.84959 8.7054 9.26908 8.1937 9.58263V9.58263ZM3.8061 9.58263C3.4883 8.77903 3.2825 7.78222 3.2209 6.70002H1.858C1.95809 7.29174 2.18374 7.85515 2.51977 8.35237C2.85579 8.84959 3.29441 9.26908 3.8061 9.58263V9.58263Z"/>
                                    </svg>
                                    <p class="mt-1 uppercase ">IAAI</p>

                                </div>


                                <!-- yellow block -->
                                <div class="absolute bottom-[-15px] left-[-7px]">
                                    <div class="inline-flex gap-1 bg-yellow-300 px-2 py-[5px] relative rounded-[3px]">
                                        <img src="img/card/fire.svg" alt="icon">
                                        <p class="text-xs font-medium text-gray-900 ">Reccomend</p>
                                        <div class="absolute top-[23px] left-0">
                                            <svg class="text-yellow-300" xmlns="http://www.w3.org/2000/svg" id="Шар_2"
                                                 fill="currentColor"
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
                                        <div><img class="mt-[1px]" src="img/card/status-online.svg" alt="icon"></div>

                                        <p class="font-medium text-xs  text-center font-medium ">Live bid</p>

                                    </div>

                                </div>

                                <p class="leading-tight text-xs font-medium text-gray-500 mb-1 ">Condition: Run & Drive
                                    Verified</p>
                                <p class="leading-tight text-xs font-medium text-gray-500 mb-1 ">Primary Damage: front
                                    end</p>


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
                                    <p class="text-xs font-medium text-gray-900 dark:text-gray-300">Fuel: gasoline</p>
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
                                    <svg class="w-4 h-4 mt-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                         fill="currentColor">
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
                                        <div><img class="mt-[1px]" src="img/card/status-online.svg" alt="icon"></div>

                                        <p class="font-medium text-xs  text-center font-medium ">Live bid</p>

                                    </div>

                                </div>

                                <p class="leading-tight text-xs font-medium text-gray-500 mb-1 ">Condition: Run & Drive
                                    Verified</p>
                                <p class="leading-tight text-xs font-medium text-gray-500 mb-1 ">Primary Damage: front
                                    end</p>
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
                                    <p class="text-xs font-medium text-gray-900 dark:text-gray-300">Fuel: gasoline</p>
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
                                    <svg class="w-4 h-4 mt-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                         fill="currentColor">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M1.858 5.30002H3.2202C3.2825 4.21782 3.4883 3.22102 3.8061 2.41742C3.29441 2.73097 2.85579 3.15046 2.51977 3.64768C2.18374 4.1449 1.95809 4.70831 1.858 5.30002ZM5.9999 0.400024C4.51469 0.400024 3.09031 0.990023 2.0401 2.04023C0.989901 3.09043 0.399902 4.51481 0.399902 6.00002C0.399902 7.48524 0.989901 8.90962 2.0401 9.95982C3.09031 11.01 4.51469 11.6 5.9999 11.6C7.48512 11.6 8.9095 11.01 9.9597 9.95982C11.0099 8.90962 11.5999 7.48524 11.5999 6.00002C11.5999 4.51481 11.0099 3.09043 9.9597 2.04023C8.9095 0.990023 7.48512 0.400024 5.9999 0.400024V0.400024ZM5.9999 1.80002C5.9467 1.80002 5.8375 1.82242 5.6744 1.98342C5.5078 2.14722 5.3265 2.41952 5.1585 2.81082C4.8862 3.44572 4.6874 4.31022 4.6223 5.30002H7.3775C7.3124 4.31022 7.1136 3.44572 6.8413 2.81082C6.6733 2.41882 6.4913 2.14722 6.3254 1.98342C6.1623 1.82242 6.0531 1.80002 5.9999 1.80002ZM8.7796 5.30002C8.7173 4.21782 8.5115 3.22102 8.1937 2.41742C8.7054 2.73097 9.14401 3.15046 9.48004 3.64768C9.81607 4.1449 10.0417 4.70831 10.1418 5.30002H8.7796ZM7.3775 6.70002H4.6223C4.6874 7.68982 4.8862 8.55432 5.1585 9.18922C5.3265 9.58122 5.5085 9.85283 5.6744 10.0166C5.8375 10.1776 5.9467 10.2 5.9999 10.2C6.0531 10.2 6.1623 10.1776 6.3254 10.0166C6.492 9.85283 6.674 9.58052 6.8413 9.18922C7.1136 8.55432 7.3124 7.68982 7.3775 6.70002ZM8.1937 9.58263C8.5115 8.77973 8.7173 7.78222 8.7796 6.70002H10.1418C10.0417 7.29174 9.81607 7.85515 9.48004 8.35237C9.14401 8.84959 8.7054 9.26908 8.1937 9.58263V9.58263ZM3.8061 9.58263C3.4883 8.77903 3.2825 7.78222 3.2209 6.70002H1.858C1.95809 7.29174 2.18374 7.85515 2.51977 8.35237C2.85579 8.84959 3.29441 9.26908 3.8061 9.58263V9.58263Z"/>
                                    </svg>
                                    <p class="mt-1 uppercase ">IAAI</p>

                                </div>


                                <!-- yellow block -->
                                <div class="absolute bottom-[-15px] left-[-7px]">
                                    <div class="inline-flex gap-1 bg-yellow-300 px-2 py-[5px] relative rounded-[3px]">
                                        <img src="img/card/fire.svg" alt="icon">
                                        <p class="text-xs font-medium text-gray-900 ">Reccomend</p>
                                        <div class="absolute top-[23px] left-0">
                                            <svg class="text-yellow-300" xmlns="http://www.w3.org/2000/svg" id="Шар_2"
                                                 fill="currentColor"
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
                                        <div><img class="mt-[1px]" src="img/card/status-online.svg" alt="icon"></div>

                                        <p class="font-medium text-xs  text-center font-medium ">Live bid</p>

                                    </div>

                                </div>

                                <p class="leading-tight text-xs font-medium text-gray-500 mb-1 ">Condition: Run & Drive
                                    Verified</p>
                                <p class="leading-tight text-xs font-medium text-gray-500 mb-1 ">Primary Damage: front
                                    end</p>


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
                                    <p class="text-xs font-medium text-gray-900 dark:text-gray-300">Fuel: gasoline</p>
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
                                    <svg class="w-4 h-4 mt-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                         fill="currentColor">
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
                                        <div><img class="mt-[1px]" src="img/card/status-online.svg" alt="icon"></div>

                                        <p class="font-medium text-xs  text-center font-medium ">Live bid</p>

                                    </div>

                                </div>

                                <p class="leading-tight text-xs font-medium text-gray-500 mb-1 ">Condition: Run & Drive
                                    Verified</p>
                                <p class="leading-tight text-xs font-medium text-gray-500 mb-1 ">Primary Damage: front
                                    end</p>
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
                                    <p class="text-xs font-medium text-gray-900 dark:text-gray-300">Fuel: gasoline</p>
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
                                    <svg class="w-4 h-4 mt-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                         fill="currentColor">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M1.858 5.30002H3.2202C3.2825 4.21782 3.4883 3.22102 3.8061 2.41742C3.29441 2.73097 2.85579 3.15046 2.51977 3.64768C2.18374 4.1449 1.95809 4.70831 1.858 5.30002ZM5.9999 0.400024C4.51469 0.400024 3.09031 0.990023 2.0401 2.04023C0.989901 3.09043 0.399902 4.51481 0.399902 6.00002C0.399902 7.48524 0.989901 8.90962 2.0401 9.95982C3.09031 11.01 4.51469 11.6 5.9999 11.6C7.48512 11.6 8.9095 11.01 9.9597 9.95982C11.0099 8.90962 11.5999 7.48524 11.5999 6.00002C11.5999 4.51481 11.0099 3.09043 9.9597 2.04023C8.9095 0.990023 7.48512 0.400024 5.9999 0.400024V0.400024ZM5.9999 1.80002C5.9467 1.80002 5.8375 1.82242 5.6744 1.98342C5.5078 2.14722 5.3265 2.41952 5.1585 2.81082C4.8862 3.44572 4.6874 4.31022 4.6223 5.30002H7.3775C7.3124 4.31022 7.1136 3.44572 6.8413 2.81082C6.6733 2.41882 6.4913 2.14722 6.3254 1.98342C6.1623 1.82242 6.0531 1.80002 5.9999 1.80002ZM8.7796 5.30002C8.7173 4.21782 8.5115 3.22102 8.1937 2.41742C8.7054 2.73097 9.14401 3.15046 9.48004 3.64768C9.81607 4.1449 10.0417 4.70831 10.1418 5.30002H8.7796ZM7.3775 6.70002H4.6223C4.6874 7.68982 4.8862 8.55432 5.1585 9.18922C5.3265 9.58122 5.5085 9.85283 5.6744 10.0166C5.8375 10.1776 5.9467 10.2 5.9999 10.2C6.0531 10.2 6.1623 10.1776 6.3254 10.0166C6.492 9.85283 6.674 9.58052 6.8413 9.18922C7.1136 8.55432 7.3124 7.68982 7.3775 6.70002ZM8.1937 9.58263C8.5115 8.77973 8.7173 7.78222 8.7796 6.70002H10.1418C10.0417 7.29174 9.81607 7.85515 9.48004 8.35237C9.14401 8.84959 8.7054 9.26908 8.1937 9.58263V9.58263ZM3.8061 9.58263C3.4883 8.77903 3.2825 7.78222 3.2209 6.70002H1.858C1.95809 7.29174 2.18374 7.85515 2.51977 8.35237C2.85579 8.84959 3.29441 9.26908 3.8061 9.58263V9.58263Z"/>
                                    </svg>
                                    <p class="mt-1 uppercase ">IAAI</p>

                                </div>


                                <!-- yellow block -->
                                <div class="absolute bottom-[-15px] left-[-7px]">
                                    <div class="inline-flex gap-1 bg-yellow-300 px-2 py-[5px] relative rounded-[3px]">
                                        <img src="img/card/fire.svg" alt="icon">
                                        <p class="text-xs font-medium text-gray-900 ">Reccomend</p>
                                        <div class="absolute top-[23px] left-0">
                                            <svg class="text-yellow-300" xmlns="http://www.w3.org/2000/svg" id="Шар_2"
                                                 fill="currentColor"
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
                                        <div><img class="mt-[1px]" src="img/card/status-online.svg" alt="icon"></div>

                                        <p class="font-medium text-xs  text-center font-medium ">Live bid</p>

                                    </div>

                                </div>

                                <p class="leading-tight text-xs font-medium text-gray-500 mb-1 ">Condition: Run & Drive
                                    Verified</p>
                                <p class="leading-tight text-xs font-medium text-gray-500 mb-1 ">Primary Damage: front
                                    end</p>


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
                                    <p class="text-xs font-medium text-gray-900 dark:text-gray-300">Fuel: gasoline</p>
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
                                    <svg class="w-4 h-4 mt-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                         fill="currentColor">
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
                                        <div><img class="mt-[1px]" src="img/card/status-online.svg" alt="icon"></div>

                                        <p class="font-medium text-xs  text-center font-medium ">Live bid</p>

                                    </div>

                                </div>

                                <p class="leading-tight text-xs font-medium text-gray-500 mb-1 ">Condition: Run & Drive
                                    Verified</p>
                                <p class="leading-tight text-xs font-medium text-gray-500 mb-1 ">Primary Damage: front
                                    end</p>
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
                                    <p class="text-xs font-medium text-gray-900 dark:text-gray-300">Fuel: gasoline</p>
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
                                    <svg class="w-4 h-4 mt-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                         fill="currentColor">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M1.858 5.30002H3.2202C3.2825 4.21782 3.4883 3.22102 3.8061 2.41742C3.29441 2.73097 2.85579 3.15046 2.51977 3.64768C2.18374 4.1449 1.95809 4.70831 1.858 5.30002ZM5.9999 0.400024C4.51469 0.400024 3.09031 0.990023 2.0401 2.04023C0.989901 3.09043 0.399902 4.51481 0.399902 6.00002C0.399902 7.48524 0.989901 8.90962 2.0401 9.95982C3.09031 11.01 4.51469 11.6 5.9999 11.6C7.48512 11.6 8.9095 11.01 9.9597 9.95982C11.0099 8.90962 11.5999 7.48524 11.5999 6.00002C11.5999 4.51481 11.0099 3.09043 9.9597 2.04023C8.9095 0.990023 7.48512 0.400024 5.9999 0.400024V0.400024ZM5.9999 1.80002C5.9467 1.80002 5.8375 1.82242 5.6744 1.98342C5.5078 2.14722 5.3265 2.41952 5.1585 2.81082C4.8862 3.44572 4.6874 4.31022 4.6223 5.30002H7.3775C7.3124 4.31022 7.1136 3.44572 6.8413 2.81082C6.6733 2.41882 6.4913 2.14722 6.3254 1.98342C6.1623 1.82242 6.0531 1.80002 5.9999 1.80002ZM8.7796 5.30002C8.7173 4.21782 8.5115 3.22102 8.1937 2.41742C8.7054 2.73097 9.14401 3.15046 9.48004 3.64768C9.81607 4.1449 10.0417 4.70831 10.1418 5.30002H8.7796ZM7.3775 6.70002H4.6223C4.6874 7.68982 4.8862 8.55432 5.1585 9.18922C5.3265 9.58122 5.5085 9.85283 5.6744 10.0166C5.8375 10.1776 5.9467 10.2 5.9999 10.2C6.0531 10.2 6.1623 10.1776 6.3254 10.0166C6.492 9.85283 6.674 9.58052 6.8413 9.18922C7.1136 8.55432 7.3124 7.68982 7.3775 6.70002ZM8.1937 9.58263C8.5115 8.77973 8.7173 7.78222 8.7796 6.70002H10.1418C10.0417 7.29174 9.81607 7.85515 9.48004 8.35237C9.14401 8.84959 8.7054 9.26908 8.1937 9.58263V9.58263ZM3.8061 9.58263C3.4883 8.77903 3.2825 7.78222 3.2209 6.70002H1.858C1.95809 7.29174 2.18374 7.85515 2.51977 8.35237C2.85579 8.84959 3.29441 9.26908 3.8061 9.58263V9.58263Z"/>
                                    </svg>
                                    <p class="mt-1 uppercase ">IAAI</p>

                                </div>


                                <!-- yellow block -->
                                <div class="absolute bottom-[-15px] left-[-7px]">
                                    <div class="inline-flex gap-1 bg-yellow-300 px-2 py-[5px] relative rounded-[3px]">
                                        <img src="img/card/fire.svg" alt="icon">
                                        <p class="text-xs font-medium text-gray-900 ">Reccomend</p>
                                        <div class="absolute top-[23px] left-0">
                                            <svg class="text-yellow-300" xmlns="http://www.w3.org/2000/svg" id="Шар_2"
                                                 fill="currentColor"
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
                                        <div><img class="mt-[1px]" src="img/card/status-online.svg" alt="icon"></div>

                                        <p class="font-medium text-xs  text-center font-medium ">Live bid</p>

                                    </div>

                                </div>

                                <p class="leading-tight text-xs font-medium text-gray-500 mb-1 ">Condition: Run & Drive
                                    Verified</p>
                                <p class="leading-tight text-xs font-medium text-gray-500 mb-1 ">Primary Damage: front
                                    end</p>


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
                                    <p class="text-xs font-medium text-gray-900 dark:text-gray-300">Fuel: gasoline</p>
                                </div>
                            </div>

                        </article>


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
        <!-- Block end -->

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

        <!-- Block end -->

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
                        <article
                            class="p-4 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
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

                            <p class="mb-4 font-light text-gray-500 dark:text-gray-400 ">Over the past year, Volosoft
                                has undergone
                                many changes! After months of preparation and some hard work, we moved to our new
                                office.</p>
                            <div class="flex items-center space-x-4">
                                <img class="w-10 h-10 rounded-full"
                                     src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                     alt="Jese Leos avatar">
                                <div class="font-medium dark:text-white">
                                    <div>Marcin</div>
                                    <div class="text-sm font-normal text-gray-500 dark:text-gray-400 ">Head of logistics
                                        department
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- 2 карточка -->
                        <article
                            class="p-4 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="mb-5 rounded-lg"
                                     src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/blog/google-hq.png"
                                     alt="Google HQ">
                            </a>
                            <span
                                class="bg-purple-100 text-purple-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-purple-200 dark:text-purple-900 ">Article</span>
                            <div>
                                <h2
                                    class="my-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white dark:hover:text-gray-300 inline-flex">
                                    <a href="#">Our first project with React</a>
                                </h2>
                            </div>
                            <p class="mb-4 font-light text-gray-500 dark:text-gray-400 ">Over the past year, Volosoft
                                has undergone
                                many changes! After months of preparation and some hard work, we moved to our new
                                office.</p>
                            <div class="flex items-center space-x-4">
                                <img class="w-10 h-10 rounded-full"
                                     src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png"
                                     alt="Roberta Casas avatar">
                                <div class="font-medium dark:text-white ">
                                    <div>Roberta Casas</div>
                                    <div class="text-sm font-normal text-gray-500 dark:text-gray-400 ">Auto selection
                                        expert
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- 3 карточка -->
                        <article
                            class="p-4 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="mb-5 rounded-lg"
                                     src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/blog/office-laptops-2.png"
                                     alt="office laptops">
                            </a>
                            <span
                                class="bg-purple-100 text-purple-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-purple-200 dark:text-purple-900 ">Article</span>
                            <div>
                                <h2
                                    class="my-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white dark:hover:text-gray-300 inline-flex">
                                    <a href="#">Our first project with React</a>
                                </h2>
                            </div>
                            <p class="mb-4 font-light text-gray-500 dark:text-gray-400 ">Over the past year, Volosoft
                                has undergone
                                many changes! After months of preparation and some hard work, we moved to our new
                                office.</p>
                            <div class="flex items-center space-x-4">
                                <img class="w-10 h-10 rounded-full"
                                     src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/sofia-mcguire.png"
                                     alt="Sofia McGuire avatar">
                                <div class="font-medium dark:text-white ">
                                    <div>Sofia McGuire</div>
                                    <div class="text-sm font-normal text-gray-500 dark:text-gray-400 ">Client support
                                        manager
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <!-- Block end -->

    </div>
    <!-- Footer -->
    <footer>
        <div class=" dark:bg-gray-800 ">
            <div class="py-6 mx-auto max-w-[1290px] px-[15px]">
                <div class="grid grid-cols-2 gap-8 lg:grid-cols-6 mb-[48px]">

                    <div class="col-span-2">
                        <!-- лого -->
                        <a href="#"
                           class="flex items-center mb-2 text-2xl font-semibold text-gray-900 sm:mb-0 dark:text-white ">
                            <svg class="mr-2 h-8" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M25.2696 13.126C25.1955 13.6364 24.8589 14.3299 24.4728 14.9328C23.9856 15.6936 23.2125 16.2264 22.3276 16.4114L18.43 17.2265C17.8035 17.3575 17.2355 17.6853 16.8089 18.1621L14.2533 21.0188C13.773 21.5556 13.4373 21.4276 13.4373 20.7075C13.4315 20.7342 12.1689 23.9903 15.5149 25.9202C16.8005 26.6618 18.6511 26.3953 19.9367 25.6538L26.7486 21.7247C29.2961 20.2553 31.0948 17.7695 31.6926 14.892C31.7163 14.7781 31.7345 14.6639 31.7542 14.5498L25.2696 13.126Z"
                                    fill="url(#paint0_linear_11430_22515)"/>
                                <path
                                    d="M23.5028 9.20133C24.7884 9.94288 25.3137 11.0469 25.3137 12.53C25.3137 12.7313 25.2979 12.9302 25.2694 13.1261L28.0141 14.3051L31.754 14.5499C32.2329 11.7784 31.2944 8.92561 29.612 6.65804C28.3459 4.9516 26.7167 3.47073 24.7581 2.34097C23.167 1.42325 21.5136 0.818599 19.8525 0.486816L17.9861 2.90382L17.3965 5.67918L23.5028 9.20133Z"
                                    fill="url(#paint1_linear_11430_22515)"/>
                                <path
                                    d="M1.5336 11.2352C1.5329 11.2373 1.53483 11.238 1.53556 11.2358C1.67958 10.8038 1.86018 10.3219 2.08564 9.80704C3.26334 7.11765 5.53286 5.32397 8.32492 4.40943C11.117 3.49491 14.1655 3.81547 16.7101 5.28323L17.3965 5.67913L19.8525 0.486761C12.041 -1.07341 4.05728 3.51588 1.54353 11.2051C1.54233 11.2087 1.53796 11.2216 1.5336 11.2352Z"
                                    fill="url(#paint2_linear_11430_22515)"/>
                                <path
                                    d="M19.6699 25.6538C18.3843 26.3953 16.8003 26.3953 15.5147 25.6538C15.3402 25.5531 15.1757 25.4399 15.0201 25.3174L12.7591 26.8719L10.8103 30.0209C12.9733 31.821 15.7821 32.3997 18.589 32.0779C20.7013 31.8357 22.7995 31.1665 24.7582 30.0368C26.3492 29.1191 27.7 27.9909 28.8182 26.7195L27.6563 23.8962L25.7762 22.1316L19.6699 25.6538Z"
                                    fill="url(#paint3_linear_11430_22515)"/>
                                <path
                                    d="M15.0201 25.3175C14.0296 24.5373 13.4371 23.3406 13.4371 22.0588V21.931V11.2558C13.4371 10.6521 13.615 10.5494 14.1384 10.8513C13.3323 10.3864 11.4703 8.79036 9.17118 10.1165C7.88557 10.858 6.8269 12.4949 6.8269 13.978V21.8362C6.8269 24.775 8.34906 27.8406 10.5445 29.7966C10.6313 29.874 10.7212 29.9469 10.8103 30.0211L15.0201 25.3175Z"
                                    fill="url(#paint4_linear_11430_22515)"/>
                                <path
                                    d="M28.6604 5.49565C28.6589 5.49395 28.6573 5.49532 28.6589 5.49703C28.9613 5.83763 29.2888 6.23485 29.6223 6.68734C31.3648 9.05099 32.0158 12.0447 31.4126 14.9176C30.8093 17.7906 29.0071 20.2679 26.4625 21.7357L25.7761 22.1316L28.8181 26.7195C34.0764 20.741 34.09 11.5388 28.6815 5.51929C28.6789 5.51641 28.67 5.50622 28.6604 5.49565Z"
                                    fill="url(#paint5_linear_11430_22515)"/>
                                <path
                                    d="M7.09355 13.978C7.09354 12.4949 7.88551 11.1244 9.17113 10.3829C9.34564 10.2822 9.52601 10.1965 9.71002 10.1231L9.49304 7.38962L7.96861 4.26221C5.32671 5.23364 3.1897 7.24125 2.06528 9.83067C1.2191 11.7793 0.75001 13.9294 0.75 16.1888C0.75 18.0243 1.05255 19.7571 1.59553 21.3603L4.62391 21.7666L7.09355 21.0223V13.978Z"
                                    fill="url(#paint6_linear_11430_22515)"/>
                                <path
                                    d="M9.71016 10.1231C10.8817 9.65623 12.2153 9.74199 13.3264 10.3829L13.4372 10.4468L22.3326 15.5777C22.9566 15.9376 22.8999 16.2918 22.1946 16.4392L22.7078 16.332C23.383 16.1908 23.9999 15.8457 24.4717 15.3428C25.2828 14.4782 25.5806 13.4351 25.5806 12.5299C25.5806 11.0468 24.7886 9.67634 23.503 8.93479L16.6911 5.00568C14.1436 3.53627 11.0895 3.22294 8.29622 4.14442C8.18572 4.18087 8.07756 4.2222 7.96875 4.26221L9.71016 10.1231Z"
                                    fill="url(#paint7_linear_11430_22515)"/>
                                <path
                                    d="M20.0721 31.8357C20.0744 31.8352 20.0739 31.8332 20.0717 31.8337C19.6252 31.925 19.1172 32.0097 18.5581 32.0721C15.638 32.3978 12.7174 31.4643 10.5286 29.5059C8.33986 27.5474 7.09347 24.7495 7.09348 21.814L7.09347 21.0222L1.59546 21.3602C4.1488 28.8989 12.1189 33.5118 20.0411 31.8421C20.0449 31.8413 20.0582 31.8387 20.0721 31.8357Z"
                                    fill="url(#paint8_linear_11430_22515)"/>
                                <defs>
                                    <linearGradient id="paint0_linear_11430_22515" x1="20.8102" y1="23.9532"
                                                    x2="23.9577"
                                                    y2="12.9901" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#1724C9"/>
                                        <stop offset="1" stop-color="#1C64F2"/>
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_11430_22515" x1="28.0593" y1="10.5837"
                                                    x2="19.7797"
                                                    y2="2.33321" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#1C64F2"/>
                                        <stop offset="1" stop-color="#0092FF"/>
                                    </linearGradient>
                                    <linearGradient id="paint2_linear_11430_22515" x1="16.9145" y1="5.2045" x2="4.42432"
                                                    y2="5.99375" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#0092FF"/>
                                        <stop offset="1" stop-color="#45B2FF"/>
                                    </linearGradient>
                                    <linearGradient id="paint3_linear_11430_22515" x1="16.0698" y1="28.846" x2="27.2866"
                                                    y2="25.8192" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#1C64F2"/>
                                        <stop offset="1" stop-color="#0092FF"/>
                                    </linearGradient>
                                    <linearGradient id="paint4_linear_11430_22515" x1="8.01881" y1="15.8661"
                                                    x2="15.9825"
                                                    y2="24.1181" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#1724C9"/>
                                        <stop offset="1" stop-color="#1C64F2"/>
                                    </linearGradient>
                                    <linearGradient id="paint5_linear_11430_22515" x1="26.2004" y1="21.8189"
                                                    x2="31.7569"
                                                    y2="10.6178" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#0092FF"/>
                                        <stop offset="1" stop-color="#45B2FF"/>
                                    </linearGradient>
                                    <linearGradient id="paint6_linear_11430_22515" x1="6.11387" y1="9.31427"
                                                    x2="3.14054"
                                                    y2="20.4898" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#1C64F2"/>
                                        <stop offset="1" stop-color="#0092FF"/>
                                    </linearGradient>
                                    <linearGradient id="paint7_linear_11430_22515" x1="21.2932" y1="8.78271"
                                                    x2="10.4278"
                                                    y2="11.488" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#1724C9"/>
                                        <stop offset="1" stop-color="#1C64F2"/>
                                    </linearGradient>
                                    <linearGradient id="paint8_linear_11430_22515" x1="7.15667" y1="21.5399"
                                                    x2="14.0824"
                                                    y2="31.9579" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#0092FF"/>
                                        <stop offset="1" stop-color="#45B2FF"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                            Flowbite
                        </a>
                        <p class="my-4 font-light text-base font-normal text-gray-500 dark:text-gray-400 "><span
                                class="text-base font-normal text-black dark:text-gray-400">Autoplatfroma.сom</span> -
                            your trusted guide in the world of automobiles. Our <span
                                class="text-base font-normal text-black dark:text-gray-400">experts</span> make your
                            choice safe and easy. Start
                            your journey <span
                                class="text-base font-normal text-black dark:text-gray-400">with us</span> today and
                            give life a <span class="text-base font-normal text-black dark:text-gray-400">new inspiration</span>
                            on wheels</p>
                        <!-- блок иконок -->
                        <ul class="flex mt-5 space-x-6 items-center">

                            <!-- твитер -->
                            <li>
                                <a href="#"
                                   class="inline-flex items-center p-2 text-sm font-medium text-gray-500 rounded-lg dark:text-gray-400 hover:text-gray-900 dark:hover:bg-gray-600">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M19.1367 8.62109C19.8398 8.09375 20.4727 7.46094 20.9648 6.72266C20.332 7.00391 19.5938 7.21484 18.8555 7.28516C19.6289 6.82812 20.1914 6.125 20.4727 5.24609C19.7695 5.66797 18.9609 5.98438 18.1523 6.16016C17.4492 5.42188 16.5 5 15.4453 5C13.4062 5 11.7539 6.65234 11.7539 8.69141C11.7539 8.97266 11.7891 9.25391 11.8594 9.53516C8.80078 9.35938 6.05859 7.88281 4.23047 5.66797C3.91406 6.19531 3.73828 6.82812 3.73828 7.53125C3.73828 8.79688 4.37109 9.92188 5.39062 10.5898C4.79297 10.5547 4.19531 10.4141 3.70312 10.1328V10.168C3.70312 11.9609 4.96875 13.4375 6.65625 13.7891C6.375 13.8594 6.02344 13.9297 5.70703 13.9297C5.46094 13.9297 5.25 13.8945 5.00391 13.8594C5.46094 15.3359 6.83203 16.3906 8.44922 16.4258C7.18359 17.4102 5.60156 18.0078 3.87891 18.0078C3.5625 18.0078 3.28125 17.9727 3 17.9375C4.61719 18.9922 6.55078 19.5898 8.66016 19.5898C15.4453 19.5898 19.1367 14 19.1367 9.11328C19.1367 8.9375 19.1367 8.79688 19.1367 8.62109Z"/>
                                    </svg>
                                </a>
                            </li>
                            <!-- insta -->
                            <li>
                                <a href="#"
                                   class="inline-flex items-center p-2 text-sm font-medium text-gray-500 rounded-lg dark:text-gray-400 hover:text-gray-900 dark:hover:bg-gray-600 ">
                                    <svg class="w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 448 512">
                                        <path
                                            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
                                    </svg>
                                </a>
                            </li>
                            <!-- фейсбук -->
                            <li>
                                <a href="#"
                                   class="inline-flex items-center p-2 text-sm font-medium text-gray-500 rounded-lg dark:text-gray-400 hover:text-gray-900 dark:hover:bg-gray-600 ">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M16.0352 13.125L16.5273 9.89062H13.3984V7.78125C13.3984 6.86719 13.8203 6.02344 15.2266 6.02344H16.668V3.24609C16.668 3.24609 15.3672 3 14.1367 3C11.5703 3 9.88281 4.58203 9.88281 7.39453V9.89062H7V13.125H9.88281V21H13.3984V13.125H16.0352Z"/>
                                    </svg>
                                </a>
                            </li>


                        </ul>
                    </div>
                    <div class="lg:mx-auto">
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white ">Company</h2>
                        <ul class="text-base text-gray-500 dark:text-gray-400 ">
                            <li class="mb-4">
                                <a href="#" class=" hover:underline">About Us</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">For Dealers</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Blog</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Affiliate Program</a>
                            </li>

                        </ul>
                    </div>
                    <div class="lg:mx-auto">
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white ">Help and
                            support</h2>
                        <ul class="text-gray-500 dark:text-gray-400 ">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Contact Us</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Knowledge Center</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Premium Support</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Sponsorships</a>
                            </li>
                        </ul>
                    </div>
                    <div class="lg:mx-auto">
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white ">Popular
                            makes</h2>
                        <ul class="text-gray-500 dark:text-gray-400 ">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Ford</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Audi</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Mercedes-Benz</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">BMW</a>
                            </li>

                        </ul>


                    </div>
                    <div class="lg:mx-auto">
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">LEGAL</h2>
                        <ul class="text-gray-500 dark:text-gray-400 ">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Terms & Conditions</a>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
            <!-- line across the screen -->
            <div class=" h-[1px] bg-gray-200 w-[100%] mb-[26px]"></div>

            <div class="mx-auto max-w-[1290px] px-[15px] pb-10">
                    <span class="block text-sm text-center text-gray-500 dark:text-gray-400 mx-auto max-w-[1290px]">© 2021-2022
                        <a href="#" class="hover:underline">Flowbite™</a>. All Rights Reserved.</span>
            </div>
        </div>
    </footer>

    <!-- pop-up sign-up -->

    <div id="popup-bg" class="popup-bg fixed w-[100%] min-h-[100vh] top-0 left-0 bg-white  overflow-auto hidden z-100">
        <div class="popup w-[100%] overflow-auto ">
            <div id="bacg-blue" class="flex-auto bacg-blue min-h-[100vh] overflow-auto">
                <div
                    class="md:flex items-center mx-auto max-w-[1230px] md:max-w-[100%] absolute z-50 top-[50%] left-[50%] transform -translate-x-1/2 -translate-y-1/2 w-[100%] pl-[16px] md:pl-0 pr-[16px] md:pr-0">
                    <!-- column left -->

                    <div class="w-[100%] md:w-[50%] md:flex md:justify-center  pb-[50px]">

                        <div class=" h-[100%] md:w-[550px] md:px-[15px] ">
                            <div class="mb-5 flex relative">
                                <h2 class="leading-tight text-xl font-bold dark:text-white ">Welcome back</h2>
                                <button id="pop-close1" type="button" class="absolute top-[-5px] right-0 md:hidden">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M4.29279 4.29301C4.48031 4.10553 4.73462 4.00022 4.99979 4.00022C5.26495 4.00022 5.51926 4.10553 5.70679 4.29301L9.99979 8.58601L14.2928 4.29301C14.385 4.19749 14.4954 4.12131 14.6174 4.0689C14.7394 4.01649 14.8706 3.98891 15.0034 3.98775C15.1362 3.9866 15.2678 4.0119 15.3907 4.06218C15.5136 4.11246 15.6253 4.18672 15.7192 4.28061C15.8131 4.3745 15.8873 4.48615 15.9376 4.60905C15.9879 4.73195 16.0132 4.86363 16.012 4.99641C16.0109 5.12919 15.9833 5.26041 15.9309 5.38241C15.8785 5.50441 15.8023 5.61476 15.7068 5.707L11.4138 10L15.7068 14.293C15.8889 14.4816 15.9897 14.7342 15.9875 14.9964C15.9852 15.2586 15.88 15.5094 15.6946 15.6948C15.5092 15.8802 15.2584 15.9854 14.9962 15.9877C14.734 15.99 14.4814 15.8892 14.2928 15.707L9.99979 11.414L5.70679 15.707C5.51818 15.8892 5.26558 15.99 5.00339 15.9877C4.74119 15.9854 4.49038 15.8802 4.30497 15.6948C4.11956 15.5094 4.01439 15.2586 4.01211 14.9964C4.00983 14.7342 4.11063 14.4816 4.29279 14.293L8.58579 10L4.29279 5.707C4.10532 5.51948 4 5.26517 4 5C4 4.73484 4.10532 4.48053 4.29279 4.29301Z"
                                              fill="#111928"/>
                                    </svg>

                                </button>
                            </div>

                            <div class="block md1:mb-4 gap-[16px] mb-5 md1:flex">
                                <a href="#"
                                   class="w-full text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center flex gap-2 justify-center items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 mb-4 md1:mb-0">
                                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_1001_167502)">
                                            <path
                                                d="M19.6673 10.9001C19.6673 10.2644 19.6158 9.6253 19.5058 8.99993H10.6853V12.601H15.7364C15.5268 13.7624 14.8533 14.7898 13.8672 15.4426V17.7792H16.8806C18.6502 16.1505 19.6673 13.7452 19.6673 10.9001Z"
                                                fill="#4285F4"/>
                                            <path
                                                d="M10.6853 20.0367C13.2074 20.0367 15.3344 19.2086 16.8841 17.7792L13.8706 15.4426C13.0322 16.013 11.9498 16.336 10.6888 16.336C8.24913 16.336 6.1806 14.6901 5.4384 12.4773H2.32873V14.886C3.91621 18.0437 7.14958 20.0367 10.6853 20.0367Z"
                                                fill="#34A853"/>
                                            <path
                                                d="M5.43497 12.4773C5.04326 11.3159 5.04326 10.0582 5.43497 8.89684V6.48813H2.32874C1.00241 9.13049 1.0024 12.2436 2.32873 14.886L5.43497 12.4773Z"
                                                fill="#FBBC04"/>
                                            <path
                                                d="M10.6853 5.03465C12.0185 5.01404 13.3071 5.51571 14.2726 6.43658L16.9425 3.76673C15.2519 2.17925 13.0081 1.30648 10.6853 1.33397C7.14958 1.33397 3.91622 3.32692 2.32874 6.48813L5.43497 8.89684C6.17374 6.68056 8.24569 5.03465 10.6853 5.03465Z"
                                                fill="#EA4335"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1001_167502">
                                                <rect width="20" height="20" fill="white"
                                                      transform="translate(0.5 0.5)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    Sign up with Google
                                </a>
                                <a href="#"
                                   class="w-full text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center flex gap-2 justify-center items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 ">
                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19.1673 10.5C19.1673 5.4374 15.0633 1.33334 10.0007 1.33334C4.93804 1.33334 0.833984 5.4374 0.833984 10.5C0.833984 15.0753 4.18608 18.8676 8.56836 19.5553V13.1497H6.24089V10.5H8.56836V8.48048C8.56836 6.18308 9.93691 4.91407 12.0307 4.91407C13.0333 4.91407 14.0827 5.09311 14.0827 5.09311V7.34897H12.9268C11.7882 7.34897 11.4329 8.05563 11.4329 8.78126V10.5H13.9753L13.5688 13.1497H11.4329V19.5553C15.8152 18.8676 19.1673 15.0753 19.1673 10.5Z"
                                            fill="#1877F2"/>
                                        <path
                                            d="M13.5688 13.1497L13.9753 10.5H11.4329V8.78126C11.4329 8.05634 11.7882 7.34897 12.9268 7.34897H14.0827V5.09311C14.0827 5.09311 13.0333 4.91407 12.0307 4.91407C9.93691 4.91407 8.56836 6.18308 8.56836 8.48048V10.5H6.24089V13.1497H8.56836V19.5553C9.51745 19.7038 10.4839 19.7038 11.4329 19.5553V13.1497H13.5688Z"
                                            fill="white"/>
                                    </svg>
                                    Sign up with Facebook
                                </a>
                            </div>
                            <div class="flex justify-between gap-6 items-center">
                                <div class="h-[1px] bg-gray-200 w-[100%]"></div>
                                <p class="text-base font-medium text-gray-500">or</p>
                                <div class="h-[1px] bg-gray-200 w-[100%]"></div>
                            </div>

                            <form>
                                <div>


                                    <div class="mb-6">
                                        <label for="email"
                                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                        <input type="email" id="email" autocomplete="current-password"
                                               class="bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                               placeholder="name@example.com" required>
                                    </div>
                                    <!-- password -->
                                    <div class="mb-6">
                                        <label for="password"
                                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                        <div class="relative">
                                            <input type="password" id="password1" autocomplete="new-password"
                                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                   placeholder="•••••••••" required>
                                            <button id="btn-eye1" type="button"
                                                    class="absolute top-[50%] right-[16px] transform translate-y-[-45%]">
                                                <svg id="eye-icon1" width="12" height="12" viewBox="0 0 12 12"
                                                     fill="currentColor"
                                                     xmlns="http://www.w3.org/2000/svg" class=" icon-eye">
                                                    <path
                                                        d="M6.49576 6.49496C6.36448 6.62624 6.18643 6.69999 6.00078 6.69999C5.81513 6.69999 5.63708 6.62624 5.50581 6.49496C5.37453 6.36369 5.30078 6.18564 5.30078 5.99999C5.30078 5.81434 5.37453 5.63629 5.50581 5.50501C5.63708 5.37374 5.81513 5.29999 6.00078 5.29999C6.18643 5.29999 6.36448 5.37374 6.49576 5.50501C6.62703 5.63629 6.70078 5.81434 6.70078 5.99999C6.70078 6.18564 6.62703 6.36369 6.49576 6.49496Z"
                                                        stroke="currentColor"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                          d="M0.275391 5.99999C1.03979 3.56579 3.31379 1.79999 6.00059 1.79999C8.68739 1.79999 10.9614 3.56579 11.7258 5.99999C10.9614 8.43419 8.68739 10.2 6.00059 10.2C3.31379 10.2 1.03979 8.43419 0.275391 5.99999ZM8.40059 5.99999C8.40059 6.63651 8.14773 7.24696 7.69765 7.69704C7.24756 8.14713 6.63711 8.39999 6.00059 8.39999C5.36407 8.39999 4.75362 8.14713 4.30353 7.69704C3.85345 7.24696 3.60059 6.63651 3.60059 5.99999C3.60059 5.36347 3.85345 4.75302 4.30353 4.30293C4.75362 3.85284 5.36407 3.59999 6.00059 3.59999C6.63711 3.59999 7.24756 3.85284 7.69765 4.30293C8.14773 4.75302 8.40059 5.36347 8.40059 5.99999V5.99999Z"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- Password again -->
                                    <div class="mb-6">
                                        <label for="confirm_password"
                                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password
                                            again</label>
                                        <input type="password" id="confirm_password" autocomplete="new-password"
                                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                               placeholder="•••••••••" required>
                                    </div>
                                    <div class="flex items-center justify-between mb-[23px]">
                                        <div class="flex items-start ">
                                            <div class="flex items-center h-5">
                                                <input id="remember" type="checkbox" value=""
                                                       class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 cursor-pointer"
                                                       required>
                                            </div>
                                            <label for="remember"
                                                   class="ml-2 text-sm font-medium text-gray-500 dark:text-gray-300 cursor-pointer">Remember
                                                me
                                            </label>
                                        </div>
                                        <div>
                                            <a href="#" class="text-xs font-medium text-primary-600 dark:text-gray-300">Forgot
                                                password?</a>
                                        </div>
                                    </div>
                                    <button type="submit"
                                            class="text-white bg-primary-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full  px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mb-[23px]">
                                        Sign Up
                                    </button>
                                    <p class="text-sm font-normal text-gray-500">Already have an account?
                                        <button id="sign-in" type="button" class="text-sm font-medium text-primary-600">
                                            Sign
                                            in
                                        </button>
                                    </p>
                                </div>
                            </form>


                        </div>
                    </div>


                    <!-- column right -->
                    <div class="hidden md:block md:w-[50%] md:flex md:justify-center ">
                        <div class="md:px-[15px] md:w-[558px]">
                            <div class="flex items-center gap-[10px] mb-[28px]">
                                <div>
                                    <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9"
                                         alt="Flowbite Logo"/>
                                </div>
                                <a href="#" class="text-2xl font-semibold text-white">AUTOPLATFORMA</a>
                            </div>
                            <h1 class=" leading-none text-4xl font-extrabold text-white mb-[12px]">Explore the world’s
                                leading auto
                                auction platform.</h1>
                            <p class=" text-base font-normal text-gray-300 mb-[28px]">
                                Millions of cars available every day for each of you. Don't miss your chance to save and
                                own
                                the best
                                vehicle.
                            </p>
                            <div class="flex items-center gap-[0px] relative mb-[32px]">
                                <div class="flex items-center">
                                    <img class="w-10 h-10 rounded-full" src="img/sign/avatar3.png" alt="Rounded avatar">
                                    <img class="w-10 h-10 rounded-full ml-[-12%]" src="img/sign/avatar2.png"
                                         alt="Rounded avatar">
                                    <img class="w-10 h-10 rounded-full ml-[-12%]" src="img/sign/avatar1.png"
                                         alt="Rounded avatar">
                                    <img class="w-10 h-10 rounded-full ml-[-12%]" src="img/sign/avatar.png"
                                         alt="Rounded avatar">

                                </div>
                                <div class="h-full absolute left-[130px] top-0 bg-primary-500"
                                     style="width: 1px;"></div>
                                <p class="text-sm font-normal text-gray-300">Rated Best Over <span
                                        class="text-sm font-normal text-white">7k</span> Reviews</p>
                            </div>
                            <button id="pop-close"
                                    class="w-full text-gray-900 text-white hover:text-black hover:bg-gray-200 border border-gray-200 focus:ring-2 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center flex gap-2 justify-center items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 mb-4 md1:mb-0 hover:text-black">
                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                     xmlns="http://www.w3.org/2000/svg"
                                     class="color" id="back-to-up">
                                    <path
                                        d="M9.16667 13.8333L5.83333 10.5M5.83333 10.5L9.16667 7.16665M5.83333 10.5H17.5M13.3333 13.8333V14.6666C13.3333 15.3297 13.0699 15.9656 12.6011 16.4344C12.1323 16.9033 11.4964 17.1666 10.8333 17.1666H5C4.33696 17.1666 3.70107 16.9033 3.23223 16.4344C2.76339 15.9656 2.5 15.3297 2.5 14.6666V6.33331C2.5 5.67027 2.76339 5.03439 3.23223 4.56555C3.70107 4.09671 4.33696 3.83331 5 3.83331H10.8333C11.4964 3.83331 12.1323 4.09671 12.6011 4.56555C13.0699 5.03439 13.3333 5.67027 13.3333 6.33331V7.16665"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                </svg>
                                Go back to website
                            </button>
                        </div>


                    </div>


                </div>

            </div>

        </div>

    </div>

    <!-- pop-up sign-in -->
    <div id="popup-bg-1" class="popup-bg fixed  w-[100%] min-h-[100vh] top-[0%] left-0 bg-white hidden">
        <div class="popup w-[100%] ">
            <div id="bacg-blue-1" class="flex-auto bacg-blue-1 min-h-[100vh]">
                <div
                    class="md:flex items-center mx-auto max-w-[1230px] md:max-w-[100%] absolute z-50 top-[50%] left-[50%] transform -translate-x-1/2 -translate-y-1/2 w-[100%] pl-[16px] md:pl-0 pr-[16px] md:pr-0">
                    <!-- column left -->
                    <div class="w-[100%] md:w-[50%] md:flex md:justify-center ">

                        <div class=" h-[100%] md:w-[550px] md:px-[15px]">
                            <div class="mb-5 flex relative">
                                <h2 class="leading-tight text-xl font-bold dark:text-white ">Welcome back</h2>
                                <button id="pop-close-in-1" type="button" class="absolute top-[-5px] right-0 md:hidden">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M4.29279 4.29301C4.48031 4.10553 4.73462 4.00022 4.99979 4.00022C5.26495 4.00022 5.51926 4.10553 5.70679 4.29301L9.99979 8.58601L14.2928 4.29301C14.385 4.19749 14.4954 4.12131 14.6174 4.0689C14.7394 4.01649 14.8706 3.98891 15.0034 3.98775C15.1362 3.9866 15.2678 4.0119 15.3907 4.06218C15.5136 4.11246 15.6253 4.18672 15.7192 4.28061C15.8131 4.3745 15.8873 4.48615 15.9376 4.60905C15.9879 4.73195 16.0132 4.86363 16.012 4.99641C16.0109 5.12919 15.9833 5.26041 15.9309 5.38241C15.8785 5.50441 15.8023 5.61476 15.7068 5.707L11.4138 10L15.7068 14.293C15.8889 14.4816 15.9897 14.7342 15.9875 14.9964C15.9852 15.2586 15.88 15.5094 15.6946 15.6948C15.5092 15.8802 15.2584 15.9854 14.9962 15.9877C14.734 15.99 14.4814 15.8892 14.2928 15.707L9.99979 11.414L5.70679 15.707C5.51818 15.8892 5.26558 15.99 5.00339 15.9877C4.74119 15.9854 4.49038 15.8802 4.30497 15.6948C4.11956 15.5094 4.01439 15.2586 4.01211 14.9964C4.00983 14.7342 4.11063 14.4816 4.29279 14.293L8.58579 10L4.29279 5.707C4.10532 5.51948 4 5.26517 4 5C4 4.73484 4.10532 4.48053 4.29279 4.29301Z"
                                              fill="#111928"/>
                                    </svg>

                                </button>
                            </div>
                            <div class="block md1:mb-4 gap-[16px] mb-5 md1:flex">
                                <a href="#"
                                   class="w-full text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center flex gap-2 justify-center items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 mb-4 md1:mb-0">
                                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_1001_167502)">
                                            <path
                                                d="M19.6673 10.9001C19.6673 10.2644 19.6158 9.6253 19.5058 8.99993H10.6853V12.601H15.7364C15.5268 13.7624 14.8533 14.7898 13.8672 15.4426V17.7792H16.8806C18.6502 16.1505 19.6673 13.7452 19.6673 10.9001Z"
                                                fill="#4285F4"/>
                                            <path
                                                d="M10.6853 20.0367C13.2074 20.0367 15.3344 19.2086 16.8841 17.7792L13.8706 15.4426C13.0322 16.013 11.9498 16.336 10.6888 16.336C8.24913 16.336 6.1806 14.6901 5.4384 12.4773H2.32873V14.886C3.91621 18.0437 7.14958 20.0367 10.6853 20.0367Z"
                                                fill="#34A853"/>
                                            <path
                                                d="M5.43497 12.4773C5.04326 11.3159 5.04326 10.0582 5.43497 8.89684V6.48813H2.32874C1.00241 9.13049 1.0024 12.2436 2.32873 14.886L5.43497 12.4773Z"
                                                fill="#FBBC04"/>
                                            <path
                                                d="M10.6853 5.03465C12.0185 5.01404 13.3071 5.51571 14.2726 6.43658L16.9425 3.76673C15.2519 2.17925 13.0081 1.30648 10.6853 1.33397C7.14958 1.33397 3.91622 3.32692 2.32874 6.48813L5.43497 8.89684C6.17374 6.68056 8.24569 5.03465 10.6853 5.03465Z"
                                                fill="#EA4335"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1001_167502">
                                                <rect width="20" height="20" fill="white"
                                                      transform="translate(0.5 0.5)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    Sign up with Google
                                </a>
                                <a href="#"
                                   class="w-full text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center flex gap-2 justify-center items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 ">
                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19.1673 10.5C19.1673 5.4374 15.0633 1.33334 10.0007 1.33334C4.93804 1.33334 0.833984 5.4374 0.833984 10.5C0.833984 15.0753 4.18608 18.8676 8.56836 19.5553V13.1497H6.24089V10.5H8.56836V8.48048C8.56836 6.18308 9.93691 4.91407 12.0307 4.91407C13.0333 4.91407 14.0827 5.09311 14.0827 5.09311V7.34897H12.9268C11.7882 7.34897 11.4329 8.05563 11.4329 8.78126V10.5H13.9753L13.5688 13.1497H11.4329V19.5553C15.8152 18.8676 19.1673 15.0753 19.1673 10.5Z"
                                            fill="#1877F2"/>
                                        <path
                                            d="M13.5688 13.1497L13.9753 10.5H11.4329V8.78126C11.4329 8.05634 11.7882 7.34897 12.9268 7.34897H14.0827V5.09311C14.0827 5.09311 13.0333 4.91407 12.0307 4.91407C9.93691 4.91407 8.56836 6.18308 8.56836 8.48048V10.5H6.24089V13.1497H8.56836V19.5553C9.51745 19.7038 10.4839 19.7038 11.4329 19.5553V13.1497H13.5688Z"
                                            fill="white"/>
                                    </svg>
                                    Sign up with Facebook
                                </a>
                            </div>
                            <div class="flex justify-between gap-6 items-center">
                                <div class="h-[1px] bg-gray-200 w-[100%]"></div>
                                <p class="text-base font-medium text-gray-500">or</p>
                                <div class="h-[1px] bg-gray-200 w-[100%]"></div>
                            </div>

                            <form>
                                <div class=" ">


                                    <div class="mb-6">
                                        <label for="email-2"
                                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                        <input type="email" id="email-2" autocomplete="new-password"
                                               class="bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                               placeholder="name@example.com" required>
                                    </div>
                                    <!-- password -->
                                    <div class="mb-6">
                                        <label for="password"
                                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                        <div class="relative">
                                            <input type="password" id="password-2" autocomplete="new-password"
                                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                   placeholder="•••••••••" required>
                                            <button id="btn-eye-2" type="button"
                                                    class="absolute top-[50%] right-[16px] transform translate-y-[-45%]">
                                                <svg id="eye-icon-2" width="12" height="12" viewBox="0 0 12 12"
                                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                                     class=" icon-eye">
                                                    <path
                                                        d="M6.49576 6.49496C6.36448 6.62624 6.18643 6.69999 6.00078 6.69999C5.81513 6.69999 5.63708 6.62624 5.50581 6.49496C5.37453 6.36369 5.30078 6.18564 5.30078 5.99999C5.30078 5.81434 5.37453 5.63629 5.50581 5.50501C5.63708 5.37374 5.81513 5.29999 6.00078 5.29999C6.18643 5.29999 6.36448 5.37374 6.49576 5.50501C6.62703 5.63629 6.70078 5.81434 6.70078 5.99999C6.70078 6.18564 6.62703 6.36369 6.49576 6.49496Z"
                                                        stroke="currentColor"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                          d="M0.275391 5.99999C1.03979 3.56579 3.31379 1.79999 6.00059 1.79999C8.68739 1.79999 10.9614 3.56579 11.7258 5.99999C10.9614 8.43419 8.68739 10.2 6.00059 10.2C3.31379 10.2 1.03979 8.43419 0.275391 5.99999ZM8.40059 5.99999C8.40059 6.63651 8.14773 7.24696 7.69765 7.69704C7.24756 8.14713 6.63711 8.39999 6.00059 8.39999C5.36407 8.39999 4.75362 8.14713 4.30353 7.69704C3.85345 7.24696 3.60059 6.63651 3.60059 5.99999C3.60059 5.36347 3.85345 4.75302 4.30353 4.30293C4.75362 3.85284 5.36407 3.59999 6.00059 3.59999C6.63711 3.59999 7.24756 3.85284 7.69765 4.30293C8.14773 4.75302 8.40059 5.36347 8.40059 5.99999V5.99999Z"
                                                    />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="flex items-center justify-between mb-[23px]">
                                        <div class="flex items-start ">
                                            <div class="flex items-center h-5">
                                                <input id="remember-1" type="checkbox" value=""
                                                       class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 cursor-pointer"
                                                       required>
                                            </div>
                                            <label for="remember-1"
                                                   class="ml-2 text-sm font-medium text-gray-500 dark:text-gray-300 cursor-pointer">Remember
                                                me
                                            </label>
                                        </div>
                                        <div>
                                            <a href="#" class="text-xs font-medium text-primary-600 dark:text-gray-300">Forgot
                                                password?</a>
                                        </div>
                                    </div>
                                    <button type="submit"
                                            class="text-white bg-primary-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full  px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mb-[23px]">
                                        Sign In
                                    </button>

                                </div>
                            </form>


                        </div>
                    </div>


                    <!-- column right -->
                    <div class="hidden md:block md:w-[50%] md:flex md:justify-center">
                        <div class="md:px-[15px] md:w-[558px]">
                            <div class="flex items-center gap-[10px] mb-[28px]">
                                <div>
                                    <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9"
                                         alt="Flowbite Logo"/>
                                </div>
                                <a href="#" class="text-2xl font-semibold text-white">AUTOPLATFORMA</a>
                            </div>
                            <h1 class=" leading-none text-4xl font-extrabold text-white mb-[12px]">Explore the world’s
                                leading auto auction platform.</h1>
                            <p class=" text-base font-normal text-gray-300 mb-[28px]">
                                Millions of cars available every day for each of you. Don't miss your chance to save and
                                own
                                the best vehicle.
                            </p>
                            <div class="flex items-center gap-[0px] relative mb-[32px]">
                                <div class="flex items-center">
                                    <img class="w-10 h-10 rounded-full" src="img/sign/avatar3.png" alt="Rounded avatar">
                                    <img class="w-10 h-10 rounded-full ml-[-12%]" src="img/sign/avatar2.png"
                                         alt="Rounded avatar">
                                    <img class="w-10 h-10 rounded-full ml-[-12%]" src="img/sign/avatar1.png"
                                         alt="Rounded avatar">
                                    <img class="w-10 h-10 rounded-full ml-[-12%]" src="img/sign/avatar.png"
                                         alt="Rounded avatar">

                                </div>
                                <div class="h-full absolute left-[130px] top-0 bg-primary-500"
                                     style="width: 1px;"></div>
                                <p class="text-sm font-normal text-gray-300">Rated Best Over <span
                                        class="text-sm font-normal text-white">7k</span> Reviews</p>
                            </div>
                            <button id="pop-close-in"
                                    class="w-full hover:text-black hover:bg-gray-200 text-gray-900 text-white border border-gray-200 focus:ring-2 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center flex gap-2 justify-center items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 mb-4 md1:mb-0">
                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                     xmlns="http://www.w3.org/2000/svg" class="color" id="back-to-in">
                                    <path
                                        d="M9.16667 13.8333L5.83333 10.5M5.83333 10.5L9.16667 7.16665M5.83333 10.5H17.5M13.3333 13.8333V14.6666C13.3333 15.3297 13.0699 15.9656 12.6011 16.4344C12.1323 16.9033 11.4964 17.1666 10.8333 17.1666H5C4.33696 17.1666 3.70107 16.9033 3.23223 16.4344C2.76339 15.9656 2.5 15.3297 2.5 14.6666V6.33331C2.5 5.67027 2.76339 5.03439 3.23223 4.56555C3.70107 4.09671 4.33696 3.83331 5 3.83331H10.8333C11.4964 3.83331 12.1323 4.09671 12.6011 4.56555C13.0699 5.03439 13.3333 5.67027 13.3333 6.33331V7.16665"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                </svg>
                                Go back to website
                            </button>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>

@stop
@section("script")
    <script src="js/sign-js.js"></script>
    <script src="js/main-js.js"></script>
@stop
