
<!---------- Hide and Show js Profile session/ LOGout  --------->
<?php include('connexion.php');

    $req=$ca->prepare("SELECT ProfileImg FROM newstudents WHERE CNE=:ba ");
    $req->execute(array(':ba'=>$_SESSION['ID']));
    $imgs = $req->fetchAll();
    foreach ($imgs as $key) {
      $img = $key['ProfileImg'];
    }

?>

<style> 
    ol, ul{
      padding-left: 1rem;
    }
</style>
<div class="action">

<div class="profile" onclick="ShowAndHide()">
    <?php 
    if ($_SESSION['etu_or_instr']=='etudiant')
    {
      print ('
        <img src=profils/'.$img.'>
      ');
    }elseif ($_SESSION['etu_or_instr']=='instructeur'){
      print('
        <img src="images/face4.jpg">
    ');
    }
      

  ?>
</div>

<div class="menu" id="#menu" >
  <h3>
    <?php echo  $_SESSION['Nom']."<br>" .$_SESSION['Prenom'] ; ?> <br> 
    <span class="fas fa-caret-down"></span> 
  </h3>
  
  <ul>

    <?php 
    if ($_SESSION['etu_or_instr']=='etudiant')
    {
      echo '<li><img src="images/profile.png"><a href="Profile.php">My information</a></li>';
    }elseif ($_SESSION['etu_or_instr']=='instructeur'){
      
    }
  ?>

  <?php 
    if ($_SESSION['etu_or_instr']=='etudiant')
    {
      echo '<li><img src="images/courses.png"><a href="index.php">Courses</a></li>';
    }elseif ($_SESSION['etu_or_instr']=='instructeur'){
      echo '<li><img src="images/courses.png"><a href="ListeEtudiants.php">Students</a></li>'; 
    }
  ?>




      
      <li><img src="images/mandcou.png"><a href="mandcou.php">Mandatory Courses</a></li>
      <li><img src="images/logout.png"><a href="logout.php">Logout</a></li>
  </ul>
</div>
</div>

<!---------- Hide and Show js Profile session/ LOGout  --------->

<script>
function ShowAndHide ()
{
    var x = document.getElementById("#menu");
    if (x.style.display === "block") 
    {
      x.style.display = "none";
    }else{

      x.style.display = "block";
    }
}
</script>