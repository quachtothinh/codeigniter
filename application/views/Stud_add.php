<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add Stud</title>
</head>
<body>
	<?php 

		echo form_open('stud_controller/addStud');
		echo form_label('Roll Now:');
		echo form_input(array(

			'id' => 'roll_no',
			'name' => 'roll_no',
			'value' => ""
		));
		echo form_label('Name: ');
		echo form_input(array(

			'id' => 'name',
			'name' => 'name',
			'value' => ""
		));
		echo form_submit('submit', 'Add Stud');
	 ?>
</body>
</html>