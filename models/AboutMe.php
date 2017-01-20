<?php

    class AboutMe{

        public static function checkData(){

            $db = Db::getConnection();
            $sql = "select * from aboutme WHERE 1";

            $result = $db->query($sql);

            return $result->fetch();
        }

    }