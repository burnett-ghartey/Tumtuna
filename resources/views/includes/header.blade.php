<nav class="navbar fixed-top navbar-light bg-light">
    <a class="navbar-brand" href="/"><img src="{{asset('resources/img/TUMTUNA-03.png')}}" width="140"
            alt=""></a>

    <ul class="list-inline cs-nav-ul">
        <a href="{{ url('/search') }}" class="list-inline-item  jb-find">Find job</a>
        <li class="list-inline-item links"><a class="services" href="{{ url('/services')}}">Services</a></li>
        <li class="list-inline-item links"><a href="{{ url('/about')}}">About Us</a></li>
        <li class="list-inline-item links"><a href="{{ url('/contact')}}">Contact</a></li>
        {{-- @if(Auth::check()) --}}
        @if(Auth::check() && Auth::user()->role->name == 'administrator')
        <li class="list-inline-item popover-inner" style="display: inline-block">
            <img class="profile-icon" src="{{ asset('/resources/img/profile-icon.png')}}" width="20px">
          
            <div class="popover-profile">
                <ul>
                    <li><strong>{{ Auth::user()->name }}</strong></li>
                <li class="list-light-item"><a href="{{ url('/admin')}}">Dashboard</a></li>
                    <li class="line-separator"></li>
                    <li class="list-light-item" 
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><a href="#">Sign out</a></li>
                    <form id="logout-form" action="{{ route('logout')}}" method="POST" style="display:none">
                        @csrf
                    </form>
                </ul>
            </div>

        </li>
        @elseif(Auth::check() && Auth::user()->role->name == 'guest')
        <li class="list-inline-item popover-inner" style="display: inline-block">
            <img class="profile-icon" src="{{ asset('/resources/img/profile-icon.png')}}" width="20px">
            <div class="popover-profile">
                <ul>
                    <li><strong>{{ Auth::user()->name }}</strong></li>
                    @if(Auth::user()->postExist())
                <li class="list-light-item"><a href="{{ url('/profile')}}">Profile</a></li>
                @endif
                    <li class="line-separator"></li>
                    <li class="list-light-item" 
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><a href="#">Sign out</a></li>
                    <form id="logout-form" action="{{ route('logout')}}" method="POST" style="display:none">
                        @csrf
                    </form>
                </ul>
            </div>

        </li>
        @else
        <li class="list-inline-item links not-logged-in-show"><a href="{{ route('login') }}">{{ __('Login') }}</a></a></li>
        <li class="list-inline-item links not-logged-in-show"><a href="{{ route('register') }}">{{ __('register') }}</a></a>
        </li>
        @endif
    </ul>
</nav>
