$(document).ready(function(){

  $('#addRegis').submit(function(){
    var url = $(this).attr('action');
    var data = $(this).serialize();

    $.post(url, data, function(o)){

      alert(1);

    });

    return false;
  });

});
