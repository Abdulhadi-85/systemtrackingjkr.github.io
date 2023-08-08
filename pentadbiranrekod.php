<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-pentadbiranrekod.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Pentadbiran rekod</a>

				<h1>Pentadbiran rekod</h1>
				<p>This table includes <?php echo counting("pentadbiranrekod", "id");?> pentadbiran rekod.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
			<th>Id</th>
			<th>File name</th>
			<th>Status rekod</th>
			<th>No rujukan</th>
			<th>Catatan</th>
			<th>Tarikh Dibuka/Ditutup</th>
			<th>Rak dan kotak</th>
			<th>Kod perkara utama</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$pentadbiranrekod = getAll("pentadbiranrekod");
				if($pentadbiranrekod) foreach ($pentadbiranrekod as $pentadbiranrekods):
					?>
					<tr>
		<td><?php echo $pentadbiranrekods['id']?></td>
		<td><?php echo $pentadbiranrekods['filename']?></td>
		<td><?php echo $pentadbiranrekods['statusrekod']?></td>
		<td><?php echo $pentadbiranrekods['norujukan']?></td>
		<td><?php echo $pentadbiranrekods['catatan']?></td>
		<td><?php echo $pentadbiranrekods['tarikhdibuka']?></td>
		<td><?php echo $pentadbiranrekods['rakdankotak']?></td>
		<td><?php echo $pentadbiranrekods['kodperkarautama']?></td>


						<td><a href="edit-pentadbiranrekod.php?act=edit&id=<?php echo $pentadbiranrekods['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $pentadbiranrekods['id']?>&cat=pentadbiranrekod" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				