function rndmfirst(){
	var col = $('li.item').length;
	var index = Math.round(Math.random() * col);
	var i = 0;
	while(i < col){		
		if(i == index){
			$('li.item').eq(index).addClass('active');
		}
		i++;
	}
}
function slideSwitch() {
    var $active = $('#slideshow li.active');
	
    if ( $active.length == 0 ) $active = $('#slideshow li:last');

    // use this to pull the images in the order they appear in the markup
    var $next =  $active.next().length ? $active.next()
        : $('#slideshow li:first');

    // uncomment the 3 lines below to pull the images in random order
    
     var $sibs  = $active.siblings();
     var rndNum = Math.floor(Math.random() * $sibs.length );
     var $next  = $( $sibs[ rndNum ] );


    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 100, function() {
            $active.removeClass('active last-active');
        });
}
function next(num) {
	var max_count = 0;
	$('.news-list li').each(function(i){
		$(this).addClass('displaynone');
		max_count = i;
	});
	$('.news-list li').each(function(i){
		if($(this).hasClass('class'+num+'1') || $(this).hasClass('class'+num+'2') || $(this).hasClass('class'+num+'3') || $(this).hasClass('class'+num+'4')) {
			$(this).removeClass('displaynone');
		}
	})
	max_count = max_count +1;
	var next = parseInt(num) + 1;
	var prev = parseInt(num) - 1;	
	if(next>Math.ceil((max_count/4))) {
		next = num;
	}
	$('.link-prev').attr('href','javascript:prev("'+prev+'")');
	$('.link-next').attr('href','javascript:next("'+next+'")');
    
}
function prev(num) {

	$('.news-list li').each(function(i){
		$(this).addClass('displaynone');
		max_count = i;
		
	});
	$('.news-list li').each(function(i){
		if($(this).hasClass('class'+num+'1') || $(this).hasClass('class'+num+'2') || $(this).hasClass('class'+num+'3') || $(this).hasClass('class'+num+'4')) {
			$(this).removeClass('displaynone');
		}
	})
	var next = parseInt(num) + 1;
	var prev = parseInt(num) - 1;
	if(next>Math.ceil((max_count/4))) {
		next = num;
	}
	if(prev<=0)
	prev = 1;
	$('.link-prev').attr('href','javascript:prev("'+prev+'")');
	$('.link-next').attr('href','javascript:next("'+next+'")');
	
}
$(function(){
    rndmfirst();	
var count = 1;
var sub_count = 1;
var second_number = 1;
$('.news-list li').each(function(i){
 if(i!=0 && i%4 == 0) {
	sub_count = sub_count + 1;	
    count = sub_count;			
 }	
 if(second_number == 5) {
	second_number = 1;	 
 }
 var c_class = 'class' + count + second_number; 
 $(this).addClass(c_class);
  second_number++; 
});

$('#visual-holder .image-list li').hover(function(){
	$(this).addClass('hover');
	$('.text',this).addClass('hovertext');
	$('.text2',this).addClass('hovertextleft');
	$('#visual-holder .image-list li .mask').addClass('unhover');
	$('.mask',this).removeClass('unhover');
},

function(){
	$(this).removeClass('hover');
	$('.text',this).removeClass('hovertext');
	$('.text2',this).removeClass('hovertextleft');
	$('#visual-holder .image-list li .mask').removeClass('unhover');
	
})
//slideshow for front page
setInterval( "slideSwitch()", 4000 );
})
