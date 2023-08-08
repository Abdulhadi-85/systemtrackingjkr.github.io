<?php
		include("includes/connect.php");

		$cat = $_POST['cat'];
		$cat_get = $_GET['cat'];
		$act = $_POST['act'];
		$act_get = $_GET['act'];
		$id = $_POST['id'];
		$id_get = $_GET['id'];

		
				if($cat == "pentadbiranrekod" || $cat_get == "pentadbiranrekod") {
					$filename = addslashes(htmlentities($_POST["filename"], ENT_QUOTES));
$statusrekod = addslashes(htmlentities($_POST["statusrekod"], ENT_QUOTES));
$norujukan = addslashes(htmlentities($_POST["norujukan"], ENT_QUOTES));
$catatan = addslashes(htmlentities($_POST["catatan"], ENT_QUOTES));
$tarikhdibuka = addslashes(htmlentities($_POST["tarikhdibuka"], ENT_QUOTES));
$rakdankotak = addslashes(htmlentities($_POST["rakdankotak"], ENT_QUOTES));
$kodperkarautama = addslashes(htmlentities($_POST["kodperkarautama"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `pentadbiranrekod` (  `filename` , `statusrekod` , `norujukan` , `catatan` , `tarikhdibuka` , `rakdankotak` , `kodperkarautama` ) VALUES ( '".$filename."' , '".$statusrekod."' , '".$norujukan."' , '".$catatan."' , '".$tarikhdibuka."' , '".$rakdankotak."' , '".$kodperkarautama."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `pentadbiranrekod` SET  `filename` =  '".$filename."' , `statusrekod` =  '".$statusrekod."' , `norujukan` =  '".$norujukan."' , `catatan` =  '".$catatan."' , `tarikhdibuka` =  '".$tarikhdibuka."' , `rakdankotak` =  '".$rakdankotak."' , `kodperkarautama` =  '".$kodperkarautama."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `pentadbiranrekod` WHERE id = '".$id_get."' ");
					}
					header("location:"."pentadbiranrekod.php");
				}
				
				if($cat == "suratmasuk" || $cat_get == "suratmasuk") {
					$tarikhcop = addslashes(htmlentities($_POST["tarikhcop"], ENT_QUOTES));
$tarikhsurat = addslashes(htmlentities($_POST["tarikhsurat"], ENT_QUOTES));
$tajuksurat = addslashes(htmlentities($_POST["tajuksurat"], ENT_QUOTES));
$nosurat = addslashes(htmlentities($_POST["nosurat"], ENT_QUOTES));
$tarikhmasukjd = addslashes(htmlentities($_POST["tarikhmasukjd"], ENT_QUOTES));
$tarikhkeluarjd = addslashes(htmlentities($_POST["tarikhkeluarjd"], ENT_QUOTES));
$tarikhedar = addslashes(htmlentities($_POST["tarikhedar"], ENT_QUOTES));
$edaran = addslashes(htmlentities($_POST["edaran"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `suratmasuk` (  `tarikhcop` , `tarikhsurat` , `tajuksurat` , `nosurat` , `tarikhmasukjd` , `tarikhkeluarjd` , `tarikhedar` , `edaran` ) VALUES ( '".$tarikhcop."' , '".$tarikhsurat."' , '".$tajuksurat."' , '".$nosurat."' , '".$tarikhmasukjd."' , '".$tarikhkeluarjd."' , '".$tarikhedar."' , '".$edaran."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `suratmasuk` SET  `tarikhcop` =  '".$tarikhcop."' , `tarikhsurat` =  '".$tarikhsurat."' , `tajuksurat` =  '".$tajuksurat."' , `nosurat` =  '".$nosurat."' , `tarikhmasukjd` =  '".$tarikhmasukjd."' , `tarikhkeluarjd` =  '".$tarikhkeluarjd."' , `tarikhedar` =  '".$tarikhedar."' , `edaran` =  '".$edaran."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `suratmasuk` WHERE id = '".$id_get."' ");
					}
					header("location:"."suratmasuk.php");
				}
				
				if($cat == "users" || $cat_get == "users") {
					$name = addslashes(htmlentities($_POST["name"], ENT_QUOTES));
$email = addslashes(htmlentities($_POST["email"], ENT_QUOTES));
$password = addslashes(htmlentities($_POST["password"], ENT_QUOTES));
$role = addslashes(htmlentities($_POST["role"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `users` (  `name` , `email` , `password` , `role` ) VALUES ( '".$name."' , '".$email."' , '".md5($password)."', '".$role."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `users` SET  `name` =  '".$name."' , `email` =  '".$email."' , `role` =  '".$role."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `users` WHERE id = '".$id_get."' ");
					}
					header("location:"."users.php");
				}
				?>