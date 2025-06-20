<?php include "components/header.php"; ?>
<?php 
include 'components/dbconnection.php';
$ref = $_GET['ref'];
$sqli = "SELECT * FROM images_tbl WHERE id=$ref";
$resulti = mysqli_query($conn, $sqli);
$data = mysqli_fetch_assoc($resulti);

if (isset($_POST['submit'])) {

    $image_name = $_FILES['image']['name'];
    $temp_image = $_FILES['image']['tmp_name'];

    $caption = $_POST['caption'];
    if (empty($image_name)) {
        $sql = "UPDATE images_tbl SET caption='$caption' WHERE id=$ref";
    }else{
        unlink('uploads/'.$data['image_name']);
        $sql = "UPDATE images_tbl SET image_name='$image_name', caption='$caption' WHERE id=$ref";
    }
  
    $result = mysqli_query($conn, $sql);
    if($result){
        move_uploaded_file($temp_image, 'uploads/'.$image_name);
        $msg = '<div id="alert" class="alert alert-success" role="alert">
                    Image Updated Successfully!
                </div>';
    } else{
        $msg = '<div class="alert alert-danger" role="alert">
                    Error while uploading image!
                </div>';
    }
}


?>
<style>
        .form-container {
            background-color: #ffffff;
            padding: 2.5rem;
            border-radius: 1rem; /* More rounded corners */
            box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.1); /* Soft shadow */
            width: 100%;
        }
        .form-control, .form-select {
            border-radius: 0.5rem; /* Rounded input fields */
            padding: 0.75rem 1rem;
            border: 1px solid #ced4da;
        }
        .form-control:focus, .form-select:focus {
            border-color: #86b7fe;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
        }
        .btn-primary {
            background-color: #0d6efd;
            border-color: #0d6efd;
            padding: 0.75rem 2rem;
            border-radius: 2rem; /* Pill-shaped button */
            font-weight: bold;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #0b5ed7;
            border-color: #0a58ca;
            transform: translateY(-2px); /* Slight lift on hover */
            box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.15);
        }
        .form-check-input:checked {
            background-color: #0d6efd;
            border-color: #0d6efd;
        }
        h2 {
            font-weight: bold;
            color: #343a40;
            margin-bottom: 2rem;
            text-align: center;
            padding: 0.5rem;
            border-radius: 0.5rem;
            background-color: #e9ecef; /* Light background for heading */
        }
    </style>
<!-- section start  -->
<section class="container">
    <div class="container form-container ">
        <h2>Upload Form</h2>
        <?php if(!empty($msg)){echo $msg;} ?>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row g-4">
                <!-- Name Field -->
                <div class="col-12 col-md-12">
                    <label for="name" class="form-label">Image</label>
                    <input type="file" class="form-control" id="name" placeholder="Enter your name" name="image">
                    <img class="card p-2" src="uploads/<?php echo $data['image_name']; ?>" width="300">
                </div>

                

                <!-- Note Field (full width) -->
                <div class="col-12">
                    <label for="note" class="form-label">Caption</label>
                    <textarea class="form-control" id="note" rows="4" placeholder="Add any additional notes here" name="caption" required><?php echo $data['caption']; ?></textarea>
                </div>

                <!-- Submit Button -->
                <div class="col-12 text-center mt-4">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- section end  -->

<?php include "components/footer.php"; ?>