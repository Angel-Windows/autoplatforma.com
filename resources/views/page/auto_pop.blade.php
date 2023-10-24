@extends("layout.myApp")
@section("content")
    <div class="flex-auto">
        <div>
            <!-- slider -->
            <section class=" bg-white dark:bg-gray-900">
                <div class="mx-auto max-w-[1290px] px-[15px]">
                    <div class=" pt-[28px] mx-auto max-w-screen-xl text-center pb-[25px] ">
                        <h1 class="text-center leading-tight text-3xl md:text-4xl font-extrabold mb-[5px] dark:text-white ">
                            {{$car->model->name}}</h1>
                        <p class="text-center  text-base md:text-lg max-w-[450px] mx-auto font-normal text-gray-500 mb-[41px] ">
                            {{$car->vin}}</p>
                        <div class=" block md1:flex  justify-between  gap-[10px]   ">
                            <!-- slider -->
                            <div class="product-card w-[100%] md1:w-[58%] md1:mb-5 items-start ">
                                <div class="images-product mb-[25px] h-[100%] transform translate-y-5">
                                    <div class="images-product__slider swiper relative h-[100%]">
                                        <!-- slider-main -->
                                        <div class="images-product__wrapper swiper-wrapper h-[100%]">
                                            @foreach($photo_slider as $item)
                                                <div class="images-product__slide swiper-slide h-[100%]">
                                                    <div class="product-images h-[100%]">
                                                        <div class="product-images__picture h-[100%]">
                                                            <img src="{{$item->url}}" alt="picture"
                                                                 class=" rounded-[8px] w-full h-[100%] object-cover ">

                                                        </div>
                                                    </div>

                                                </div>
                                            @endforeach
                                        </div>

                                        <!-- If we need pagination -->
                                        <div class="swiper-pagination hidden"></div>

                                        <!-- If we need navigation buttons -->
                                        <div class="swiper-button-prev-1 flex items-center justify-center">
                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M14.3553 16L14.7088 15.6464L19.9776 10.3777C19.9776 10.3777 19.9776 10.3777 19.9776 10.3776C20.1838 10.1714 20.2996 9.89165 20.2996 9.59999C20.2996 9.30836 20.1838 9.02867 19.9777 8.8224C19.9776 8.82237 19.9776 8.82233 19.9776 8.82229M14.3553 16L19.9776 8.82229M14.3553 16L14.7088 16.3535L19.9743 21.619C20.1729 21.8261 20.2828 22.1028 20.2803 22.3899C20.2778 22.6783 20.1621 22.9542 19.9581 23.1581C19.7542 23.3621 19.4783 23.4778 19.1899 23.4803C18.9028 23.4828 18.6261 23.3729 18.419 23.1743L12.0224 16.7777C12.0224 16.7777 12.0223 16.7777 12.0223 16.7776C11.8161 16.5714 11.7003 16.2916 11.7003 16C11.7003 15.7083 11.8162 15.4286 12.0224 15.2223L18.4223 8.8224M14.3553 16L18.4223 8.8224M19.9776 8.82229C19.7713 8.61614 19.4916 8.50034 19.2 8.50034C18.9083 8.50034 18.6286 8.61618 18.4223 8.8224M19.9776 8.82229L18.4223 8.8224"
                                                    fill="white" stroke="white"/>
                                            </svg>

                                        </div>
                                        <div class="swiper-button-next-1 flex items-center justify-center">
                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17.6448 16L17.2913 16.3535L12.0225 21.6223C12.0225 21.6223 12.0225 21.6223 12.0225 21.6223C11.8163 21.8286 11.7004 22.1083 11.7004 22.4C11.7004 22.6917 11.8163 22.9714 12.0225 23.1777C12.2288 23.3838 12.5085 23.4997 12.8001 23.4997C13.0918 23.4997 13.3715 23.3838 13.5777 23.1776L17.6448 16ZM17.6448 16L17.2913 15.6464L12.0258 10.381C11.8272 10.1738 11.7173 9.8972 11.7198 9.6100C11.7223 9.32168 11.838 9.04579 12.0419 8.84184C12.2459 8.63789 12.5218 8.5222 12.8102 8.51969C13.0973 8.5172 13.374 8.62706 13.5811 8.82571L19.9777 15.2223C19.9777 15.2223 19.9777 15.2223 19.9777 15.2223C20.1839 15.4286 20.2998 15.7083 20.2998 16C20.2998 16.2916 20.1839 16.5714 19.9777 16.7776C19.9777 16.7777 19.9777 16.7777 19.9777 16.7777L13.5778 23.1776L17.6448 16Z"
                                                    fill="white" stroke="white"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <!-- -- slider-preview --  -->
                                <div class="images-preview px-[0px] md1:px-[32px] cursor-pointer">
                                    <div class="images-preview__slider swiper">
                                        <div class="images-preview__wrapper swiper-wrapper">
                                            @foreach($photo_slider as $item)
                                                <div class="images-preview__slide swiper-slide">
                                                    <img src="{{$item->url}}" alt="picture"
                                                         class="w-[100%] rounded-[8px] border-[3px] border-white">
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="images-preview__control control-card">
                                            <div class="control-card__left _icon-left"></div>
                                            <div class="control-card__right _icon-right"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- Контейнер для галереи -->
                            <div id="gallery" class="gallery absolute top-0 left-0 z-20 min-h-[100vh]"
                                 style="display: none;">
                                <!-- btn -->
                                <button id="btn-close" type="button" class="fixed top-5 right-5">
                                    <img src="img/auto/btn-close.svg" alt="picture">
                                </button>
                                <div>
                                    <img src="img/auto/01.webp" alt="picture"
                                         class="border-[3px] border-white border-l-[6px] border-r-[6px]">
                                </div>
                                <div>
                                    <img src="img/auto/02.webp" alt="picture"
                                         class="border-[3px] border-white border-l-[6px] border-r-[6px]">
                                </div>
                                <div>
                                    <img src="img/auto/03.webp" alt="picture"
                                         class="border-[3px] border-white border-l-[6px] border-r-[6px]">
                                </div>
                                <div>
                                    <img src="img/auto/04.webp" alt="picture"
                                         class="border-[3px] border-white border-l-[6px] border-r-[6px]">
                                </div>
                                <div>
                                    <img src="img/auto/05.webp" alt="picture"
                                         class="border-[3px] border-white border-l-[6px] border-r-[6px]">
                                </div>
                                <div>
                                    <img src="img/auto/01.webp" alt="picture"
                                         class="border-[3px] border-white border-l-[6px] border-r-[6px]">
                                </div>
                                <div>
                                    <img src="img/auto/02.webp" alt="picture"
                                         class="border-[3px] border-white border-l-[6px] border-r-[6px]">
                                </div>
                                <div>
                                    <img src="img/auto/03.webp" alt="picture"
                                         class="border-[3px] border-white border-l-[6px] border-r-[6px]">
                                </div>
                            </div>


                            <!-- right block -->
                            <div
                                class="rounded-lg bg-white md:shadow-md md:px-[23px] py-5 items-start dark:bg-gray-800">

                                <div class="flex items-center justify-between mb-[14px]">
                                                <span
                                                    class="bg-gray-100 text-gray-800 text-base  font-semibold  inline-flex items-center px-2.5 py-0.5 rounded-[6px]  dark:bg-gray-700 dark:text-gray-400">
                                                    <svg class="w-2.5 h-2.5 mr-1.5" aria-hidden="true"
                                                         xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                         viewBox="0 0 20 20">
                                                        <path
                                                            d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z"/>
                                                    </svg>
                                                    {{$time_buy}}
                                                </span>
                                    <div class=" ">
                                        <?php
                                        $img_logo_auction_url = "";
                                        $img_logo_auction_alt = "logo_auction";
                                        switch ($auction_name_id) {
                                            case 1:
                                                $img_logo_auction_url = asset("img/auto/logo/copart_logo.svg");
                                                $img_logo_auction_alt = "logo-copart";
                                                break;
                                        }
                                        ?>
                                        <img src="{{$img_logo_auction_url}}" alt="{{$img_logo_auction_alt}}"
                                             class="w-full ">
                                    </div>
                                </div>


                                <ul
                                    class=" space-y-[8px] text-gray-900 text-left text-sm font-medium  list-none list-inside dark:text-gray-400 border border-gray-300 rounded-lg  py-2 mb-[14px]">
                                    @foreach($auto_info as $key=>$item)
                                        <li class=" mx-4  flex justify-between items-center">
                                            <div>{{$key}}: <span
                                                    class="text-sm font-normal text-gray-500">{{$item['text']}}</span>
                                            </div>
                                            @switch($item['type'])
                                                @case(1)
                                                <span
                                                    class="bg-gray-100 text-gray-800 text-xs font-medium gap-1 inline-flex items-center px-2.5 py-0.5 rounded-md  dark:bg-gray-700 dark:text-gray-400 ">
                                                        <svg xmlns="http://www.w3.org/2000/svg" data-name="icon"
                                                             width="14" height="14" viewBox="0 0 14 14"
                                                             class="fill-current text-green-500 ">

                                                            <path class="cls-1"
                                                                  d="M12.94,7a2.58,2.58,0,0,0-1-2A2.58,2.58,0,0,0,9.11,2.1,2.59,2.59,0,0,0,7,1.06a2.56,2.56,0,0,0-2,1A2.57,2.57,0,0,0,2.06,4.93a2.53,2.53,0,0,0-1,2A2.58,2.58,0,0,0,2,9,2.58,2.58,0,0,0,4.89,11.9a2.59,2.59,0,0,0,2.07,1,2.56,2.56,0,0,0,2.05-1,2.57,2.57,0,0,0,2.93-2.85A2.53,2.53,0,0,0,12.94,7ZM9.88,6,6.78,9.09a.78.78,0,0,1-.55.22h0a.75.75,0,0,1-.55-.23L4.12,7.46A.77.77,0,1,1,5.23,6.39l1,1.05L8.78,4.91A.78.78,0,0,1,9.88,6Z"/>
                                                        </svg>
                                                        Good
                                                        <button>
                                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg"
                                                                 class="mt-[2px]">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                      d="M2.57582 2.57581C2.68834 2.46333 2.84092 2.40014 3.00002 2.40014C3.15912 2.40014 3.3117 2.46333 3.42422 2.57581L6.00002 5.15161L8.57582 2.57581C8.63117 2.51851 8.69737 2.4728 8.77058 2.44135C8.84378 2.40991 8.92251 2.39335 9.00218 2.39266C9.08184 2.39197 9.16085 2.40715 9.23459 2.43732C9.30833 2.46749 9.37532 2.51204 9.43165 2.56837C9.48799 2.62471 9.53254 2.6917 9.56271 2.76544C9.59288 2.83918 9.60806 2.91819 9.60737 2.99785C9.60668 3.07752 9.59012 3.15625 9.55868 3.22945C9.52723 3.30266 9.48152 3.36886 9.42422 3.42421L6.84842 6.00001L9.42422 8.57581C9.53351 8.68897 9.59399 8.84053 9.59262 8.99785C9.59126 9.15517 9.52815 9.30566 9.41691 9.4169C9.30566 9.52815 9.15518 9.59125 8.99786 9.59262C8.84054 9.59398 8.68898 9.53351 8.57582 9.42421L6.00002 6.84841L3.42422 9.42421C3.31106 9.53351 3.1595 9.59398 3.00218 9.59262C2.84486 9.59125 2.69437 9.52815 2.58313 9.4169C2.47188 9.30566 2.40878 9.15517 2.40741 8.99785C2.40605 8.84053 2.46652 8.68897 2.57582 8.57581L5.15162 6.00001L2.57582 3.42421C2.46334 3.3117 2.40015 3.15911 2.40015 3.00001C2.40015 2.84091 2.46334 2.68833 2.57582 2.57581Z"
                                                                      fill="#6B7280"/>
                                                            </svg>
                                                        </button>
                                                    </span>
                                                @break
                                                @case(2)
                                                <span
                                                    class="bg-gray-100 text-gray-800 text-xs font-medium gap-1 inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-gray-400 ">
                                                                                            <svg width="14" height="14"
                                                                                                 viewBox="0 0 14 14"
                                                                                                 fill="none"
                                                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M3.29995 8.3173L3.1535 8.46375L2.65866 8.95859C2.63069 8.98656 2.61165 9.0222 2.60394 9.06099C2.59623 9.09978 2.60019 9.13999 2.61532 9.17652C2.63045 9.21307 2.65608 9.2443 2.68896 9.26627L2.42462 9.66178L2.68896 9.26628C2.72182 9.28823 2.76043 9.29996 2.79995 9.29999L3.29995 8.3173ZM3.29995 8.3173V8.11009M3.29995 8.3173V8.11009M3.29995 8.11009V5.59999C3.29995 4.61869 3.68977 3.67758 4.38365 2.9837C5.07754 2.28981 6.01865 1.89999 6.99995 1.89999C7.98125 1.89999 8.92236 2.28981 9.61624 2.9837C10.3100 3.67758 10.6999 4.61869 10.6999 5.59999V8.11009V8.3173M3.29995 8.11009L10.6999 8.3173M10.6999 8.3173L10.8464 8.46375M10.6999 8.3173L10.8464 8.46375M10.8464 8.46375L11.3412 8.9586C11.3692 8.98656 11.3882 9.0222 11.396 9.06099C11.4037 9.09978 11.3997 9.13999 11.3846 9.17652C11.3694 9.21307 11.3438 9.2443 11.3109 9.26627L11.5812 9.67072M10.8464 8.46375L11.5812 9.67072M11.5812 9.67072L11.3109 9.26628M11.5812 9.67072L11.3109 9.26628M11.3109 9.26628C11.2781 9.28823 11.2395 9.29996 11.1999 9.29999M11.3109 9.26628L11.1999 9.29999M11.1999 9.29999C11.1999 9.29999 11.1999 9.29999 11.1998 9.29999M11.1999 9.29999H11.1998M11.1998 9.29999H2.80006H11.1998ZM6.99995 12.1C6.5756 12.1 6.16864 11.9314 5.86858 11.6314C5.68977 11.4526 5.55765 11.2358 5.48008 11H8.51982C8.44224 11.2358 8.31003 11.4526 8.13132 11.6314C7.83126 11.9314 7.42429 12.1 6.99995 12.1Z"
                                                                                                    fill="#E02424"
                                                                                                    stroke="#E02424"/>
                                                                                            </svg>
                                                                                            Pay attantion
                                                                                            <button>
                                                                                                <svg width="12"
                                                                                                     height="12"
                                                                                                     viewBox="0 0 12 12"
                                                                                                     fill="none"
                                                                                                     xmlns="http://www.w3.org/2000/svg"
                                                                                                     class="mt-[2px]">
                                                                                                    <path
                                                                                                        fill-rule="evenodd"
                                                                                                        clip-rule="evenodd"
                                                                                                        d="M2.57582 2.57581C2.68834 2.46333 2.84092 2.40014 3.00002 2.40014C3.15912 2.40014 3.3117 2.46333 3.42422 2.57581L6.00002 5.15161L8.57582 2.57581C8.63117 2.51851 8.69737 2.4728 8.77058 2.44135C8.84378 2.40991 8.92251 2.39335 9.00218 2.39266C9.08184 2.39197 9.16085 2.40715 9.23459 2.43732C9.30833 2.46749 9.37532 2.51204 9.43165 2.56837C9.48799 2.62471 9.53254 2.6917 9.56271 2.76544C9.59288 2.83918 9.60806 2.91819 9.60737 2.99785C9.60668 3.07752 9.59012 3.15625 9.55868 3.22945C9.52723 3.30266 9.48152 3.36886 9.42422 3.42421L6.84842 6.00001L9.42422 8.57581C9.53351 8.68897 9.59399 8.84053 9.59262 8.99785C9.59126 9.15517 9.52815 9.30566 9.41691 9.4169C9.30566 9.52815 9.15518 9.59125 8.99786 9.59262C8.84054 9.59398 8.68898 9.53351 8.57582 9.42421L6.00002 6.84841L3.42422 9.42421C3.31106 9.53351 3.1595 9.59398 3.00218 9.59262C2.84486 9.59125 2.69437 9.52815 2.58313 9.4169C2.47188 9.30566 2.40878 9.15517 2.40741 8.99785C2.40605 8.84053 2.46652 8.68897 2.57582 8.57581L5.15162 6.00001L2.57582 3.42421C2.46334 3.3117 2.40015 3.15911 2.40015 3.00001C2.40015 2.84091 2.46334 2.68833 2.57582 2.57581Z"
                                                                                                        fill="#6B7280"/>
                                                                                                </svg>
                                                                                            </button>

                                                                                        </span>
                                                @break
                                            @endswitch

                                        </li>
                                        <div class="border-b border-gray-300 h-[1px] w-[100%]"></div>
                                    @endforeach


                                </ul>

                                <p class="text-sm font-semibold text-gray-900 mb-[14px] dark:text-white">Specify the
                                    maximum final cost for the car that you
                                    are willing to pay.</p>
                                @if($car->date_sale > date("Y-m-d H:i:s"))
                                    <div
                                        class="flex justify-between  items-center mb-[14px] rounded-md border border-gray-300 bg-primary-100 p-[10px] dark:bg-gray-600">
                                        <button type="button"
                                                class="block lg2:hidden text-white bg-primary-500 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-[13px] py-2 dark:bg-primary-500 dark:hover:bg-primary-500 focus:outline-none dark:focus:ring-primary-800 mr-[15px] btn-minus">
                                            -
                                        </button>
                                        <button type="button"
                                                class="hidden lg2:block text-white bg-primary-500 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-3 py-2 dark:bg-primary-500 dark:hover:bg-primary-500 focus:outline-none dark:focus:ring-primary-800 mr-[36px] btn-minus">

                                            Decrease
                                        </button>
                                        <div
                                            class="relative w-[100%] lg:w-[90%] lg1:w-[90%] lg2:w-[80%] xl:w-[70%] h-[36px]">
                                            <form action="#" class="flex items-center">
                                                <div class="flex flex-auto">
                                                    <div
                                                        class="flex justify-end w-full h-[36px] leading-tight text-base font-semibold w-[54%] smll:w-[70%] sm:w-[80%] md:w-[90%] md1:w-[60%] lg:w-[70%] lg2:w-[60%]
                                                                border-gray-300 rounded-tl-[8px] rounded-bl-[8px]
                                                                bg-gray-50 focus:ring-primary-500 focus:border-primary-500
                                                                dark:bg-gray-700 dark:border-gray-600
                                                                dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 pt-[10px] pr-[0px] ">
                                                        Bid: $
                                                    </div>
                                                    <input type="search" id="default-search-1"
                                                           class="w-full h-[36px]  leading-tight text-base font-semibold
                                                                placeholder-gray-400 text-left pr-[44px] border-gray-300 rounded-tr-[8px] rounded-br-[8px]
                                                                bg-gray-50 focus:ring-primary-500 focus:border-primary-500
                                                                dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                                                                dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 pt-[3px]"
                                                           placeholder="" required="" value="{{$car->price_bid}}">
                                                </div>

                                                <button type="submit"
                                                        class=" justify-end absolute right-0 bottom-[0px] bg-primary-500 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 text-xs rounded-r-lg text-white font-medium px-4 h-full dark:bg-primary-500 dark:hover:bg-primary-500 dark:focus:ring-primary-800 pt-[2px]">
                                                    Place
                                                </button>
                                            </form>
                                        </div>


                                        <button type="button"
                                                class="block lg2:hidden text-white bg-primary-500 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-3 py-2 dark:bg-primary-500 dark:hover:bg-primary-500 focus:outline-none dark:focus:ring-primary-800 ml-[15px] btn-plus">
                                            +
                                        </button>
                                        <button type="button"
                                                class="hidden lg2:block text-white bg-primary-500 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-3 py-2 dark:bg-primary-500 dark:hover:bg-primary-500 focus:outline-none dark:focus:ring-primary-800 ml-[36px] btn-plus">

                                            Increase
                                        </button>
                                    </div>
                                    <div>
                                        <!-- alert -->
                                        <div id="alert-3"
                                             class="px-4 pb-4 pt-[10px] md:pt-3  text-green-800 rounded-lg bg-green-50 dark:bg-gray-900 dark:text-green-400"
                                             role="alert">

                                            <div
                                                class="flex items-center px-0 md1:px-4 mb-[6px]  text-green-800 rounded-lg bg-green-50 dark:bg-gray-900 dark:text-green-400">


                                                <svg class="flex-shrink-0 w-[18px] h-[18px]" aria-hidden="true"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     fill="currentColor" viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                                                </svg>

                                                <div class="ml-3 text-base font-semibold ">
                                                    <h3>Do you want to place a bid?</h3>
                                                </div>
                                                <a href="#" type="button"
                                                   class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                                                   aria-label="Close">

                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9 10.5H8.79289L8.64645 10.6464L6.5 12.7929V11V10.5H6H4C3.60218 10.5 3.22064 10.342 2.93934 10.0607C2.65804 9.77936 2.5 9.39782 2.5 9V5C2.5 4.60218 2.65804 4.22064 2.93934 3.93934C3.22064 3.65804 3.60218 3.5 4 3.5H11C11.3978 3.5 11.7794 3.65804 12.0607 3.93934C12.342 4.22064 12.5 4.60218 12.5 5V9C12.5 9.39782 12.342 9.77935 12.0607 10.0607C11.7794 10.342 11.3978 10.5 11 10.5H9Z"
                                                            fill="#0E9F6E" stroke="#0E9F6E"/>
                                                        <path
                                                            d="M15 7V9C15 10.0609 14.5786 11.0783 13.8284 11.8284C13.0783 12.5786 12.0609 13 11 13H9.82801L8.06201 14.767C8.34201 14.916 8.66100 15 9.00001 15H11L14 18V15H16C16.5304 15 17.0392 14.7893 17.4142 14.4142C17.7893 14.0391 18 13.5304 18 13V9C18 8.46957 17.7893 7.96086 17.4142 7.58579C17.0392 7.21071 16.5304 7 16 7H15Z"
                                                            fill="#0E9F6E"/>
                                                    </svg>
                                                </a>

                                            </div>

                                            <p class="px-0 md1:px-0 text-left text-sm font-normal text-green-800 mb-3">
                                                If you're not an experienced car buyer, we recommend reaching out to our
                                                team of specialists. They will inspect the
                                                vehicle, provide their insights, and assist you in selecting the perfect
                                                car
                                                for your needs


                                            </p>

                                            <!-- buttons  -->
                                            <div
                                                class="text-left px-0 md1:px-0 block lg2:flex items-center justify-between gap-3">
                                                <button type="button"
                                                        class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-3 py-2 dark:bg-primary-500 dark:hover:bg-primary-500 focus:outline-none dark:focus:ring-primary-800 flex items-center justify-center gap-2 mb-3 lg2:mb-0 w-full text-center">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M7.9999 9.60002C8.42425 9.60002 8.83121 9.43145 9.13127 9.1314C9.43133 8.83134 9.5999 8.42437 9.5999 8.00002C9.5999 7.57568 9.43133 7.16871 9.13127 6.86865C8.83121 6.5686 8.42425 6.40002 7.9999 6.40002C7.57556 6.40002 7.16859 6.5686 6.86853 6.86865C6.56847 7.16871 6.3999 7.57568 6.3999 8.00002C6.3999 8.42437 6.56847 8.83134 6.86853 9.1314C7.16859 9.43145 7.57556 9.60002 7.9999 9.60002Z"
                                                            fill="white"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M0.366455 8.00002C1.38566 4.75442 4.41765 2.40002 8.00005 2.40002C11.5825 2.40002 14.6145 4.75442 15.6337 8.00002C14.6145 11.2456 11.5825 13.6 8.00005 13.6C4.41765 13.6 1.38566 11.2456 0.366455 8.00002ZM11.2001 8.00002C11.2001 8.84872 10.8629 9.66265 10.2628 10.2628C9.66268 10.8629 8.84875 11.2 8.00005 11.2C7.15136 11.2 6.33743 10.8629 5.73731 10.2628C5.1372 9.66265 4.80006 8.84872 4.80006 8.00002C4.80006 7.15133 5.1372 6.3374 5.73731 5.73728C6.33743 5.13717 7.15136 4.80002 8.00005 4.80002C8.84875 4.80002 9.66268 5.13717 10.2628 5.73728C10.8629 6.3374 11.2001 7.15133 11.2001 8.00002Z"
                                                              fill="white"/>
                                                    </svg>
                                                    Contact our support
                                                </button>
                                                <button type="button"
                                                        class="text-white bg-primary-500 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-3 py-2 dark:bg-primary-500 dark:hover:bg-primary-500 focus:outline-none dark:focus:ring-primary-800 flex items-center justify-center gap-2 mb-0 lg2:mb-0 w-full text-center">
                                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M3.69995 3.19998C3.69995 2.77563 3.86852 2.36866 4.16858 2.0686C4.46864 1.76855 4.8756 1.59998 5.29995 1.59998H8.96875C9.39306 1.60007 9.79996 1.7687 10.1 2.06878L12.8312 4.79998C13.1312 5.09996 13.2999 5.50686 13.3 5.93118V12.8C13.3 13.2243 13.1314 13.6313 12.8313 13.9313C12.5313 14.2314 12.1243 14.4 11.7 14.4H5.29995C4.8756 14.4 4.46864 14.2314 4.16858 13.9313C3.86852 13.6313 3.69995 13.2243 3.69995 12.8V3.19998ZM5.29995 7.99998C5.29995 7.7878 5.38424 7.58432 5.53427 7.43429C5.6843 7.28426 5.88778 7.19998 6.09995 7.19998H10.9C11.1121 7.19998 11.3156 7.28426 11.4656 7.43429C11.6157 7.58432 11.7 7.7878 11.7 7.99998C11.7 8.21215 11.6157 8.41563 11.4656 8.56566C11.3156 8.71569 11.1121 8.79998 10.9 8.79998H6.09995C5.88778 8.79998 5.6843 8.71569 5.53427 8.56566C5.38424 8.41563 5.29995 8.21215 5.29995 7.99998ZM6.09995 10.4C5.88778 10.4 5.6843 10.4843 5.53427 10.6343C5.38424 10.7843 5.29995 10.9878 5.29995 11.2C5.29995 11.4121 5.38424 11.6156 5.53427 11.7657C5.6843 11.9157 5.88778 12 6.09995 12H10.9C11.1121 12 11.3156 11.9157 11.4656 11.7657C11.6157 11.6156 11.7 11.4121 11.7 11.2C11.7 10.9878 11.6157 10.7843 11.4656 10.6343C11.3156 10.4843 11.1121 10.4 10.9 10.4H6.09995Z"
                                                              fill="white"/>
                                                    </svg>
                                                    Request an inspection
                                                </button>
                                            </div>

                                        </div>


                                    </div>
                                @else
                                    <div
                                        class="flex justify-between  items-center mb-[14px] rounded-md border border-gray-300 bg-primary-100 p-[10px] dark:bg-gray-600">
                                        <button type="button"
                                                class="block lg2:hidden text-white bg-primary-200  font-medium rounded-lg text-sm px-[13px] py-2 dark:bg-primary-200  mr-[15px] btn-minus">
                                            -
                                        </button>
                                        <button type="button"
                                                class="hidden lg2:block text-white bg-primary-200  font-medium rounded-lg text-sm px-3 py-2 dark:bg-primary-200  mr-[36px] btn-minus">

                                            Decrease
                                        </button>
                                        <div
                                            class="relative w-[100%] lg:w-[90%] lg1:w-[90%] lg2:w-[80%] xl:w-[70%] h-[36px]">
                                            <form action="#" class="flex items-center">
                                                <div class="flex flex-auto">
                                                    <div
                                                        class="flex justify-end w-full h-[36px] leading-tight text-base font-semibold w-[55%] sm:w-[52%] md1:w-[55%]
                                                                border-gray-300 rounded-tl-[8px] rounded-bl-[8px]
                                                                bg-gray-50 focus:ring-primary-500 focus:border-primary-500
                                                                dark:bg-gray-700 dark:border-gray-600
                                                                dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 pt-[10px] pr-[0px]">
                                                        Final bid: $
                                                    </div>
                                                    <input type="search" id="default-search-1"
                                                           class="w-full h-[36px] leading-tight text-base font-semibold
                                                                placeholder-gray-400 text-left pr-[0px] border-gray-300 rounded-tr-[8px] rounded-br-[8px] w-[45%] sm:w-[45%] md1:w-[45%]
                                                                bg-gray-50 focus:ring-primary-500 focus:border-primary-500
                                                                dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                                                                dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 pt-[5px]"
                                                           placeholder="" required="" value="{{$car->final_bid??0}}">
                                                </div>


                                            </form>
                                        </div>


                                        <button type="button"
                                                class="block lg2:hidden text-white bg-primary-200  font-medium rounded-lg text-sm px-3 py-2 dark:bg-primary-200  ml-[15px] btn-plus">
                                            +
                                        </button>
                                        <button type="button"
                                                class="hidden lg2:block text-white bg-primary-200  font-medium rounded-lg text-sm px-3 py-2 dark:bg-primary-200 ml-[36px] btn-plus">

                                            Increase
                                        </button>
                                    </div>

                                    <div>
                                        <!-- alert -->
                                        <div id="alert-3"
                                             class="px-4 pb-4 pt-[10px] md:pt-3  text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                                             role="alert">

                                            <div
                                                class="flex items-center px-0 md1:px-4 mb-[6px]  text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400">


                                                <svg class="flex-shrink-0 w-[18px] h-[18px]" aria-hidden="true"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     fill="currentColor" viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                                                </svg>

                                                <div class="ml-3 text-base font-semibold ">
                                                    <h3>Are you searching for a similar car to buy?</h3>
                                                </div>
                                                <a href="#" type="button"
                                                   class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                                                   aria-label="Close">

                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9 10.5H8.79289L8.64645 10.6464L6.5 12.7929V11V10.5H6H4C3.60218 10.5 3.22064 10.342 2.93934 10.0607C2.65804 9.77936 2.5 9.39782 2.5 9V5C2.5 4.60218 2.65804 4.22064 2.93934 3.93934C3.22064 3.65804 3.60218 3.5 4 3.5H11C11.3978 3.5 11.7794 3.65804 12.0607 3.93934C12.342 4.22064 12.5 4.60218 12.5 5V9C12.5 9.39782 12.342 9.77935 12.0607 10.0607C11.7794 10.342 11.3978 10.5 11 10.5H9Z"
                                                            fill="#0E9F6E" stroke="#0E9F6E"/>
                                                        <path
                                                            d="M15 7V9C15 10.0609 14.5786 11.0783 13.8284 11.8284C13.0783 12.5786 12.0609 13 11 13H9.82801L8.06201 14.767C8.34201 14.916 8.66100 15 9.00001 15H11L14 18V15H16C16.5304 15 17.0392 14.7893 17.4142 14.4142C17.7893 14.0391 18 13.5304 18 13V9C18 8.46957 17.7893 7.96086 17.4142 7.58579C17.0392 7.21071 16.5304 7 16 7H15Z"
                                                            fill="#0E9F6E"/>
                                                    </svg>
                                                </a>

                                            </div>

                                            <p class="px-0 text-left text-sm font-normal text-green-800 mb-3">
                                                You can rely on our team of car selection experts to help you find the
                                                perfect vehicle. Simply share your criteria with
                                                us, and we'll guide you towards the best car option available for
                                                purchase, including providing advice on the optimal
                                                final bid amount


                                            </p>

                                            <!-- buttons  -->
                                            <div
                                                class="text-left px-0  block lg2:flex items-center justify-between gap-3">
                                                <button type="button"
                                                        class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-3 py-2 dark:bg-primary-500 dark:hover:bg-primary-500 focus:outline-none dark:focus:ring-primary-800 flex items-center justify-center gap-2 mb-3 lg2:mb-0 w-full text-center">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M7.9999 9.60002C8.42425 9.60002 8.83121 9.43145 9.13127 9.1314C9.43133 8.83134 9.5999 8.42437 9.5999 8.00002C9.5999 7.57568 9.43133 7.16871 9.13127 6.86865C8.83121 6.5686 8.42425 6.40002 7.9999 6.40002C7.57556 6.40002 7.16859 6.5686 6.86853 6.86865C6.56847 7.16871 6.3999 7.57568 6.3999 8.00002C6.3999 8.42437 6.56847 8.83134 6.86853 9.1314C7.16859 9.43145 7.57556 9.60002 7.9999 9.60002Z"
                                                            fill="white"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M0.366455 8.00002C1.38566 4.75442 4.41765 2.40002 8.00005 2.40002C11.5825 2.40002 14.6145 4.75442 15.6337 8.00002C14.6145 11.2456 11.5825 13.6 8.00005 13.6C4.41765 13.6 1.38566 11.2456 0.366455 8.00002ZM11.2001 8.00002C11.2001 8.84872 10.8629 9.66265 10.2628 10.2628C9.66268 10.8629 8.84875 11.2 8.00005 11.2C7.15136 11.2 6.33743 10.8629 5.73731 10.2628C5.1372 9.66265 4.80006 8.84872 4.80006 8.00002C4.80006 7.15133 5.1372 6.3374 5.73731 5.73728C6.33743 5.13717 7.15136 4.80002 8.00005 4.80002C8.84875 4.80002 9.66268 5.13717 10.2628 5.73728C10.8629 6.3374 11.2001 7.15133 11.2001 8.00002Z"
                                                              fill="white"/>
                                                    </svg>
                                                    Contact our support
                                                </button>
                                                <button type="button"
                                                        class="text-white bg-primary-500 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-3 py-2 dark:bg-primary-500 dark:hover:bg-primary-500 focus:outline-none dark:focus:ring-primary-800 flex items-center justify-center gap-2 mb-0 lg2:mb-0 w-full text-center">
                                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M3.69995 3.19998C3.69995 2.77563 3.86852 2.36866 4.16858 2.0686C4.46864 1.76855 4.8756 1.59998 5.29995 1.59998H8.96875C9.39306 1.60007 9.79996 1.7687 10.1 2.06878L12.8312 4.79998C13.1312 5.09996 13.2999 5.50686 13.3 5.93118V12.8C13.3 13.2243 13.1314 13.6313 12.8313 13.9313C12.5313 14.2314 12.1243 14.4 11.7 14.4H5.29995C4.8756 14.4 4.46864 14.2314 4.16858 13.9313C3.86852 13.6313 3.69995 13.2243 3.69995 12.8V3.19998ZM5.29995 7.99998C5.29995 7.7878 5.38424 7.58432 5.53427 7.43429C5.6843 7.28426 5.88778 7.19998 6.09995 7.19998H10.9C11.1121 7.19998 11.3156 7.28426 11.4656 7.43429C11.6157 7.58432 11.7 7.7878 11.7 7.99998C11.7 8.21215 11.6157 8.41563 11.4656 8.56566C11.3156 8.71569 11.1121 8.79998 10.9 8.79998H6.09995C5.88778 8.79998 5.6843 8.71569 5.53427 8.56566C5.38424 8.41563 5.29995 8.21215 5.29995 7.99998ZM6.09995 10.4C5.88778 10.4 5.6843 10.4843 5.53427 10.6343C5.38424 10.7843 5.29995 10.9878 5.29995 11.2C5.29995 11.4121 5.38424 11.6156 5.53427 11.7657C5.6843 11.9157 5.88778 12 6.09995 12H10.9C11.1121 12 11.3156 11.9157 11.4656 11.7657C11.6157 11.6156 11.7 11.4121 11.7 11.2C11.7 10.9878 11.6157 10.7843 11.4656 10.6343C11.3156 10.4843 11.1121 10.4 10.9 10.4H6.09995Z"
                                                              fill="white"/>
                                                    </svg>
                                                    Request an inspection
                                                </button>
                                            </div>

                                        </div>


                                    </div>

                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Detailed information -->
            <section class="bg-white dark:bg-gray-900 ">
                <div class="mx-auto max-w-[1290px] px-[15px]">
                    <div class="mx-auto  pb-10  mt-[-2px] clas-sect">
                        <h2 class="text-left text-2xl font-medium mb-[23px] dark:text-white">Detailed information:</h2>
                        <div class="block lg1:flex justify-between">
                            <div class="block md:flex w-[100%] mb-4 lg1:mb-0 lg1:w-[56%] border   rounded-lg">
                                @for($j = 0; $j<2; $j++)
                                    <?php
                                    $data_detailed_information = [];
                                    switch ($j) {
                                        case 0:
                                            $data_detailed_information = $data_detailed_information_one;
                                            break;
                                        case 1:
                                            $data_detailed_information = $data_detailed_information_two;
                                            break;
                                    }
                                    ?>
                                    <table class="w-full">
                                        <tbody>
                                        @foreach($data_detailed_information as $key=>$item)
                                            <tr class="h-[37px] border-b border-gray-200 border-b border-gray-200">
                                                <td
                                                    class="bg-gray-50  text-sm font-normal text-gray-900 w-[180px] text-left  pl-[10px]  rounded-tl-[8px] border-r border-gray-200 dark:text-white dark:bg-gray-800">
                                                    {{$key}}:
                                                </td>
                                                <td class="  w-[180px] text-center">
                                                                        <span
                                                                            class="bg-green-100 text-green-800 text-xs font-medium  text-green-800  rounded dark:bg-green-900 dark:text-green-300 w-[180px] px-[10px] py-[2px] ">{{$item}}</span>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                @endfor
                            </div>
                            <div class="block w-[100%] lg1:w-[43%]">
                                <!-- 8.500 13.500 -->
                                <div class="flex gap-[14px] items-center mb-4 justify-between">
                                    <div class="w-[48%]">
                                        <div
                                            class="flex items-center rounded-[8px] bg-white  p-3 sm:p-5 gap-[14px] dark:bg-gray-800"
                                            style="box-shadow: 0px 2px 3px -1px rgba(0, 0, 0, 0.10), 0px 2px 4px 0px rgba(0, 0, 0, 0.10);">
                                            <div class="rounded-[8px] bg-primary-100 p-2">
                                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                          d="M4.79995 4.79999C4.3756 4.79999 3.96864 4.96856 3.66858 5.26862C3.36852 5.56868 3.19995 5.97564 3.19995 6.39999C3.19995 6.82433 3.36852 7.2313 3.66858 7.53136C3.96864 7.83142 4.3756 7.99999 4.79995 7.99999V20.8C4.79995 21.6487 5.13709 22.4626 5.73721 23.0627C6.33733 23.6628 7.15126 24 7.99995 24H12.1376L10.0688 26.0688C9.91594 26.2164 9.79404 26.3929 9.71009 26.5881C9.62633 26.7833 9.5822 26.9933 9.58035 27.2057C9.5785 27.4182 9.61899 27.6289 9.69944 27.8255C9.77989 28.0221 9.89869 28.2008 10.0489 28.351C10.1991 28.5012 10.3778 28.6201 10.5744 28.7005C10.7711 28.781 10.9817 28.8214 11.1942 28.8196C11.4066 28.8177 11.6166 28.7736 11.8118 28.6897C12.007 28.6059 12.1836 28.484 12.3312 28.3312L16 24.6624L19.6688 28.3312C19.9705 28.6226 20.3747 28.7839 20.7942 28.7803C21.2137 28.7766 21.615 28.6083 21.9117 28.3117C22.2083 28.015 22.3766 27.6137 22.3802 27.1942C22.3839 26.7747 22.2226 26.3705 21.9312 26.0688L19.8623 24H24C24.8486 24 25.6626 23.6628 26.2627 23.0627C26.8628 22.4626 27.1999 21.6487 27.1999 20.8V7.99999C27.6243 7.99999 28.0313 7.83142 28.3313 7.53136C28.6314 7.2313 28.7999 6.82433 28.7999 6.39999C28.7999 5.97564 28.6314 5.56868 28.3313 5.26862C28.0313 4.96856 27.6243 4.79999 27.1999 4.79999H4.79995ZM23.5311 12.3312C23.8226 12.0294 23.9839 11.6253 23.9802 11.2057C23.9766 10.7862 23.8083 10.3849 23.5117 10.0883C23.215 9.79163 22.8137 9.62335 22.3942 9.61971C21.9747 9.61606 21.5705 9.77734 21.2688 10.0688L16 15.3376L13.9312 13.2688C13.6311 12.9688 13.2242 12.8003 12.8 12.8003C12.3757 12.8003 11.9688 12.9688 11.6688 13.2688L8.46875 16.4688C8.31594 16.6164 8.19404 16.7929 8.11009 16.9881C8.02633 17.1833 7.9822 17.3933 7.98035 17.6057C7.9785 17.8182 8.01899 18.0289 8.09944 18.2255C8.17989 18.4221 8.29869 18.6008 8.44892 18.751C8.59915 18.9012 8.77779 19.0201 8.97442 19.1005C9.17106 19.181 9.38175 19.2214 9.59419 19.2196C9.80664 19.2177 10.0166 19.1736 10.2118 19.0898C10.407 19.0059 10.5836 18.884 10.7312 18.7312L12.8 16.6624L14.8688 18.7312C15.1688 19.0311 15.5757 19.1996 16 19.1996C16.4242 19.1996 16.8311 19.0311 17.1312 18.7312L23.5311 12.3312Z"
                                                          fill="#1C64F2"/>
                                                </svg>
                                            </div>
                                            <div class="text-left">
                                                <p class="leading-tight text-base sm:text-2xl font-bold text-gray-900 dark:text-white">
                                                    ${{$car_price_res['price_buys_average']}}
                                                </p>
                                                <p class="leading-tight text-xs sm:text-sm font-normal text-gray-500 max-w-[144px]">
                                                    Average final bid over
                                                    the last 90 days
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-[48%]">
                                        <div
                                            class="flex items-center rounded-[8px] bg-white  p-3 sm:p-5 gap-[14px] dark:bg-gray-800"
                                            style="box-shadow: 0px 2px 3px -1px rgba(0, 0, 0, 0.10), 0px 2px 4px 0px rgba(0, 0, 0, 0.10);">
                                            <div class="rounded-[8px] bg-primary-100 p-2">
                                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                          d="M4.79995 4.79999C4.3756 4.79999 3.96864 4.96856 3.66858 5.26862C3.36852 5.56868 3.19995 5.97564 3.19995 6.39999C3.19995 6.82433 3.36852 7.2313 3.66858 7.53136C3.96864 7.83142 4.3756 7.99999 4.79995 7.99999V20.8C4.79995 21.6487 5.13709 22.4626 5.73721 23.0627C6.33733 23.6628 7.15126 24 7.99995 24H12.1376L10.0688 26.0688C9.91594 26.2164 9.79404 26.3929 9.71009 26.5881C9.62633 26.7833 9.5822 26.9933 9.58035 27.2057C9.5785 27.4182 9.61899 27.6289 9.69944 27.8255C9.77989 28.0221 9.89869 28.2008 10.0489 28.351C10.1991 28.5012 10.3778 28.6201 10.5744 28.7005C10.7711 28.781 10.9817 28.8214 11.1942 28.8196C11.4066 28.8177 11.6166 28.7736 11.8118 28.6897C12.007 28.6059 12.1836 28.484 12.3312 28.3312L16 24.6624L19.6688 28.3312C19.9705 28.6226 20.3747 28.7839 20.7942 28.7803C21.2137 28.7766 21.615 28.6083 21.9117 28.3117C22.2083 28.015 22.3766 27.6137 22.3802 27.1942C22.3839 26.7747 22.2226 26.3705 21.9312 26.0688L19.8623 24H24C24.8486 24 25.6626 23.6628 26.2627 23.0627C26.8628 22.4626 27.1999 21.6487 27.1999 20.8V7.99999C27.6243 7.99999 28.0313 7.83142 28.3313 7.53136C28.6314 7.2313 28.7999 6.82433 28.7999 6.39999C28.7999 5.97564 28.6314 5.56868 28.3313 5.26862C28.0313 4.96856 27.6243 4.79999 27.1999 4.79999H4.79995ZM23.5311 12.3312C23.8226 12.0294 23.9839 11.6253 23.9802 11.2057C23.9766 10.7862 23.8083 10.3849 23.5117 10.0883C23.215 9.79163 22.8137 9.62335 22.3942 9.61971C21.9747 9.61606 21.5705 9.77734 21.2688 10.0688L16 15.3376L13.9312 13.2688C13.6311 12.9688 13.2242 12.8003 12.8 12.8003C12.3757 12.8003 11.9688 12.9688 11.6688 13.2688L8.46875 16.4688C8.31594 16.6164 8.19404 16.7929 8.11009 16.9881C8.02633 17.1833 7.9822 17.3933 7.98035 17.6057C7.9785 17.8182 8.01899 18.0289 8.09944 18.2255C8.17989 18.4221 8.29869 18.6008 8.44892 18.751C8.59915 18.9012 8.77779 19.0201 8.97442 19.1005C9.17106 19.181 9.38175 19.2214 9.59419 19.2196C9.80664 19.2177 10.0166 19.1736 10.2118 19.0898C10.407 19.0059 10.5836 18.884 10.7312 18.7312L12.8 16.6624L14.8688 18.7312C15.1688 19.0311 15.5757 19.1996 16 19.1996C16.4242 19.1996 16.8311 19.0311 17.1312 18.7312L23.5311 12.3312Z"
                                                          fill="#1C64F2"/>
                                                </svg>
                                            </div>
                                            <div class="text-left">
                                                <p class="leading-tight text-base sm:text-2xl font-bold text-gray-900 dark:text-white">
                                                    ${{$car_price_res['price_buys_last']}}
                                                </p>
                                                <p class="leading-tight text-xs sm:text-sm font-normal text-gray-500 max-w-[144px]">
                                                    Average final bid over
                                                    the last 90 days
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- select + final -->
                                <div
                                    class="block md:flex gap-[27px] rounded-[8px] justify-between bg-white  p-5 dark:bg-gray-800"
                                    style="box-shadow: 0px 2px 3px -1px rgba(0, 0, 0, 0.10), 0px 2px 4px 0px rgba(0, 0, 0, 0.10);">

                                    <!-- select -->
                                    <div class="w-[100%]">
                                        <div class="flex items-center gap-2 mb-[8px]">
                                            <p class="leading-tight text-sm font-medium text-gray-900 dark:text-white">
                                                Select delivery country</p>
                                            <div>
                                                <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.7 9.50005C15.7 11.277 14.9942 12.9812 13.7377 14.2377C12.4812 15.4942 10.777 16.2 9.00005 16.2C7.2231 16.2 5.51893 15.4942 4.26243 14.2377C3.00594 12.9812 2.30005 11.277 2.30005 9.50005C2.30005 7.7231 3.00594 6.01893 4.26243 4.76243C5.51893 3.50594 7.2231 2.80005 9.00005 2.80005C10.777 2.80005 12.4812 3.50594 13.7377 4.76243C14.9942 6.01893 15.7 7.7231 15.7 9.50005ZM9.99 6.89C10.2526 6.62745 10.4 6.27135 10.4 5.90005C10.4 5.52875 10.2526 5.17265 9.99 4.9100C9.72745 4.64755 9.37135 4.50005 9.00005 4.50005C8.62875 4.50005 8.27265 4.64755 8.0100 4.9100C7.74755 5.17265 7.60005 5.52875 7.60005 5.90005C7.60005 6.27135 7.74755 6.62745 8.0100 6.89C8.27265 7.15255 8.62875 7.30005 9.00005 7.30005C9.37135 7.30005 9.72745 7.15255 9.99 6.89ZM8.10005 8.10005C7.72875 8.10005 7.37265 8.24755 7.1100 8.5100C6.84755 8.77265 6.70005 9.12875 6.70005 9.50005C6.70005 9.87135 6.84755 10.2274 7.1100 10.49C7.25062 10.6305 7.41794 10.7381 7.60005 10.8077V13.1C7.60005 13.4714 7.74755 13.8274 8.0100 14.09C8.27265 14.3525 8.62875 14.5 9.00005 14.5H9.90005C10.2714 14.5 10.6274 14.3525 10.89 14.09C11.1525 13.8274 11.3 13.4714 11.3 13.1C11.3 12.7287 11.1525 12.3727 10.89 12.1100C10.7495 11.9696 10.5822 11.862 10.4 11.7924V9.50005C10.4 9.12875 10.2526 8.77265 9.99 8.5100C9.72745 8.24755 9.37135 8.10005 9.00005 8.10005H8.10005Z"
                                                        fill="#9CA3AF" stroke="#9CA3AF"/>
                                                </svg>
                                            </div>
                                        </div>

                                        <!-- Select country -->

                                        <div class="mt-[15px] mb-[15px] relative">


                                            <select id="countries"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm font-normal rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                <option id="germany" selected value="$4000">Germany</option>
                                                <option id="united-states" value="$1000">United States</option>
                                                <option id="canada" value="$2000">Canada</option>
                                                <option id="france" value="$3000">France</option>

                                            </select>


                                        </div>
                                        <!-- тогле -->
                                        <div class="mb-3 md:mb-0 relative">
                                            <label class="relative inline-flex items-center cursor-pointer">
                                                <input type="checkbox" value="checked" class="sr-only peer" checked>
                                                <!-- Добавляем атрибут checked здесь -->
                                                <div
                                                    class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary-300 dark:peer-focus:ring-primary-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary-500">
                                                </div>
                                            </label>

                                            <div class="absolute top-[-4px] right-[17px]">
                                                                        <span
                                                                            class=" text-sm font-medium text-gray-900 dark:text-gray-300 ">Add delivery
                                                                            insurance</span>
                                                <p class="  text-xs font-normal text-gray-500 ">For the whole freight
                                                    cycle</p>
                                            </div>

                                        </div>


                                    </div>


                                    <!-- final -->
                                    <div class="w-[100%]">
                                        <div class="flex items-center gap-2 mb-[12px]">
                                            <p class="text-sm font-medium text-gray-900 dark:text-white">Final cost
                                                calculation</p>
                                            <div>
                                                <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.7 9.50005C15.7 11.277 14.9942 12.9812 13.7377 14.2377C12.4812 15.4942 10.777 16.2 9.00005 16.2C7.2231 16.2 5.51893 15.4942 4.26243 14.2377C3.00594 12.9812 2.30005 11.277 2.30005 9.50005C2.30005 7.7231 3.00594 6.01893 4.26243 4.76243C5.51893 3.50594 7.2231 2.80005 9.00005 2.80005C10.777 2.80005 12.4812 3.50594 13.7377 4.76243C14.9942 6.01893 15.7 7.7231 15.7 9.50005ZM9.99 6.89C10.2526 6.62745 10.4 6.27135 10.4 5.90005C10.4 5.52875 10.2526 5.17265 9.99 4.9100C9.72745 4.64755 9.37135 4.50005 9.00005 4.50005C8.62875 4.50005 8.27265 4.64755 8.0100 4.9100C7.74755 5.17265 7.60005 5.52875 7.60005 5.90005C7.60005 6.27135 7.74755 6.62745 8.0100 6.89C8.27265 7.15255 8.62875 7.30005 9.00005 7.30005C9.37135 7.30005 9.72745 7.15255 9.99 6.89ZM8.10005 8.10005C7.72875 8.10005 7.37265 8.24755 7.1100 8.5100C6.84755 8.77265 6.70005 9.12875 6.70005 9.50005C6.70005 9.87135 6.84755 10.2274 7.1100 10.49C7.25062 10.6305 7.41794 10.7381 7.60005 10.8077V13.1C7.60005 13.4714 7.74755 13.8274 8.0100 14.09C8.27265 14.3525 8.62875 14.5 9.00005 14.5H9.90005C10.2714 14.5 10.6274 14.3525 10.89 14.09C11.1525 13.8274 11.3 13.4714 11.3 13.1C11.3 12.7287 11.1525 12.3727 10.89 12.1100C10.7495 11.9696 10.5822 11.862 10.4 11.7924V9.50005C10.4 9.12875 10.2526 8.77265 9.99 8.5100C9.72745 8.24755 9.37135 8.10005 9.00005 8.10005H8.10005Z"
                                                        fill="#9CA3AF" stroke="#9CA3AF"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div
                                            class="bg-gray-100 text-gray-800 rounded dark:bg-gray-700 dark:text-gray-300 text-sm font-medium  px-[10px] py-[2px] flex justify-between mb-[5px]">
                                            <span>Auction fee:</span>
                                            <span id="auction-fee">$</span>
                                        </div>
                                        <div
                                            class="bg-gray-100 text-gray-800 rounded dark:bg-gray-700 dark:text-gray-300 text-sm font-medium  px-[10px] py-[2px] flex justify-between mb-[5px]">
                                            <span>Final car price:</span>
                                            <span id="final-price">$</span>
                                        </div>
                                        <div
                                            class="bg-gray-100 text-gray-800 rounded dark:bg-gray-700 dark:text-gray-300 text-sm font-medium  px-[10px] py-[2px] flex justify-between mb-[5px]">
                                            <span>Delivery price:</span>
                                            <span id="delivery-price">$</span>
                                        </div>
                                        <div
                                            class="bg-gray-100 text-gray-800 rounded dark:bg-gray-700 dark:text-gray-300 text-sm font-medium  px-[10px] py-[2px] flex justify-between">
                                            <span>Total:</span>
                                            <span id="total">$</span>
                                        </div>

                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Overview of KNDJN2A26G7836673 -->
            <section class="bg-white dark:bg-gray-900 mt-[-2px]">
                <div class="mx-auto max-w-[1290px] ">
                    <div class="mx-auto max-w-screen-xl pb-10 px-[15px] clas-sect">
                        <div class="md:flex md:gap-[30px] md1:gap-[70px] lg1:gap-[128px]">
                            <div class="md:w-[53%] box-text">
                                <h2 class="text-lg font-medium text-black mb-[18px] dark:text-white">Overview of
                                    {{$car->vin}}</h2>
                                <div class=" text-lg font-normal text-gray-500  box__post">
                                    <p>
                                        {{$car->description}}
                                    </p>
                                </div>
                                {{--                                <p class="text-lg font-normal text-gray-500 mb-[15px]">--}}
                                {{--                                   {{$car->description}}--}}
                                {{--                                </p>--}}

                                {{--                                <p class="text-lg font-normal text-gray-500 mb-[15px]">--}}
                                {{--                                    Track work across the enterprise through an open, collaborative platform. Link--}}
                                {{--                                    issues across Jira and--}}
                                {{--                                    ingest data from--}}
                                {{--                                    other software development tools, so your IT support and operations teams have--}}
                                {{--                                    richer contextual--}}
                                {{--                                    information to rapidly--}}
                                {{--                                    respond to requests, incidents.--}}
                                {{--                                </p>--}}
                                {{--                                <p class="text-lg font-normal text-gray-500 mb-[15px]">--}}
                                {{--                                    Track work across the enterprise through an open, collaborative platform. Link--}}
                                {{--                                    issues across Jira and--}}
                                {{--                                    ingest data from--}}
                                {{--                                    other software development tools, so your IT support and operations teams have--}}
                                {{--                                    richer contextual--}}
                                {{--                                    information to rapidly--}}
                                {{--                                    respond to requests, incidents.--}}
                                {{--                                </p>--}}


                                <div class=" text-lg font-normal text-gray-500  box__post">
                                    <p>
                                        Track work across the enterprise through an open, collaborative platform. Link
                                        issues across Jira
                                        and ingest data from
                                        other software development tools, so your IT support and operations teams have
                                        richer contextual
                                        information to rapidly
                                        respond to requests, incidents, and changes.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, ipsam pariatur
                                        iusto, deserunt
                                        voluptatibus quasi aliquid dolor obcaecati, rerum repellat iure totam natus
                                        dolore voluptatum fugiat
                                        reiciendis debitis quas libero.
                                    </p>
                                </div>
                                <div class="box__btn mt-[9px]">

                                    <button id="btn-more"
                                            class="leading-none text-sm font-medium text-primary-600 flex relative"
                                            type="button">Read more
                                        <svg class="w-2.5 h-2.5 ml-2.5 absolute top-[2px] left-[75px]"
                                             aria-hidden="true"
                                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2"
                                                  d="m1 1 4 4 4-4"/>
                                        </svg>
                                    </button>
                                    <button id="btn-show"
                                            class="leading-none text-sm font-medium text-primary-600 flex relative hidden"
                                            type="button">Show less
                                        <svg class="w-2.5 h-2.5 ml-2.5 absolute top-[2px] left-[75px]"
                                             aria-hidden="true"
                                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6"
                                             transform="rotate(180)">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2"
                                                  d="m1 1 4 4 4-4"/>
                                        </svg>
                                    </button>

                                </div>


                            </div>
                            <div class="mx-auto max-w-screen-md  md:w-[43%]">
                                <div id="accordion-flush" data-accordion="collapse"
                                     data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white"
                                     data-inactive-classes="text-gray-500 dark:text-gray-400">
                                    <!-- 1 -->
                                    <h2 id="accordion-flush-heading-1">
                                        <button type="button"
                                                class="flex justify-between items-center py-6 w-full font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 "
                                                data-accordion-target="#accordion-flush-body-1" aria-expanded="false"
                                                aria-controls="accordion-flush-body-1">
                                            <span>Can I use FlowBite in open-source projects?</span>
                                            <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor"
                                                 viewBox="0 0 20 20"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                      clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </h2>
                                    <div id="accordion-flush-body-1" class="hidden"
                                         aria-labelledby="accordion-flush-heading-1">
                                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                            <p class="mb-2 text-gray-500 dark:text-gray-400 ">Generally, it is accepted
                                                to use FlowBite in
                                                open-source projects, as long as it is not a UI library, a theme, a
                                                template, a page-builder that would be considered as an alternative to
                                                FlowBite itself.</p>
                                            <p class="mb-2 text-gray-500 dark:text-gray-400 ">With that being said, feel
                                                free to use this
                                                design kit for your open-source projects.</p>
                                            <p class="mb-2 text-gray-500 dark:text-gray-400 ">
                                                Find out more information by
                                                <a href="#"
                                                   class="text-primary-600 dark:text-primary-500 hover:underline ">reading
                                                    the
                                                    license.</a>
                                        </div>
                                    </div>
                                    <!-- 2 -->
                                    <h2 id="accordion-flush-heading-2">
                                        <button type="button"
                                                class="flex justify-between items-center py-6 w-full font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 "
                                                data-accordion-target="#accordion-flush-body-2" aria-expanded="false"
                                                aria-controls="accordion-flush-body-2">
                                            <span>Where can I access my download files?</span>
                                            <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor"
                                                 viewBox="0 0 20 20"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                      clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </h2>
                                    <div id="accordion-flush-body-2" class="hidden"
                                         aria-labelledby="accordion-flush-heading-2">
                                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                            <p class="mb-2 text-gray-500 dark:text-gray-400 ">Flowbite is first
                                                conceptualized and
                                                designed using the Figma software so everything you see in the library
                                                has a design
                                                equivalent in our Figma file.</p>
                                            <p class="text-gray-500 dark:text-gray-400 ">Check out the <a href="#"
                                                                                                          class="text-primary-600 dark:text-primary-500 hover:underline ">Figma
                                                    design
                                                    system</a> based on the utility classes from Tailwind CSS and
                                                components from
                                                Flowbite.</p>
                                        </div>
                                    </div>
                                    <!-- 3 -->
                                    <h2 id="accordion-flush-heading-3">
                                        <button type="button"
                                                class="flex justify-between items-center py-6 w-full font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 "
                                                data-accordion-target="#accordion-flush-body-3" aria-expanded="false"
                                                aria-controls="accordion-flush-body-3">
                                            <span>Can I use FlowBite for commercial purposes?</span>
                                            <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor"
                                                 viewBox="0 0 20 20"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                      clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </h2>
                                    <div id="accordion-flush-body-3" class="hidden"
                                         aria-labelledby="accordion-flush-heading-3">
                                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                            <p class="mb-2 text-gray-500 dark:text-gray-400 ">The main difference is
                                                that the core
                                                components from Flowbite are open source under the MIT license, whereas
                                                Tailwind UI is a
                                                paid product. Another difference is that Flowbite relies on smaller and
                                                standalone
                                                components, whereas Tailwind UI offers sections of pages.</p>
                                            <p class="mb-2 text-gray-500 dark:text-gray-400 ">However, we actually
                                                recommend using both
                                                Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical
                                                reason stopping
                                                you from using the best of two worlds.</p>
                                            <p class="mb-2 text-gray-500 dark:text-gray-400 ">Learn more about these
                                                technologies:</p>
                                            <ul class="pl-5 list-disc text-gray-500 dark:text-gray-400">
                                                <li><a href="#"
                                                       class="text-primary-600 dark:text-primary-500 hover:underline ">Flowbite
                                                        Pro</a></li>
                                                <li><a href="#"
                                                       class="text-primary-600 dark:text-primary-500 hover:underline ">Tailwind
                                                        UI</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- 4 -->
                                    <h2 id="accordion-flush-heading-4">
                                        <button type="button"
                                                class="flex justify-between items-center py-6 w-full font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 "
                                                data-accordion-target="#accordion-flush-body-4" aria-expanded="false"
                                                aria-controls="accordion-flush-body-4">
                                            <span>Can I use FlowBite for commercial purposes?</span>
                                            <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor"
                                                 viewBox="0 0 20 20"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                      clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </h2>
                                    <div id="accordion-flush-body-4" class="hidden"
                                         aria-labelledby="accordion-flush-heading-4">
                                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                            <p class="mb-2 text-gray-500 dark:text-gray-400 ">The main difference is
                                                that the core
                                                components from Flowbite are open source under the MIT license, whereas
                                                Tailwind UI is a
                                                paid product. Another difference is that Flowbite relies on smaller and
                                                standalone
                                                components, whereas Tailwind UI offers sections of pages.</p>
                                            <p class="mb-2 text-gray-500 dark:text-gray-400 ">However, we actually
                                                recommend using both
                                                Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical
                                                reason stopping
                                                you from using the best of two worlds.</p>
                                            <p class="mb-2 text-gray-500 dark:text-gray-400 ">Learn more about these
                                                technologies:</p>
                                            <ul class="pl-5 list-disc text-gray-500 dark:text-gray-400">
                                                <li><a href="#"
                                                       class="text-primary-600 dark:text-primary-500 hover:underline ">Flowbite
                                                        Pro</a></li>
                                                <li><a href="#"
                                                       class="text-primary-600 dark:text-primary-500 hover:underline ">Tailwind
                                                        UI</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- 5 -->
                                    <h2 id="accordion-flush-heading-5">
                                        <button type="button"
                                                class="flex justify-between items-center py-6 w-full font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 "
                                                data-accordion-target="#accordion-flush-body-5" aria-expanded="false"
                                                aria-controls="accordion-flush-body-5">
                                            <span>What about browser support?</span>
                                            <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor"
                                                 viewBox="0 0 20 20"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                      clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </h2>
                                    <div id="accordion-flush-body-5" class="hidden"
                                         aria-labelledby="accordion-flush-heading-5">
                                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                            <p class="mb-2 text-gray-500 dark:text-gray-400 ">The main difference is
                                                that the core
                                                components from Flowbite are open source under the MIT license, whereas
                                                Tailwind UI is a
                                                paid product. Another difference is that Flowbite relies on smaller and
                                                standalone
                                                components, whereas Tailwind UI offers sections of pages.</p>
                                            <p class="mb-2 text-gray-500 dark:text-gray-400 ">However, we actually
                                                recommend using both
                                                Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical
                                                reason stopping
                                                you from using the best of two worlds.</p>
                                            <p class="mb-2 text-gray-500 dark:text-gray-400 ">Learn more about these
                                                technologies:</p>
                                            <ul class="pl-5 list-disc text-gray-500 dark:text-gray-400">
                                                <li><a href="#"
                                                       class="text-primary-600 dark:text-primary-500 hover:underline ">Flowbite
                                                        Pro</a></li>
                                                <li><a href="#"
                                                       class="text-primary-600 dark:text-primary-500 hover:underline ">Tailwind
                                                        UI</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Recommended  -->
            @if(count($recommended_cars))
                <section class="bg-white dark:bg-gray-900 mt-[-2px]">
                    <div class="mx-auto max-w-[1290px] px-[15px]">
                        <div class="py-8  mx-auto max-w-screen-xl lg:py-16 ">
                            <div class="container mx-auto text-center my-8">
                                <h2 class="mb-4  text-5xl md:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white ">
                                    Recommended related cars
                                </h2>

                            </div>

                            <!-- grid container for cards -->

                            <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 lg:px-4 ">
                                @include("components.catalog.car_card_list", ['data_card'=>$recommended_cars])
                            </div>
                        </div>
                    </div>
                </section>
        @endif

        <!--  Our blog -->
            <section class="bg-white dark:bg-gray-900 clas-sect mt-[-2px]">
                <div class="mx-auto max-w-[1290px] px-[15px]">
                    <div class="py-8  mx-auto max-w-screen-xl lg:py-16 ">
                        <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
                            <h2 class="mb-4 text-3xl md:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white ">
                                Our Blog
                            </h2>
                            <p class="font-light text-gray-500 text-base md:text-xl dark:text-gray-400 ">Explore
                                automotive auctions
                                with us and gain valuable insights from our international experts.</p>
                        </div>

                        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                            <!-- 1 карточка -->
                            <article class="p-4 bg-white rounded-lg  shadow-md dark:bg-gray-800 dark:border-gray-700">
                                <a href="#">
                                    <img class="mb-5 rounded-lg"
                                         src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/blog/office-laptops.png"
                                         alt="office laptop working">
                                </a>
                                <span
                                    class="bg-purple-100 text-purple-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-purple-200 dark:text-purple-900 ">Article</span>
                                <h2 class="my-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white ">
                                    <a href="#">Our first office</a>
                                </h2>
                                <p class="mb-4 font-light text-gray-500 dark:text-gray-400 ">Over the past year,
                                    Volosoft has undergone
                                    many changes! After months of preparation and some hard work, we moved to our new
                                    office.</p>
                                <div class="flex items-center space-x-4">
                                    <img class="w-10 h-10 rounded-full"
                                         src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                         alt="Jese Leos avatar">
                                    <div class="font-medium dark:text-white">
                                        <div>Marcin</div>
                                        <div class="text-sm font-normal text-gray-500 dark:text-gray-400 ">Head of
                                            logistics department
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- 2 карточка -->
                            <article class="p-4 bg-white rounded-lg  shadow-md dark:bg-gray-800 dark:border-gray-700">
                                <a href="#">
                                    <img class="mb-5 rounded-lg"
                                         src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/blog/google-hq.png"
                                         alt="Google HQ">
                                </a>
                                <span
                                    class="bg-purple-100 text-purple-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-purple-200 dark:text-purple-900 ">Article</span>
                                <h2 class="my-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white ">
                                    <a href="#">We partnered up with Google</a>
                                </h2>
                                <p class="mb-4 font-light text-gray-500 dark:text-gray-400 ">Over the past year,
                                    Volosoft has undergone
                                    many changes! After months of preparation and some hard work, we moved to our new
                                    office.</p>
                                <div class="flex items-center space-x-4">
                                    <img class="w-10 h-10 rounded-full"
                                         src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png"
                                         alt="Roberta Casas avatar">
                                    <div class="font-medium dark:text-white ">
                                        <div>Roberta Casas</div>
                                        <div class="text-sm font-normal text-gray-500 dark:text-gray-400 ">Auto
                                            selection expert
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- 3 карточка -->
                            <article class="p-4 bg-white rounded-lg  shadow-md dark:bg-gray-800 dark:border-gray-700">
                                <a href="#">
                                    <img class="mb-5 rounded-lg"
                                         src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/blog/office-laptops-2.png"
                                         alt="office laptops">
                                </a>
                                <span
                                    class="bg-purple-100 text-purple-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-purple-200 dark:text-purple-900 ">Article</span>
                                <h2 class="my-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white ">
                                    <a href="#">Our first project with React</a>
                                </h2>
                                <p class="mb-4 font-light text-gray-500 dark:text-gray-400 ">Over the past year,
                                    Volosoft has undergone
                                    many changes! After months of preparation and some hard work, we moved to our new
                                    office.</p>
                                <div class="flex items-center space-x-4">
                                    <img class="w-10 h-10 rounded-full"
                                         src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/sofia-mcguire.png"
                                         alt="Sofia McGuire avatar">
                                    <div class="font-medium dark:text-white ">
                                        <div>Sofia McGuire</div>
                                        <div class="text-sm font-normal text-gray-500 dark:text-gray-400 ">Client
                                            support manager
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@stop
@section("script")
    <script src="js/calc-js.js"></script>
    <script src="js/auto-script.js"></script>
@stop
