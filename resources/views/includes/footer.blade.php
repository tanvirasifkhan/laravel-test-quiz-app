<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
<script>$.widget.bridge('uibutton', $.ui.button)</script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/moment.min.js') }}"></script>
<script src="{{ asset('assets/js/daterangepicker.js') }}"></script>
<script src="{{ asset('assets/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.overlayScrollbars.min.js') }}"></script>
<script src="{{ asset('assets/js/adminlte.js') }}"></script>
<script src="{{ asset('assets/js/dashboard.js') }}"></script>
@if(Session::has('message'))
  <script>
    toastr.success('{{ Session::get('message') }}');
  </script>
@endif
</body>
</html>