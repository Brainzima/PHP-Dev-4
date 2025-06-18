<?php
include "dbcon.php";
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql_email = "SELECT * FROM users_tbl WHERE user_email='$email'";
    $result_email = mysqli_query($conn, $sql_email);
    $row_email = mysqli_num_rows($result_email);
    if ($row_email > 0) {
        $sql_pass = "SELECT * FROM users_tbl WHERE user_email='$email' AND user_password='$password'";
        $result_pass = mysqli_query($conn, $sql_pass);
        if (mysqli_num_rows($result_pass) > 0) {
            $data = mysqli_fetch_assoc($result_pass);
            session_start();
            $_SESSION['user_name'] = $data['user_name'];
            $_SESSION['user_email'] = $data['user_email'];
            $_SESSION['isloggedin'] = true;

            header("Location: index.php");
        } else {
            $error = '<div class="alert alert-danger" role="alert">
                        Password is incorrect!
                        </div>';
        }
    } else {
        $error = '<div class="alert alert-danger" role="alert">
                        User email is not registered!
                        </div>';
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>

    <div class="container p-5">
        <div class="card p-5">
            <div class="card-header text-center">
                <h1 class="card-title">Login Page</h1>
            </div>
            <?php if(!empty($error)){echo $error;} ?>
            <form action="" method="post">
                <div class="row mt-3">
                    <div class="col">
                        <div class="form-group">
                            <input type="email" placeholder="Email Address" class="form-control" name="email">
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <div class="form-group">
                            <input type="password" placeholder="Password" class="form-control" name="password">
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <button type="submit" class="btn btn-primary" name="submit">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>