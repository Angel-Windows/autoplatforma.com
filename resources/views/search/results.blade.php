@foreach($results as $key=>$item)
    @foreach($item['data'] as $result)
        <div class="relative  mb-3 pl-[42px] pr-[36px] ">
            <img src="{{asset("img/catalog/search.svg")}}" alt="icon"
                 class="absolute top-[3px] left-[17px]">
            <a data-v-e1=""
               href="{{route("page.catalog", [$item['row_name']=>[$result->id]])}}"
                  class="text-sm font-normal text-primary-500 dark:text-gray-300 cursor-pointer">
                                                           {{ $result[$item['result_row']]}}
                                                        </a>
        </div>
    @endforeach
@endforeach

{{--@foreach($results as $key=>$item)--}}
{{--    {{$key}}--}}
{{--    @if($item['data']->count() > 0)--}}
{{--        <ul>--}}
{{--            @foreach($item['data'] as $result)--}}
{{--                <li>{{ $result[$item['result_row']]}}</li>--}}
{{--            @endforeach--}}
{{--        </ul>--}}
{{--    @else--}}
{{--        <p>No results found.</p>--}}
{{--    @endif--}}
{{--@endforeach--}}

