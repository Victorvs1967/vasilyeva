$(function(){
$('#main .team-holder .row .box a').mouseover(function(){
	$(this).parent().parent().parent().addClass("thactive");
});
$('#main .team-holder .row .box a').mouseout(function(){
	$(this).parent().parent().parent().removeClass("thactive");
	}
)
})