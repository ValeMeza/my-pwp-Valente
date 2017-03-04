<!DOCTYPE html>
<html lang="en">
<head>
    <!-- The 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- My Custom CSS vmeza3@cnm.edu -->
    <link rel="stylesheet" href="css/style.css" type="text/css"/>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="js/javascript-events.js"></script>

    <!-- jQuery Form, Validate, Additional Methods -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/additional-methods.min.js" type="text/javascript"></script>

    <!-- Your JavaScript Form Validator -->
    <script src="js/form-validate.js"></script>

    <!-- Google reCAPTCHA -->
    <script src='https://www.google.com/recaptcha/api.js'></script>


    <!-- SwipeBox theme -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<!--    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
    <![endif]-->

    <title>Vale Por ABQ.</title>
</head>
<body class="sfooter">
<div class="sfooter-content">

    <!--begin header and navbar-->
    <header>
        <div class="container">
            <!--Begin the Bootstrap Navbar - see documentation: http://getbootstrap.com/components/#navbar -->
            <nav class="navbar navbar-inverse">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" >Vale Por ABQ.</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="https://github.com/ValeMeza">
                                <span class="fa-stack">
                                    <i class="fa fa-square-o fa-stack-2x"></i>
                                    <i class="fa fa-github-alt fa-stack-1x"> </i>
                                </span>
                            </a>
                        </li>
                        <li><a href="https://twitter.com/V_For_Valente">
                                <span class="fa-stack">
                                    <i class="fa fa-square-o fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x"></i>
                                </span>
                            </a>
                        </li>
                        <li><a href="https://www.linkedin.com/in/valente-meza-734202133/">
                                <span class="fa-stack">
                                    <i class="fa fa-square-o fa-stack-2x"></i>
                                    <i class="fa fa-linkedin fa-stack-1x"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </div>
    </header>

    <!--begin main page content-->
    <main>

        <div class="container">

            <!--begin welcome row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="grid">
                        <figure class="effect-valente">
                            <img src="images/rsz_img_0556.jpg" alt="rsz_img_0556" class="image-responsive"/>
                            <figcaption>
                                <h1>Vale <span>Valente</span></h1>
                                <p>After becoming a Web Developer I seek to change lives with my skills. I want to teach, learn and build my way to helping Albuquerque become a bigger tech hub for the world I am a Web Developer in the greater Albuquerque area<br>
                                <a href="https://twitter.com/V_For_Valente">
                                <span class="fa-stack">
                                    <i class="fa fa-square-o fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x"></i>
                                </span></p>
                            </figcaption>
                        </figure>
                        <!-- ... -->
                    </div>
                </div>
            </div>
            <!--begin display column row-->

            <!--begin contact column row-->
            <div class="row">
                <div class="col-md-8">
                    <div class="content-box">
                        <h3>Add link to GitHub</h3>
                        I'm sorry, Morty. It's a bummer. In reality you're as dumb as they come. Don't even trip about your pants, dawg. We got an extra pair right here. You're growing up fast, Morty. You're going into a great big thorn straight into my ass. I'm the Devil, what should I do when I fail? Give myself an ice cream? Aw, geez. Puh rum pum pow! Aw, c'mon Rick. That doesn't seem so bad. The fucking amish bitch shot me!
                    </div>
                </div>
                <div class="col-md-8">
                    <form id="contact-form" action="php/mailer.php" method="post">
                        <div class="content-box">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name or Company" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <input type="text" class="form control" id="subject" name="subject" placeholder="Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <div class="col-sm-10">
                                    <div class="input-group"></div>
                                    <textarea class="form-control" rows="4" name="message"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="g-recaptcha" data-sitekey="6LeqcRcUAAAAAOrSLzMxwLso7JRGZ9JSRDQjTsMP"></div>
                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">
                                <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                    <!--empty area for form error/success output-->
                    <div class="row">
                        <div class="col-xs-12">
                            <div id="output-area"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div><!--.sfooter-content-->

<!--begin footer content-->
<footer>
    <div class="container">
        &copy Valente Meza 2017
    </div>
</footer>
</body>
</html>