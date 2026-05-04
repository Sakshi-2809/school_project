<link rel="stylesheet" href="manage_glr.css">

<?php
include("../includes/db.php");

$query = "SELECT * FROM testimonials";
$result = mysqli_query($conn,$query);
?>

<div class="container">

    <h2>🎥 Manage Testimonials</h2>

    <!-- Top Button -->
    <div class="top-bar">
        <a href="../testimonials.php" class="gallery-btn">
            Go to Testimonials
        </a>
    </div>

    <table>

        <tr>
            <th>Video</th>
            <th>Category</th>
            <th>Action</th>
        </tr>

        <?php
        while($row = mysqli_fetch_assoc($result)){
        ?>

        <tr>

            <td>
                <video width="220" controls>
                    <source src="../uploads/<?php echo $row['video']; ?>" type="video/mp4">
                </video>
            </td>

            <td>
                <?php echo $row['category']; ?>
            </td>

            <td>
                <a href="dlt_test.php?id=<?php echo $row['id']; ?>" 
                   class="delete-btn"
                   onclick="return confirm('Are you sure you want to delete this video?')">
                   Delete
                </a>
            </td>

        </tr>

        <?php } ?>

    </table>

</div>
