<?php
include("connection.php");
?>

<?php

$id = $_GET['id'];

$query = "SELECT * FROM addrecords WHERE id = '$id'";

$data  = mysqli_query($conn, $query);
$result = mysqli_fetch_assoc($data);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Update News</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .accordion-item:hover {
            background-color: rgb(20, 20, 220);
            color: white;
        }

        .accordion-title:hover {
            color: white;
            background-color: rgb(20, 20, 220);
            cursor: pointer;
            transition: 0.7s;
        }

        .accordion-content {
            display: none;
        }

        .fa-caret-up {
            display: none;
        }

        .form-custom {
            position: relative;
            left: 50%;
            transform: translateX(-50%);
        }
    </style>
</head>

<body>
    <header>
        <div class="container-fluid p-0 bg-info">
            <div class="container">
                <div class="navbar navbar-expand-md">
                    <button class="navbar-toggler bg-body" data-bs-toggle="collapse" data-bs-target="#menuBar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-around">
                        <ul class="navbar-nav fw-normal fs-5 gap-5">
                            <li class="nav-item">
                                <a href="" class="nav-link"><i class="fa-solid fa-user"></i> Profile</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link"><i class="fa-solid fa-house"></i> Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="changepwd.php"><i class="fa-solid fa-unlock-keyhole"></i> Change Password</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php" type="button"><i class="fa-solid fa-power-off"></i> Logout</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href=""><i class="fa-solid fa-link"></i> Go To Website</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container-fluid p-0 dashboard-section-custom">
            <div class="container">
                <div class="row py-4">
                    <div class="col-md-2 border border-black">
                        <h2 class="text-center pb-3">Menu</h2>
                        <h4 class="pb-2 text-secondary">Enquires</h4>
                        <div class="accordion-item pt-2">
                            <div class="accordion-title px-2 align-items-center d-flex justify-content-between">
                                <h5>Records</h5>
                                <i class="fa-solid fa-caret-down"></i>
                                <i class="fa-solid fa-caret-up"></i>
                            </div>
                            <div class="accordion-content py-2 fw-medium ps-4 bg-secondary">
                                <div class="pb-2">
                                    <a class="text-decoration-none text-white" href="addrecord.php">Add Records</a>
                                </div>
                                <div>
                                    <a class="text-decoration-none text-white" href="viewrecords.php">View Records</a>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-title px-2 align-items-center d-flex justify-content-between">
                                <h5>News</h5>
                                <i class="fa-solid fa-caret-down"></i>
                                <i class="fa-solid fa-caret-up"></i>
                            </div>
                            <div class="accordion-content py-2 fw-medium ps-4 bg-secondary">
                                <div class="pb-2>
                                    <a class=" text-decoration-none text-white" href="addnews.php">Add News</a>
                                </div>
                                <div>
                                    <a class="text-decoration-none text-white" href="viewnews.php">View News</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <h2 class="fw-bolder rounded-top-4 py-3 text-center">Records Update</h2>
                        <form class="px-3" action="#" method="POST">
                            <div class="first-name-form py-4">
                                <input class="input-custom py-2 ps-3 w-100 rounded-pill border border-black" type="text" placeholder="First name" name="fname" value="<?php echo $result['fname']; ?>" required>
                            </div>
                            <div class="last-name-form pb-4">
                                <input class="input-custom py-2 ps-3 w-100 rounded-pill border border-black" type="text" placeholder="Last name" name="lname" value="<?php echo $result['lname']; ?>" required>
                            </div>
                            <div class="number-form pb-4">
                                <input class="input-custom py-2 ps-3 w-100 rounded-pill border border-black" type="number" placeholder="Mobile no." name="m_number" value="<?php echo $result['m_number']; ?>" required>
                            </div>
                            <div class="email-form pb-4">
                                <input class="input-custom py-2 ps-3 w-100 rounded-pill border border-black" type="email" placeholder="E-mail" name="email" value="<?php echo $result['email']; ?>" required>
                            </div>
                            <div class="password-form pb-4">
                                <input class="input-custom py-2 ps-3 w-100 rounded-pill border border-black" type="password" placeholder="Password" name="password" value="<?php echo $result['password']; ?>" required>
                            </div>
                            <div class="conform-pw-form pb-4">
                                <input class="input-custom py-2 ps-3 w-100 rounded-pill border border-black" type="password" placeholder="Conform password" name="c_password" value="<?php echo $result['c_password']; ?>" required>
                            </div>
                            <div class="pb-4">
                                <label class="fw-bold" for="">Gender : </label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input border border-black" type="radio" name="gender" value="Male" required <?php
                                                                                                                                            if ($result['gender'] == "Male") {
                                                                                                                                                echo "checked";
                                                                                                                                            }
                                                                                                                                            ?>>
                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input border border-black" type="radio" name="gender" value="Female" required <?php
                                                                                                                                            if ($result['gender'] == "Female") {
                                                                                                                                                echo "checked";
                                                                                                                                            }
                                                                                                                                            ?>>
                                    <label class="form-check-label" for="inlineRadio2">Female</label>
                                </div>
                            </div>
                            <div class="pb-4">
                                <label class="fw-bold" for="">Country : </label>
                                <select title="Country" name="country" required>
                                    <option value="">Select</option>
                                    <option value="India" <?php
                                                            if ($result['country'] == 'India') {
                                                                echo "selected";
                                                            }
                                                            ?>>India</option>
                                    <option value="America" <?php
                                                            if ($result['country'] == 'America') {
                                                                echo "selected";
                                                            }
                                                            ?>>America</option>
                                    <option value="Russia" <?php
                                                            if ($result['country'] == 'Russia') {
                                                                echo "selected";
                                                            }
                                                            ?>>Russia</option>
                                    <option value="Germany" <?php
                                                            if ($result['country'] == 'Germany') {
                                                                echo "selected";
                                                            }
                                                            ?>>Germany</option>
                                    <option value="China" <?php
                                                            if ($result['country'] == 'China') {
                                                                echo "selected";
                                                            }
                                                            ?>>China</option>
                                    <option value="Sri Lanka" <?php
                                                                if ($result['country'] == 'Sri Lanka') {
                                                                    echo "selected";
                                                                }
                                                                ?>>Sri Lanka</option>
                                </select>
                            </div>
                            <div class="check-custom pb-5">
                                <label for="" class="check">
                                    <input type="checkbox" required>
                                </label> <span>By clicking 'Submit,' you confirm that we have your consent to contact you by phone, email, or text message.Calls may be recorded for training purposes.Data and messaging rates may apply.</span>
                            </div>
                            <div class="pb-5 text-center">
                                <input type="submit" value="Update details" class="btn bg-primary text-white" name="update">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container-fluid p-0 bg-info">
            <div class="container">
                <div class="row py-4"></div>
            </div>
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script type="text/javascript">
    $(".accordion-title").click(function() {
        $(this).next().slideToggle();
        $(this).parent().siblings().find('.accordion-content').slideUp(1000);
        $(this).find('.fa-caret-down').toggle();
        $(this).find('.fa-caret-up').toggle();
    });
</script>

</html>


<?php


if (isset($_POST['update'])) {

    $fname    = $_POST['fname'];
    $lname    = $_POST['lname'];
    $number   = $_POST['m_number'];
    $email    = $_POST['email'];
    $pwd      = $_POST['password'];
    $cpwd     = $_POST['c_password'];
    $gender   = $_POST['gender'];
    $country  = $_POST['country'];

    $query = "UPDATE addrecords SET fname = '$fname',lname = '$lname',m_number = '$number',email = '$email',password = '$pwd',c_password = '$cpwd',gender = '$gender',country = '$country' WHERE id = '$id'";

    $data  = mysqli_query($conn, $query);

    if ($data) {
        echo "<script> alert('Record updated') </script>";

?>

        <meta http-equiv="refresh" content="0; url = http://localhost/devopsfarm/admin-panel/viewrecords.php" />

<?php
    } else {
        echo "<script> alert('Failed to update') </script>";
    }
}
?>