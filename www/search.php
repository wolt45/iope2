<?php
include "connPayTab.php";

if(isset($_POST['searchVal']))
{
	$searchq = $_POST['searchVal'];
	$searchq = preg_replace("#[^0-9a-z]#i", "", $searchq);
	
	$getval = "SELECT * FROM px_data 
		WHERE FirstName LIKE '%$searchq%' OR LastName LIKE '%$searchq%'
			ORDER BY LastName, FirstName";
	$getval2=mysqli_query($db_ipadrbg, $getval);
	
	echo "<ul>";
	
	$checkval = mysqli_num_rows($getval2);
	if($checkval == 0)
	{
		echo"<li class='list-group-item'>No search results.</li>";
	}else
	{
		while($row = mysqli_fetch_array($getval2))
		{
			$pxrid = $row['PxRID'];
			$fname = $row['FirstName'];
			$lname = $row['LastName'];
			$foto = $row['Foto'];
			
			$output = "<li class='list-group-item'>".
				
				"<a href='#wines/$pxrid' style='font-size:16px; display:block;'>".
				"<img src='../pics/$foto' width='50' class='list-icon' style='padding-right:6px;'/>".
				"$lname, $fname</a></li>";
			
			echo $output;
		}
	}
	echo "</ul>";
}else
{
	echo "NO RECORDS FOUND";
}
?>