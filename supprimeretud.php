<?php
try 
    {
        $ca=new PDO("mysql:host=localhost;dbname=phpmyadmin",'root','');
        $ca->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
    } 
    catch (PDOException $error) 
    {
        echo "connection failed : ".$error->getMessage() ."<br/>";
    }


    if ((!empty ($_GET['cno'])) && (!empty($_GET['cour'])))
    {
        $rew=$ca->prepare("DELETE FROM `CoursEtudiant` WHERE EtuCne=:valll AND NomCours=:valb");
        $rew->execute(array('valll'=>$_GET['cno'],':valb'=>$_GET['cour']));
        header('Location: ListeEtudiants.php');
    }

    if ((!empty ($_GET['CNE'])) )
    {
        $kl=$_GET['CNE'];
        $rew=$ca->prepare("DELETE FROM `newstudents`  WHERE CNE=:valll ");
        $rew->execute(array('valll'=>$_GET['CNE']));
        header('Location: ApprouvEtu.php');
    }


    if ( !empty($_GET['ab']) && !empty($_GET['namecourse']) && !empty($_GET['nameimage']) )
    {
        $up=$_GET['ab'];
        $cour=$_GET['namecourse'];
        unlink('certifs/'.$_GET['nameimage']);
        $reqe=$ca->prepare("UPDATE `CoursEtudiant` SET `Approuver`= 0, `ImageName`='None', `CertifImg`=0 WHERE `EtuCne` =:val1 AND `NomCours`=:val2 ");
        $reqe->execute(array(':val1'=>$up,':val2'=>$cour));
        header('Location: ApprouvCertif.php');
    }

?>