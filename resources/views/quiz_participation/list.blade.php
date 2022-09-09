@extends('layout.app')
@section('title','Quiz Participation List')
@section('datatable_css')
    <link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap4.css') }}">
@endsection
@section('content')
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Quiz Participation List</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <a href="{{ route('candidate.participation.quiz_list') }}" class="btn btn-success">New Participation</a>
            </ol>            
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
                                <th style="width: 150px;text-align: left;">Date</th>
                                <th style="width: 350px;text-align: left;">Quiz</th>
                                <th style="width: 150px;text-align: center;">Mark</th>
                                <th style="width: 150px;text-align: center;">Status</th>
                                <th style="text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($participation_list as $participation)
                                <tr>
                                    <td style="vertical-align: middle !important;text-align: left;">{{ date_format(date_create($participation->created_at),'d M, Y') }}</td>
                                    <td style="vertical-align: middle !important;text-align: center;">{{ $participation->quiz_id != NULL ? $participation->quiz->title : 'N/A' }}</td>
                                    <td style="vertical-align:middle;text-align:center;">{{ $participation->mark }}</td>
                                    <td style="vertical-align:middle;text-align:center;">
                                        @if($participation->quiz_id != NULL)
                                            @if($participation->quiz->pass_mark <= $participation->mark)
                                                <p class="badge badge-success">Passed</p>
                                            @else
                                                <p class="badge badge-danger">Failed</p>
                                            @endif
                                        @endif
                                    </td>
                                    <td style="vertical-align:middle;text-align:center;">
                                        <a href="}" class="btn btn-primary"><i class="fas fa-eye"></i> View Details</a>
                                    </td>
                                </tr>
                            @endforeach                                                
                        </tbody>
                        <tfoot>
                            <tr>
                                <th style="width: 150px;text-align: left;">Date</th>
                                <th style="width: 350px;text-align: left;">Quiz</th>
                                <th style="width: 150px;text-align: center;">Mark</th>
                                <th style="width: 150px;text-align: center;">Status</th>
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
