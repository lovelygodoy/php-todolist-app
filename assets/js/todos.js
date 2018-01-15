



$("ul").on("click", "li", function(){

	$(this).toggleClass("completed");

	$.post('done.php',
	{id: $(this).attr('id')},
	function(data, status) {

	});
});
//creating a new task
$('#newTask').keypress(function(event){
	// console.log(event.which);
	if (event.which == 13){ //user pressed enter key
	var todoText = $(this).val();
	// console.log(todoText);

	$(this).val(''); //delete text from input

	$.post('create.php',
	{task: todoText},
	function(data,status){
		// console.log(data);
		$('ul').append('<li id="' + data + '"><span><i class="fa fa-minus-square" aria-hidden="true"></i></span>' + todoText +  '</li>');
		

	});
}

});

//deleting a task

$('ul').on('click', 'span', function(){

//remove list item from DOM
$(this).parent().fadeOut(500, function(){

	$(this).remove();
});
// console.log($(this).parent().attr('id'));

//ajax request to update JSON

$.post('delete.php', { id: $(this).parent().attr('id') }, function(data, status){

	// console.log(data);

	});
event.stopPropagation();

});