@if ($paginator->hasPages())
    <nav aria-label="Page navigation" class="text-center mb-3 md:mb-[15px]">
        <ul class="inline-flex -space-x-px text-base h-10">
            @if ($paginator->onFirstPage())
                {{-- Кнопка "Previous" для первой страницы --}}
                <li>
                    <span class="flex lg:hidden text-base font-medium items-center justify-center px-4 h-10 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <img src="img/catalog/chevron-left.svg" alt="chevron-left">
                    </span>
                </li>
                <li>
                    <span class="hidden lg:flex text-base font-medium items-center justify-center px-4 h-10 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</span>
                </li>
            @else
                {{-- Кнопка "Previous" для других страниц --}}
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}"
                       class="flex lg:hidden text-base font-medium items-center justify-center px-4 h-10 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <img src="img/catalog/chevron-left.svg" alt="chevron-left">
                    </a>
                </li>
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}"
                       class="hidden lg:flex text-base font-medium items-center justify-center px-4 h-10 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                </li>
            @endif
            @foreach ($elements as $element)
                @if (is_string($element))
                    {{-- Разделитель "..." --}}
                    <li>
                        <span class="flex text-base font-medium items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">...</span>
                    </li>
                @endif
                @if (is_array($element))
                    {{-- Сами страницы --}}
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            {{-- Текущая страница --}}
                            <li>
                                <a href="#" aria-current="page"
                                   class="flex text-base font-medium items-center justify-center px-4 h-10 text-primary-600 border border-gray-300 bg-primary-50 hover:bg-primary-100 hover:text-primary-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">{{ $page }}</a>
                            </li>
                        @else
                            {{-- Ссылки на другие страницы --}}
                            <li>
                                <a href="{{ $url }}"
                                   class="flex text-base font-medium items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover-bg-gray-100 hover:text-gray-700 dark-bg-gray-800 dark-border-gray-700 dark-text-gray-400 dark-hover-bg-gray-700 dark-hover-text-white">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach
            @if ($paginator->hasMorePages())
                {{-- Кнопка "Next" --}}
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}"
                       class="hidden lg:flex text-base font-medium items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover-bg-gray-100 hover-text-gray-700 dark-bg-gray-800 dark-border-gray-700 dark-text-gray-400 dark-hover-bg-gray-700 dark-hover-text-white">Next</a>
                </li>
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}"
                       class="flex lg:hidden text-base font-medium items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover-bg-gray-100 hover-text-gray-700 dark-bg-gray-800 dark-border-gray-700 dark-text-gray-400 dark-hover-bg-gray-700 dark-hover-text-white">
                        <img src="img/catalog/chevron-right.svg" alt="chevron-right">
                    </a>
                </li>
            @else
                {{-- Кнопка "Next" для последней страницы --}}
                <li>
                    <span class="hidden lg:flex text-base font-medium items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover-bg-gray-100 hover-text-gray-700 dark-bg-gray-800 dark-border-gray-700 dark-text-gray-400 dark-hover-bg-gray-700 dark-hover-text-white">Next</span>
                </li>
                <li>
                    <span class="flex lg:hidden text-base font-medium items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover-bg-gray-100 hover-text-gray-700 dark-bg-gray-800 dark-border-gray-700 dark-text-gray-400 dark-hover-bg-gray-700 dark-hover-text-white">
                        <img src="img/catalog/chevron-right.svg" alt="chevron-right">
                    </span>
                </li>
            @endif
        </ul>
    </nav>
@endif
