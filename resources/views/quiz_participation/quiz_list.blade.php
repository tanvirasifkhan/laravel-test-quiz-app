@extends('layout.app')
@section('title','Quiz List')
@section('datatable_css')
    <link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap4.css') }}">
@endsection
@section('content')
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Choose Quiz to Participate</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right"></ol>            
        </div>
      </div>
    </div>
  </div>
  <section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                      <table id="datatable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th style="width: 450px;text-align: left;">Title</th>
                                <th style="width: 450px;text-align: left;">Total Mark</th>
                                <th style="width: 200px;text-align: center;">Pass Mark</th>
                                <th style="text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($quiz_list as $quiz)
                            <tr>
                              <td style="vertical-align: middle !important;text-align: left;">{{ $quiz->title }}</td>
                              <td style="vertical-align: middle !important;text-align: center;">{{ $quiz->total_mark }}</td>
                              <td style="vertical-align:middle;text-align:center;">{{ $quiz->pass_mark }}</td>
                              <td style="vertical-align:middle;text-align:center;">
                                  <a href="" class="btn btn-primary"><i class="fas fa-eye"></i> Participate</a>
                              </td>
                            </tr>
                          @endforeach                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <th style="width: 450px;text-align: left;">Title</th>
                                <th style="width: 450px;text-align: left;">Total Mark</th>
                                <th style="width: 200px;text-align: center;">Pass Mark</th>
                                <th style="text-align: center;">Action</th>
                            </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
            </div>
        </div>
      </div>
  </section>
@section('datatable_js')
  <script src="{{ asset('assets/js/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('assets/js/dataTables.bootstrap4.js') }}"></script>
  <script>
      $(function () {
          $("#datatable").DataTable();
      });
  </script>
@endsection
@endsection
