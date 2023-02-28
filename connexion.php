<?php 
    // $servername='sql113.epizy.com';
    // $dbname='epiz_31697473_phpmyadmin';
    // $user='epiz_31697473';
    // $password='GNa7BJDtKCvZ7';

    $servername = 'localhost';
    $dbname = 'phpmyadmin';
    $user = 'root';
    $password = '';

    try 
    {
        $ca=new PDO("mysql:host=$servername;dbname=$dbname",$user,$password);
        $ca->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
    } 
    catch (PDOException $error) 
    {
        // echo "connection failed : ".$error->getMessage() ."<br/>";
    }
?>

<?php 
    try 
    {
        $c=new PDO("mysql:host=$servername;dbname=$dbname",$user,$password);
        $c->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
    } 
    catch (PDOException $error) 
    {
        // echo "connection failed : ".$error->getMessage() ."<br/>";
    }
?>

<?php 
    try 
    {
        $sq=new PDO("mysql:host=$servername;dbname=$dbname",$user,$password);
        $sq->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
    } 
    catch (PDOException $error) 
    {
        // echo "connection failed : ".$error->getMessage() ."<br/>";
    }
?>

<?php 
    try 
    {
        $dbco=new PDO("mysql:host=$servername;dbname=$dbname",$user,$password);
        $dbco->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
    } 
    catch (PDOException $error) 
    {
        // echo "connection failed : ".$error->getMessage() ."<br/>";
    }
?>

<?php 
    try 
    {
        $conn=new PDO("mysql:host=$servername;dbname=$dbname",$user,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
    } 
    catch (PDOException $error) 
    {
        // echo "connection failed : ".$error->getMessage() ."<br/>";
    }
?>



