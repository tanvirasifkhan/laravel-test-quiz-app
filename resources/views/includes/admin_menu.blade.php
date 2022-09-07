<nav>
    <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item">
        <a href="{{ route('admin.dashboard') }}" class="nav-link {{ Request::is('admin/dashboard') ? 'active':'' }}">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class="nav-item has-treeview {{ Request::is('admin/candidate/*') ? 'menu-open':'' }}">
        <a href="#" class="nav-link {{ Request::is('admin/candidate/*') ? 'active':'' }}">
          <i class="nav-icon fas fa-sitemap"></i>
          <p>Candidates<i class="fas fa-angle-left right"></i></p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('admin.candidate.all') }}" class="nav-link {{ Request::is('admin/candidate/list') ? 'active':'' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>All Candidates</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.candidate.approved') }}" class="nav-link {{ Request::is('admin/candidate/approved/list') ? 'active':'' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Approved</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.candidate.rejected') }}" class="nav-link {{ Request::is('admin/candidate/rejected/list') ? 'active':'' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Rejected</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.candidate.pending') }}" class="nav-link {{ Request::is('admin/candidate/pending/list') ? 'active':'' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Pending</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item has-treeview {{ Request::is('admin/quiz/*') ? 'menu-open':'' }}">
        <a href="#" class="nav-link {{ Request::is('admin/quiz/*') ? 'active':'' }}">
          <i class="nav-icon fas fa-swatchbook"></i>
          <p>Quiz Management<i class="fas fa-angle-left right"></i></p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('admin.quiz.all') }}" class="nav-link {{ Request::is('admin/quiz/list') ? 'active':'' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Quiz List</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.quiz.create') }}" class="nav-link {{ Request::is('admin/quiz/create') ? 'active':'' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>New Quiz</p>
            </a>
          </li>
        </ul>
      </li>
    </ul>
</nav>