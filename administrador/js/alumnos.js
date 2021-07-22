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
      url: 'app/cargar_alumnos.php',
      data: {'id': id}
    })
    .done(function(listas_rep){
      $('#grupo_idalum').html(listas_rep)
    })
    .fail(function(){
      alert('Hubo un errror al cargar alumnos')
    })
  })

  $('#btn_query').on('click', function(){
    var idal = $('#grupo_idalum').val()
    $.ajax({
      type: 'POST',
      url: 'app/cargar_resumen.php',
      data: {'id': idal}
    })
    .done(function(listas_rep){
      $('#tbl_notas').html(listas_rep)
    })
    .fail(function(){
      alert('Hubo un errror al cargar notas')
    })
  })

})