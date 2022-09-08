@extends('layout.app')
@section('title','Create new Quiz')
@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Create new Quiz</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
              <a href="{{ route('admin.quiz.all') }}" class="btn btn-info mr-2"><i class="fas fa-list"></i>&nbsp; View Quiz List</a>            
              <button class="btn btn-success" id="create_new_quiz"><i class="fas fa-cloud-upload-alt"></i>&nbsp; Save Quiz</button>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <section class="content">
    <form action="" method="post">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-header">Basic Information</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <div class="form-group">
                                        <label for="title">Title <span class="text-danger" title="Required">*</span></label>
                                        <input type="text" id="title" class="form-control" name="title" placeholder="Quiz Title">
                                        <span class="text-danger errorTitle"></span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="pass_mark">Pass Mark <span class="text-danger" title="Required">*</span></label>
                                        <input type="number" id="pass_mark" name="pass_mark" class="form-control" placeholder="Pass Mark">
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
                        <div class="card qa" id="qa_1">
                            <div class="card-header">Question & Answers 1</div>
                            <div class="card-body">
                                <div class="form-row">                                    
                                    <div class="col-6">
                                        <input type="text" class="form-control" name="question[]" placeholder="Question">
                                    </div>
                                    <div class="col-3">
                                        <select class="form-control" name="selected_answer[]">
                                            <option value="">Select Answer</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                        </select>
                                    </div>
                                    <div class="col-3">
                                        <input type="number" class="form-control" name="mark[]" placeholder="Mark">
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">A</div>
                                        </div>
                                        <input type="text" class="form-control" name="answer_1" placeholder="Answer One">
                                    </div>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">B</div>
                                        </div>
                                        <input type="text" class="form-control" name="answer_2" placeholder="Answer Two">
                                    </div>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">C</div>
                                        </div>
                                        <input type="text" class="form-control" name="answer_3" placeholder="Answer Three">
                                    </div>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">D</div>
                                        </div>
                                        <input type="text" class="form-control" name="answer_4" placeholder="Answer Four">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div is="qa_list"></div>
                    </div>  
                    <button type="button" class="btn btn-success float-right" id="add_question" value="1">Add More</button>                  
                </div>
            </div>
        </div>
    </form>
  </section>
    @section('quiz_js')
       <script src="{{ asset('assets/js/quiz.js') }}"></script>
     @endsection
@endsection
