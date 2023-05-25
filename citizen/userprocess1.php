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
            window.location.href="index.php";
        </script>
        <?php
    }else{

    $doc_type = "Document";
	  $fileName = $_FILES['doc_file']['name'];
	  $fileTmpName = $_FILES['doc_file']['tmp_name'];
    $fileExt = explode('.', $fileName);
	  $fileActualExt = strtolower(end($fileExt));
    $allowed = array('png', 'jpeg', 'jpg', 'webp', 'jfif', 'gif' );

		if(in_array($fileActualExt, $allowed)){         

    $fileNameNew = $fileName;
	$insertreg = mysqli_query($conn,"INSERT INTO residents VALUES('0','$fn','$email', '$gender', '$birthdate', 
		'$address', '$cn', '$password', '$fileNameNew')");

		if ($insertreg == TRUE) {

			$fileDestination = 'upload/Documents/'.$fileNameNew;
        	move_uploaded_file($fileTmpName, $fileDestination);

			?>
				<script>
					alert("Data were inserted");
					window.location.href="index.php"
				</script>
			<?php
		}else{
		?>
			<script>
				alert("Data were not inserted");
				window.location.href="index.php"
			</script>
		<?php
	}

	}
 
}
}