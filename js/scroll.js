$(function(){
  
  function fnscrollMotion(){
    var scrt = $(window).scrollTop()
    var winh = $(window).height()
    var t = $('.const_scroll').offset().top
    if(scrt>=t-winh*0.5){
      $('.const_scroll').addClass('active')
    }else{
      $('.const_scroll').removeClass('active')
    }
  }//fn

  fnscrollMotion()

  $(window).resize(function(){
    fnscrollMotion()
  }).scroll(function(){
    fnscrollMotion()

  })//window event
})//fn