<?php
include "conn.php";
session_start();

if (isset($_POST['update'])) {
    $id = $_GET["id"];
    $fn = $_POST['fn'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$birthdate = $_POST['birthdate'];
	$address = $_POST['address'];
	$cn = $_POST['cn'];
	$password = $_POST['password'];

    $doc_type = "Document";
    $fileName =$_FILES["proFile"]["name"];
    $fileTmpName =$_FILES["proFile"]["tmp_name"];
    $fileExt = explode(".", $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = ["png", "jpeg", "jpg", "webp", "jfif", "gif"];

    if (in_array($fileActualExt, $allowed)) {
        $fileNameNew = $fileName;

        $updateresidents=mysqli_query($conn, "UPDATE residents SET  fn='$fn', email='$email', gender='$gender', birthdate='$birthdate', address='$address', cn='$cn', password='$password', valid_id='$fileNameNew' WHERE id= '$id'"
        );

        if ($updateresidents == true) {

            $fileDestination = "../upload/Documents/" . $fileNameNew;
            move_uploaded_file($fileTmpName, $fileDestination);
            ?>
    		<script>
			        alert("Data was updated Succesfully!");
			        window.location.href="profile.php";
			    </script>
    		<?php
        } else {
             ?>
			    <script>
			        alert("Error In updating!/nPlease Try Again!");
			        window.location.href="profile.php";
			    </script> 
			    <?php
        }
    }
}

//this is for complain/report
	
if(isset($_POST['complain1'])){

	date_default_timezone_set("Asia/Manila");
	$date = date('Y-m-d');
	$time = date('h:i:s');
	$email = $_POST['email'];
	$cn = $_POST['cn'];
	$complains =$_POST['sellist1'];
	$complain_report =mysqli_real_escape_string($conn, $_POST['complain_report']);
	$year = date('Y');
	$stat = "Pending";
	$lat = $_POST['lat'];
	$long = $_POST['long'];

	 $doc_type = "Document";
	 $fileName = $_FILES['doc_type']['name'];
	 $fileTmpName = $_FILES['doc_type']['tmp_name'];
     $fileExt = explode('.', $fileName);
	 $fileActualExt = strtolower(end($fileExt));
     $allowed = array('png', 'jpeg', 'jpg', 'webp', 'jfif', 'gif', 'MOV', 'MP4', 'AVI', 'FLV', 'WMV' );

	if(in_array($fileActualExt, $allowed)){         

    	$fileNameNew = $fileName;



	$insertresidentcomplain = mysqli_query($conn, "INSERT INTO resident_complain VALUES('0', '$email',  '$complains', 
		'$complain_report','$cn', '$date', '$time', '$year','$stat','$lat','$long', '$fileNameNew')");

	
 
	if ($insertresidentcomplain == TRUE){


		$fileDestination = '../upload/Documents/'.$fileNameNew;
        	move_uploaded_file($fileTmpName, $fileDestination);
		?>

		<script>
			alert("Complaint were inserted!");
			window.location.href="userhomepage.php"
	</script>
	<?php
	}else{
		?>
		<script>
			alert("Complaint were not inserted!");
			window.location.href="userhomepage.php"
	</script>
	<?php
	}


}

}













?>