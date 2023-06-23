<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Connect Skills - Build Up your 21st Century Skills with Us.</title>
    <link rel="icon" type="image/x-icon" href="https://doodleipsum.com/75/abstract?i=f8b1abea359b643310916a38aa0b0562" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <?php
    session_start();
    include 'connection.php';
    include 'login.php';

    function checkLogin() {
        if (isset($_SESSION['login']) && $_SESSION['role'] == 'user') {
            return "<script>alert('Welcome!'); window.location.href='./user/dashboard.php'; </script>";
        } else if (isset($_SESSION['login']) && $_SESSION['role'] == 'company') {
            return "<script>alert('Welcome!'); window.location.href='./company/dashboard.php'; </script>";
        } else {
            return "<script>alert('Sorry! you don't have a role'); window.location.href='';</script>";
        }
    }

    $checklogin = checkLogin();
    echo $checklogin;
    ?>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
        <div class="container px-5">
            <a style="color: #409b81;" class="navbar-brand fw-bold" href="">Connect Skills</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#download" data-bs-toggle="modal" data-bs-target="#loginModal">Log In</a></li>
                </ul>
                <button class="btn btn-success rounded mb-2 mb-lg-0" data-bs-toggle="modal" data-bs-target="#signupModal">
                    <span class="d-flex align-items-center">
                        <span class="small">Sign Up</span>
                    </span>
                </button>
            </div>
        </div>
    </nav>
    <!-- Mashead header-->
    <header class="masthead">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <h2 class="m-4"></h2>
                <div class="col-lg-6">
                    <h2 class="m-5"></h2>
                    <!-- Mashead text and app badges-->
                    <div class="mb-5 mb-lg-0 text-center text-lg-start">
                        <h1 class="display-1 lh-1 mb-3">Build up your 21st century skills with us.</h1>
                        <br> <br>
                        <h3>Our partners: </h3> <br>
                        <div class="d-flex flex-column flex-lg-row align-items-center">
                            <a class="me-lg-4 mb-4 mb-lg-0" href="#!"><img class="app-badge" src="assets\img\TrainingLogosfinal-04.png" alt="..." /></a>
                            <a class="me-lg-4 mb-4 mb-lg-0" href="#!"><img class="app-badge" src="assets\img\580b57fcd9996e24bc43c51f.png" alt="..." /></a>
                            <a class="me-lg-4 mb-4 mb-sm-0" href="#!"><img class="app-badge" src="assets\img\meta-logo.png" alt="..." /></a>
                        </div>
                    </div>
                    <h2 class="m-5"></h2>
                </div>
                <style>
                    @keyframes heartbeat {
                        0% {
                            transform: scale(1);
                        }

                        50% {
                            transform: scale(1.02);
                        }

                        100% {
                            transform: scale(1);
                        }
                    }

                    .heartbeat-animation {
                        animation: heartbeat 1.5s infinite;
                        transition: transform 1.5s ease-in-out;
                    }
                </style>
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script>
                    setInterval(function() {
                        $('.heartbeat-container img').toggleClass('heartbeat-animation');
                    }, 1500);
                </script>
                <div class="col-lg-6">
                    <!-- Masthead device mockup feature-->
                        <div class="heartbeat-container" style="display:inline-block;position:relative"><img width="550" height="500" src="https://doodleipsum.com/700/outline?i=c4a23d365a322ea730e80a4afc8ebe4a" alt="Torso by Susana Salas" />
                            <p style="position:absolute;bottom:.5rem;right:.5rem;font-family:sans-serif;color:black"></a></p>
                        </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Quote/testimonial aside-->
    <aside class="text-center bg-black">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xl-8">
                    <div class="h2 fs-1 text-white mb-4">"Seize the opportunities of the 21st century through relentless skill enhancement, paving the way for boundless growth and success."</div>
                </div>
            </div>
        </div>
    </aside>
    <!-- App features section-->
    <section id="features">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0">
                    <div class="container-fluid px-5">
                        <div class="row gx-5">
                            <div class="col-md-6 mb-5">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <img class="m-3" width="70" height="70" src="https://img.icons8.com/fluency/48/artificial-intelligence.png" alt="artificial-intelligence" />
                                    <h3 class="font-alt">AI-Powered Skill Recommendations</h3>
                                    <p class="text-muted mb-0"> Utilize artificial intelligence algorithms to analyze users' profiles, interests, and learning patterns to provide personalized skill recommendations.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-5">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <img class="m-3" width="70" height="70" src="https://img.icons8.com/external-wanicon-flat-wanicon/64/external-consulting-training-and-coaching-wanicon-flat-wanicon.png" alt="external-consulting-training-and-coaching-wanicon-flat-wanicon" />
                                    <h3 class="font-alt">Mentorship Program</h3>
                                    <p class="text-muted mb-0">Establish a mentorship program where experienced professionals or industry experts can provide one-on-one guidance and support to learners</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-5 mb-md-0">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <img class="m-3" width="70" height="70" src="https://img.icons8.com/external-flaticons-flat-flat-icons/64/external-career-gig-economy-flaticons-flat-flat-icons.png" alt="external-career-gig-economy-flaticons-flat-flat-icons" />
                                    <h3 class="font-alt">Career Path Planning</h3>
                                    <p class="text-muted mb-0">Provide users with tools to explore various career paths and identify the skills needed for each path.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <img class="m-3" width="70" height="70" src="https://img.icons8.com/fluency/70/transformation-skill.png" alt="transformation-skill" />
                                    <h3 class="font-alt">Skill Exchange Marketplace</h3>
                                    <p class="text-muted mb-0">Create a marketplace where users can trade or exchange their skills with others.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-lg-0 text-left heartbeat-container">
                    <img style="width: 450px; height: auto;" src="https://doodleipsum.com/700/flat?i=7424dd1b09f40e1a89bf8d6bcea5d8bd" alt="Sitting on Floor by Gustavo Pedrosa" />
                </div>
            </div>
        </div>
    </section>
    <!-- Call to action section-->
    <section class="cta">
        <div class="cta-content">
            <div class="container px-5">
                <h2 class="text-white display-1 lh-1 mb-4">
                    Stop waiting.
                    <br />
                    Start building.
                </h2>
                <a class="btn btn-outline-light py-3 px-4 rounded-pill" href="https://startbootstrap.com/theme/new-age" target="_blank">Download for free</a>
            </div>
        </div>
    </section>
    <!-- App badge section-->
    <section class="bg-success" id="download">
        <div class="container px-5">
            <h2 class="text-center text-white font-alt mb-4">Get the app now!</h2>
            <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center">
                <a class="me-lg-3 mb-4 mb-lg-0" href="#!"><img class="app-badge" src="assets/img/google-play-badge.svg" alt="..." /></a>
                <a href="#!"><img class="app-badge" src="assets/img/app-store-badge.svg" alt="..." /></a>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="bg-black text-center py-5">
        <div class="container px-5">
            <div class="text-white-50 small">
                <div class="mb-2">&copy; Connect Skills 2023. All Rights Reserved.</div>
                <a href="#!">Privacy</a>
                <span class="mx-1">&middot;</span>
                <a href="#!">Terms</a>
                <span class="mx-1">&middot;</span>
                <a href="#!">FAQ</a>
            </div>
        </div>
    </footer>
    <!-- Sign Up Modal-->
    <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-success p-4">
                    <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Sign Up</h5>
                    <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body border-0 p-4">
                    <form action="create.php" method="POST" id="contactForm">
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="Enter your name..." name="fullname" required />
                            <label for="name">Full name</label>
                        </div>
                        <!-- Username input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" type="text" placeholder="(123) 456-7890" name="username" id="username" required />
                            <label for="text">Username</label>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder="name@example.com" name="email" required />
                            <label for="email">Email address</label>
                        </div>
                        <!-- Password input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" type="password" placeholder="password" name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" />
                            <label for="password">Password</label>
                        </div>

                        <div class="text-center">
                            <a class="text-success nav-link" href="" data-bs-toggle="modal" data-bs-target="#signupModalCompany">Are you a instructor? Join us as a partner!</a> <br>
                        </div>
                        <div class="d-grid"><button class="mt-1 btn btn-success rounded-pill btn-lg" id="submitButton" type="submit" name="signupUser">Sign Up</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Sign Up Modal -->
    <!-- Sign Up Modal-->
    <div class="modal fade" id="signupModalCompany" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-success p-4">
                    <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Sign Up as Instructor</h5>
                    <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body border-0 p-4">
                    <form action="create.php" method="POST" id="contactForm">
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="Enter your name..." name="fullname" required />
                            <label for="name">Company Name</label>
                        </div>
                        <!-- Username input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" type="text" placeholder="(123) 456-7890" name="username" id="username" required />
                            <label for="text">Username</label>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder="name@example.com" name="email" required />
                            <label for="email">Email address</label>
                        </div>
                        <!-- Password input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" type="password" placeholder="password" name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" />
                            <label for="password">Password</label>
                        </div>
                        <div class="d-grid"><button class="mt-3 btn btn-success rounded-pill btn-lg" id="submitButton" type="submit" name="signupCompany">Sign Up</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Sign Up Modal -->
    <!-- Login Modal-->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-success p-4">
                    <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Login</h5>
                    <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body border-0 p-4">
                    <form action="" method="POST" id="contactForm">
                        <!-- Username input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" name="usernameLogin" required />
                            <label for="text">Username</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                        </div>
                        <!-- Password input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" type="password" placeholder="(123) 456-7890" name="passwordLogin" required />
                            <label for="password">Password</label>
                        </div>
                        <div class="d-grid"><button class="btn btn-success rounded-pill btn-lg" id="submitButton" type="submit" name="login">Login</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Modal -->
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