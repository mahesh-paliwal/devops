<?php
include("connection.php");
?>

<?php

$where = "";
if (isset($_POST['search'])) {
    $fname = $_POST['search_name'];

    if ($fname != "") {
        $where = " and fname like '%$fname%'";
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
    <title>View Records</title>
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
                        <h2 class="fw-bolder rounded-top-4 py-3 text-center">View Records</h2>
                        <form action="#" class="w-100 text-end" method="POST">
                            <input type="text" name="search_name" placeholder="Search name">
                            <input type="submit" value="Search" name="search">
                        </form>
                        <div class="pt-5">
                            <?php

                            $query = "SELECT * FROM addrecords WHERE 1=1 $where";
                            $data  = mysqli_query($conn, $query);

                            $total = mysqli_num_rows($data);

                            //echo $total;

                            if ($total != 0) {
                            ?>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="text-center">
                                            <th>ID</th>
                                            <th>First name</th>
                                            <th>Last name</th>
                                            <th>M.number</th>
                                            <th>E-mail</th>
                                            <th>Password</th>
                                            <th>C_Password</th>
                                            <th>Gender</th>
                                            <th>Country</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    while ($result = mysqli_fetch_assoc($data)) {
                                        echo   "<tr class='row_custom text-center'>
                                                        <td>$result[id]</td>
                                                        <td>$result[fname]</td>
                                                        <td>$result[lname]</td>
                                                        <td>$result[m_number]</td>
                                                        <td>$result[email]</td>
                                                        <td>$result[password]</td>
                                                        <td>$result[c_password]</td>
                                                        <td>$result[gender]</td>
                                                        <td>$result[country]</td>
                                                        <td class ='action_custom'>
                                                            <a href='recordsupdate.php?id=$result[id]'><input type='submit' value='Edit / Update' class='update_btn px-2 py-1 border-0 rounded-3 fw-bold text-white bg-success'></a>

                                                            <a href='recordsdelete.php?id=$result[id]'><input type='submit' value='Delete' class='delete_btn px-3 py-1 border-0 rounded-3 fw-bold text-white bg-danger' onclick = 'return check_delete()'></a>
                                                        </td>
                                                        </tr>";
                                    }
                                } else {
                                    echo "no";
                                }
                                    ?>
                                    </tbody>
                                </table>
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