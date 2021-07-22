$(document).ready(function(){
    $.ajax({
      type: 'POST',
      url: 'app/cargar_peracad.php'
    })
    .done(function(listas_rep){
      $('#grupo_idperacad').html(listas_rep)
    })
    .fail(function(){
      alert('Hubo un errror al cargar lista de Periodos')
    })
  
    $('#grupo_idperacad').on('change', function(){
      var id = $('#grupo_idperacad').val()
      $.ajax({
        type: 'POST',
        url: 'app/cargar_especialidad.php',
        data: {'id': id}
      })
      .done(function(listas_rep){
        $('#grupo_espec').html(listas_rep)
      })
      .fail(function(){
        alert('Hubo un errror al cargar especialidad')

      })
    })
    
    $('#grupo_espec').on('change', function(){
        $.ajax({
          type: 'POST',
          url: 'app/cargar_ciclo.php',
          data: {
            id: $('#grupo_espec').val()
          }
        })
        .done(function(listas_rep){
          $('#grupo_cic').html(listas_rep)
        })
        .fail(function(){
          alert('Hubo un errror al cargar ciclos')
        })
      })

      $('#grupo_cic').on('change', function(){
        $.ajax({
          type: 'POST',
          url: 'app/cargar_subarea.php',
          data: {
            'id': $('#grupo_cic').val(),
            'datos': $('#grupo_cic').find('option:selected').attr("name")
          }
        })
        .done(function(listas_rep){
          $('#grupo_suba').html(listas_rep)
        })
        .fail(function(){
          alert('Hubo un errror al cargar subareas')
        })
      })

    $('#btn_query').on('click', function(){
      var idal = $('#grupo_suba').val()
      $.ajax({
        type: 'POST',
        url: 'app/cargar_resubarea.php',
        data: {'id': idal}
      })
      .done(function(listas_rep){
        $('#tbl_resnotas').html(listas_rep)
      })
      .fail(function(){
        alert('Hubo un errror al cargar notas')
      })
    })
  
  })