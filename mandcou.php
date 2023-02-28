<?php
  session_start();
?>

<?php 
    include('endsession.php');
?>

<?php
            $servname = 'localhost';
            $dbname = 'phpmyadmin';
            $user = 'root';
            $pass = '';
            
            try{
                $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $sql = "CREATE TABLE CoursEtudiant(
                        EtuCne VARCHAR(100) NOT NULL,
                        NomCours VARCHAR(100) NOT NULL,
                        Universite VARCHAR(100) NOT NULL,
                        Link VARCHAR(100) NOT NULL,
                        CertifImg BLOB,
                        ImageName VARCHAR(20),
                        Approuver BOOLEAN NOT NULL,
                        Skill VARCHAR(100) NOT NULL
                        )";
                
                $dbco->exec($sql);
            }
            
            catch(PDOException $e){
            }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/styles.css?v=<?php echo time(); ?>">
        <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css">
        <link rel="stylesheet" href="css/styleda.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="shortcut icon" href="img/ECSA.png" type="image/x-icon">
        <link rel="stylesheet" href="css/floating-labels.css">
        
        <title>Dashboard</title>
    </head>
    <body id="body-pd">
        <div class="l-navbar" id="navbar">
            <nav class="nav">
                <div>
                    <div class="nav__brand">
                        <ion-icon name="menu-outline" class="nav__toggle" id="nav-toggle"></ion-icon>
                        <a href="#" class="nav__logo">ECA Skills</a>
                    </div>
                    <div class="nav__list">
                        <?php if ($_SESSION['etu_or_instr']=='etudiant') 
                            print('
                            <a href="dashboardStu.php" class="nav__link active">
                                <ion-icon name="home-outline" class="nav__icon"></ion-icon>
                                <span class="nav__name">Dashboard</span>
                            </a>
                            ');
                        ?>
                        <?php if ($_SESSION['etu_or_instr']=='instructeur') 
                            print('
                            <a href="dashinst.php" class="nav__link active">
                                <ion-icon name="home-outline" class="nav__icon"></ion-icon>
                                <span class="nav__name">Dashboard</span>
                            </a>
                            ');
                        ?>
                        
                        <a href="#" class="nav__link">

                            <ion-icon name="person-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">My profile</span>
                        </a>

                        <div  class="nav__link collapse1">
                            <ion-icon name="school-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Courses</span>

                            <ion-icon name="chevron-down-outline" class="collapse__link"></ion-icon>

                            <ul class="collapse__menu">
                                <a href="courses.php" class="collapse__sublink">Courses</a>
                                <a href="mandcou.php" class="collapse__sublink">Mandatory</a>
                            </ul>
                        </div>
                        <?php if ($_SESSION['etu_or_instr']=='instructeur') 
                            print('
                            <div  class="nav__link collapse1">
                                <ion-icon name="folder-outline" class="nav__icon"></ion-icon>
                                <span class="nav__name">Students</span>

                                <ion-icon name="chevron-down-outline" class="collapse__link"></ion-icon>

                                <ul class="collapse__menu">
                                    <a href="ListeEtudiants.php" class="collapse__sublink">List</a>
                                    <a href="ListeSessions.php" class="collapse__sublink">Sessions</a>
                                    <a href="ApprouvEtu.php" class="collapse__sublink">Manage sutudents</a>
                                    <a href="ApprouvCertif.php" class="collapse__sublink">Manage Certifications</a>
                                </ul>
                            </div>
                            ');
                        ?>
                        
                        
                    </div>
                </div>

                <a href="logout.php" class="nav__link">
                    <ion-icon name="log-out-outline" class="nav__icon"></ion-icon>
                    <span class="nav__name">Log Out</span>
                </a>
            </nav>
        </div>
        <section>
            <h2 style="margin: 1%;">Mandatory Courses</h2>
        </section>
        <?php include('ProfileMenu.php'); ?>
        <section class="Ongoing section" id="certifications">
        <div class="work__container3 bd-grid">
      <?php
          include('connexion.php');

          $query=$c->prepare("SELECT * FROM `courses`");
          $query->execute();
          $courses=$query->fetchAll();
                              
          foreach($courses as $cou)
          {
            echo '<div class="work__img">';
            print('<a href="'.$cou["Link"].'" class="work__img" >');
            echo  '<img src="img/coursera.jpg" alt="">';
            echo  ' </a>';
            echo  '<h3 class="title-sm">' .$cou["NomCours"].'</h3>';
            echo   '<p class="blog-text">';
            echo   $cou["Uni"];
            print('<br> <u>Learned skills: '.$cou['Skill'].'</u>');
            echo    '</p>';
            if ($_SESSION['etu_or_instr']=='etudiant')
            {
                print('<a style="display:flex;" href="ajoutercourseoblig.php?cn=' . $cou["NomCours"] . '& link=' . $cou["Link"] .'& univ='. $cou['Uni'] .'& skill='.$cou['Skill'].'" class="btn small">Enroll in the course &nbsp; <img src="https://img.icons8.com/material-two-tone/24/000000/add.png"/></a><br>'); 
            }

            $req=$dbco->prepare("SELECT * FROM `CoursEtudiant` WHERE EtuCne=:val AND NomCours=:val1 ");
            $req->execute(array(':val'=>$_SESSION['ID'],':val1'=>$cou['NomCours']));
            $re=$req->fetchAll();

            foreach ($re as $t)
            {
                if ($t['NomCours'] == $cou['NomCours']  )
                {
                  print('<u><b><a style="display:flex;" href="#" class="btn small" >Enrolled &nbsp &nbsp <img src="https://img.icons8.com/external-becris-lineal-becris/20/26e07f/external-check-mintab-for-ios-becris-lineal-becris-1.png"/></a></b></u><br><br>');  
                }
            }    
            echo '</div>';
          }
          ?>    
          </div>
      </section>
<script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
<script src="assets/js/main.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="./floating-labels.js"></script>