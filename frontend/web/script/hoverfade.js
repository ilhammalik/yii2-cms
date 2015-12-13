$(document).ready(function() {
$('.boxhover').append('<div class="hover"></div>');
$('.boxhover').hover(
function() {
	$(this).children('div.hover').fadeIn('1000');	
}, 
function() {
	$(this).children('div.hover').fadeOut('1000');	
});
});