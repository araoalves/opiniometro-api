
$(document).on('click', '#editar', function() {
    $('#id').val($(this).attr("data-id"));
    $('#id_hidden').val($(this).attr("data-id"));
    $('#descricao').val($(this).attr("data-descricao"));         
    $('#descricao_hidden').val($(this).attr("data-descricao"));      
    $('#percentual').val($(this).attr("data-percentual")); 
    $('#percentual_hidden').val($(this).attr("data-percentual")); 
})



