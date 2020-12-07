<div class="main-menu-wrap" style="position: fixed; top:0;left:0;z-index:999;">
    <div class="container">
        <a href="{{url('/')}}" class="custom-logo-link">
        <img src="{{asset('img/logoMD.png')}}" alt="" class="custom-logo"
                style="z-index:1; max-height: 90%; padding-top: 10px;">
        </a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#team-menu"
            aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <nav class="navbar">
            <div class="collapse navbar-collapse" id="team-menu">
                <ul class="main-menu nav">
                    <li class="{{ Request::routeIs('welcome') ? 'active' : '' }}">
                        <a href="{{url('/')}}"><span>Home</span></a>
                    </li>
                    {{-- <li class="{{ Request::routeIs('schedule') ? 'active' : '' }}">
                        <a href="{{route('schedule')}}"><span>Schedule</span></a>
                    </li>
                    <li class="{{ Request::routeIs('teams') ? 'active' : '' }}">
                        <a href="{{route('teams')}}"><span>Teams</span></a>
                    </li> --}}
                    <li class="{{ Request::routeIs('rules') ? 'active' : '' }}">
                        <a href="{{route('rules')}}"><span>Rules</span></a>
                    </li>

                    @if (Route::has('login'))

                        @auth

                        <li class="{{ Request::routeIs('verify') ? 'active' : '' }}">
                            <a href="{{route('verify')}}"><span>Verify</span></a>
                        </li>
                        <li class="">
                            <a href="{{ url('/home') }}" class=""><span>Dashboard</span></a>
                        </li>
                        <li class="">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                    <span>{{ __('Logout') }}</span>
                                </a>
                            </form>
                        </li>
                        @else
                        <li class="">
                            <a href="{{ route('login') }}" class=""><span>Login</span></a>
                        </li>

                            @if (Route::has('register'))
                            <li class="">
                                <a href="{{ route('register') }}" class=""><span>Register</span></a>
                            </li>
                            @endif
                        @endauth

                    @endif

                </ul>
            </div>
        </nav>

    </div>
</div>
<div style="height:111px;width:100%;">

</div>
