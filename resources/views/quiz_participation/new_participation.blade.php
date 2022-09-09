@extends('layout.app')
@section('title','Create new Quiz Participation')
@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Quiz Details</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
              <a href="{{ route('candidate.participation.quiz_list') }}" class="btn btn-info mr-2"><i class="fas fa-list"></i>&nbsp; View Quiz List</a>
              <button class="btn btn-success float-right" id="save_participation">Save Test</button>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <section class="content">
    <form action="" method="post">
        <div class="container-fluid">
            @foreach ($quiz_detail as $quiz)
                <div class="row justify-content-center">
                    <div class="col-8">
                        <div class="card">
                            <div class="card-header">Basic Information</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <h2>{{ $quiz->title }}</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <p> <span class="font-weight-bold">Total Mark</span> : {{ $quiz->total_mark }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <p> <span class="font-weight-bold">Pass Mark</span> : {{ $quiz->pass_mark }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-8">
                        <div id="question_list">
                            @foreach (json_decode($quiz->question_options) as $key=>$option)
                                @php($key += 1)
                                <div class="card qa" id="qa_{{ $key }}">
                                    <input type="hidden" name="key[]" value="{{ $key }}">
                                    <div class="card-header">Question & Answers {{ $key }}</div>
                                    <div class="card-body">
                                        <div class="form-row">                                    
                                            <div class="col-6">
                                                <p class="font-weight-bold">{{ $option->question }}</p>
                                                <input type="hidden" id="question{{ $key }}" name="question[]" value="{{ $option->question }}">
                                            </div>
                                            <div class="col-3">
                                                <p>Mark : <span class="font-weight-bold">{{ $option->mark }}</span></p>
                                                <input type="hidden" id="mark{{ $key }}" name="mark[]" value="{{ $option->mark }}">
                                                <input type="hidden" id="selected_answer{{ $key }}" name="selected_answer[]" value="{{ $option->selected_answer }}">
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><input id="a{{ $key }}" type="radio" name="answer{{ $key }}" value="A"></div>
                                                </div>
                                                <label class="form-control" for="a{{ $key }}">{{ $option->options->A }}</label>
                                            </div>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><input id="b{{ $key }}" type="radio" name="answer{{ $key }}" value="B"></div>
                                                </div>
                                                <label class="form-control" for="b{{ $key }}">{{ $option->options->B }}</label>
                                            </div>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><input id="c{{ $key }}" type="radio" name="answer{{ $key }}" value="C"></div>
                                                </div>
                                                <label class="form-control" for="c{{ $key }}">{{ $option->options->C }}</label>
                                            </div>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><input id="d{{ $key }}" type="radio" name="answer{{ $key }}" value="D"></div>
                                                </div>
                                                <label class="form-control" for="d{{ $key }}">{{ $option->options->D }}</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach                            
                        </div>
                    </div>
                </div>
            @endforeach            
        </div>
    </form>
  </section>
    @section('quiz_participation_js')
        <script src="{{ asset('assets/js/quiz_participation.js') }}"></script>
    @endsection
@endsection
