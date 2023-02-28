<?php
  session_start();
?>

<?php 
    include('endsession.php');
?>
     
<?php
    include('connexion.php');
?>


<?php
if ($_SESSION['etu_or_instr']=='instructeur')
{
?>
<?php

$lcstu=$ca->prepare("SELECT * FROM courses ");
$lcstu->execute();
$listescoursetu=$lcstu->fetchAll();

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
        <link rel="shortcut icon" href="img/ECSA.png" type="image/x-icon">
        <link rel="stylesheet" href="css/bootstrap.min.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="css/floating-labels.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" type="text/css" href="https://fontawesome.com/icons">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
        
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
                        <a href="dashinst.php" class="nav__link active">
                            <ion-icon name="home-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Dashboard</span>
                        </a>
                        <a href="profile.php" class="nav__link">

                            <ion-icon name="person-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">My profile</span>
                        </a>

                        <div  class="nav__link collapse1">
                            <ion-icon name="school-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Courses</span>

                            <ion-icon name="chevron-down-outline" class="collapse__link"></ion-icon>

                            <ul class="collapse__menu">
                                <a href="index.php" class="collapse__sublink">Courses</a>
                                <a href="mandcou.php" class="collapse__sublink">Mandatory</a>
                            </ul>
                        </div>
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
                        
                    </div>
                </div>

                <a href="logout.php" class="nav__link">
                    <ion-icon name="log-out-outline" class="nav__icon"></ion-icon>
                    <span class="nav__name">Log Out</span>
                </a>
            </nav>
        </div>
        <section>
            <h1>All Students per Sessions </h1>
        </section>

        <?php include('ProfileMenu.php') ?>

        <?php 
            $lc=$ca->prepare("SELECT * FROM CoursEtudiant ");
            $lc->execute();
            $listescourse=$lc->fetchAll();
            $nbr=count($listescourse);
            if (count($listescourse) == 0)
            {
                print("<table> <thead> <tr> Pas De session Ouverte Pour l'instant </tr></thead></table>");
            }
        ?>
        
        <?php
          foreach ($listescoursetu as $cours)
          {
            $lc=$ca->prepare("SELECT * FROM CoursEtudiant WHERE NomCours=:val ");
            $lc->execute(array(':val'=>$cours['NomCours']));
            $listescourse=$lc->fetchAll();
            $nbr=count($listescourse);
            
            if ( $nbr!=0 )
            {
              print('
                <table class="table table-striped tab6 text-center" >
                    <thead>
                    <tr>
                    <br> <br> <br>
                    <u>
                        <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '.$cours['NomCours'].' </b>
                    </u>
                    <br><br>
                    </tr>
                        <tr>
                            <th scope="col">CNE</th>
                            <th scope="col">Last name</th>
                            <th scope="col">First name</th>
                            <th scope="col">Mail</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Registration date</th>
                            <th> Actions </th>  
                        </tr>
                    </thead>
                <tbody>
                ');
            }

            foreach ( $listescourse as $coursetu)
            {
              $ls=$ca->prepare("SELECT * FROM newstudents WHERE CNE=:valeur11 AND Active=1 ");
              $ls->execute(array(':valeur11'=>$coursetu['EtuCne']));
              $listestuden=$ls->fetchAll();

                  foreach ( $listestuden as $etud )
                  {
                      print('
                        <tr class="priority-600">
                          <td><strong>'.$etud['CNE'].'</strong></td> 
                          <td><strong>'.$etud['Prenom'].'</strong></td>
                          <td><strong>'.$etud['Nom'].'</strong></td>
                          <td><strong>'.$etud['Mail'].'</strong></td>
                          <td><strong>'.$etud['Phone'].'</strong></td>
                          <td><strong>'.$etud['Temps'].'</strong></td>
                          <td>
                          <a href="supprimeretud.php?cno='.$etud['CNE'].' &cour='.$cours['NomCours'].'"><img src="https://img.icons8.com/plasticine/40/000000/filled-trash.png"/></a>
                          </td>');
                            if( $coursetu['ImageName'] != 'None' )
                            {
                              print('
                                  <td><a href="certifs/'.$coursetu["ImageName"].'"  onclick=""><img src="https://img.icons8.com/ios-filled/40/000000/contract.png"/></a></td>
                              ');
                            }
                          print('</tr>');      
                  }
            }
            
          }
            
          ?>
        
        


 <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="./floating-labels.js"></script>

 
<?php }?>