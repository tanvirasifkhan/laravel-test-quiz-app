@extends('layout.app')
@section('title','Candidate Detail')
@section('content')
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Candidate Detail</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <a href="{{ route('admin.candidate.all') }}" class="btn btn-info">Candidate List</a>
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
                        <table class="table table-bordered">
                            @foreach ($candidate_detail as $candidate)
                                <tr>
                                    <td class="font-weight-bold">Name</td>
                                    <td style="width:80%">{{ $candidate->name }}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">Email Address</td>
                                    <td style="width:80%">{{ $candidate->email }}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">Phone</td>
                                    <td style="width:80%">{{ $candidate->phone }}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">Status</td>
                                    <td style="width:80%">
                                        @if($candidate->status == 'pending')
                                            <span class="badge badge-warning">Pending</span>
                                        @elseif($candidate->status == 'approved')
                                            <span class="badge badge-success">Approved</span>
                                        @elseif($candidate->status == 'rejected')
                                            <span class="badge badge-danger">Rejected</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">CV Link</td>
                                    <td style="width:80%"><a href="{{ $candidate->cv_link }}" class="btn btn-info">CV Link</a></td>
                                </tr>
                            @endforeach                            
                        </table>
                    </div>
                  </div>
            </div>
        </div>
      </div>
  </section>
@endsection
