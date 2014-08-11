<!DOCTYPE html>
<html lang="en">

<body>


<form action="IOPE.php" method="POST">
	
<div class="container">
	<div class="panel panel-success">
		<div class="panel-heading">
		<center>
			Initial Orthopedic History And Physical Examination
		</center>
		</div>
		<?php
		include "clinix.data.php";
		include "px_head.php";
		?>
	</div>
	
	<div class="panel-group" id="accordion">
		<div class="panel panel-default">
			<?php
			include "IOPE.chiefcomp.php";
			include "IOPE.etiology.php";
			include "IOPE.treatment.php";
			include "IOPE.prevsurgery.php";
			include "IOPE.labexam.php";
			include "IOPE.medhist.php";
			?>
		</div>
	</div>
	<input type="submit"  name="IOPESubmit" class="btn-info btn-block btn-lg" value="Submit">
	<br>
</div>
</form>	
<script src="js/jquery.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
<script src="assets/js/docs.min.js"></script>
</body>
</html>