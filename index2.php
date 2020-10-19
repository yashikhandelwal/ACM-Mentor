<?php
session_start();
if(!isset($_SESSION['username']))
  header('location:login.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MentorSwap</title>

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="shortcut icon" type="image/png" href="img/favi.png" />
</head>

<body>
  <!--Navigation bar-->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">ACM <span>SWAP</span></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#feature">Introduction</a></li>
          <li><a href="#work-shop">Sources</a></li>
          <li><a href="#courses">Projects</a></li>
          <li><a href="#pricing">Awards</a></li>
          <li class="dropdown">
             <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i>  <b><?php echo $_SESSION['username']  ?></b></a>
             <ul class="dropdown-menu">
                <li><a href="#">Points: <b><?php echo $_SESSION['Points']  ?></b></a></li>
                <li><a href="#">Leaderboard</a></li>
                <li><a href="#">Tests Completed</a></li>
              </ul>
          </li>
          <li class="btn-trial"><a href="logout.php">Log Out</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Navigation bar-->
  <!--Banner-->
  <div class="banner">
    <div class="bg-color">
      <div class="container">
        <div class="row">
          <div class="banner-text text-center">
            <div class="text-border">
              <h2 class="text-dec">ACM LEAGUE OF CODES</h2>
            </div>
            <div class="intro-para text-center quote">
              <p class="big-text">Learning Today . . . Leading Tomorrow.</p>
              <h4 style="color: white; font-family: Calibri;">Let us take you into a deeper experience, make a moment a lasting conveyable memory. Let us help build your tribe.</h4>
              <h2 style="color: white;">Mentored By Swapnil</h2>
              <a href="" class="btn get-quote" target="_blank"><h5 style="color: white;">Welcome <b><?php echo $_SESSION['username']  ?></b></h5></a>
            </div>
            <a href="#feature" class="mouse-hover">
              <div class="mouse"></div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Banner-->
  <!--Feature-->
  <section id="feature" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h1 style="font-family: Impact;">WHERE SHOULD I LEARN?</h1><br>
          <h4>When you want to learn web development, half the battle is figuring out where to start learning to code. You might have questions like:</h4><br>
          <p>
          	<ul>
          		<li>Where can I learn to code?</li>
                <li>What are the best online web development courses?</li>
                <li>Which platforms offer coding for beginners?</li>
                <li>What are the most important programming fundamentals to master?</li>
          	</ul>
          </p>
          <hr class="bottom-line">
        </div>
        <div class="feature-info">
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>Learning Technologies</h4>
                <p>1. Install VS Code or Sublime Text Editor.<br>
                   2. Start by learning HTML5 and CSS3. They're great introductory languages! My personal favorite place to start is <a href="https://www.w3schools.com/html/default.asp">W3 Schools</a> and <a href="https://www.codecademy.com/learn/learn-html"> Codeacademy</a>, but you can also check out the sources to learn HTML and CSS in the study material of ACM.
                </p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-css3"></i>
              </div>
            </div>
          </div>
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>Version Control Git</h4>
                <p>Git and GitHub are two of the coolest technologies around for developers.<br>You must have heard about Git and Github in your fresher year.But now you gotta master the git commands to for open source contribution.I'd recommend the free <a href="https://in.udacity.com/course/how-to-use-git-and-github--ud775-india">Git and Github Course</a> provided by Udacity.</p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-git"></i>
              </div>
            </div>
          </div>
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>Award Winning Design</h4>
                <p>
                	Well, to be honest with the award winning design, it will be the one CHOSEN BY ME.And I like clarity in the code.We are here to learn something and not just win some tees and a bit of cash isn't it? So let's focus on learning and acheiving our best. In doing so I can assure you, you'll be the one winning the title.
                </p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-trophy"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ feature-->

  <!--work-shop-->
  <section id="work-shop" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h1 style="font-family: Impact;">Sources</h1>
          <p></p>
          <hr class="bottom-line">
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="service-box text-center">
            <div class="icon-box">
              <i class="fa fa-html5 color-green"></i>
            </div>
            <div class="icon-text">
              <h4 class="ser-text">Learn HTML5/CSS3 and JS</h4>
              <button type="button" class="btn btn-green btn-lg" data-toggle="modal" data-target="#myModal">Open</button>

              <!-- Modal -->
              <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-lg">

                  <!-- Modal content no 1-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title text-center form-title">Tutorials for HTML5/CSS3 and JavaScript</h4>
                    </div>
                    <div class="modal-body padtrbl">
                       <div class="login-box-body">
                            <p class="login-box-msg">W3 Schools</p>
                            <p class="login-box-msg">Code Academy</p>
                            <p class="login-box-msg">Udacity</p>
                            <p class="login-box-msg">Udemy</p>
                       </div>
                    </div>
                   </div>

                </div>
              </div>
              <!--Modal Ends-->
            </div>
        </div>
    </div>
        <div class="col-md-4 col-sm-6">
          <div class="service-box text-center">
            <div class="icon-box">
              <i class="fa fa-html5 color-green"></i>
            </div>
            <div class="icon-text">
              <h4 class="ser-text">Learn PHP and Node.js</h4>
              <button type="button" class="btn btn-green btn-lg" data-toggle="modal" data-target="#myModal2">Open</button>

              <!-- Modal -->
              <div class="modal fade" id="myModal2" role="dialog">
                <div class="modal-dialog modal-lg">

                  <!-- Modal content no 1-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title text-center form-title">Tutorials for PHP and Node.js</h4>
                    </div>
                    <div class="modal-body padtrbl">
                       <div class="login-box-body">
                            <p class="login-box-msg">W3 Schools</p>
                            <p class="login-box-msg">Code Academy</p>
                            <p class="login-box-msg">Udacity</p>
                            <p class="login-box-msg">Udemy</p>
                       </div>
                    </div>
                   </div>

                </div>
              </div>
              <!--Modal Ends-->
            </div>
        </div>
    </div>
        <div class="col-md-4 col-sm-6">
          <div class="service-box text-center">
            <div class="icon-box">
              <i class="fa fa-html5 color-green"></i>
            </div>
            <div class="icon-text">
              <h4 class="ser-text">Learn Databases</h4>
              <button type="button" class="btn btn-green btn-lg" data-toggle="modal" data-target="#myModal3">Open</button>

              <!-- Modal -->
              <div class="modal fade" id="myModal3" role="dialog">
                <div class="modal-dialog modal-lg">

                  <!-- Modal content no 1-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title text-center form-title">Tutorials for SQL</h4>
                    </div>
                    <div class="modal-body padtrbl">
                       <div class="login-box-body">
                            <p class="login-box-msg">W3 Schools</p>
                            <p class="login-box-msg">Code Academy</p>
                            <p class="login-box-msg">Udacity</p>
                            <p class="login-box-msg">Udemy</p>
                       </div>
                    </div>
                   </div>

                </div>
              </div>
              <!--Modal Ends-->
            </div>
        </div>
    </div>
    </div>
  </section>
  <!--/ work-shop-->
  <!--Courses-->
  <section id="courses" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h1 style="font-family: Impact;">Projects and Assignments</h2><br>
          <p>Following are the list of Projects and Assignments with the specific deadlines.Shortlisting will be done on the basis of performance and punctual submissions.</p>
          <hr class="bottom-line">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/course01.png" style="height: 250px;" class="img-responsive">
            <figcaption>
              <h3>Assignment #1</h3>
              <p>Create your portfolio website.<br>(If already done, try to make it better)</p>
              <p>Deadline: Will be Updated soon.</p>
            </figcaption>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/course02.jpeg" style="height: 250px;" class="img-responsive">
            <figcaption>
              <h3>Assignment #2</h3>
              <p>Create a JavaScript quiz game that takes multiple answers and shows a result to the user.</p>
              <p>Deadline: Will be Updated soon.</p>
            </figcaption>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/course03.png" style="height: 250px;"  class="img-responsive">
            <figcaption>
              <h3>Assignment #3</h3>
              <p>BrBk- Break the Brick Game.</p>
              <p>Deadline: Will be Updated soon.</p>
            </figcaption>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/course04.PNG" style="height: 250px;"  class="img-responsive">
            <figcaption>
              <h3>Project #1</h3>
              <p>Create a video-streaming website of all fests of IIT(ISM).<br>
              <p>Use of JWPlayer is compulsory.
              <br>Also add a Search Bar with filter.</p>
              <p>Deadline: Will be Updated soon.</p>
            </figcaption>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/course05.PNG" style="height: 250px;"   class="img-responsive">
            <figcaption>
              <h3>Project #02</h3>
              <p>Create a Library Mangament System using SQL Database.</p>
              <p>Deadline: Will be Updated Soon</p>
            </figcaption>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/course06.jpg" style="height: 250px;" class="img-responsive">
            <figcaption>
              <h3>Project #3</h3>
              <p>Create an ISM version of OLX.com, that is, an E-commerce website where students can sell used items.</p>
              <p>Deadline: Take your time.<br>But attempt only if you are sure of relevant skills.</p>
            </figcaption>
          </figure>
        </div>
      </div>
    </div>
  </section>
  <!--/ Courses-->
  <!--Pricing-->
  <section id="pricing" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h1 style="font-family:impact;">Awards</h1>
          <p>One of YOU will get the chance to get certified from Microsoft Technology Associate Certification with internship letter from Foxmula pvt ltd.</p>
          <hr class="bottom-line">
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="price-table">
            <!-- Plan  -->
            <div class="pricing-head">
              <h4>Internship</h4>
              <span class="amount">MTA </span><p>Microsoft Technology Associate</p>
            </div>

            <!-- Plean Detail -->
            <div class="price-in mart-15">
              <div class="btn btn-bg green btn-block">Powered by Foxmula</div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="price-table">
            <!-- Plan  -->
            <div class="pricing-head">
              <h4>Prizes</h4>
              <p>Worth</p>
              <span class="fa fa-inr curency"></span><span class="amount">50,000</span>
            </div>

            <!-- Plean Detail -->
            <div class="price-in mart-15">
              <div class="btn btn-bg yellow btn-block">Powered by Foxmula</div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="price-table">
            <!-- Plan  -->
            <div class="pricing-head">
              <h4>Courses and Workshops</h4>
              <p>Worth</p>
              <span class="fa fa-inr curency"></span> <span class="amount">6000</span>
            </div>

            <!-- Plean Detail -->
            <div class="price-in mart-15">
              <div class="btn btn-bg red btn-block">Powered by Skillathon</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Pricing-->
  <!--Footer-->
  <footer id="footer" class="footer">
    <div class="container text-center">

      <h3>Apply Now !!</h3>

      <form class="mc-trial row">
        <div class="form-group col-md-3 col-md-offset-2 col-sm-4">
          <div class=" controls">
            <input name="name" placeholder="Enter Your Name" class="form-control" type="text">
          </div>
        </div>
        <!-- End email input -->
        <div class="form-group col-md-3 col-sm-4">
          <div class=" controls">
            <input name="EMAIL" placeholder="Enter Your email" class="form-control" type="email">
          </div>
        </div>
        <!-- End email input -->
        <div class="col-md-2 col-sm-4">
          <p>
            <button name="submit" type="submit" class="btn btn-block btn-submit">
            Submit <i class="fa fa-arrow-right"></i></button>
          </p>
        </div>
      </form>
      <!-- End newsletter-form -->
      <ul class="social-links">
        <li><a href="https://www.facebook.com/swaprap" target="_blank"><i class="fa fa-facebook fa-fw"></i></a></li>
        <li><a href="mailto:swapism7@gmail.com" target="_blank"><i class="fa fa-envelope fa-fw"></i></a></li>
        <li><a href="https://github.com/fswap" target="_blank"><i class="fa fa-github fa-fw"></i></a></li>
        <li><a href="https://www.linkedin.com/in/swapzism/" target="_blank"><i class="fa fa-linkedin fa-fw"></i></a></li>
      </ul>
      <div class="credits">
        Developer: Swapnil Narayan
      </div>
    </div>
  </footer>
  <!--/ Footer-->

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>
