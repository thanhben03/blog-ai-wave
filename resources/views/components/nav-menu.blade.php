<nav class="mainmenu-nav d-none d-lg-flex justify-content-center">
    <ul class="mainmenu">

        @foreach(\App\Models\MainMenu::all()->sortBy('sort') as $route)
            @if($route->name == 'Home')
                <li><a href="{{$route->link}}">{{$route->name}}</a></li>
            @else
                <li><a href="/{{$route->link}}">{{$route->name}}</a></li>

            @endif
                    @endforeach

{{--        <li><a href="{{route('pages.blog')}}">Blog</a></li>--}}
{{--        <li><a href="{{ route('tools.text.generator') }}">Trading</a></li>--}}
{{--        <li><a href="{{ route('pages.how.to.use') }}">TenTrade Support</a></li>--}}
    </ul>
</nav>
