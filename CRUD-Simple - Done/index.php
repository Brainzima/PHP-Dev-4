<?php include "components/header.php"; ?>
<?php
include "components/dbconnection.php";

$sql = "SELECT * FROM `users_tbl`";
$result = mysqli_query($conn, $sql);
?>
<!-- section start  -->
<section class="container">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Mobile</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Gend</th>
                <th scope="col">Qualification</th>
                <th scope="col">Note</th>
                <th scope="col">Status</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($data = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <th scope="row"><?php echo $data['user_id']; ?></th>
                    <td><?php echo $data['user_name']; ?></td>
                    <td><?php echo $data['user_mobile']; ?></td>
                    <td><?php echo $data['user_email']; ?></td>
                    <td><?php echo $data['user_adrs']; ?></td>
                    <td><?php echo $data['user_gndr']; ?></td>
                    <td><?php echo $data['user_qualification']; ?></td>
                    <td><?php echo $data['user_note']; ?></td>
                    <td><?php echo $data['user_status']; ?></td>
                    <td>
                        <a href="edit.php?ref=<?php echo $data['user_id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="delete.php?ref=<?php echo $data['user_id']; ?>" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</section>
<!-- section end  -->

<?php include "components/footer.php"; ?>