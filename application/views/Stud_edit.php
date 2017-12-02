<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Stud Edit</title>
</head>
<body>
	<?php 
		echo form_open('Stud_controller/updateStud');
		echo form_hidden('old_roll_no', $old_roll_no);
		echo form_label('Roll no: ');
		echo form_input(array(
			'id' => 'roll_no',
			'name' => 'roll_no',
			'value' => $records[0]->roll_no
		));
		echo form_label('Name: ');
		echo form_input(array(
			'id' => 'name',
			'name' => 'name',
			'value' => $records[0]->name
		));
		
		echo form_submit('submit', 'Edit');

	 ?>
</body>
</html>