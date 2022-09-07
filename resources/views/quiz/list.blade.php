@extends('layout.app')
@section('title','Quiz List')
@section('content')
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Quiz List</h1>
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
                      <table id="category" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th style="width: 450px;text-align: left;">Title</th>
                                <th style="width: 450px;text-align: left;">Total Mark</th>
                                <th style="width: 200px;text-align: center;">Pass Mark</th>
                                <th style="text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="vertical-align: middle !important;text-align: left;">Quiz Title</td>
                                <td style="vertical-align: middle !important;text-align: center;">Total Marks</td>
                                <td style="vertical-align:middle;text-align:center;">Pass Mark</td>
                                <td style="vertical-align:middle;text-align:center;">
                                    <a href="" class="btn btn-primary"><i class="fas fa-eye"></i> View Details</a>
                                </td>
                            </tr>
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
@endsection
