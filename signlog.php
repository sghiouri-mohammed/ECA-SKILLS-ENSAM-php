<?php session_start();
	$_SESSION['last_login_time']=time();
	include('connexion.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ensam Casablanca Skills Academy</title>
	<link rel="stylesheet" href="css/stylelog.css?v=<?php echo time(); ?>" >
	<link rel="shortcut icon" href="img/ECSA.png" type="image/x-icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	
	<style>
			
		body{
			margin-top: 1%;
		}
		aside{
			position: absolute;
			color: #363859;
			margin-top: -47%;
		}
	</style>
	
<?php
		$servname = 'localhost';
		$dbname = 'phpmyadmin';
		$user = 'root';
		$pass = '';
		
		try{
			$dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
			$dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			$sql = "CREATE TABLE newstudents(
					CNE VARCHAR(30) NOT NULL,
					Prenom VARCHAR(30) NOT NULL,
					Nom VARCHAR(30) NOT NULL,
					Temps VARCHAR(50) NOT NULL,
					Mail VARCHAR(50) NOT NULL,
					Phone VARCHAR(50) NOT NULL,
					Password VARCHAR(200) NOT NULL,
					ProfileImg VARCHAR(30),
					Country VARCHAR(20),
					Education VARCHAR(100),
					BirthYear INT,
					Langage VARCHAR(20),
					Gender VARCHAR(10),
					Active BOOLEAN NOT NULL,
					UNIQUE(Mail))";
			$dbco->exec($sql);
		}
		
		catch(PDOException $e){
			// echo "Erreur : " . $e->getMessage();
		}
?>

<?php
            $servname = 'localhost';
            $dbname = 'phpmyadmin';
            $user = 'root';
            $pass = '';
            
            try{
                $salon = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                $salon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $salonn = "CREATE TABLE newinstructor(
                        CNE VARCHAR(30) NOT NULL,
                        Prenom VARCHAR(30) NOT NULL,
                        Nom VARCHAR(30) NOT NULL,
						Temps VARCHAR(50) NOT NULL,
                        Mail VARCHAR(50) NOT NULL,
						Phone VARCHAR(50) NOT NULL,
                        Password VARCHAR(200) NOT NULL,
                        Active BOOLEAN NOT NULL,
                        UNIQUE(Mail))";
                
                $salon->exec($salonn);
            }
            
            catch(PDOException $e){
            }
    ?> 

	<div class="container" id="container" style="height: 600px;">
	<div class="form-container sign-up-container">

	<form method="POST"> 
		<h4>Register</h4>
		<input class="h3" type="text" name="cne" placeholder="CNE/ID/APOGE...">
		<input class="h3" type="text" name="pren1" placeholder="First Name..." pattern="^[A-Za-z '-]+$">
		<input class="h3"  type="text" name="name1" placeholder="Last Name..." pattern="^[A-Za-z '-]+$">
		<input class="h3" type="text" name="tel" placeholder="Phone number..." pattern="06[0-9]{8}">
		<input class="h3" type="email" name="email1" placeholder="Email... ">
		<input class="h3" type="password" name="password1" placeholder="Password" maxlength="10">
		<div style="display: flex;"> 
		<input class="h3" type="radio" name="Genre" value="student">I am a student
		<input class="h3" type="radio" name="Genre" value="instructor">I am an instructor
		</div>

		<a href=""> <button type="submit">Sign Up 
		</button></a>
	</form>


		

	</div>
	<div class="form-container sign-in-container">
	<form method="POST"> 
	
			<h1>Sign In</h1>

			<div class="social-container">
		</div>
		<input type="email" name="email2" placeholder="Email / Phone number ... ">
		<input type="password" name="password2" placeholder="Password ... ">
		<div style="display: flex;"> 
			<input checked type="radio" name="Genree" value="studentt">I am a student
			<input type="radio" name="Genree" value="instructorr">I am an instructor
		</div>
		<button>Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello!</h1>
				<p>Enter your details and start journey with ECSA</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
	</div>

	<script type="text/javascript" src="js/sign.js"></script>





<!-------------------------------------------------- LE CODE POUR AJOUTER DES ETUDIANTS ET DES INSTRUCTEURS --------------------------------------->


	<?php
	function test_input($par) {
	    $par = trim($par);
	    $par = stripslashes($par);
	    $par = htmlspecialchars($par);
	    return $par;
	}


		if ((!empty($_POST['cne'])) && (!empty($_POST['tel']))  && (!empty($_POST['name1']))&& (!empty($_POST['pren1']))&& (!empty($_POST['email1']))&& (!empty($_POST['password1'])))
		{
			$cne=test_input($_POST['cne']);
			$tel=test_input($_POST['tel']);
			$data=date('d-m-y');
			$create_name=test_input($_POST['name1']);
			$create_pren=test_input($_POST['pren1']);
			$create_mail=test_input($_POST['email1']);
			$new_passwd=md5($_POST['password1']);
			$genre=test_input($_POST['Genre']);
			
			include('connexion.php');

			if (!filter_var($create_mail, FILTER_VALIDATE_EMAIL) || !preg_match("/^[a-zA-Z-' ]*$/",$create_name) || !preg_match("/^[a-zA-Z-' ]*$/",$create_pren) || !preg_match("/^[0][0-9]{9}$/",$tel)){
				echo " <aside>Invalid name or email or phone number format! <aside> ";
			}
			else{

				if ($genre == "student")
				{

					$table1 = $sq->prepare(" SELECT `CNE`, `Mail` FROM `newstudents` ");
					$table1->execute();
					$etu1 = $table1->fetchAll();
					$d=0;
					foreach ( $etu1 as $i )
					{
						if ($cne == $i['CNE'] || $create_mail == $i['Mail'] )
						{
							$d=1;
							
						}
					}
					if ($d==1)
					{
							echo " <aside>This account already exists! </aside> ";
					}
					else
					{
						$statement1 = $sq->prepare("INSERT INTO newstudents(CNE,Prenom,Nom,Temps,Mail,Phone,Password, Active) VALUES (?,?,?,?,?,?,?,0)");
						$statement1->execute(array($cne,$create_pren,$create_name,$data,$create_mail,$tel,$new_passwd));

						echo " <aside>Thank you! Please wait for authentication with registration servers! <aside> ";
					}
				}

				elseif ($genre == "instructor")
				{
					$table2 = $sq->prepare(" SELECT `CNE`, `Mail` FROM `newinstructor` ");
					$table2->execute();
					$etu2 = $table2->fetchAll();
					$d=0;
					foreach ( $etu2 as $n )
					{
						if ($cne == $n['CNE'] || $create_mail == $n['Mail'])
						{
							$d=1;
						}
					}
					if ($d==1)
					{
						echo "<aside>This account already exists! <aside>";
					}
					// in this condition we will make sure of the code entered by the instructor, 
					//we will have a database of these code, we will give them to the instructors
					elseif ( 0 == 0)
					{
						$statement2 = $sq->prepare("INSERT INTO newinstructor(CNE,Prenom,Nom,Temps,Mail,Phone,Password,Active) VALUES (?,?,?,?,?,?,?,0)");
						$statement2->execute(array($cne,$create_pren,$create_name,$data,$create_mail,$tel,$new_passwd));

						echo " <aside>Thank you! Please wait for authentication with registration servers! <aside> ";
					}
				}
			}	
		}
	?>



<!----------------------------------------- LE CODE DE CONNEXION ET SESSION DES ETUDIANTS ET DES INSTRUCTEURS ------------------------------------------>

	<?php

			include('connexion.php');

		if ((!empty($_POST['email2'])) && (!empty($_POST['password2'])) && (!empty($_POST['Genree'])) )
		{
			$sign_mail_or_phone=htmlspecialchars($_POST['email2']);
			$sign_passwd=htmlspecialchars($_POST['password2']);
			$genre1=htmlspecialchars($_POST['Genree']);

			if ($genre1 == "studentt")
			{
				$tab1 = $conn->prepare(" SELECT * FROM `newstudents` ");
				$tab1->execute();
				$etud1 = $tab1->fetchAll();
				$k=0;
				foreach ( $etud1 as $y )
				{
					if ( $sign_mail_or_phone == $y['Mail'] &&  md5($sign_passwd) == $y['Password']  )
					{
						$k=1;
						$_SESSION['etu_or_instr']='etudiant';
						$_SESSION['Date']=date('d-m-y');
						$_SESSION['Nom'] = $y['Nom'];
						$_SESSION['Prenom'] = $y['Prenom'];
						$_SESSION['Email']=$y['Mail'];
						$_SESSION['Phone']=$y['Phone'];
						$_SESSION['ID'] = $y['CNE'];
						$newreq = $conn->prepare(" SELECT * FROM `newstudents` WHERE CNE=:bal ");
						$newreq->execute(array(':bal'=>$_SESSION['ID']));
						$elem = $newreq->fetchAll();
						foreach ($elem as $p)
						{
							if ( $p['Active'] == 1 )
							{
								header('Location: dashboardStu.php');
							}
							if ($p['Active'] == 0)
							{
								echo "<aside> Please wait for authentification </aside>";
							}
						}
					}		
				}

				if ( $k==0 )
				{
					echo "<aside> Email or Password is incorrect </aside>";
				}
			}

			elseif ($genre1 == "instructorr")
			{
				$tab2 = $conn->prepare(" SELECT `CNE`, `Prenom`, `Nom`, `Temps`, `Mail`, `Phone`, `Password` FROM `newinstructor` ");
				$tab2->execute();
				$etud2 = $tab2->fetchAll();
				foreach ( $etud2 as $y )
				{
					if ( $sign_mail_or_phone == $y['Mail'] &&  md5($sign_passwd) == $y['Password'] )
					{
						$_SESSION['etu_or_instr']='instructeur';
						$_SESSION['Nom'] = $y['Nom'];
						$_SESSION['Date']=date('d-m-y');
						$_SESSION['Prenom'] = $y['Prenom'];
						$_SESSION['Email']=$y['Mail'];
						$_SESSION['Phone']=$y['Phone'];
						$_SESSION['ID'] = $y['CNE'];
						header('Location: dashinst.php');
					}
					else{
						echo "<aside>Sorry, incorrect email or password!</aside> ";
						
					}
				}
			}
		}
	?>

</body>
</html>