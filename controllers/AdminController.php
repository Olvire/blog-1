<?php

class AdminController extends AdminBase {


    public function actionIndex(){
        if (isset($_SESSION['user'])){
            $aboutMeList = AboutMe::checkData();
            $specificationList = Specification::checkSpecification();
            $slideList =Admin::getSlideList();
        }
        else{
            header("Location: /login");
        }

        require_once ROOT.'/views/admin/index.php';
        return true;
    }

    public function actionEditService($id){
        $aboutMeList = AboutMe::checkData();
        $serviceData = Admin::EditService($id);
        if (isset($_POST['submit'])){
            $title_specification = $_POST['title_specification'];
            $content_specification = $_POST['content_specification'];
            $id =$_POST['id'];
            Admin::SpecificationForm($title_specification, $content_specification, $id);
            header("Location:/admin");
        }

        require_once ROOT.'/views/admin/editservice.php';
        return true;
    }


    public function actionAboutMeForm(){
            $site_name = $_POST['site_name'];
            $description_site = $_POST['description_site'];
            $h1_site = $_POST['h1_site'];
            $content_site = $_POST['content_site'];

            Admin::UpdateAboutMe($site_name, $description_site, $h1_site, $content_site);
            echo 'Спасибо! Данные успешно обновлены! Изменения ввойдут в силу после перезагрузки страницы.';

        return true;

    }


    public function actionLogin(){
        if (isset($_SESSION['user'])){
            header("Location: /admin");
        }

        $email ='';
        $password = '';

        $dataBase = User::checkBase();

        if (isset($_POST['submitLogin'])){
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;
            //проверка наличия в базе введенных данных

            if ($email == $dataBase['email'] && $password == $dataBase['password']){
                $_SESSION['user'] = 1;
                header("Location: /admin");
            }else{
                //если данные правильны запоминаем в сесию и переадресовуем в кабинет
                $errors[] = 'Email или пароль не верный';
            }
        }


        require_once ROOT.'/views/admin/login.php';
        return true;
    }

    public function actionLogout(){

        session_start();
        unset($_SESSION['user']);
        header("Location: /login");

    }

    public function actionNewsList($page =1){
        $total = Admin::getTotalNews();
        $newsList = Admin::getNewsList($page);
        $pagination = new Pagination($total, $page, Admin::SHOW_BY_DEFAULT, 'page-');
        require_once ROOT.'/views/admin/newsList.php';
        return true;

    }

    public function actionOprosList($page =1){
        $total = Admin::getTotalOpros();
        $oprosList = Admin::getOprosList($page);
        $pagination = new Pagination($total, $page, Admin::SHOW_BY_DEFAULT, 'page-');
        require_once ROOT.'/views/admin/oprosList.php';
        return true;

    }

    public function actionMessageList($page =1){
        $total = Admin::getTotalMessage();
        $messageList = Admin::getMessageList($page);
        $pagination = new Pagination($total, $page, Admin::SHOW_BY_DEFAULT, 'page-');
        require_once ROOT.'/views/admin/messageList.php';
        return true;
    }

    public function actionNewsListEdit($id){
        $aboutMeList = AboutMe::checkData();
        $newsItem = Blog::getItemById($id);
        if (isset($_POST['submit'])){
            $title_Item = $_POST['title_Item'];
            $alias = $_POST['alias'];
            $description_Item = $_POST['description_Item'];
            $h2_Item = $_POST['h2_Item'];
            $content_Item = $_POST['content_Item'];
            $status = $_POST['status'];
            $long_content = $_POST['long_content'];
            if (Blog::saveItem($id, $title_Item, $alias, $description_Item, $h2_Item, $content_Item, $status, $long_content)){
                if (is_uploaded_file($_FILES["file"]["tmp_name"])){
                    move_uploaded_file($_FILES["file"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'].'/template/images/'.$_FILES["file"]["name"]);
                    $image =$_FILES["file"]["name"];
                    Blog::editImage($id, $image);

                }
                header("Location: /admin/news");
            }

        }

        require_once ROOT.'/views/admin/editNews.php';
        return true;
    }

    public function actionEditOpros($id){
        $aboutMeList = AboutMe::checkData();
        $oprosItem = Opros::getOprosItemById($id);
        if (isset($_POST['submit'])){
            $title_opros = $_POST['title_opros'];
            $category_opros = $_POST['category_opros'];
            $content_opros = $_POST['content_opros'];
            $h1_opros = $_POST['h1_opros'];
            $status_opros = $_POST['status_opros'];
            $description_opros = $_POST['description_opros'];
            if (Opros::saveItem($id, $title_opros, $category_opros, $content_opros, $h1_opros, $description_opros, $status_opros )){
                if (is_uploaded_file($_FILES["file"]["tmp_name"])){
                    move_uploaded_file($_FILES["file"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'].'/template/images/'.$_FILES["file"]["name"]);
                    $image =$_FILES["file"]["name"];
                    Opros::editImage($id, $image);

                }
                header("Location: /admin/opros");
            }

        }

        require_once ROOT.'/views/admin/editOpros.php';
        return true;
    }

    public function actionAddNews(){
        $aboutMeList = AboutMe::checkData();
        if (isset($_POST['submit'])){
            if (is_uploaded_file($_FILES["file"]["tmp_name"])){
                move_uploaded_file($_FILES["file"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'].'/template/images/'.$_FILES["file"]["name"]);
                $nameImage = $_FILES["file"]["name"];
            }
            $image = $nameImage;
            $title_Item = $_POST['title_Item'];
            $alias = $_POST['alias'];
            $description_Item = $_POST['description_Item'];
            $h2_Item = $_POST['h2_Item'];
            $content_Item = $_POST['content_Item'];
            $status = $_POST['status'];
            $long_content = $_POST['long_content'];
            if (Blog::createItem($title_Item, $alias, $image, $description_Item, $h2_Item, $content_Item, $status, $long_content )){
                header("Location: /admin/news");
            }

        }
        require_once ROOT.'/views/admin/addNews.php';
        return true;
    }

    public function actionDeleteNews($id){
        Blog::deleteNews($id);
        header("Location: /admin/news");
        return true;
    }

    public function actionDeleteOpros($id){
        Opros::deleteOpros($id);
        header("Location: /admin/opros");
        return true;
    }

    public function actionAddOpros(){
        $aboutMeList = AboutMe::checkData();
        if (isset($_POST['submit'])){
            if (is_uploaded_file($_FILES["file"]["tmp_name"])){
                move_uploaded_file($_FILES["file"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'].'/template/images/'.$_FILES["file"]["name"]);
                $nameImage = $_FILES["file"]["name"];
            }
            $image_opros = $nameImage;
            $title_opros = $_POST['title_opros'];
            $category_opros = $_POST['category_opros'];
            $content_opros = $_POST['content_opros'];
            $h1_opros = $_POST['h1_opros'];
            $status_opros = $_POST['status_opros'];
            $description_opros = $_POST['description_opros'];
            if (Opros::createItem($title_opros, $category_opros, $content_opros, $image_opros, $h1_opros, $description_opros, $status_opros )){
                header("Location: /admin/opros");
            }

        }
        require_once ROOT.'/views/admin/addOpros.php';
        return true;
    }

    public function actionAddSlide(){
        $oprosList = Opros::getOprosList();
        if (isset($_POST['submit'])){
            if (is_uploaded_file($_FILES["image_first"]["tmp_name"])){
                move_uploaded_file($_FILES["image_first"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'].'/template/img/'.$_FILES["image_first"]["name"]);
                $nameImage = $_FILES["image_first"]["name"];
            }
            $image_first = $nameImage;
            $title_slide = $_POST['title_slide'];
            $description_slide = $_POST['description_slide'];
            $href = $_POST['href'];
            if (Admin::createSlide($title_slide, $description_slide, $image_first, $href)){
                header("Location: /admin");
            }
        }
        require_once ROOT.'/views/admin/addSlide.php';
        return true;
    }

    public function actionSlideEdit($id){
        $oprosList = Opros::getOprosList();
        $slideById = Admin::getSlideById($id);
        if (isset($_POST['submit'])){
            $title_slide = $_POST['title_slide'];
            $description_slide = $_POST['description_slide'];
            $href = $_POST['href'];
            if (Admin::saveSlide($id, $title_slide, $description_slide, $href)){
                if (is_uploaded_file($_FILES["image_first"]["tmp_name"])){
                    move_uploaded_file($_FILES["image_first"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'].'/template/img/'.$_FILES["image_first"]["name"]);
                    $image =$_FILES["image_first"]["name"];
                    Admin::editImage($id, $image);

                }
                header("Location: /admin");
            }

        }
        require_once ROOT.'/views/admin/slideEdit.php';
        return true;
    }

    public function actionDeleteSlide($id){
        Admin::deleteSlide($id);
        header("Location: /admin");
        return true;
    }


}