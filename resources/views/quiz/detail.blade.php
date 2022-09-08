@extends('layout.app')
@section('title','Create new Quiz')
@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Quiz Details</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
              <a href="{{ route('admin.quiz.all') }}" class="btn btn-info mr-2"><i class="fas fa-list"></i>&nbsp; View Quiz List</a>
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
                                    <div class="col-8">
                                        <div class="form-group">
                                            <label for="title">Title <span class="text-danger" title="Required">*</span></label>
                                            <input type="text" id="title" readonly class="form-control" name="title" value="{{ $quiz->title }}" placeholder="Quiz Title">
                                            <span class="text-danger errorTitle"></span>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="pass_mark">Pass Mark <span class="text-danger" title="Required">*</span></label>
                                            <input type="number" id="pass_mark" readonly name="pass_mark" class="form-control" value="{{ $quiz->pass_mark }}" placeholder="Pass Mark">
                                            <span class="text-danger errorPassMark"></span>
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
                                    <div class="card-header">Question & Answers {{ $key }}</div>
                                    <div class="card-body">
                                        <div class="form-row">                                    
                                            <div class="col-6">
                                                <input type="text" readonly class="form-control" value="{{ $option->question }}" placeholder="Question">
                                            </div>
                                            <div class="col-3">
                                                <select class="form-control" readonly name="selected_answer[]">
                                                    <option value="">Select Answer</option>
                                                    <option value="A" {{ $option->selected_answer == 'A'? 'selected':'' }}>A</option>
                                                    <option value="B" {{ $option->selected_answer == 'B'? 'selected':'' }}>B</option>
                                                    <option value="C" {{ $option->selected_answer == 'C'? 'selected':'' }}>C</option>
                                                    <option value="D" {{ $option->selected_answer == 'D'? 'selected':'' }}>D</option>
                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <input type="number" class="form-control" readonly value="{{ $option->mark }}" placeholder="Mark">
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">A</div>
                                                </div>
                                                <input type="text" class="form-control" readonly value="{{ $option->options->A }}" placeholder="Answer One">
                                            </div>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">B</div>
                                                </div>
                                                <input type="text" class="form-control" readonly value="{{ $option->options->B }}" placeholder="Answer Two">
                                            </div>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">C</div>
                                                </div>
                                                <input type="text" class="form-control" readonly value="{{ $option->options->C }}" placeholder="Answer Three">
                                            </div>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">D</div>
                                                </div>
                                                <input type="text" class="form-control" readonly value="{{ $option->options->D }}" placeholder="Answer Four">
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
    @section('quiz_js')
       <script src="{{ asset('assets/js/quiz.js') }}"></script>
     @endsection
@endsection
