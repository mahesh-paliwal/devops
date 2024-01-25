<?php
include("connection.php");
?>

<?php

$where = "";
if (isset($_POST['search'])) {
    $title = $_POST['news_title'];

    if ($title != "") {
        $where = " and news_title like '%$title%'";
    }
}

?>

<?php

if (isset($_POST['dele'])) {
    $ids = $_POST['del'];

    foreach ($ids as $v) {
        $query = "DELETE FROM addnews WHERE news_id = '$v'";

        $data = mysqli_query($conn, $query);
    }
    if ($data) {
        echo "<script> alert('Record Deleted') </script>";

?>

        <meta http-equiv="refresh" content="0; url = http://localhost/devopsfarm/admin-panel/viewnews.php" />

<?php
    } else {
        echo "<script> alert('Failed to delete') </script>";
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
    <title>View News</title>
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
                        <h4 class="pb-2 text-secondary">Enquries</h4>
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
                                    <a class="text-decoration-none text-white" href="addnews.php">Add News</a>
                                </div>
                                <div>
                                    <a class="text-decoration-none text-white" href="viewnews.php">View News</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <h2 class="fw-bolder rounded-top-4 py-3 text-center">View News</h2>
                        <form action="#" class="w-100 text-end" method="POST">
                            <input type="text" name="news_title" placeholder="Enter the title">
                            <input type="submit" value="search" name="search">
                        </form>
                        <div class="pt-5">
                            <?php

                            $query = "SELECT * FROM addnews WHERE 1=1 $where";
                            $data  = mysqli_query($conn, $query);

                            $total = mysqli_num_rows($data);

                            //echo $total;

                            if ($total != 0) {
                            ?>
                                <form action="" method="POST">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr class="text-center">
                                                <th class="text-center" scope="col">
                                                    <input type="submit" name="dele" value="Delete">
                                                </th>
                                                <th>ID</th>
                                                <th>News Title</th>
                                                <th>News Description</th>
                                                <th>News Date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        while ($result = mysqli_fetch_assoc($data)) {
                                            echo   "<tr class='row_custom text-center'>
                                                        <td><input type='checkbox' name ='del[]' value ='$result[news_id]'></td>
                                                        <td>$result[news_id]</td>
                                                        <td>$result[news_title]</td>
                                                        <td>$result[news_des]</td>
                                                        <td>$result[news_date]</td>
                                                        <td>$result[news_status]</td>
                                                        <td class ='action_custom'>
                                                            <a href='newsupdate.php?id=$result[news_id]'><button type='button' class='update_btn px-2 py-1 border-0 rounded-3 fw-bold text-white bg-success'>Edit / Update</button></a>

                                                            <a href='newsdelete.php?id=$result[news_id]'><button type='button' class='delete_btn px-3 py-1 border-0 rounded-3 fw-bold text-white bg-danger' onclick = 'return check_delete()'>Delete</button></a>
                                                        </td>
                                                        </tr>";
                                        }
                                    } else {
                                        echo "no";
                                    }
                                        ?>
                                        </tbody>
                                    </table>
                                </form>
                        </div>
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
        $(this).parent().siblings().find('.accordion-content').slideUp();
        $(this).find('.fa-caret-down').toggle();
        $(this).find('.fa-caret-up').toggle();
    });
</script>

</html>