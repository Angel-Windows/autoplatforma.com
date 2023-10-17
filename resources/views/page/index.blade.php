@extends("layout.myApp")
@section("content")
    <div class="wrapper flex min-h-[100vh] flex-col">
        <ul>
            <li><a href="{{route("page.home")}}">Home</a></li>
            <li><a href="{{route("page.catalog")}}">catalog</a></li>
            <li><a href="{{route("page.blog")}}">blog</a></li>
            <li><a href="{{route("page.auto_pop")}}">auto_pop</a></li>
        </ul>
    </div>
@stop
