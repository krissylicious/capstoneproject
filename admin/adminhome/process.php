<?php
include "conn.php";
session_start();

//this is for registration

if (isset($_POST['reg'])){

	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$phonenumber = $_POST['phonenumber'];
	$date_of_birth = $_POST['dob'];
	$place_of_birth = $_POST['pob'];
	$cilstatus = $_POST['cilstatus'];
	$religion = $_POST['religion'];
	$sex = $_POST['sex'];
	$citizenship = $_POST['citizenship'];
	$spouse = $_POST['spouse'];
	$spouseoccup = $_POST['spouseoccup'];
	$noc1 = $_POST['noc1'];
	$noc2 = $_POST['noc2'];
	$noc3 = $_POST['noc3'];
	$fathersname = $_POST['fathersname'];
	$fatheroccup = $_POST['fatheroccup'];
	$mothersname = $_POST['mothersname'];
	$mothersoccup = $_POST['mothersoccup'];
	$guardian = $_POST['guardian'];
	$guardnum = $_POST['guardnum'];
	$elementary= $_POST['elementary'];
	$elementaryyg = $_POST['elementaryyg'];
	$highschool = $_POST['highschool'];
	$highschoolyg = $_POST['highschoolyg'];
	$college = $_POST['college'];
	$collegeyg = $_POST['collegeyg'];
	$degree_received = $_POST['degreereceived'];
	$specialskills = $_POST['specialskills'];
	$workstatus = $_POST['workstatus'];
	$workspecify = $_POST['workspecify'];
	$validid = $_POST['validid'];
	$password = $_POST['password'];

    

			
    $checkreg = mysqli_query($conn,"SELECT * FROM citizen WHERE email='$email' ");
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
		$insertreg = mysqli_query($conn,"INSERT INTO citizen VALUES('0','$fileNameNew','$name','$email','$address','$phonenumber',
		'$date_of_birth', '$place_of_birth', '$cilstatus', '$religion', '$sex', '$citizenship', '$spouse', '$spouseoccup', '$noc1',
		'$noc2', '$noc3', '$fathersname', '$fatheroccup', '$mothersname', '$mothersoccup', '$guardian', '$guardnum', '$elementary',
		'$elementaryyg', '$highschool','$highschoolyg', '$college', '$collegeyg', '$degree_received', '$specialskills', '$workstatus',
		'$workspecify','$validid','$password')");

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