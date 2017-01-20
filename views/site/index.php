<!DOCTYPE html>
<html lang="ru" class="no-js" >
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
    <link href="/template/css/normalize.css" rel="stylesheet">
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
<!-- Sidebar -->
<div class="wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2 sidebar">
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2 sidebarWrapper">
                <!-- Avatar -->
                <img class="user-pic hidden-xs" src="/template/images/avatar.jpg" alt="">
                <div class="signature">
                    <span style="font-size: 16px; font-weight: 800;"><?php echo $aboutMeList['site_name'];?></span>
                    <h1 class="slogan" ><?php echo $aboutMeList['h1'];?></h1>

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

<!-- About section -->
<section id="about">
    <div class="about-background">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-4 col-md-7 col-md-offset-4 aboutWrapper">
                    <!-- Section Title -->
                    <div class="nav-extra hidden-xs">
                        <!-- Button Contact Modal -->
                        <a data-target="#callmeModal" data-toggle="modal" href="#" class="btn btn-default">
                            <i style="font-size: 18px; color:#2745b0" class="fa fa-envelope-o" aria-hidden="true"></i>
                        </a>
                        <!-- Button 'Hire me' -->
                        <a href="#contact" class="btn btn-info">Связатся со мной</a>
                    </div>
                    <div class="section-title">
                        <span><i class="fa fa-user" aria-hidden="true"></i></span><h2 class="blue">Обо мне</h2>
                    </div><!-- end Section Title -->
                    <span class="h1">Здравствуйте, меня зовут <strong>Владимир Коротин</strong> <br> Я Designer and <span class="bg-color">Front-end Developer</span></span>
                    <p><?php echo $aboutMeList['contents'];?></p>
                    <div class="skills">
                        <div class="slideshow" id="slideshow">
                            <ol class="slides">

                                <?php foreach ($slideList as $slideItem){?>
                                    <li <?php if ($slideItem['status'] =='1'){?> class="current" <?php } ?>>
                                        <div class="description">
                                            <h2><?php echo $slideItem['title_slide'] ?></h2>
                                            <p>
                                                <?php echo $slideItem['description_slide'] ?>
                                            </p>
                                        </div>
                                        <div class="tiltview col">
                                            <a href="<?php echo $slideItem['href'] ?>"><img src="/template/img/<?php echo $slideItem['image_first'] ?>"/></a>
                                        </div>
                                    </li>
                                <?php } ?>
                            </ol>
                        </div><!-- /slideshow -->
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
</section>
<!-- end About section -->

<!-- Services section -->
<section id="services">
    <div class="services-background">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-4 col-md-8 col-md-offset-4 servicesWrapper">
                    <!-- Section Title -->
                    <div class="section-title">
                        <span><i class="fa fa-wrench" aria-hidden="true"></i></span><h2 class="blue">Спецификация</h2>
                    </div><!-- end Section Title -->
                    <!-- Service box 1 -->
                    <?php foreach ($specificationList as $specificationItem){?>
                    <div class="service-box">
                        <div>
                            <?php echo $specificationItem['icon_specification'];?>
                        </div>
                        <div>
                            <h3><?php echo $specificationItem['title_specification'];?></h3>
                            <p><?php echo $specificationItem['content_specification'];?></p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
</section>
<!-- end Services section -->

<!-- Portfolio section -->
<section id="portfolio">
    <div class="portfolio-background">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-4 col-md-8 col-md-offset-4 portfolioWrapper">
                    <!-- Section Title -->
                    <div class="section-title">
                        <span><i class="fa fa-file-text-o" aria-hidden="true"></i></span><h2 class="blue">Опросные листы</h2>
                        <div class="portfolio-filter pull-right">
                            <ul>
                                <li class="btn btn-default filter active" data-filter="all">Все насосы</li><!--
                                    --><li class="btn btn-default filter" data-filter=".kanal">Канализация</li><!--
                                    --><li class="btn btn-default filter" data-filter=".water">Вода</li>
                                <li class="btn btn-default filter" data-filter=".nafta">Нафта</li>

                            </ul>
                        </div>
                    </div><!-- end Section Title -->
                    <div class="row">
                        <div id="mix-container">
                            <!-- Image 1 -->
                            <?php foreach ($oprosList as $oprosItem){ ?>
                            <div class="col-xs-12 col-sm-4 mix <?php echo $oprosItem['category_opros']?>">
                                <div class="imageWrapper">
                                    <a href="/opros/<?php echo $oprosItem['id']?>">
                                        <img src="/template/images/<?php echo $oprosItem['image_opros']?>" alt="<?php echo $oprosItem['title_opros']?>"><!-- Image 1 source -->
                                        <div class="imageHover">
                                            <div>
                                                <h3><?php echo $oprosItem['title_opros']?></h3>
                                                <span><?php echo $oprosItem['category_opros']?></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div><!-- end Inner row -->

                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
</section>
<!-- end Portfolio section -->

<!-- Blog section -->
<section id="blog">
    <div class="blog-background">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-4 col-md-6 col-md-offset-4 blogWrapper">
                    <!-- Section Title -->
                    <div class="section-title">
                        <span><i class="fa fa-newspaper-o" aria-hidden="true"></i></span><h2 class="blue">Блог</h2>
                    </div><!-- end Section Title -->
                    <!-- Blog Post 1 -->

                        <div class="blog-post equalheight" id="show">
                            <?php foreach ($blogList as $blogItem){?>
                                <div class="col-sm-12 col-md-4 col-lg-4 widget">
                                        <div class="blog-img">
                                            <img src="/template/images/<?php echo $blogItem['image'];?>" alt="">
                                            <span class="card-title post-ver-date"><span class="icon_calendar" aria-hidden="true"></span> February 15, 2016</span>
                                        </div>
                                        <div class="blog-dis">
                                            <h3><?php echo $blogItem['h2_Item'];?></h3>
                                            <p><?php echo $blogItem['content_Item'];?></p>
                                            <a href="/blog/<?php echo $blogItem['alias'];?>" class="btn btn-default">Читать дальше</a>
                                        </div>

                                </div>
                            <?php }?>
                        </div>
                    <div class="text-center ">
                        <a href="/blog" class="btn btn-info topblock">Смотреть все новости</a>

                    </div>

                </div>

            </div><!-- end row -->

        </div><!-- end container -->
    </div>
</section>
<!-- end Blog section -->

<!-- Contact section -->
<section id="contact">
    <div class="contact-background">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-4 col-md-8 col-md-offset-4 contactWrapper">
                    <!-- Section Title -->
                    <div class="section-title">
                        <span><i class="fa fa-comments" aria-hidden="true"></i></span><h2 class="blue">Контакты</h2>
                    </div><!-- end Section Title -->
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 contact-form">
                            <div class="widget">
                                <form method="post" id="formx" action="javascript:void(null);" onsubmit="call()">
                                    <div class="input-style">
                                        <div>
                                            <input class="form-control" type="text"  name="name" placeholder="Имя" required>
                                        </div>
                                        <div>
                                            <input class="form-control" type="email"  name="email" placeholder="E-Mail" required>
                                        </div>
                                        <div>
                                            <input class="form-control" type="text"  name="phone" placeholder="Телефон" required>
                                        </div>
                                    </div>
                                    <div class="text-style">
                                        <textarea class="form-control" name="message"  placeholder="Сообщения"></textarea>
                                    </div>
                                    <br>
                                    <input type="submit"  class="btn btn-info" name="submite" value="Отправить"><br><br>
                                        <div id="results"></div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 contact-info">
                            <div class="widget">
                                <ul>
                                    <li>
                                        <h3><span class="icon_pin" aria-hidden="true"></span> Address</h3>
                                        <p>121 King St, Melbourne VIC 3000</p>
                                    </li>
                                    <li>
                                        <h3><span class="icon_phone" aria-hidden="true"></span> Phone</h3>
                                        <p>+(987) 654 321 01</p>
                                    </li>
                                    <li>
                                        <h3><span class="icon_mail" aria-hidden="true"></span> Email</h3>
                                        <p>johnny.smith@domain.com</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- end Inner row -->
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
</section>
<!-- end Contact section -->
    <div class="empty"></div>
</div>
<!-- Footer -->
<footer class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-4 col-md-8 col-md-offset-4 footer-background">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 text-left">
                        Copyright &copy; 2016. All Right Reserved
                    </div>
                    <div class="col-xs-6 col-sm-6 text-right">
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
<script>
    new TiltSlider( document.getElementById( 'slideshow' ) );
    window.setInterval(function(){
        $('nav >.current').next().trigger('click');
        if($('nav > .current').next().index() == '-1'){
            $('nav > span').trigger('click');
        }
    }, 10000);
</script>
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
<script type="text/javascript" language="javascript">
    function call() {
        var msg   = $('#formx').serialize();
        $.ajax({
            type: 'POST',
            url: 'form.php',
            data: msg,
            success: function(data) {
                $('#results').html(data);
            },
            error:  function(xhr, str){
                alert('Возникла ошибка: ' + xhr.responseCode);
            }
        });

    }
</script>
</body>
</html>