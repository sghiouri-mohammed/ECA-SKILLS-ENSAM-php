

<?php 

    function test_input($par) {
        $par = trim($par);
        $par = stripslashes($par);
        $par = htmlspecialchars($par);
        return $par;
    }

    if ((!empty($_POST['NomCours'])) && (!empty($_POST['Link'])) && (!empty($_POST["Uni"])) && (!empty($_POST["skill"])) ){
        $NomCours=test_input($_POST['NomCours']);
        $Uni=test_input($_POST["Uni"]);
        $Link=$_POST['Link'];
        $Skill=$_POST['skill'];

    include('connexion.php');

    $table1 = $sq->prepare(" SELECT `NomCours`, `Uni` ,`Link`,`Skill` FROM `courses` ");
    $table1->execute();
    $course1 = $table1->fetchAll();
    $d=0;
    foreach ( $course1 as $i )
    {
        if ($NomCours == $i['NomCours'] )
        {
            $d=1;    
        }
    }
    if ($d==1)
    {
            echo " <p>This course already exists! </p> ";
    }
    else
    {
        $statement1 = $sq->prepare("INSERT INTO courses(NomCours,Uni,Link,Skill) VALUES (?,?,?,?)");
        $statement1->execute(array($NomCours,$Uni,$Link,$Skill));
        echo " <p>Course added! <p> ";
    }

    }                
?>
