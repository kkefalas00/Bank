<?php

include "up.php";
session_start();

?>
<div class=container>
<div class="form">

<div><h1>Sign up</h1></div>
<form action='signup.php' method=post>
	  <div class='form-group'>
		<label for='fullname'>Fullname:</label>
		<input type='text' class='form-control' id='fn' name="fn">
	  </div>
	  <div class='form-group'>
		<label for='username'>Username:</label>
		<input type='text' class='form-control' id='usr' name="usr">
	  </div>
	  <div class='form-group'>
		<label for='password'>Password:</label>
		<input type='password' class='form-control' id='pwd' name="pwd">
	  </div>
	  <div class='form-group'>
		<label for='phone'>Phone:</label>
		<input type='number' class='form-control' id='ph' name="ph">
	  </div>
	  <button type='submit' class='btn btn-default'>Submit</button>
</form>
</div>

<?php

if(isset($_POST['fn']))
{
	
	$sql="insert into users set
		fullname='$_POST[fn]',
		username='$_POST[usr]',
		password='".md5($_POST['pwd'])."',
		phone='$_POST[ph]'";
	
	
	if(mysqli_query($conn,$sql))
	{	
		echo "<div class=row>
					<div class=col-md-3>
					</div>
					<div class=col-md-6>
					   <div class='alert alert-success' role='alert'>
						the user: $_POST[fn]  is inserted</div>
					   <button><a href='login.php'>Go to login page</a></button>
					</div>
					<div class=col-md-3>
					</div>
			  </div>";
		
	}

	else
	{
		echo "<div class=row>
					<div class=col-md-3>
					</div>
					<div class=col-md-6>
						 <div class='alert alert-danger' role='alert'>
							Wrong Insertion!
						 </div>
					</div>
					<div class=col-md-3>
					</div>
			  </div>";
			 
		header('Location: index.php');
		
	}
	
	
}

?>

</div>