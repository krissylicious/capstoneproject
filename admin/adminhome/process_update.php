<?php
include "conn.php";
session_start();

if (isset($_POST['updatereg'])) {
    $id = $_GET["id"];
    $fn = $_POST['fn'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$birthdate = $_POST['birthdate'];
	$address = $_POST['address'];
	$cn = $_POST['cn'];
	$password = $_POST['password'];

    $doc_type = "Document";
    $fileName =$_FILES["doc_type"]["name"];
    $fileTmpName =$_FILES["doc_type"]["tmp_name"];
    $fileExt = explode(".", $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = ["png", "jpeg", "jpg", "webp", "jfif", "gif"];

    if (in_array($fileActualExt, $allowed)) {
        $fileNameNew = $fileName;

        $updateresidents = mysqli_query($conn,
            "UPDATE residents SET  fn='$fn', email='$email', gender='$gender', birthdate='$birthdate', address='$address', cn='$cn', password='$password', valid_id='$fileNameNew' WHERE id= '$id'"
        );

        if ($updateresidents == true) {

            $fileDestination = "../../citizen/upload/Documents/" . $fileNameNew;
            move_uploaded_file($fileTmpName, $fileDestination);
            ?>
    		<script>
			        alert("Data was updated Succesfully!");
			        window.location.href="viewresident.php";
			    </script>
    		<?php
        } else {
             ?>
			    <script>
			        alert("Error In updating!/nPlease Try Again!");
			        window.location.href="viewresident.php";
			    </script> 
			    <?php
        }
    }
}



//this code is for update complains

if (isset($_POST['update2'])) {
	
	$id=$_GET['id'];

	$complain_name =$_POST['complain_name'];


	$getcomplains = mysqli_query($conn, "UPDATE complain_report SET complain_title ='$complain_name' WHERE id = '$id'");


	if ($getcomplains==TRUE) {
		
		?>

		<script>
			alert("Complain was Updated Succesfully!");
			window.location.href="complain_list.php";
	</script>
	<?php
	}else{

		?>
		<script>
			alert("Error In Updating!/nPlease Try Again!");
			window.location.href="complain_list.php";
	</script>

	<?php
	}
}

//updating status
if (isset($_POST['update3'])) {
	
	$id=$_GET['id'];

	$stat = $_POST['Status'];


	$getstatus = mysqli_query($conn, "UPDATE resident_complain SET Status='$stat' WHERE id = '$id'");


	if ($getstatus==TRUE) {
		
		?>

		<script>
			alert("Status was Updated Succesfully!");
			window.location.href="report_complain.php";
	</script>
	<?php
	}else{

		?>
		<script>
			alert("Error In Updating!/nPlease Try Again!");
			window.location.href="report_complain.php";
	</script>

	<?php
	}
}
?>