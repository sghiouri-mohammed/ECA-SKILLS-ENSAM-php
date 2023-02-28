<?php session_start() ?>

<?php
    try 
    {
        $c=new PDO("mysql:host=localhost;dbname=phpmyadmin",'root','');
        $c->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
    } 
    catch (PDOException $error) 
    {
        echo "connection failed : ".$error->getMessage() ."<br/>";
    }

    if (isset($_GET['name']))
    {
        $nam=$_GET['name'];
        $ui=$c->prepare("DELETE FROM `CoursEtudiant` WHERE  EtuCne=:valeu1 AND NomCours=:valeu2 ");
        $ui->execute(array(':valeu1'=>$_SESSION['ID'],':valeu2'=>$nam));
        $link="<script> window.open('dashboardStu.php','_self')</script>";
		echo $link;
    }
?>

