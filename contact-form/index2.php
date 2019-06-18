<?php
require_once './vendor/autoload.php';

$helperLoader = new SplClassLoader('Helpers', './vendor');
$mailLoader   = new SplClassLoader('SimpleMail', './vendor');

$helperLoader->register();
$mailLoader->register();

use Helpers\Config;
use SimpleMail\SimpleMail;

$config = new Config;
$config->load('./config/config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = stripslashes(trim($_POST['form-name']));
    $email   = stripslashes(trim($_POST['form-email']));
    $phone   = stripslashes(trim($_POST['form-phone']));
    $subject = stripslashes(trim($_POST['form-subject']));
    $message = stripslashes(trim($_POST['form-message']));
    $pattern = '/[\r\n]|Content-Type:|Bcc:|Cc:/i';

    if (preg_match($pattern, $name) || preg_match($pattern, $email) || preg_match($pattern, $subject)) {
        die("Header injection detected");
    }

    $emailIsValid = filter_var($email, FILTER_VALIDATE_EMAIL);

    if ($name && $email && $emailIsValid && $subject && $message) {
        $mail = new SimpleMail();

        $mail->setTo($config->get('emails.to'));
        $mail->setFrom($config->get('emails.from'));
        $mail->setSender($name);
        $mail->setSenderEmail($email);
        $mail->setSubject($config->get('subject.prefix') . ' ' . $subject);

        $body = "
        <!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
        <html>
            <head>
                <meta charset=\"utf-8\">
            </head>
            <body>
                <h1>{$subject}</h1>
                <p><strong>{$config->get('fields.name')}:</strong> {$name}</p>
                <p><strong>{$config->get('fields.email')}:</strong> {$email}</p>
                <p><strong>{$config->get('fields.phone')}:</strong> {$phone}</p>
                <p><strong>{$config->get('fields.message')}:</strong> {$message}</p>
            </body>
        </html>";

        $mail->setHtml($body);
        $mail->send();

        $emailSent = true;
    } else {
        $hasError = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!--- Basic Page Needs  -->
    <meta charset="utf-8">
    <title>RankWall | Tour Website</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Meta  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <link rel="stylesheet" href="assets/css/magnificpopup.css">
    <link rel="stylesheet" href="assets/css/jquery.mb.YTPlayer.min.css">
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/newstyle.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="assets/img/icon/favicon.ico">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>
    <!-- preloader area start -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>
    <!-- preloader area end -->
    <!-- header area start -->
    <header id="header">
        <div class="header-area">
            <div class="container">
                <div class="row">
                    <div class="menu-area">
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <div class="logo">
                                <a href="index.html"><img src="assets/img/icon/logo.png" alt="Zeedapp - App Landing Template"></a>
                            </div>
                        </div>
                        <div class="col-md-9 hidden-xs hidden-sm">
                            <div class="main-menu">
                                <nav class="nav-menu">
                                    <ul>
                                        <li class="active"><a href="#home">Home</a></li>
                                        <li><a href="#about">About</a></li>
                                        <li><a href="#feature">Features</a></li>
                                        <li><a href="#screenshot">Functionalities</a></li>
                                        <li><a href="#contact">Contact</a></li>
                                        <li><a href="https://rankwall.com" target="_blank" >Go back to RankWall</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xs-12 visible-sm visible-xs">
                            <div class="mobile_menu"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->
    <!-- slider area start -->
    <section id="home" class="slider-area background-video">
    <!-- Header section from deepali -->
     <!-- Header slider -->
     <div id="home">
        <!-- Slide 1 -->
        <div class="slide">
            <div class="background-img">
                <video id="myVideo" controls="" autoplay="" controlslist="nodownload">
                    <source src="assets/video/rankwall.mp4" type="video/mp4">
                    <source src="movie.ogg" type="video/ogg">
                </video>
                <br>
            </div>

            <div class="header-masc">
                <!-- Background animation -->
            </div>
        </div>
        <!-- Slide 2 -->

    </div>
    </section>
    
    <!-- about area start -->
    <section class="feature-area bg-gray ptb--100" id="about" style="padding-top: 10px; padding-bottom: 10px;">
    <div class="about-area ptb--100 " id="about">
        <div class="container">
            <div class="section-title">
                <h2>About RankWall</h2>
                <p>RankWall is a online community to express yourself and be a star by sharing your pictures, videos and jokes.</p>
            </div>
            <div class="row d-flex flex-center">
                <div class="col-md-6 col-sm-6 hidden-xs">
                    <div class="about-left-img">
                        <img src="assets/img/about/abt-left-img.png" alt="image">
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 d-flex flex-center">
                    <div class="about-content">
                        <p>We're proud to have a community where anyone can post a picture, video and joke and become famous. Rank posts and decide who get famous. Looking for a place to express your talent, business, lifestyle and other stuffs that interest you on the internet and get discovered by people from all over the world?. RankWall is the perfect place to be.</p>
                        <ul class="text-list">
                            <li><i class="fa fa-check"></i>Join millions of people in the RankWall community.</li>
                            <li><i class="fa fa-check"></i>Update your profile and add Friends.</li>
                            <li><i class="fa fa-check"></i>See a post you fancy? Like and get it noticed.</li>
                            <li><i class="fa fa-check"></i>Upload your pictures, videos and jokes.</li>
                            <li><i class="fa fa-check"></i>Invite friends to like your uploads. </li>
                            <li><i class="fa fa-check"></i>Get Ranked and Be a Star!!!</li>
                        </ul>
                        <strong>Use RankWall to:</strong>
                        <ul class="text-list">
                            <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Upload pictures, videos and jokes to the Public RankSpace. 
                         What you upload here can be seen and ranked by everyone.<i><b> Get noticed!</b></i></li>
                            <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Upload pictures, videos and jokes to the Private RankSpace.
                           What you upload here can be seen and ranked by your RankWall friends. <i><b>Join in the fun!</b></i></li>
                            <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>View pictures, videos and jokes in the Public RankList moving from Public RankSpace due to number of <i><b>Likes</b></i>
                                from RankWall members. Your Videos will appear here if the number of likes is in the top 100. <i><b>Get Famous!</b></i></li>
                            <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>View pictures, videos and jokes in the Private RankList moving from Private RankSpace due to number of <i><b>Likes</b></i>
                                from friends. Your Videos will appear here if the number of likes is in the top 10.<i><b> Be A Star!</b></i></li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- about area end -->
    <!-- feature area start -->
    <section class="feature-area bg-gray ptb--100" id="feature"  style="padding-top: 10px; padding-bottom: 10px;">
        <div class="container">
            <div class="section-title">
                <h2>Features</h2>
                <p>Some of the Features of RankWall</p>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="ft-content rtl">
                        <div class="ft-single">
                            <img src="assets/img/icon/feature/1.jpg" alt="icon">
                            <div class="meta-content">
                                <h2>Join & update Profile</h2>
                                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, iumod tempor incididunt</p> -->
                            </div>
                        </div>
                        <div class="ft-single">
                            <img src="assets/img/icon/feature/2.png" alt="icon">
                            <div class="meta-content">
                                <h2>Add Friends</h2>
                                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, iumod tempor incididunt</p> -->
                            </div>
                        </div>
                        <div class="ft-single">
                            <img src="assets/img/icon/feature/3.png" alt="icon">
                            <div class="meta-content">
                                <h2>Upload Pictures, Videos & Jokes</h2>
                                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, iumod tempor incididunt</p> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 hidden-sm col-xs-12">
                    <div class="ft-screen-img">
                        <img src="assets/img/mobile/ft-screen-img.png" alt="image">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="ft-content">
                        <div class="ft-single">
                            <img src="assets/img/icon/feature/4.png" alt="icon">
                            <div class="meta-content">
                                <h2>Invite Friends to Like your Posts</h2>
                                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, iumod tempor incididunt</p> -->
                            </div>
                        </div>
                        <div class="ft-single">
                            <img src="assets/img/icon/feature/5.png" alt="icon">
                            <div class="meta-content">
                                <h2>Get Ranked</h2>
                                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, iumod tempor incididunt</p> -->
                            </div>
                        </div>
                        <div class="ft-single">
                            <img src="assets/img/icon/feature/6.png" alt="icon">
                            <div class="meta-content">
                                <h2>Be A Star!!!</h2>
                                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, iumod tempor incididunt</p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature area end -->

    <!-- screen slider area start -->
    <section class="screen-area bg-gray ptb--100" id="screenshot">
        <div class="container">
            <div class="section-title">
                <h2>Functionalities of RankWall</h2>
                <p>Here are some of the functionalities of RankWall</p>
            </div>
            <img class="screen-img" src="assets/img/mobile/screen-slider.png" alt="mobile screen">
            <div class="screen-slider owl-carousel">
                <div class="single-screen">
                    <img src="assets/img/mobile/screen-slider/screen1.png" alt="mobile screen">
                </div>
                <div class="single-screen">
                    <img src="assets/img/mobile/screen-slider/screen2.png" alt="mobile screen">
                </div>
                <div class="single-screen">
                    <img src="assets/img/mobile/screen-slider/screen3.jpeg" alt="mobile screen">
                </div>
                <div class="single-screen">
                    <img src="assets/img/mobile/screen-slider/screen4.jpeg" alt="mobile screen">
                </div>
                <div class="single-screen">
                    <img src="assets/img/mobile/screen-slider/screen5.png" alt="mobile screen">
                </div>
                <div class="single-screen">
                    <img src="assets/img/mobile/screen-slider/screen6.png" alt="mobile screen">
                </div>
                <div class="single-screen">
                    <img src="assets/img/mobile/screen-slider/screen7.png" alt="mobile screen">
                </div>
                <div class="single-screen">
                    <img src="assets/img/mobile/screen-slider/screen8.png" alt="mobile screen">
                </div>
                <div class="single-screen">
                    <img src="assets/img/mobile/screen-slider/screen9.jpeg" alt="mobile screen">
                </div>
                <div class="single-screen">
                    <img src="assets/img/mobile/screen-slider/screen10.jpeg" alt="mobile screen">
                </div>
                <div class="single-screen">
                    <img src="assets/img/mobile/screen-slider/screen11.png" alt="mobile screen">
                </div>
                <div class="single-screen">
                    <img src="assets/img/mobile/screen-slider/screen12.png" alt="mobile screen">
                </div>
            </div>
        </div>
    </section>
    <!-- screen slider area end -->
    <?php if(!empty($emailSent)): ?>
        <div class="col-md-6 col-md-offset-3">
            <div class="alert alert-success text-center"><?php echo $config->get('messages.success'); ?></div>
        </div>
    <?php else: ?>
        <?php if(!empty($hasError)): ?>
        <div class="col-md-5 col-md-offset-4">
            <div class="alert alert-danger text-center"><?php echo $config->get('messages.error'); ?></div>
        </div>
        <?php endif; ?>
    <!-- contact area start -->
    <section class="contact-area ptb--100" id="contact"  style="padding-top: 10px; padding-bottom: 10px;">
        <div class="container">
            <div class="section-title">
                <h2>Contact Us</h2>
                <p>Get in Touch</p>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="contact-form">
                    <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" enctype="application/x-www-form-urlencoded" id="contact-form" class="form-horizontal" method="post">
            <div class="form-group">
                <label for="form-name" class="col-lg-2 control-label"><?php echo $config->get('fields.name'); ?></label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="form-name" name="form-name" placeholder="<?php echo $config->get('fields.name'); ?>" required>
                </div>
            </div>
            <div class="form-group">
                <label for="form-email" class="col-lg-2 control-label"><?php echo $config->get('fields.email'); ?></label>
                <div class="col-lg-10">
                    <input type="email" class="form-control" id="form-email" name="form-email" placeholder="<?php echo $config->get('fields.email'); ?>" required>
                </div>
            </div>
            <div class="form-group">
                <label for="form-phone" class="col-lg-2 control-label"><?php echo $config->get('fields.phone'); ?></label>
                <div class="col-lg-10">
                    <input type="tel" class="form-control" id="form-phone" name="form-phone" placeholder="<?php echo $config->get('fields.phone'); ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="form-subject" class="col-lg-2 control-label"><?php echo $config->get('fields.subject'); ?></label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="form-subject" name="form-subject" placeholder="<?php echo $config->get('fields.subject'); ?>" required>
                </div>
            </div>
            <div class="form-group">
                <label for="form-message" class="col-lg-2 control-label"><?php echo $config->get('fields.message'); ?></label>
                <div class="col-lg-10">
                    <textarea class="form-control" rows="3" id="form-message" name="form-message" placeholder="<?php echo $config->get('fields.message'); ?>" required></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                    <button type="submit" class="btn btn-default"><?php echo $config->get('fields.btn-send'); ?></button>
                </div>
            </div>
        </form>
        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="contact_info">
                        <div class="s-info">
                            <i class="fa fa-map-marker"></i>
                            <div class="meta-content">
                                <span>17 Bath Rd, Heathrow, Longford,Hounslow</span>
                                <span>TW7 1AB, UK</span>
                            </div>
                        </div>
                        <!-- <div class="s-info">
                            <i class="fa fa-mobile"></i>
                            <div class="meta-content">
                                <span>+0123 456 789 78</span>
                                <span>+0123 456 789 78</span>
                            </div>
                        </div> -->
                        <div class="s-info">
                            <i class="fa fa-paper-plane"></i>
                            <div class="meta-content">
                                <span>support@rankwall.com</span>
                                <span>info@rankwall.com</span>
                            </div>
                        </div>
                        <div class="c-social">
                            <ul>
                                <li><a href="https://www.facebook.com/Rankwallsocial/"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/Rankwallsocial"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/rankwall/"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="https://plus.google.com/u/0/108398145294319252153"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact area end -->
    <!-- footer area start -->
    <footer>
        <div class="footer-area">
            <div class="container">
                <p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://balogunridwan.com" target="_blank">Ridwan</a>
  <a href="https://rankwall.com" target="_blank" style="background: #9442a4; color: white; padding: 7px; border-radius: 6px; box-shadow: 0px 3px 13px black;">Go back to RankWall</a></p>
<p>
   
</p>
            </div>
        </div>
    </footer>
    <!-- footer area end -->

    <!-- Scripts -->
    <script src="assets/js/jquery-3.2.0.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/counterup.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script type="text/javascript" src="public/js/contact-form.js"></script>
    <script type="text/javascript">
        new ContactForm('#contact-form');
    </script>
</body>

</html>