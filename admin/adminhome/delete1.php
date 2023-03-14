<?php
	include "conn.php";

	$id=$_GET['id'];

	$delete = mysqli_query($conn, "DELETE FROM citizen WHERE id ='$id' ");

	if($delete==TRUE){
		?>
		<script>
			alert("1 item is deleted in our Database!");
			window.location.href="viewresident.php";
	</script>

	<?php
	}else{

		?>
		<script>
			alert("Error Deleting Data!");
			window.location.href="viewresident.php";
	</script>

	<?php
	}


?>