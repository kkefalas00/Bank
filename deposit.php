<?php
session_start();
include "up.php";
include "menu.php";
?>

<div class=container>

<form action='movements.php'method=post>
	<div class="form-group dp">
	  <label for="Deposit">Deposit : </label>
	  <input type="number" class="form-control" id="dps" name="dps" min=0 placeholder="Type your deposit">
	  <input type="submit" value="Send">
	</div>
</form>


</div>