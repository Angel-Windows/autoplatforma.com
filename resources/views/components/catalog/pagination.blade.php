<?php
$page_start = 1;
$show_first_button = true;
$show_last_button = true;
$max_count_links = 7;
if ($page_active > 4) {
    $page_start = $page_active - 4;
}
if ($page_active > $page_count - 4) {
    $page_start = $page_active - 5;
}
$page_max_count = $page_start;
if ($page_max_count > $page_count - $max_count_links + -1) {
    $page_max_count = $page_count - $max_count_links + 1;
    $show_last_button = false;
}
if ($page_max_count < 2) {
    $show_first_button = false;
    $max_count_links = 8;
}
if ($show_first_button && $show_last_button) {
    $max_count_links = 5;
    $page_max_count += 2;
}

$button_previous = $page_active > 1 ? $page_active - 1 : $page_active;
$button_next = $page_active < $page_count ? $page_active + 1 : $page_active;
?>
<div class="  block mb-[28px]  lg2:flex justify-between h-[36px]">
    <nav aria-label="Page navigation example " class="text-center mb-3  md:mb-[0px]  ">
        <ul class="inline-flex -space-x-px text-base h-10 ">
            <li>

                <a href="{{route("page.catalog", ["page"=>$button_previous])}}"
                   class="flex lg:hidden text-base font-medium items-center justify-center px-4 h-10 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    <img src="img/catalog/chevron-left.svg" alt="chevron-left">
                </a>
            </li>
            <li>
                <a href="{{route("page.catalog", ["page"=>$button_previous])}}"
                   class="hidden lg:flex text-base font-medium items-center justify-center px-4 h-10 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white ">Previous</a>
            </li>
            @if($show_first_button)
                <li>
                    <a href="{{route("page.catalog", ['page'=>1])}}"
                       class="hidden lg:flex text-base font-medium items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white ">1</a>
                </li>
                <li>
                    <a href="#"
                       class="flex text-base font-medium items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white ">...</a>
                </li>
            @endif
            @for($i = $page_max_count; $i < $page_max_count+$max_count_links; $i++)
                <?php
                $class = "flex text-base font-medium items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white ";
                if ($i == $page_active) {
                    $class = "flex text-base font-medium items-center justify-center px-4 h-10 text-primary-600 border border-gray-300 bg-primary-50 hover:bg-primary-100 hover:text-primary-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white ";
                }
                ?>
                <li>
                    <a href="{{route("page.catalog", ["page"=>$i])}}"
                       class="{{$class}}">{{$i}}</a>
                </li>
            @endfor
            @if($show_last_button)
                <li>
                    <a href="#"
                       class="flex text-base font-medium items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white ">...</a>
                </li>

                <li>
                    <a href="#"
                       class="flex lg:hidden text-base font-medium items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white ">100</a>
                </li>

                <li>
                    <a href="{{route("page.catalog", ['page'=>$page_count])}}"
                       class="hidden lg:flex text-base font-medium items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white ">{{$page_count}}</a>
                </li>
            @endif
            <li>
                <a href="{{route("page.catalog", ["page"=>$button_next])}}"
                   class="hidden lg:flex text-base font-medium  items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white ">Next</a>
            </li>
            <li>
                <a href="{{route("page.catalog", ["page"=>$button_next])}}"
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
