jQuery(function($) {
	$(document.body).ready(function(){
		$("#linkid").ready(function(){
$('#addDynamicExtraFieldButton').click(function(event) {
	addDynamicExtraField();
	return false;
  });
 
function addDynamicExtraField() {
	var div = $('<div/>', {
    'class' : 'DynamicExtraField'
	}).appendTo($('#DynamicExtraFieldsContainer'));

  	var br = $('<br/>').appendTo(div);
  	var label = $('<label/>').html("Cargo name and weight").appendTo(div);
  	var input = $('<input/>', {
    	value : 'Delete this cargo',
    	type : 'button',
    	'class' : 'DeleteDynamicExtraField'
  		}).appendTo(div);
    input.click(function() {
      $(this).parent().remove();
  	});
  
  	var br = $('<br/>').appendTo(div);
	var input1 = $('<input/>', {
  	type : 'text',
    name : 'cargoName[]'
  }).appendTo(div);
   	var input2 = $('<input/>', {
   	type : 'number',
     name : 'cargoWeight[]',
     min : '0',
     max : '50000'
   }).appendTo(div);
    	var select = $('<select/>', {
   	name : 'selectCargo[]',
   }).appendTo(div);
   	var option = $('<option/>', {
   	value : 'Regularcargo[]'
   }).html("Regular cargo").appendTo(select);
   	var option1 = $('<option/>', {
   	value : 'Dangerouscargo[]'
   }).html("Dangerous cargo").appendTo(select);
  //Добавляем уже собранный DIV в DynamicExtraFieldsContainer
}
 
//Для удаления первого поля
$('.DeleteDynamicExtraField').click(function(event) {
  $(this).parent().remove();
  return false;
});
});
});
});