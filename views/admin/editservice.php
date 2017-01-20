<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Административная панель</title>
    <meta name="description" content="Административная панель сайта Владимира Коротина">
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

</div>
<!-- Sidebar -->
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-2 col-lg-2 sidebar">
            <div class="col-sm-2 col-lg-2 sidebarWrapper">
                <!-- Avatar -->
                <img class="user-pic" src="/template/images/avatar.jpg" alt="">
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
                        <li>
                            <a href="/admin/news">Управления новостями</a>
                        </li>
                        <li>
                            <a href="/admin/opros">Управления опросами</a>
                        </li>
                        <li>
                            <a href="/admin/message">Управления сообщениями</a>
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
                    <a href="/" class="btn btn-default">На сайт</a><a href="/admin/" class="btn btn-default">Панель администратора</a><br><br>
                    <h4>Редактирование записи: <?php echo $serviceData['title_specification'];?></h4>
                    <div id="results"></div>
                    <form action="" method="post" id="specificationForm">
                        <input type="text" class="hidden" value="<?php echo $serviceData['id'];?>" name="id">
                        <label for="title_specification">Название спецификации</label><br>
                        <input  class="full form-control" type="text" name="title_specification" value="<?php echo $serviceData['title_specification'];?>" placeholder="">

                        <label for="content_specification">Описание спецификации</label><br>
                        <textarea name="content_specification"><?php echo $serviceData['content_specification'];?></textarea><br>
                        <input type="submit" class="btn btn-danger" name="submit" value="Сохранить">

                    </form>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
</section>

<!-- end Contact section -->
<!-- Footer -->
<footer class="copyright navbar-fixed-bottom">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-9 col-sm-offset-3 footer-background ">
                <div class="row">
                    <div class="col-sm-6 text-left">
                        Copyright &copy; 2016. All Right Reserved
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed With <i class="fa fa-heart-o red"></i> By <a target="_blank" href="#">Website-master Studio</a>
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
<script type="text/javascript" src="/template/js/tinymce/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector: 'textarea',
        paste_data_images: true,
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste jbimages"
        ],

        // ===========================================
        // PUT PLUGIN'S BUTTON on the toolbar
        // ===========================================

        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",

        // ===========================================
        // SET RELATIVE_URLS to FALSE (This is required for images to display properly)
        // ===========================================

        relative_urls: true

    });</script>


</body>
</html>