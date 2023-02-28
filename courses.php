<?php session_start() ?>
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
    <link rel="shortcut icon" href="img/ECSA.png" type="image/x-icon">
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


        <section id="hero">
            <div class="container-xl">
                <div class="row gy-4">
                    <div class="col-lg-8">

                        <div class="post featured-post-lg">
                            <div class="details clearfix">
                                <a href="#" class="category-badge">Courses</a>
                                <h2 class="post-title">
                                    <a href="#">Start your learning journey and get certified!</a>
                                </h2>
                                <ul class="meta list-inline mb-0">
                                    <li class="list-inline-item">
                                        <a href="signlog.php">Register here!</a>
                                    </li>
                                    <li class="list-inline-item">20-04-2022</li>
                                </ul>
                            </div>
                            <a href="#">
                                <div class="thumb rounded">
                                    <div class="inner data-bg-image" data-bg-image="images/posts/COURSERA.jpg">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="post-tabs rounded bordered">
                            <ul class="nav nav-tabs nav-pills nav-fill" id="postTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active"
                                        type="button">
                                        Quick Links
                                    </button>
                                
                            </ul>

                            <div class="tab-content" id="postsTabContent">
               
                                <div class="lds-dual-ring"></div>
                                <div class="tab-pane fade show active" id="popular" aria-labelledby="popular-tab"
                                    role="tabpanel">
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="images/posts/1.png" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="https://novoresume.com/career-blog/soft-skills" target="_blank">Top 10 Soft Skills Employers Love</a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="images/posts/2.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="https://professional.dce.harvard.edu/blog/how-to-improve-your-emotional-intelligence/" target="_blank">Improving Emotional Intelligence (EQ)</a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="images/posts/3.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="https://awato.co/5-aspects-emotional-intelligence-matter/" target="_blank">Types of Emotional Intelligence</a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="images/posts/4.png" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="https://www.forbes.com/sites/nextavenue/2016/02/09/8-critical-ways-to-improve-your-resume/" target="_blank">8 critical ways to improve your resume</a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </section>


        <section class="main-content">
            <div class="container-xl">
                <div class="row gy-4">

                    

                        <div class="spacer" data-height="50"></div>

                        <div class="section-header">
                            <h3 class="form-title">Courses</h3>
                            <div class="spacer" data-height="50"></div>
                            <div class="work__container bd-grid">
                              <div class="work__img">
                                 <a href="study_skills.php" class="work__img">
                                    <img src="img/work1.jpg" alt="">
                                </a>
                                   <h3 class="title-sm">Study skills</h3>
                                    <h3 class="blog-text">
                                      You will develop your own personal approach to study and learning in a way that meets your own individual needs.
                                    </h3>
                                    <a href="study_skills.php" class="category-badge1"  target="_blank">Read more</a>
                              </div>
                                <div class="work__img">
                                    <a href="life_skills.php" class="work__img">
                                       <img src="img/successful-entrepreneur.jpg" alt="">
                                    </a> 
                                    <h3 class="title-sm">Life skills</h3>
                                    <h3 class="blog-text">
                                      Life skills are the skills you need to manage the activities and challenges of everyday life effectively. 
                                    </h3>
                                    <a href="life_skills.php" class="category-badge1" target="_blank">Read more</a>
                                </div>
                                
                                <div class="work__img">
                                   <a href="lang_skills.php" class="work__img">
                                    <img src="img/languages.jpg" alt="">
                                    </a>
                                    <h3 class="title-sm">Language skills</h3>
                                    <h3 class="blog-text">
                                      Basic language skills that you need today to be an effective communicatore are listening, speaking, reading and writing.
                                    </h3>
                                    <a href="lang_skills.php" class="category-badge1"   target="_blank">Read more</a>
                                </div>
                                <div class="work__img">
                                  <a href="em_skills.php" class="work__img">
                                    <img src="img/work4.jpg" alt="">
                                </a> 
                                <h3 class="title-sm">Emerging skills</h3>
                                    <h3 class="blog-text">
                                      Emerging skills are the skills of the future, the ones deemed most crucial to the success of your organization. </h3>
                                    <a href="em_skills.php" class="category-badge1" target="_blank">Read more</a>
                                </div>
                                <div class="work__img">
                                 <a href="res_skills.php" class="work__img">
                                    <img src="img/work5.jpg" alt="">
                                </a>  
                                <h3 class="title-sm">Research skills</h3>
                                    <h3 class="blog-text">
                                      You’ll be able to become knowledgeable in any field that you need to write about.
                                    </h3>
                                    <a href="res_skills.php" class="category-badge1" target="_blank">Read more</a>
                                </div>
                                <div class="work__img">
                                 <a href="com_skills.php" class="work__img">
                                    <img src="img/com.jpg" alt="">
                                </a> 
                                <h3 class="title-sm">Communication</h3>
                                    <h3 class="blog-text">
                                      Being able to communicate effectively is one of the most important life skills to learn.
                                      
                                    </h3>
                                    <a href="com_skills.php" class="category-badge1"  target="_blank">Read more</a> 
                                </div>
                                <div class="work__img" >
                                  <a href="teach_skills.php" class="work__img">
                                    <img src="img/teac.jpg" alt="">
                                </a> 
                                <h3 class="title-sm">Teaching skills</h3>
                                    <h3 class="blog-text">
                                    Why you should consider a career in teaching and the skills you need to be a teacher?
                                    
                                    </h3>
                                    <a href="teach_skills.php" class="category-badge1"  target="_blank">Read more</a>
                                </div>
                                <div class="work__img">
                                    <a href="guided_projects.php" class="work__img">
                                       <img src="img/work6.jpg" alt="">
                                    </a>
                                    <h3 class="title-sm">Guided projects</h3>
                                    <h3 class="blog-text">
                                      Hands-on tutorials designed for you to learn and apply concepts related to a particular technology.
                                    </h3>
                                    <a href="guided_proj.php" class="category-badge1"  target="_blank">Read more</a>
                                </div>
                             </div>
                         </div>            
                </div>
                </div>

            </div>
        </div>
    </div>
</section>



    <!-- footer  -->
    <?php include('footerI.php'); ?>

                    
              <!-- side button  -->

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
                        <li><a href="#">Skills</a></li>
                        <li><a href="#">Skills</a></li>
                        <li><a href="#">Skills</a></li>
                        <li><a href="#">Skills</a></li>
                    </ul>
                </li>
                <li><a href="civic.php">Civic Engagement Initiatives</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="signlog.php">Login</a></li>
            </ul>
        </nav>


        <ul class="social-icons list-unstyled list-inline mb-0 mt-auto w-100">
            <li class="list-inline-item">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li class="list-inline-item">
                <a href="#"><i class="fab fa-twitter"></i></a>
            </li>
            <li class="list-inline-item">
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </li>
            <li class="list-inline-item">
                <a href="#"><i class="fab fa-youtube"></i></a>
            </li>
        </ul>
    </div>






    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.sticky-sidebar.min.js"></script>
    <script src="main.js"></script>

  
<script>
    function validateForm() {
    var n = document.getElementById('name').value;
    var e = document.getElementById('email').value;
    var s = document.getElementById('subject').value;
    var m = document.getElementById('message').value;
    var onlyLetters =/^[a-zA-Z\s]*$/; 
    var onlyEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    
    
    if(n == "" || n == null){
        document.getElementById('nameLabel').innerHTML = ('Please enter your name');
        document.getElementById('name').style.borderColor = "red";
        return false;
    }
       
  
    if (!n.match(onlyLetters)) {
        document.getElementById('nameLabel').innerHTML = ('Please enter only letters');
        document.getElementById('name').style.borderColor = "red";
        return false;
    }
  
    if(e == "" || e == null ){
          document.getElementById('emailLabel').innerHTML = ('Please enter your email');
          document.getElementById('email').style.borderColor = "red";
          return false;
      }
  
    if (!e.match(onlyEmail)) {
        document.getElementById('emailLabel').innerHTML = ('Please enter a valid email address');
        document.getElementById('email').style.borderColor = "red";
        return false;
    }
  
    if(s == "" || s == null ){
          document.getElementById('subjectLabel').innerHTML = ('Please enter your subject');
          document.getElementById('subject').style.borderColor = "red";
          return false;
      }
  
    if (!s.match(onlyLetters)) {
        document.getElementById('subjectLabel').innerHTML = ('Please enter only letters');
        document.getElementById('subject').style.borderColor = "red";
        return false;
    }
  
    if(m == "" || m == null){
        document.getElementById('messageLabel').innerHTML = ('Please enter your message');
        document.getElementById('message').style.borderColor = "red";
        return false;
    }
  
    else{
          return true;
      }
      
}
</script> 
</body>

</html>