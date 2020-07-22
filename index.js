function init(){
   
}

function ver(app_id){
    $.post("controller/app.php?op=mostrar", { app_id : app_id }, function(data){
        data = JSON.parse(data);
        $('#idtitulo').html(data.APP_NOM_LAR);
        $('#idbutton').html('<a href="'+data.APP_URL+'" class="btn btn-primary title btn-sm" target="_blank">Acceder</a>');
        $("#modalver").modal('show');
    });

    $.post("controller/app.php?op=detalle", { app_id : app_id }, function(data){
        $('#iddetalle').html(data);
    });
}

init();