<?php session_start() ?>
<?php     include('endsession.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENSAM Casablanca Academy Skills</title>
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel=" stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>

<body>
    <div class="site-wrapper">
        <div class="main-overlay"></div>
        <header class="header-default">
            <nav class="navbar navbar-expand-lg">
                <div class="container-xl">
                    <a href="index.html" class="navbar-brand">
                        <img src="images/ecsa.svg" alt="">
                    </a>
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav mr-auto">
                             <li class="nav-item">
                                <a href="index.php" class="nav-link active-link koul">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="about.php" class="nav-link">About</a>
                            </li>
                            <li class="nav-item dropdown active">
                                <a href="courses.php" class="nav-link">Courses</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="study_skills.php" class="dropdown-item">Study Skills</a>
                                    </li>
                                    <li>
                                        <a href="life_skills.php" class="dropdown-item">Life Skills</a>
                                    </li>
                                    <li>
                                        <a href="lang_skills.php" class="dropdown-item">Language Skills</a>
                                    </li>
                                    <li>
                                        <a href="em_skills.php" class="dropdown-item">Emerging Skills</a>
                                    </li>
                                    <li>
                                        <a href="res_skills.php" class="dropdown-item">Research Skills</a>
                                    </li>
                                   <li>
                                        <a href="teach_skills.php" class="dropdown-item">Teaching Skills</a>
                                    </li>
                                    <li>
                                        <a href="guided_proj.php" class="dropdown-item">Guided Projects</a>
                                    </li>

                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="civic.php" class="nav-link">Civic Engagement Initiatives</a>
                            </li>
                            <li class="nav-item">
                                <a href="contact.php" class="nav-link">Contact Us</a>
                            </li>

                            <?php
                                    if (!empty($_SESSION['etu_or_instr']) && (!empty($_SESSION['Nom'])) && (!empty($_SESSION['Prenom'])))
                                    {
                                    
                                        if ($_SESSION['etu_or_instr']=='etudiant')
                                        {
                                            echo '<li class="nav-item"><a href="dashboardStu.php" class="nav-link">'.$_SESSION['Nom']." ".$_SESSION['Prenom'].'</a></li>';
                                        }

                                        elseif ($_SESSION['etu_or_instr']=='instructeur')
                                        {
                                            echo '<li class="nav-item"><a href="dashinst.php" class="nav-link">'.$_SESSION['Nom']." ".$_SESSION['Prenom'].'</a></li>';
                                        }           
                                    }
                                    else
                                    {
                                        echo '<li class="nav-item"><a href="signlog.php" class="nav-link">Login</a></li>';
                                    }
                                ?>
                        </ul>
                    </div>

                    <div class="header-right">
                        <ul class="social-icons list-unstyled list-inline mb-0">
                            <li class="list-inline-item">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </li>
                        </ul>

                        <div class="header-buttons">
                            <button class="burger-menu icon-button">
                                <span class="burger-icon"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </nav>


        </header>

<div class="canvas-menu d-flex align-items-end flex-column">
        <button class="btn-close" aria-label="Close" type="button"></button>

        <div class="logo" >
            <img src="logo.svg" alt="">
        </div>
        <nav>
            <ul class="vertical-menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li class="active">
                    <a href="index.html">Courses</a>
                    <ul class="submenu">
                        <li><a href="study_skills.php">Study Skills</a></li>
                        <li><a href="life_skills.php">Life Skills</a></li>
                        <li><a href="lang_skills.php">Language Skills</a></li>
                        <li><a href="em_skills.php">Emerging Skills</a></li>
                        <li><a href="res_skills.php">Research Skills</a></li>
                        <li><a href="teach_skills.php">Teaching Skills</a></li>
                        <li><a href="guided_proj.php">Guided Projects</a></li>
                    </ul>
                </li>
                <li><a href="civic.php">Civic Engagement Initiatives</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="signlog.php">Login</a></li>
            </ul>
        </nav>








        <ul class="social-icons list-unstyled list-inline mb-0 mt-auto w-100">
            <li class="list-inline-item">
                <a href="https://www.linkedin.com/groups/9177446/"><i class="fab fa-linkedin"></i></a>
            </li>
            <li class="list-inline-item">
                <a href="https://www.instagram.com/eca.skills/?hl=fr"><i class="fab fa-instagram"></i></a>
            </li>
        </ul>
    </div>


    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.sticky-sidebar.min.js"></script>
    <script src="main.js"></script>
