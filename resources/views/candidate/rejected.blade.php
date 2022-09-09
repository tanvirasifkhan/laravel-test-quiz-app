@extends('layout.app')
@section('title','Pending Candidate List')
@section('datatable_css')
  <link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap4.css') }}">
@endsection
@section('content')
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Rejected Candidate List</h1>
        </div>
        <div class="col-sm-6"></div>
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
                                <th style="width: 200px;text-align: left;">Name</th>
                                <th style="width: 200px;text-align: left;">Email Address</th>
                                <th style="width: 100px;text-align: center;">Phone</th>
                                <th style="width: 100px;text-align: center;">CV link</th>
                                <th style="width: 100px;text-align: center;">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($candidate_list as $candidate)
                            <tr>
                              <td style="vertical-align: middle !important;text-align: left;">{{ $candidate->name }}</td>
                              <td style="vertical-align: middle !important;text-align: left;">{{ $candidate->email }}</td>
                              <td style="vertical-align:middle;text-align:center;">{{ $candidate->phone }}</td>
                              <td style="vertical-align:middle;text-align:center;">
                                <a href="{{ $candidate->cv_link }}" class="btn btn-info">CV Link</a>
                              </td>
                              <td style="vertical-align:middle;text-align:center;">
                                @if($candidate->status == 'rejected')
                                  <span class="badge badge-warning">Rejected</span>
                                @endif
                              </td>
                          </tr>
                          @endforeach                            
                        </tbody>
                        <tfoot>
                            <tr>
                              <th style="width: 200px;text-align: left;">Name</th>
                              <th style="width: 200px;text-align: left;">Email Address</th>
                              <th style="width: 100px;text-align: center;">Phone</th>
                              <th style="width: 100px;text-align: center;">CV link</th>
                              <th style="width: 100px;text-align: center;">Status</th>
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
