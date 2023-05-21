<?php 
include_once('config.php');
$db = new Database();


 ?>
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Boat Reservation</title>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="css/04_base.css">
        <link rel="stylesheet" href="css/04_form.css">
	</head>

	



	<body>
<br />
<header id="logo">
           <h1>Boat Booking</h1>
       </header>
 		<div class="row">
 			<div class="col-md-4"></div>
 			<div class="col-md-4">
 				<?php 
						if(isset($_POST['submit'])){
							
							$fN = $_POST['fN'];
							$lN = $_POST['lN'];
							$add = $_POST['add'];
							$cont =  $_POST['cont'];
							$un =  $_POST['un'];
							$pass1 = $_POST['pass1'];
							$pass2 = $_POST['pass2'];

							if($pass1 != $pass2){
								echo '
									<div class="alert alert-danger">
									  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
									  <strong>Error!</strong> Password not match.
									</div>
								';
							}else//end if
							{

								$pass = md5($pass1);
								$sql = '
									INSERT INTO login(F_Name, L_Name, address, contact, un, up, user_type)
									VALUES(?,?,?,?,?,?, 2);
								';

								$result = $db->insertRow($sql, [$fN,  $lN, $add, $cont, $un, $pass]);
								if($result){
									header('location: login.php');
								}

							}

						

						}
					 ?>
 				<div class="panel panel-info">
				  <div class="panel-heading">Registration Process</div>
					  <div class="panel-body">
						 <form action="" method="post">
						 	<div class="form-group">
							 	 <label for="fN">First Name:</label>
							 	 <input type="text" class="form-control" name="fN" id="fN" 
							 	 value="<?php if(isset($fN)){echo $fN;} ?>"
							 	 required autofocus>
							</div>

							

							<div class="form-group">
							 	 <label for="lN">Last Name:</label>
							 	 <input type="text" class="form-control" name="lN" id="lN" 
							 	 value="<?php if(isset($lN)){echo $lN;} ?>"
							 	 required>
							</div>	

							<div class="form-group">
							 	 <label for="add">Address:</label>
							 	 <input type="text" class="form-control" name="add" id="add" 
							 	 value="<?php if(isset($add)){echo $add;} ?>"
							 	 required>
							</div>	


							<div class="form-group">
							 	 <label for="cont">Contact #:</label>
							 	 <input type="text" class="form-control" name="cont" id="cont" 
							 	  value="<?php if(isset($cont)){echo $cont;} ?>"
							 	 required>
							</div>

							<div class="form-group">
							 	 <label for="uN">Username:</label>
							 	 <input type="text" class="form-control" name="un" id="un" 
							 	  value="<?php if(isset($un)){echo $un;} ?>"
							 	 required>
							</div>	

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									 	 <label for="pass1">Password:</label>
									 	 <input type="password" class="form-control" name="pass1" id="pass1" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									 	 <label for="pass2">Password:</label>
									 	 <input type="password" class="form-control" name="pass2" id="pass2" required>
									</div>
								</div>
							</div>	

							<button type="submit" name="submit" class="btn btn-info">
								Submit
								<span class="glyphicon glyphicon-check"></span>
							</button>					 
						 </form> 	
					  </div>
				</div>
 			</div>
 			<div class="col-md-4"></div>
 		</div>

		<footer style="background-color: white;">
			<center>
				&copy; All rights reserved
			</center>
		</footer>

 		<script src="bootstrap/js/jquery-1.11.1.min.js"></script>
 		<script src="bootstrap/js/dataTables.js"></script>
 		<script src="bootstrap/js/dataTables2.js"></script>
 		<script src="bootstrap/js/bootstrap.js"></script>

	</body>
</html>