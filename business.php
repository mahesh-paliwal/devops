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
<body>
    <header>
        <div class="container-fluid p-0 business-header-custom">
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
                                <a href="index.php" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="business.php" class="nav-link">Business</a>
                            </li>
                            <li class="nav-item-dropdown">
                                <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown">Learning Paths</a>
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
                            <a href="index.php" class="nav-link">Home</a>
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
                                            <a class="dropdown-item" href="linux.html">Linux </a>
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
        <div class="container-fluid p-0 business-section-custom-1">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="text-white fw-normal pt fs-3">Build Tomorrow's</h5>
                        <h1 class="text-white fw-normal">DevOps Experts <span class="text-white">Today</span></h1>
                        <p class="text-secondary fs-5 pt-3">You don’t learn to ride a bike by reading about it.</p>
                        <p class="text-secondary fs-5 lh-1 pt-2">Drive organization-wide DevOps excellence with practical, hands-on learning tailored to engineers. Up-skill your team and shorten ramp times with effective simulated labs on the latest technologies in containerization and Cloud innovations.</p>
                        <div class="row pt-5">
                            <div class="col-md-7">
                                <form action="">
                                    <div class="form-custom pt-3">
                                        <div class="input_placeholder fs-5 text-secondary ps-2">Seats</div>
                                        <div class="w-embed bg-body border-0 py-1 rounded-pill">
                                            <input class="number-custom ps-3 fs-4 py-2 border-0 rounded-pill" type="number" id="myNumber" min="2" value="2" max="20"><span><input class="py-2 fs-5 bg-black text-white px-3 border-0 rounded-pill" type="submit" value="Buy Seats" id="checkout-button"></span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-5 text-white paid-custom">
                                <p >Paid Annually</p>
                                <p class="text-secondary fs-5"><del>INR 17500</del></p>
                                <span class="fs-4">INR 12250</span> &nbsp; <span class="bg-primary rounded-pill px-2 fs-6">30% OFF</span>
                                <P class="lh-lg text-secondary">/user/year</P>
                            </div>
                        </div>
                        <span><a class="text-decoration-none text-white bg-info rounded-pill px-5 py-2 fs-6" href="">Questions? Talk To Us</a></span>
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0 business-section-custom-2">
            <div class="container py-5">
                <div class="row pt-5 justify-content-around">
                    <div class="col-md-1 pt-2">
                        <img src="Images/64f69240c304019c72ea17eb_CorporateLearningManagementSystems_Leader_Europe_Leader.png" width="100%" alt="">
                    </div>
                    <div class="col-md-1">
                        <img src="Images/64f69240c304019c72ea17d5_OnlineCourseProviders_MostImplementable_Enterprise_Total.png" width="100%" alt="">
                    </div>
                    <div class="col-md-1">
                        <img src="Images/64f6924054e53ad5316c2731_CorporateLearningManagementSystems_Leader_Leader.png" width="100%" alt="">
                    </div>
                    <div class="col-md-1">
                        <img src="Images/64f6924066f2a168519893b9_CorporateLearningManagementSystems_Leader_Small-Business_Leader.png" width="100%" alt="">
                    </div>
                    <div class="col-md-1">
                        <img src="Images/64f6923f08e977747f4f1eb1_VirtualITLabs_BestRelationship_Total.png" width="100%" alt="">
                    </div>
                    <div class="col-md-1">
                        <img src="Images/64f6923f66f2a168519891f7_OnlineCourseProviders_BestResults_Enterprise_Total.png" width="100%" alt="">
                    </div>
                    <div class="col-md-1">
                        <img src="Images/64f6923f32f87d8b036fd668_OnlineCourseProviders_BestUsability_Enterprise_Total.png" width="100%" alt="">
                    </div>
                    <div class="col-md-1">
                        <img src="Images/64f6923e94370bcdf085a4a9_OnlineCourseProviders_Leader_Enterprise_Leader.png" width="100%" alt="">
                    </div>
                    <div class="col-md-1">
                        <img src="Images/64f6923e66f2a16851988fa9_TechnicalSkillsDevelopment_BestEstimatedROI_Enterprise_Roi.png" width="100%" alt="">
                    </div>
                </div>
            </div>
            <div class="container py-5">
                <div class="row text-center pt-4 justify-content-center align-items-center  black-custom">
                    <h4 class="text-white pb-4">Trusted By Thousands Of Brands</h4>
                    <div class="col-md-1 col-sm-12">
                        <img src="Images/633ac432e851f07af7f2bc58_Vmware.webp" width="100%" alt="">
                    </div>
                    <div class="col-md-1 col-sm-12">
                        <img src="Images/633ac4325eab0df0ae306e9a_Microsoft2@x.webp" width="100%"alt="">
                    </div>
                    <div class="col-md-1">
                        <img src="Images/633ac432328f56846eb4efab_Google2@x.webp" width="100%" alt="">
                    </div>
                    <div class="col-md-1">
                        <img src="Images/633ac43237b87264c5e2428d_Dell.webp" width="60%" alt="">
                    </div>
                    <div class="col-md-1">
                        <img src="Images/R 1.png" width="60%" alt="">
                    </div>
                    <div class="col-md-1">
                        <img src="Images/633ac4327b7cb7fdabcaa7ba_Pivotal.webp" width="100%" alt="">
                    </div>
                    <div class="col-md-1">
                        <img src="Images/633ac4320a949572d8522690_Amazon.webp" width="100%" alt="">
                    </div>
                </div>
            </div>
            <div class="container py-5">
                <div class="row gap-5 justify-content-center">
                    <div class="col-md-3 py-5 text-white text-center rounded-5 classic-gradient">
                        <h1>3 Weeks</h1>
                        <p>Time needed for the team at VMWare to achieve <span class="fw-bolder text-secondary">Kubernetes Certifications</span> with KodeKloud.</p>
                        <p>(Source:Success Stories)</p>
                    </div>
                    <div class="col-md-3 py-5 text-white text-center rounded-5 classic-gradient">
                        <h1>50%</h1>
                        <p><span class="fw-bolder text-secondary">Reduction in downtime</span> for softwares & Apps, when team are sufficiently trained.</p>
                        <p>(Source:State of DevOps)</p>
                    </div>
                    <div class="col-md-3 py-5 text-white text-center rounded-5 classic-gradient">
                        <h1>2X</h1>
                        <p>Team capabilities in <span class="fw-bolder text-secondary">deploying containers</span> when teams are sufficiently trained.</p>
                        <p>(Source:CNCF)</p>
                    </div>
                </div>
            </div>
            <div class="container py-5">
                <h1 class="text-center text-white classic-gradient-2 py-1">“It's detailed, vast, and in-depth.”</h1>
                <p class="text-center text-white fs-5 pb-5">Our students love the great courses and amazing hands on labs at KodeKloud</p>
                <div class="row gap-5 justify-content-center">
                    <div class="col-md-3 border border-white rounded-4 p-0">
                        <img class="rounded-4" src="Images/64f6e016b36f73bc5a711f63_LinkedIn_Ad_-_Alessandro_Affinito_Dark_1.webp" width="100%" alt="">
                    </div>
                    <div class="col-md-3 border border-white rounded-4 p-0">
                        <img class="rounded-4" src="Images/64f6e015bff4e5e3f4aaa725_LinkedIn_Ad_-_Jacky_Lee_Dark_2.webp" width="100%" alt="">
                    </div>
                    <div class="col-md-3 border border-white rounded-4 p-0">
                        <img class="rounded-4" src="Images/64f6e053b5284d375a14e19c_LinkedIn_Ad_-_Anthony_Andrades_Dark_1.webp" width="100%" alt="">
                    </div>
                </div>
            </div>
            <div class="container py-5 rounded-5">
                <div class="row py-5 rounded-5 justify-content-around classic-gradient-3">
                    <p class="text-center text-white fw-semibold">Your organization’s need for DevOps & Cloud, all under one roof.</p>
                    <h2 class="text-center text-white pb-5">Hands-on-practice, it’s the only way to learn.</h2>
                    <div class="col-md-3">
                        <h1 class="text-center text-white fw-medium pb-2">65%</h1>
                        <p class="text-center text-white">Of Organizations reported faster time-to-market when teams adopt tools like Kubernetes</p>
                        <p class="text-center text-dark">Source:https://www.cncf.io/reports/cncf-annual-survey-2022/</p>
                    </div>
                    <div class="col-md-3">
                        <h1 class="text-center text-white fw-medium pb-2">86%</h1>
                        <p class="text-center text-white">Cost Reduction in rework & deployment costs with the right DevOps Skills & Training</p>
                        <p class="text-center text-dark">Source:https://www.veritis.com/blog/derive-roi-from-devops-an-overview-of-performance-and-metrics/</p>
                    </div>
                    <div class="col-md-3">
                        <h1 class="text-center text-white fw-medium pb-2">$80.3M / Year</h1>
                        <p class="text-center text-white">Savings from improvements in failure and deployment downtime</p>
                        <p class="text-center text-dark">Source:https://www.veritis.com/blog/derive-roi-from-devops-an-overview-of-performance-and-metrics</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0 business-section-custom-3">
            <div class="container py-5">
                <div class="row pb-5">
                    <h2 class="text-center text-white fw-normal">The Best Learning Platform</h2>
                    <h2 class="text-center text-white fw-normal"> The World For <span class="classic-gradient-4 fw-medium">DevOps & Cloud</span> And</h2>
                    <h2 class="text-center text-white fw-normal">That’s Not According To Us.</h2>
                    <p class="text-white text-center fs-5 pt-3">Join Over1,000,000+Students & Enterprises On Their Business Transformation</p>
                    <div class="col-md-7 py-5">
                        <div class="content-block height">
                            <ul class="text-white fs-5 pb-5">
                                <li>Team members get FULL access to all things KodeKloud</li>
                                <li>As a team lead - Access to completion metrics, insights, and student progress statistics.</li>
                                <li>Centralized user management</li>
                                <li>Dedicated Business Account Manager</li>
                                <li>Centralized and easy one-time billing</li>
                                <li>All75+premium courses</li>
                                <li>500+Hands-on Guided Lab Environments</li>
                                <li>Multiple Learning Paths</li>
                                <li>Quizzes, and Practical Exams</li>
                                <li>65+DevOps and 3 Cloud Playgrounds</li>
                                <li>1x License Transfer Enabled - pass on your underutilized licenses to other team members</li>
                                <li>Live Instructor-Led-Sessions exclusively for organizational learning </li>
                            </ul>
                        </div>
                        <span class="ps-5"><a class="text-decoration-none text-white bg-info rounded-pill px-5 py-2 fs-6" href="">Questions? Talk To Us</a></span>
                    </div>
                    <div class="col-md-5 ps-5  group-img-custom">
                        <img src="Images/business_p1.webp" width="100%" alt="">
                    </div>
                </div>
                <div class="row py-5 rounded-5 classic-gradient-5">
                    <div class="col-md-7">
                        <h1 class="text-white text-center pb-5">Unsure? Speak To Our Enterprise Team And Request For A Free Trial</h1>
                        <span class="ps-4"><a class="text-decoration-none text-black bg-white rounded-pill px-5 py-3 fs-5" href="">Talk To Us</a></span><span class="ps-5"><a class="text-decoration-none text-secondary fs-5" href="">T&C Applies *</a></span>
                    </div>
                    <div class="col-md-5">
                        <img src="Images/6425761b943fc87ef7e09c56_Group 1000002836-p-500.webp" width="80%" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0 business-section-custom-4">
            <div class="container">
                <div class="row py-5">
                    <h1 class="text-white text-center pb-4">Our EdTech platform includes over75+DevOps courses and over500+hands-on labs.</h1>
                    <p class="text-center text-white pb-5">We also offer 8 learning paths, which make it super easy to navigate our platform. We don’t focus on just creating courses, we create immersive learning experiences which turn even absolute beginners into full-fledged DevOps experts.</p>
                    <div class="pb-5">
                        <img src="Images/643112c58e9cf57c7150dd3f_Group_1000002848_1 (1).webp" width="100%" alt="">
                    </div>
                    <span class="text-center"><a class="text-decoration-none text-white bg-info rounded-pill px-5 py-3 fs-5" href="">Questions? Talk To Us</a></span>
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
                            <li class="fw-medium fs-4 text-white pb-4"><i class="fa-regular fa-envelope"></i> E-MAIL<br/><span><a href="mailto:info@romofyagroindia.com" class="text-decoration-none fs-5">devopsfarmer@gmail.com</a></span></li>
                            <li class="fw-medium fs-4 text-white pb-4"><i class="fa-solid fa-phone-volume"></i> CALL NOW<br/><span><a href="+91 8769511173 +91 9971566583" class="text-decoration-none fs-5">+91 8769511173<br/>+91 9971566583</a></span></li>
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

<script src="script.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

</html>