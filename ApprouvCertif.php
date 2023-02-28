<?php
  session_start();
?>

<?php
    include('connexion.php');
?>


<?php
if ($_SESSION['etu_or_instr']=='instructeur')
{
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/styles.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css">
        <link rel="shortcut icon" href="img/ECSA.png" type="image/x-icon">
        <link rel="stylesheet" href="css/styleda.css?v=<?php echo time(); ?>">
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
                        <a href="index.php" class="nav__logo">ECA Skills</a>
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
            <h1> &nbsp Manage Certifications</h1>
        </section>

        <?php include('ProfileMenu.php') ?>
        
        <table class="table table-striped tab6">
            <?php
                $ls=$ca->prepare("SELECT * FROM CoursEtudiant WHERE Approuver = 0 AND ImageName NOT LIKE 'None' ");
                $ls->execute();
                $table=$ls->fetchAll();
                $longeur=count($table);
                if ($longeur!=0)
                { 
                    foreach ($table as $etud)
                    {
                        if ( $etud['Approuver'] == 0 && $etud['ImageName']!= 'None' )
                        {
                            echo'<th scope="row">1</th>';
                            echo "<td>".$etud["EtuCne"]."</td>\n";
                            echo "<td>";
                            print('<a href ="certifs/'.$etud["ImageName"].'"> <img class="certif" src="certifs/'.$etud["ImageName"].'"></a>');
                            print('
                                    <td>
                                        <a href="add.php?ab='.$etud['EtuCne'].'& namecourse='.$etud['NomCours'].' ">  
                                            <i class="fa fa-plus-square"></i> 
                                        </a> 
                                    </td>
                                ');
                            print('
                                    <td>
                                        <a href="supprimeretud.php?ab='.$etud['EtuCne'].'& namecourse='.$etud['NomCours'].'& nameimage='.$etud['ImageName'].'">  
                                            <i class="fa fa-close"></i>
                                        </a> 
                                    </td>
                                '); 
                            echo '</tbody>';
                        }         
                    }
                }else{
                    echo "<td> No more requests. </td>";
                }      
        ?>
    </table>


        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="./floating-labels.js"></script>

    </body>
        

</html>



<?php }?>
