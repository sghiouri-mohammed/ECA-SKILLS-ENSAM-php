<?php session_start();
    include('endsession.php');
?>

<?php
if ( isset($_SESSION['etu_or_instr']) && $_SESSION['etu_or_instr']=='etudiant' )
{
?>

<?php

    include('connexion.php');
    $_SESSION['level']='';
    $query=$c->prepare("SELECT * FROM `CoursEtudiant` WHERE EtuCne=:valeur");
    $query->execute(array(':valeur'=>$_SESSION['ID']));
    $courses=$query->fetchAll();
    $_SESSION['nbrcertif']=0;
    foreach ($courses as $cer)
    {
      if ( $cer['ImageName'] != 'None' )
      {
        $_SESSION['nbrcertif']++;
      }
    }
    $OngoingCourses=count($courses);
    if ( 0 <= $_SESSION['nbrcertif'] &&  $_SESSION['nbrcertif'] < 3 )
    {
      $_SESSION['level'] = 'Beginner';
    }
    elseif ( 3 <= $_SESSION['nbrcertif'] &&  $_SESSION['nbrcertif'] < 6 ) 
    {
      $_SESSION['level'] = 'Intermediate';
    }
    elseif ( 6 <= $_SESSION['nbrcertif'] &&  $_SESSION['nbrcertif'] < 10 ) 
    {
      $_SESSION['level'] = 'Skilled';
    }
    elseif ( 10 <= $_SESSION['nbrcertif'] ) {
      $_SESSION['level'] = 'Expert';
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/styles.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css">
        <link rel="stylesheet" href="css/styleda.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="css/bootstrap.min.css?v=<?php echo time(); ?>">
        <link rel="shortcut icon" href="img/ECSA.png" type="image/x-icon">
        <link rel="stylesheet" href="css/floating-labels.css">
        
        <title>Dashboard</title>
    </head>

    <style>
        ol, ul {
            padding-left: 1rem;
        }
    </style>
   
    <body id="body-pd">

    <?php
        $req=$ca->prepare("SELECT * FROM newstudents WHERE CNE=:ba ");
        $req->execute(array(':ba'=>$_SESSION['ID']));
        $imgs = $req->fetchAll();
        foreach ($imgs as $key) {
          if ( empty($key['ProfileImg']) || empty($key['Country'])|| empty($key['Education']) || ($key['BirthYear'] == 0)  || empty($key['Langage']) & empty($key['Gender']) )
          {
            print('
                <div class="p-4 mb-6 navbar bg-light navbar-expand-lg navbar-light" style="margin-top:-36px;">

                    <a style="color:red;" href="CompleteProfile.php">Complete your profile</a>  
     
                </div>
            ');
          }
        }

    ?>
        <div class="l-navbar" id="navbar">
            <nav class="nav">
                <div>
                    <div class="nav__brand">
                        <ion-icon name="menu-outline" class="nav__toggle" id="nav-toggle"></ion-icon>
                        <a href="index.php" class="nav__logo">ECA Skills</a>
                    </div>
                    <div class="nav__list">
                        <a href="dashboardStu.php" class="nav__link active">
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
                        <a href="resume.php" class="nav__link">

                            <ion-icon name="folder-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">My resume</span>
                        </a>
                        
                    </div>
                </div>

                <a href="logout.php" class="nav__link">
                    <ion-icon name="log-out-outline" class="nav__icon"></ion-icon>
                    <span class="nav__name">Log Out</span>
                </a>
            </nav>
        </div>
        <section>
            <h2 style="margin: 1%;">Dashboard</h2>
        </section>

        <?php include('ProfileMenu.php'); ?>

        <section id="hero">
            <div class="container-xl">
                <div class="row gy-4">
                    <div class="col-lg-8 ">
                        <div class="post-tabs rounded bordered row gy-8 ml-3 tab5">
                            <h3 class="text-center">MBTI Personality Test</h3>
                            <p>The Myers-Briggs Personality Type Indicator is a self-report inventory designed to identify a person's personality type, strengths, and preferences. The questionnaire was developed by Isabel Myers and her mother Katherine Briggs based on their work with Carl Jung's theory of personality types.</p>
                            <p>Take the test:</p>
                            <div class="text-center">
                                   <a href="personality.php" class="bouton">MBTI personality test</a> 
                            </div>
                            
                            <div class="tab-content" id="postsTabContent">
                                <div class="lds-dual-ring"></div>
                                    <div class="tab-pane fade show active" id="popular" aria-labelledby="popular-tab"
                                        role="tabpanel">
                                    </div>
                                </div>
                            </div>


        <div class="post-tabs rounded bordered row gy-8 ml-3 tab5">
            <h3 class="text-center">Progress :<span> <?php echo $_SESSION['level']; ?></span></h3>
            <div class="tab-content" id="postsTabContent">
                <div class="lds-dual-ring"></div>
                    <div class="tab-pane fade show active" id="popular" aria-labelledby="popular-tab"
                        role="tabpanel">
                    </div>
                </div>
            
                <div class="post-tabs rounded bordered col-md-5 ml-3 table1">
                <h4 class="titre text-center">Total of ongoing courses</h4>
                <h3 class="text-center"><?php echo $OngoingCourses ?></h3>
                <div class="tab-content" id="postsTabContent">
                    <div class="lds-dual-ring"></div>
                        <div class="tab-pane fade show active" id="popular" aria-labelledby="popular-tab"
                            role="tabpanel">
                        </div>
                    </div>                             
                </div>

                <div class="post-tabs rounded bordered col-md-5 ml-3 table1">
                <h4 class="titre text-center">Total of certifications</h4>
                <h3 class="text-center"><?php echo $_SESSION['nbrcertif'] ?></h3>
                <div class="tab-content" id="postsTabContent">
                    <div class="lds-dual-ring"></div>
                        <div class="tab-pane fade show active" id="popular" aria-labelledby="popular-tab"
                            role="tabpanel">
                        </div>
                    </div>                               
                </div>

                
            </div>
            <div class="post-tabs rounded bordered row gy-8 ml-3 tab5">
            <h3 class="text-center">Ongoing Courses</h3>
            <div class="tab-content" id="postsTabContent">
                <div class="lds-dual-ring"></div>
                    <div class="tab-pane fade show active" id="popular" aria-labelledby="popular-tab"
                        role="tabpanel">
                    </div>
                </div>

                <?php
                    foreach($courses as $cou)
                    {
                        print('
                            <div class="post-tabs rounded bordered col-md-5 ml-3 table1">
                                <h5>'.$cou["NomCours"].'</h5>
                                <p class="titre">' .$cou["Universite"].'</p>
                                <h6> <u>Learned skills: '.$cou['Skill'].'</u></h6>
                                <a href="abondcours.php?name='. $cou['NomCours'] .'" style="display:flex;" class="bouton"><img src="https://img.icons8.com/external-tanah-basah-detailed-outline-tanah-basah/30/fa314a/external-cross-user-interface-tanah-basah-detailed-outline-tanah-basah.png"/> Unenroll</a>

                                <div class="tab-content" id="postsTabContent">
                                    <div class="lds-dual-ring"></div>
                                        <div class="tab-pane fade show active" id="popular" aria-labelledby="popular-tab"
                                            role="tabpanel">
                                        </div>
                                    </div>                             
                            </div> 
                        ');
                    }
                                
                ?>

                </div>


            <div class="post-tabs rounded bordered row gy-8 ml-3 tab5">
            <h3 class="text-center">Add a Certifcate</h3>
            <div class="spacer padding-30" data-height="50"></div>
            <form method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="form-group col-xs-12 floating-label-form-group">
                    <label for="title">Title</label>
                    <input class="form-control" type="text" name="nomcour" placeholder="Title">
                    </div>
                </div>
                
                
                <div class="row">
                    <div class="form-group col-xs-8 floating-label-form-group">
                    <label for="Learned Skills">Upload the certificate</label>
                    <input class="form-control" name="image" required type="file"placeholder="Upload certifcate">
                    </div>
                </div>
                <div class="text-center">
                    <input class="bouton" type="submit" value="Submit"> 
                </div>
                
            </form>



<?php 
    include('connexion.php');

    function test_input($var) 
    {
        $var = trim($var);
        $var = stripslashes($var);
        $var = htmlspecialchars($var);
        return $var;
    }
    function genererChaineAleatoire($longueur = 10)
    {
        $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $longueurMax = strlen($caracteres);
        $chaineAleatoire = '';
        for ($i = 0; $i < $longueur; $i++)
        {
            $chaineAleatoire .= $caracteres[rand(0, $longueurMax - 1)];
        }
        return $chaineAleatoire;
    }
    
    if ((!empty($_POST['nomcour'])))
    {
        // var_dump($_FILES);
        $nomcour=test_input($_POST['nomcour']);
        $Certif=$_FILES["image"]["name"];
        $size = $_FILES["image"]["size"];
        $extension=pathinfo($Certif, PATHINFO_EXTENSION);
        $file_extension=strtolower(strchr($Certif,"."));
        $extensios_autorise=array('.png','.jpg','.jpeg');
        $randomno=rand (0,100);
        $rename='ECSA-'.date('Ymd'). $randomno;
        $newname=$rename.'.'.$extension;
        $file_temp_name=$_FILES['image']['tmp_name'];
        $file_dest='certifs/'.$newname;
        $table1 = $sq->prepare("SELECT * FROM `CoursEtudiant` WHERE EtuCne=:vall ");
        $table1->execute(array(':vall'=>$_SESSION['ID']));
        $course1 = $table1->fetchAll();
        $d=0;

        foreach ( $course1 as $p)
        {
            if ($p['NomCours'] == $nomcour ){
                $d=1;
            }
        }

        if ($d==1)
        {
            if ( in_array($file_extension,$extensios_autorise) )
            {
                if(move_uploaded_file($file_temp_name,$file_dest))
                {
                    $statement1 = $sq->prepare("UPDATE `CoursEtudiant` SET ImageName=:img , CertifImg=:siz WHERE EtuCne=:vall1 AND NomCours=:vall2 ");
                    $statement1->execute(array(':img'=>$newname,':siz'=>$size,':vall1'=>$_SESSION['ID'],'vall2'=>$nomcour));
                    echo " Certificate added!"; 
                }

            }else{
                echo "Only extensions .png/.jpg/.jpeg are autorised";
            }
        }else{
            echo "<span>Vous n'etes pas inscrit dans ce cours</span>";
        }
    }                
?>



                            <div class="tab-content" id="postsTabContent">
                                <div class="lds-dual-ring"></div>
                                    <div class="tab-pane fade show active" id="popular" aria-labelledby="popular-tab"
                                        role="tabpanel">
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                        <div class="col-lg-4">
                            <div class="post-tabs1 rounded bordered">
                                <h3 class="text-center">Calendar</h3>
                                <div class="tab-content" id="postsTabContent">
                                    <div class="lds-dual-ring"></div>
                                        <div class="tab-pane fade show active" id="popular" aria-labelledby="popular-tab"
                                            role="tabpanel">
                                            <div class="calendar">
                                                <div class="header">
                                                    <a data-action="prev-month" href="javascript:void(0)" title="Previous Month"><i></i></a>
                                                    <div class="text" data-render="month-year"></div>
                                                    <a data-action="next-month" href="javascript:void(0)" title="Next Month"><i></i></a>
                                                </div>
                                                <div class="months" data-flow="left">
                                                    <div class="month month-a">
                                                        <div class="render render-a"></div>
                                                    </div>
                                                    <div class="month month-b">
                                                        <div class="render render-b"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-tabs1 rounded bordered">
                                <h3 class="text-center">Quick Links</h3>
                                <div class="widget-content">
                                    <ul class="list">
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="personality.php">MBTI Test</a></li>
                                        <li><a href="ListeEtudiants.php">Students</a></li>
                                        <li><a href="mandcou.php">Courses</a></li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="postsTabContent">
                                    <div class="lds-dual-ring"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php 
 include('footer.php');
?>




<script>
    var Calendar = function(t) {
    this.divId = t.RenderID ? t.RenderID : '[data-render="calendar"]', this.DaysOfWeek = t.DaysOfWeek ? t.DaysOfWeek : ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"], this.Months = t.Months ? t.Months : ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
    var e = new Date;
    this.CurrentMonth = e.getMonth(), this.CurrentYear = e.getFullYear();
    var r = t.Format;
    this.f = "string" == typeof r ? r.charAt(0).toUpperCase() : "M"
};
Calendar.prototype.nextMonth = function() {
    11 == this.CurrentMonth ? (this.CurrentMonth = 0, this.CurrentYear = this.CurrentYear + 1) : this.CurrentMonth = this.CurrentMonth + 1, this.divId = '[data-active="false"] .render', this.showCurrent()
}, Calendar.prototype.prevMonth = function() {
    0 == this.CurrentMonth ? (this.CurrentMonth = 11, this.CurrentYear = this.CurrentYear - 1) : this.CurrentMonth = this.CurrentMonth - 1, this.divId = '[data-active="false"] .render', this.showCurrent()
}, Calendar.prototype.previousYear = function() {
    this.CurrentYear = this.CurrentYear - 1, this.showCurrent()
}, Calendar.prototype.nextYear = function() {
    this.CurrentYear = this.CurrentYear + 1, this.showCurrent()
}, Calendar.prototype.showCurrent = function() {
    this.Calendar(this.CurrentYear, this.CurrentMonth)
}, Calendar.prototype.checkActive = function() {
    1 == document.querySelector(".months").getAttribute("class").includes("active") ? document.querySelector(".months").setAttribute("class", "months") : document.querySelector(".months").setAttribute("class", "months active"), "true" == document.querySelector(".month-a").getAttribute("data-active") ? (document.querySelector(".month-a").setAttribute("data-active", !1), document.querySelector(".month-b").setAttribute("data-active", !0)) : (document.querySelector(".month-a").setAttribute("data-active", !0), document.querySelector(".month-b").setAttribute("data-active", !1)), setTimeout(function() {
        document.querySelector(".calendar .header").setAttribute("class", "header active")
    }, 200), document.querySelector("body").setAttribute("data-theme", this.Months[document.querySelector('[data-active="true"] .render').getAttribute("data-month")].toLowerCase())
}, Calendar.prototype.Calendar = function(t, e) {
    "number" == typeof t && (this.CurrentYear = t), "number" == typeof t && (this.CurrentMonth = e);
    var r = (new Date).getDate(),
        n = (new Date).getMonth(),
        a = (new Date).getFullYear(),
        o = new Date(t, e, 1).getDay(),
        i = new Date(t, e + 1, 0).getDate(),
        u = 0 == e ? new Date(t - 1, 11, 0).getDate() : new Date(t, e, 0).getDate(),
        s = "<span>" + this.Months[e] + " &nbsp; " + t + "</span>",
        d = '<div class="table">';
    d += '<div class="row head">';
    for (var c = 0; c < 7; c++) d += '<div class="cell">' + this.DaysOfWeek[c] + "</div>";
    d += "</div>";
    for (var h, l = dm = "M" == this.f ? 1 : 0 == o ? -5 : 2, v = (c = 0, 0); v < 6; v++) {
        d += '<div class="row">';
        for (var m = 0; m < 7; m++) {
            if ((h = c + dm - o) < 1) d += '<div class="cell disable">' + (u - o + l++) + "</div>";
            else if (h > i) d += '<div class="cell disable">' + l++ + "</div>";
            else {
                d += '<div class="cell' + (r == h && this.CurrentMonth == n && this.CurrentYear == a ? " active" : "") + '"><span>' + h + "</span></div>", l = 1
            }
            c % 7 == 6 && h >= i && (v = 10), c++
        }
        d += "</div>"
    }
    d += "</div>", document.querySelector('[data-render="month-year"]').innerHTML = s, document.querySelector(this.divId).innerHTML = d, document.querySelector(this.divId).setAttribute("data-date", this.Months[e] + " - " + t), document.querySelector(this.divId).setAttribute("data-month", e)
}, window.onload = function() {
    var t = new Calendar({
        RenderID: ".render-a",
        Format: "M"
    });
    t.showCurrent(), t.checkActive();
    var e = document.querySelectorAll(".header [data-action]");
    for (i = 0; i < e.length; i++) e[i].onclick = function() {
        if (document.querySelector(".calendar .header").setAttribute("class", "header"), "true" == document.querySelector(".months").getAttribute("data-loading")) return document.querySelector(".calendar .header").setAttribute("class", "header active"), !1;
        var e;
        document.querySelector(".months").setAttribute("data-loading", "true"), this.getAttribute("data-action").includes("prev") ? (t.prevMonth(), e = "left") : (t.nextMonth(), e = "right"), t.checkActive(), document.querySelector(".months").setAttribute("data-flow", e), document.querySelector('.month[data-active="true"]').addEventListener("webkitTransitionEnd", function() {
            document.querySelector(".months").removeAttribute("data-loading")
        }), document.querySelector('.month[data-active="true"]').addEventListener("transitionend", function() {
            document.querySelector(".months").removeAttribute("data-loading")
        })
    }
};
</script>

    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="./floating-labels.js"></script>
    </body>
</html>

<?php 
    }
    else{
        echo "ERROR 404";
    } 
?>