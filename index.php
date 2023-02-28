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
                    <a href="index.php" class="navbar-brand">
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
                                <a href="https://www.instagram.com/eca.skills/"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.linkedin.com/groups/9177446/"><i class="fab fa-linkedin"></i></a>
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

                    <div class="col-lg-12" id="about">
                        <div class="section-header">
                            <h3 class="form-title">About us</h3>
                        </div>

                        <div class="padding-30 rounded bordered">
                            <div class="row gy-2">
                                <div class="col-sm-7">
                                    <h1>ENSAM Casablanca Academy Skills</h1>
                                </div>

                                <div class="col-sm-5">
                                    <div class="post">
                                        <div class="thumb rounded">
                                            <a href="#" class="category-badge position-absolute">E-Learning</a>
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="images/posts/2.svg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                                

                                <div class="col-sm-12">
                                    
                                    
                                   <h6 class="post-title my-0">
                            ENSAM Casablanca Skills Academy is a platform designed for students of ENSAM Casablanca and for academia worldwide.<br><br>
              
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                Our program helps University students to gain additional skills to the technical skills they develop during their university studies, giving them an advantage in the job market.<br>
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                Our students will improve and develop Soft skills and transversal skills (behavioral knowledge, attitudes, personal, human and relational skills). In this sense, our academy offers a series of online training and certifications, but also face-to-face on dates that will be communicated on the platform.<br>
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                Our academy will also organize several activities and citizen actions throughout the academic year to develop more skills.<br>
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                You can study on our academy anywhere / any time on PC, mobile and tablet. You can even learn on your way to university.<br>
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                All of our courses and activities will make you gain a verifiable certification.<br>
                            
                     
                                   </h6>

                                </div>

                            </div>
                        </div>

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

                        
                        

                        <div class="spacer" data-height="50"></div>

                        <div class="section-header">
                            <h3 class="form-title">Civic Engagement Initiatives</h3>
                        </div>

                        <div class="padding-30 rounded bordered">
                            <div class="row">
                                <div class="col-md-12 col-sm-6">
                                    <div class="post post-list clearfix">
                                        <div class="thumb rounded">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="img/jlm.png" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details">
                                            <ul class="meta list-inline mb-3">
                                                <li class="list-inline-item">
                                                    <a href="https://www.instagram.com/jlmensamcasa/">
                                                       JLM ENSAM CASA
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="https://www.instagram.com/jlmensamcasa/">SETTAT</a>
                                                </li>
                                                <li class="list-inline-item">26/27 March 2022</li>
                                            </ul>
                                            <h4 >
                                                <a href="https://www.instagram.com/jlmensamcasa/">
                                                    The BARAKAT caravan
                                                </a>
                                            </h4>
                                            <h5 class="mot__text">
                                                The BARAKAT caravan had emerged in the village of EL Achach thanks to the enormous efforts of our dear Jlmists. Those leaders had succeeded in rooting cheerfulness in the hearts of the children and a smile on the faces of the inhabitants of the village. The JLM ENSAM CASA team succeeded in redeveloping the village school, distributing food baskets to the villagers, clothing and school supplies to the students. And for the first time, there was the organization of a football tournament whose competitors were the talented players of the village. The JLM ENSAM CASABLANCA family was just industrious, hardworking and courageous, which led to these honorable results. Thanks JLM!


                                            </h5>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                
                                
                                    
                                </div>
                            </div>
                        </div>


                        <div class="spacer" data-height="50"></div>

                        <div class="section-header">
                            <h3 class="form-title row">Soft Skills</h3>
                            <div class="slick-arrows-top">
                                <buttton class="carousel-topNav-prev slick-custom-buttons" type="button"
                                    data-role="none" aria-label="Previous">
                                    <i class="icon-arrow-left"></i>
                                </buttton>
                                <buttton class="carousel-topNav-next slick-custom-buttons" type="button"
                                    data-role="none" aria-label="Next">
                                    <i class="icon-arrow-right"></i>
                                </buttton>
                            </div>
                        </div>

                        <div class="row post-carousel-twoCol post-carousel">
                            <div class="post post-over-content col-md-6">
                                <div class="details clearfix">
                                    <a href="https://awato.co/5-aspects-emotional-intelligence-matter/" class="category-badge">Soft Skills</a>
                                    <h4 class="post-title">
                                        <a href="https://awato.co/5-aspects-emotional-intelligence-matter/">The 5 Aspects of Emotional Intelligence and Why They Matter</a>
                                    </h4>
                                    <ul class="meta list-inline mb-0">
                                        <li class="list-inline-item">
                                            <a href="https://awato.co/5-aspects-emotional-intelligence-matter/">Read more</a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="https://awato.co/5-aspects-emotional-intelligence-matter/">
                                    <div class="thumb rounded">
                                        <div class="inner">
                                            <img src="images/posts/3.png" alt="">
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="post post-over-content col-md-6">
                                <div class="details clearfix">
                                    <a href="https://www.mindtools.com/pages/article/newLDR_45.htm" class="category-badge">Soft Skills</a>
                                    <h4 class="post-title">
                                        <a href="https://www.mindtools.com/pages/article/newLDR_45.htm">Emotional Intelligence in Leadership</a>
                                    </h4>
                                    <ul class="meta list-inline mb-0">
                                        <li class="list-inline-item ">
                                            <a href="https://www.mindtools.com/pages/article/newLDR_45.htm">Read more</a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="https://www.mindtools.com/pages/article/newLDR_45.htm">
                                    <div class="thumb rounded">
                                        <div class="inner">
                                            <img src="images/posts/3.jpg" alt="">
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="post post-over-content col-md-6">
                                <div class="details clearfix">
                                    <a href="https://www.truity.com/test/career-personality-profiler-test" class="category-badge">Career personality profiler</a>
                                    <h4 class="post-title">
                                        <a href="https://www.truity.com/test/career-personality-profiler-test">Find the Best Career for Your Personality and Interests</a>
                                    </h4>
                                    <ul class="meta list-inline mb-0">
                                        <li class="list-inline-item">
                                            <a href="https://www.truity.com/test/career-personality-profiler-test">Read more</a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="https://www.truity.com/test/career-personality-profiler-test">
                                    <div class="thumb rounded">
                                        <div class="inner">
                                            <img src="images/posts/4.jpg" alt="">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="spacer" data-height="50"></div>
                        <div class="spacer" data-height="50"></div>

                        <div class="section-header">
                            <h3 class="form-title row">About us</h3>
                        </div>
                        <div class="section-header">
                            <div class="mot__container bd-grid">
                    <div class="mot__img">
                        <img src="img/directeur.jpg" alt="">
                    </div>
                    
                    <div>

                        <p class="mot_title">Ahmed Mouchtachi</p>
                        <p class="mot__subtitle">Directeur de l'ENSAM Casablanca</p>
                        <p class="mot__text about__details-description"> "Dans le cadre de notre stratégie visant à renforcer les soft skills et les compétences transversales (savoirs comportementaux, d'attitudes, de compétences personnelles, humaines et relationnelles) de nos futurs ingénieurs, nous sommes très heureux de lancer notre nouvelle académie « ENSAM Casablanca Skills Academy ». <br> <br>ENSAM Casablanca Skills Academy est une plateforme d’apprentissage qui propose une large gamme de formations et de certifications en ligne de haute qualité et dans tous les domaines de développement des nouvelles compétences (Profesionnal skills, life skills, civic skills, langues, etc.). L’académie se propose également de développer de nouvelles compétences aux ensamiens de Casablanca par le biais de partenariats de formations signés avec des leaders importants de la formation et de l’emploi au Maroc et par l’organisation d’actions citoyennes le long de l’année académique."</p>           
                    </div>      

                    <div class="spacer" data-height="50"></div>

                    <div class="mot__img">
                        <img src="img/khalid.jpg" alt="">
                    </div>
                    
                    <div>
                        <p class="mot_title">Khalid Lahyani</p>
                        <p class="mot__subtitle">Professeur de l'enseignement supérieur à l'ENSAM Casablanca</p>
                        <p class="mot__text about__details-description"> "Les soft skills aujourd'hui sont des compétences indispensables pour la carrière d'un étudiant ingénieur. Dans le cadre de leur carrière professionnelle, en effet, nos ingénieurs sont amenés à collaborer avec d’autres corps de métiers qui n’ont pas nécessairement la « culture ingénieur ». <br> <br> Nous souhaitons donc par le biais de ENSAM Casablanca Skills Academy d'inculquer à nos étudiants ingénieurs durant leurs années d'études au sein de l'ENSAM de Casablanca les compétences Soft skills prioritaires, dont notamment le leadership, le management, la communication de manière respectueuse et impactante et la gestion d’un projet individuel ou collectif.<br>Les compétences personnelles, humaines et relationnelles sont aujourd'hui aussi importantes que les hard skills dans une carrière professionnelle."</p>           
                    </div> 
                </div>
                </div>
                <div class="spacer" data-height="50"></div>
                 <div class="section-header">
                <h3 class="row form-title">Webmasters</h3>
                <div class=" row section1">
                        <div class="column">
                          <div class="card">
                            <div class="img-container">
                              <img src="img/loubna.jpg" />
                            </div>
                            <h3>Loubna El Attar</h3>
                            <p>Artifical Intelligence & Computer Engineering Student at ENSAM Casablanca.</p>
                            <div class="icons">
                              <a href="https://www.linkedin.com/in/loubna-el-attar/" target="_blank">
                                <i class="fab fa-linkedin"></i>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="column">
                          <div class="card">
                            <div class="img-container">
                              <img src="img/simo.jpeg" />
                            </div>
                            <h3>Mohammed Sghiouri</h3>
                            <p>Artifical Intelligence & Computer Engineering Student at ENSAM Casablanca.</p>
                            <div class="icons">
                              <a href="https://www.linkedin.com/in/mohammed-sghiouri-0509401a3/" target="_blank">
                                <i class="fab fa-linkedin"></i>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>

                </div>

            </div>
        </div>
    </div>
</section>

<!-- contact us -->

<div id="contact" class="container">

      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">                        
            <h2 class="form-title">Contact Us</h2>
          </div>
      </div>

      <div class="row">

          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

              <form id="contact-form" name="myForm" class="form" action="#" onsubmit="return validateForm()" method="POST" role="form">

                  <div class="form-group">
                      <label class="form-label" id="nameLabel" for="name"></label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Your name" tabindex="1">
                  </div>

                  <div class="form-group">
                      <label class="form-label" id="emailLabel" for="email"></label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" tabindex="2">
                  </div>

                  <div class="form-group">
                      <label class="form-label" id="subjectLabel" for="sublect"></label>
                      <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" tabindex="3">
                  </div>

                  <div class="form-group">
                      <label class="form-label" id="messageLabel" for="message"></label>
                      <textarea rows="6" cols="60" name="message" class="form-control" id="message" placeholder="Your message" tabindex="4"></textarea>                                 
                  </div>

                  <div class="text-center margin-top-25">
                      <button type="submit" class="btn btn-mod btn-border btn-large">Send Message</button>
                  </div>

              </form>
            
          </div>

      </div>
      
    </div>

    <!-- footer  -->
    <footer class="footer">
        <div class="container">
            <div class="row">


                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-about"><br>
                        <p>ECA SKILLS, wake up your potential.
                            <br><br>
                        eca.skills@ensam-casa.ma</p>
                    </div>
                </div>

                <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                    <div class="footer-widget">
                        <h6>Follow Us</h6>
                        <ul>
                            <li><a href="https://www.instagram.com/eca.skills/"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://www.linkedin.com/groups/9177446/"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i></a></li>

                        </ul>
                    </div>
                </div>

                <div class="col-lg-2  col-md-3 col-sm-6">
                    <div class="footer-widget">
                        <h6>Links</h6>
                        <ul>
                            <li><a href="contact.php">Contact Us</a></li>
                            <li><a href="signlog.php">Sign up</a></li>
                            <li><a href="civic.php">Civic Engagement Initiatives</a></li>

                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
                    <div class="footer-widget">
                        <h6>NewsLetter</h6>
                        <div class="footer-newslatter">
                            <p>Subscribe to our newsletter!</p>
                            <form method="post">
                                <input type="text" placeholder="Your Email">
                                <button type="submit"><span><i class="fa fa-envelope"
                                            arial-hidden="true"></i></span></button>
                            </form>
                        </div>

                    </div>
                </div>


            </div>

            <div >
                <div class="col-lg-12 text-center">
                    <div class="footer-copyright-text">
                        <p>Copyright &copy; 2022 All rights reserved | This website was developed by Loubna El Attar & Mohammed Sghiouri</p>
                    </div>
                </div>
            </div>


        </div>

    </footer>
                    
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