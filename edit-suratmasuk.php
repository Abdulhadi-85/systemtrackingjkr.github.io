<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$suratmasuk = getById("suratmasuk", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Surat masuk</legend>
						<input name="cat" type="hidden" value="suratmasuk">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Tarikh cop</label>
							<input class="form-control" type="text" name="tarikhcop" value="<?=$suratmasuk['tarikhcop']?>" /><br>
							
							<label>Tarikh surat</label>
							<input class="form-control" type="text" name="tarikhsurat" value="<?=$suratmasuk['tarikhsurat']?>" /><br>
							
							<label>Tajuk surat</label>
							<input class="form-control" type="text" name="tajuksurat" value="<?=$suratmasuk['tajuksurat']?>" /><br>
							
							<label>No surat</label>
							<input class="form-control" type="text" name="nosurat" value="<?=$suratmasuk['nosurat']?>" /><br>
							
							<label>Tarikh masuk jd</label>
							<input class="form-control" type="text" name="tarikhmasukjd" value="<?=$suratmasuk['tarikhmasukjd']?>" /><br>
							
							<label>Tarikh keluar jd</label>
							<input class="form-control" type="text" name="tarikhkeluarjd" value="<?=$suratmasuk['tarikhkeluarjd']?>" /><br>
							
							<label>Tarikh edar</label>
							<input class="form-control" type="text" name="tarikhedar" value="<?=$suratmasuk['tarikhedar']?>" /><br>
							
							<label>Edaran</label>
							<input class="form-control" type="text" name="edaran" value="<?=$suratmasuk['edaran']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				