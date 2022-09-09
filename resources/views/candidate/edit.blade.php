@extends('layout.app')
@section('title','Edit Candidate')
@section('content')
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Edit Candidate</h1>
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
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">Edit Candidate</div>
                    <div class="card-body">
                        @foreach ($candidate_detail as $candidate)
                        <form action="" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $candidate->name }}" placeholder="Name">
                                @if($errors->has('name'))
                                    <p class="text-danger">{{$errors->first('name')}}</p>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ $candidate->email }}" placeholder="Email Address">
                                @if($errors->has('email'))
                                    <p class="text-danger">{{$errors->first('email')}}</p>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <label for="phone">Phone</label>
                                <input type="number" class="form-control" id="phone" name="phone" value="{{ $candidate->phone }}" placeholder="Phone">
                                @if($errors->has('phone'))
                                    <p class="text-danger">{{$errors->first('phone')}}</p>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <label for="cv_link">CV Link</label>
                                <input type="text" class="form-control" id="cv_link" name="cv_link" value="{{ $candidate->cv_link }}" placeholder="CV link">
                                @if($errors->has('cv_link'))
                                    <p class="text-danger">{{$errors->first('cv_link')}}</p>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-success float-right mb-3">Update</button>
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
      </div>
  </section>
@endsection
