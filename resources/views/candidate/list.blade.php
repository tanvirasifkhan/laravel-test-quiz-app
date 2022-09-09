@extends('layout.app')
@section('title','Candidate List')
@section('datatable_css')
    <link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap4.css') }}">
@endsection
@section('content')
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Candidate List</h1>
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
                                <th style="text-align: center;">Action</th>
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
                                @if($candidate->status == 'pending')
                                  <span class="badge badge-warning">Pending</span>
                                @elseif($candidate->status == 'approved')
                                  <span class="badge badge-success">Approved</span>
                                @elseif($candidate->status == 'rejected')
                                  <span class="badge badge-success">Rejected</span>
                                @endif
                              </td>
                              <td style="vertical-align:middle;text-align:center;">
                                  @if($candidate->status == 'pending')
                                    <a href="" class="btn btn-success">Approve</a>
                                    <a href="" class="btn btn-danger">Reject</a>
                                  @elseif($candidate->status == 'approved')
                                    <a href="" class="btn btn-danger">Reject</a>
                                  @elseif($candidate->status == 'rejected')
                                    <a href="" class="btn btn-danger">Approved</a>
                                  @endif
                                  <a href="" class="btn btn-primary"><i class="fas fa-eye"></i> View Details</a>
                                  <a href="" class="btn btn-warning"><i class="fas fa-pencil-alt"></i> Edit</a>
                                  <button class="btn btn-danger" data-toggle="modal" data-target="#delete_candidate_modal"><i class="fas fa-trash"></i> Delete</button>
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
