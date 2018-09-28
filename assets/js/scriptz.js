function takeNum(str){
  numb = str.match(/\d/g);
  return numb.join("");
}

(function( $ ){
   $.fn.exchange = function(c1, c2) {
      $(this).removeClass(c1).addClass(c2);
      return this;
   };
})( jQuery );

var spin = '<i class="fa fa-spin fa-spinner"></i>';

function loaderz(cls = 'text-muted', pos = 'center', text = 'Loading...'){
  return loader = '<div align="'+pos+'" class="loaderz '+cls+'"><div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div><br/>'+text+'</div>';
}

$('a').each(function(){
  if($(this).attr('href') == '#'){
    $(this).attr('href','javascript:void(0)');
  }
});

function suc(zl){
  if(zl == false){ t.success(); }
  else{ t.success(zl); }
}

function war(zl){
  if(zl == false){ t.warning(); }
  else{ t.warning(zl); }
}

function err(zl){
  if(zl == false){ t.error(); }
  else{ t.error(zl); }
}

$.fn.parentz = function(num){
  var elem = [];
  this.each(function(){
    var el = this;
    while(num > 0) {
      if (el.parentNode) el = el.parentNode;
      num--;
    }
    elem.push(el);
  });
  return $(elem || this);
};

$(window).scroll(function(){
  var zlh = $('#zL-nav').height();
  if($(this).scrollTop() >= $('#zL-nav').offset().top){
    $('#zL-nav').addClass('zl-nav-fixed');
    $('#zL-nav').parentz(1).css('height', zlh);
  }
  if($(this).scrollTop() < (zlh + 10)){
    $('#zL-nav').removeClass('zl-nav-fixed');
  }
});
