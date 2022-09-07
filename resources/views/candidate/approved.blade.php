@extends('layout.app')
@section('title','Approved Candidate List')
@section('datatable_css')
    <link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap4.css') }}">
@endsection
@section('content')
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Approved Candidate List</h1>
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
                                <th style="width: 250px;text-align: left;">Name</th>
                                <th style="width: 250px;text-align: left;">Email Address</th>
                                <th style="width: 200px;text-align: center;">Phone</th>
                                <th style="width: 170px;text-align: center;">CV link</th>
                                <th style="width: 170px;text-align: center;">Status</th>
                                <th style="text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="vertical-align: middle !important;text-align: left;">Name</td>
                                <td style="vertical-align: middle !important;text-align: left;">Email Address</td>
                                <td style="vertical-align:middle;text-align:center;">Phone</td>
                                <td style="vertical-align:middle;text-align:center;">CV link</td>
                                <td style="vertical-align:middle;text-align:center;">Pending</td>
                                <td style="vertical-align:middle;text-align:center;">
                                    <a href="" class="btn btn-primary"><i class="fas fa-eye"></i> View Details</a>
                                    <a href="" class="btn btn-warning"><i class="fas fa-pencil-alt"></i> Edit</a>
                                    <button class="btn btn-danger" data-toggle="modal" data-target="#delete_candidate_modal"><i class="fas fa-trash"></i> Delete</button>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th style="width: 250px;text-align: left;">Name</th>
                                <th style="width: 250px;text-align: left;">Email Address</th>
                                <th style="width: 200px;text-align: center;">Phone</th>
                                <th style="width: 170px;text-align: center;">CV link</th>
                                <th style="width: 170px;text-align: center;">Status</th>
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
