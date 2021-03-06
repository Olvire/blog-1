
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php echo $oprosItem['title_opros'];?></title>
    <meta name="description" content="<?php echo $aboutMeList['description'];?>">
    <!-- Favicon -->
    <link rel="shortcut icon" href="/template/images/favicon.png">
    <!-- ##### STYLESHEETS ##### -->
    <!-- Bootstrap -->
    <link href="/template/css/bootstrap.min.css" rel="stylesheet">
    <!-- Owl Carousel -->
    <link href="/template/css/owl.carousel.css" rel="stylesheet">
    <link href="/template/css/owl.theme.default.css" rel="stylesheet">
    <!-- Magnific popup -->
    <link href="/template/css/magnific-popup.min.css" rel="stylesheet">
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
        <div class="col-xs-12 col-sm-2 col-lg-2 sidebar">
            <div class="col-sm-2 col-lg-2 sidebarWrapper">
                <!-- Avatar -->
                <img class="user-pic hidden-xs" src="/template/images/avatar.jpg" alt="">
                <div class="signature">
                    <h1 class="slogan"><?php echo $aboutMeList['h1'];?></h1>
                    <span style="font-size: 16px; font-weight: 800;"><?php echo $aboutMeList['site_name'];?></span>
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
                            <a href="http://blog.local/#portfolio">Опросные листы</a>
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
                <div class="col-xs-12 col-sm-9 col-sm-offset-3 col-md-8 col-md-offset-3 aboutWrapper">
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
                        <h2><?php echo $oprosItem['h1_opros'];?></h2>
                    </div><!-- end Section Title -->

                    <div class="widget col-md-12">
                        <div class="col-sm-12 col-md-12 col-lg-7">
                            <img src="/template/images/<?php echo $oprosItem['image_opros'];?>" alt="<?php echo $oprosItem['h1_opros'];?>" width="100%">
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-5">

                            <p><br><br><hr><b>Возникли вопросы после прочтения статьи?<br> Вы можете получить бесплатную консультацию.
                                    <br> Заполните форму ниже и я обезательно свяжусь с Вами!</b> </p>
                            <hr>

                        </div>


                            <div class="col-md-12">
                                <br> <?php echo $oprosItem['content_opros'];?> <br>
                                </div>



                        <!-- end Skill 4 -->
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
</section>
<!-- end About section -->
<!-- Contact section -->
<section id="contact">
    <div class="contact-background">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-9 col-sm-offset-3 contactWrapper">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 contact-form">
                            <div class="widget">
                                <form method="post" id="formx" action="javascript:void(null);" onsubmit="call()">
                                    <div class="input-style">
                                        <div>
                                            <input class="form-control" type="text" id="name" name="name" placeholder="Имя">
                                        </div>
                                        <div>
                                            <input class="form-control" type="email" id="email" name="email" placeholder="E-Mail">
                                        </div>
                                        <div>
                                            <input class="form-control" type="text"  name="phone" placeholder="Телефон" required>
                                        </div>
                                    </div>
                                    <div class="text-style">
                                        <textarea class="form-control" name="message" id="message" placeholder="Сообщения"></textarea>
                                    </div>
                                    <input type="submit" id="submit" class="btn btn-info" name="submit" value="Отправить">
                                    <div id="results"></div>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 contact-info">
                            <div class="widget">
                                <div class="input-style">
                                    <div>
                                        <label for="type">Выберите тип насоса:</label><br>
                                        <select size="1" name="type">
                                            <option disabled>Выберите тип насоса</option>
                                            <option value="1">Horizontal inline centrifugal pump</option>
                                            <option selected value="2">Horizontal inline centrifugal pump</option>
                                            <option value="3">Vertical inline centrifugal pump </option>
                                            <option value="4">Vertical end suction centrifugal pump </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="input-style">
                                    <div>
                                        <input class="hidden" type="text" name="name_opros" value="<?php echo $oprosItem['h1_opros'];?>">
                                    </div>
                                </div>
                                <div class="input-style">
                                    <div>
                                        <label for="temperature">Введите температуру(max):</label><br>
                                        <input class="form-control" type="text" name="temperature" placeholder="">
                                    </div>
                                </div>
                                <div class="input-style">
                                    <div>
                                        <label for="pressure">Введите давления(max):</label><br>
                                        <input class="form-control" type="text" name="pressure" placeholder="">
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- end Inner row -->
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
</section>
<div class="empty"></div>
</div>
<!-- end Contact section -->
<!-- Footer -->
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
<script src="/template/js/jquery.min.js"></script>
<!-- Bootstrap js -->
<script src="/template/js/bootstrap.min.js"></script>
<!-- Retina Graphics -->
<script src="/template/js/retina.min.js"></script>
<!-- Magnific popup -->
<script src="/template/js/jquery.magnific-popup.min.js"></script>
<!-- Theme Plugins -->
<script src="/template/js/theme-plugins.min.js"></script>
<!-- Custom Scripts -->
<script src="/template/js/scripts.min.js"></script>
<script type="text/javascript" language="javascript">
    function call() {
        var msg   = $('#formx').serialize();
        $.ajax({
            type: 'POST',
            url: '/messageOpros.php',
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