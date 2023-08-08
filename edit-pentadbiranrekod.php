<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$pentadbiranrekod = getById("pentadbiranrekod", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Pentadbiran rekod</legend>
						<input name="cat" type="hidden" value="pentadbiranrekod">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>File name</label>
							<input class="form-control" type="text" name="filename" value="<?=$pentadbiranrekod['filename']?>" /><br>
							
							<label>Status rekod</label>
							<select class="form-control" type="text" name="statusrekod" value="<?=$pentadbiranrekod['statusrekod']?>" />
      						 <option>Aktif</option>
      						 <option>Semi Aktif</option>
      						 <option>Tidak Aktif</option>
     						 </select>
	 						 <br>
							
							<label>No rujukan</label>
							<input class="form-control" type="text" name="norujukan" value="<?=$pentadbiranrekod['norujukan']?>" /><br>
							
							<label>Catatan</label>
							<input class="form-control" type="text" name="catatan" value="<?=$pentadbiranrekod['catatan']?>" /><br>
							
							<label>Tarikh Dibuka/Tarikh Ditutup</label>
							<input class="form-control" type="text" name="tarikhdibuka" value="<?=$pentadbiranrekod['tarikhdibuka']?>" /><br>
							
							<label>Rak dan kotak</label>
							<select class="form-control" type="text" name="rakdankotak" value="<?=$pentadbiranrekod['rakdankotak']?>" />
							<optgroup label="Rak 1">
							<option>-</option>
							<option>Rak 1/kotak 1</option>
							<option>Rak 1/kotak 2</option>
							<option>Rak 1/kotak 3</option>
							<option>Rak 1/kotak 4</option>
							<option>Rak 1/kotak 5</option>
							<option>Rak 1/kotak 6</option>
							<option>Rak 1/kotak 7</option>
							<option>Rak 1/kotak 8</option>
							<option>Rak 1/kotak 9</option>
							<option>Rak 1/kotak 10</option>
							<option>Rak 1/kotak 11</option>
							<option>Rak 1/kotak 12</option>
							<option>Rak 1/kotak 13</option>
							<option>Rak 1/kotak 14</option>
							<option>Rak 1/kotak 15</option>
							<option>Rak 1/kotak 16</option>
							<option>Rak 1/kotak 17</option>
							<option>Rak 1/kotak 18</option>
							<option>Rak 1/kotak 19</option>
							<option>Rak 1/kotak 20</option>
							<option>Rak 1/kotak 21</option>
							<option>Rak 1/kotak 22</option>
							<option>Rak 1/kotak 23</option>
							<option>Rak 1/kotak 24</option>
							<option>Rak 1/kotak 25</option>
							<option>Rak 1/kotak 26</option>
							<option>Rak 1/kotak 27</option>
							<option>Rak 1/kotak 28</option>
							<option>Rak 1/kotak 29</option>
							<option>Rak 1/kotak 30</option>
							<option>Rak 1/kotak 31</option>
							<option>Rak 1/kotak 32</option>
							<option>Rak 1/kotak 33</option>
							<option>Rak 1/kotak 34</option>
							<option>Rak 1/kotak 35</option>
							</optgroup>
							
							
							<optgroup label="Rak 2">
							<option>-</option>
							<option>Rak 2/kotak 1</option>
							<option>Rak 2/kotak 2</option>
							<option>Rak 2/kotak 3</option>
							<option>Rak 2/kotak 4</option>
							<option>Rak 2/kotak 5</option>
							<option>Rak 2/kotak 6</option>
							<option>Rak 2/kotak 7</option>
							<option>Rak 2/kotak 8</option>
							<option>Rak 2/kotak 9</option>
							<option>Rak 2/kotak 10</option>
							<option>Rak 2/kotak 11</option>
							<option>Rak 2/kotak 12</option>
							<option>Rak 2/kotak 13</option>
							<option>Rak 2/kotak 14</option>
							<option>Rak 2/kotak 15</option>
							<option>Rak 2/kotak 16</option>
							<option>Rak 2/kotak 17</option>
							<option>Rak 2/kotak 18</option>
							<option>Rak 2/kotak 19</option>
							<option>Rak 2/kotak 20</option>
							<option>Rak 2/kotak 21</option>
							<option>Rak 2/kotak 22</option>
							<option>Rak 2/kotak 23</option>
							<option>Rak 2/kotak 24</option>
							<option>Rak 2/kotak 25</option>
							<option>Rak 2/kotak 26</option>
							<option>Rak 2/kotak 27</option>
							<option>Rak 2/kotak 28</option>
							<option>Rak 2/kotak 29</option>
							<option>Rak 2/kotak 30</option>
							<option>Rak 2/kotak 31</option>
							<option>Rak 2/kotak 32</option>
							<option>Rak 2/kotak 33</option>
							<option>Rak 2/kotak 34</option>
							<option>Rak 2/kotak 35</option>
							</optgroup>
							
							
							
							<optgroup label="Rak 3">
							<option>-</option>
							<option>Rak 3/kotak 1</option>
							<option>Rak 3/kotak 2</option>
							<option>Rak 3/kotak 3</option>
							<option>Rak 3/kotak 4</option>
							<option>Rak 3/kotak 5</option>
							<option>Rak 3/kotak 6</option>
							<option>Rak 3/kotak 7</option>
							<option>Rak 3/kotak 8</option>
							<option>Rak 3/kotak 9</option>
							<option>Rak 3/kotak 10</option>
							<option>Rak 3/kotak 11</option>
							<option>Rak 3/kotak 12</option>
							<option>Rak 3/kotak 13</option>
							<option>Rak 3/kotak 14</option>
							<option>Rak 3/kotak 15</option>
							<option>Rak 3/kotak 16</option>
							<option>Rak 3/kotak 17</option>
							<option>Rak 3/kotak 18</option>
							<option>Rak 3/kotak 19</option>
							<option>Rak 3/kotak 20</option>
							<option>Rak 3/kotak 21</option>
							<option>Rak 3/kotak 22</option>
							<option>Rak 3/kotak 23</option>
							<option>Rak 3/kotak 24</option>
							<option>Rak 3/kotak 25</option>
							<option>Rak 3/kotak 26</option>
							<option>Rak 3/kotak 27</option>
							<option>Rak 3/kotak 28</option>
							<option>Rak 3/kotak 29</option>
							<option>Rak 3/kotak 30</option>
							<option>Rak 3/kotak 31</option>
							<option>Rak 3/kotak 32</option>
							<option>Rak 3/kotak 33</option>
							<option>Rak 3/kotak 34</option>
							<option>Rak 3/kotak 35</option>
							</optgroup>
							
				
							<optgroup label="Rak 4">
							<option>-</option>
							<option>Rak 4/kotak 1</option>
							<option>Rak 4/kotak 2</option>
							<option>Rak 4/kotak 3</option>
							<option>Rak 4/kotak 4</option>
							<option>Rak 4/kotak 5</option>
							<option>Rak 4/kotak 6</option>
							<option>Rak 4/kotak 7</option>
							<option>Rak 4/kotak 8</option>
							<option>Rak 4/kotak 9</option>
							<option>Rak 4/kotak 10</option>
							<option>Rak 4/kotak 11</option>
							<option>Rak 4/kotak 12</option>
							<option>Rak 4/kotak 13</option>
							<option>Rak 4/kotak 14</option>
							<option>Rak 4/kotak 15</option>
							<option>Rak 4/kotak 16</option>
							<option>Rak 4/kotak 17</option>
							<option>Rak 4/kotak 18</option>
							<option>Rak 4/kotak 19</option>
							<option>Rak 4/kotak 20</option>
							<option>Rak 4/kotak 21</option>
							<option>Rak 4/kotak 22</option>
							<option>Rak 4/kotak 23</option>
							<option>Rak 4/kotak 24</option>
							<option>Rak 4/kotak 25</option>
							<option>Rak 4/kotak 26</option>
							<option>Rak 4/kotak 27</option>
							<option>Rak 4/kotak 28</option>
							<option>Rak 4/kotak 29</option>
							<option>Rak 4/kotak 30</option>
							<option>Rak 4/kotak 31</option>
							<option>Rak 4/kotak 32</option>
							<option>Rak 4/kotak 33</option>
							<option>Rak 4/kotak 34</option>
							<option>Rak 4/kotak 35</option>
							</optgroup>
							</select>
							<br>
							

							<label>Kod perkara utama</label>
							<select class="form-control" type="text" name="kodperkarautama" value="<?=$pentadbiranrekod['kodperkarautama']?>"/>
							<option>--Pilih Kod--</option>
            				 <option>Perkhidmatan Personel (KOD 010)</option>
            				 <option>Pentadbiran Jabatan (KOD 020)</option>
            				 <option>Seminar/Kursus/Bengkel (KOD 030)</option>
             				<option>Mensyuarat (KOD 040)</option>
             				 <option>Surat Pekeliling (KOD 050)</option>
             				<option>Projek (KOD 060)</option>
             				<option>Penyelenggaraan (KOD 070)</option>
             				 <option>Peribadi (KOD 080)</option>
             				 <option>Kewangan (KOD 090)</option>
             				 <option>Latihan (KOD 100)</option><br>
							</select>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				