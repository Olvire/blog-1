<?php

    class SiteController {

        public function actionIndex()
        {
            $aboutMeList = AboutMe::checkData();
            $slideList = Admin::getSlideList();
            $specificationList = Specification::checkSpecification();
            $blogList = Blog::latestItemBlog();
            $oprosList = Opros::getOprosList();

            require_once ROOT.'/views/site/index.php';
            return true;
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
    }