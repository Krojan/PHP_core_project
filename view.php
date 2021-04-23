
<table>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Salary</th>
	</tr>

	<?php foreach($data as $row): ?>
	
		<tr>
			<td><?php echo $row->id; ?></td>
			<td><?php echo $row->name; ?></td>
			<td><?php echo $row->salary; ?></td>
		</tr>
	<?php endforeach; ?>
</table>

<style>
	table,td,th{
		border-collapse:collapse;
		border: 1px solid black;
	}
</style>
