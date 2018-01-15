<?php 

$todos = file_get_contents('assets/todos.json');
$todos = json_decode($todos, true);

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<script src="https://use.fontawesome.com/168731def2.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
	


	<title>PHP To-Do List</title>
</head>
<body>

<p id="add1"></p>
<div id="container">	

	<h1> To-Do-List <i class="fa fa-check" aria-hidden="true"></i></h1>
	<div id="newTask1">
		<i class="fa fa-plus-circle" aria-hidden="true"></i> <input id="newTask" type="text" placeholder="Add New Task">
	</div>

	<ul>
	
		<?php 

			foreach ($todos as $key => $todo) {

				if($todo['done'] == false){

				echo '<li id="' .$key. '"> <span> <i class="fa fa-minus-square" aria-hidden="true"></i> </span>' .$todo['task']. '</li>' . '<br>';
				}else {
					echo '<li id="' .$key. '" class="completed"><span> <i class="fa fa-minus-square" aria-hidden="true"></i> </span>' .$todo['task']. '</li>'  . '<br>';
				}
			}

		 ?>
	</ul>

</div>
<!-- import jquery -->
<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/todos.js">

</script>

</body>
</html>