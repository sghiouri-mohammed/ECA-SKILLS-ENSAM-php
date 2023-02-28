<?php
    session_start();
    include('endsession.php');
?>

<?php
    include('connexion.php');

    $lcstu=$ca->prepare("SELECT * FROM courses ");
    $lcstu->execute();
    $listescoursetu=$lcstu->fetchAll();
    $nbrcourses=count($listescoursetu);

    $ls=$ca->prepare("SELECT * FROM newstudents ");
    $ls->execute();
    $listestuden=$ls->fetchAll();
    $nbrstu=count($listestuden);

    $query=$ca->prepare("SELECT ImageName FROM `CoursEtudiant` ");
    $query->execute();
    $courses=$query->fetchAll();
    $vare=0;
    foreach ($courses as $kl)
    {
      if ( $kl['ImageName'] != 'None' )
      {
          $vare++;
      }
    }

?>

<?php
if ($_SESSION['etu_or_instr']=='instructeur')
{
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/styles.css?v=<?php echo time(); ?>">
        <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css">
        <link rel="stylesheet" href="css/styleda.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="css/bootstrap.min.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="css/floating-labels.css">
        
        <title>Dashboard</title>
    </head>
    <style>
        ol, ul {
            padding-left: 1rem;
        }
    </style>
    <body id="body-pd">
        <div class="l-navbar" id="navbar">
        <nav class="nav">
                <div>
                    <div class="nav__brand">
                        <ion-icon name="menu-outline" class="nav__toggle" id="nav-toggle"></ion-icon>
                        <a href="index.php" class="nav__logo">ECA Skills</a>
                    </div>
                    <div class="nav__list">
                        <a href="dashinst.php" class="nav__link active">
                            <ion-icon name="home-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Dashboard</span>
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
                        <div  class="nav__link collapse1">
                            <ion-icon name="folder-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Students</span>

                            <ion-icon name="chevron-down-outline" class="collapse__link"></ion-icon>

                            <ul class="collapse__menu">
                                <a href="ListeEtudiants.php" class="collapse__sublink">List</a>
                                <a href="ListeSessions.php" class="collapse__sublink">Sessions</a>
                                <a href="ApprouvEtu.php" class="collapse__sublink">Manage sutudents</a>
                                <a href="ApprouvCertif.php" class="collapse__sublink">Manage Certifications</a>
                            </ul>
                        </div>
                        
                    </div>
                </div>

                <a href="logout.php" class="nav__link">
                    <ion-icon name="log-out-outline" class="nav__icon"></ion-icon>
                    <span class="nav__name">Log Out</span>
                </a>
            </nav>
        </div>
        <section>
            <h2 style="margin-left: 1%;">Dashboard </h2>
        </section>

        <?php include('ProfileMenu.php'); ?>

        <section id="hero">
            <div class="container-xl">
                <div class="row gy-4">
                    <div class="col-lg-8 ">

                        <div class="post-tabs rounded bordered row gy-8 ml-3">
                            <h3 class="text-center">Progress</h3>
                            <div class="tab-content" id="postsTabContent">
                                <div class="lds-dual-ring"></div>
                                    <div class="tab-pane fade show active" id="popular" aria-labelledby="popular-tab"
                                        role="tabpanel">
                                    </div>
                                </div>
                            
                                <div class="post-tabs rounded bordered col-md-3 ml-3 table1">
                                <h4 class="titre text-center">Total of students</h4>
                                <h3 class="text-center"><?php echo $nbrstu ?></h3>
                                <div class="tab-content" id="postsTabContent">
                                    <div class="lds-dual-ring"></div>
                                        <div class="tab-pane fade show active" id="popular" aria-labelledby="popular-tab"
                                            role="tabpanel">
                                        </div>
                                    </div>                             
                                </div>

                                <div class="post-tabs rounded bordered col-md-3 ml-3 table1">
                                <h4 class="titre text-center">Total of mandatory courses</h4>
                                <h3 class="text-center"><?php echo $nbrcourses ?></h3>
                                <div class="tab-content" id="postsTabContent">
                                    <div class="lds-dual-ring"></div>
                                        <div class="tab-pane fade show active" id="popular" aria-labelledby="popular-tab"
                                            role="tabpanel">
                                        </div>
                                    </div>                               
                                </div>

                                <div class="post-tabs rounded bordered col-md-3 ml-3 table1">
                                <h4 class="titre text-center">Total of certifications</h4>
                                <h3 class="text-center"><?php echo $vare ?></h3>
                                <div class="tab-content" id="postsTabContent">
                                    <div class="lds-dual-ring"></div>
                                        <div class="tab-pane fade show active" id="popular" aria-labelledby="popular-tab"
                                            role="tabpanel">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post-tabs rounded bordered row gy-8 ml-3 tab5">
                            <h3 class="text-center">Add a Course</h3>
                            <div class="spacer padding-30" data-height="50"></div>
                            <form method="POST">
                                <div class="row">
                                  <div class="form-group col-xs-12 floating-label-form-group">
                                    <label for="title">Title</label>
                                    <input class="form-control" type="text" name="NomCours" placeholder="Title">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="form-group col-xs-4 floating-label-form-group">
                                    <label for="University">University</label>
                                    <input class="form-control" type="text" name="Uni" placeholder="University">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="form-group col-xs-8 floating-label-form-group">
                                    <label for="Link">Link</label>
                                    <input class="form-control" type="text" name="Link" placeholder="Link">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="form-group col-xs-8 floating-label-form-group">
                                    <label for="Learned Skills">Learned Skills</label>
                                    <input class="form-control" type="text" name="skill" placeholder="Learned Skills">
                                  </div>
                                </div>
                                <div class="text-center">
                                   <input class="bouton" type="submit" value="Submit"> 
                                </div>
                                
                            </form>
                            <?php include('AddCourse.php') ?>
                            
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

<?php }
else{
  echo "ERROR 404";
}

?>
