<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
/* Default comment here */ 

jQuery(document).ready(function( $ ){
	gform.addAction( 'gform_input_change', function( elem, formId, fieldId ) {
		console.log(elem)
		if ($(elem).parent().parent().hasClass('selected-currency')) {
			var selectedCurrency = $(elem).val();
			console.log(selectedCurrency)
			$('.show-selected-currency').text(selectedCurrency)
		}		
	}, 10, 3 );
});</script>
<!-- end Simple Custom CSS and JS -->
