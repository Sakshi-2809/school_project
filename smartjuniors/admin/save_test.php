<?php
include("../includes/db.php");

if(isset($_POST['upload'])){

$video = $_FILES['video']['name'];
$tmp = $_FILES['video']['tmp_name'];
$category = $_POST['category'];

$folder = "../uploads/".$video;

move_uploaded_file($tmp,$folder);

$query = "INSERT INTO testimonials(video,category)
VALUES('$video','$category')";

mysqli_query($conn,$query);

header("Location: ../testimonials.php");
}
?>
        