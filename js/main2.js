$(function(){
$('#main .press-list li>a').click(function(){
	$(this).parent().attr('class','active');
});
$('#main .press-list li .press-info a.btn-close').click(function(){
	$('#main .press-list li.active').attr('class','');}
)
})