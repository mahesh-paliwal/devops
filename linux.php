<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linux Devops Farm</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/media.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
</head>
<body>
    <div class="container-fluid p-0 linux-header-custom">
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
    <div class="container-fluid p-0 linux-section-custom">
        <div class="container pt-5">
            <div class="row pt-5">
                <h1 class="pt-5 text-white fw-bolder">DevOps Engineer<br/>Industrial Training (with internship)</h1>
                <p class="pt-3 text-white">Designed to give you hands on experience on DevOps tools and best practices about continuous development,<br/> continuous testing, and configuration management, including continuous integration and deployment and<br/> continuous monitoring of the software throughout its development life cycle.</p>
                <div class="row pt-5 pb-4">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-2">
                                        <i class="fa-sharp fa-solid fa-users-rectangle text-primary fs-1"></i>
                                    </div>
                                    <div class="col-md-10 lh-1 ps-3 text-white">
                                        <h6 class="fw-bold">Learn with live instructors</h6>
                                        <p class="fw-lighter">three times weekly</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-2">
                                        <i class="fa-sharp fa-solid fa-folder-open text-primary fs-1"></i>
                                    </div>
                                    <div class="col-md-10  lh-1 text-white">
                                        <h6 class="fw-bold">project-based learning</h6>
                                        <p class="fw-lighter">Build an impressive portfolio</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-2">
                                        <i class="fa-sharp fa-solid fa-magnifying-glass-plus text-primary fs-1"></i>
                                    </div>
                                    <div class="col-md-10 ps-1 lh-1 text-white">
                                        <h6 class="fw-bold">Job assistance provided</h6>
                                        <p class="fw-lighter">Work 1-on-1 with a career coach</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <span class="pb-5"><button class="bg-primary border-0 rounded-2 fs-5 py-2 px-4 text-white">Start Learning</button></span>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0 linux-section-custom-2">
        <div class="container bg-dark-subtle con-program-custom">
            <div class="row ps-5 pe-5 py-5 align-items-center">
                <div class="col-md-3 lh-1 border-custom">
                    <h4 class="fw-bolder text-black">Program Cost</h4>
                    <p>Upfront Cost: From <span class="fw-bold">$1,499</span></p>
                </div>
                <div class="col-md-3 lh-1 border-0 border-start border border-black border-custom">
                    <h4 class="fw-bolder text-black">Course length</h4>
                    <p>5 Months</p>
                </div>
                <div class="col-md-3 lh-1 border-0 border-start border border-black border-custom">
                    <h4 class="fw-bolder text-black">Start Date</h4>
                    <p>January 27, 2024</p>
                </div>
                <div class="col-md-3 btn-custom">
                    <button class="p-3 fs-4 px-5 border border-black rounded-3">Enroll now</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0 linux-section-custom-3">
        <div class="container linux-con-custom-3">
            <div class="row pb-5">
                <div class="col-md-5">
                    <h1 class="fw-bolder pt-5">Drive DevOps culture and ship code faster</h1>
                    <p class="pb-5">DevOps is the answer, you might have heard - but what is the question again? What is DevOps trying to solve? This program is designed to give you hands-on experience on DevOps tools and best practices about continuous development, continuous testing, and configuration management, including continuous integration and deployment and continuous monitoring of the software throughout its development life cycle.</p>
                </div>
                <div class="col-md-7">
                    <img src="Images/61uMuGFNYPL._AC_UF1000,1000_QL80_.jpg" width="100%" height="450px" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0 linux-section-custom-4 pb-5">
        <div class="container border border-dark-subtle rounded-1 pb-3 pt-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="content-block height">
                        <h3 class="fw-bold pb-4">What you'll learn</h3>
                        <ul id="box">
                            <li>Linux distribution, shell scripting, some basic and advanced Linux commands and package management.</li>
                            <li>Linux distribution, shell scripting, some basic and advanced Linux commands and package management.</li>
                            <li>Linux distribution, shell scripting, some basic and advanced Linux commands and package management.</li>
                            <li>Linux distribution, shell scripting, some basic and advanced Linux commands and package management.</li>
                            <li>Linux distribution, shell scripting, some basic and advanced Linux commands and package management.</li>
                            <li>Linux distribution, shell scripting, some basic and advanced Linux commands and package management.</li>
                            <li>Linux distribution, shell scripting, some basic and advanced Linux commands and package management.</li>
                            <li>Linux distribution, shell scripting, some basic and advanced Linux commands and package management.</li>
                            <li>Linux distribution, shell scripting, some basic and advanced Linux commands and package management.</li>
                            <li>Linux distribution, shell scripting, some basic and advanced Linux commands and package management.</li>
                            <li>Linux distribution, shell scripting, some basic and advanced Linux commands and package management.</li>
                            <li>Linux distribution, shell scripting, some basic and advanced Linux commands and package management.</li>
                            <li>Linux distribution, shell scripting, some basic and advanced Linux commands and package management.</li>
                            <li>Linux distribution, shell scripting, some basic and advanced Linux commands and package management.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0 linux-section-custom-5">
        <div class="container py-5">
            <div class="row">
                <h1 class="fw-bolder text-black pb-5">Course Curriculum - Core (Live)</h1>
                <div class="row">
                    <div class="col-md-12">
                        <div class="accordion border border-black">
                            <div class="accordion-item">
                                <div class="accordion-title fs-3 fw-bold py-3 ps-4">1. DevOps Industrial Training</div>
                                <div class="accordion-content ps-5 pt-5">
                                    <div class="row">
                                        <div class="col-md-12 pb-5">
                                            <h3 class="text-black fw-bold">DevOps Curriculum</h3>
                                            <div class="row pt-4">
                                                <div class="col-md-12">
                                                    <h5 class="text-black fw-bold pb-3">Overview of DevOps</h5>
                                                    <p>IBT Learning's DevOps industrial training is designed to give you hands-on experience on in-house DevOps tools and best practices about continuous development, continuous testing, configuration management, including continuous integration and continuous deployment, and finally, continuous monitoring of the software throughout its development life cycle.</p>
                                                </div>
                                            </div>
                                            <div class="row pt-3">
                                                <div class="col-md-12">
                                                    <ul class="p-0 pb-3">
                                                        <h6 class="fw-bold text-black">Module 1. Introduction to DevOps</h6>
                                                        <li>What is DevOps? Why DevOps?</li>
                                                        <li>What Market Trends</li>
                                                        <li>Jenkins introduction</li>
                                                        <li>DevOps Engineer Skills</li>
                                                        <li>DevOps Delivery Pipeline</li>
                                                        <li>DevOps Ecosystem</li>
                                                        <li>What is CI/CD</li>
                                                    </ul>

                                                    <ul class="p-0 pb-3">
                                                        <h6 class="fw-bold text-black">Module 2. Version Control System using GIT</h6>
                                                        <li>Introduction to VCS</li>
                                                        <li>Git lifecycle</li>
                                                        <li>Understanding Git workflow</li>
                                                        <li>understanding .gitignore</li>
                                                        <li>Git Command</li>
                                                        <li>Working with Github</li>
                                                    </ul>

                                                    <ul class="p-0 pb-3">
                                                        <h6 class="fw-bold text-black">Module 3. Build Tool Maven</h6>
                                                        <li>Maven Introduction</li>
                                                        <li>Maven Goals</li>
                                                        <li>Maven Project on Artifactory</li>
                                                        <li>Build Java maven project Maven and DevOps</li>
                                                    </ul>

                                                    <ul class="p-0 pb-3">
                                                        <h6 class="fw-bold text-black">Module 4: Build Automation using Jenkins</h6>
                                                        <li>What is Jenkins</li>
                                                        <li>Jenkins Architecture</li>
                                                        <li>Jenkins Installation</li>
                                                        <li>Jenkins Security</li>
                                                        <li>Manage Jenkins and underlying configuration Jenkins CLI</li>
                                                        <li>Jenkins Plugins</li>
                                                        <li>Freestyle Jobs</li>
                                                        <li>Pipeline as a Code</li>
                                                        <li>Multi-branch Pipeline</li>
                                                        <li>Scripted vs Declarative Pipeline Groovy and Jenkins</li>
                                                        <li>Build CI CD pipeline</li>
                                                        <li>Jenkins Library</li>
                                                    </ul>

                                                    <ul class="p-0">
                                                        <h6 class="fw-bold text-black">Module 5: Configuration as code using Ansible</h6>
                                                        <li>What is Ansible</li>
                                                        <li>Understanding Configuration as Code</li>
                                                        <li>Ansible Architecture</li>
                                                        <li>Benefits of Ansible</li>
                                                        <li>Ansible Installation</li>
                                                        <li>Creating and configuring VMs using Digital Ocean</li>
                                                        <li>Ansible Commands Ansible Playbooks</li>
                                                        <li>Ansible Variables</li>
                                                        <li>Ansible filters and handlers Ansible Roles</li>
                                                        <li>Using Ansible in Jenkins Pipeline</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-title fs-3 fw-bold py-3 ps-4">
                                    2. Containerization and its Orchestration
                                </div>
                                <div class="accordion-content ps-5 pt-5">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <ul class="p-0 pb-3">
                                                <h6 class="fw-bold text-black">Module 1: Microservices</h6>
                                                <li>Understanding Monolithic Architecture</li>
                                                <li>Drawbacks of Monolithic Architecture</li>
                                                <li>What is Microservice Architecture</li>
                                                <li>Advantages and disadvantages of Microservices Architecture</li>
                                            </ul>

                                            <ul class="p-0 pb-3">
                                                <h6 class="fw-bold text-black"></h6>
                                                <li>Containerization using Docker</li>
                                                <li>Private Container Repository (AWS ECR)</li>
                                                <li>Public Container Registry (DockerHub)</li>
                                                <li>Docker Container vs Virtual Machine Docker Architecture</li>
                                                <li>Create Docker images</li>
                                                <li>Docker Commands</li>
                                                <li>Docker Network</li>
                                                <li>Docker Compose</li>
                                                <li>Docker Volumes</li>
                                                <li>Containerize nodeJs Application</li>
                                                <li>Jenkins pipeline using docker</li>
                                            </ul>

                                            <ul class="p-0 pb-3">
                                                <h6 class="fw-bold text-black">Module 3: Orchestration of Container using Kubernetes</h6>
                                                <li>What is Kubernetes</li>
                                                <li>Orchestration and its features</li>
                                                <li>Kubernetes Architecture</li>
                                                <li>Minikube and kubectl</li>
                                                <li>kubectl commands</li>
                                                <li>Pods and Deployments</li>
                                                <li>ConfigMap and Secrets</li>
                                                <li>Services and Ingress</li>
                                                <li>Stateful-sets Namespaces</li>
                                                <li>Volumes</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-title fs-3 fw-bold py-3 ps-4">
                                    3. Cloud and Infrastructure
                                </div>
                                <div class="accordion-content ps-5 pt-5">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <ul class="p-0 pb-3">
                                                <h6 class="fw-bold text-black">Module 1: Infrastructure as code using Terraform</h6>
                                                <li>What are Infrastructure and Code</li>
                                                <li>What is Terraform</li>
                                                <li>Terraform Architecture</li>
                                                <li>Terraform vs Ansible</li>
                                                <li>Managing Infrastructure using terraform</li>
                                                <li>Understand Terraform Components</li>
                                                <li>Terraform Commands</li>
                                                <li>Create AWS infrastructure using Terraform Terraform state</li>
                                                <li>Terraform Modules</li>
                                                <li>Terraform Cloud</li>   
                                            </ul>

                                            <ul class="p-0 pb-3">
                                                <h6 class="fw-bold text-black">Module 2 AWS - Getting Started</h6>
                                                <li>Getting started with Cloud Computing</li>
                                                <li>Understanding AWS Console</li>
                                                <li>Understanding SaaS/PaaS/IaaS</li>
                                                <li>What is IAM? Need for IAM?</li>
                                                <li>What are federated users?</li>
                                                <li>How to manage access using IAM?</li>
                                                <li>How to write a policy and map to the group?</li>
                                                <li>Understanding users /roles/policies?</li>
                                            </ul>

                                            <ul class="p-0 pb-3">
                                                <h6 class="fw-bold text-black">Module 3 AWS  </h6>
                                                <li>Understanding EC2, VPC and S3</li>
                                                <li>Understanding EC2</li>
                                                <li>Pricing models (On-demand, Spot, Reserved)</li>
                                                <li>Understanding VPC/subnets/Security Groups</li>
                                                <li>Understanding S3</li>
                                                <li>Encryption on S3</li>
                                                <li>Data and Lifecycle management on S3</li>
                                            </ul>

                                            <ul class="p-0 pb-3">
                                                <h6 class="fw-bold text-black">Module 4 AWS - Deep Dive</h6>
                                                <li>Understanding containerization on cloud</li>
                                                <li>Understanding ECS</li>
                                                <li>Understanding EKS</li>
                                                <li>Setup EKS Cluster</li>
                                                <li>Deploy Resume App on EKS Cluster</li>
                                                <li>Developers tools on AWS</li>
                                                <li>Codebuild, codedeploy and codepipeline</li>
                                                <li>Understanding Lambda and Serverless Applications</li>
                                                <li>Understanding integration & logging services on the cloud</li>
                                                <li>Cloudtrail</li>
                                                <li>How to get EC2/S3/Lambda Logs</li>
                                                <li>Cloudwatch SNS/SQS cloudformation</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-title fs-3 fw-bold py-3 ps-4">
                                    4. Continuous Monitoring
                                </div>
                                <div class="accordion-content ps-5 pt-5">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <ul class="p-0 pb-3">
                                                <h6 class="fw-bold text-black">Overview</h6>
                                                <li>What is continuous monitoring</li>
                                                <li>Goals and benefits of monitoring </li>
                                                <li>Types of continuous monitoring </li>
                                                <li>Overview of DevOps monitoring tools</li>
                                                <li>Overview of Splunk</li>
                                            </ul>

                                            <ul class="p-0 pb-3">
                                                <h6 class="fw-bold text-black">Splunk</h6>
                                                <li>Overview of Splunk Cloud and Enterprise instance</li>
                                                <li>Download and installation</li>
                                                <li>Universal forwarder </li>
                                                <li>Demo on how to get data from machines/apps</li>
                                                <li>Basic search and data models</li>
                                                <li>Dashboards and visualizations </li>
                                                <li>Demo on how to create Dashboards</li>
                                                <li>Reports and alerting</li>
                                                <li>Best practices and industry standards on monitoring </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-title fs-3 fw-bold py-3 ps-4">
                                    5. Capstone Projects - Elective
                                </div>
                                <div class="accordion-content ps-5 pt-5">
                                    <div class="row">
                                        <div class="col-md-12 pb-5">
                                            <h6 class="fw-bold text-black">Overview</h6>
                                            <p class="text-black">Build a rich portfolio of advanced end-to-end DevOps projects. The value of this elective program is $1,500 as a stand-alone course</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                    <div class="item">
                        <img src="Images/download.jpeg" width="100%" height="220vh"  alt="">
                    </div>
                    <div class="item">
                        <img src="Images/docker-logo.jpg" width="100%" height="220vh"  alt="">
                    </div>
                    <div class="item">
                        <img src="Images/download.png" width="100%" height="220vh" alt="">
                    </div>
                    <div class="item">
                        <img src="Images/35un3kipj9hb5x4k3uec.webp" width="100%" height="220vh" alt="">
                    </div>
                    <div class="item">
                        <img src="Images/Kubernetes-Logo.jpg" width="100%" height="220vh" alt="">
                    </div>
                    <div class="item">
                        <img src="Images/images.png" width="100%" height="220vh" alt="">
                    </div>
                    <div class="item">
                        <img src="Images/ansble.png" width="100%" height="220vh" alt="">
                    </div>
                    <div class="item">
                        <img src="Images/AWS-logo-2.jpg" width="100%" height="220vh" alt="">
                    </div>
                    <div class="item">
                        <img src="Images/jenkins_image.png" width="100%" height="220vh" alt="">
                    </div>
                    <div class="item">
                        <img src="Images/gitlogo.webp" width="100%" height="220vh" alt="">
                    </div>
                    <div class="item">
                        <img src="Images/openai-chatgpt.webp" width="100%" height="220vh"  alt="">
                    </div>
                    <div class="item">
                        <img src="Images/mysql-post-image-2.png" width="100%" height="220vh  alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
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
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
    $(function() {
   // Owl Carousel
    var owl = $(".owl-carousel");
    owl.owlCarousel({
    items: 4,
    margin: 10,
    loop: true,
    nav:true,
    dots:false,
    autoplay: true,
    autoplayHoverPause: true, // Stops autoplay
    });

});

    var accordionItems = document.querySelectorAll(".accordion-item");

    accordionItems.forEach(item => {
        var title = item.querySelector(".accordion-title");
        var content = item.querySelector(".accordion-content");

    title.addEventListener('click',() => {
        for(var i=0; i<accordionItems.length; i++){
            if(accordionItems[i] != item){
                accordionItems[i].classList.remove('active');
            }else{
                item.classList.toggle('active');
            }
        }
    });
});

</script>
</html>