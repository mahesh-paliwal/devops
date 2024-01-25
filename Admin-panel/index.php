<?php
include("connection.php");
?>

<?php

session_start();

if ($_SESSION['adminid'] != "") {
    header("location: dashboard.php");
}

if (isset($_POST['login'])) {
    $user = $_POST['admin_name'];
    $pass = $_POST['password'];

    $sel   = "SELECT * FROM admin WHERE username = '$user' and password = '$pass'";
    $exe   = mysqli_query($conn, $sel);
    $row   = mysqli_num_rows($exe);

    if ($row == 1) {
        $fetch = mysqli_fetch_assoc($exe);
        $_SESSION['adminid'] = $fetch['id'];
        header("location: dashboard.php");
    } else {
        $msg = "Invalid username and password";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Admin Login</title>
    <style>
        .form_custom {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }
    </style>
</head>

<body class="bg-primary">
    <div class="container-fluid p-0">
        <div class="container">
            <div class="row pt-5">
                <div class="bg-white text-center w-25 form_custom py-5 rounded-2">
                    <h4 class="bg-white text-danger"><?php echo $msg; ?></h4>
                    <form action="" method="POST">
                        <h2>Admin Login</h2>
                        <div class="py-4">
                            <input type="text" placeholder="Admin Login" name="admin_name" class="w-100 ps-2 rounded-2 border-2 py-1" value="">
                        </div>
                        <div>
                            <input type="password" placeholder="Password" name="password" class="w-100 ps-2 rounded-2 border-2 py-1" value="">
                        </div>
                        <div class="pt-4">
                            <input type="submit" name="login" class="bg-primary border-0 text-white fs-5 rounded-2" value="Login">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</html>