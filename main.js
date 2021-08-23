$(document).ready(function (){
  var allTiles = $('.tile-content').hide();
  $('.tile-wrap').click(function() {
      $this = $(this);
      $target =  $this.next();
      if($target.hasClass('active')){
        $('.tile-title').removeClass("closed");
        $target.removeClass('active').slideUp();
      }else{
        $('.tile-title').removeClass("closed");
        $target.prev().children().addClass("closed");
        allTiles.removeClass('active').slideUp();
        $target.addClass('active').slideDown();
      }
    return false;
  });

});
