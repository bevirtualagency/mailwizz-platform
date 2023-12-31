jQuery(document).ready(function($){

	// delete field button.
	$(document).on('click', 'a.btn-remove-consent-checkbox-field', function(){
		if ($(this).data('field-id') > 0 && !confirm($(this).data('message'))) {
			return false;
		}
		$(this).closest('.field-row').fadeOut(0, function() {
			if (typeof wysiwygOptionsListFieldConsentCheckbox_consent_text === "object") {
				const id = $(this).find('.with-wysiwyg-textarea textarea').attr('id');
				if (id && CKEDITOR && CKEDITOR.instances[id]) {
					CKEDITOR.instances[id].destroy();
				}
			}
			
			$(this).remove();
		});
		return false;
	});
	
	// add
	$('a.btn-add-consent-checkbox-field').on('click', function() {
		var currentIndex = -1;
		$('.field-row').each(function(){
			if ($(this).data('start-index') > currentIndex) {
				currentIndex = $(this).data('start-index');
			}
		});
		
		currentIndex++;
		var tpl = $('#field-consent-checkbox-javascript-template').html();
		tpl = tpl.replace(/\{index\}/g, currentIndex);
		$tpl = $(tpl);
		$('.list-fields').append($tpl);
		
		$tpl.find('.has-help-text').popover();
		
		if (typeof wysiwygOptionsListFieldConsentCheckbox_consent_text === "object") {
			$tpl.find('.with-wysiwyg-textarea textarea').ckeditor(wysiwygOptionsListFieldConsentCheckbox_consent_text);
		}
		
		return false;	
	});
	
});