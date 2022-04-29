<?php
session_start();
include "up.php";
include "menu.php";
?>

<div class=container>

<form action='movements.php'method=post>
	<div class="form-group dp">
	  <label for="Deposit">WithDrawl : </label>
	  <input type="number" class="form-control" id="wds" name="wds" min=0 placeholder="Type your amount">
	  <input type="submit" value="Send">
	</div>
</form>


</div>