function colorChange(par){
    par.style.color='red';
}
$(function() {     
    $('.user-avatar').on('click', function(e) {
      e.preventDefault();
      $('.box').toggleClass('hide');
    });
  });
