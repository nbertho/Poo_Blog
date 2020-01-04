$(function functionName() {

  let offset = 0
  $('.container').on('click keypress', '#plusArticles', function() {
    offset +=10
    console.log(offset)
    $.ajax({
      url: "posts/more",
      data: {
        offset: offset,
      },
      method: 'post',
    })
    // TRANSACTION AJAX SUCCES
    .done(function(reponsePHP){
      $('.container').append(reponsePHP);
    })
    // TRANSACTION AJAX ECHEC
    .fail(function(){
      alert('Echec');
    });

  })

});
