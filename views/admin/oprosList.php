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


<!-- About section -->
<section id="about">
    <div class="about-background">
        <div class="container">
            <div class="row">
                <a href="/" class="btn btn-default">На сайт</a><a href="/admin/" class="btn btn-default">Панель администратора</a><br>
                <h2>Список опросных листов</h2><br>
                <a href="/admin/addOpros" class="btn btn-danger">Добавить опросный лист</a><br><br>
                <table class="table table-bordered">
                    <tr class="table_header">
                        <td>ID</td>
                        <td>Названия опросного листа</td>
                        <td>Категория</td>
                        <td>Управления</td>
                    </tr>
                    <?php foreach ($oprosList as $oprosItem) {?>
                        <tr>
                            <td><?php echo $oprosItem['id'];?></td>
                            <td><?php echo $oprosItem['h1_opros'];?></td>
                            <td><?php echo $oprosItem['category_opros'];?></td>
                            <td><a href="/admin/editOpros/<?php echo $oprosItem['id'];?>">Редактировать</a>/<a href="/admin/deleteOpros/<?php echo $oprosItem['id'];?>">Удалить</a></td>
                        </tr>
                    <?php } ?>
                </table>
                <?php echo $pagination->get();?>

            </div><!-- end row -->
        </div><!-- end container -->
    </div>
</section>


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

</body>
</html>


