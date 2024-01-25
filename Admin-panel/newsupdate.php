<?php
include("connection.php");
?>

<?php

$id = $_GET['id'];

$query = "SELECT * FROM addnews WHERE news_id = '$id'";

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
                                <div class="pb-2">
                                    <a class=" text-decoration-none text-white" href="addnews.php">Add News</a>
                                </div>
                                <div>
                                    <a class="text-decoration-none text-white" href="viewnews.php">View News</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <h2 class="fw-bolder rounded-top-4 py-3 text-center">News Update</h2>
                        <form class="px-3 w-50 form-custom" action="#" method="POST">
                            <div class="first-name-form py-4">
                                <h5>News title</h5>
                                <input class="input-custom py-2 ps-3 w-100  border border-black" type="text" name="news_title" value="<?php echo $result['news_title']; ?>" required>
                            </div>
                            <div class="py-4">
                                <h5>Description:</h5>
                                <textarea class="w-100" rows="10" name="description" required><?php echo $result['news_des']; ?></textarea>
                            </div>
                            <div class="pb-4">
                                <h5>Expiry Date:</h5>
                                <input class="py-2 ps-3" type="date" name="news_date" value="<?php echo $result['news_date']; ?>" required>
                            </div>
                            <div class="pb-4">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input border border-black" type="radio" name="status" value="1" required <?php
                                                                                                                                        if ($result['news_status'] == "1") {
                                                                                                                                            echo "checked";
                                                                                                                                        }
                                                                                                                                        ?>>
                                    <label class="form-check-label" for="inlineRadio1">Active</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input border border-black" type="radio" name="status" value="0" required <?php
                                                                                                                                        if ($result['news_status'] == "0") {
                                                                                                                                            echo "checked";
                                                                                                                                        }
                                                                                                                                        ?>>
                                    <label class="form-check-label" for="inlineRadio2">Deactivate</label>
                                </div>
                            </div>
                            <div class="pb-5 text-center">
                                <input type="submit" value="Update" class="btn bg-primary text-white" name="update">
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

    $ntitle          = $_POST['news_title'];
    $ndescription    = $_POST['description'];
    $ndate           = $_POST['news_date'];
    $nstatus         = $_POST['status'];

    $query = "UPDATE addnews SET news_title = '$ntitle',news_des = '$ndescription',news_date = '$ndate',news_status = '$nstatus' WHERE news_id = '$id'";

    $data  = mysqli_query($conn, $query);

    if ($data) {
        echo "<script> alert('Record updated') </script>";

?>

        <meta http-equiv="refresh" content="0; url = http://localhost/devopsfarm/admin-panel/viewnews.php" />

<?php
    } else {
        echo "<script> alert('Failed to update') </script>";
    }
}
?>