<nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/teams">Teams</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/create">Create</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
            @if(auth()->check())
            <span>{{auth()->user()->name}}</span>
            <a class="btn btn-outline-primary" href="{{ route('logout') }}">Logout</a>
          @else
            <a class="btn btn-outline-primary" href="{{ route('show-login') }}">Login</a>
         @endif
             <a class="btn btn-outline-primary" href="{{ route('show-register') }}">Sign up</a>
    </form>
  </div>
</nav>