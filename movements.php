<?php
session_start();
include "up.php";
include "menu.php";
?>
<div class=container>
<?php
	if(isset($_POST['dps']))
	{
		$ss="insert into kinhseis(id,id_users,hmerominia,poso,typos)
		values (NULL,$_SESSION[id],now(),$_POST[dps],'katathesi')";
		
		mysqli_query($conn,$ss);
		
	}
	
	if(isset($_POST['wds']))
	{
		$ss="Select sum(poso) as sum1 from kinhseis where id_users=$_SESSION[id]";
	$q=mysqli_query($conn,$ss);
		$r=mysqli_fetch_array($q);
		
		if($_POST['wds']<=$r['sum1'])
		{
		$ss="insert into kinhseis(id,id_users,hmerominia,poso,typos)
		values (NULL,$_SESSION[id],now(),-$_POST[wds],'katathesi')";
		
		mysqli_query($conn,$ss);
		}
		else
		{
			echo "<span style='color:Red'>You have not this amount</span>";
		}
	}



	$ss="Select * from kinhseis where id_users=$_SESSION[id]";
	$q=mysqli_query($conn,$ss);
	$sum1=0;
	echo "<table class=table><tr><th>id</td><td>Amount</td><td>Date</td></tr>";
	while($r=mysqli_fetch_array($q))
	{
		echo "<tr><td>$r[id]</td><td>$r[poso]</td><td>$r[hmerominia]</td>";
		$sum1+=$r['poso'];
	}
	echo "<tr><td>Sum:</td><td>$sum1</td><td></td></tr></table>";
?>
</div>