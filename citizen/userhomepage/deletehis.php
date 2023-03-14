<?php
	include "conn.php";

	$id=$_GET['id'];

	$delete = mysqli_query($conn, "DELETE FROM citizen WHERE id ='$id' ");

	if($delete==TRUE){
		?>
		<script>
			alert("Your Complain history  is deleted in our Database!");
			window.location.href="history.php";
	</script>

	<?php
	}else{

		?>
		<script>
			alert("Error Deleting Data!");
			window.location.href="history.php";
	</script>

	<?php
	}


?>