jQuery(document).ready(function($){

	// delete field button.
	$(document).on('click', 'a.btn-remove-email-field', function(){
		if ($(this).data('field-id') > 0 && !confirm($(this).data('message'))) {
			return false;
		}
		$(this).closest('.field-row').remove();
		return false;
	});
	
	// add
	$('a.btn-add-email-field').on('click', function(){
		var currentIndex = -1;
		$('.field-row').each(function(){
			if ($(this).data('start-index') > currentIndex) {
				currentIndex = $(this).data('start-index');
			}
		});
		
		currentIndex++;
		var tpl = $('#field-email-javascript-template').html();
		tpl = tpl.replace(/\{index\}/g, currentIndex);
		var $tpl = $(tpl);
		$('.list-fields').append($tpl);
		
		$tpl.find('.has-help-text').popover();
		
		return false;	
	});
	
});