$('#save_participation').click(function(){
    var quiz_id = $('input[name="quiz_id"]').val()
    var candidate_id = $('input[name="candidate"]').val()
    var pass_mark = Number($('input[name="pass_mark"]').val())
    var answer = []
    var total_mark = 0
    for(count=0; count<$('input[name="key[]"]').length; count++){
        var key = Number($('input[name="key[]"]')[count].value)
        if($('input[name="answer'+ key +'"]:checked').val() == $('input[name="selected_answer[]"]')[count].value){
            total_mark += Number($('input[name="mark[]"]')[count].value)
        }
        answer.push({            
            'question': $('input[name="question[]"]')[count].value,
            'selected_answer': $('input[name="selected_answer[]"]')[count].value,
            'mark': Number($('input[name="mark[]"]')[count].value),
            'option_answered':$('input[name="answer'+ key +'"]:checked').val()
        })        
    }
    var passed = total_mark >= pass_mark ? 1: 0

    var formData = new FormData()
    formData.append('quiz_id',quiz_id)
    formData.append('mark',total_mark)
    formData.append('passed',passed)
    formData.append('answer', JSON.stringify(answer))

    $.ajax({
        method:'POST',
        url:'/candidate/participation/'+ candidate_id + '/save',
        headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
        data:formData,
        dataType:'JSON',
        contentType:false,
        processData:false,
        cache:false,
        success:function(data){
            toastr.success('Quiz participation saved successfully!');
            window.location = '/candidate/participation/list';
        }
    })
});