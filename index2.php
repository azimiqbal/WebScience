<!DOCTYPE html>
<html lang="en">

<?php include('header.php');?>
<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Vennligst logg inn</h3>
        <form id="login-form" class="form" action="authenticate.php" method="post">
	        <div class="container">
	            <div id="login-row" class="row justify-content-center align-items-center">
	                <div id="login-column" class="col-md-6">
	                    <div id="login-box" class="col-md-12">
	                        
	                            <h3 class="text-center text-info">Logg in</h3>
	                            <div class="form-group">
	                                <label for="username" class="text-info">Fullt navn:</label><br>
	                                <input type="text" name="username" id="username" class="form-control" required>
	                            </div>
	                            <div class="form-group">
	                                <label for="password" class="text-info">Password:</label><br>
	                                <input type="text" name="password" id="password" class="form-control" required>    
      							</div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                            <div id="register-link" class="text-middle">
                                <a href="registerIX.php" class="text-info">Har du ingen bruker? Registrer deg her</a>
                            </div>
	                        </form>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
<?php include('footer.php');?>
