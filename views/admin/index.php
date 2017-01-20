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
                    <h1 class="slogan">Административная панель</h1>
                    <span style="font-size: 16px; font-weight: 800;"><?php echo $aboutMeList['site_name'];?></span>
                </div>
                <!-- Menu -->
                <div class="menu">
                    <div class="toggle-btn">
                        <span class="lines"></span>
                    </div>
                    <ul class="nav">
                        <li class="active">
                            <a href="#about">Информация обо мне</a>
                        </li>
                        <li>
                            <a href="#services">Спецификация</a>
                        </li>
                        <li>
                            <a href="#blog">Управления слайдером</a>
                        </li>
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
                    <div class="col-sm-6 text-left">
                        <h1 style="color: black; font-size: 28px;">Панель администратора</h1>
                    </div>
                    <div class="col-sm-6 text-right">
                        <span>Привет, admin! </span><a  class="btn btn-danger" href="/logout">Выход</a>
                    </div>
                    <br><br><br>
                    <div class="col-sm-12 wrap_form">
                        <h4>Редактировать данные обо мне</h4>
                        <div id="results"></div>
                        <br>
                        <form action="javascript:void(null);" method="post" id="aboutMe"  onsubmit="call()">
                            <div class="col-sm-6 text-left">

                                    <label for="site_name">Название сайта:</label><br>
                                    <input  class="full form-control" type="text" name="site_name" value="<?php echo $aboutMeList['site_name'];?>" placeholder="">


                                    <label for="description_site">Описание сайта:</label><br>
                                    <input class="full form-control" type="text" name="description_site" value="<?php echo $aboutMeList['description'];?>" placeholder="">


                                    <label for="h1_site">Заголовок сайта:</label><br>
                                    <input class="full form-control" type="text" name="h1_site" value="<?php echo $aboutMeList['h1'];?>" placeholder="">
                            </div>
                            <div class="col-sm-6 text-left">
                                <label for="content_site">Обо мне</label><br>
                                <textarea name="content_site" id="" cols="30" rows="10"><?php echo $aboutMeList['contents'];?></textarea><br><br>
                                <input type="submit" class="btn btn-danger" name="submit" value="Сохранить">
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
</section>
<br><br>
<!-- end About section -->
<section id="services">
    <div class="about-background">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-9 col-sm-offset-3 col-md-8 col-md-offset-3 aboutWrapper">
                    <div class="col-sm-12 wrap_form">
                        <h4>Редактировать данные о спецификации</h4>
                        <table class="table table-bordered">
                            <tr class="table_header">
                                <td>Название</td>
                                <td>Описание</td>
                                <td>Редактировать</td>
                            </tr>
                            <?php foreach ($specificationList as $specificationItem){?>
                            <tr>
                                <td><?php echo $specificationItem['title_specification'];?></td>
                                <td><?php echo $specificationItem['content_specification'];?></td>
                                <td style="text-align: center; font-size: 24px;"><a href="/admin/editService/<?php echo $specificationItem['id'];?>"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                            </tr>
                            <?php }?>
                        </table>
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
</section>
<br><br>
<section id="blog">
    <div class="about-background">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-9 col-sm-offset-3 col-md-8 col-md-offset-3 aboutWrapper">
                    <div class="col-sm-12 wrap_form">
                        <h4>Управления слайдером</h4><br>
                        <a href="/admin/addSlide" class="btn btn-danger">Добавить слайд</a><br><br>
                        <table class="table table-bordered">
                            <tr class="table_header">
                                <td>Id</td>
                                <td>Название</td>
                                <td>Описание</td>
                                <td>Изображение</td>
                                <td>Действие</td>
                            </tr>
                            <?php foreach ($slideList as $slideItem){?>
                            <tr>
                                <td><?php  echo $slideItem['id'] ?></td>
                                <td><?php  echo $slideItem['title_slide'] ?></td>
                                <td><?php  echo $slideItem['description_slide'] ?></td>
                                <td><img src="/template/img/<?php  echo $slideItem['image_first'] ?>" width="100px"></td>
                                <td><a href="/admin/slideEdit/<?php  echo $slideItem['id'] ?>">Редактировать</a>/<a href="/admin/deleteSlide/<?php  echo $slideItem['id'] ?>">Удалить</a></td>
                            </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
</section>
<!-- Contact section -->
<section id="contact">
    <div class="contact-background">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-9 col-sm-offset-3 contactWrapper">
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
        var msg   = $('#aboutMe').serialize();
        $.ajax({
            type: 'POST',
            url: 'aboutMeForm.php',
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


