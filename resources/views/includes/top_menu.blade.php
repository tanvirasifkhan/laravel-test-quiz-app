<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
            <img src="{{ asset('assets/images/avatar.png') }}" class="img-circle" style="height: 30px;" alt="User Image"> 
            @if(auth()->guard('admin')->check())
              {{ auth()->guard('admin')->user()->name }}
            @else
              {{ auth()->guard('candidate')->user()->name }}
            @endif
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right mt-3">
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt mr-2"></i> Sign Out</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
      </li>
    </ul>
</nav>