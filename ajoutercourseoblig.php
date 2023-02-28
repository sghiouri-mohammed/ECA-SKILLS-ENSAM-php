<?php session_start();?>
<?php

    $servname = 'localhost';
    $dbname = 'phpmyadmin';
    $user = 'root';
    $pass = '';
    try{
        $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
    }
?>

<?php
    if ( (isset($_GET['cn'])) && (isset($_GET['link'])) && (isset($_GET['univ'])) && (isset($_GET['skill'])) )
    {
        $pp = $_GET['cn'];
        $cl = $_GET['link'];
        $uni=$_GET['univ'];
        $skil=$_GET['skill'];

        $req=$dbco->prepare("INSERT INTO `CoursEtudiant`(`EtuCne`, `NomCours`, `Universite`, `Link`, `CertifImg`,`ImageName`,`Approuver`,`Skill`) VALUES (?,?,?,?,0,'None',0,?)");
        $req->execute(array($_SESSION['ID'],$pp,$uni,$cl,$skil));
        header('Location: mandcou.php');
 
    }
?>