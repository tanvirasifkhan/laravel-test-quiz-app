<nav>
    <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item">
        <a href="{{ route('candidate.dashboard') }}" class="nav-link {{ Request::is('candidate/dashboard') ? 'active':'' }}">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>Dashboard</p>
        </a>
      </li>
      @if(auth()->guard('candidate')->user()->status == 'approved')
        <li class="nav-item has-treeview {{ Request::is('candidate/participation/*') ? 'menu-open':'' }}">
          <a href="#" class="nav-link {{ Request::is('candidate/participation/*') ? 'active':'' }}">
            <i class="nav-icon fas fa-swatchbook"></i>
            <p>Quiz Test<i class="fas fa-angle-left right"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('candidate.participation.list') }}" class="nav-link {{ Request::is('candidate/participation/list') ? 'active':'' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Test List</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('candidate.participation.quiz_list') }}" class="nav-link {{ Request::is('candidate/participation/quiz/ist') ? 'active':'' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>New Test</p>
              </a>
            </li>
          </ul>
        </li>
      @endif
    </ul>
</nav>