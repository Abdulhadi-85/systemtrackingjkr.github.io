<?php
		include "includes/header.php";
		?>
		
		<table class="table table-striped">
		<tr>
		<th class="not">Nama</th>
		<th class="not">Bilangan rekod</th>
		</tr>
		
				<tr>
					<td><a href="pentadbiranrekod.php">Pentadbiran rekod</a></td>
					<td><?=counting("pentadbiranrekod", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="suratmasuk.php">Surat masuk</a></td>
					<td><?=counting("suratmasuk", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="users.php">Users</a></td>
					<td><?=counting("users", "id")?></td>
				</tr>
				</table>

<style>
p.center {
	
	text-align: justify;
	border: 2px solid red;
	background-color: white;
	width: 400px;
	padding: 30px;
	
}

h2.test {
	text-align: center;
	color: #ff8080;
}

p.text{


		text-align: justify;
		border: 2px solid red;
		width:350px;
		padding: 25px;
}

p.center1 {
		
		justify-content: center;
		font-style:italic;
		text-align: justify;
		border: 2px solid red;
		width: 400px;
		padding: 30px;
}

.main {
	position: relative;
	padding:20px;
	bottom: 460px;
	left:450px;
	border: 2px solid red;
	text-align: justify;
	width: 350px;
	padding:15px;
}
</style>

<body>
	
<h2 class="test">JKR Mersing Tracking Rekod</h2> 

<div class="card-body center">
	<p class="center">JKR Mersing Tracking Rekod is a simple system consist of combination between language PHP, HTML and CSS. 
	<p class="center">This system focusing on tracking the current record has been placing. staff can continue to track the latest record and add new record. this system using CRUD format which is create,read,update and delete. </p>

	<div class="card text-center" style="width: 18rem;">
  <div class="card-body">
    <p class="center">With supporting text below as a natural lead-in to additional content.</p>
    <a href="pentadbiranrekod.php" class="btn btn-primary">Go somewhere</a>
  </div>

<div class="main">
this system contain some of the important part of CRUD which is <b>Create,Read,Update,Delete.</b>The function mostly create a simple table for staff to understand
</div>


</body>


	<?php include "includes/footer.php";?>
			