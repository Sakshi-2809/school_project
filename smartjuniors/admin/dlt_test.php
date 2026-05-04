<?php
include("../includes/db.php");

$id = $_GET['id'];

$query = "SELECT * FROM testimonials WHERE id='$id'";
$result = mysqli_query($conn,$query);

$row = mysqli_fetch_assoc($result);

unlink("../uploads/".$row['video']);

$delete = "DELETE FROM testimonials WHERE id='$id'";
mysqli_query($conn,$delete);

header("Location: manage_test.php");
?>
