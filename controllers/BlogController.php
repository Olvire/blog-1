<?php

    class BlogController{

        public function actionIndex($alias){
            $errorUrl = Blog::BlogUrl($alias);
            if (isset($errorUrl['alias'])){
            $aboutMeList = AboutMe::checkData();
            $blogItem = Blog::getItemByAlias($alias);
            require_once ROOT.'/views/blog/index.php';
            return true;
            }else{
                header("Location: /404.html");
            }
        }

        public function actionForm(){
            $contactName = $_POST['name'];
            $contactName = htmlspecialchars($contactName);
            $contactEmail = $_POST['email'];
            $contactEmail = htmlspecialchars($contactEmail);
            $contactPhone = $_POST['phone'];
            $contactPhone = htmlspecialchars($contactPhone);
            $contactMessage = $_POST['message'];
            $contactMessage = htmlspecialchars($contactMessage);
            $date = date("Y-m-d H:i:s");
            if (!empty($contactName) && !empty($contactEmail)&&!empty($contactPhone)) {
                $formDate = Contact::checkContact($contactName, $contactEmail, $contactPhone, $contactMessage, $date);
                echo 'Данные отправлены! Я обязательно свяжусь с Вами.';
            }
            return true;
        }
        public function actionBlog($page =1){
            $aboutMeList = AboutMe::checkData();
            $total = Admin::getTotalNews();
            $newsList = Blog::getNewsBlog($page);
            $pagination = new Pagination($total, $page, Admin::SHOW_BY_DEFAULT, 'page-');

            require_once ROOT.'/views/blog/blog.php';
            return true;
        }
    }