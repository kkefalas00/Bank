<?php
session_start();
include "up.php";

?>

<div class=container>

	<div class=row>
	
		<table class="table table-hover">
		
		<tr>
		
			<th>Fullname</th>
			<th>Username</th>
			<th>Phone</th>
			<th>id</th>
			
			</tr>
<?php

	if($_SESSION['id']!="")
	{
		
					$sql="select * from users where  id='$_SESSION[id]' ";
				$q=mysqli_query($conn,$sql);
				
				if(mysqli_num_rows($q)>0)
				{
						$r=mysqli_fetch_array($q);
						$_SESSION['id']=$r['id'];
				
					echo "<tr>
						<td>$r[fullname]</td>
						<td>$r[username]</td>
						<td>$r[phone]</td>
						<td>$r[id]</td>
					  </tr>	
					 ";
				}		
	}
	
?>		
		</table>
<a href="bank.php"><button>Return to menu</button></a>
</div>

</div>