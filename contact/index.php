<?php 
	require 'connection.php';
	
	if (isset ($_POST['submit'])){

	$fullname = $_POST["name"];
	$contactno = $_POST["pnum"];
	$email = $_POST["email"];
	$message = $_POST["message"];

	
		$sql = "INSERT INTO contactus (fullname,contactno,email,message) 
		VALUES('$fullname', '$contactno', '$email', '$message') ";
		
		if($con->query($sql)){

		
		}
		else{
			echo "Error:". $con->error;
		}
		}
	$con->close();
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
        <title>Contact Us</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/fa45bfce63.js" crossorigin="anonymous"></script>
        
    </head>
    <body>

        <div class="hero">

            <form method = "post" action ="index.php">
                <div class="row">
                    <div class="input-group">
                        <input type="text" name="name" required /> 
                        <label for="name"><i class="fas fa-user"></i> Your Name</label>
                    </div>
                    <div class="input-group">
					<input type="text" name="pnum" required />                      
                        <label for="number"><i class="fas fa-phone-square-alt"></i> Pnone No.</label>
                    </div>
                </div>
                
                <div class="input-group">
                    <input type="text" name="email" required /> 
                    <label for="email"><i class="fas fa-envelope"></i> Email Id</label>
                </div>
                <div class="input-group">
                    <input type="text" name="message" required /> 
                    <label for="message"><i class="fas fa-comments"></i> Your Message</label>
                </div>
                <input type="submit" name="submit" value="Send" />
                
            </form>
        </div>
      

    </body>
    

</html>

