<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-suratmasuk.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Surat masuk</a>

				<h1>Surat masuk</h1>
				<p>This table includes <?php echo counting("suratmasuk", "id");?> surat masuk.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Id</th>
			<th>Tarikh cop</th>
			<th>Tarikh surat</th>
			<th>Tajuk surat</th>
			<th>No surat</th>
			<th>Tarikh masuk jd</th>
			<th>Tarikh keluar jd</th>
			<th>Tarikh edar</th>
			<th>Edaran</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$suratmasuk = getAll("suratmasuk");
				if($suratmasuk) foreach ($suratmasuk as $suratmasuks):
					?>
					<tr>
		<td><?php echo $suratmasuks['id']?></td>
		<td><?php echo $suratmasuks['tarikhcop']?></td>
		<td><?php echo $suratmasuks['tarikhsurat']?></td>
		<td><?php echo $suratmasuks['tajuksurat']?></td>
		<td><?php echo $suratmasuks['nosurat']?></td>
		<td><?php echo $suratmasuks['tarikhmasukjd']?></td>
		<td><?php echo $suratmasuks['tarikhkeluarjd']?></td>
		<td><?php echo $suratmasuks['tarikhedar']?></td>
		<td><?php echo $suratmasuks['edaran']?></td>


						<td><a href="edit-suratmasuk.php?act=edit&id=<?php echo $suratmasuks['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $suratmasuks['id']?>&cat=suratmasuk" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				