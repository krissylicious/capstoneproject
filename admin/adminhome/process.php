<?php
include "conn.php";
session_start();

//this is for registration

if (isset($_POST['reg'])){

	
	$fn = $_POST['fn'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$birthdate = $_POST['birthdate'];
	$address = $_POST['address'];
	$cn = $_POST['cn'];
	$password = $_POST['password'];


    

			
    $checkreg = mysqli_query($conn,"SELECT * FROM residents WHERE email='$email' ");
    $num_reg=mysqli_num_rows($checkreg);

	 if($num_reg >= 1){
        ?>
        <script>
            alert("This email were already Registered\nPlease try another email."); 
            window.location.href="adminreg1.php";
        </script>
        <?php
    }else{

      $doc_type = "Document";
	  $fileName = $_FILES['doc_type']['name'];
	  $fileTmpName = $_FILES['doc_type']['tmp_name'];
      $fileExt = explode('.', $fileName);
	  $fileActualExt = strtolower(end($fileExt));
      $allowed = array('png', 'jpeg', 'jpg', 'webp', 'jfif', 'gif' );

	if(in_array($fileActualExt, $allowed)){         

    	$fileNameNew = $fileName;
		$insertreg = mysqli_query($conn,"INSERT INTO residents VALUES('0', '$fn', '$email', '$gender', '$birthdate', '$address', '$cn', '$password')");

		if ($insertreg == TRUE) {

			$fileDestination = 'upload/Document/'.$fileNameNew;
        	move_uploaded_file($fileTmpName, $fileDestination);

			?>
				<script>
					alert("Data were inserted");
					window.location.href="adminhomee.php"
				</script>
			<?php
		}else{
		?>
			<script>
				alert("Data were not inserted");
				window.location.href="adminreg1.php"
			</script>
		<?php
	}

	}
 
}
}

//for creation of complains
if(isset($_POST['complain_title'])){

	$complain_name = $_POST['complain_name'];

	$checkcomplain = mysqli_query($conn, "SELECT * FROM complain_report WHERE complain_title ='$complain_name' ");

	$check=mysqli_num_rows($checkcomplain);


	if($check >= 1){

		?>

		<script>
			alert("This Complain Title already exist!");
			window.location.href="adminhomee.php"

	</script>
		<?php
	}else{

		$insert = mysqli_query($conn, "INSERT INTO complain_report VALUES('0', '$complain_name')");

		if($insert == TRUE){
			?>
			<script>
				alert("This Complain Title is inserted!");
				window.location.href="adminhomee.php"

			</script>
			<?php
		}else{
			?>
			<script>
				alert("New Complain Title Created");
				window.location.href="adminhomee.php"

			</script>
			<?php
		}
	}

}

//this for admin update
if (isset($_POST['adminupdate'])){

	$id =$_GET['id'];
	$fn = $_POST['fn'];
	$ln = $_POST['ln'];
	$cn = $_POST['cn'];
	$position =  $_POST['position'];
	$password = $_POST['password'];

	$admin_update = mysqli_query($conn, "UPDATE officials SET fn='$fn', ln='$ln', cn='$cn', position='$position', password='$password' WHERE id='$id'");

	if($admin_update==TRUE){
   			?>
    		<script>
			        alert("Data was updated Succesfully!");
			        window.location.href="adminhomee.php";
			    </script>
    		<?php
		}else{
			   ?>
			    <script>
			        alert("Error In updating!/nPlease Try Again!");
			        window.location.href="adminhomee.php";
			    </script> 
			    <?php
}


}
?> 