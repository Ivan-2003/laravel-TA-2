  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
    <a class="navbar-brand" href="{{url('/helmetcustom/homehelmet')}}"><img src="{{ asset('assets/img/helm.png') }}" alt=""
                style="width: 50px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="{{url('/helmetcustom/homehelmet')}}" style="color: black;">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#ft" style="color: black;">About Us</a>
                </li>
            </ul>
            <span class="navbar-text">
                <span><a href="#" style="color: black;"><svg width="1em" height="1em"
                            viewBox="0 0 16 16" class="bi bi-bag-fill" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 1a2.5 2.5 0 0 0-2.5 2.5V4h5v-.5A2.5 2.5 0 0 0 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z" />
                        </svg></a>
                </span>                
                <span>
                <a href="{{ route('customer.index') }}" style="color: black;"><svg width="1em" height="1em"
                            viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z" />
                            <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            <path fill-rule="evenodd"
                                d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z" />
                        </svg></a>
                </span>
                <span>
                {{-- @guest
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                            {{ Auth::user()->username }}
                        </a>
                        

                        <div  aria-labelledby="navbarDropdown">
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest --}}
                </span>
                {{-- <span>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class="btn btn-dark">Logout
                    </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                </span> --}}
            </span>
        </div>
    </div>
</nav>
<!-- tutup navbar -->
