<?php
include "conn.php";
session_start();

if (isset($_POST['update'])){

	$id =$_GET['id'];
	$name = $_POST['name'];
	$validid = $_POST['validid'];
	$address = $_POST['address'];
	$phonenumber = $_POST['phonenumber'];
	$password = $_POST['password'];

	$updateacc = mysqli_query($conn, "UPDATE citizen SET name='$name', validid='$validid', address='$address', phonenumber='$phonenumber', password='$password' WHERE id='$id'");

	if($updateacc==TRUE){
   			?>
    		<script>
			        alert("Data was updated Succesfully!");
			        window.location.href="userhomepage.php";
			    </script>
    		<?php
		}else{
			   ?>
			    <script>
			        alert("Error In updating!/nPlease Try Again!");
			        window.location.href="userhomepage.php";
			    </script> 
			    <?php
}


}

//this is for complain/report
	
if(isset($_POST['complain1'])){

	date_default_timezone_set("Asia/Manila");
	$date = date('Y-m-d');
	$time = date('h:i:s');
	$name = $_POST['name'];
	$complains =$_POST['sellist1'];
	$complain_report =$_POST['complain_report'];
	$year = date('Y');
	$stat = "Pending";



	$insertresidentcomplain = mysqli_query($conn, "INSERT INTO resident_complain VALUES('0', '$name', '$complains', 
		'$complain_report', '$date', '$time', '$year','$stat')");
 
	if ($insertresidentcomplain == TRUE){

		?>
		<script>
			alert("Complaint were inserted!");
			window.location.href="userreport.php"
	</script>
	<?php
	}else{
		?>
		<script>
			alert("Complaint were not inserted!");
			window.location.href="userreport.php"
	</script>
	<?php
	}



}
?>