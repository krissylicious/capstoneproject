<?php
include "conn.php";
session_start();

$otp = $_SESSION['otp'];
echo $otp;
if (isset($_POST['confirm'])) {
	$tp = $_POST['otp'];
	if ($tp == $otp) {
	?>
	<script>
		alert("Your account is accepted!");
		window.location.href="adminhome/adminhomee.php";
	</script>
	<?php
	} else {
	?>
	<script>
		alert("Invalid OTP!");
	</script>
	<?php
	}
}
?>
<form method="POST">
	<input type="text" name="otp">
	<button type="submit" class="form-control" name="confirm">submit</button>
</form> 