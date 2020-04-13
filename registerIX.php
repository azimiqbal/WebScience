<!DOCTYPE html>
<html lang="en">

<?php include('header.php');?>
<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Vennligst registrer deg</h3>
        <form id="login-form" class="form" action="register.php" method="post" autocomplete="off">
	        <div class="container">
	            <div id="login-row" class="row justify-content-center align-items-center">
	                <div id="login-column" class="col-md-6">
	                    <div id="login-box" class="col-md-12">
	                        
	                            <h3 class="text-center text-info">Registrer bruker</h3>
	                            <div class="form-group">
	                                <label for="username" class="text-info">Fullt navn:</label><br>
	                                <input type="text" name="username" id="username" class="form-control" required>
	                            </div>
	                             <div class="form-group">
	                                <label for="email" class="text-info">Email adresse:</label><br>
	                                <input type="text" name="email" id="email" class="form-control" required>
	                            </div>

	                            <div class="form-group">
	                                <label for="password" class="text-info">Password:</label><br>
	                                <input type="text" name="password" id="password" class="form-control" required>    
      							</div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Register">
                            </div>
                            <div id="register-link" class="text-middle">
                                <a href="index2.php" class="text-info">Har du en bruker? Logg inn her</a>
                            </div>
	                        </form>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
<?php include('footer.php');?>
