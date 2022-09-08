@include('includes.header')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  @include('includes.top_menu')
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="dashboard.html" class="brand-link">
      <span class="brand-text font-weight-light">Quiz App</span>
    </a>
    <div class="sidebar">
      @if(auth()->guard('admin')->check())
        @include('includes.admin_menu')
      @else
        @include('includes.candidate_menu')
      @endif
    </div>
  </aside>
  <div class="content-wrapper">
    @yield('content')    
  </div>
  <footer class="main-footer">
    <strong>Copyright &copy; @php  date_default_timezone_set('Asia/Dhaka')  @endphp {{ date('Y') }}</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>
</div>
@include('includes.footer')
