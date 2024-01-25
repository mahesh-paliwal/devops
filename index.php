<?php
include("Admin-panel/connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devops Farm</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/media.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
</head>

<body id="homePage">
    <header>
        <div class="container-fluid p-0 header-custom">
            <div class="container">
                <div class="navbar navbar-expand-md">
                    <a class="navbar-brand">
                        <img src="Images/Screenshot 2023-12-04 140754.png" width="80" height="80" alt="">
                    </a>
                    <button class="navbar-toggler bg-body" data-bs-toggle="collapse" data-bs-target="#menuBar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end">
                        <ul class="navbar-nav fw-normal fs-5">
                            <li class="nav-item">
                                <a href="#homePage" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="business.php" class="nav-link">Business</a>
                            </li>
                            <li class="nav-item-dropdown">
                                <a class="nav-link dropdown-toggle" href="" type="button">Learning Paths</a>
                                <ul class="dropdown-menu p-0 all-course-custom">
                                    <li>
                                        <a class="dropdown-item nav-link dropdown-toggle a-blue-custom" href="" type="button">All Courses</a>
                                        <ul class="dropdown-menu-item p-0 all-course-custom">
                                            <li>
                                                <a class="dropdown-item" href="linux.php">Linux </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="docker.php">Docker</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="python.php">Python</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="terraform.php">Terraform</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="kubernetes.php">Kubernetes</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="java.php">Java</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="ansible.php">Ansible</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="aws.php">AWS</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="jenkins.php">Jenkins</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="github.php">GitHub</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="chatgpt.php">ChatGPT</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="mysql.php">MySQL</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="offcanvas offcanvas-start" id="menuBar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#homePage" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="business.php" class="nav-link">Business</a>
                        </li>
                        <li class="nav-item-dropdown">
                            <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown">Learning Paths</a>
                            <ul class="dropdown-menu p-0 all-course-custom">
                                <li>
                                    <a class="dropdown-item nav-link dropdown-toggle a-blue-custom" href="" type="button">All Courses</a>
                                    <ul class="dropdown-menu p-0 all-course-custom">
                                        <li>
                                            <a class="dropdown-item" href="linux.php">Linux </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="docker.php">Docker</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="python.php">Python</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="terraform.php">Terraform</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="kubernetes.php">Kubernetes</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="java.php">Java</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="ansible.php">Ansible</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="aws.php">AWS</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="jenkins.php">Jenkins</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="github.php">GitHub</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="chatgpt.php">ChatGPT</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="mysql.php">MySQL</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container-fluid p-0 section-custom">
        <div>
            <marquee behavior="" direction="" onmouseover="stop()" onmouseout="start()">
                <?php

                $query = "SELECT * FROM addnews WHERE news_status=1";
                $data  = mysqli_query($conn, $query);

                while ($fetch = mysqli_fetch_assoc($data)) {
                ?>

                    <a href=""><?php echo $fetch['news_title'] ?></a> &nbsp;

                <?php } ?>

            </marquee>
        </div>
            <div class="container poster-custom">
                <div class="row pb-5">
                    <div class="col-md-7 pt-5 mt-5 border-primary">
                        <span class="fs-1 lh-sm text-white fw-bolder">LAUNCH YOUR</br>CAREER IN TECH</span>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-4 pt-5 pb-5 mt-5">
                        <h2 class="text-center pb-4 text-white">TECHIES,</h2>
                        <p class="fs-4 lh-sm text-secondary">First time in Jodhpur, we aew providing professional <b class="text-white">training</b> in industry leading technologies that will help you to grab a chance to work in top <b class="text-white">MNCs</b></p>
                        <h3 class="text-center fw-bolder fs-1 text-white">WE OFFER</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0 section-custom-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 pt-4 pb-3 text-white text-center">
                        <p class="fw-bolder fs-1">2 DAYS FREE DEMO & <span>CAREER GUIDANCE IN IT</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0 bg-dark-subtle section-custom-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 image-custom1">
                        <div class="row py-5">
                            <div class="col-md-2">
                                <img class="border border-white bg-body rounded-circle" src="Images/2721530-200.png" width="60" height="60" alt="">
                            </div>
                            <div class="col-md-10">
                                <h3>DEVOPS</h3>
                                <p class="py-2">DevOps: Bridging Development and Operations. Learn the art of seamless collaboration,automation, and continuous delivery to accelerate software development and enhance efficiency.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 image-custom2">
                        <div class="row py-5">
                            <div class="col-md-2">
                                <img class="border border-white  rounded-circle" src="Images/cloud.jpg" width="60" height="60" alt="">
                            </div>
                            <div class="col-md-10">
                                <h3>CLOUD & INFRASTRUCTURE</h3>
                                <p class="py-2">Explore the Cloud: Unleash the Power of Scalable Infrastructure. Discover the world of cloud computing and infrastructure,where flexibility,cost-efficiency, and reliability combine to revolutionize the way businesses operate and innovate.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 image-custom3">
                        <div class="row py-5">
                            <div class="col-md-2">
                                <img class="border border-white bg-body rounded-circle" src="Images/2721530-200.png" width="60" height="60" alt="">
                            </div>
                            <div class="col-md-10">
                                <h3>CHATGPT & AI</h3>
                                <p class="py-2">Discover the world of Artificial Intelligence and ChatGPT. Dive into the fundamentals of AI, explore the capabilities of ChatGPT, and learn how these technologies are shaping our world. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0 section-custom-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 pt-3 text-white">
                        <p class="fs-4">Technical and job oriented trainings by faculties with 10+ year of industry experience.</p>
                        <h2 class="pb-2">SALIENT FEATURES</h2>
                        <ul class="fs-5 lh-lg">
                            <li><i class="fa-regular fa-hand-point-right text-danger pe-2"></i>IT training on latest technologies</li>
                            <li><i class="fa-regular fa-hand-point-right  text-danger pe-2"></i>Live project trainings</li>
                            <li><i class="fa-regular fa-hand-point-right  text-danger pe-2"></i>Certification after completion</li>
                            <li><i class="fa-regular fa-hand-point-right  text-danger pe-2"></i>Lifetime access to recordings and materials</li>
                            <li><i class="fa-regular fa-hand-point-right  text-danger pe-2"></i>Job assistance & career guidance</li>
                            <li><i class="fa-regular fa-hand-point-right  text-danger pe-2"></i>Resume & interview preparation</li>
                            <li><i class="fa-regular fa-hand-point-right  text-danger pe-2"></i>Focus on hands-on</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0 bg-dark-subtle section-custom-5">
            <div class="container py-5">
                <div class="row pb-3 text-black">
                    <h1 class="text-center fw-bold">COURSES</h1>
                </div>
                <div class="row">
                    <div class="owl-carousel owl-theme">
                        <div class="item rounded-5">
                            <div>
                                <a href="linux.php"><img src="Images/Copy of Linux master class new.png" width="100%" alt=""></a>
                            </div>
                            <div class="img-hover-custom">
                                <h2 class="text-center fs-3 text-white">LINUX</h2>
                            </div>
                        </div>
                        <div class="item rounded-5">
                            <div>
                                <a href="docker.php"><img src="Images/Copy of D master class.png" width="100%" alt=""></a>
                            </div>
                            <div class="img-hover-custom">
                                <h2 class="text-center fs-3 text-white">DOCKER</h2>
                            </div>
                        </div>
                        <div class="item rounded-5">
                            <div>
                                <a href="python.php"><img src="Images/Copy of Python.png" width="100%" alt=""></a>
                            </div>
                            <div class="img-hover-custom">
                                <h2 class="text-center fs-3 text-white">PYTHON</h2>
                            </div>
                        </div>
                        <div class="item rounded-5">
                            <div>
                                <a href="terraform.php"><img src="Images/Copy of terraform.png" width="100%" alt=""></a>
                            </div>
                            <div class="img-hover-custom">
                                <h2 class="text-center fs-3 text-white">TERRAFORM</h2>
                            </div>
                        </div>
                        <div class="item rounded-5">
                            <div>
                                <a href="kubernetes.php"><img src="Images/D (1).png" width="100%" alt=""></a>
                            </div>
                            <div class="img-hover-custom">
                                <h2 class="text-center fs-3 text-white">KUBERNETES</h2>
                            </div>
                        </div>
                        <div class="item rounded-5">
                            <div>
                                <a href="java.php"><img src="Images/Copy of java master.png" width="100%" alt=""></a>
                            </div>
                            <div class="img-hover-custom">
                                <h2 class="text-center fs-3 text-white">JAVA</h2>
                            </div>
                        </div>
                        <div class="item rounded-5">
                            <div>
                                <a href="ansible.php"><img src="Images/Copy of masterclass.png" width="100%" alt=""></a>
                            </div>
                            <div class="img-hover-custom">
                                <h2 class="text-center fs-3 text-white">ANSIBLE</h2>
                            </div>
                        </div>
                        <div class="item rounded-5">
                            <div>
                                <a href="aws.php"><img src="Images/Copy of Aws masterclass.png" width="100%" alt=""></a>
                            </div>
                            <div class="img-hover-custom">
                                <h2 class="text-center fs-3 text-white">AWS</h2>
                            </div>
                        </div>
                        <div class="item rounded-5">
                            <div>
                                <a href="jenkins.php"><img src="Images/Copy of Jenkins MasterClass.png" width="100%" alt=""></a>
                            </div>
                            <div class="img-hover-custom">
                                <h2 class="text-center fs-3 text-white">JENKINS</h2>
                            </div>
                        </div>
                        <div class="item rounded-5">
                            <div>
                                <a href="github.php"><img src="Images/for website.png" width="100%" alt=""></a>
                            </div>
                            <div class="img-hover-custom">
                                <h2 class="text-center fs-3 text-white">GitHub</h2>
                            </div>
                        </div>
                        <div class="item rounded-5">
                            <div>
                                <a href="mysql.php"><img src="Images/for website (1).png" width="100%" alt=""></a>
                            </div>
                            <div class="img-hover-custom">
                                <h2 class="text-center fs-3 text-white">MySQL</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container-fluid p-0 section-custom-6" id="contactUs">
            <div class="container pt-5">
                <div class="row">
                    <div class="col-md-6 text-center">
                        <ul>
                            <li class="fw-medium fs-4 text-white pb-4"><i class="fa-regular fa-envelope"></i> E-MAIL<br /><span><a href="mailto:info@romofyagroindia.com" class="text-decoration-none fs-5">devopsfarmer@gmail.com</a></span></li>
                            <li class="fw-medium fs-4 text-white pb-4"><i class="fa-solid fa-phone-volume"></i> CALL NOW<br /><span><a href="+91 8769511173 +91 9971566583" class="text-decoration-none fs-5">+91 8769511173<br />+91 9971566583</a></span></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="text-white fw-bolder fs-2">
                            <li class="fw-medium fs-4 text-white"><i class="fa-sharp fa-solid fa-location-dot"></i> DEVOPS FARM,BHASKAR CIRCLE,RATANADA,JODHPUR(RAJ.)</li>
                            <li class="pt-5"><i class="fa-brands fa-square-whatsapp"></i> <i class="fa-brands fa-square-facebook"></i> <i class="fa-brands fa-square-instagram"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
    $(function() {
        // Owl Carousel
        var owl = $(".owl-carousel");
        owl.owlCarousel({
            items: 3,
            margin: 10,
            loop: true,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
        });

    });
</script>

</html>