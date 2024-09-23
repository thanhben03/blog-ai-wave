<ul class="mainmenu">
    @foreach(\App\Models\MainMenu::all()->sortBy('sort') as $route)
        @if($route->name == 'Home')
            <li><a href="{{$route->link}}">{{$route->name}}</a></li>
        @else
            <li><a href="/{{$route->link}}">{{$route->name}}</a></li>

        @endif
    @endforeach
</ul>
