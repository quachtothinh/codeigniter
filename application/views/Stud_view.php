<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Stud View</title>
</head>
<body>
	<?=base_url()?>
	<table border="1">
		<caption>Stud View</caption>
		<thead>
			<tr>
				<th>ID</th>
				<th>Roll No</th>
				<th>Name</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		<tbody>
			<tr><td colspan=4><a href="<?=base_url()?>index.php/stud/add/">Add Stud</a></td></tr>
			<tr>
				<?php 
					$i = 1;
					foreach ($records as $r) {
						echo "<tr><td>".$i++."</td>";
						echo "<td>$r->roll_no</td>";
						echo "<td>$r->name</td>";	
						echo "<td><a href='".base_url()."index.php/stud/update/$r->roll_no'>Edit</a></td>";
						echo "<td><a href='".base_url()."index.php/stud/delete/$r->roll_no'>Delete</a></td></tr>";
					}

				?>
			</tr>
			
		</tbody>
	</table>
</body>
</html>