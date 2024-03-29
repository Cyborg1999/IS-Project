    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{url('/')}}">
        {{config('app.name','Medical Specialist Booking System ')}}
    </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="{{ _('Toggle navigation')}}">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <!--Left Side Of Navbar--->
        <ul class="navbar-nav ml-auto">
            @guest
            <li class="nav-item active">
            <a class="nav-link" href="{{route('home')}}">{{ __('Home')}}</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('appointments')}}">{{ __('Appointments')}}</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('Blog')}}">{{ __('Blog')}}</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">{{ __('Login')}}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link disabled" href="{{route('register')}}">{{ __('Register')}}</a>
                </li>
            @endif
           @else
           <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
<!---
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
                ---->
           </li>
           <li class="nav-item active">
                <a class="nav-link" href="{{route('home')}}">{{ __('Home')}}</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{route('appointments')}}">{{ __('Appointments')}}</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{route('Blog')}}">{{ __('Blog')}}</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{route('logout')}}">{{ __('Logout')}}</a>
                </li>

        </ul>
        </div>
    </nav>
