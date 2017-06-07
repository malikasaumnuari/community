<?php require_once '../../../connect/db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Enjoy Bogor</title>

	<style type="text/css">
		.manageMember
		{
			width: 100%;
			margin: auto;
		}

		table
		{
			width: 100%;
			margin-top: 20px;
		}
	</style>

</head>
<body>

<div class="manageMember">
	<a href="create.php"><button type="button">Add Restaurant</button></a>
	<a href="../../home.php"><button type="button">Home</button></a>
	<a href="index.php"><button type="button">Back</button></a>
	<table border="1" cellspacing="0" cellpadding="0">
		<thead>
			<tr>
				<th>Restaurant Name</th>
				<th>Address</th>
				<th>Category</th>
				<th>Contact</th>
				<th>Description</th>
				<th>Option</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$sql = "SELECT * FROM restaurants WHERE active = 1";
			$result = $connect->query($sql);

			if($result->num_rows >0)
			{
				while($row = $result->fetch_assoc())
				{
					echo "
					<tr>
						<td> ".$row['restaurant_name']."</td>
						<td> ".$row['restaurant_address']."</td>
						<td> ".$row['restaurant_category']."</td>
						<td> ".$row['restaurant_contact']."</td>
						<td> ".$row['restaurant_description']."</td>
						<td>
							<a href='edit.php?restaurant_id=".$row['restaurant_id']."'><button type='button'>Edit</button></a>
							<a href='remove.php?restaurant_id=".$row['restaurant_id']."'><button type='button'>Decline</button></a>
							<a href='approve.php?restaurant_id=".$row['restaurant_id']."'><button type='button'>Approve</button></a>
						</td>
					</tr>";
				}
			}
				else
				{
					echo "<tr><td colspan='6'><center>No Data Available</center></td></tr>";
				}
			?>
		</tbody>
	</table>
</div>

</body>
</html>
</html>
