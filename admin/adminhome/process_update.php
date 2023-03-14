<?php
include "conn.php";
session_start();

if (isset($_POST['updatereg'])) {
    $id = $_GET["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $phonenumber = $_POST["phonenumber"];
    $date_of_birth = $_POST["dob"];
    $place_of_birth = $_POST["pob"];
    $cilstatus = $_POST["cilstatus"];
    $religion = $_POST["religion"];
    $sex = $_POST["sex"];
    $citizenship = $_POST["citizenship"];
    $spouse = $_POST["spouse"];
    $spouseoccup = $_POST["spouseoccup"];
    $noc1 = $_POST["noc1"];
    $noc2 = $_POST["noc2"];
    $noc3 = $_POST["noc3"];
    $fathersname = $_POST["fathersname"];
    $fatheroccup = $_POST["fatheroccup"];
    $mothersname = $_POST["mothersname"];
    $mothersoccup = $_POST["mothersoccup"];
    $guardian = $_POST["guardian"];
    $guardnum = $_POST["guardnum"];
    $elementary = $_POST["elementary"];
    $elementaryyg = $_POST["elementaryyg"];
    $highschool = $_POST["highschool"];
    $highschoolyg = $_POST["highschoolyg"];
    $college = $_POST["college"];
    $collegeyg = $_POST["collegeyg"];
    $degree_received = $_POST["degreereceived"];
    $specialskills = $_POST["specialskills"];
    $workstatus = $_POST["workstatus"];
    $workspecify = $_POST["workspecify"];
    $validid = $_POST["validid"];
    $password = $_POST["password"];

    $doc_type = "Document";
    $fileName = $_FILES["doc_type"]["name"];
    $fileTmpName = $_FILES["doc_type"]["tmp_name"];
    $fileExt = explode(".", $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = ["png", "jpeg", "jpg", "webp", "jfif", "gif"];

    if (in_array($fileActualExt, $allowed)) {
        $fileNameNew = $fileName;

        $updateresidents = mysqli_query(
            $conn,
            "UPDATE citizen SET image='$fileNameNew', name='$name', email='$email', address = '$address', phonenumber = '$phonenumber', date_of_birth = '$date_of_birth', place_of_birth = '$place_of_birth', cilstatus = '$cilstatus', religion = '$religion', sex = '$sex', citizenship = '$citizenship', spouse = 'spouse', spouseoccup = '$spouseoccup', noc1 = '$noc1', noc2 = '$noc2', noc3 = '$noc3', fathersname = '$fathersname', fatheroccup = '$fatheroccup', mothersname = '$mothersname', mothersoccup = '$mothersoccup', guardian = '$guardian', guardnum = '$guardnum', elementary = '$elementary', elementaryyg = '$elementaryyg', highschool = '$highschool', highschoolyg = '$highschoolyg', college = '$college', collegeyg = '$collegeyg', degree_received = '$degree_received', specialskills = '$specialskills', workstatus = '$workstatus', workspecify = '$workspecify', validid = '$validid', password = '$password' WHERE id= '$id'"
        );

        if ($updateresidents == true) {

            $fileDestination = "upload/Document/" . $fileNameNew;
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