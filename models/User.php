<?php
 class User{

    public static function checkUserData($email, $password){

        $db =Db::getConnection();

        $sql = 'Select * from User WHERE email = :email and password = :password';
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->execute();

        $user= $result->fetchColumn();

        if ($user){
            return $user['id'];
        }
        return false;

    }

    public static function checkBase(){

        $db = Db::getConnection();

        $sql = 'Select * from User WHERE 1';
        $result = $db->query($sql);

        return $result->fetch();



    }






 }