<?php include "components/header.php"; ?>
<?php
include "components/dbconnection.php";

$sql = "SELECT * FROM `images_tbl`";
$result = mysqli_query($conn, $sql);
?>
<!-- section start  -->
 <?php 
 if(isset($_GET['deleted'])){
    echo '<div id="alert" class="alert alert-success" role="alert">
                    Image Deleted Successfully!
                </div>';
 }
 ?>
<section class="container">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Image</th>
                <th scope="col">Caption</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($data = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <th scope="row"><?php echo $data['id']; ?></th>
                    <td> <img src="uploads/<?php echo $data['image_name']; ?>" width="100"> </td>
                    <td><?php echo $data['caption']; ?></td>
                    <td>
                        <a href="edit.php?ref=<?php echo $data['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                        <a onclick="return confirm('Are you sure to delete this item?')" href="delete.php?ref=<?php echo $data['id']; ?>&nref=<?php echo $data['image_name']; ?>" class="btn btn-sm btn-danger">Delete</a>
                        <a href="uploads/<?php echo $data['image_name']; ?>" class="btn btn-sm btn-info" target="_blank">View</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</section>
<!-- section end  -->

<?php include "components/footer.php"; ?>