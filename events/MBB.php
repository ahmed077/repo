<?php
session_start();
require_once '../connect.php';
if (isset($_SESSION['admin']) && intval($_SESSION['admin']) === 1) {
    $admin = true;
} else {
    $admin = false;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta property="og:image" content="http://www3.0zz0.com/2017/12/14/21/746492742.png" />
    <meta property="og:title" content="WELCOME TO IEEE PUA SB" />
    <meta property="og:description" content="Welcome to the world's largest professional organization dedicated to advancing technological innovation and excellence for the benefit of humanity." />
    <title>MBB'18 | IEEE PUA SB</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap.offcanvas.min.css">
    <link rel="stylesheet" href="../css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="../css/bootstrap-select.min.css">
    <link rel="stylesheet" href="../css/featherlight.min.css">
    <link rel="stylesheet" href="../css/hover.min.css">
    <link rel="stylesheet" href="../css/core.css">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/megaForm.css">

</head>

<body>
    <header id="masthead" class="site-header container">
        <div class="row">
            <div class="site-branding col-sm-3 col-md-3">
                <h1 class="site-title">
                    <a href="../index.html" title="Sekolah" rel="home">
							<img src="../images/ieee-logo.png" alt="IEEEPUAsb_logo">
						</a>
                </h1>
            </div>

            <div class="col-sm-9 col-md-9">
                <nav id="site-navigation" class="navbar">
                    <div class="navbar-header">
                        <div class="mobile-menu">
    <ul class="nav navbar-nav">
        <?php if ($admin) { ?>
            <li><a href="../logout.php" title="Logout"><i class="fa fa-sign-out fa-lg" aria-hidden="true"></i></a></li>
        <?php } else { ?>
        <li><a href="../sign-in.html" title="Sign In"><i class="fa fa-user-o fa-lg" aria-hidden="true"></i></a></li>
        <?php }?>
        <!--<li>-->
            <!--<a href="register.html" style="font-size: 18px" title="Register"><i class="fa fa-user-plus" aria-hidden="true"></i>-->
                                    <!--</a>-->
        <!--</li>-->
    </ul>
</div>
                        <button type="button" class="navbar-toggle offcanvas-toggle" data-toggle="offcanvas" data-target="#js-bootstrap-offcanvas">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
                    </div>
                    <div class="navbar-offcanvas navbar-offcanvas-touch navbar-offcanvas-right" id="js-bootstrap-offcanvas">
                        <button type="button" class="offcanvas-toggle closecanvas" data-toggle="offcanvas" data-target="#js-bootstrap-offcanvas">
								<i class="fa fa-times fa-2x" aria-hidden="true"></i>
							</button>
                        <ul class="nav navbar-nav">
                            <li><a href="../index.html">Home</a></li>
                            <li class="active"><a href="../events.html">Events</a></li>
                            <li><a href="../schedule.html">Schedule</a></li>
                            <li><a href="../board.html">Board</a></li>
                            <li><a href="../volunteers.html">Voluteers</a></li>
                            <li><a href="../gallery.html">gallery</a></li>
                            <li><a href="../committee.html">Committees</a></li>
                            <li><a href="../contact.html">Contact</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <?php if ($admin) { ?>
                                <li><a href="../logout.php" title="Logout"><i class="fa fa-sign-out fa-lg" aria-hidden="true"></i></a></li>
                            <?php } else {?>
                                <li><a href="../sign-in.html" title="Sign In"><i class="fa fa-user-o fa-lg" aria-hidden="true"></i></a></li>

                            <?php } ?>
    <!--<li><a href="../register.html" style="font-size: 18px" title="Register"><i class="fa fa-user-plus" aria-hidden="true"></i></a></li>-->
</ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <section class="events-single-hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-caption">
                    <span class="tag">MEGA</span>
                    <h2>
                        MEGA BRAIN TO BE '18
                    </h2>
                    <p>Bibliotheca Alexandrina | <span>23 , 24 , 25 JUNE 2018</span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="events-single-content">
        <div class="container">
            <div class="row">
                <div class="events-single-about col-md-6">
                    <h3>EVENT</h3>

                    <h4>Mission:</h4><br>
                    <p>Increasing the knowledge of the competitors' robotics and other team management skills.</p>

                    <h4>Goals:</h4><br>
                    <p>Each compotator learn:<br> 1-More about the robotics..<br>2-Team building skill.<br>3-Time management .</p>

                    <h4>More About this Event:</h4><br>
                    <p>In this event the branch set its mission to reach a high level of knowledge about robotics and teamwork, with groups of the most passionate students facing challenges and working hard to finally emerge with great tracking machines to show what they technically learned about the robotics technology, on the other hand, we gave a great interest to the side of the soft skills as putting them in teams to teach them about teamwork and time management and how to deal with others in your team and how to challenge other teams.</p>
                </div>

                <div class="events-single-Registeration col-md-4 col-md-offset-2">
                   <h3>Please Fill Form Below</h3>
                    <form method="POST" action="registration.php" id="megaReg">
                        <style>
                            .error {
                                border-color:red;
                            }
                        </style>
                     <div class="form-group">
                        <label for="">Name</label>
                        <input name = "name" type="text" data-check="[a-zA-Z][a-zA-Z ]{4,}" class="form-control" placeholder="Enter Your Name" autocomplete="off" >
                      </div>
                      <div class="form-group">
                        <label for="">Email address</label>
                        <input name = "email" type="email" data-check="^[_A-Za-z0-9-\\+]+(\\.[_A-Za-z0-9-]+)*
                        @[A-Za-z0-9-]+(\\.[A-Za-z0-9]+)*(\\.[A-Za-z]{2,})$;" class="form-control" id="exampleInputEmail3" placeholder="Email" autocomplete="off" >
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                      </div>
                      <div class="form-group">
                        <label for="">Mobile Number</label>
                        <input name="mobile" type="text" data-check="[0-9]{11}" class="form-control" placeholder="01xxxxxxxxx" autocomplete="off" >
                      </div>
                     <div class="form-group">
                        <label for="" class="datepick">Birthday Date</label>
                         <div class='input-group date' id='datetimepicker1'>
                            <input name="date" type='text' class="form-control date" placeholder="" required/>
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                     </div>
                      <div class="form-group">
                        <label for="">14 Digit National ID </label>
                        <input name = "nationalid" type="text" data-check="[0-9]{14}" class="form-control" placeholder="Enter your national ID" autocomplete="off" >
                      </div>
                      <select name = "educatio" class="form-control sel3" >
                          <option disabled="disabled" selected="selected" value="">Education level</option>
                          <option value = "High School">High School</option>
                          <option value = "Collage">Collage</option>
                          <option value = "Graduated">Graduated</option>
                      </select>
                      <div class="form-group">
                        <label for="">University / School</label>
                        <input name="university" type="text" pattern="[a-zA-Z][a-zA-Z ]{4,}" class="form-control" placeholder="University / School" autocomplete="off" >
                      </div>
                      <select name = "a_status" class="form-control sel" >
                          <option disabled="disabled" selected="selected" value="">Acadimic Status</option>
                          <option value="Undergraduate">Undergraduate</option>
                          <option value="Graduate">Graduate</option>
                      </select>
                      <select name="ieeemember" id="membershipS" class="form-control sel2" >
                          <option disabled="disabled" selected="selected" value="">IEEE Mebership</option>
                          <option value = "Member">Membership</option>
                          <option value = "Non-Member">Non-Membership</option>
                      </select>
                      <div class="form-group hide membershipid">
                        <label for="">Membership ID</label>
                        <input name="membership" type="text" data-check="[0-9]" class="form-control" placeholder="Membership ID" autocomplete="off" >
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                        <?php if ($admin) { ?>
                            <a href="getdata.php"><div class="btn btn-success">Get Data</div></a>
                            <span class="alert alert-success">
                                <?php
                                $query = $con->prepare("SELECT COUNT(`id`) FROM `registeration`");
                                $query->execute(array());
                                echo $query->fetch()['COUNT(`id`)'];
                                ?>
                            </span>
                        <?php } ?>
                    </form>
                </div>
            </div>
        </div>
    </section>
        <section class="contact-form" style="background-color:#fff;">
        <div class="container">
            <div id="mapmap" class="google-maps clearfix" style="padding:  0;">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1706.2069409499832!2d29.909723558331613!3d31.209260909612375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5c38a0562fe85%3A0xa34cc632ec23e7!2sBibliotheca+Alexandrina!5e0!3m2!1sen!2seg!4v1519791639941" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <footer id="colophon" class="site-footer">
        <div class="footer-info">
            <div class="container">
                <div class="row">
                    <div class="footer-logo col-md-3">
                        <a href="../index.html" title="Sekolah" rel="home">
								<img src="../images/ieee-logo.png"     alt="IEEEPUAsb_logo" title="IEEE PUA SB">
							</a>
                    </div>
                    <div class="footer-menu col-md-9">
                        <div class="footer-links">
                            <ul>
                                <li style="color: white">About</li>
                                <li><a href="../contact.html">Contact Us</a></li>
                                <li><a href="../committee.html">Committees</a></li>
                            </ul>
                        </div>
                        <div class="footer-links">
                            <ul>
                                <li style="color: white">Our Events</li>
                                <li><a href="../schedule.html">Schedule</a></li>
                                <li><a href="../gallery.html">Gallery </a></li>
                            </ul>
                        </div>
                        <div class="footer-links">
                            <ul>
                                <li style="color: white">Blog</li>
                                <li><a href="../news.html">Latest News</a></li>
                                <li><a href="../events.html">Events</a></li>
                            </ul>
                        </div>
                        <div class="footer-links">
                            <ul>
                                <li style="color: white">Our Team</li>
                                <li><a href="../board.html">Board</a></li>
                                <li><a href="../volunteers.html">Volunteers</a></li>
                            </ul>
                        </div>
                        <div class="footer-links">
                            <ul class="social">
                                <li class="facebook">
                                    <a href="https://www.facebook.com/IEEEPUA" target="_blank">
											 <i class="fa fa-facebook" aria-hidden="true"></i>
										    </a>
                                </li>
                                <li class="insta">
                                    <a href="https://www.instagram.com/ieeepuasb/" target="_blank">
											<i class="fa fa-instagram" aria-hidden="true"></i>
										</a>
                                </li>
                                <li class="youtube">
                                    <a href="https://www.youtube.com/channel/UCYQM_YQPQWen7LocvZ0XN2w" target="_blank">
											<i class="fa fa-play" aria-hidden="true"></i>
										</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <p>Copyrights &copy; IEEE PUA SB | Web Development Committee 2017</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="../js/jquery-3.2.0.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap-datepicker.min.js"></script>
    <script src="../js/bootstrap-select.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker1').datepicker();
        });
    </script>
    <script src="../js/featherlight.min.js"></script>
    <script src="../js/bootstrap.offcanvas.min.js"></script>
    <script src="../js/form-val.js"></script>
    <script src="../js/validation.js"></script>
    <script src="../js/main.js"></script>

</body>

</html>
