<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="{{ route('user.index') }}">User Index</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                {{-- <a class="nav-link" href="{{ route('users.index') }}">Users list</a> --}}
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('home.index')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('home.dashboard')}}">Dashboard</a>
            </li>
        </ul>
        {{-- <p class="mt-2 mt-md-0 text-white">Logged in as: {{ Auth::user()->name }}</p> --}}
    </div>
</nav>
