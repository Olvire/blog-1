<?php

    class Contact{

        public static function checkContact($contactName, $contactEmail, $contactPhone, $contactMessage, $date){

            $db =Db::getConnection();

            $sql = 'Insert into contacts (name_contacts, email, phone, message, `date`) VALUES (:name_contacts, :email, :phone, :message, :date)';

            $result = $db->prepare($sql);
            $result->bindParam(':name_contacts', $contactName, PDO::PARAM_STR);
            $result->bindParam(':email', $contactEmail, PDO::PARAM_STR);
            $result->bindParam(':phone', $contactPhone, PDO::PARAM_STR);
            $result->bindParam(':message', $contactMessage, PDO::PARAM_STR);
            $result->bindParam(':date', $date, PDO::PARAM_STR);

            return $result->execute();
        }

        public static function checkMessageOpros($contactName, $contactEmail, $contactPhone, $contactMessage, $oprosType, $oprosName, $oprosTemperature, $oprosPressure, $date){

            $db =Db::getConnection();

            $sql = 'Insert into contacts (name_contacts, email, phone, message, oprosType, oprosName, oprosTemperature, oprosPressure, `date`) VALUES (:name_contacts, :email, :phone, :message, :oprosType, :oprosName, :oprosTemperature, :oprosPressure, :date)';

            $result = $db->prepare($sql);
            $result->bindParam(':name_contacts', $contactName, PDO::PARAM_STR);
            $result->bindParam(':email', $contactEmail, PDO::PARAM_STR);
            $result->bindParam(':phone', $contactPhone, PDO::PARAM_STR);
            $result->bindParam(':message', $contactMessage, PDO::PARAM_STR);
            $result->bindParam(':oprosType', $oprosType, PDO::PARAM_STR);
            $result->bindParam(':oprosName', $oprosName, PDO::PARAM_STR);
            $result->bindParam(':oprosTemperature', $oprosTemperature, PDO::PARAM_STR);
            $result->bindParam(':oprosPressure', $oprosPressure, PDO::PARAM_STR);
            $result->bindParam(':date', $date, PDO::PARAM_STR);
            return $result->execute();
        }


    }