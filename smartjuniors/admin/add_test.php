<?php
include("../includes/db.php");
?>

<link rel="stylesheet" href="add_test.css">
<div class="glr-box">
<h2>Upload Testimonial Videos</h2>

<form method="POST" action="save_test.php" enctype="multipart/form-data">

Select Video<br>
<input type="file" name="video"><br><br>

Category<br>
<select name="category">
<option value="kids">Parents</option>
<option value="meeting">Kids</option>
<option value="parties">Teachers</option>
<option value="print">Administrator</option>
</select>

<br><br>

<button type="submit" name="upload">Upload</button>

</form>

</div>
            