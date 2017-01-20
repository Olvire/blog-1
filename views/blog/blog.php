<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php echo $aboutMeList['site_name'];?></title>
    <meta name="description" content="<?php echo $aboutMeList['description'];?>">
    <!-- Favicon -->
    <link rel="shortcut icon" href="/template/images/favicon.png">
    <!-- ##### STYLESHEETS ##### -->
    <link rel="stylesheet" type="text/css" href="/template/css/component.css" />
    <!-- Bootstrap -->
    <link href="/template/css/bootstrap.min.css" rel="stylesheet">
    <!-- Owl Carousel -->
    <!-- Icons Fonts -->
    <link href="/template/icons-fonts/style.css" rel="stylesheet">
    <!-- Preloader -->
    <link href="/template/css/preloader.min.css" rel="stylesheet">
    <!-- Main styles -->
    <link href="/template/css/styles.min.css" rel="stylesheet">

    <!-- Responsive styles -->
    <link href="/template/css/responsive.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link href="/template/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,800,700italic' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Preloader -->
<div class="preloader">
            <span class="loader">
                <span class="loader-inner"></span>
            </span>
</div>
<!-- end Preloader -->

<div class="right-br"></div>

<div class="left-br"></div>
<div class="fixed-left-contact">
</div>
<div class="fixed-right-socials">
    <ul class="list-unstiled">
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
    </ul>
    <p>+380&nbsp;951&nbsp;392310</p>
</div>
<div class="wrapper">
<!-- Sidebar -->
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2 sidebar">
            <div class="col-sm-3 col-md-2 col-lg-2 sidebarWrapper">
                <!-- Avatar -->
                <img class="user-pic" src="/template/images/avatar.jpg" alt="">
                <div class="signature">
                    <span style="font-size: 16px; font-weight: 800;"><?php echo $aboutMeList['site_name'];?></span>
                    <h1 class="slogan"><?php echo $aboutMeList['h1'];?></h1>

                </div>
                <!-- Menu -->
                <div class="menu">
                    <div class="toggle-btn">
                        <span class="lines"></span>
                    </div>
                    <ul class="nav">
                        <li class="active">
                            <a href="#about">Обо мне</a>
                        </li>
                        <li>
                            <a href="#services">Спецификация</a>
                        </li>
                        <li>
                            <a href="#portfolio">Опросные листы</a>
                        </li>
                        <li>
                            <a href="#blog">Блог</a>
                        </li>
                        <li>
                            <a href="#contact">Контакты</a>
                        </li>
                    </ul>
                </div><!-- end Menu -->
            </div>
        </div>
    </div><!-- end row -->
</div><!-- end container -->
<!-- end Sidebar -->


<!-- Blog section -->
<section id="blog">
    <div class="blog-background">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-4 col-md-8 col-md-offset-3 blogWrapper">

                    <div class="blog-post equalheight" id="show">
                        <?php foreach ($newsList as $blogItem){?>
                            <div class="col-sm-12 col-md-4 col-lg-12 wrap_form">
                                <div class=" col-lg-3 blog-img">
                                    <img src="/template/images/<?php echo $blogItem['image'];?>" alt="">
                                </div>
                                <div class="col-lg-9 blog-dis">
                                    <h3><?php echo $blogItem['h2_Item'];?></h3>
                                    <p><?php echo $blogItem['content_Item'];?></p>
                                    <a href="/blog/<?php echo $blogItem['alias'];?>" class="btn btn-default">Читать дальше</a>
                                </div>

                            </div>
                        <?php }?>
                    </div>
                    <?php echo $pagination->get();?>

                </div>

            </div><!-- end row -->

        </div><!-- end container -->
    </div>
</section>
<!-- end Blog section -->
    <div class="empty"></div>
</div>

<footer class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-9 col-sm-offset-3 footer-background">
                <div class="row">
                    <div class="col-sm-6 text-left">
                        Copyright &copy; 2016. All Right Reserved
                    </div>
                    <div class="col-sm-6 text-right">
                        By <a target="_blank" href="#">Website-master Studio</a>
                    </div>
                </div>

            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</footer>
<!-- end Footer -->


<!-- ##### JAVASCRIPTS ##### -->
<!-- jQuery Library -->
<script src="/template/js/modernizr.custom.js"></script>
<script src="/template/js/classie.js"></script>
<script src="/template/js/tiltSlider.js"></script>
<script src="/template/js/jquery.min.js"></script>
<!-- Bootstrap js -->
<script src="/template/js/bootstrap.min.js"></script>
<!-- Retina Graphics -->

<!-- Magnific popup -->

<!-- Theme Plugins -->
<script src="/template/js/theme-plugins.min.js"></script>
<!-- Custom Scripts -->
<script src="/template/js/scripts.min.js"></script>
<script src="/template/js/jquery.equalheights.js"></script>
<script>
    $('.blog-dis p').equalHeights();
    $('.blog-dis h3').equalHeights();
    $('.service-box').equalHeights();
</script>
</body>
</html>