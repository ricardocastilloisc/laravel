$(document).on('click','.pagination a',function(e){
    e.preventDefault();
    var page = $(this).attr('href').split('page=')[1];
    var route = "/directorioonline/public/escuela";
    
    $.ajax({
        url: route,
        data: {page: page},
        type: 'GET',
        dataType: 'json',
        success: function(data){
            $(".escuelas").html(data);
        }
    });
});
