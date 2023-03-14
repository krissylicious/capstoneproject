<?php
include 'conn.php';
session_start();
session_destroy();

?>
<script>
    alert("You are Now Leaving the Page!\nThank you for using it!");
    window.location.href="index.php";
</script>