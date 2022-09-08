var count_question=Number($('#add_question').val());

$('#add_question').click(function(){
    count_question += 1
    var question_row = '<div class="card qa" id="qa_'+ count_question + '">'+
            '<div class="card-header">Question & Answers '+ count_question + ''+                
                '<button type="button" class="btn btn-danger float-right remove" value="'+ count_question + '">Remove</button>'+
            '</div>'+
            '<div class="card-body">'+
                '<div class="form-row">'+                                    
                    '<div class="col-6">'+
                        '<input type="text" class="form-control" name="question[]" placeholder="Question">'+
                    '</div>'+
                    '<div class="col-3">'+
                        '<select class="form-control" name="selected_answer[]">'+
                            '<option value="">Select Answer</option>'+
                            '<option value="A">A</option>'+
                            '<option value="B">B</option>'+
                            '<option value="C">C</option>'+
                            '<option value="D">D</option>'+
                        '</select>'+
                    '</div>'+
                    '<div class="col-3">'+
                        '<input type="number" class="form-control" name="mark[]" placeholder="Mark">'+
                    '</div>'+
                '</div>'+
                '<div class="mt-3">'+
                    '<div class="input-group mb-2">'+
                        '<div class="input-group-prepend">'+
                            '<div class="input-group-text">A</div>'+
                        '</div>'+
                        '<input type="text" class="form-control" name="answer_1" placeholder="Answer One">'+
                    '</div>'+
                    '<div class="input-group mb-2">'+
                        '<div class="input-group-prepend">'+
                            '<div class="input-group-text">B</div>'+
                        '</div>'+
                        '<input type="text" class="form-control" name="answer_2" placeholder="Answer Two">'+
                    '</div>'+
                    '<div class="input-group mb-2">'+
                        '<div class="input-group-prepend">'+
                            '<div class="input-group-text">C</div>'+
                        '</div>'+
                        '<input type="text" class="form-control" name="answer_3" placeholder="Answer Three">'+
                    '</div>'+
                    '<div class="input-group mb-2">'+
                        '<div class="input-group-prepend">'+
                            '<div class="input-group-text">D</div>'+
                        '</div>'+
                        '<input type="text" class="form-control" name="answer_4" placeholder="Answer Four">'+
                    '</div>'+
                '</div>'+
            '</div>'+
        '</div>';
    $('#question_list').append(question_row);
});

$(document).on('click','.remove',function(){
    $('#qa_'+$(this).val()).remove()
});

$('#create_new_quiz').click(function(){
    var title = $('#title').val()
    var pass_mark = $('#pass_mark').val()    
    var question_options = []
    for(count=0; count<$('input[name="question[]"]').length; count++){
        question_options.push({
            'question': $('input[name="question[]"]')[count].value,
            'selected_answer': $('select[name="selected_answer[]"] :selected')[count].value,
            'mark': Number($('input[name="mark[]"]')[count].value),
            'options':{
                'A':$('input[name="answer_1"]')[count].value,
                'B':$('input[name="answer_2"]')[count].value,
                'C':$('input[name="answer_3"]')[count].value,
                'D':$('input[name="answer_4"]')[count].value
            }
        })
    }

    var formData = new FormData()
    formData.append('title',title)
    formData.append('pass_mark',pass_mark)
    formData.append('question_options', JSON.stringify(question_options))
    $.ajax({
        method:'POST',
        url:'/admin/quiz/store',
        headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
        data:formData,
        dataType:'JSON',
        contentType:false,
        processData:false,
        cache:false,
        success:function(data){
            toastr.success('Quiz saved successfully!');
            window.location = '/admin/quiz/list';
        }
    })
});