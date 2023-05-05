<?php
    $conn=mysqli_connect('localhost','root','','studybuddy') or die("Connection failed" .mysqli_connect_error());
?>
<?php
     session_start();
     $temp=$_SESSION['uid'];
     $sql="SELECT * FROM Student WHERE Rollno='$temp'";
     $query=mysqli_query($conn,$sql);
     $row=mysqli_fetch_array($query);
     $rollno=$row['Rollno'];
     $sem=$row['Semester'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
   
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Study Buddy</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="styles.css" rel="stylesheet" />
        <script src = "https://cdnjs.cloudflare.com/ajax/libs/tsparticles/1.18.11/tsparticles.min.js"> </script>
   <style>
      html, body {
  width: 100%;
  height:100%;
}

#bgcolor {
    background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
    background-size: 400% 400%;
    animation: gradient 15s ease infinite;
}

@keyframes gradient {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}


   </style>
   

   
        
    </head>
    <body >
    

        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <h3 class="navbar-brand">Welcome <?php echo $row['Name'];?>!!</h3>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php"><?php echo "<h4>{$rollno}</h4>";?></a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php"><?php echo "<h4> Semester-{$sem}</h4>";?></a></li>
                    </ul>
                </div>
            </div>
            <a class="btn btn-primary btn-lg px-3 me-sm-3" href="UserProfile.php">Profile Page</a>
            <br><br>
            <!-- <a class="btn btn-primary btn-lg px-3 me-sm-3" href="UserLogin.php">Log Out</a> -->
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5"  id="bgcolor">
        
            <div class="container px-5" >
                <div class="row gx-5 justify-content-center" >
                    <div class="col-lg-6">
                        <div class="text-center my-5" >
                            <h1 class="display-5 fw-bolder text-white mb-2">Study Buddy</h1>
                            <p class="lead text-white-50 mb-4" >Don't Just Learn, Experience!<br>Don't Just Read, Absorb!<br> Don't Just Think, Ponder! <br> Don't Just Dream, Do! <br> - Roy T. Bennett</p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                                <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Get Started</a>
                                <!-- <a class="btn btn-outline-light btn-lg px-4" href="#!">Learn More</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

          
        </header>
        <!-- Features section-->
        <section class="py-5 border-bottom" id="features">
            <div class="container px-5 my-5">
                <div class="row gx-5 ">
                    <div class="col-lg-4 mb-5 mb-lg-5 ">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                        <h2 class="h4 fw-bolder" style="font-size:30px;">Study Material</h2>
                        <p style="font-size:20px;">Get Subjectwise Notes, Assignments, Previous Year Question Papers and Reference Books at one place. Ofcourse Study Buddy makes it Easy!</p>
                        <a class="text-decoration-none" href="Subject.php" style="font-weight:bold;">
                            View Study Material
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col-lg-4 mb-5 mb-lg-5">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                        <h2 class="h4 fw-bolder" style="font-size:30px;">Discussion Page</h2>
                        <p style="font-size:20px;">Stuck Somewhere? Don't Worry Use our discussion feature to ask your doubt or have a look at previously asked questions.</p>
                        <a class="text-decoration-none" href="DiscussionPage.php" style="font-weight:bold;">
                            Ask Doubt
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                        <h2 class="h4 fw-bolder" style="font-size:30px;">Announcements</h2>
                        <p style="font-size:20px;">Check for new Updates regarding Assignment deadlines, upcoming exams,new doubts,their answers and much more.</p>
                        <a class="text-decoration-none" href="Annoucement.php" style="font-weight:bold;">
                            View Announcements
                            <i class="bi bi-arrow-right" ></i>
                        </a>
                    </div>
                    <div class="col-lg-4" margin='5px'>
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-chat-text"></i></div>
                        <h2 class="h4 fw-bolder" style="font-size:30px;">Connect With Students</h2>
                        <p style="font-size:20px;">Chat with other students and get your doubts cleared.</p>
                        <a class="text-decoration-none" href="/StudyBuddy/StudyBuddy/chat/users.php" style="font-weight:bold;">
                            Goto Chat
                            <i class="bi bi-arrow-right" ></i>
                        </a>
                    </div>
                    <div class="col-lg-4" margin='5px'>
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-chat-square"></i></div>
                        <h2 class="h4 fw-bolder" style="font-size:30px;">Connect With Mentors</h2>
                        <p style="font-size:20px;">Get your doubts clarified directly from your mentors.</p>
                        <a class="text-decoration-none" href="/StudyBuddy/StudyBuddy/chat2/users.php" style="font-weight:bold;" >
                            Goto Chat
                            <i class="bi bi-arrow-right" ></i>
                        </a>
                    </div>
                    <div class="col-lg-4" margin='5px'>
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-calendar"></i></div>
                        <h2 class="h4 fw-bolder" style="font-size:30px;">Check Time Table</h2>
                        <p style="font-size:20px;">See the schedule of classes as per the latest timetable.</p>
                        <a class="text-decoration-none" href="<?php echo '/StudyBuddy/StudyBuddy/time table/'.$sem.'.png'; ?>" style="font-weight:bold;" >
                            Open TimeTable
                            <i class="bi bi-arrow-right" ></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>


  
        <!-- Pricing section-->
        <!-- <section class="bg-light py-5 border-bottom">
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h2 class="fw-bolder">Pay as you grow</h2>
                    <p class="lead mb-0">With our no hassle pricing plans</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    Pricing card free-->
                    <!-- <div class="col-lg-6 col-xl-4">
                        <div class="card mb-5 mb-xl-0">
                            <div class="card-body p-5">
                                <div class="small text-uppercase fw-bold text-muted">Free</div>
                                <div class="mb-3">
                                    <span class="display-4 fw-bold">$0</span>
                                    <span class="text-muted">/ mo.</span>
                                </div>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        <strong>1 users</strong>
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        5GB storage
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        Unlimited public projects
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        Community access
                                    </li>
                                    <li class="mb-2 text-muted">
                                        <i class="bi bi-x"></i>
                                        Unlimited private projects
                                    </li>
                                    <li class="mb-2 text-muted">
                                        <i class="bi bi-x"></i>
                                        Dedicated support
                                    </li>
                                    <li class="mb-2 text-muted">
                                        <i class="bi bi-x"></i>
                                        Free linked domain
                                    </li>
                                    <li class="text-muted">
                                        <i class="bi bi-x"></i>
                                        Monthly status reports
                                    </li>
                                </ul>
                                <div class="d-grid"><a class="btn btn-outline-primary" href="#!">Choose plan</a></div>
                            </div>
                        </div>
                    </div>  -->
                    <!-- Pricing card pro-->
                    <!-- <div class="col-lg-6 col-xl-4">
                        <div class="card mb-5 mb-xl-0">
                            <div class="card-body p-5">
                                <div class="small text-uppercase fw-bold">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    Pro
                                </div>
                                <div class="mb-3">
                                    <span class="display-4 fw-bold">$9</span>
                                    <span class="text-muted">/ mo.</span>
                                </div>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        <strong>5 users</strong>
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        5GB storage
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        Unlimited public projects
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        Community access
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        Unlimited private projects
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        Dedicated support
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        Free linked domain
                                    </li>
                                    <li class="text-muted">
                                        <i class="bi bi-x"></i>
                                        Monthly status reports
                                    </li>
                                </ul>
                                <div class="d-grid"><a class="btn btn-primary" href="#!">Choose plan</a></div>
                            </div>
                        </div>
                    </div>
                     Pricing card enterprise-->
                    <!-- <div class="col-lg-6 col-xl-4">
                        <div class="card">
                            <div class="card-body p-5">
                                <div class="small text-uppercase fw-bold text-muted">Enterprise</div>
                                <div class="mb-3">
                                    <span class="display-4 fw-bold">$49</span>
                                    <span class="text-muted">/ mo.</span>
                                </div>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        <strong>Unlimited users</strong>
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        5GB storage
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        Unlimited public projects
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        Community access
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        Unlimited private projects
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        Dedicated support
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        <strong>Unlimited</strong>
                                        linked domains
                                    </li>
                                    <li class="text-muted">
                                        <i class="bi bi-check text-primary"></i>
                                        Monthly status reports
                                    </li>
                                </ul>
                                <div class="d-grid"><a class="btn btn-outline-primary" href="#!">Choose plan</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>  -->
        <!-- Testimonials section-->
        <section class="py-5 border-bottom">
            <div class="container px-5 my-5 px-5">
                <div class="text-center mb-5">
                    <h2 class="fw-bolder">Rule of Success:</h2>
                    <!-- <p class="lead mb-0">Our customers love working with us</p> -->
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <!-- Testimonial 1-->
                        <div class="card mb-4">
                            <div class="card-body p-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><i class="bi bi-bookmarks-fill" style="font-size:30px; height:3rem; color:#0d6efd"></i></div>
                                    <div class="ms-4">
                                        <p style="font-size:20px;" class="mb-1">Never Lose Hope And Keep On Working.The Road to Success is Through Commitment.</p>
                                        <!-- <div class="small text-muted">- Client Name, Location</div>  -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial 2-->
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><i class="bi bi-bookmarks-fill" style="font-size:30px; height:3rem; color:#0d6efd"></i></div>
                                    <div class="ms-4">
                                        <p style="font-size:20px;" class="mb-1">Define Success on your own Terms,Achieve it by your own Rules,and Build a Life you're Proud to Live. </p>
                                        <!-- <div class="small text-muted">- Client Name, Location</div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        
    
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-5"><p class="m-0 text-center text-white">Copyright &copy; studybuddy 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>