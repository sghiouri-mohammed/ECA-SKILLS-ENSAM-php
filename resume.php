<?php session_start();?>
<?php
	include('connexion.php');
    $query=$c->prepare("SELECT * FROM `CoursEtudiant` WHERE EtuCne=:valeur");
    $query->execute(array(':valeur'=>$_SESSION['ID']));
    $courses=$query->fetchAll();
?>

<?php include('connexion.php');

    $req=$ca->prepare("SELECT ProfileImg FROM newstudents WHERE CNE=:ba ");
    $req->execute(array(':ba'=>$_SESSION['ID']));
    $imgs = $req->fetchAll();
    foreach ($imgs as $key) {
      $img = $key['ProfileImg'];
    }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ECSA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/css/resumestyle.css?v=<?php echo time(); ?>">
	<link rel="shortcut icon" href="img/ECSA.png" type="image/x-icon">
</head>
<body>

<div class="resume_wrapper">
	<div class="resume_left">
		<div class="resume_image">
			<?php 
      print ('
        <img src=profils/'.$img.' alt="Resume_image">
      ');
    
      

  ?>

		</div>
		<div class="resume_bottom">
			<div class="resume_item resume_namerole">
				<div class="name"><?php echo  $_SESSION['Nom']."" .$_SESSION['Prenom'] ; ?></div>
				<div class="role"> Engineer STUDENT</div>
			</div>
			<div class="resume_item resume_profile">
				<div class="resume_title">Profile</div>
				<div class="resume_info">Hi, my name is <?php echo  $_SESSION['Nom']."<br>" .$_SESSION['Prenom'] ; ?>. </div>
			</div>
			<div class="resume_item resume_contact">
				<div class="resume_title">Contact</div>
				<div class="resume_info">
					<div class="resume_subtitle">Phone</div>
					<div class="resume_subinfo"><?php echo  $_SESSION['Phone']; ?></div>
				</div>
				<div class="resume_info">
					<div class="resume_subtitle">Email</div>
					<div class="resume_subinfo"><?php echo  $_SESSION['Email']; ?></div>
				</div>
			</div>		
			<div class="resume_item resume_skills">
				<div class="resume_title">Skills</div>
				<div class="resume_info">
					<?php 
						foreach ($courses as $cour) {
						print('
								<div class="resume_subtitle">'.$cour['Skill'].'</div>
						');
						}
					?>
					
					
				</div>
				
			</div>
		</div>

	</div>
	<div class="resume_right">
		<div class="resume_item resume_namerole">
			<div class="name"><?php echo  $_SESSION['Nom']." " .$_SESSION['Prenom'] ; ?></div>
			<div class="role">Engineer Student</div>
		</div>
		<div class="resume_item resume_education">
			<div class="resume_title">Certifications</div>
			<div class="resume_info">
				<?php 
					foreach ($courses as $cour) {
						if( $cour['ImageName'] != 'None' )
						{
							print('
									<div class="resume_data">
										<div class="year">2022</div>
										<div class="content">
											<p>'.$cour['NomCours'].'</p>
											<p style="color:gray;" > <u>'.$cour['Universite'].'</u></p>
										</div>
									</div>
								');
						}
					
					}
				?>	
			</div>
		</div>
		
</div>

</body>
</html>