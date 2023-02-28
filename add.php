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

    if ( !empty($_GET['CNE']) )
    {
        $upd=$_GET['CNE'];
        $reqee=$dbco->prepare("UPDATE `newstudents` SET `Active`= 1 WHERE `CNE` =:val1 ");
        $reqee->execute(array(':val1'=>$upd));
        header('Location: ApprouvEtu.php');
    }

    if ( !empty($_GET['ab']) && !empty($_GET['namecourse']) )
    {
        $up=$_GET['ab'];
        $cour=$_GET['namecourse'];
        $reqe=$dbco->prepare("UPDATE `CoursEtudiant` SET `Approuver`= 1 WHERE `EtuCne` =".$up." AND `NomCours`=:val2 ");
        $reqe->execute(array(':val1'=>$up,':val2'=>$cour));
        header('Location: ApprouvCertif.php');
    }

?>



