<?php


include "up.php";
session_start();

?>


<div class=container>
	<div class=form>
	<form action='bank.php'method=post>
	  <div class='form-group' >
		<label for='username'>Username:</label>
		<input type='text' class='form-control' id='usr' name="usr">
	  </div>
	  <div class='form-group'>
		<label for='pwd'>Password:</label>
		<input type='password' class='form-control' id='pwd' name="pwd">
	  </div>
	  <button type='submit' class='btn btn-default'>Submit</button>
	</form>
	</div>
</div>