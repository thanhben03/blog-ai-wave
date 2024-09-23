<nav class="mainmenu-nav d-none d-lg-flex justify-content-center">
    <ul class="mainmenu">

        @foreach(\App\Models\MainMenu::all()->sortBy('sort') as $route)
            <li><a href="/{{$route->link}}">{{$route->name}}</a></li>

        @endforeach

{{--        <li><a href="{{route('pages.blog')}}">Blog</a></li>--}}
{{--        <li><a href="{{ route('tools.text.generator') }}">Trading</a></li>--}}
{{--        <li><a href="{{ route('pages.how.to.use') }}">TenTrade Support</a></li>--}}
    </ul>
</nav>
