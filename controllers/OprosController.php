<?php

    class OprosController{

        public function actionIndex($id){
            $errorUrl = Opros::OprosUrl($id);
            if (isset($errorUrl['id'])){
                $aboutMeList = AboutMe::checkData();
                $oprosItem = Opros::getOprosItemById($id);
                require_once ROOT.'/views/opros/index.php';
                return true;
            }else{
                header("Location: /404.html");
            }


        }

        public function actionMessage(){

            $contactName = $_POST['name'];
            $contactName = htmlspecialchars($contactName);
            $contactEmail = $_POST['email'];
            $contactEmail = htmlspecialchars($contactEmail);
            $contactPhone = $_POST['phone'];
            $contactPhone = htmlspecialchars($contactPhone);
            $contactMessage = $_POST['message'];
            $contactMessage = htmlspecialchars($contactMessage);
            $oprosType = $_POST['type'];
            $oprosName = $_POST['name_opros'];
            $oprosName = htmlspecialchars($oprosName);
            $oprosTemperature = $_POST['temperature'];
            $oprosTemperature = htmlspecialchars($oprosTemperature);
            $oprosPressure = $_POST['pressure'];
            $oprosPressure = htmlspecialchars($oprosPressure);
            $date = date("Y-m-d H:i:s");
            if (!empty($contactName) && !empty($contactEmail)&&!empty($contactPhone)) {
                $formDate = Contact::checkMessageOpros($contactName, $contactEmail, $contactPhone, $contactMessage, $oprosType, $oprosName, $oprosTemperature, $oprosPressure, $date );
                echo 'Данные отправлены! Я обязательно свяжусь с Вами.';
            }
            return true;
        }

    }