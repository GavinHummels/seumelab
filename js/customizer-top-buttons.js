jQuery(document).ready(function($) {
	$('.wp-full-overlay-sidebar-content').prepend('<a style="width: 85%; margin: 10px auto; display: block; text-align: center;" href="https://tishonator.com/demo/tbiz" class="button" target="_blank">{premium-demo}</a>'.replace( '{premium-demo}', customBtns.prodemo ) );
 	$('.wp-full-overlay-sidebar-content').prepend('<a style="width: 85%; margin: 10px auto; display: block; text-align: center;" href="https://tishonator.com/product/tbiz" class="button" target="_blank">{premium-get}</a>'.replace( '{premium-get}', customBtns.proget ) );
});