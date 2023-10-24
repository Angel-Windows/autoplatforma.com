<!-- 1 card -->
<?php
$class_color = "bg-red-600";
$uppercase = "uppercase";
$is_recommended = false;
?>
<?php
if (!($item_card->id & 1)) {
    $class_color = "bg-primary-600";
    $uppercase = "";
} else {
    $is_recommended = false;
}
?>

<article
    class="w-full bg-white rounded-[15px] border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 relative">
    <div class="relative">
        <a href="{{route("page.auto_pop",['car_id'=>$item_card->id])}}">
            <img class="rounded-t-[15px] w-full" src="{{$item_card->attachments->url ?? "img/card/01.png"}}" alt="auto">
        </a>
        <!-- primary block -->
        <div
            class="{{$class_color}} text-white text-xs font-medium inline-flex px-4 py-0.5 pb-1 rounded-full absolute top-[13px] left-[15px]">
            <svg class="w-4 h-4 mt-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                 fill="currentColor">
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M1.858 5.30002H3.2202C3.2825 4.21782 3.4883 3.22102 3.8061 2.41742C3.29441 2.73097 2.85579 3.15046 2.51977 3.64768C2.18374 4.1449 1.95809 4.70831 1.858 5.30002ZM5.9999 0.400024C4.51469 0.400024 3.09031 0.990023 2.0401 2.04023C0.989901 3.09043 0.399902 4.51481 0.399902 6.00002C0.399902 7.48524 0.989901 8.90962 2.0401 9.95982C3.09031 11.01 4.51469 11.6 5.9999 11.6C7.48512 11.6 8.9095 11.01 9.9597 9.95982C11.0099 8.90962 11.5999 7.48524 11.5999 6.00002C11.5999 4.51481 11.0099 3.09043 9.9597 2.04023C8.9095 0.990023 7.48512 0.400024 5.9999 0.400024V0.400024ZM5.9999 1.80002C5.9467 1.80002 5.8375 1.82242 5.6744 1.98342C5.5078 2.14722 5.3265 2.41952 5.1585 2.81082C4.8862 3.44572 4.6874 4.31022 4.6223 5.30002H7.3775C7.3124 4.31022 7.1136 3.44572 6.8413 2.81082C6.6733 2.41882 6.4913 2.14722 6.3254 1.98342C6.1623 1.82242 6.0531 1.80002 5.9999 1.80002ZM8.7796 5.30002C8.7173 4.21782 8.5115 3.22102 8.1937 2.41742C8.7054 2.73097 9.14401 3.15046 9.48004 3.64768C9.81607 4.1449 10.0417 4.70831 10.1418 5.30002H8.7796ZM7.3775 6.70002H4.6223C4.6874 7.68982 4.8862 8.55432 5.1585 9.18922C5.3265 9.58122 5.5085 9.85283 5.6744 10.0166C5.8375 10.1776 5.9467 10.2 5.9999 10.2C6.0531 10.2 6.1623 10.1776 6.3254 10.0166C6.492 9.85283 6.674 9.58052 6.8413 9.18922C7.1136 8.55432 7.3124 7.68982 7.3775 6.70002ZM8.1937 9.58263C8.5115 8.77973 8.7173 7.78222 8.7796 6.70002H10.1418C10.0417 7.29174 9.81607 7.85515 9.48004 8.35237C9.14401 8.84959 8.7054 9.26908 8.1937 9.58263V9.58263ZM3.8061 9.58263C3.4883 8.77903 3.2825 7.78222 3.2209 6.70002H1.858C1.95809 7.29174 2.18374 7.85515 2.51977 8.35237C2.85579 8.84959 3.29441 9.26908 3.8061 9.58263V9.58263Z"/>
            </svg>
            <p class="mt-1 {{$uppercase}} ">
                @if($uppercase)
                    IAAI
                @else
                    Copart
                @endif
            </p>
        </div>
        @if($is_recommended)
            <div class="absolute bottom-[-15px] left-[-7px]">
                <div class="inline-flex gap-1 bg-yellow-300 px-2 py-[5px] relative rounded-[3px]">
                    <img src="{{asset("img/card/fire.svg")}}" alt="icon">
                    <p class="text-xs font-medium text-gray-900 ">Reccomend</p>
                    <div class="absolute top-[23px] left-0">
                        <svg class="text-yellow-300" xmlns="http://www.w3.org/2000/svg" id="Шар_2"
                             fill="currentColor"
                             data-name="Шар 2" width="7" Rheight="9.74" viewBox="0 0 7 9.74">

                            <path class="cls-1" fill-rule="evenodd" clip-rule="evenodd"
                                  d="M7,9.74V0H0V1.38Z"/>
                        </svg>
                    </div>
                </div>
            </div>
        @endif
    </div>
    <!--block body card  -->
    <div class="p-5 pb-2.5">
        <!-- model auto -->
        <div class="flex justify-between mb-[7px]">
            <a href="{{route("page.auto_pop",['car_id'=>$item_card->id])}}"
               class=" w-fix leading-none text-lg font-semibold  text-gray-900 dark:text-white dark:hover:text-gray-300 max-w-[220px]">
                {{$item_card->model->name}}
                {{--                {{$item_card->body->name}}--}}
            </a>
            <!-- heart -->
            <svg class="w-5 h-5 transition duration-300 transform fill-current text-white hover:text-red-500" width="23"
                 height="20"
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
                ${{$item_card->price_bid}}</p>
            <!-- gray block -->
            @if($item_card->date_sale > $date_now)
                <div class="flex bg-gray-100 rounded-full px-3 py-1 gap-1">
                    <div><img class="mt-[1px]" src="{{asset("img/card/status-online.svg")}}" alt="icon"></div>
                    <p class="font-medium text-xs  text-center font-medium ">Live bid</p>
                </div>
            @endif
        </div>
        <p class="leading-tight text-xs font-medium text-gray-500 mb-1 ">Condition: {{$item_card->runDrive->name}}</p>
        <p class="leading-tight text-xs font-medium text-gray-500 mb-1 ">Primary
            Damage: {{$item_card->damage->name}}</p>
        <p class="leading-tight text-xs font-medium text-gray-500 mb-0 ">VIN: {{$item_card->vin}}</p>
    </div>
    <!-- underline -->
    <div class="w-full h-px bg-black dark:bg-gray-300"></div>
    <!-- block calendar -->
    <div class=" py-2 p-5 flex justify-between">
        <!-- left calendar -->
        <div class="flex gap-1">
            <div>
                <img src="{{asset("img/card/calendar.svg")}}" alt="icon">
            </div>
            <p class="text-xs font-medium text-gray-900 dark:text-gray-300">{{$item_card->year}} year</p>
        </div>

        <!-- right calendar -->
        <div class="flex gap-1">
            <div>
                <img src="{{asset("img/card/calendar.svg")}}" alt="icon">
            </div>
            <p class="text-xs font-medium text-gray-900 dark:text-gray-300">Fuel: {{$item_card->fuel->name}}</p>
        </div>
    </div>
</article>
