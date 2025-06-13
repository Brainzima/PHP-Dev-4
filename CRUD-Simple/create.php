<?php include "components/header.php"; ?>
<?php 
include 'components/dbconnection.php';
if (isset($_POST['submit'])) {
    $user_name = $_POST['user_name'];
    $user_mobile = $_POST['user_mobile'];
    $user_email = $_POST['user_email'];
    $user_gndr = $_POST['user_gndr'];
    $user_qualification = $_POST['user_qualification'];
    $user_adrs = $_POST['user_adrs'];
    $user_note = $_POST['user_note'];
    $user_status = 'Pending';

    $sql = "INSERT INTO `users_tbl`(`user_name`, `user_mobile`, `user_email`, `user_gndr`, `user_adrs`, `user_qualification`, `user_note`, `user_status`) VALUES ('$user_name', '$user_mobile', '$user_email', '$user_gndr', '$user_adrs', '$user_qualification', '$user_note', '$user_status')";

    $result = mysqli_query($conn, $sql);
    if($result){
        $msg = '<div class="alert alert-success" role="alert">
                    Data Added Successfully!
                </div>';
    } else{
        $msg = '<div class="alert alert-danger" role="alert">
                    Error while creating data!
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
        <h2>Registration Form</h2>
        <?php if(!empty($msg)){echo $msg;} ?>
        <form action="" method="post">
            <div class="row g-4">
                <!-- Name Field -->
                <div class="col-12 col-md-6">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name" name="user_name" required>
                </div>

                <!-- Mobile Field -->
                <div class="col-12 col-md-6">
                    <label for="mobile" class="form-label">Mobile</label>
                    <input type="tel" class="form-control" id="mobile" placeholder="Enter your mobile number" pattern="[0-9]{10}" title="Please enter a 10-digit mobile number" name="user_mobile" required>
                </div>

                <!-- Email Field -->
                <div class="col-12 col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email" name="user_email" required>
                </div>

                <!-- Address Field -->
                <div class="col-12 col-md-6">
                    <label for="address" class="form-label">Address</label>
                    <textarea class="form-control" id="address" rows="3" placeholder="Enter your full address" name="user_adrs" required></textarea>
                </div>

                <!-- Gender Field -->
                <div class="col-12 col-md-6">
                    <label class="form-label d-block mb-2">Gender</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="user_gndr" id="genderMale" value="Male" required>
                        <label class="form-check-label" for="genderMale">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="user_gndr" id="genderFemale" value="Female">
                        <label class="form-check-label" for="genderFemale">Female</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="user_gndr" id="genderOther" value="Other">
                        <label class="form-check-label" for="genderOther">Other</label>
                    </div>
                </div>

                <!-- Qualification Field -->
                <div class="col-12 col-md-6">
                    <label for="qualification" class="form-label">Qualification</label>
                    <select class="form-select" id="qualification" name="user_qualification" required>
                        <option value="">Select your highest qualification</option>
                        <option value="Matriculation">Matriculation</option>
                        <option value="Intermediate">Intermediate</option>
                        <option value="Gradution">Gradution</option>
                        <option value="Post Graduation">Post Graduation</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <!-- Note Field (full width) -->
                <div class="col-12">
                    <label for="note" class="form-label">Note</label>
                    <textarea class="form-control" id="note" rows="4" placeholder="Add any additional notes here" name="user_note" required></textarea>
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