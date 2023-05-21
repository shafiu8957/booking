<?php 
    include_once('config.php');
    $db = new Database();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boat Booking |  Signup</title>

   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="css/04_base.css">
    <link rel="stylesheet" href="css/04_form.css">
</head>

<body id="signupLanding">
   <main class="wrapper">
        <header id="logo">
           <h1>Boat Booking</h1>
       </header>
        <section id="sign">
            <header>
                <h1>Create a Boat Booking account</h1>
            </header>

            <article id="welcome">
                <p><strong>Hello there!</strong>  Here at the Trips Maldives, we offer you a selection of the crème de la crème of Maldives. From crafting bespoke itineraries to understanding a place like a local, we add a big dollop of imagination to your standard Maldives vacation. By making small contributions you can start a wave of change. Make a difference, save our seas.</p>
                <p>Join now and create your personalized profile.</p>
            </article>
            <?php 
						if(isset($_POST['submit'])){
							
							$fN = $_POST['f_name'];
							$lN = $_POST['l_name'];
							$un = $_POST['un'];
							$add = $_POST['address'];
							$cont =  $_POST['contact'];
							$pass1 = $_POST['password'];
							$pass2 = $_POST['password_confirmation'];

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

								$user = $db->insertRow($sql, [$fN,  $lN, $add, $cont, $un, $pass]);
                                echo ($db->lastID);
								if($user){
                                    // session('user',$)
									// header('location: index.php');
								}

                                                            

							}

						

						}
					 ?>
            <article id="signupForm">
                <form action="" method="POST">

                  <label for="name"><i class="fas fa-user"></i> First Name</label>
                  <input type="text" id="name" name="f_name" required>
                  <label for="name"><i class="fas fa-user"></i> Last Name</label>
                  <input type="text" id="name" name="l_name" required>
                  <label for="name"><i class="fas fa-user"></i> User Name</label>
                  <input type="text" id="name" name="un" required>
                  <label for="name"><i class="fas fa-user"></i> Address</label>
                  <input type="text" id="name" name="address" required>
                    <label for="text"><i class="fas fa-envelope"></i> contect</label>
                    <input type="text" id="name" name="contact" required>

                    <label for="password"><i class="fas fa-lock"></i> Password
                    <!--password strength indicator, notice we are using aria-label to provide a label for this element since there is not a visible label on the screen -->
                    <progress max="100" value="0" id="strength" aria-label="password strength progress bar"></progress>
                    </label>

                    <div id="pwdWrap">
                        <!-- help-tip for password input field -->
                        <i class="fas fa-question-circle tooltip">
                        <!-- The span tag holds our help-tip message. -->
                                <span class="helperText" id="tt">Make sure your password contains at least 10 characters, 1 upper and 1 lower case letter, 1 number and 1 symbol
                                <i class="fas fa-caret-down"></i>
                                <i class="fas fa-times-circle close"></i>
                            </span>
                        </i>
                        <input type="password" id="password" name="password" required>
                        <i class="fas fa-eye eyeIcon"></i>
                    </div>
                    
                    <label for="password"><i class="fas fa-lock"></i> Password Confirmation </label>

                    <div id="pwdWrapConf">
                        <input type="password" id="password" name="password_confirmation" required>
                    </div>

                    
                    <div>
                        <button id="signupBtn" type="submit" name="submit">Join now <i class="fas fa-angle-right"></i></button>
                    </div>

                    <aside>
                        <p>By signing up, you agree to our <a href="#">Terms of Service</a>, <a href="#">Privacy Policy</a></p>
                    </aside>
                </form>
            </article>
        </section>
   </main>
    
    <script>
        // show/hide password
        const visToggle = document.querySelector('.eyeIcon');

        const input = document.querySelector('#pwdWrap input');
        
        var password = true; // bullets are showing
        
        visToggle.addEventListener('click', function(){
            if (password) { 
               input.setAttribute('type','text'); 
                visToggle.classList.remove('fa-eye'); 
                visToggle.classList.add('fa-eye-slash');
            } else { 
                input.setAttribute('type','password');
                visToggle.classList.remove('fa-eye-slash');
                visToggle.classList.add('fa-eye');
            }
            password = !password; // when password is false the text is showing
        });
        
        // help-tip
        
        // password help-tip
        // hide the password helper text div
        document.querySelector('#tt').classList.add('hide');
        // make the tooltip able to close on click
        const tooltip = document.querySelector('.tooltip');
        tooltip.addEventListener('click', function(){
            document.querySelector('#tt').classList.toggle('show'); // togle the tooltip to show or hide
            document.querySelector('#tt').classList.toggle('hide');
        })

        //city help-tip
         // hide the helper text div
        document.querySelector('#cty').classList.add('hide'); // hide the tooltip on page load
        const cityTooltip = document.querySelector('.tooltip.city');
        cityTooltip.addEventListener('click', function(){
            document.querySelector('#cty').classList.toggle('show'); // togle the tooltip to show or hide
            document.querySelector('#cty').classList.toggle('hide');
        })
        
        
        // password strength
        var pass = document.getElementById('password'); 
        pass.addEventListener('keyup', function(){ 
            checkPassword(pass.value);
        })
        function checkPassword(password) {
            var strengthBar = document.getElementById('strength'); 
            var strength = 0; // set default strength to 0
            if (password.match(/(?=.*\d)+/)){ // checks to see if password matches regular expression and increases strength by 1. Here we check for a number from 0-9
                strength += 1
            }
            if (password.match(/(?=.*[a-z])(?=.*[A-Z])+/)) { //We are seeing if password as a lower case from a-z, upper case from A-Z
                strength += 1
            }
            if (password.match(/(?=.*[!@#$%^&*()~<>?])+/)) { // check for funky character
                strength += 1
            }
            if (password.length > 10) { // check for at least 10 characters  
                strength += 1
            }
            switch(strength){ // run switch statement on strength
                case 0:
                    strengthBar.value = 20;
                    strengthBar.className = ''; 
                    strengthBar.classList.add('pb20');
                    break;
                case 1: 
                    strengthBar.value = 40;
                    strengthBar.className = '';
                    strengthBar.classList.add('pb40');
                    break;
                case 2:
                    strengthBar.value = 60;
                    strengthBar.className = '';
                    strengthBar.classList.add('pb60');
                    break;
                case 3:
                    strengthBar.value = 80;
                    strengthBar.className = '';
                    strengthBar.classList.add('pb80');
                    break;
                case 4:
                    strengthBar.value = 100;
                    strengthBar.className = '';
                    strengthBar.classList.add('pb100');
                    break;
            }
        }

        
    </script>
</body>
</html>






