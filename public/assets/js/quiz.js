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
                        '<input type="text" class="form-control" name="question'+ count_question + '" placeholder="Question">'+
                    '</div>'+
                    '<div class="col-3">'+
                        '<select class="form-control" name="selected_answer'+ count_question + '">'+
                            '<option value="">Select Answer</option>'+
                            '<option value="A">A</option>'+
                            '<option value="B">B</option>'+
                            '<option value="C">C</option>'+
                            '<option value="D">D</option>'+
                        '</select>'+
                    '</div>'+
                    '<div class="col-3">'+
                        '<input type="number" class="form-control" name="mark'+ count_question + '" placeholder="Mark">'+
                    '</div>'+
                '</div>'+
                '<div class="mt-3">'+
                    '<div class="input-group mb-2">'+
                        '<div class="input-group-prepend">'+
                            '<div class="input-group-text">A</div>'+
                        '</div>'+
                        '<input type="text" class="form-control" name="answer'+ count_question + '[]" placeholder="Answer One">'+
                    '</div>'+
                    '<div class="input-group mb-2">'+
                        '<div class="input-group-prepend">'+
                            '<div class="input-group-text">B</div>'+
                        '</div>'+
                        '<input type="text" class="form-control" name="answer'+ count_question + '[]" placeholder="Answer Two">'+
                    '</div>'+
                    '<div class="input-group mb-2">'+
                        '<div class="input-group-prepend">'+
                            '<div class="input-group-text">C</div>'+
                        '</div>'+
                        '<input type="text" class="form-control" name="answer'+ count_question + '[]" placeholder="Answer Three">'+
                    '</div>'+
                    '<div class="input-group mb-2">'+
                        '<div class="input-group-prepend">'+
                            '<div class="input-group-text">D</div>'+
                        '</div>'+
                        '<input type="text" class="form-control" name="answer'+ count_question + '[]" placeholder="Answer Four">'+
                    '</div>'+
                '</div>'+
            '</div>'+
        '</div>';
    $('#question_list').append(question_row);
});

$(document).on('click','.remove',function(){
    $('#qa_'+$(this).val()).remove()
});