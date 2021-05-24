jQuery(function ($) {

	$("#linkid").ready(function () {
		$('#addDynamicExtraFieldButton').click(function (event) {
			addDynamicExtraField();
			return false;
		});

		function addDynamicExtraField() {
			$("#cloneMe").clone().attr('id', '').appendTo($("#DynamicExtraFieldsContainer"));

			$('.DeleteDynamicExtraField').click(function (event) {
				$(this).parent().parent().remove();
				return false;
			});
		}
		
		addDynamicExtraField();
	});
});
