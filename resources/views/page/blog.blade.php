@extends("layout.myApp")
@section("content")
    <div class="flex-auto">
        <div class="  bg-white dark:bg-gray-900 ">
            <div
                class="bg-[url('https://flowbite.s3.amazonaws.com/blocks/marketing-ui/articles/background.png')] w-full h-[450px] xl:h-[537px] bg-no-repeat bg-cover bg-center bg-gradientBlock">

                <div class="mx-auto max-w-[1290px] relative z-30">


                    <div
                        class="absolute top-[83px] left-1/2 px-4 mx-auto w-full max-w-[1290px] -translate-x-1/2   xl:px-0">
                                <span class="block mb-4 text-lg font-normal  text-gray-300">Published in <a href="#"
                                                                                                            class="font-semibold text-white text-lg hover:underline">World News</a></span>
                        <h1 class="mb-4 max-w-[860px] text-2xl font-extrabold leading-none text-white sm:text-3xl lg:text-4xl">
                            Flowbite Blocks Tutorial - Learn how to get started with custom sections using the Flowbite
                            Blocks </h1>
                        <p class="block md:hidden text-lg font-normal text-gray-300">
                            Before going digital, you might scribbling down some ideas in a sketchbook.
                        </p>

                    </div>
                </div>
            </div>
            <div class="mx-auto max-w-[1290px]">
                <div
                    class="flex relative z-20 justify-between p-4 md:pl-6 mx-0 md:mx-4 max-w-screen-xl bg-white dark:bg-gray-800 transform translate-y-[-100px] md:translate-y-[-170px] xl:translate-y-[-213px] xl:p-6 xl:mx-auto">
                    <div
                        class="xl:w-[828px] w-full max-w-none format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">

                        <div class="block md:flex justify-between items-center text-gray-500 dark:text-gray-400 text-base mb-6 md:mt-3 ">

                            <div class="flex gap-4 items-center">
                                <div class="flex mb-4 md:mb-0">
                                    <p class="mr-1">
                                        By our head of client support -
                                    </p>
                                    <a href="#"
                                       class="text-gray-900 dark:text-white hover:underline no-underline  text-base font-bold ">
                                        John
                                    </a>
                                </div>

                                <div class="hidden md:flex gap-4 whitespace-no-wrap items-center justify-between">
                                    <span class="bg-gray-300 dark:bg-gray-400 w-2 h-2 rounded-full"></span>
                                    <span>
                                                        <time class="text-base font-normal text-gray-500 dark:text-gray-400"
                                                              pubdate class="uppercase"
                                                              datetime="2022-03-08" title="August 3rd, 2022">August 3, 2022 2:20am</time>
                                                    </span>
                                </div>
                            </div>


                            <div class="flex items-center gap-5 ">
                                <div class="flex md:hidden gap-1 msll:gap-4 whitespace-no-wrap items-center justify-between">
                                    <span class="bg-gray-300 dark:bg-gray-400 w-2 h-2 rounded-full"></span>
                                    <span>
                                                            <time class="text-base font-normal text-gray-500 dark:text-gray-400"
                                                                  pubdate class="uppercase" datetime="2022-03-08"
                                                                  title="August 3rd, 2022">August 3, 2022 2:20am</time>
                                                        </span>
                                </div>

                                <aside aria-label="Share social media" class="flex">
                                    <div class="not-format flex gap-3">
                                        <!-- facebook -->
                                        <button data-tooltip-target="tooltip-facebook"
                                                class="inline-flex items-center text-sm font-medium text-center text-gray-500 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 "
                                                type="button">
                                            <svg class="w-6 h-6 bg-gray-600 p-1 dark:hover:bg-gray-600 rounded-lg"
                                                 aria-hidden="true" viewBox="0 0 18 18" fill="currentColor"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_13676_82298)">
                                                    <path
                                                        d="M18 9C18 4.02943 13.9706 0 9 0C4.02943 0 0 4.02943 0 9C0 13.4921 3.29115 17.2155 7.59375 17.8907V11.6016H5.30859V9H7.59375V7.01719C7.59375 4.76156 8.93742 3.51562 10.9932 3.51562C11.9776 3.51562 13.0078 3.69141 13.0078 3.69141V5.90625H11.873C10.755 5.90625 10.4062 6.60006 10.4062 7.3125V9H12.9023L12.5033 11.6016H10.4062V17.8907C14.7088 17.2155 18 13.4921 18 9Z"/>
                                                </g>

                                            </svg>
                                        </button>

                                        <!-- twiter -->
                                        <button data-tooltip-target="tooltip-twitter"
                                                class="inline-flex items-center text-sm font-medium text-center text-gray-500 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 "
                                                type="button">
                                            <svg class="w-6 h-6 bg-gray-600 p-1 dark:hover:bg-gray-600 rounded-lg"
                                                 aria-hidden="true" viewBox="0 0 18 18" fill="#1877F2"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.66064 16.3131C12.4531 16.3131 16.1683 10.6856 16.1683 5.80539C16.1683 5.64555 16.1683 5.48643 16.1575 5.32803C16.8803 4.80525 17.5042 4.15794 18 3.41643C17.326 3.71523 16.611 3.9111 15.8789 3.99747C16.6499 3.53599 17.2269 2.81006 17.5025 1.95483C16.7776 2.38504 15.9845 2.6882 15.1574 2.85123C14.6006 2.25916 13.8642 1.86711 13.0621 1.73574C12.2601 1.60438 11.4371 1.74102 10.7205 2.12452C10.0039 2.50802 9.43367 3.11701 9.09806 3.85724C8.76245 4.59747 8.68016 5.42768 8.86392 6.21939C7.39567 6.14574 5.95932 5.76416 4.64809 5.09943C3.33686 4.4347 2.18007 3.50168 1.2528 2.36091C0.780546 3.17391 0.635904 4.13633 0.848325 5.05223C1.06075 5.96812 1.61426 6.76863 2.39616 7.29075C1.80842 7.27353 1.23349 7.11498 0.72 6.82851V6.87531C0.720233 7.72795 1.01539 8.55426 1.5554 9.21409C2.09542 9.87391 2.84705 10.3266 3.6828 10.4955C3.13911 10.6438 2.56866 10.6654 2.01528 10.5588C2.25136 11.2926 2.71082 11.9342 3.32943 12.394C3.94804 12.8539 4.69487 13.1089 5.46552 13.1235C4.69983 13.7253 3.82299 14.1703 2.88516 14.433C1.94733 14.6956 0.966911 14.7708 0 14.6542C1.68887 15.738 3.65394 16.3128 5.66064 16.3102"/>
                                            </svg>
                                        </button>

                                        <!--Reddit  -->
                                        <button data-tooltip-target="tooltip-reddit"
                                                class="inline-flex items-center text-sm font-medium text-center text-gray-500 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 "
                                                type="button">
                                            <svg class="w-6 h-6 bg-gray-600 p-1 dark:hover:bg-gray-600 rounded-lg"
                                                 aria-hidden="true" viewBox="0 0 18 18" fill="#FF4500"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_13676_82300)">
                                                    <path
                                                        d="M9 18C13.9706 18 18 13.9706 18 9C18 4.02944 13.9706 0 9 0C4.02944 0 0 4.02944 0 9C0 13.9706 4.02944 18 9 18Z"/>
                                                    <path
                                                        d="M15.0004 8.99997C15.0004 8.27365 14.411 7.68418 13.6846 7.68418C13.3267 7.68418 13.011 7.82102 12.7794 8.0526C11.8846 7.41049 10.6425 6.98944 9.27412 6.93681L9.87412 4.12628L11.8215 4.53681C11.8425 5.03155 12.2531 5.43155 12.7583 5.43155C13.2741 5.43155 13.6952 5.01049 13.6952 4.4947C13.6952 3.97891 13.2741 3.55786 12.7583 3.55786C12.3899 3.55786 12.0741 3.76839 11.9267 4.08418L9.7478 3.62102C9.68464 3.61049 9.62148 3.62102 9.56885 3.6526C9.51622 3.68418 9.48464 3.73681 9.46359 3.79997L8.80043 6.93681C7.40043 6.97891 6.1478 7.38944 5.24254 8.0526C5.01096 7.83155 4.68464 7.68418 4.33727 7.68418C3.61096 7.68418 3.02148 8.27365 3.02148 8.99997C3.02148 9.53681 3.33727 9.98944 3.80043 10.2C3.77938 10.3263 3.76885 10.4631 3.76885 10.6C3.76885 12.621 6.11622 14.2526 9.02149 14.2526C11.9267 14.2526 14.2741 12.621 14.2741 10.6C14.2741 10.4631 14.2636 10.3368 14.2425 10.2105C14.6741 9.99997 15.0004 9.53681 15.0004 8.99997ZM6.00043 9.93681C6.00043 9.42102 6.42148 8.99997 6.93727 8.99997C7.45306 8.99997 7.87412 9.42102 7.87412 9.93681C7.87412 10.4526 7.45306 10.8737 6.93727 10.8737C6.42148 10.8737 6.00043 10.4526 6.00043 9.93681ZM11.232 12.4105C10.5899 13.0526 9.36885 13.0947 9.01096 13.0947C8.65306 13.0947 7.42148 13.0421 6.7899 12.4105C6.69517 12.3158 6.69517 12.1579 6.7899 12.0631C6.88464 11.9684 7.04254 11.9684 7.13727 12.0631C7.53727 12.4631 8.40043 12.6105 9.02149 12.6105C9.64254 12.6105 10.4952 12.4631 10.9057 12.0631C11.0004 11.9684 11.1583 11.9684 11.2531 12.0631C11.3267 12.1684 11.3267 12.3158 11.232 12.4105ZM11.0636 10.8737C10.5478 10.8737 10.1267 10.4526 10.1267 9.93681C10.1267 9.42102 10.5478 8.99997 11.0636 8.99997C11.5794 8.99997 12.0004 9.42102 12.0004 9.93681C12.0004 10.4526 11.5794 10.8737 11.0636 10.8737Z"
                                                        fill="white"/>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_13676_82300">
                                                        <rect width="18" height="18"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </button>

                                        <!-- link -->
                                        <button data-tooltip-target="tooltip-link"
                                                class="inline-flex items-center text-sm font-medium text-center text-gray-500 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 "
                                                type="button">
                                            <svg class="w-6 h-6 bg-gray-600 p-1 dark:hover:bg-gray-600 rounded-lg"
                                                 fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1">
                                                </path>
                                            </svg>
                                        </button>

                                        <!--  -->

                                        <!-- Dropdown menu -->
                                        <div id="dropdownDotsHorizontal"
                                             class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                                aria-labelledby="dropdownMenuIconHorizontalButton">
                                                <li>
                                                    <a href="#"
                                                       class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Add
                                                        to collection</a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                       class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </aside>


                            </div>

                        </div>


                        <!-- line across the screen -->
                        <div class=" h-[1px] bg-gray-200 w-[100%] mb-[32px]"></div>

                        <p class="text-base md:text-2xl font-normal text-gray-500 mb-5">Flowbite is an open-source
                            library of UI components built with the utility-first
                            classes from Tailwind CSS. It also includes interactive elements such as dropdowns, modals,
                            datepickers.</p>
                        <p class="text-base md:text-lg font-normal text-gray-500 mb-5">Before going digital, you might
                            benefit from scribbling down some ideas in a sketchbook. This way,
                            you can think things through before committing to an actual design project.</p>
                        <p class="text-base md:text-lg font-normal text-gray-500 mb-5">But then I found a <a
                                href="https://flowbite.com">component library based on Tailwind CSS called Flowbite</a>.
                            It comes with the most commonly used UI components, such as buttons, navigation
                            bars, cards, form elements, and more which are conveniently built with the utility classes
                            from
                            Tailwind CSS.
                        </p>
                        <figure class="mb-[65px] rounded-[8px]"><img
                                src="https://flowbite.s3.amazonaws.com/typography-plugin/typography-image-1.png" alt=""
                                class="w-[100%]">

                        </figure>


                        <div class="md:mb-[82px]">
                            <h2 class="leading-tight text-2xl md:text-4xl font-bold mb-4 md:mb-5 dark:text-white">
                                Getting started with Flowbite</h2>
                            <p class="text-base md:text-lg font-normal text-gray-500 mb-5">First of all you need to
                                understand how Flowbite works.
                                This library is not another framework.
                                Rather, it is a set of components based on Tailwind CSS that you can just copy-paste
                                from the
                                documentation.</p>
                            <p class="text-base md:text-lg font-normal text-gray-500 mb-5">It also includes a JavaScript
                                file that enables
                                interactive components, such as modals, dropdowns,
                                and datepickers which you can optionally include into your project via CDN or NPM.</p>
                            <p class="text-base md:text-lg font-normal text-gray-500 mb-5">You can check out the <a
                                    href="https://flowbite.com/docs/getting-started/quickstart/">quickstart
                                    guide</a> to explore the elements by including the CDN files into your project. But if
                                you want
                                to build a project with Flowbite I recommend you to follow the build tools steps so that
                                you can
                                purge and minify the generated CSS.</p>
                            <p class="text-base md:text-lg font-normal text-gray-500 mb-5">You'll also receive a lot of
                                useful application UI,
                                Publisher UI, and e-commerce pages that can help
                                you get started with your projects even faster. You can check out this <a
                                    href="https://flowbite.com/docs/components/tables/">comparison table</a> to
                                better understand
                                the differences between the open-source and pro version of Flowbite.</p>
                        </div>


                        <!-- Conclusion -->
                        <div>
                            <h2 class="leading-tight text-2xl md:text-4xl font-bold mb-4 md:mb-5 dark:text-white">
                                Conclusion</h2>
                            <p class="text-base md:text-lg font-normal text-gray-500 mb-5">While it might seem like
                                extra work at a first glance,
                                here are some key moments in which prototyping
                                will come in handy:</p>
                            <p class="text-base md:text-lg font-normal text-gray-500 mb-5">While it might seem like
                                extra work at a first glance,
                                here are some key moments in which prototyping will come in handy:</p>

                            <!-- line across the screen -->
                            <div class=" h-[1px] bg-gray-200 w-[80%] mb-5 mx-auto"></div>

                            <p class="text-base md:text-lg font-normal text-gray-500 mb-5">While it might seem like
                                extra work at a first glance,
                                here are some key moments in which prototyping
                                will come in handy:</p>
                            <p class="text-base md:text-lg font-normal text-gray-500 mb-5">While it might seem like
                                extra work at a first glance,
                                here are some key moments in which prototyping will come in handy:</p>
                        </div>


                        <!-- line across the screen -->
                        <div class=" h-[1px] bg-gray-200 w-[100%] mb-5 mx-auto"></div>

                        <div class="mb-5 flex gap-4 justify-between sm:justify-start">
                            <button type="button"
                                    class="flex items-center gap-2 py-[0px] px-[19px]  text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                     xmlns="http://www.w3.org/2000/svg" class="-mt-[1px] ">
                                    <g clip-path="url(#clip0_685_1277)">
                                        <path
                                            d="M15.3332 8.00008C15.3332 3.94999 12.0499 0.666748 7.99984 0.666748C3.94975 0.666748 0.666504 3.94999 0.666504 8.00008C0.666504 11.6603 3.34818 14.6942 6.854 15.2443V10.1199H4.99202V8.00008H6.854V6.38446C6.854 4.54654 7.94885 3.53133 9.62391 3.53133C10.426 3.53133 11.2655 3.67456 11.2655 3.67456V5.47925H10.3408C9.42984 5.47925 9.14567 6.04457 9.14567 6.62508V8.00008H11.1795L10.8544 10.1199H9.14567V15.2443C12.6515 14.6942 15.3332 11.6603 15.3332 8.00008Z"
                                            fill="#1877F2"/>
                                        <path
                                            d="M10.8544 10.1199L11.1795 8.00008H9.14567V6.62508C9.14567 6.04515 9.42984 5.47925 10.3408 5.47925H11.2655V3.67456C11.2655 3.67456 10.426 3.53133 9.62391 3.53133C7.94885 3.53133 6.854 4.54654 6.854 6.38446V8.00008H4.99202V10.1199H6.854V15.2443C7.61328 15.3631 8.3864 15.3631 9.14567 15.2443V10.1199H10.8544Z"
                                            fill="white"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_685_1277">
                                            <rect width="16" height="16" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                Share
                            </button>

                            <button type="button"
                                    class="flex items-center gap-2 py-0 px-[18px] text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 ">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.27888 13.9174C10.8135 13.9174 13.8407 9.33204 13.8407 5.35562C13.8407 5.22538 13.8407 5.09572 13.8319 4.96666C14.4208 4.54068 14.9292 4.01325 15.3332 3.40906C14.784 3.65252 14.2014 3.81212 13.6049 3.8825C14.2331 3.50647 14.7032 2.91497 14.9278 2.21812C14.3371 2.56866 13.6909 2.81568 13.017 2.94852C12.5633 2.4661 11.9633 2.14665 11.3097 2.03961C10.6562 1.93257 9.98559 2.0439 9.40171 2.35639C8.81782 2.66887 8.3532 3.16508 8.07974 3.76824C7.80627 4.37139 7.73922 5.04785 7.88896 5.69295C6.69261 5.63294 5.52224 5.32202 4.45384 4.78039C3.38543 4.23876 2.44286 3.47852 1.6873 2.549C1.3025 3.21144 1.18465 3.99564 1.35773 4.74193C1.53081 5.48821 1.98182 6.14047 2.61893 6.56591C2.14003 6.55188 1.67157 6.42269 1.25317 6.18927V6.2274C1.25336 6.92214 1.49386 7.59543 1.93387 8.13307C2.37388 8.67071 2.98632 9.0396 3.6673 9.17716C3.2243 9.298 2.75948 9.31566 2.30858 9.22879C2.50095 9.82665 2.87532 10.3495 3.37937 10.7241C3.88342 11.0988 4.49195 11.3066 5.11989 11.3185C4.49599 11.8089 3.78153 12.1715 3.01737 12.3855C2.25321 12.5995 1.45436 12.6608 0.666504 12.5657C2.04262 13.4488 3.64379 13.9172 5.27888 13.9151"/>
                                </svg>
                                Tweet
                            </button>

                            <button type="button"
                                    class="flex items-center gap-2 py-[8px] px-[21px]  text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:bg-gray-700">
                                <svg width="17" height="16" viewBox="0 0 17 16" fill="currentColor"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M10.5687 3.66888C10.7163 3.51607 10.8928 3.39417 11.088 3.31032C11.2832 3.22647 11.4932 3.18233 11.7056 3.18048C11.9181 3.17864 12.1288 3.21912 12.3254 3.29957C12.522 3.38002 12.7007 3.49882 12.8509 3.64905C13.0011 3.79928 13.1199 3.97792 13.2004 4.17456C13.2808 4.37119 13.3213 4.58188 13.3195 4.79432C13.3176 5.00677 13.2735 5.21672 13.1896 5.41193C13.1058 5.60714 12.9839 5.78369 12.8311 5.93128L10.4311 8.33128C10.131 8.63124 9.72413 8.79974 9.29987 8.79974C8.87561 8.79974 8.46871 8.63124 8.16867 8.33128C8.01779 8.18556 7.81571 8.10492 7.60595 8.10674C7.39619 8.10857 7.19554 8.1927 7.04721 8.34103C6.89889 8.48935 6.81475 8.69 6.81293 8.89976C6.81111 9.10952 6.89174 9.3116 7.03747 9.46248C7.63756 10.0624 8.45134 10.3994 9.29987 10.3994C10.1484 10.3994 10.9622 10.0624 11.5623 9.46248L13.9623 7.06248C14.5452 6.45896 14.8677 5.65063 14.8604 4.8116C14.8531 3.97257 14.5166 3.16997 13.9233 2.57666C13.33 1.98336 12.5274 1.64682 11.6884 1.63953C10.8493 1.63223 10.041 1.95478 9.43747 2.53768L8.23747 3.73768C8.16106 3.81148 8.10012 3.89976 8.05819 3.99736C8.01626 4.09496 7.99419 4.19994 7.99327 4.30616C7.99235 4.41238 8.01259 4.51773 8.05281 4.61605C8.09304 4.71436 8.15244 4.80368 8.22755 4.8788C8.30267 4.95391 8.39199 5.01331 8.49031 5.05354C8.58862 5.09376 8.69397 5.11401 8.80019 5.11308C8.90641 5.11216 9.01139 5.09009 9.10899 5.04816C9.2066 5.00624 9.29487 4.94529 9.36867 4.86888L10.5687 3.66888ZM6.56867 7.66888C6.86871 7.36893 7.27561 7.20042 7.69987 7.20042C8.12413 7.20042 8.53102 7.36893 8.83107 7.66888C8.90487 7.74529 8.99314 7.80624 9.09075 7.84816C9.18835 7.89009 9.29332 7.91216 9.39955 7.91308C9.50577 7.91401 9.61112 7.89376 9.70943 7.85354C9.80775 7.81332 9.89707 7.75391 9.97218 7.6788C10.0473 7.60368 10.1067 7.51436 10.1469 7.41605C10.1872 7.31773 10.2074 7.21239 10.2065 7.10616C10.2055 6.99994 10.1835 6.89496 10.1416 6.79736C10.0996 6.69976 10.0387 6.61148 9.96227 6.53768C9.36218 5.93778 8.54839 5.60077 7.69987 5.60077C6.85134 5.60077 6.03756 5.93778 5.43747 6.53768L3.03747 8.93768C2.73184 9.23287 2.48805 9.58598 2.32034 9.97639C2.15264 10.3668 2.06436 10.7867 2.06067 11.2116C2.05698 11.6365 2.13794 12.0579 2.29884 12.4511C2.45974 12.8444 2.69735 13.2017 2.99781 13.5021C3.29826 13.8026 3.65555 14.0402 4.04882 14.2011C4.44208 14.362 4.86346 14.443 5.28835 14.4393C5.71325 14.4356 6.13315 14.3473 6.52356 14.1796C6.91398 14.0119 7.26708 13.7681 7.56227 13.4625L8.76227 12.2625C8.83868 12.1887 8.89962 12.1004 8.94155 12.0028C8.98348 11.9052 9.00555 11.8002 9.00647 11.694C9.00739 11.5878 8.98715 11.4824 8.94693 11.3841C8.9067 11.2858 8.8473 11.1965 8.77218 11.1214C8.69707 11.0463 8.60775 10.9868 8.50943 10.9466C8.41112 10.9064 8.30577 10.8862 8.19955 10.8871C8.09332 10.888 7.98835 10.9101 7.89075 10.952C7.79314 10.9939 7.70487 11.0549 7.63107 11.1313L6.43107 12.3313C6.28347 12.4841 6.10692 12.606 5.91172 12.6898C5.71651 12.7737 5.50656 12.8178 5.29411 12.8197C5.08166 12.8215 4.87098 12.781 4.67434 12.7006C4.47771 12.6201 4.29907 12.5013 4.14884 12.3511C3.99861 12.2009 3.8798 12.0222 3.79935 11.8256C3.71891 11.629 3.67842 11.4183 3.68027 11.2058C3.68211 10.9934 3.72625 10.7834 3.81011 10.5882C3.89396 10.393 4.01585 10.2165 4.16867 10.0689L6.56867 7.66888Z"
                                    />
                                </svg>
                                Copy
                            </button>
                        </div>

                        <!-- line across the screen -->
                        <div class=" h-[1px] bg-gray-200 w-[100%] mb-5 mx-auto"></div>


                    </div>
                    <!-- Sidebar -->
                    <aside class="hidden xl:block" aria-labelledby="sidebar-label">
                        <div class="xl:w-[336px] sticky top-6">
                            <h3 id="sidebar-label" class="sr-only">Sidebar</h3>
                            <div class="mb-8">
                                <h4 class="mb-2 text-sm font-bold text-gray-900 dark:text-white uppercase">Receive
                                    expert assistance in choosing a car from our specialists</h4>
                                <p class="mb-4 text-sm font-light text-gray-500 dark:text-gray-400">Our managers have a
                                    strong understanding of automobiles and each day they assist hundreds of customers
                                    with their car
                                    choices. They will help you pinpoint any issues with a vehicle, as well as offer
                                    detailed guidance in selecting the
                                    right car according to your criteria.</p>
                                <button type="button" data-modal-toggle="newsletter-modal"
                                        class="text-white bg-primary-600 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-[8px] text-sm px-5 py-2.5  dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800 text-center w-full">
                                    Get assistance
                                </button>
                            </div>
                            <div class="mb-12">
                                <h4 class="mb-4 text-sm font-bold text-gray-900 dark:text-white uppercase">Latest
                                    news</h4>
                                <div class="mb-6 flex items-center">
                                    <a href="#" class="shrink-0">
                                        <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/articles/image-1.png"
                                             class="mr-4 w-full w-[96px] h-[96px] rounded-lg" alt="Image 1">
                                    </a>
                                    <div class="ml-[10px]">
                                        <h5 class="mb-1 text-lg font-bold leading-tight dark:text-white text-gray-900">
                                            Our first
                                            office</h5>
                                        <p class="mb-[4px] text-base font-normal text-gray-500 dark:text-gray-400 whitespace-no-wrap">
                                            Over the past year, Volosoft has
                                            undergone changes.</p>
                                        <a href="#"
                                           class="inline-flex items-center underline text-base font-medium underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                                            Read in 9 minutes
                                        </a>
                                    </div>
                                </div>
                                <div class="mb-6 flex items-center">
                                    <a href="#" class="shrink-0">
                                        <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/articles/image-2.png"
                                             class="mr-4 w-full w-[96px] h-[96px] rounded-lg" alt="Image 1">
                                    </a>
                                    <div class="ml-[10px]">
                                        <h5 class="mb-1 text-lg font-bold leading-tight dark:text-white text-gray-900">
                                            Enterprise design</h5>
                                        <p class="mb-[4px] text-base font-normal text-gray-500 dark:text-gray-400">Over
                                            the past year, Volosoft has
                                            undergone changes.</p>
                                        <a href="#"
                                           class="inline-flex items-center underline text-base font-medium underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                                            Read in 4 minutes
                                        </a>
                                    </div>
                                </div>
                                <div class="mb-6 flex items-center">
                                    <a href="#" class="shrink-0">
                                        <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/articles/image-3.png"
                                             class="mr-4 w-full w-[96px] h-[96px] rounded-lg" alt="Image 1">
                                    </a>
                                    <div class="ml-[10px]">
                                        <h5 class="mb-1 text-lg font-bold leading-tight dark:text-white text-gray-900">
                                            We sign up with Audi</h5>
                                        <p class="mb-[4px] text-base font-normal text-gray-500 dark:text-gray-400">Over
                                            the past year, Volosoft has
                                            undergone changes.</p>
                                        <a href="#"
                                           class="inline-flex items-center underline text-base font-medium underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                                            Read in 10 minutes
                                        </a>
                                    </div>
                                </div>

                                <div class="mb-6 flex items-center">
                                    <a href="#" class="shrink-0">
                                        <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/articles/image-3.png"
                                             class="mr-4 w-full w-[96px] h-[96px] rounded-lg" alt="Image 1">
                                    </a>
                                    <div class="ml-[10px]">
                                        <h5 class="mb-1 text-lg font-bold leading-tight dark:text-white text-gray-900">
                                            We sign up with Audi</h5>
                                        <p class="mb-[4px] text-base font-normal text-gray-500 dark:text-gray-400">Over
                                            the past year, Volosoft has
                                            undergone changes.</p>
                                        <a href="#"
                                           class="inline-flex items-center underline text-base font-medium underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                                            Read in 15 minutes
                                        </a>
                                    </div>
                                </div>


                            </div>
                            <div>
                                <div class="mb-3 rounded-lg">
                                    <a href="#" class="shrink-0">
                                        <img src="img/blog/01.png"
                                             class=" w-full rounded-lg rounded-b-none" alt="Image 1">
                                    </a>
                                </div>

                                <p class="text-base font-normal text-gray-500 dark:text-gray-400 mb-[6px]">Students and
                                    Buy a Carfax report and analyze your car history in just a few minutes</p>
                                <p class="uppercase text-xs font-medium text-gray-400 uppercase dark:text-gray-500 mb-3">
                                    Only $3 for VIN-CODE</p>
                                <button type="button" data-modal-toggle="newsletter-modal"
                                        class="text-white bg-primary-600 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-[8px] text-sm px-5 py-2.5  dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800 text-center w-full">
                                    Get assistance
                                </button>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
        <!-- Trending on Flowbite -->
        <div class="  bg-white dark:bg-gray-900 ">
            <div class="mx-auto max-w-[1290px] mt-[-200px] pb-[48px]">
                <aside aria-label="Related articles" class="  bg-white dark:bg-gray-900 ">
                    <div class="px-4 mx-auto max-w-screen-xl">
                        <h2 class="mb-6 text-2xl font-bold text-gray-900 dark:text-white">Trending on Flowbite</h2>
                        <div class="grid gap-[32px] lg:gap-12 md:grid-cols-2">
                            <article class="flex flex-col xl:flex-row ">
                                <a href="#" class="mb-6 xl:mb-0">
                                    <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-1.png"
                                         class="mr-6 w-full rounded-[8px]" alt="Image 1">
                                </a>
                                <div class="flex xl:ml-6 flex-col justify-center">
                                    <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                                        <a href="#">Our first office</a>
                                    </h2>
                                    <p class="mb-3 font-light text-base font-normal text-gray-500 dark:text-gray-400 max-w-sm">
                                        Over the past year, Volosoft
                                        has undergone many changes! After months of preparation.</p>
                                    <a href="#"
                                       class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                                        Read in 2 minutes
                                    </a>
                                </div>
                            </article>
                            <article class="flex flex-col xl:flex-row ">
                                <a href="#" class="mb-6 xl:mb-0">
                                    <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-2.png"
                                         class="mr-6 w-full rounded-[8px]" alt="Image 1">
                                </a>
                                <div class="flex xl:ml-6 flex-col justify-center">
                                    <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                                        <a href="#">Our first office</a>
                                    </h2>
                                    <p class="mb-3 font-light text-base font-normal text-gray-500 dark:text-gray-400 max-w-sm">
                                        Over the past year,
                                        Volosoft
                                        has undergone many changes! After months of preparation.</p>
                                    <a href="#"
                                       class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                                        Read in 2 minutes
                                    </a>
                                </div>
                            </article>
                            <article class="flex flex-col xl:flex-row ">
                                <a href="#" class="mb-6 xl:mb-0">
                                    <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-3.png"
                                         class="mr-6 w-full rounded-[8px]" alt="Image 1">
                                </a>
                                <div class="flex xl:ml-6 flex-col justify-center">
                                    <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                                        <a href="#">Our first office</a>
                                    </h2>
                                    <p class="mb-3 font-light text-base font-normal text-gray-500 dark:text-gray-400 max-w-sm">
                                        Over the past year,
                                        Volosoft
                                        has undergone many changes! After months of preparation.</p>
                                    <a href="#"
                                       class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                                        Read in 2 minutes
                                    </a>
                                </div>
                            </article>
                            <article class="flex flex-col xl:flex-row ">
                                <a href="#" class="mb-6 xl:mb-0">
                                    <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-4.png"
                                         class="mr-6 w-full rounded-[8px]" alt="Image 1">
                                </a>
                                <div class="flex xl:ml-6 flex-col justify-center">
                                    <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                                        <a href="#">Our first office</a>
                                    </h2>
                                    <p class="mb-3 font-light text-base font-normal text-gray-500 dark:text-gray-400 max-w-sm">
                                        Over the past year,
                                        Volosoft
                                        has undergone many changes! After months of preparation.</p>
                                    <a href="#"
                                       class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                                        Read in 2 minutes
                                    </a>
                                </div>
                            </article>

                            <!--  -->

                        </div>
                    </div>
                </aside>
            </div>
        </div>


    </div>
@stop
@section("script")
    <script src="js/catalog-script.js"></script>
@stop
