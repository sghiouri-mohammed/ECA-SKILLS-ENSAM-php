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
                        
                        <a href="profile.php" class="nav__link">

                            <ion-icon name="person-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">My profile</span>
                        </a>

                        <div  class="nav__link collapse1">
                            <ion-icon name="school-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Courses</span>

                            <ion-icon name="chevron-down-outline" class="collapse__link"></ion-icon>

                            <ul class="collapse__menu">
                                <a href="courses.php" class="collapse__sublink">All Courses</a>
                                <a href="mandcou.php" class="collapse__sublink">Mandatory Courses</a>
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
            <h1> &nbsp;&nbsp; My Informations</h1>
        </section>
        <?php include('ProfileMenu.php') ?>

        <br>

        <section>
            <table class="table table-striped tab6 text-center">
                <?php
                    include('connexion.php');
                        $ls=$ca->prepare("SELECT * FROM newstudents WHERE Active=1 AND CNE=:b ");
                        $ls->execute(array(':b'=>$_SESSION['ID']));
                        $table=$ls->fetchAll();
                        $longeur=count($table);
                        if ($longeur!=0)
                        {
                ?>
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">CNE</th>
                            <th scope="col">Last name</th>
                            <th scope="col">First name</th>
                            <th scope="col">Mail</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Registration date</th>
                        </tr>
                        </thead>
                        <?php 
                            $temp=1;
                            foreach ($table as $etud)
                            {
                                if ( $etud['Active'] == 1 )
                                {
                                    echo'';
                                    print('<th scope="row">'.$temp.'</th>');
                                    echo'<td>'.$etud["CNE"].'</td>';
                                    echo'<td> '.$etud['Nom'].'</td>';
                                    echo'<td> '.$etud['Prenom'].'</td>';
                                    echo'<td>'.$etud["Mail"].'</td>';
                                    echo'<td>'.$etud["Phone"].'</td>';
                                    echo'<td>'.$etud["Temps"].'</td>';                                           
                                    echo '</tbody>';
                                    $temp=$temp+1;
                                
                            
                            
                                }else{
                                    echo "<td>No students yet.</td>";
                                }   
                            }
                        }
                        ?>
            </table>
        </section>
<br><br>
        <section>
            <h1> &nbsp;&nbsp; My Courses</h1>
        </section>

        <section>
            <table class="table table-striped tab6 text-center">
                <?php
                        $q=$c->prepare("SELECT * FROM `CoursEtudiant` WHERE EtuCne=:k");
                        $q->execute(array(':k'=>$_SESSION['ID']));
                        $courses=$q->fetchAll();
                        $longueurcourses=count($courses);
                        if ($longueurcourses!=0)
                        {
                ?>
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Course Name</th>
                            <th scope="col">University</th>
                            <th scope="col">Link</th>
                            <th scope="col">My certif</th>
                            <th scope="col">Skills earned</th>
                        </tr>
                    </thead>
                        <?php 
                            $temp1=1;
                            foreach ($courses as $cour)
                            {
                                if ( $etud['Active'] == 1 )
                                {
                                    echo'';
                                    print('<th scope="row">'.$temp1.'</th>');
                                    echo'<td> '.$cour['NomCours'].'</td>';
                                    echo'<td>'.$cour["Universite"].'</td>';
                                    echo'<td><b><a style="color:skyblue;" href="'.$cour["Link"].'">Link</a></b></td>';
                                    if ( $cour['Approuver'] == 1 )
                                    {
                                        echo'
                                        <td> 
                                            <a href="certifs/'.$cour["ImageName"].'"  onclick="">
                                                <img style="display:inline;" width=40 height=40 src="certifs/'.$cour["ImageName"].'">
                                            </a>
                                        </td>';                                           
                                    }else{
                                        echo "<td>No Certificate Yet</td>";
                                    }
                                    echo'<td>'.$cour["Skill"].'</td>';                                           
                                    echo '</tbody>';
                                    $temp1=$temp1+1;
                            
                            
                                }else{
                                    echo "<td>No students yet.</td>";
                                }   
                            }
                        }
                        ?>
            </table>
        </section>

        
<script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
<script src="assets/js/main.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="./floating-labels.js"></script>

